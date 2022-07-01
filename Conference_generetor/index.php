<?php
require("Controllers/acceuil_controller.php");
require("Controllers/activite_controller.php");
require("Controllers/participant_controller.php");
require("Controllers/publication_controller.php");

if(isset($_GET['action']) && $_GET['action']!=''){
    switch($_GET['action']){
        case "activite_view":
            getActivite_Controller();
            break;

        case "publication_view":
            getPublication_Controller();
            break;

        case "appel_candidature_view":
            // 
            break;

        case "inscription_view":
            getParticipant_Controller();
            break; 
    }
}else{
    getConference_Controller();
}
