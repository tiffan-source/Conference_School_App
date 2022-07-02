<?php
    require_once("Models/appel_candidature.php");
    require_once("Models/conference.php");
    
    class Appel_controller{

        static public function create_appel_controller(){
            
            $data = Conference::getAllConference();
            
            $conf_Id_Err = "";
            $appel_name_Err  = "";
            $appel_description_Err = "";
            $appel_preo_maj_Err = "";

            if ($_POST) {
                
                $conference_id = $_POST['id_selected'];
		        $nom_appel = $_POST ['nom_appel'];
		        $description_appel = $_POST ['content_appel'];
                $preoccupation_majeure = $_POST["preo_maj"];

                if (empty($conference_id) || $conference_id == "empty") {
                    $conf_Id_Err = "*You must have selected a conference !";
                }else if(empty($nom_appel)){
                    $appel_name_Err   = "You must have mentionned an appel name !";
                }else if(empty($description_appel)){
                    $appel_description_Err = "*You must have mentionned an appel description !";
                }else if(empty($preoccupation_majeure)){
                    $appel_preo_maj_Err  = "*You must have mentionned a main sujet!";
                }else{
                    ( new Appel(null, $nom_appel,$description_appel,$preoccupation_majeure ) )->createAppel($conference_id);
                }
    
            }
            require_once "Views/create_appel_candidature.php";
        }
    }
?>