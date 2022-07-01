<?php
require_once("Models/publication.php");

function getConference_Controller(){
    
    $data = getConference();
    
    include_once("Views/publication_view.php"); 
}