		
				<ul class="list-inline mb-0 g-brd-left--lg   g-brd-gray-light-v4">
				
				
				<?php 
                    $users = new User($db);
		$users = $users->getUsers();
		foreach($users as $item):
	?>
				
			<li class="g-brd-bottom brd-color-gray">
    <!-- Figure -->
    <figure class="u-shadow-v21 u-block-hover">
      <div class="d-flex justify-content-start g-bg-primary--hover g-bg-white g-rounded-4 g-transition-0_3 g-transition--ease-in-out g-pa-30">
        <!-- Figure Image -->
        <img class="align-self-center g-width-80 g-height-80 rounded-circle mr-4" src="assets/img/temp/img7.jpg" alt="Image Description">
        <!-- Figure Image -->

        <!-- Figure Info -->
        <div class="d-block align-self-center">
          <h4 class="g-color-white--hover g-font-weight-600 g-font-size-16 g-transition-0_3 mb-2"><?php echo $item['username']; ?></h4>
        

          <!-- Figure Social Icons -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item g-mx-3">
              <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="profile.php?id=<?php echo $item['usersID']; ?>">
                <i class="fa fa-bars"></i>
              </a>
            </li>
            

            
          </ul>
          <!-- End Figure Social Icons -->
        </div>
        <!-- End Figure Info -->
      </div>
    </figure>
    <!-- End Figure -->
  </li>

  
	<?php endforeach; ?>


				</ul>