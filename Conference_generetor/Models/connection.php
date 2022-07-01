<?php
require("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

function getConnection(){
    $host = $_ENV["USER_HOST"];
    $dbname = $_ENV["USER_DBNAME"];
    $username = $_ENV["USER_USERNAME"];
    $password = $_ENV["USER_PWD"];

    $dsn = "mysql:host=$host;dbname=$dbname";

    $connexion = new PDO($dsn, $username, $password);

    // echo($connexion);

    return $connexion;
}