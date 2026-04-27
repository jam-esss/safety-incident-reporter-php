<?php
/** @var Router $router */

use App\Controllers\client\ClientController;
use League\Route\Router;

$router->get('/', [ClientController::class, 'index'])->setName('index');