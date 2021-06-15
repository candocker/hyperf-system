<?php

declare(strict_types = 1);

namespace App\Middleware;

use Hyperf\Di\Annotation\Inject;
use Hyperf\Utils\Context;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Hyperf\Contract\ConfigInterface;
use ModulePassport\Services\UserPermissionService;

class BackendMiddleware implements MiddlewareInterface
{
    /**
     * @Inject
     * @var UserPermissionService
     */
    protected $userPermissionService;

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $user = $request->getAttribute('user');
        $service = $this->userPermissionService;
        $manager = $service->getManager($user, false);
        if (empty($manager)) {
            $service->throwException(403, '您没有操作权限nom');
        }
        $rolePermissions = $this->userPermissionService->getRolePermissions($manager);
        if (empty($rolePermissions)) {
            $service->throwException(403, '您没有操作权限norp');
        }
        $request = $request->withAttribute('manager', $manager);
        $request = $request->withAttribute('rolePermissions', $rolePermissions);
        Context::set(ServerRequestInterface::class, $request);

        return $handler->handle($request);
    }

}
