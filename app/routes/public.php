<?php
/** @var Router $router */

use App\Controllers\public\HomeController;
use League\Route\Router;

$router->get('/', [HomeController::class, 'index'])->setName('public.index');