<?php

namespace App\Controllers;

use App\Classes\User;
use Laminas\Diactoros\Response\RedirectResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class AuthController
{
    private User $userProvider;

    public function __construct()
    {
        $this->userProvider = new User();
    }

    public function loginForm(ServerRequestInterface $request): ResponseInterface
    {
        return view('auth/login');
    }

    public function login(ServerRequestInterface $request): ResponseInterface
    {
        $parsedBody = $request->getParsedBody();
        $email = $parsedBody['email'] ?? '';
        $password = $parsedBody['password'] ?? '';

        $user = $this->userProvider->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            session_regenerate_id(true);

            $_SESSION['user_id'] = $user['id'];

            return new RedirectResponse('/client');
        }

        return view('auth/login', [
            'errors' => 'Invalid email or password.',
            'old' => ['email' => $email]
        ]);
    }

    public function logout(): ResponseInterface
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();

        return new RedirectResponse('/');
    }
}