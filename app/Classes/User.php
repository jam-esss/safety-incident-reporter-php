<?php

namespace App\Classes;

use PDO;

class User
{
    public function all(): array
    {
        $stmt = app()->getDb()->query("
            SELECT id, fn, sn, email, created_at
            FROM users
            WHERE removed_at IS NULL
            ORDER BY id DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(string $fn, string $sn, string $email): bool
    {
        $stmt = app()->getDb()->prepare("
            INSERT INTO users (fn, sn, email)
            VALUES (:fn, :sn, :email)
        ");

        return $stmt->execute([
            'fn' => $fn,
            'sn' => $sn,
            'email' => $email
        ]);
    }

    public function destroy(int $id): bool
    {
        $stmt = app()->getDb()->prepare("
        UPDATE users SET removed_at = NOW() WHERE id = :id;
        ");

        return $stmt->execute([
            'id' => $id
        ]);
    }
}