<?php

namespace Controllers;

use Model\User;
use Repository\UserRepository;

class RegisterController
{
    private UserRepository $userRepository;
    public function __construct(){
        $this->userRepository = new UserRepository;
    }

    public function createUser(array $userData): void
    {
        if (empty($userData)) {
            http_response_code(400);

            echo json_encode(['error' => 'empty array']);
            return;
        }

        if (empty($userData['name']) || empty($userData['email']) || empty($userData['address']) || empty($userData['password']))
        {
            http_response_code(400);
            echo json_encode(['error' => 'empty data']);
            return;
        }

        $user = new User(
            id: 999,
            name: $userData['name'],
            email: $userData['email'],
            address: $userData['address'],
            role: 'user',
        );

        $hashedPassword = password_hash($userData['password'], PASSWORD_DEFAULT);
        try {
            $lastId = $this->userRepository->create($user, $hashedPassword);
        } catch (\PDOException $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
            return;
        }

        session_start();
        $_SESSION['userId'] = $lastId;
        $_SESSION['role'] = 'user';
        http_response_code(201);
        echo json_encode(['id' => $lastId]);
    }
}