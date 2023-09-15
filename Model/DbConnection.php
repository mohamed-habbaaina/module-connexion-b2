<?php
namespace Model\DbConnection;
abstract class DbConnection
{
    private $pdo;

    protected function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $host = 'localhost';
        $dbname = 'moduleconnexionb2';
        $username = 'root';
        $password = '';
        try {
            $this->pdo = new \PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    protected function getDb()
    {
        return $this->pdo;
    }
}
