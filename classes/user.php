<?php
include('password.php');
class User extends Password{

    private $_db;
    private $username;
    private $email;
    private $password;
    private $usersid;
    
      public function getUsersID()
        {
            return $this->usersid;
        }

 
        public function setUsersID($username)
        {
            $this->usersid = $usersid;
        }
    
       public function getUsername()
        {
            return $this->username;
        }

 
        public function setUsername($username)
        {
            $this->username = $username;
        }
        
		
       public function getEmail()
        {
            return $this->email;
        }

 
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        public function getPassword()
        {
            return $this->password;
        }

 
        public function setPassword($password)
        {
            $this->password = $password;
        }
    
     public function getPicture()
        {
            return $this->picture;
        }

 
        public function setPicture($picture)
        {
            $this->picture = $picture;
        }

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }
    
    


	private function get_user_hash($username){

		try {
			$stmt = $this->_db->prepare('SELECT password, username, usersID FROM users WHERE username = :username');
			$stmt->execute(array('username' => $username));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}
    
  

	public function login($username,$password){

		$row = $this->get_user_hash($username);

		if($this->password_verify($password,$row['password']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['username'] = $row['username'];
		    $_SESSION['usersID'] = $row['usersID'];
            
            $check = $this->isAdmin();            
            if ($check) {
                     $_SESSION ['admin'] = 'admin';  
            }
            
     
            
            
		    return true;
            
            
		}
        
      
        
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}
    
    
    //OWN
    
    public function isAdmin () {
  $conn = Db::getInstance();
      
            $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT type FROM users WHERE usersid = :usersid");
               $statement->bindValue(":usersid", $usersid);

        $statement->execute();

        $result = $statement->fetchAll();
        if ($result[0][type] != 'Student' ) {
            return true;
        }
        
        else {
            
            return false;
        }
    }
    
    
        public function getUsers()
    {
$conn = Db::getInstance();
      
            $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT * FROM users WHERE usersid != :usersid");
               $statement->bindValue(":usersid", $usersid);

        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
    
           public function getSingleUser()
    {
$conn = Db::getInstance();
      
        
        $statement = $conn->prepare("SELECT * FROM users WHERE usersID = :usersID");
               $statement->bindValue(":usersID", $_GET['id']);

        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
    
         public function getHours(){
    
   $conn = Db::getInstance();

        $statement = $conn->prepare("SELECT SUM(worktime) AS totalwork FROM tasks WHERE owner = :usersid;");
                 $statement -> bindValue(":usersid", $_GET['id']);
        $statement->execute();

        $result = $statement->fetchAll();
        $sumhours = $result[0]['totalwork'];
        return $sumhours;
}
        

    
    
     public function editProfile()
    {
        $conn = Db::getInstance();
         
$usersid = $_SESSION['usersID'];
   
        $statement = $conn->prepare("UPDATE users SET username = :username, email = :email WHERE usersid = :usersid");
        $statement->bindValue(":username", $this->getUsername());
        $statement->bindValue(":email", $this->getEmail());
        $statement->bindValue(":usersid", $usersid);
        $statement->execute();
    
       $updatename = $this->getUsername();
    $_SESSION['username'] = $updatename;
        
    }
    
    
    public function uploadPicture(){ //upload_avatar($file)
	
        $file = $_FILES['picture'];
        
        	if(!empty($file)){
				$file_name = $file['name'];
				$temp_name = $file['tmp_name'];
				$imgtype = $file['type'];
				$ext = $this->getExtension($imgtype);
				$target_path = "assets/img/uploads/".$file_name;

				if(move_uploaded_file($temp_name, $target_path)){
                    
			        $conn = Db::getInstance();
         
$usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("UPDATE users SET picture = :picture WHERE usersid = :usersid");
        $statement->bindValue(":picture", $this->getPicture());
        $statement->bindValue(":usersid", $usersid);
        $statement->execute();
                    
				}
			}
        
		}

		public function getExtension($imagetype){
			if(empty($imagetype)){
				return false;
			}else{
				switch($imagetype){
					case 'image/bmp': return '.bmp';
					case 'image/gif': return '.gif';
					case 'image/jpeg': return '.jpg';
					case 'image/png': return '.png';
					default: return false;
				}
			}
		}
    
    public function getProfilePicture() {
        
        $conn = Db::getInstance();
      
        $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT picture FROM users WHERE usersID = :usersID");
               $statement->bindValue(":usersID", $usersid);

        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }

}






?>
