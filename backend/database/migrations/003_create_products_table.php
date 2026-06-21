<?php

return function(PDO $pdo): void
{
    $sql = "CREATE TABLE IF NOT EXISTS products (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            price DECIMAL(10,2) NOT NULL,
            stock INT UNSIGNED NOT NULL,
            category_id INT,
            FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE SET NULL);
";
    $pdo->exec($sql);
};
