<?php 



  if (!empty($_POST)) {
      
            $updateUser = new User($db);
      
            

        $updateUser->setUsername($_POST['username']);
        $updateUser->setEmail($_POST['email']);
      $updateUser->setPicture($_FILES['picture']['name']);
      
    $updateUser->editProfile();
      $updateUser->uploadPicture();
      

      
      
  }
    







?>
<!-- General Forms -->
<form enctype="multipart/form-data" method="post" class="g-pa-30 g-mb-30">
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


   <div class="form-group g-mb-25">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="picture" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

  </div>
  
<button type="submit" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Save Changes</button>


</form>
<!-- End General Forms -->
              