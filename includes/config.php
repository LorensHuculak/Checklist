<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');



//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','checklist');

//application address
define('SITEURL','/checklist');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}


// Specific Post Getter
if(isset($_GET['page'])){
	if(file_exists('layout/'.$_GET['page'].'.php')){
		include('layout/'.$_GET['page'].'.php');
	}
}


//include the user class, pass in the database connection
include 'classes/user.php';

spl_autoload_register(function($filename){
	include 'classes/' .$filename . '.class.php';
});


$user = new User($db);
$lists = new Lists($db);
$tasks = new Tasks($db);
$courses = new Courses($db)

/*$foreign = new Foreign($db);
$comments = new Comment($db);*/




?>
