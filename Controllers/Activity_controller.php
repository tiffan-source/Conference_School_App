<?php
    require_once("Models/activite.php");
    require_once("Models/conference.php");
    
    class Activity_controller{
        static public function create_activity_controller(){
            $data = Conference::getAllConference();
            
            $error = "";

            if ($_POST) {

                // var_dump($_POST);
                
                $conference_id = $_POST['id_selected'];
		        $nom_activite = $_POST ['nom_activite'];
		        $description_activite = $_POST ['content_activite'];
                $date = $_POST["date_activite"];
                $type_activite =  $_POST["type_activite"];
                $content_activite = $_POST["content_activite"];
                
                if (empty($conference_id) || $conference_id == "empty") {
                    $error = "*You must have selected a conference !";
                }else if(empty($nom_activite)){
                    $error   = "You must have mentionned an activity name !";
                }else if(empty($description_activite)){
                    $error = "*You must have mentionned an activity description !";
                }else if(empty($date)){
                    $error = "*Must mention date";
                }else if(empty($type_activite)){
                    $error = "Mention type";
                }else if(empty($content_activite)){
                    $error = "Mention content";
                } else{
                    ( new Activite(null, $nom_activite, $description_activite, $date, $type_activite) )->createActivite($conference_id);
                }
            }
            require_once "Views/create_activity.php";
        }
    }
?> 