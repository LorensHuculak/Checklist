<?php 

$users = new User($db);
$item = $users->getSingleUser();

 $works = new User($db);
             $workload = $works->getHours();


?>
<!-- General Forms -->
<div class="g-pa-30 g-mb-30">
  <div class="row">
 <a href="home.php"><span class="u-icon-v1 g-color-primary g-mr-20 g-mt-2"><i class="icon-arrow-left u-line-icon-pro u-line-icon-pro"></i></span></a>
  <h2>Profile</h2>
  </div>
   <hr class="g-brd-gray-light-v4 g-mx-minus-30">
 <div class="col-md-4 g-mb-30 g-pl-0 g-pr-0">
    <!-- Figure -->
    <figure class="u-info-v7-1 g-brd-around g-brd-gray-light-v4 g-bg-white g-rounded-4 text-center">
      <div class="g-py-40 g-px-20">
        <!-- Figure Image -->
        <div id="profilepic" class="g-width-100 g-height-100 rounded-circle g-mb-20" style="background: url('assets/img/uploads/<?php echo $item[0]['picture']; ?>') ;"></div>
        <!-- Figure Image -->

        <!-- Figure Info -->
        <h4 class="h5 mb-4"><?php echo $item[0]['username']; ?></h4>
            
            
            
            
            
         
             
             
        <div class="d-block">
          <span class="u-info-v7-1__item-child-v2 g-color-gray-dark-v4 g-bg-gray-light-v5 g-font-size-default g-rounded-25 g-py-5 g-px-20 g-mr-3">
            <i class="g-color-primary mr-1 fa fa-circle-thin"></i>
            <?php echo $item[0]['type']; ?>
          </span>
          
         <span class="u-label u-label--sm g-bg-gray-dark-v5 g-rounded-20 g-ml-5 g-px-10 g-mb-20"><?php 
              
             if ($workload != 0){
              echo $workload;
              } else
             {
                 echo "0";
             }
              ?> Estimated Work Hours</span>   
        </div>
        <!-- End Figure Info -->
      </div>
     </figure>
    </div>
    
    
    
    <ul id="listshared" class="list-unstyled">
    
     <?php 
   
        $lists = new Lists();
		$lists = $lists->getPublicLists();
		foreach($lists as $item):
	?>
    
  <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-minus-1">
   
    <div class="align-self-center g-px-10">
      <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
        <span class="g-mr-5"><?php echo $item['listname']; ?></span>
        
      </h5>
    </div>
    <div class="align-self-center ml-auto"><a href="">
          <span class="u-icon-v1 g-color-primary"><i class="icon-link u-line-icon-pro u-line-icon-pro"></i></span>
          </a>
    </div>
  </li>
      
   <?php endforeach; ?>
  
    </ul>


</div>
<!-- End General Forms -->
              