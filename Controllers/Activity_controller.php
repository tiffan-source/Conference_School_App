<?php
    require_once("Models/activite.php");
    require_once("Models/conference.php");
    class Activity_controller{
        static public function create_activity_controller(){
            $data = Conference::getAllConference();
            
            $conf_Id_Err = "";
            $activity_name_Err  = "";
            $activity_description_Err = "";

            if ($_POST) {
                
                $conference_id = $_POST['id_selected'];
		        $nom_activite = $_POST ['nom_activite'];
		        $description_activite = $_POST ['content_activite'];
    
                if (empty($conference_id) || $conference_id == "empty") {
                    $conf_Id_Err = "*You must have selected a conference !";
                }else if(empty($nom_activite)){
                    $activity_name_Err   = "You must have mentionned an activity name !";
                }else if(empty($description_activite)){
                    $activity_description_Err = "*You must have mentionned an activity description !";
                }else{
                    ( new activite(null, $conference_id,$description_activite) )->createActivite($conference_id);
                }
    
            }
            require_once "Views/create_activity.php";
        }
    }
?>