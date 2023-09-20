<?php
namespace Model\ModeAdmin;
use Model\DbConnection\DbConnection;
require_once ('DbConnection.php');
class ModelAdmin {
    public function __construct()
    {

    }

    public function getAllUsers() : array
    {
        $reqAllUsers = "SELECT * FROM `user`";

        $dataAllUser = DbConnection::getDb()->prepare($reqAllUsers);
        $dataAllUser->execute();
        return $dataAllUser->fetchAll(\PDO::FETCH_ASSOC);
    }
}