<?php
require("Models/conference.php");

class Conference_controller{
    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        
        require("Views/acceuil.php");
    }

    static function create_Controller(){

        /**
         * Faire le controlle du POST
         * 
         * 
         */

        if ($_POST){
            $conference_name = $_POST['nom_conference'];
            $conference_desc = $_POST['desc_conference'];
            ( new Conference(null, $conference_name, $conference_desc) )->createConference();
        }

        require("Views/create_conference.php");
    }

    static function destruct_Controller(){
        $data = Conference::getAllConference();

        require("Views/supprimer.php");
    }
}