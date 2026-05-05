<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public function index(): ResponseInterface
    {
        return view('public/index');
    }
}