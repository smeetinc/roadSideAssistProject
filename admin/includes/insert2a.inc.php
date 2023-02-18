<?php
require("dbh.inc.php");



//Main action page for the admin activities
session_start();


//check if login is true

if ($_SESSION['logged_in'] != 1) {
	$_SESSION['message'] = "You must log in to view records";
	header("Location: error.php");
	
	
}else{
	//sorting data for easy readability

				$user_uid = $_SESSION['u_uid'];
}




?>