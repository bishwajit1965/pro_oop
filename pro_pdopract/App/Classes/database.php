<?php

class Database
{
    private $host = '127.0.0.1';
    private $db_name = 'pdocrud';
    private $username = 'root';
    private $password = '';
    private $handler;

    public function DbConnect()
    {
        $this->handler = null;
        try {
            $this->handler = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, "$this->username", "$this->password");
            $this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->handler->exec("SET CHARACTER SET utf8");
            // echo "OK!!! database connected.";
        } catch (PDOException $e) {
            echo "Database connection error found:" . $e->getMessage();
        }
        return $this->handler;
    }
}