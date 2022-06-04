<?php
	require("Connection.php");
	
	class activite{
	       private $con;
		private $c;
		private $id_act;
		private $nom_act;
		private $description;
		private $id_conf;
		
		
		
		
		
		public function __construct()
{

    $ctp = func_num_args();
   
    $args = func_get_args();
   
   
    
    switch($ctp)
    {
        case 4:
           
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			
			$this->id_act =$args[0];
			$this->nom_act =$args[1];
			$this->description = $args[2];
			$this->id_conf =$args[3];
            break;
        case 1:
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id_act =$args[0];
			$this->nom_act ="";
			$this->description = "";
			$this->id_conf =0;
           
            break;
        
         default:
            break;
    }
}

		
		
		
		
		function getId(){
			return $this->id_act;
		}
		
		
	    
	   function getIdConf(){
			return $this->id_conf;
		}
		
		function getNom(){
			return $this->nom_act;
		}
		
		function getDescription(){
			return $this->description;
		}
		

		public function createActivite(){
		
			try{
			
	$query = "insert into activite  values ($this->id_act,'$this->nom_act','$this->description',$this->id_conf);"; 
	
				 $this->c->exec ($query);
			
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function deleteActivite(){
		
			try{
				
				$query = "delete from activite where id_activite =$this->id_act;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function updateActiviteByName($nom){
		
			try{
				
				$query = "update activite set nom_activite='$nom' where id_activite =$this->id_act;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
		
		
		public function updateActiviteByDescription($desc){
		
			try{
				$query = "update activite set description='$desc' where id_activite =$this->id_act;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	
			public function readActivite(){
		
			try{
				
				$query = "select *  from activite where id_activite =$this->id_act;";
			
				$r = $this->c->query ($query);
				
				if ($donnees = $r->fetch())
				 return "Nom de l'activité : ". $donnees['nom_activite'].'<br/>'. 
				        "Description : ". $donnees['description'].'<br/>'.
				        "Id de la conférence : ". $donnees['id_conf_conference'];
				       
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}

?>
