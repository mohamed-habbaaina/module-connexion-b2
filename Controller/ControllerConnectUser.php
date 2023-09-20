<?php
session_start();

require_once('./../Model/ModelUser.php');

$respons = [];

if(isset($_POST['login']) && isset($_POST['password'])){
    
    
        
        $modelUser = new \Model\ModelUser\ModelUser();
        
        $login = $modelUser->isValid($_POST['login']);
        $password = $modelUser->isValid($_POST['password']);
        
        
            
            if($modelUser->connection($login, $password)){

                $_SESSION['autoris'] = 'ok';
                $_SESSION['login'] = $login;

                $respons['response'] = 200;
                
                
            } else {
                $respons[] = 'Incorect login or password !';
            }
}

echo json_encode($respons);