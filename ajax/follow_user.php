<?php

	include_once('../includes/config.php');

if (!empty($_POST)) {
    
$foreigns = new Foreigns();
    
$item = $foreigns->followExists($_POST['listid']);



    
if (!empty($item)) { 

     $foreigns->deleteForeign($_POST['listid']);  

} else {
     
 $foreigns->addForeign($_POST['listid']); 
 }  



}

?> 