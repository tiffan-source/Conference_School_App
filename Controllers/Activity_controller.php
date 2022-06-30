<?php
    class Activity_controller{
        static public function create_activity_controller(){
            $data = Conference::getAllConference();
            $conf_Id_Err = "";
            $activity_name_Err  = "";
            $activity_description_Err = "";
            if ($_POST) {
                
                $id_activite = $_POST [''];
		        $nom_activite = $_POST [''];
		        $description_activite = $_POST [''];
    
                if (empty($id_activite) || $id_activite == "empty") {
                    $conf_Id_Err = "*You must have selected a conference !";
                }else if(empty($nom_activite)){
                    $activity_name_Err   = "You must have mentionned an activity name !";
                }else if(empty($description_activite)){
                    $activity_description_Err = "*You must have mentionned an activity description !";
                }else{
                    ( new activity(null, $nom_activite,$description_activite) )->createActivity($conference_id);
                }
    
            }
            require_once "Views/create_activity.php";
        }
    }
?>