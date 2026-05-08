<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('error_log', __DIR__.'/../errors.log');

use League\Route\Router;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

$request = initRequest();
// Initialise app
app();
$router = new Router();

require routes_dir("routes.php");

$response = $router->dispatch($request);

(new SapiEmitter)->emit($response);