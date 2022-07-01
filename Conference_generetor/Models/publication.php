<?php
    require_once("connection.php");

    function getPublication(){
            
        $connection = getConnection();
        
        $query = "SELECT * FROM publication where id_conf_conference = ?";
        
        $prepare_query = connection->prepare($query);

        $result_publication = $prepare_query->execute([]);
        return $result_publication;

    }    
