<?php 

// $tasks = new Tasks();
$item = $tasks->getSingleTask();


?>
<!-- General Forms -->
<div class="g-pa-30 g-mb-30">
  <div class="row">
 <a href="javascript:history.back()"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>Task</h2>
  </div>
   <hr class="g-mx-minus-30">
<div class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-minus-1">
    <div class="g-mt-2">
      <img class="g-width-50 g-height-50 rounded-circle" src="assets/img/temp/img7.jpg" alt="Image Description">
    </div>
    <div class="align-self-center g-px-10">
      <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
        <span class="g-mr-5"><?php echo $item[0]['taskname']; ?></span>
       <?php
						$current = new DateTime("now");
						$deadline = new DateTime($item[0]['deadline']);
						$interval = $current->diff($deadline);
        
        
            
            if($interval->format('%r%a days') > 14){
							echo "<span class='u-label u-label--sm g-bg-green g-rounded-20 g-ml-5 g-px-10'>" . $interval->days . "d</span>";
						}else if($interval->format('%r%a days') > 0){
							echo "<span class='u-label u-label--sm g-bg-orange g-rounded-20 g-ml-5 g-px-10'>" . $interval->days . "d</span>";
						}else{
							echo "<span class='u-label u-label--sm g-bg-red g-rounded-20 g-ml-5 g-px-10'>Expired</span>";
						}
            
            
            ?>
      </h5>
      
      
      <p class="m-0"><?php echo $item[0]['course'] . " - " . $item[0]['worktime'] . "h Estimated Work Time"; ?></p>
    </div>
    <div class="align-self-center ml-auto">
      <span class="g-font-size-12 g-color-green">4k+ earned</span>
    </div>
  </div>
  </div>
  
  <!-- reaction -->
  
 
<!-- Text Inputs & Textareas -->
<form class=" g-pa-30 g-mb-30 g-pt-0">
  


  <div class="form-group mb-0">
    <div class="u-input-group-v2">
      <textarea id="message" class="form-control rounded-0 u-form-control g-resize-none" name="message" rows="4"></textarea>
      <label for="message">Comment</label>
    </div>
  </div>
  <button type="button" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Send</button>
</form>
<!-- End Text Inputs & Textareas -->
  <!-- End Text Input -->

  
  <!-- Comments -->
  
<div class="media g-brd-around g-pa-30 g-mb-20">
  <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="assets/img/temp/img7.jpg" alt="Image Description">
  <div class="media-body">
    <div class="g-mb-15">
      <h5 class="d-flex justify-content-between align-items-center h5 g-color-gray-dark-v1 mb-0">
        <span class="d-block g-mr-10">James Coolman</span>
        
      </h5>

    </div>

    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

    </div>
  </div>
  
<!-- end comment -->
<!-- End General Forms -->
              