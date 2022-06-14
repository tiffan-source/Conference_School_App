<?php
require("Models/user.php");

class User_controller{
    static function acceuil_Controller(){
       
        
        require("Views/acceuil.php");
    }

    static function create_Controller(){

        /**
         * Faire le controlle du POST
         * 
         * 
         */

        if ($_POST){
            $username = $_POST['user'];
            $password = $_POST['password'];
             new user(null, $username, $password);
        }

        require("Views/accueil.php");
    }

    static function destruct_Controller(){
        $data = Conference::getAllConference();

        require("Views/supprimer.php");
    }
}