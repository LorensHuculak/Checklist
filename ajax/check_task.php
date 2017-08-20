<?php

	include_once('../includes/config.php');

if (!empty($_POST)) {
    
$tasks = new tasks();
    
$item = $tasks->checkState($_POST['taskid']);



    
 if ($item == '0') { 

$tasks->setDone($_POST['taskid']); 
} else {
     
    $tasks->setUndone($_POST['taskid']);  
 }



}

?> 