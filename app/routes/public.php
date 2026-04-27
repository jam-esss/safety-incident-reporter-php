<?php
/** @var Router $router */

use League\Route\Router;

$router->get('/', function () {
    return response('Hello World!!!');
});