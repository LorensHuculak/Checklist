<?php 

$tasks = new Tasks();
$item = $tasks->getSingleTask();

$usersid = $_SESSION['usersID'];

 if (!empty($_POST['message'])) {
      
            $createComment = new Comments();

           $createComment->setTasksID($_GET['id']);
            $createComment->setUsersID($usersid);
        $createComment->setMessage($_POST['message']);
            $createComment->addComment();
      
        }





?>
<!-- General Forms -->
<div class="g-pa-30 g-mb-30">
  <div class="row">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>Task</h2>
  </div>
   <hr class="g-mx-minus-30">
<div class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-minus-1">
   
    <div class="align-self-center g-px-10">
      <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
        <span class="g-mr-5"><?php echo htmlspecialchars($item[0]['taskname']); ?></span>
       <?php
						$current = new DateTime("now");
						$deadline = new DateTime($item[0]['deadline']);
						$interval = $current->diff($deadline);
        
        
            
            if($interval->format('%r%a days') > 14){
							echo "<span class='u-label u-label--sm g-bg-green g-rounded-20 g-ml-5 g-px-10'>" . $interval->days . "d</span>";
						}else if($interval->format('%r%a days') > 0){
							echo "<span class='u-label u-label--sm g-bg-orange g-rounded-20 g-ml-5 g-px-10'>" . $interval->days . "d</span>";
						}else{
							echo "<span class='u-label u-label--sm g-bg-red g-rounded-20 g-ml-5 g-px-10'>MISSED</span>";
						}
            
            
            ?>
      </h5>
      
      
      <p class="m-0"><?php echo htmlspecialchars($item[0]['course']) . " - " . $item[0]['worktime'] . "h Estimated Work Time"; ?></p>
    </div>
    
    
    <?php  

        
         if (!empty($owner = $tasks->getOwnership())) {
             
             echo '<div class="align-self-center ml-auto">
           <span ><a class="g-color-gray-dark-v4" href="edit_task.php?id=' . $item[0]['tasksID'] . '"><i class="fa fa-cog g-mr-15"></i></a></span>
      <span ><a  data-id="' . $_GET['id'] . '" class="deleteTask" class="g-color-red" href="home.php"><i class="fa fa-trash g-mr-15 g-color-red"></i></a></span>
    </div>';
             
         } 
    
    ?>
  
  </div>
  </div>
  
  <!-- reaction -->
  
 
<!-- Text Inputs & Textareas -->
<form method="post" class=" g-pa-30 g-mb-30 g-pt-0">
  


  <div class="form-group mb-0">
    <div class="u-input-group-v2">
      <textarea name="message" id="message" class="form-control rounded-0 u-form-control g-resize-none" name="message" rows="4"></textarea>
      <label for="message">Comment</label>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Send</button>
</form>
<!-- End Text Inputs & Textareas -->
  <!-- End Text Input -->

  
  <!-- Comments -->
  
  <?php 
$comments = new Comments();
		$comments = $comments->getComments();
		foreach($comments as $item):
	?>
  
<div class="media g-brd-around g-pa-30 g-mb-20">

   <div id="commentpic" class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" style="background: url('assets/img/uploads/<?php echo htmlspecialchars($item['picture']); ?>') ;"></div>
  <div class="media-body">
    <div class="g-mb-15">
      <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
        <span class="d-block g-mr-10"><?php echo htmlspecialchars($item['username']); ?></span>
        
      </h5>

    </div>

    <p><?php echo htmlspecialchars($item['message']); ?></p>

    </div>
  </div>
  
  <?php endforeach; ?>

  	
<!-- end comment -->
<!-- End General Forms -->
             



              