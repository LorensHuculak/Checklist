<?php require('includes/config.php'); 

//REDIRECT
if(!$user->isLoggedIn()){ header('Location: login.php'); } 

//PAGE TITLE
$title = 'Checklist';

// INCL HEADER
require('layout/header.php'); 
?>


<div>
    
    <!-- SIDEBAR LEFT -->
	<div class="sidebarleft">
		<?php include_once('layout/sidebar.php'); ?>
	</div>
	<!-- END SIDEBAR LEFT -->
	
	
	<div class="content">
  
	  <!-- HEADER -->	
		<header id="headerbartop" >
			<?php include_once('layout/headerbar.php'); ?>
		</header>
		  <!-- END HEADER -->
		  
		  	<!-- LISTS & MEMBER -->	  
		<div class="contentmember">
          
			  <!-- TASK LIST -->	
			<div class="list">
				<?php include_once('layout/task_content.php'); ?>
			</div> 
			 <!-- ENDTASK LIST -->
			 
			   <!-- STUDENT LIST -->
			<div class="members">
			
				<?php include_once('layout/members.php'); ?>
	
			</div>
			<!-- END MEMBERS -->
		</div><!-- END CONTENT -->
	</div><!-- END MAIN -->
</div><!-- END HOME -->

<?php 
//include header template
require('layout/footer.php'); 
?>
