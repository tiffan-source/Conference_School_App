<?php
    require_once("connection.php");

    require("vendor/autoload.php");

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    function getPublication(){
            
        $connection = getConnection();
        
        $query = "SELECT * FROM publication where id_conf_conference = ?";
        
        $prepare_query = $connection->prepare($query);

        $result_publication = $prepare_query->execute([$_ENV["CONFERENCE_TEST"]]);
        
        $data = $prepare_query->fetchAll();

        return $data;
    }
