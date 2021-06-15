<?php

declare(strict_types = 1);

use Hyperf\HttpServer\Router\Router;
use Framework\Baseapp\Helpers\SysOperation;
use Framework\Baseapp\Helpers\ResourceContainer;
$resource = make(ResourceContainer::class);

$middlewareAuth = [
    App\Middleware\JWTAuthMiddleware::class,
];
$middlewareBackend = array_merge($middlewareAuth, [
    App\Middleware\BackendMiddleware::class,
    App\Middleware\PermissionMiddleware::class,
]);

Router::addRoute(['OPTIONS', 'GET', 'POST', 'HEAD'], '/', 'ModulePassport\Controllers\IndexController@index');
Router::get('/captcha', 'ModulePassport\Controllers\CommonController@captcha');
Router::get('/send-code', 'ModulePassport\Controllers\CommonController@sendCode');
Router::get('/validate-code', 'ModulePassport\Controllers\CommonController@validateCode');

Router::addRoute(['GET', 'POST'], '/logout', 'ModulePassport\Controllers\EntranceController@logout');

Router::post('/signup', 'ModulePassport\Controllers\EntranceController@signup');
Router::post('/signupin', 'ModulePassport\Controllers\EntranceController@signupin');
Router::post('/token', 'ModulePassport\Controllers\EntranceController@token');
Router::post('/signin', 'ModulePassport\Controllers\EntranceController@signin');

Router::get('/myinfo', 'ModulePassport\Controllers\UserController@myinfo', ['middleware' => $middlewareAuth]);
Router::post('/refresh_token', 'ModulePassport\Controllers\EntranceController@refreshToken', ['middleware' => $middlewareAuth]);
Router::get('/my-routes', 'ModulePassport\Controllers\EntranceController@myRoutes', ['middleware' => $middlewareBackend]);


$routes = $resource->initRouteDatas();
Router::addGroup('', function () use ($middlewareBackend, $routes) {
    foreach ($routes as $rCode => $rMethods) {
        foreach ($rMethods as $action => $data) {
            //echo implode(',', $data['method']) . '==' . $data['path'] . '==' . $data['callback'] . "\n";
            Router::addRoute($data['method'], $data['path'], $data['callback'], ['middleware' => $middlewareBackend, 'routeCode' => $data['code']]);
        }
    }
});

//User
/*Router::get('/users', 'ModulePassport\Controllers\UserController@index', ['middleware' => $middleware]);
Router::post('/users', 'ModulePassport\Controllers\UserController@store', ['middleware' => $middleware]);
Router::put('/users/{id:\d+}', 'ModulePassport\Controllers\UserController@update', ['middleware' => $middleware]);
Router::get('/users/{id:\d+}', 'ModulePassport\Controllers\UserController@show', ['middleware' => $middleware]);
Router::delete('/users/{id:\d+}', 'ModulePassport\Controllers\UserController@delete', ['middleware' => $middleware]);
Router::put('/users/{id:\d+}/roles', 'ModulePassport\Controllers\UserController@roles', ['middleware' => $middleware]);*/

/*Router::addRoute(['GET', 'POST', 'HEAD', 'PUT', 'DELETE'], '/backend/{controller}/{action}', function ($controller, $action) {
    $namespace = 'ModulePassport\Controllers\\';

    $className = $namespace . ucfirst($controller . "Controller");
    $tempObj = new $className();
    return call_user_func(array($tempObj, $action));
}, ['middleware' => $middleware]);*/
