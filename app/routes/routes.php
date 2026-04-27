<?php
/** @var Router $router */

use League\Route\RouteGroup;
use League\Route\Router;

$router->group('', function (RouteGroup $router) {
    include routes_dir("public.php");
});

$router->group('/client', function (RouteGroup $router) {
    include routes_dir("client.php");
});