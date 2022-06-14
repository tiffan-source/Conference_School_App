<?php
require_once("Models/user.php");
require("vendor/autoload.php");

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class User_controller{
    static public function login_Controller(){
        
        if($_POST){
            $user_check = User::checkUser($_POST['user'], $_POST['password']);

            if($user_check){

                $key = "macle";

                $jwt = JWT::encode([$user_check], $key, 'HS256');

                setcookie("authCheck", $jwt, time()+60 * 60 * 24);
                
            }else{
                $error_connection = "username ou mot de passe incorrect";
            }
        }
        
        require_once("Views/login.php");
    }
}