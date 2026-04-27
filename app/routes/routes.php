<?php
/** @var Router $router */

use League\Route\RouteGroup;
use League\Route\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$router->group('', function (RouteGroup $router) {
    include routes_dir("public.php");
});

$router->group('/client', function (RouteGroup $router) {
    include routes_dir("client.php");
});