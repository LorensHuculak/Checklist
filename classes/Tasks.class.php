<?php
	class Tasks {
        
        private $tasksid;
        private $taskname;
        private $course;
        private $deadline;
        private $worktime;
        private $owner;
        private $parentlist;
        private $state;
        
         public function getTasksID()
        {
            return $this->tasksid;
        }

 
        public function setTasksID($tasksid)
        {
            $this->tasksid = $tasksid;
        }
        
		
       public function getTaskName()
        {
            return $this->taskname;
        }

 
        public function setTaskName($taskname)
        {
            $this->taskname = $taskname;
        }
        
        public function getDeadline()
        {
            return $this->deadline;
        }

 
        public function setDeadline($deadline)
        {
            $this->deadline = $deadline;
        }
          
        public function getCourse()
        {
            return $this->course;
        }

 
        public function setCourse($course)
        {
            $this->course = $course;
        }
        
        public function getWorkTime()
        {
            return $this->worktime;
        }

 
        public function setWorkTime($worktime)
        {
            $this->worktime = $worktime;
        }
        
           public function getOwner()
        {
            return $this->owner;
        }

 
        public function setOwner($owner)
        {
            $this->owner = $owner;
        }
        
          
           public function getParentList()
        {
            return $this->parentlist;
        }

 
        public function setParentList($parentlist)
        {
            $this->parentlist = $parentlist;
        }
        
             public function getState()
        {
            return $this->state;
        }

 
        public function setState($state)
        {
            $this->state = $state;
        }



        
		public function addTask(){
            

$conn = Db::getInstance();
	       
  
        $statement = $conn->prepare("INSERT INTO tasks (taskname, course, deadline, worktime, owner, parentlist, state) VALUES (:taskname, :course, :deadline, :worktime, :owner, :parentlist, :state);");
        $statement -> bindValue(":taskname", $this->getTaskName());
        $statement -> bindValue(":course", $this->getCourse());
        $statement -> bindValue(":deadline", $this->getDeadline());
        $statement->bindValue(":worktime", $this->getWorkTime());
              $statement -> bindValue(":owner", $this->getOwner());
        $statement -> bindValue(":parentlist", $this->getParentList());
        $statement->bindValue(":state", $this->getState());

        $statement->execute();
            
		}

    public function getTasks()
    {
$conn = Db::getInstance();
  $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT * FROM tasks WHERE owner = :usersid ORDER BY deadline asc");
        $statement -> bindValue(":usersid",  $usersid);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
        
        public function getSingleTask()
    {
$conn = Db::getInstance();
      
        
        $statement = $conn->prepare("SELECT * FROM tasks WHERE tasksID = :tasksID");
               $statement->bindValue(":tasksID", $_GET['id']);

        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
        

        
    public function getListTasks()
    {
$conn = Db::getInstance();
  $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT * FROM tasks WHERE owner = :usersid and parentlist = :parentlist ORDER BY deadline asc");
        $statement -> bindValue(":usersid",  $usersid);
          $statement -> bindValue(":parentlist",  $_GET['name']);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
        
             
    public function getCourseTasks()
    {
$conn = Db::getInstance();
  $usersid = $_SESSION['usersID'];
        $statement = $conn->prepare("SELECT * FROM tasks WHERE owner = :usersid and course = :course ORDER BY deadline asc");
        $statement -> bindValue(":usersid",  $usersid);
          $statement -> bindValue(":course",  $_GET['name']);
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
		
		
      public function deleteTask($tasksid)
    {
        $conn = Db::getInstance();;
        $statement = $conn->prepare("DELETE FROM tasks WHERE tasksID = :tasksID");
        $statement->bindValue(':tasksID', $tasksid);
       $statement->execute();
    }  
	     
    public function deleteTasks($parentlist)
    {
        $conn = Db::getInstance();;
        $statement = $conn->prepare("DELETE FROM tasks WHERE parentlist = :parentlist");
        $statement->bindValue(':parentlist', $parentlist);
       $statement->execute();
    }
        
          public function updateTask()
    {
  $conn = Db::getInstance();;
   
        $statement = $conn->prepare("UPDATE tasks SET taskname = :taskname, course = :course, deadline = :deadline, worktime = :worktime, owner = :owner, parentlist = :parentlist WHERE tasksID = :tasksid");
                   $statement -> bindValue(":tasksid", $_GET['id']);
     $statement -> bindValue(":taskname", $this->getTaskName());
        $statement -> bindValue(":course", $this->getCourse());
        $statement -> bindValue(":deadline", $this->getDeadline());
        $statement->bindValue(":worktime", $this->getWorkTime());
              $statement -> bindValue(":owner", $this->getOwner());
        $statement -> bindValue(":parentlist", $this->getParentList());

        $statement->execute();
    
    }
        
        
        public function getHours(){
    
   
      $conn = Db::getInstance();
      

        $statement = $conn->prepare("SELECT SUM(worktime) AS totalwork FROM tasks WHERE owner = :usersid;");
                 $statement -> bindValue(":usersid", $this->getUsersID);
        $statement->execute();

        $result = $statement->fetchAll();
        $sumhours = $result[0]['totalwork'];
        return $sumhours;
}
        
        
  
        
        
    }






?>