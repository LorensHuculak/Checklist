


<ul class="list-unstyled">
 
 <?php 
		$tasks = $tasks->getTasks();
		foreach($tasks as $item):
	?>
 
  <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-minus-1">
    <div class="g-mt-2">
         <div class="align-self-center ml-auto">
        <label class="u-check g-mr-15 mb-0">
        <input class="hidden-xs-up g-pos-abs g-top-10 g-left-10" type="checkbox" >
        <div class="u-check-icon-checkbox-v3 g-brd-gray-light-v3 g-brd-primary--checked g-bg-primary--checked">
          <i class="fa fa-check g-absolute-centered g-color-white g-show-check"></i>
          <i class="fa fa-plus g-absolute-centered g-color-gray-light-v2 g-hide-check"></i>
        </div>
      </label>
    </div>
    </div>
    <div class="align-self-center g-px-10">
      <a href="task_page.php?id=<?php echo $item['tasksID']; ?>"><h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
        <span class="g-mr-5"><?php echo $item['taskname']; ?></span>
        
        	<?php
						$current = new DateTime("now");
						$deadline = new DateTime($item['deadline']);
						$interval = $current->diff($deadline);
        
        
            
            if($interval->format('%r%a days') > 14){
							echo "<span class='u-label u-label--sm g-bg-green g-rounded-20 g-ml-5 g-px-10'>" . $interval->days . "d</span>";
						}else if($interval->format('%r%a days') > 0){
							echo "<span class='u-label u-label--sm g-bg-orange g-rounded-20 g-ml-5 g-px-10'>" . $interval->days . "d</span>";
						}else{
							echo "<span class='u-label u-label--sm g-bg-red g-rounded-20 g-ml-5 g-px-10'>MISSED</span>";
						}
            
            
            ?>
      </h5></a>
      <p class="m-0"><?php echo $item['course']; ?></p>
    </div>

  </li>

    
  	<?php endforeach; ?>
  	
  	   
     <li class="d-flex justify-content-start  g-pa-20 g-mb-minus-1">
  
    <div class="align-self-center g-px-10">
       <a  href="new_task.php">
      <h5 class="h6 g-font-weight-600 g-color-primary g-mb-3 g-pl-35 ">
          <i class="fa fa-plus g-mr-5"> </i>
        <span class="g-mr-5 ">Add Task</span>
      </h5>
       </a>

    </div>
    <div class="align-self-center ml-auto ">
    
     
               
    </div>
  </li>
</ul>
               
  