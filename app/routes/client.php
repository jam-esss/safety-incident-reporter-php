<?php
/** @var Router $router */

use App\Controllers\client\ClientController;
use League\Route\Router;

$router->get('/', [ClientController::class, 'index'])->setName('client.dashboard');
$router->get('/contact', [ClientController::class, 'contact'])->setName('client.contact');
