<?php

use App\App;
use Laminas\Diactoros\Response\RedirectResponse;
use Laminas\Diactoros\ServerRequestFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use League\Plates\Engine;

function app(): App
{
    if (!isset($GLOBALS['app'])) {
        $GLOBALS['app'] = new App();
    }
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $GLOBALS['app'];
}

function csrf_token(): string
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function initRequest(): ServerRequestInterface
{
    return ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
}

function response(?string $body = null): Laminas\Diactoros\Response
{
    $response = new Laminas\Diactoros\Response;
    if (!empty($body)) {
        $response->getBody()->write($body);
    }
    return $response;
}

function view(string $view, array $data = []): ResponseInterface
{
    $data['csrf_token'] = csrf_token();

    $response = new Laminas\Diactoros\Response;
    $templateEngine = new Engine(view_dir(), 'plate.php');

    $response->getBody()->write($templateEngine->render($view, $data));
    return $response;
}

function app_dir(string $path = ""): string
{
    return __DIR__ . "/$path";
}

function routes_dir(string $path = ""): string
{
    return app_dir("routes/$path");
}

function view_dir(string $path = ""): string
{
    return app_dir("views/$path");
}

function route(string $name, array $params = []): string
{
    global $router;
    return $router->getNamedRoute($name)->getPath($params);
}

function redirect(string $url, int $status = 302): ResponseInterface
{
    return new RedirectResponse($url, $status);
}