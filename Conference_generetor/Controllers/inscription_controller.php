<?php
require_once("");

function getConference_Controller(){
    
    $data = getConference();
    
    include_once("Views/inscription_view.php");
}