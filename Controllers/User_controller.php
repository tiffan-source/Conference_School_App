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
        $check_connection = User_controller::checkLog();
        $error = "";

        if($_POST){
            if(empty($_POST['user']) == true || empty($_POST['password']) == true ){
                $error = "Certains champs ne sont pas remplis";
                require("Views/login.php");
                return;
            }
            $user = $_POST['user'];
            $pass = $_POST['password'];

            $user_id = User::checkUser($user, $pass);

            if($user_id){
                $key = $_ENV['USER_KEY'];

                $jwt = JWT::encode([$user_id], $key, 'HS256');

                setcookie("authCheck", $jwt, time()+60 * 30);
                header("Location: index.php");
            }else{
                $error = "No user found";
                require("Views/login.php");
                return;                
            }
        }
        require("Views/login.php");
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