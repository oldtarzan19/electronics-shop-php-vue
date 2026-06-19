<?php

require __DIR__ . '/Database.php';
$user = require __DIR__ . '/migrations/001_create_user_table.php';

try {
    $user(new Database()->connect());
} catch (Exception $e) {
    echo $e->getMessage();
}
