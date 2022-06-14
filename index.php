<?php

require_once("Controllers/Conference_controller.php");
require_once("Controllers/User_controller.php");

if(isset($_GET['action']) && $_GET['action']!=''){

    switch($_GET['action']){
        case "creer_conference":
            Conference_controller::create_Controller();
            break;

        case "detruire_conference":
            Conference_controller::destruct_Controller($_GET['id']);
            break;

        case "login":
            User_controller::login_Controller();
            break;

        case "create_publication":
            echo "Creationd de publication";
            break;
    }
}else{
    Conference_controller::acceuil_Controller();
}