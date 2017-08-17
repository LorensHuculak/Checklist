<?php
	class Lists {
        
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
        $statement = $conn->prepare("SELECT * FROM lists");
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
		
    }






?>