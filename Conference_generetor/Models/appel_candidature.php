<?php
    require_once("connection.php");

    function getAppel(){
        $connection = getConnection();

        $query = "SELECT * FROM appel_a_candidature where id_conf_conference = ?";
        
        $prepare_query = $connection->prepare($query);

        $prepare_query->execute([$_ENV["CONFERENCE_TEST"]]);
        
        $data = $prepare_query->fetchAll();

        return $data;

    }
?>