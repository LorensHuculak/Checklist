<?php
	class Lists {
        
        private $listsid;
        private $listName;
        private $listOwner;
        private $privacy;
        
		
       public function getListName()
        {
            return $this->listName;
        }

 
        public function setListName($listName)
        {
            $this->listName = $listName;
        }
        
        public function getListOwner()
        {
            return $this->listOwner;
        }

 
        public function setListOwner($listOwner)
        {
            $this->listOwner = $listOwner;
        }
        
        public function getPrivacy()
        {
            return $this->privacy;
        }

 
        public function setPrivacy($privacy)
        {
            $this->privacy = $privacy;
        }
        
           public function getListsID()
        {
            return $this->listsid;
        }

 
        public function setListsID($listsid)
        {
            $this->listsid = $listsid;
        }


        
		public function addList(){
            

$conn = Db::getInstance();
	       
  
        $statement = $conn->prepare("INSERT INTO lists (listname, listowner, public) VALUES (:listName, :listOwner, :public);");
        $statement -> bindValue(":listName", $this->getListName());
        $statement -> bindValue(":listOwner", $this->getListOwner());
        $statement->bindValue(":public", $this->getPrivacy());

        $statement->execute();
            
		}

    public function getLists()
    {
$conn = Db::getInstance();
        $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT * FROM lists WHERE listowner = :listOwner");
        $statement->bindValue(':listOwner', $usersid);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
		
    
         public function getPublicLists()
    {
$conn = Db::getInstance();
             
             $public = "1";
        $statement = $conn->prepare("SELECT * FROM lists WHERE public = :privacy and listowner = :listowner");
             $statement->bindValue(':privacy', $public);  
                     $statement->bindValue(':listowner', $_GET['id']);  
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
		
             
        
        
        
    public function deleteList()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("DELETE FROM lists WHERE listname = :listname");
        $statement->bindValue(':listname', $_GET['name']);
        if ($statement->execute()) {
            return true;
        } else {
            throw new \Exception("nothing to delete");
        }
    }
        
        
    }






?>