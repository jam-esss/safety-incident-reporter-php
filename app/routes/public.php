<?php
/** @var Router $router */

use App\Controllers\HomeController;
use League\Route\Router;

$router->get('/', [HomeController::class, 'index'])->setName('index');