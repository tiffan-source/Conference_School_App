<?php
require("Models/conference.php");

class Conference_controller{
    static function acceuil_Controller(){
        $data = Conference::getAllConference();
        
        require("Views/acceuil.php");
    } 
}