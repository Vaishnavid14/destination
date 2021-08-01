<?php
include("config.php");
session_start();

$username = vaishnavi;
$password = vaishnavi;
 
	$_SESSION['user'] = $username;
	header('Location: home.php');  

?>