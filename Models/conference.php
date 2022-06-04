<?php
	require("Connection.php");
	
	class conference{
	       private $con;
		private $c;
		private $id_conf;
		private $nom_conf;
		private $description;
		
		
		
		
		
		public function __construct()
{
    $ctp = func_num_args();
   
    $args = func_get_args();
   
    
    switch($ctp)
    {
        case 3:
           
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id_conf =$args[0];
			$this->nom_conf =$args[1];
			$this->description = $args[2];
            break;
        case 1:
                     $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id_conf =$args[0];
			$this->nom_conf ="";
			$this->description = "";
           
            break;
        
         default:
            break;
    }
}

		
		
		
		

		
	    
	   function getId(){
			return $this->id_conf;
		}
		
		function getNom(){
			return $this->nom_conf;
		}
		
		function getDescription(){
			return $this->description;
		}
		
	
		public function createConference(){
		
			try{
				$query = "insert into conference  values ($this->id_conf,'$this->nom_conf','$this->description');";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function deleteConference(){
		
			try{
				
				$query = "delete from conference where id_conf =$this->id_conf;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function updateConferenceByName($nom){
		
			try{
				
				$query = "update conference set nom_conf='$nom' where id_conf =$this->id_conf;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
		
		
		public function updateConferenceByDescription($desc){
		
			try{
				$query = "update conference set description='$desc' where id_conf =$this->id_conf;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
			public function readConference(){
		
			try{
				
				$query = "select nom_conf,description  from conference where id_conf =$this->id_conf;";
			
				$r = $this->c->query ($query);
				
				if ($donnees = $r->fetch())
				 return "Nom de la conférence : ". $donnees['nom_conf'].'<br/>'. 
				       "Description : ". $donnees['description'];
				       return "yeah";
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}

?>
