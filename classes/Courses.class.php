<?php
	class Courses {
        
        private $coursesid;
        private $coursename;
        
		
       public function getCourseName()
        {
            return $this->coursename;
        }

 
        public function setCourseName($coursename)
        {
            $this->coursename = $coursename;
        }
        
        public function getCourseID()
        {
            return $this->courseid;
        }

 
        public function setCourseID($courseid)
        {
            $this->courseid = $courseid;
        }
        
       


        
		public function addCourse(){
            

$conn = Db::getInstance();
	       
  
        $statement = $conn->prepare("INSERT INTO courses (coursename) VALUES (:courseName);");
        $statement -> bindValue(":courseName", $this->getCourseName());

        $statement->execute();
            
		}

    public function getCourses()
    {
$conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM courses");
        $statement->execute();

        $result = $statement->fetchAll();
        return $result;
    }
		
        
	
        
        
        
   public function deleteCourse( $courseid )
    {
        $conn = Db::getInstance();
       

        $statement = $conn->prepare("DELETE FROM courses WHERE coursesID = :coursesID");
        $statement->bindValue(':coursesID', $courseid);

        if ($statement->execute()) {
            return true;
        } else {
            throw new \Exception("nothing to delete");
        }
    }
        
        
    }






?>