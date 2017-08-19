<?php 



  if (!empty($_POST)) {
      
            $createCourse = new Courses();

           $createCourse->setCourseName($_POST['coursename']);
            $createCourse->addCourse();
      
        }


?>
<!-- General Forms -->
<form method="post" class="g-pa-30 g-mb-30">
<div class="row">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>New Course</h2>
  </div>
   <hr class="g-brd-gray-light-v4 g-mx-minus-30">
  <!-- Text Input -->
  <div class="form-group g-mb-20">
    <input id="inputGroup1_1" class="form-control form-control-md rounded-0" name="coursename" type="text" placeholder="Enter Name">

  </div>
  <!-- End Text Input -->
  


  
<button type="submit" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Add Course</button>


</form>
<!-- End General Forms -->
              