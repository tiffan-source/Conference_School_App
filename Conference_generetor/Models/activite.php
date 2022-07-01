<?php
    require_once("connection.php");

    $connection = getConnection();
    
    $query = "SELECT * FROM activite where id_conf_conference = ?";
    
    $prepare_query = $connection->prepare($query);

    $result_activite = $prepare_query->execute([7]);

    
?>