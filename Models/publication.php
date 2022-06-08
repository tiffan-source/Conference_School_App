<?php
	require("Connection.php");
	
	class publication {
	       private  $con;
		private $c;
		private $id;
		private $titre;
		private $contenu;
		private $id_conf;
		
		
		
		
		
		public function __construct()
		
  {
    //echo 'Hello';
    $ctp = func_num_args();
   
    $args = func_get_args();
   
    //echo $ctp;
    
    switch($ctp)
    {
        case 3:
           
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			//$this->id =$args[0];
			$this->titre =$args[0];
			$this->contenu = $args[1];
			$this->id_conf =$args[2];
            break;
         case 1:
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id =$args[0];
			$this->titre ="";
			$this->contenu = "";
			$this->id_conf =0;
           
            break;
        
         default:
            break;
    }
}

		
		
		
		
		 function getId(){
			return $this->id;
		}
		
		
	    
	   function getTitre(){
			return $this->titre;
		}
		
		function getContenu(){
			return $this->contenu;
		}
		
		function getIdConf(){
			return $this->id_conf;
		}
		
	
		public function createPublication(){
		
			try{
			$query = "insert into publication (titre, id_conf_conference, contenu) values ('$this->titre',$this->id_conf, '$this->contenu') ;";
			echo $query;
			
				$r = $this->c->exec ($query);
				//echo $r;
				//echo $query;
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function deletePublication(){
		
			try{
				
				$query = "delete from publication where id_publication =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function updatePublicationByTitre($titre){
		
			try{
				
				$query = "update publication set titre='$titre' where id_publication =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		public function updatePublicationByContenu($contenu){
		
		
			try{
			
				$query = "update publication set contenu='$contenu' where id_publication =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
		
			public function readPublication (){
		
			try{
				
				$query = "select *  from publication where id_publication =$this->id;";
				
			
				$r = $this->c->query ($query);
				
				if ($donnees = $r->fetch())
				 return "Titre de la publication : ".$donnees['titre'].'<br/>'. 
				          "Contenu: ". $donnees['contenu'].'<br/>'.
				          "Id de la conférence : ". $donnees['id_conf_conference'];
				       

			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}

?>
