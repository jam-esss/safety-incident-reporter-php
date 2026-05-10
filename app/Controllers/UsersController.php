<?php

namespace App\Controllers;

use App\Classes\User;
use Laminas\Diactoros\ServerRequest;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class UsersController
{
    private User $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function index(): ResponseInterface
    {
        $users = $this->users->all();

        return view('client/users/index', [
            'users' => $users
        ]);
    }

    public function destroy(ServerRequestInterface $request): ResponseInterface
    {
        $id = (int) $request->getAttribute('id');

        $this->users->destroy($id);

        return redirect(route('client.users.index'));
    }
}