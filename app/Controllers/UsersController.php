<?php

namespace App\Controllers;

use App\Classes\User;
use App\Classes\Validator;
use Exception;
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

    public function create(): ResponseInterface
    {
        return view('client/users/form');
    }

    public function store(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();

        if (!isset($data['csrf_token']) || $data['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
            throw new Exception("CSRF token validation failed.");
        }

        $validator = new Validator();

        $rules = [
            'fn' => ['required'],
            'sn' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ];

        if (!$validator->validate($data, $rules)) {
            return view('client/users/form', [
                'errors' => $validator->getErrors(),
                'old' => $data
            ]);
        }

        $this->users->create(
            $data['fn'],
            $data['sn'],
            $data['email'],
            $data['password'],
        );

        return redirect(route('client.users.index'));
    }

    public function destroy(ServerRequestInterface $request): ResponseInterface
    {
        $id = (int)$request->getAttribute('id');

        $this->users->destroy($id);

        return redirect(route('client.users.index'));
    }
}