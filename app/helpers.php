<?php

use Laminas\Diactoros\ServerRequestFactory;
use Psr\Http\Message\ServerRequestInterface;

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

function view(string $view, array $data = []): Laminas\Diactoros\Response
{
    $response = response();
    $templateEngine = new League\Plates\Engine(view_dir(), 'plate.php');
    $response->getBody()->write($templateEngine->render($view, $data));
    return $response;
}

function app_dir(string $path = ""): string
{
    return __DIR__."/$path";
}

function routes_dir(string $path = ""): string
{
    return app_dir("routes/$path");
}

function view_dir(string $path = ""): string
{
    return app_dir("views/$path");
}