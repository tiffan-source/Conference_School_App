<?php
require_once("Models/conference.php");
require_once("Controllers/User_controller.php");
require_once("Models/publication.php");
require_once("Models/activite.php");
require_once("Models/appel_candidature.php");

class Conference_controller{

    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        $check_connection = User_controller::checkLog();

        $active_voir_plus = false;

        require_once("Views/acceuil.php");
    }

    static function acceuil_Controller_Conf($id){
        
        $data_conference = Conference::getConference($id);
        $data = Conference::getAllConference();
        $data_publication = Publication::getPublication($id, 1);
        $data_activite = Activite::getActivite($id, 1);
        $data_appel = Appel::getAppel($id, 1);
        
        
        $check_connection = User_controller::checkLog();

        $active_voir_plus = true;
        
        require_once("Views/acceuil.php");
    }

    static function create_Controller(){
        $error = "";
        $check_connection = User_controller::checkLog();
        
        $data = Conference::getAllConference();

        
        if ($_POST) {
            
            $conference_name = $_POST['nom_conference'];
            $conference_desc = $_POST['desc_conference'];
            $date_conference = $_POST['date_conference'];
            $organisateur = $_POST["organisateur_conference"];
            $lieu = $_POST["lieu_conference"];

            if (empty($conference_name)) {
                $error = "*You must have mentionned a conference name !";
            }else if(empty($conference_desc)){
                $error   = "*You must have mentionned the conference description !";
            }else if(empty($date_conference)){
                $error = "*You must have mentionned the conference d-day !";
            }else if(empty($organisateur)){
                $error = "*You must mention organisateur";
            }else if(empty($lieu)){
                $error = "Must mention lieu";
            } else{
                if($check_connection != false)
                    ( new Conference(null, $conference_name, $conference_desc, $date_conference, $organisateur, $lieu) )->createConference($check_connection);
                else
                    $error = "You must connect";           
            }
            
        }

        require_once("Views/create_conference.php");
    }

    static function destruct_Controller($id = null){
        $data = Conference::getAllConference();
        $check_connection = User_controller::checkLog();
        $error = "";
         
            if($id){
                if ($check_connection==false){
                    $error = "Vous n'etes pas connecte";
                }else{
                    $conf_to_delete = Conference::getConference($id);
                    $conf_to_delete->deleteConference();
                    $data = Conference::getAllConference();
                }
            }

        require_once("Views/supprimer.php");
    }
}