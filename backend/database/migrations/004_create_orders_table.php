<?php

return function (PDO $pdo)
{
    $sql = "CREATE TABLE IF NOT EXISTS `orders` (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NOT NULL,
            date DATETIME NOT NULL,
            status VARCHAR(25) NOT NULL,
            total_price DECIMAL(10,2) NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE);
";
    $pdo->exec($sql);

};
