<?php
include_once("../classes/Activity.class.php");
$activity = new Activity();
$feedback = array();

//controleer of er een update wordt verzonden
if(!empty($_POST['activitymessage']))
 {
 try
 {
 $activity->Text = $_POST['activitymessage'];
 $activity->Save();
 $feedback['message'] = "Your status has been updated";
 $feedback['status'] = true;
 }
 catch (Exception $e)
 {
 $feedback['message'] = $e->getMessage();
 $feedback['status'] = false; 
Pagina 89
 }

 header('Cache-Control: no-cache, must-revalidate');
 header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
 header('Content-type: application/json');
 echo json_encode($feedback);
 }
?> 