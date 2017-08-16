<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Checklist';

//include header template
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
