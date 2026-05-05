<?php

namespace App\Controllers;

use Laminas\Diactoros\Response\RedirectResponse;
use Psr\Http\Message\ServerRequestInterface;

class AuthController
{
    public function loginForm(ServerRequestInterface $request)
    {
        return view('auth/login');
    }

    public function login(ServerRequestInterface $request)
    {
        $parsedBody = $request->getParsedBody();
        $username = $parsedBody['username'] ?? null;
        $password = $parsedBody['password'] ?? null;

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['user_id'] = 1;

        return new RedirectResponse('/client');
    }

    public function logout()
    {
        session_start();
        session_destroy();

        return new RedirectResponse('/');
    }
}