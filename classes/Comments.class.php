<?php
	class Comments {
        
        private $commentsid;
        private $tasksid;
        private $usersid;
        private $message;
        
		
       public function getCommentsID()
        {
            return $this->commentsid;
        }

 
        public function setCommentsID($commentsid)
        {
            $this->commentsid = $commentsid;
        }
        
        public function getTasksID()
        {
            return $this->tasksid;
        }

 
        public function setTasksID($tasksid)
        {
            $this->tasksid = $tasksid;
        }
        
        public function getUsersID()
        {
            return $this->usersid;
        }

 
        public function setUsersID($usersid)
        {
            $this->usersid = $usersid;
        }
        
           public function getMessage()
        {
            return $this->message;
        }

 
        public function setMessage($message)
        {
            $this->message = $message;
        }
        
        
    
         
		public function addComment(){
            

$conn = Db::getInstance();
	       
  
        $statement = $conn->prepare("INSERT INTO comments (tasksID, usersID, message) VALUES (:tasksID, :usersID, :message);");
        $statement -> bindValue(":tasksID", $this->getTasksID());
        $statement -> bindValue(":usersID", $this->getUsersID());
        $statement->bindValue(":message", $this->getMessage());

        $statement->execute();
            
		}
        
         public function getComments()
    {
$conn = Db::getInstance();

        $statement = $conn->prepare("SELECT * FROM comments INNER JOIN users ON comments.usersID = users.usersID WHERE tasksID = :tasksID ORDER BY commentsID desc");
        $statement -> bindValue(":tasksID",  $_GET["id"]);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }


        
        
    }






?>