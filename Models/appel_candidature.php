<?php
	require_once("Connection.php");
	
	class Appel{
	    
		public $id_appel;
		public $sujet_appel;
		public $contenu;

		public function __construct($id_appel = null, $sujet_appel = null, $contenu = null){
			$this->id_appel = $id_appel;
			$this->sujet_appel = $sujet_appel;
			$this->contenu = $contenu;
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

			$query = "INSERT INTO appel_a_candidature (id_conf_conference, sujet_appel, contenu) VALUES (?, ?, ?);";
			
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$id_conference, $this->sujet_appel, $this->contenu]);

			return $result;
		
		}
		
		public function deleteAppel(){
			$new_connection = new Connection();
			
			$query = "DELETE FROM appel_a_candidature WHERE id_appel = ?;";
		
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->id_appel]);

			return $result;
		}
		
		public function updateAppel($sujet){
			$new_connection = new Connection();

			$query = "UPDATE appel_a_candidature SET sujet='$sujet' WHERE id_appel = ?;";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute($this->id_appel);

			return $result;
		}
		
		static public function readAllAppel(){
			$new_connection = new Connection();

			$query = "SELECT * FROM appel_a_candidature";

			$data_all_appel = $new_connection->getConnection()->query($query);

			$tab_appel = [];

			while($data = $data_all_appel->fetch()){
				$appel_item = new Appel();

				$appel_item->id_appel = $data['id_appel'];
				$appel_item->sujet_appel = $data['sujet_appel'];
				$appel_item->contenu = $data['contenu'];
				
				$tab_appel[] = $appel_item;
			}
			return $tab_appel;
		}

		static public function getAppel($id, $type){
			$new_connection = new Connection();

			if($type == 0)
				$query = "SELECT * FROM appel_a_candidature WHERE id_appel = ?";
			else if($type == 1)
				$query = "SELECT * FROM appel_a_candidature WHERE id_conf_conference = ?";

				$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);
			if($testQuery){
				$all_appel = [];

				while($data = $query_prepare->fetch()){
					$appel= new Appel();

					$appel->id_appel = $data["id_appel"];
					$appel->sujet_appel = $data["sujet_appel"];
					$appel->contenu = $data["contenu"];

					$all_appel[] = $appel;
				}
				return $all_appel;
			}
			return null;
		}
	}
	
?>
