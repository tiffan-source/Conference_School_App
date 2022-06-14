<?php
	require_once("Connection.php");
	
	class appel {
	    private  $con;
		private $c;
		private $id;
		private $sujet;
		private $id_conf;

		public function __construct()
		{
  
    echo 'Hello';
    $ctp = func_num_args();
   
    $args = func_get_args();
   
    echo $ctp;
    
    switch($ctp)
    {
        case 2:
           
        	$this->con = new Connection();
			$this->c = $this->con->getConnection();
			//$this->id=$args[0];
			$this->sujet =$args[0];
			$this->id_conf =$args[1];
            break;
         case 1:
                       
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id=$args[0];
			$this->sujet ="";
			$this->id_conf =0;
            break;
        
         default:
            break;
    }
}

		
		
		
		
		 function getId(){
			return $this->id;
		}
		
		
	    
	   function getIdConf(){
			return $this->id_conf;
		}
		
		function getSujet(){
			return $this->sujet;
		}
		
		
		
	
		public function createAppel(){
		echo 'Yeah';
		
			try{
			$query = "insert into appel  values ($this->id,'$this->sujet',$this->id_conf);";
			echo $query;
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function deleteAppel(){
		
			try{
				
				$query = "delete from appel where id_appel =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function updateAppel($sujet){
		
			try{
				
				$query = "update appel set sujet='$sujet' where id_appel =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function readAppel(){
		
			try{
				
				$query = "select *  from appel where id_appel =$this->id;";
			
				$r = $this->c->query ($query);
				
				if ($donnees = $r->fetch())
				 return "Sujet de l'appel : ". $donnees['sujet'].'<br/>'. 
				       "Id de la conférence : ". $donnees['id_conf_conference'];
				      
				       
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}

?>
