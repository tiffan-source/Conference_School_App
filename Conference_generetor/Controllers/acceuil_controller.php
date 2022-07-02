<?php
require_once("Models/conference.php");

function getConference_Controller(){
    
    $data = getConference();
    include_once("Views/acceuil_view.php");
}