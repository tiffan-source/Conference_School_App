<?php
	require_once("Connection.php");
	
	class Publication {

		public $id_publication;
		public $titre_publication;
		public $content_publication;
		
		public function __construct($id_publication = null, $titre_publication = null, $content_publication = null){
			$this->id_publication = $id_publication;
			$this->titre_publication = $titre_publication;
			$this->content_publication = $content_publication;
		}

		// function getId(){
		// 	return $this->id;
		// }

	    // function getTitre(){
		// 	return $this->titre;
		// }
		
		// function getContenu(){
		// 	return $this->contenu;
		// }
		
		// function getIdConf(){
		// 	return $this->id_conf;
		// }
		
	
		public function createPublication($id_conf){
			$new_connection = new Connection();

			$query = "INSERT INTO publication (id_conf_conference, titre, contenu) VALUES (?, ?, ?);";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$id_conf, $this->titre_publication, $this->content_publication]);

			return $result;
		}
		
		public function deletePublication(){
			$new_connection = new Connection();
			
			$query = "DELETE FROM publication WHERE id_publication = ?;";
		
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->id_publication]);

			return $result;
		}
		
		public function updatePublication($optionToModify){
			$new_connection = new Connection();

			$sentenceSet = "";
			$valueTab = [];

			foreach($optionToModify as $key => $value){
				$sentenceSet .= " $key = ?,";
				$valueTab[] = $value;
			}

			$valueTab[] = $this->id_conf;

			$sentenceSet[-1] = " ";
		
			$query = 'UPDATE publication SET'.$sentenceSet.' WHERE id_conf = ?;';

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute($valueTab);

			return $result;
		}
		
		
		static public function getAllPublication (){
			$new_connection = new Connection();

			$query = "SELECT * FROM publication";

			$data_all_publication = $new_connection->getConnection()->query($query);

			$tab_publication = [];

			while($data = $data_all_publication->fetch()){
				$publication_item = new Publication();

				$publication_item->id_publication = $data['id_publication'];
				$publication_item->titre_publication = $data['titre'];
				$publication_item->content_publication = $data['contenu'];

				$tab_publication[] = $publication_item;
			}
			return $tab_publication;
		}

		static public function getPublication($id){
			$new_connection = new Connection();

			$query = "SELECT * FROM publication WHERE id_publication = ?";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);

			if($testQuery){
				$data = $query_prepare->fetchAll();

				$publication = new Publication($data[0]["id_publication"], $data[0]["titre"], $data[0]["contenu"]);
	
				return $publication;
			}
			return null;
		}
	}

?>
