<?php
require("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../Configs');
$dotenv->load();

function getConnection(){
    $host = $_ENV["HOST_USER"];
    $dbname = $_ENV["USER_DBNAME"];
    $username = $_ENV["USER_USERNAME"];
    $password = $_ENV["USER_PWD"];

    $dsn = "mysql:host=$host;dbname=$dbname";

    $connexion = new PDO($dsn, $username, $password);

    return $connexion;
}