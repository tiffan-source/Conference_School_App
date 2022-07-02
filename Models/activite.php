<?php
	require_once("Connection.php");
	
	class Activite{
		public $id_activite;
		public $nom_activite;
		public $description_activite;
		public $date;
		public $type;
		
		public function __construct($id_activite = null, $nom_activite = null, $description_activite = null, $date = null, $type = null){
        	$this->id_activite = $id_activite;
			$this->nom_activite = $nom_activite;
			$this->description_activite = $description_activite;
			$this->date = $date;
			$this->type = $type;
    	}

		// function getIdActivite(){
		// 	return $this->id_activite;
		// }
		
		// function getNomActivite(){
		// 	return $this->nom_activite;
		// }
		
		// function getDescription(){
		// 	return $this->description;
		// }
		
		public function createActivite($id_conference){
			$new_connection = new Connection();

			$query = "INSERT INTO activite (id_conf_conference, nom_activite, description, type, date) VALUES (?, ?, ?, ?, ?);";
			
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$id_conference, $this->nom_activite, $this->description_activite, $this->type, $this->date]);

			return $result;
		}
		
		public function deleteActivite(){
			$new_connection = new Connection();
			
			$query = "DELETE FROM activite WHERE id_activite = ?;";
		
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->id_activite]);

			return $result;
		}
		
		public function updateActivite($optionToModify){
			$new_connection = new Connection();

			$sentenceSet = "";
			$valueTab = [];

			foreach($optionToModify as $key => $value){
				$sentenceSet .= " $key = ?,";
				$valueTab[] = $value;
			}

			$valueTab[] = $this->id_conf;

			$sentenceSet[-1] = " ";
		
			$query = 'UPDATE activite SET'.$sentenceSet.' WHERE id_conf = ?;';

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute($valueTab);

			return $result;
		}

		public function getAllActivite(){
			$new_connection = new Connection();

			$query = "SELECT * FROM activite";

			$data_all_activite = $new_connection->getConnection()->query($query);

			$tab_activite = [];

			while($data = $data_all_activite->fetch()){
				$activite_item = new Activite();

				$activite_item->id_activite = $data['id_activite'];
				$activite_item->nom_activite = $data['nom_activite'];
				$activite_item->description_activite = $data['description'];
				$activite_item->type = $data["type"];
				$activite_item->date = $data["date"];

				$tab_activite[] = $activite_item;
			}
			return $tab_activite;
		}
		
		static public function getActivite($id, $type){
			$new_connection = new Connection();


			if($type == 0)
				$query = "SELECT * FROM activite WHERE id_activite = ?";
			else if($type == 1)
				$query = "SELECT * FROM activite WHERE id_conf_conference = ?";


			$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);

			if($testQuery){

				$allActivity = [];

				while($data = $query_prepare->fetch()){
					$activity = new Activite();

					$activity->id_activite = $data["id_activite"];
					$activity->nom_activite = $data["nom_activite"];
					$activity->description_activite = $data["description"];
					$activity->date = $data["lieu"];
					$activity->type = $data["type"];
					$activity->date = $data["date"];

					$allActivity[] = $activity;
				}
	
				return $allActivity;
			}
			return null;
		}
		
	}