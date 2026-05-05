<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\RedirectResponse;

class LoginMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Start session if it hasn't been started already.
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if the user is logged in.
        if (!isset($_SESSION['user_id'])) {
            // Redirect to the /login path directly instead of using the route() helper
            return new RedirectResponse('/login');
        }

        // Continue processing the request if authenticated.
        return $handler->handle($request);
    }
}