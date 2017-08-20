<?php 


$usersid = $_SESSION['usersID'];

  if (!empty($_POST)) {
      
            $createList = new Lists();

           $createList->setListName($_POST['listname']);
            $createList->setListOwner($usersid);
        $createList->setPrivacy($_POST['public']);
            $createList->addList();
      
        }


?>
<!-- General Forms -->
<form class="g-pa-30 g-mb-30" action="" method="post">
<div class="row">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>New List</h2>
  </div>
   <hr class="g-brd-gray-light-v4 g-mx-minus-30">
  <!-- Text Input -->
  <div class="form-group g-mb-20">
    <label class="g-mb-10" for="inputGroup1_1">List Name</label>
    <input type="text" name="listname" class="form-control form-control-md rounded-0" placeholder="Enter Name">

  </div>
  <!-- End Text Input -->
  

  <!-- Checkbox -->
  <label class="form-check u-check g-pl-25">
   <input type="hidden" name="public" value="0" />
    <input class="hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="public" value="1" check="">
    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
      <i></i>
    </div>
    Publish
  </label>
  <!-- Checkbox -->
  
<button href="new_list.php" type="submit" name="add_list" class="btn btn-outline-primary g-mr-10 g-mt-20 rounded-0">Add List</button>


</form>
<!-- End General Forms -->
              