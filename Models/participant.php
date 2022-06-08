<?php
	require("Connection.php");
	
	class participant{
		private $id_part;
		private $nom_part;
	       private $con;
		private $c;
		
		public function __construct()
{
    $ctp = func_num_args();
   
    $args = func_get_args();
   
	if(gettype(agrs[0] == "string")){	           
            $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id_part =$args[0];
			$this->nom_part =$args[1];
	}
	if(gettype(agrs[0] == "integer")){	           
            $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id_part =$args[0];
			$this->nom_part ="";
			
	}
}

		
		
		
	    
	    public function getId(){
			return $this->id_part;
		}
		
		public function getNom(){
			return $this->nom_part;
		}
	
		public function createParticipant(){
		
			try{
				$query = "insert into participant values ($this->id_part,'$this->nom_part');";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function deleteParticipant(){
		
			try{
				
				$query = "delete from participant where id_participant =$this->id_part;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
			public function updateParticipant($nom){
		
			try{
				
				$query = "update participant set nom_participant='$nom' where id_participant =$this->id_part;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
	
		
		
			public function readParticipant(){
		
			try{
				
				$query = "select nom_participant  from participant where id_participant =$this->id_part;";
			
				$r = $this->c->query ($query);
				if ($donnees = $r->fetch())
				return "Nom du participant : ". $donnees['nom_participant'] ;
				        
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>
