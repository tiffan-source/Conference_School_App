<?php
	require_once("Connection.php");

	class Conference{
		public $id_conf;
		public $nom_conference;
		public $description;
		public $status;
		public $d_day;
		public $creator;
		public $last_modification_date;

		public function __construct($id_conf = null, $nom_conference = null, $description = null, $d_day = null){
			$this->id_conf = $id_conf;
			$this->nom_conference = $nom_conference;
			$this->description = $description;
			$this->d_day = $d_day;

		}
	    
		/**
		 * All Getter
		 */

		/*
	   function getId(){
			return $this->id_conf;
		}
		
		function getNom(){
			return $this->nom_conf;
		}
		
		
		function getDescription(){
			return $this->description;
		}
		*/

		/**
		 * CRUD
		 */
		
		public function createConference($id_creator){
			$new_connection = new Connection();

			$query = "INSERT INTO conference (nom_conf, description, d_day, creator) VALUES (?, ?, ?, ?);";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->nom_conference, $this->description, $this->d_day, $id_creator]);

			return $result;
		}
		
		public function deleteConference(){
			$new_connection = new Connection();
			
			$query = "DELETE FROM conference WHERE id_conf = ?;";
		
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->id_conf]);

			return $result;
		}

		public function updateConference($optionToModify){
			$new_connection = new Connection();

			$sentenceSet = "";
			$valueTab = [];

			foreach($optionToModify as $key => $value){
				$sentenceSet .= " $key = ?,";
				$valueTab[] = $value;
			}

			$valueTab[] = $this->id_conf;

			$sentenceSet[-1] = " ";
		
			$query = 'UPDATE conference SET'.$sentenceSet.' WHERE id_conf = ?;';

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute($valueTab);

			return $result;
		}
		
		static public function getAllConference(){
			$new_connection = new Connection();

			$query = "SELECT * FROM conference";

			$data_all_conference = $new_connection->getConnection()->query($query);

			$tab_conference = [];

			while($data = $data_all_conference->fetch()){
				$conference_item = new Conference();

				$conference_item->id_conf = $data['id_conf'];
				$conference_item->nom_conference = $data['nom_conf'];
				$conference_item->description = $data['description'];
				$conference_item->status = $data['status'];
				$conference_item->creator =  $data['creator'];
				$conference_item->d_day =  $data['d_day'];
				$conference_item->last_modification_date = $data['last_modification_date'];

				$tab_conference[] = $conference_item;
			}

			return $tab_conference;
		}

		static public function getConference($id){
			$new_connection = new Connection();

			$query = "SELECT * FROM conference WHERE id_conf = ?";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);

			$data = $query_prepare->fetch(PDO::FETCH_ASSOC);

			$conf = new Conference($data["id_conf"] ?? 'default value', $data["nom_conf"] ?? 'default value', $data["description"] ?? 'default value', $data["d_day"] ?? 'default value');

			return $conf;
		}
	}
