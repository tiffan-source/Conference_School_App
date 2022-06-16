<?php
require_once("Models/conference.php");
require_once("Controllers/User_controller.php");

class Conference_controller{
    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        
        require_once("Views/acceuil.php");
    }

    static function create_Controller(){
        $error = "";
        /**
         * Faire le controlle du POST
         * 
         * 
         */

        if ($_POST){
            $conference_name = $_POST['nom_conference'];
            $conference_desc = $_POST['desc_conference'];
            $date_conference = $_POST['date_conference'];

            $id_who = User_controller::checkLog();

            if($id_who)
                ( new Conference(null, $conference_name, $conference_desc, $date_conference) )->createConference($id_who);
            else
                $error = "You must connect";
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