<?php

namespace App;

use Dotenv\Dotenv;
use http\Exception\RuntimeException;
use PDO;

class App
{

    private array $env;
    private ?PDO $db;

    public function __construct()
    {
        $this->env = Dotenv::createImmutable(__DIR__ . "/../")->safeLoad();
        $this->db = null;
    }

    public function getDb(): PDO
    {
        if (is_null($this->db)) {
            if (!isset($this->env['DB_HOST'], $this->env['DB_NAME'], $this->env['DB_USER'], $this->env['DB_PASSWORD'])) {
                throw new RuntimeException("Cannot connect to the database.");
            }
            $this->db = new PDO("mysql:host={$this->env['DB_HOST']};dbname={$this->env['DB_NAME']}", $this->env['DB_USER'], $this->env['DB_PASSWORD']);
        }
        return $this->db;
    }

}