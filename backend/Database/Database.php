<?php

class Database
{

    private string $server = '127.0.0.1';
    private string $username = "root";
    private string $password = "";
    private string $dbname = "electronics_shop";
    private string $charset = 'utf8mb4';

    public function __construct()
    {
    }

    public function connect(): PDO | string
    {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=%s;user=%s;password=%s',
            $this->server,
            $this->dbname,
            $this->charset,
            $this->username,
            $this->password,
        );

            $con = new PDO($dsn);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $con;
    }
}
