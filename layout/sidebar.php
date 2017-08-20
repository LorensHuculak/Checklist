<?php 

$users = new User($db);
$item = $users->getProfilePicture();

?>
   

       <!-- Sidebar Navigation -->
    <div id="js-header" class="u-header u-header--side"
            data-header-position="left"
            data-header-breakpoint="lg">
      <div class="u-header__sections-container g-bg-white g-brd-right--lg g-brd-gray-light-v2 g-py-10 g-py-40--lg g-px-14--lg">
    

        <div class="u-header__section u-header__section--light">
          <nav class="navbar navbar-toggleable-md">
            <div class="js-mega-menu container">
              <!-- Responsive Toggle Button -->
     
              <!-- End Responsive Toggle Button -->
           
              <!-- Logo -->
              <a href="home.php" class="g-mb-40" id="homelink">
                  <div id="mainpic" style="background: url('assets/img/uploads/<?php echo htmlspecialchars($item[0]['picture']); ?>') ;"  alt="Image Description"></div>
              </a>
              <!-- End Logo -->
              <h3 class="g-mb-40"><?php 
                  $username = htmlspecialchars($_SESSION["username"]);
                  echo $username; 
                  
                
?></h3>
    
              
    



              <!-- Navigation -->
           
                        
                  
           <div class="align-items-center flex-sm-row g-mt-20 g-mt-0--lg g-mb-0 " id="navBar">
                <ul class="navbar-nav ml-auto text-uppercase g-font-weight-600">
                
                <h5 class="g-color-primary g-mb-20 g-font-weight-600 text-center">LISTS</h5>
               <?php 
                    
            
			/* } */
			$lists = $lists->getLists();
			foreach($lists as $item): 
		?>
			     <li id="courseitem" class="nav-item">
                 <a href="list_filter.php?name=<?php echo htmlspecialchars($item['listname']); ?>" class="btn btn-xl btn-block u-btn-outline-primary g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-none rounded-0 g-mb-15">
<?php echo htmlspecialchars($item['listname']); ?>
                               </a></li>

		<?php endforeach; ?>
                              
        
                 <?php                  
                                              
			$foreigns = new Foreigns();
			$foreigns = $foreigns->getForeigns();
			foreach($foreigns as $fitem): 
		?>
			     <li id="courseitem" class="nav-item">
                 <a href="foreign_filter.php?name=<?php echo htmlspecialchars($fitem['listname']); ?>" class="btn btn-xl btn-block u-btn-outline-primary g-font-weight-300 g-letter-spacing-0_5 text-uppercase g-brd-none rounded-0 g-mb-15">
<?php echo htmlspecialchars($fitem['listname']); ?>
                               </a></li>

		<?php endforeach; ?>                
                               
                               
                               <a href="new_list.php" class="btn btn-xl u-btn-outline-lightgray g-mr-10 g-mb-15 rounded-0">
  <i class="fa fa-plus g-mr-10"></i>New List
</a>
                              
                              
                         
                               
                 
                              
        
                               
                               
                                                       
                               
                               
                            </ul>
        
                        </div>

           <h5 class="g-color-primary g-font-weight-600 g-mt-40 g-mb-20">COURSES</h5>
                     <div class="align-items-center flex-sm-row g-mt-20 g-mt-0--lg g-mb-40 " id="navBar">
                <ul class="navbar-nav ml-auto text-uppercase g-font-weight-600">
               <?php 
                    
            
			/* } */
			$courses = $courses->getCourses();
			foreach($courses as $item): 
		?>
			     <li id="courseitem" class="nav-item">
                 <a href="course_filter.php?name=<?php echo htmlspecialchars($item['coursename']); ?>" class="btn btn-xl btn-block u-btn-outline-primary g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-none rounded-0 g-mb-15">
<?php echo htmlspecialchars($item['coursename']); ?>
                               </a></li>

		<?php endforeach; ?>
                               
                               
                           <?php if(isset($_SESSION['admin'])){
				
			  
                             echo  '<a href="new_course.php" class="btn btn-xl u-btn-outline-lightgray g-mr-10 g-mb-15 rounded-0">
  <i class="fa fa-plus g-mr-10"></i>New Course
</a>';
                               
                               	} ?>  
                               
                            </ul>
    
                        </div>

       
              
    
              <!-- End Navigation -->

              <div class="text-center hidden-lg-down">


              </div>
            </div>
          </nav>
                 
        </div>
      </div>
    </div>
    <!-- End Sidebar Navigation -->