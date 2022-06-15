<?php
require_once("Models/conference.php");
require_once("Controllers/User_controller.php");

class Conference_controller{
    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        
        require_once("Views/acceuil.php");
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

        require_once("Views/create_conference.php");
    }

    static function destruct_Controller($id){
        $data = Conference::getAllConference();

        if($id){
            $conf_to_delete = Conference::getConference($id);

            $conf_to_delete->deleteConference();

            $data = Conference::getAllConference();

        }

        require_once("Views/supprimer.php");
    }
}