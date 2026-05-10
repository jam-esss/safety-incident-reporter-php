<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('error_log', __DIR__.'/../errors.log');

use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

$request = initRequest();

app();

$router = new Router();
$router->setStrategy(new ApplicationStrategy());

require routes_dir("routes.php");

$response = $router->dispatch($request);

(new SapiEmitter)->emit($response);