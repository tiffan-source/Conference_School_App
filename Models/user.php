<?php
	require_once("Connection.php");

	class User{
		public $id;
		public $username;
		public $password;
		
		public function __construct($id = null, $username = null, $password = null){
			
			$this->id = $id;
			$this->username = $username;
			$this->password = $password;
		}
	    
		/**
		 * All Getter
		 */

		/*
	
		*/

		/**
		 * CRUD
		 */
		
		static public function checkUser($username,$password){
			$new_connection = new Connection();

			$query = "SELECT * FROM user where username=?";

			$preparedStatement = $new_connection->getConnection()->prepare($query);
            $preparedStatement->execute([$username]);
			$user=$preparedStatement->fetchAll();

			if ($user[0] && $user[0]['password']==$password  )
				return $user[0]['id'];
			

			return  false;
		}
		
	}