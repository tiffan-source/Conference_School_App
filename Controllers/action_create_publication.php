<?php
    $titre = $_POST["nom_pub"];
    $pos = strpos($_POST["id_selected"], " ") ;
    $id_conf = $_POST["id_selected"];
    $contenu = $_POST["content_pub"];
    include("../Models/publication.php");
    //echo "JUST TEST !";
    echo $pos;
    $conf = new publication($titre, $contenu, $id_conf);
    $conf->createPublication();

?>

