<?php
session_start();
require_once('../Model/ModelUser.php');

$modelUser = new \Model\ModelUser\ModelUser();

$modelUser->deconnect();

header("refresh:1;url=../View/");
die;
?>