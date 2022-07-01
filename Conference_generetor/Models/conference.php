<?php
    require_once("connection.php");

    $connection = getConnection();
    
    $query = "SELECT * FROM conference";
    
    $prepare_query = connection->prepare($query);

    $result_conference = $prepare_query->execute([]);

    
?>