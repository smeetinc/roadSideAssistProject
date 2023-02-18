<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "slnconlinedb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
	die("connecion failed".mysqli_connect_error());
}