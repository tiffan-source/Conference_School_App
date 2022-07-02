<?php
    require_once("connection.php");
    require("vendor/autoload.php");

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    function getConference(){
        $connection = getConnection();
        
        $query = "SELECT * FROM conference WHERE id_conf = ?";
        
        $prepare_query = $connection->prepare($query);

        $prepare_query->execute([$_ENV["CONFERENCE_TEST"]]);
        
        $data = $prepare_query->fetch(PDO::FETCH_ASSOC);
        
        return $data;
    }
?>