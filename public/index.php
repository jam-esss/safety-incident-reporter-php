<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('error_log', __DIR__.'/../errors.log');

use League\Route\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$request = initRequest();
$router = new Router();

require routes_dir("routes.php");

$response = $router->dispatch($request);

(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);