<?php

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/')
{
    echo json_encode([
        'description' => 'This is the api endpoint.',
        'version' => '1.0.0',
    ]);
}


