<?php

declare(strict_types = 1);

namespace App\Middleware;

use Hyperf\Di\Annotation\Inject;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Hyperf\Contract\ConfigInterface;
use ModulePassport\Services\UserPermissionService;

class PermissionMiddleware implements MiddlewareInterface
{
    /**
     * @Inject
     * @var UserPermissionService
     */
    protected $userPermissionService;

    /**
     * @Inject
     * @var ConfigInterface
     */
    protected $config;

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $service = $this->userPermissionService;
        //去掉路由参数
        $jwtResult = $request->getAttribute('jwtResult');
        if (empty($jwtResult) || !isset($jwtResult['user_id'])) {
            $service->throwException(400, 'Token有误');
        }
        $user = $service->getUserById($jwtResult['user_id']);
        if (!$user) {
            $service->throwException(401, 'Token未验证通过');
        }
        $request = $request->withAttribute('user', $user);
        Context::set(ServerRequestInterface::class, $request);
        return $handler->handle($request);
    }
}
