<?php

namespace App\Controllers\client;
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

    public function incidentForm(): ResponseInterface
    {
        return view('client/incident-report/form');
    }
}