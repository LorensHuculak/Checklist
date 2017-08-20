<?php

	include_once('../includes/config.php');

if (!empty($_POST)) {
    
   $lists = new Lists();
$lists->deleteList($_POST['listname']);

    $tasks = new Tasks();
    $tasks->deleteTasks($_POST['listname']);
}

?> 