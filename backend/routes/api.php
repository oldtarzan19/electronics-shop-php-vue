<?php

use Controllers\RegisterController;

require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Database/Database.php';
require_once __DIR__ . '/../Repository/UserRepository.php';
require_once __DIR__ . '/../Controllers/RegisterController.php';


header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Access-Control-Allow-Credentials: true');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/')
{
    echo json_encode([
        'description' => 'This is the api endpoint.',
        'version' => '1.0.0',
    ]);
}

if ($uri === '/register' && $method === 'POST')
{
     $controller = new RegisterController;

    $data = json_decode(file_get_contents('php://input'), true) ?? [];
    $controller->createUser($data);
}

if ($uri === '/session' && $method === 'GET') {
    session_start();

    echo json_encode([
        'sessionId' => session_id(),
        'userId' => $_SESSION['userId'] ?? null,
        'role' => $_SESSION['role'] ?? null,
    ]);
    return;
}


