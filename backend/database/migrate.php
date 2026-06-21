<?php

require __DIR__ . '/Database.php';

try {
    $dir = new DirectoryIterator(__DIR__ . '/migrations/.');
    $files = [];
    foreach ($dir as $fileInfo) {
        if ($fileInfo->isDot() || $fileInfo->getExtension() !== 'php') {
            continue;
        }
        $files[] = $fileInfo->getPathname();
    }

    $pdo = new Database()->connect();

    sort($files);

    foreach ($files as $file) {
       $migration = require $file;
       $migration($pdo);
    }

    echo 'Migration is done';
} catch (Exception $e) {
    echo $e->getMessage();
}
