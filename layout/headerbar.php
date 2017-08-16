
            <div class="u-header__section u-header__section--white g-bg-white g-transition-0_3 g-py-10 g-brd-bottom--lg g-brd-gray-light-v2"
           data-header-fix-moment-exclude="g-py-10"
           data-header-fix-moment-classes="g-py-0">
         
        <nav class="navbar navbar-toggleable-md">
          <div class="container">
       
            <!-- Logo -->
          
            <!-- End Logo -->
              <div id="datetoday">
                 <span class="u-icon-v1 g-color-primary"><i class="icon-hotel-restaurant-056 u-line-icon-pro u-line-icon-pro"></i></span>
                  <a href="#" ><?php 
                      $date = date('d F Y', time());
                      echo $date ?></a>
                </div>
            

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">
             



                <li class="nav-item g-mx-20--lg">
                  <a href="edit_profile.php" class="nav-link g-px-0">Profile</a>
                </li>

                <li class="nav-item g-color-primary g-ml-20--lg g-mr-0--lg">
                  <a href="logout.php" class="nav-link g-px-0">Logout</a>
                </li>
              </ul>
            </div>
            <!-- End Navigation -->
          </div>
        </nav>
      </div>