<?php

require("Controllers/Conference_controller.php");

if(isset($_GET['action']) && $_GET['action']!=''){

    switch($_GET['action']){
        case "creer_conference":
            Conference_controller::create_Controller();
            break;

        case "detruire_conference":
            break;
    }
    
}else{
    Conference_controller::acceuil_Controller();
}