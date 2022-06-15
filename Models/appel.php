<?php
	require_once("Connection.php");
	
	class Appel {
	    
		private $id_appel;
		private $sujet_appel;

		public function __construct($id_appel = null, $sujet_appel = null){
			$this->id_appel = $id_appel;
			$this->sujet_appel = $sujet_appel;
	    }

		//LES GETTERS
		public function getIdAppel(){
			return $this->id_appel;
		}
		
		public function getSujetAppel(){
			return $this->sujet_appel;
		}

		public function createAppel($id_conference){
			$new_connection = new Connection();

			$query = "INSERT INTO appel (id_conf_conference, sujet) VALUES (?, ?);";
			
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$id_conference, $this->sujet_appel]);

			return $result;
		}
		
		public function deleteAppel(){
			$new_connection = new Connection();
			
			$query = "DELETE FROM appel WHERE id_appel = ?;";
		
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->id_appel]);

			return $result;
		}
		
		public function updateAppel($sujet){
			$new_connection = new Connection();

			$query = "UPDATE appel SET sujet='$sujet' WHERE id_appel = ?;";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute($this->id_appel);

			return $result;
		}
		
		static public function readAllAppel(){
			$new_connection = new Connection();

			$query = "SELECT * FROM appel";

			$data_all_appel = $new_connection->getConnection()->query($query);

			$tab_appel = [];

			while($data = $data_all_appel->fetch()){
				$appel_item = new Appel();

				$appel_item->id_appel = $data['id_appel'];
				$appel_item->sujet_appel = $data['sujet'];

				$tab_appel[] = $appel_item;
			}
			return $tab_publication;
		}

		static public function getAppel($id){
			$new_connection = new Connection();

			$query = "SELECT * FROM appel WHERE id_appel = ?";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);

			if($testQuery){
				$data = $query_prepare->fetchAll();

				$appel = new Appel($data[0]["id_appel"], $data[0]["sujet"]);

				return $publication;
			}
			return null;
		}
	}
	
?>
