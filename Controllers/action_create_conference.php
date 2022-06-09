<?php

    $nom_conf = $_POST["nom_conference"];
    $desc_conf = $_POST["desc_conference"];

    

    include("../Models/conference.php");

    $conf = new conference($nom_conf, $desc_conf);

    $conf->createConference();
?>