<?php

namespace App\Classes;

use PDO;

class User
{
    public function all(): array
    {
        $stmt = app()->getDb()->query("
            SELECT id, fn, sn, email, avatar, created_at
            FROM users
            WHERE removed_at IS NULL
            ORDER BY id DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByEmail(string $email): ?array
    {
        $stmt = app()->getDb()->prepare("
        SELECT * FROM users 
        WHERE email = :email AND removed_at IS NULL 
        LIMIT 1
    ");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }

    public function create(string $fn, string $sn, string $email, string $password): bool
    {
        $stmt = app()->getDb()->prepare("
            INSERT INTO users (fn, sn, email, password, tkn)
            VALUES (:fn, :sn, :email, :password, :tkn)
        ");

        $tkn = bin2hex(random_bytes(6));
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        return $stmt->execute([
            'fn' => $fn,
            'sn' => $sn,
            'email' => $email,
            'tkn' => $tkn,
            'password' => $hashedPassword
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