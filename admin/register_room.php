<?php
include("config.php");
include("session.php");


$type = $_POST['type'];
$price = $_POST['price'];
$sleep = $_POST['sleep'];
$available = $_POST['available'];
$hotel = $_POST['hotel'];

$sql = "insert into room values('','$type','$price','$sleep','$available','$hotel')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Done added!");';
	echo 'window.location="save_tour.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate!");';
	echo 'window.location="save_tour.php";';
	echo '</script>';
}
?>