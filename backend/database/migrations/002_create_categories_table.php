<?php

return function (PDO $pdo): void
{
    $sql = "CREATE TABLE IF NOT EXISTS categories (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL UNIQUE,
            parent_id INT,
            FOREIGN KEY (parent_id) REFERENCES categories (id) ON DELETE SET NULL);
";
    $pdo->exec($sql);
};
