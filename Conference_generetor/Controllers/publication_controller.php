<?php
require_once("Models/publication.php");

function getPublication_Controller(){
    
    $data = getPublication();

    include_once("Views/publication_view.php"); 
}