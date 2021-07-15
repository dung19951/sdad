<?php


namespace App\Model;


use PDO;

class DBConnect
{
    private $dsn;
    private $username;
    private $pass;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=libary;charset=utf8';
        $this->username = 'nt_dung';
        $this->pass = '3010';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->pass);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}
