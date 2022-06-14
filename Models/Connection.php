<?php

class Connection{

	private $connexion;
	
	private $host;
	private $dbname;
	private $username;
	private $password;

	function __construct(){
		$this->host = '127.0.0.1';
		$this->dbname = 'Conference';
		$this->username = 'tiffane';
		$this->password = 'Anlyou4545';

		$dsn = "mysql:host=$this->host;dbname=$this->dbname";

		$this->connexion = new PDO($dsn, $this->username, $this->password);
	}
	
	function getConnection(){
		return $this->connexion;
	}
}
?>
