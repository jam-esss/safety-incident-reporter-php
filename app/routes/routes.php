<?php
/** @var Router $router
 * @var RouteGroup $group
 */

use League\Route\Router;
use League\Route\RouteGroup;

$router->group('/', function (RouteGroup $router) {
    include routes_dir("public.php");
});

$router->group('/client', function (RouteGroup $router) {
    include routes_dir("client.php");
});