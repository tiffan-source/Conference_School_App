<?php
require_once("Models/user.php");
require("vendor/autoload.php");
// require("vendor/vlucas/phpdotenv/src/Dotenv.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../Configs');
$dotenv->load();

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class User_controller{
    static public function login_Controller(){
        
        if($_POST){
            $user_check = User::checkUser($_POST['user'], $_POST['password']);

            if($user_check){

                $key = $_ENV['USER_KEY'];

                $jwt = JWT::encode([$user_check], $key, 'HS256');

                setcookie("authCheck", $jwt, time()+60 * 30);
             
                require_once("Views/acceuil.php");
            }else{
                $error_connection = "username ou mot de passe incorrect";
            }
        }else        
            require_once("Views/login.php");
    }

    static public function checkLog(){
        if ($_COOKIE["authCheck"]) {
            // var_dump($_COOKIE["authCheck"]);

            $id_decoded = JWT::decode($_COOKIE["authCheck"], new Key($_ENV['USER_KEY'], 'HS256'));

            $id_decoded = (array) $id_decoded;

            return $id_decoded[0];
        }else{
            return false;
        }
    }
}