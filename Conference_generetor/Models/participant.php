<?php
    require_once("connection.php");

    $connection = getConnection();
    
    $query = "SELECT * FROM participant where id_conf_conference = ?";
    
    $prepare_query = connection->prepare($query);

    $result_participant = $prepare_query->execute([]);

    
?>
