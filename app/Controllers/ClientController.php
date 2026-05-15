<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface;

class ClientController
{
    public function index(): ResponseInterface
    {
        return view('client/dashboard');
    }

    public function contact(): ResponseInterface
    {
        return view('client/contact');
    }
}