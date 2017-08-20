<?php

	include_once('../includes/config.php');

if (!empty($_POST)) {
    
   $courses = new Courses();
$courses->deleteCourse( $_POST['courseid'] );

}

?> 