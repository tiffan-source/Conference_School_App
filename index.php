<?php

require_once("Controllers/Conference_controller.php");
require_once("Controllers/User_controller.php");
require_once("Controllers/Publication_controller.php");
require_once("Controllers/Activity_controller.php");
require_once("Controllers/Appel_controller.php");
require_once("Controllers/participant_controller.php");

if(isset($_GET['action']) && $_GET['action']!=''){

    switch($_GET['action']){
        case "create_conference":
            Conference_controller::create_Controller();
            break;

        case "detruire_conference":
            Conference_controller::destruct_Controller($_GET['id_conf']); //
            break;

        case "login":
            User_controller::login_Controller();
            break;

        case "create_publication":
            Publication_controller::create_publication_controller();
            break;
        
        case "create_activity":
            Activity_controller::create_activity_controller();
            break;
        
        case "create_appel_candidature":
            Appel_controller::create_appel_controller();
            break;
        
        case "gerer_participant":
            Participant_controller::checker_participant_controller();
            break;
        case "rejeter_participant":
            Participant_controller::rejeter_participant_controller($_GET["id_participant"]);
            
        case "valider_participant":
            Participant_controller::valider_participant_controller($_GET["id_participant"]);
        
    }

}else{
    Conference_controller::acceuil_Controller();
}


?>