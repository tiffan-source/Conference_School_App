<?php

class Connection{

	private $connexion;

	function __construct(){
	
	$host = 'localhost';
	$dbname = 'Conference';
	$username = 'root';
	$password = '';

	$dsn = "mysql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
		try{
			$this->connexion = new PDO($dsn);
			//echo "Réussi !";
		} catch (PDOException $e){
		echo $e->getMessage();
		}
	}
	
	function getConnection(){
		return $this->connexion;
	}

}

?>
