<?php
    require_once("connection.php");

    $connection = getConnection();
    
    $query = "SELECT * FROM publication where id_conf_conference = ?";
    
    $prepare_query = connection->prepare($query);

    $result_publication = $prepare_query->execute([]);

    
?>