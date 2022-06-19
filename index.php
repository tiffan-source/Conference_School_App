<?php

require_once("Controllers/Conference_controller.php");
require_once("Controllers/User_controller.php");
require_once("Controllers/Publication_controller.php");

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
        
        
    }
}else{
    Conference_controller::acceuil_Controller();
}


?>