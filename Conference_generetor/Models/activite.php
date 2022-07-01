<?php
    require_once("connection.php");

    require("vendor/autoload.php");

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    function  getActivite(){
        $connection = getConnection();
        
        $query = "SELECT * FROM activite where id_conf_conference = ?";
        
        $prepare_query = $connection->prepare($query);

        $result_activite = $prepare_query->execute([$_ENV["CONFERENCE_TEST"]]);

        $data = $prepare_query->fetch(PDO::FETCH_ASSOC);

        return $data;
    }