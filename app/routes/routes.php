<?php
/** @var Router $router
 * @var RouteGroup $group
 */

use App\Controllers\AuthController;
use App\Controllers\ClientController;
use App\Controllers\HomeController;
use App\Controllers\UsersController;
use League\Route\Router;
use League\Route\RouteGroup;
use App\Middleware\LoginMiddleware;

/*
 * -------------
 * PUBLIC ROUTES
 * -------------
 */
// Index
$router->get('/', [HomeController::class, 'index'])->setName('index');

/*
 * -------------
 * CLIENT ROUTES
 * -------------
 */
// Index
$router->get('/client', [ClientController::class, 'index'])->setName('client.dashboard')->middleware(new LoginMiddleware());

// Incident
$router->group('/client/incident', function (RouteGroup $router) {
    $router->get('/', [ClientController::class, 'incidentForm'])->setName('client.incidentform')->middleware(new LoginMiddleware());
});

// Contact
$router->get('/client/contact', [ClientController::class, 'contact'])->setName('client.contact')->middleware(new LoginMiddleware());

// Users
$router->group('/client/users', function (RouteGroup $router) {
    $router->get('/', [UsersController::class, 'index'])->setName('client.users.index');

    $router->get('/create', [UsersController::class, 'create'])->setName('client.users.create');
    $router->post('/create', [UsersController::class, 'store']);

    $router->post('delete/{id}', [UsersController::class, 'destroy'])->setName('client.users.delete');
})->middleware(new LoginMiddleware());

/*
 * ---------------------
 * AUTHENTICATION ROUTES
 * ---------------------
 */
$router->get('/login', [AuthController::class, 'loginForm'])->setName('login');
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout'])->setName('logout');
