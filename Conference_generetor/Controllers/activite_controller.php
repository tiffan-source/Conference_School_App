<?php
    require_once("Models/conference.php");

function getActivite_Controller(){
    
    $data = getActivite();

    include_once("Views/activite_view.php");
}
?>