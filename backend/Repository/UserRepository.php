<?php

namespace Repository;

use Model\User;
use PDO;
use PDOException;

class UserRepository
{
    private PDO $pdo;
    public function __construct()
    {
        $db = new \Database()->connect();
        $this->pdo = $db;
    }

    public function all(): array | string
    {
        try {
            $stmt = $this->pdo->prepare("SELECT id, name, email, address, role FROM users");
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function find($id): array | string
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        } catch (PDOException $e){
            return $e->getMessage();
        }
    }

    /**
     * @param User $u
     * @param string $hashedPassword
     * @return false|string
     * @throws PDOException
     */

    public function create(User $u, string $hashedPassword): false|string
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, address, role) VALUES (?,?,?,?,?)");
        $stmt->execute([$u->getName(), $u->getEmail(), $hashedPassword, $u->getAddress(), $u->getRole()]);

        return $this->pdo->lastInsertId();
    }

    public function delete(int $id): true | string
    {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e){
            return $e->getMessage();
        }
    }
}