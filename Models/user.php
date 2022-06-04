<?php
	require("Connection.php");
	
	class user {
	       private  $con;
		private $c;
		private $id;
		private $username;
		private $password;
		
		
		
		
		
		public function __construct()
		
  {
   
    $ctp = func_num_args();
   
    $args = func_get_args();
   
        
    switch($ctp)
    {
        case 3:
           
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id =$args[0];
			$this->username =$args[1];
			$this->password = $args[2];
			
            break;
         case 1:
                       $this->con = new Connection();
			$this->c = $this->con->getConnection();
			$this->id =$args[0];
			$this->username ="";
			$this->password = "";   
           
            break;
        
         default:
            break;
    }
}

		
		
		
		
		 function getId(){
			return $this->id;
		}
		
		
	    
	   function getUsername(){
			return $this->username;
		}
		
		function getPassword(){
			return $this->password;
		}
		
		
		
	
		public function createUser(){
		
			try{
				$query = "insert into user  values ($this->id,'$this->username',md5('$this->password') );";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function deleteUser(){
		
			try{
				
				$query = "delete from user where id =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
			public function updateUserByUsername($username){
		
			try{
				
				$query = "update user set username='$username' where id =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		public function updateUserByPasssword($password){
		
			try{
			
				
				$query = "update user set password=md5('$password') where id =$this->id;";
			
				$r = $this->c->exec ($query);
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
		
		
		
		
			public function readUser(){
		
			try{
				
				$query = "select  * from user where id =$this->id;";
			
				$r = $this->c->query ($query);
				
				if ($donnees = $r->fetch())
				 return "Nom d'utilisateur : ". $donnees['username'] ;
				       
				       
				
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		
	}

?>
