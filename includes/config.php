<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');



//DATABASE
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','checklist');

//application address
define('SITEURL','/checklist');


try {

	// PDO CONNECTION
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}




//AUTOLOAD CLASSES
spl_autoload_register(function($filename){
	include $_SERVER['DOCUMENT_ROOT'].'/checklist/classes/' .$filename . '.class.php';
});

//CREATE NEW OBJECTS
$user = new User($db);
$lists = new Lists();
$tasks = new Tasks();
$courses = new Courses();
$comments = new Comments();
$foreigns = new Foreigns();





?>
