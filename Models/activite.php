<?php
	require_once("Connection.php");
	
	class activite{
		private $id_activite;
		private $nom_activite;
		private $description_activite;
		
		public function __construct($id_activite = null, $nom_activite = null, $description_activite = null){
        	$this->id_activite = $id_activite;
			$this->nom_activite = $nom_activite;
			$this->description_activite = $description_activite;
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

			$query = "INSERT INTO activite (id_conf_conference, nom_activite, description) VALUES (?, ?, ?);";
			
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$id_conf, $this->nom_activite, $this->description_activite]);

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

				$tab_activite[] = $activite_item;
			}
			return $tab_activite;
		}
		
		public function getActivite($id){
			$new_connection = new Connection();

			$query = "SELECT * FROM activite WHERE id_activite = ?";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);

			if($testQuery){
				$data = $query_prepare->fetchAll();

				$activite = new Activite($data[0]["id_activite"], $data[0]["nom_activite"], $data[0]["description"]);
	
				return $activite;
			}
			return null;
		}
		
	}

?>
