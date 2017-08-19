<?php 



  if (!empty($_POST)) {
      
            $updateUser = new User($db);
      
            
      
        $updateUser->setUsername($_POST['username']);
        $updateUser->setEmail($_POST['email']);
      
            $updateUser->editProfile();
      
        }


?>
<!-- General Forms -->
<form method="post" class="g-pa-30 g-mb-30">
  <div class="row">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>Edit Profile</h2>
  </div>
   <hr class="g-brd-gray-light-v4 g-mx-minus-30">
  <!-- Text Input -->
  <div class="form-group g-mb-20">
    <label class="g-mb-10" for="inputGroup1_1">Username</label>
    <input name="username" id="inputGroup1_1" class="form-control form-control-md rounded-0" type="text" placeholder="Enter Username">

  </div>
  <!-- End Text Input -->
  
    <!-- Text Input -->
  <div class="form-group g-mb-20">
    <label class="g-mb-10" for="inputGroup1_1">Email</label>
    <input name="email" id="inputGroup1_1" class="form-control form-control-md rounded-0" type="email" placeholder="Enter Email">

  </div>
  <!-- End Text Input -->


<!-- File Inputs -->
  <!-- Plain File Input -->
  <div class="form-group mb-0">
    <p>Profile Picture</p>
    <label class="u-file-attach-v2 g-color-gray-dark-v5 mb-0">
      <input id="fileAttachment" type="file">
      <i class="icon-cloud-upload g-font-size-16 g-pos-rel g-top-2 g-mr-5"></i>
      <span class="js-value">Attach file</span>
    </label>
  </div>
  <!-- End Plain File Input -->
  
<button type="submit" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Save Changes</button>


</form>
<!-- End General Forms -->
              