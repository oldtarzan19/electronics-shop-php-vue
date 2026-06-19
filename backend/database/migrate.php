<?php

require __DIR__ . '/Database.php';

try {
    $dir = new DirectoryIterator(__DIR__ . '/migrations/.');
    $migrations = [];
    foreach ($dir as $fileInfo) {
        if ($fileInfo->isDot() || $fileInfo->getExtension() !== 'php') {
            continue;
        }
        $migrations[] = require $fileInfo->getPathname();
    }

    $pdo = new Database()->connect();

    foreach ($migrations as $migration) {
        $migration($pdo);
    }

    echo 'Done';
} catch (Exception $e) {
    echo $e->getMessage();
}
