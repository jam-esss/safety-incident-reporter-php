<?php
/** @var Router $router
 * @var RouteGroup $group
 */

use App\Controllers\AuthController;
use League\Route\Router;
use League\Route\RouteGroup;
use App\Middleware\LoginMiddleware;

$router->group('/', function (RouteGroup $router) {
    include routes_dir("public.php");
});

$router->group('/client', function (RouteGroup $router) {
    include routes_dir("client.php");
})->middleware(new LoginMiddleware());
$router->get('/login', [AuthController::class, 'loginForm'])->setName('login');
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);