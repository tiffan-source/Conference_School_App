<?php

require("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../Configs');
$dotenv->load();

class Connection{

	private $connexion;
	
	private $host;
	private $dbname;
	private $username;
	private $password;

	function __construct(){
		$this->host = $_ENV['USER_HOST'];
		$this->dbname = $_ENV['USER_DBNAME'];
		$this->username = $_ENV['USER_USERNAME'];
		$this->password = $_ENV['USER_PWD'];

		$dsn = "mysql:host=$this->host;dbname=$this->dbname";

		$this->connexion = new PDO($dsn, $this->username, $this->password);
	}
	
	function getConnection(){
		return $this->connexion;
	}
}
?>
