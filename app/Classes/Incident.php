<?php

namespace App\Classes;

use DateTime;
use PDO;

class Incident
{
    public function all(): array
    {
        $stmt = app()->getDb()->query("
            SELECT id, reporter_id, site, description, severity, logged_at, created_at, removed_at
            FROM incidents
            WHERE removed_at IS NULL
            ORDER BY id DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): ?array
    {
        $stmt = app()->getDb()->prepare("
            SELECT id, reporter_id, site, description, severity, logged_at, created_at, removed_at 
            FROM incidents
            WHERE id = :id 
            AND removed_at IS NULL 
            LIMIT 1
        ");

        $stmt->execute(['id' => $id]);

        $incident = $stmt->fetch(PDO::FETCH_ASSOC);

        return $incident ?: null;
    }

    public function create(int $reporter_id, string $site, string $description, string $severity, string $logged_at): bool
    {
        $stmt = app()->getDb()->prepare("
            INSERT INTO incidents (reporter_id, site, description, severity, logged_at)
            VALUES (:reporter_id, :site, :description, :severity, :logged_at)
        ");

        return $stmt->execute([
            'reporter_id' => $reporter_id,
            'site' => $site,
            'description' => $description,
            'severity' => $severity,
            'logged_at' => $logged_at,
        ]);
    }

    public function destroy(int $id): bool
    {
        $stmt = app()->getDb()->prepare("
        UPDATE incidents SET removed_at = NOW() WHERE id = :id;
        ");

        return $stmt->execute([
            'id' => $id
        ]);
    }
}