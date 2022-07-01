<?php
    require_once("connection.php");

    function getAppel(){
        $connection = getConnection();

        $query = "SELECT * FROM appel where id_conf_conference = ?";
        
        $prepare_query = $connection->prepare($query);

        $result_publication = $prepare_query->execute([$_ENV["CONFERENCE_TEST"]]);
        
        $data = $prepare_query->fetchAll();

        return $data;

    }
?>