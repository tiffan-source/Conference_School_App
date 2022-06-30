<?php
require_once("Models/conference.php");
require_once("Controllers/User_controller.php");

class Conference_controller{

    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        $check_connection = User_controller::checkLog();

        require_once("Views/acceuil.php");
    }

    static function create_Controller(){
        $error = "";
        $check_connection = User_controller::checkLog();
        
        $data = Conference::getAllConference();
        
        $conf_Name_Err = "";
        $conf_Desc_Err = "";
        $conf_Date_Err = "";
        
        if ($_POST) {
            
            $conference_name = $_POST['nom_conference'];
            $conference_desc = $_POST['desc_conference'];
            $date_conference = $_POST['date_conference'];
            

            if (empty($conference_name)) {
                $conf_Name_Err = "*You must have mentionned a conference name !";
            }else if(empty($conference_desc)){
                $conf_Desc_Err   = "*You must have mentionned the conference description !";
            }else if(empty($date_conference)){
                $conf_Date_Err = "*You must have mentionned the conference d-day !";
            }else{
                // var_dump($check_connection);
                if($check_connection != false)
                    ( new Conference(null, $conference_name, $conference_desc, $date_conference) )->createConference($check_connection);
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