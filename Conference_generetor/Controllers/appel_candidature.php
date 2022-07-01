<?php
require_once("Models/appel_candidature.php");

function getAppel_Controller(){
    
    $data = getAppel();
    include_once("Views/appel_candidature_view.php"); 
}