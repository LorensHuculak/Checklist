<?php

	include_once('../includes/config.php');

if (!empty($_POST)) {
    
$users = new User($db);
    
$item = $users->checkType($_POST['userid']);



    
 if ($item == 'Student') { 

$users->makeAdmin($_POST['userid']); 
} else {
     
    $users->makeStudent($_POST['userid']);  
 } 



}

?> 