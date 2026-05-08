<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class UsersController
{
    public function index(): ResponseInterface
    {
        return view('client/users/index');
    }
}