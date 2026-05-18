<?php

namespace App\Controllers;
use App\Classes\Incident;
use App\Classes\User;
use App\Classes\Validator;
use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IncidentController
{
    private Incident $incidents;

    public function __construct()
    {
        $this->incidents = new Incident();
    }

    public function index(): ResponseInterface
    {
        $incidents = $this->incidents->all();
        $user = new User();

        foreach ($incidents as &$incident) {
            $incident['reporter'] = $user->findById($incident['reporter_id']);
        }

        return view('client/incident/index', [
            'incidents' => $incidents
        ]);
    }

    public function create(): ResponseInterface
    {
        return view('client/incident/form');
    }

    public function store(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();

        if (!isset($data['csrf_token']) || $data['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
            throw new Exception("CSRF token validation failed.");
        }

        $validator = new Validator();

        $rules = [
            'site' => ['required'],
            'time' => ['required'],
            'date' => ['required'],
            'severity' => ['required'],
            'description' => ['required'],
        ];

        if (!$validator->validate($data, $rules)) {
            return view('client/incident/form', [
                'errors' => $validator->getErrors(),
                'old' => $data
            ]);
        }

        $data['reporter_id'] = $_SESSION['user_id'];
        $data['logged_at'] = $data['date'] . ' ' . $data['time'];

        $this->incidents->create(
            $data['reporter_id'],
            $data['site'],
            $data['description'],
            $data['severity'],
            $data['logged_at'],
        );

        return redirect(route('client.dashboard'));
    }

    public function destroy(ServerRequestInterface $request): ResponseInterface
    {
        $id = (int)$request->getAttribute('id');

        $this->incidents->destroy($id);

        return redirect(route('client.incident.index'));
    }
}