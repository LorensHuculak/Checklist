
  <div class="row g-mt-20 g-ml-20 g-mb-20">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>Courses</h2>
  </div>
    <ul id="courses" class="list-unstyled">
    
     <?php 
   
        $courses = new Courses();
		$courses = $courses->getCourses();
		foreach($courses as $item):
	?>
   
   
    
  <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-minus-1">
   
    <div class="align-self-center g-px-10">
      <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
        <span class="g-mr-5"><?php echo $item['coursename']; ?></span>
        
      </h5>
    </div>
    <div class="align-self-center ml-auto">
         
         <a data-id="<?php echo $item['coursesid']; ?>" class="deleteCourse" href="#">
         
           <span class="u-icon-v1 g-color-red">     <i class="fa fa-trash g-mr-5"> </i></span>
           
          </a>
    </div>
  </li>
     
   <?php endforeach; ?>
  
    </ul>