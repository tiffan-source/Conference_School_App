<?php
require("Controllers/acceuil_controller.php");
require("Controllers/participant_controller.php");

if(isset($_GET['action']) && $_GET['action']!=''){
    switch($_GET['action']){
        case "activite_view":
            // Conference_controller::create_Controller();
            break;

        case "publication_view":
            // Conference_controller::destruct_Controller($_GET['id_conf']); //
            break;

        case "appel_candidature_view":
            // User_controller::login_Controller();
            break;

        case "inscription_view":
            getParticipant_Controller();
            break; 
    }
}else{
    // getConference_controller();
}
