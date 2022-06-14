<?php
require_once("Models/user.php");

class User_controller{
    static public function login_Controller(){
        
        if($_POST){
            $user_check = User::checkUser($_POST['user'], $_POST['password']);
            var_dump($user_check);

            if($user_check){
                
            }else{
                $error_connection = "username ou mot de passe incorrect";
            }
        }
        
        require_once("Views/login.php");
    }
}