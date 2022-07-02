<?php
	require_once("Connection.php");

	class Participant{
		public $id_conf;
		public $id_participant;
		public $nom_participant;
		public $inscrit;
		public $prenom_participant;
		public $email_participant;

		public function __construct($id_participant = null, $id_conf = null, $nom_participant = null, $prenom_participant = null, $email_participant = null){
			$this->id_participant = $id_participant;
			$this->id_conf = $id_conf;
			$this->nom_participant = $nom_participant;
			$this->prenom_participant = $prenom_participant;
			$this->email_participant = $email_participant;
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
		
		public function deleteParticipant(){
			$new_connection = new Connection();
			
			$query = "DELETE FROM participant WHERE id_participant = ?;";
		
			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute([$this->id_participant]);

			return $result;
		}

		public function updateParticipant($optionToModify){
			$new_connection = new Connection();

			$sentenceSet = "";
			$valueTab = [];

			foreach($optionToModify as $key => $value){
				$sentenceSet .= " $key = ?,";
				$valueTab[] = $value;
			}

			$valueTab[] = $this->id_participant;

			$sentenceSet[-1] = " ";
		
			$query = 'UPDATE participant SET'.$sentenceSet.' WHERE id_participant = ?;';

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$result = $query_prepare->execute($valueTab);

			return $result;
		}
		
		static public function getAllParticipant(){
			$new_connection = new Connection();

			$query = "SELECT * FROM participant where inscrit = 'NON'";

			$data_all_participant = $new_connection->getConnection()->query($query);

			$tab_participant = [];

			while($data = $data_all_participant->fetch()){
				$participant_item = new Participant();
				$participant_item->id_participant = $data['id_participant'];
				$participant_item->id_conf = $data['id_conf_conference'];
				$participant_item->nom_participant = $data['nom_participant'];
				$participant_item->prenom_participant = $data['prenom_participant'];
				$participant_item->email_participant = $data['email_participant'];

				$tab_participant[] = $participant_item;
			}

			return $tab_participant;
		}

		static public function getParticipant($id){
			$new_connection = new Connection();

			$query = "SELECT * FROM participant WHERE id_participant = ?";

			$query_prepare = $new_connection->getConnection()->prepare($query);

			$testQuery = $query_prepare->execute([$id]);

			$data = $query_prepare->fetch(PDO::FETCH_ASSOC);

			$participant = new Participant($data["id_participant"], $data["id_conf_conference"], $data["nom_participant"], $data["prenom_participant"], $data["email_participant"]);

			return $participant;
		}
	}
