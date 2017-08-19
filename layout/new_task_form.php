<?php 


$usersid = $_SESSION['usersID'];
$state = "0";

  if (!empty($_POST)) {
      
        $createTask = new Tasks();

        $createTask->setTaskName($_POST['taskname']);
        $createTask->setCourse($_POST['course']);
        $createTask->setDeadline($_POST['deadline']);
        $createTask->setWorkTime($_POST['worktime']);
        $createTask->setOwner($usersid);
        $createTask->setParentList($_POST['parentlist']);
        $createTask->setState($state);
      
        $createTask->addTask();
      
        }


?>
<!-- General Forms -->
<form method="post" class="g-pa-30 g-mb-30">
<div class="row">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>New Task</h2>
  </div>
   <hr class="g-brd-gray-light-v4 g-mx-minus-30">
  <!-- Text Input -->
  <div class="form-group g-mb-20">
    <label class="g-mb-10" for="inputGroup1_1">Task Name</label>
    <input name="taskname" id="inputGroup1_1" class="form-control form-control-md rounded-0" type="text" placeholder="Enter Name">

  </div>
  
  <!-- End Text Input -->
  
   <div class="form-group g-mb-25">
    <label for="exampleSelect1">Select Course</label>
    <select name="course" class="form-control rounded-0" id="exampleSelect1">
    
             <?php 
                             
			/* } */
          $courses = new Courses($db);
			$courses = $courses->getCourses();
			foreach($courses as $item): 
		?>
			     <option value="<?php echo $item['coursename']; ?>">
                
<?php echo $item['coursename']; ?>
                     </option>

		<?php endforeach; ?>  

    </select>
  </div>
  
 <!-- Select Single Date -->
  <div class="form-group g-mb-30">
    <label class="g-mb-10">Deadline</label>
 <input name="deadline" id="inputGroup1_1" class="form-control form-control-md rounded-0" type="date" placeholder="Enter Deadline">

  </div>
  <!-- End Select Single Date -->

   <!-- Quantity Input -->
  <div class="form-group g-mb-20">
    <label class="g-mb-10" for="inputGroup1_1">Work Time</label>
    <input name="worktime" id="inputGroup1_1" class="form-control form-control-md rounded-0" type="number" placeholder="Enter Estimated Hours">

  </div>
  <!-- End Quant Input -->
    
     
     
      <div class="form-group g-mb-25">
    <label for="exampleSelect1">Select List</label>
    <select name="parentlist" class="form-control rounded-0" id="exampleSelect1">
  
               <?php 
                             
			/* } */
          $lists = new Lists($db);
			$lists = $lists->getLists();
			foreach($lists as $item): 
		?>
			     <option value="<?php echo $item['listname']; ?>">
                
<?php echo $item['listname']; ?>
                     </option>

		<?php endforeach; ?>     
   
    </select>

                
  </div>
  
<button type="submit" name="addTask" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Add Task</button>


</form>
<!-- End General Forms -->
              