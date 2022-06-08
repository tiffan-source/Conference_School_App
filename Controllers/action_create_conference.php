<?php
    $nom_conf = $_POST["nom"];
    $desc_conf = $_POST["desc"];

    include("../Models/conference.php");

    $conf = new conference($nom_conf, $desc_conf);

    $conf->createConference();
?>