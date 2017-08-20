<?php
	class Foreigns {
        
        private $foreignID;
        private $usersID;
        private $listsID;

		
       public function getForeignID()
        {
            return $this->foreignID;
        }

 
        public function setForeignID($foreignID)
        {
            $this->foreignID = $foreignID;
        }
        
        public function getUsersID()
        {
            return $this->usersID;
        }

 
        public function setUsersID($usersID)
        {
            $this->usersID = $usersID;
        }
        
        public function getListsID()
        {
            return $this->listsID;
        }

 
        public function setListsID($listsID)
        {
            $this->listsID = $listsID;
        }
        
         

        // FOLLOW ACCOUNT
		public function addForeign($listid){
            

$conn = Db::getInstance();
	        $usersid = $_SESSION['usersID']; 
  
        $statement = $conn->prepare("INSERT INTO foreignlists (usersID, listsID) VALUES (:usersID, :listsID);");
        $statement -> bindValue(":usersID", $usersid);
        $statement -> bindValue(":listsID", $listid);

        $statement->execute();
            
		}
        
          // GET FOLLOWED LISTS
     public function getForeigns()
    {
$conn = Db::getInstance();
$usersid = $_SESSION ['usersID'];
        $statement = $conn->prepare("SELECT * FROM foreignlists INNER JOIN lists ON foreignlists.listsID = lists.listsID WHERE usersID = :usersID");
        $statement -> bindValue(":usersID",  $usersid);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
        
    
		
      // CHECK IF ALREADY FOLLOWING
         public function followExists($listid)
    {
$conn = Db::getInstance();
             
        $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT foreignID FROM foreignlists WHERE listsID = :listsID and usersID = :usersID");
             $statement->bindValue(':listsID', $listid);  
            $statement->bindValue(':usersID', $usersid);  
        $statement->execute();

        $result = $statement->fetchAll();
    
     
        if (!empty($result[0]['foreignID'])) {
        return $result[0]['foreignID'];
            } else {
            return false;
        }
    }
		
             
        
        // UNFOLLOW
   public function deleteForeign($listid)
    {
        $conn = Db::getInstance();
       
        $usersid = $_SESSION['usersID'];
       
        $statement = $conn->prepare("DELETE FROM foreignlists WHERE usersID = :usersID and listsID = :listsID");
        $statement->bindValue(':usersID', $usersid);
        $statement->bindValue(':listsID', $listid);
$statement->execute();
      
    }
        
        
    }






?>