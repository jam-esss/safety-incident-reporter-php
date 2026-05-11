<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProfileController
{
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        return view('client/users/profile/index');
    }
}