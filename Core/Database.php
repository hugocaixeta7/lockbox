<?php

declare(strict_types=1);

namespace Core;

use PDO;
use PDOException;

class Database
{
    private PDO $db;

    public function __construct(array $config)
    {
        $this->db = new PDO($this->getDsn($config), $config['username'] ?? null, $config['password'] ?? null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    private function getDsn(array $config): string
    {
        $driver = $config['driver'] ?? 'mysql';

        if ($driver === 'sqlite') {
            return "sqlite:" . $config['database'];
        }

        // Monta corretamente o DSN para MySQL
        $host = $config['host'] ?? 'localhost';
        $dbname = $config['database'] ?? '';
        $charset = $config['charset'] ?? 'utf8mb4';

        return "mysql:host={$host};dbname={$dbname};charset={$charset}";
    }

    public function query(string $query, ?string $class = null, array $params = [])
    {
        $prepare = $this->db->prepare($query);

        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }

        $prepare->execute($params);

        return $prepare;
    }
}
