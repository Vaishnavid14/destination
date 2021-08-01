<?php
include("config.php");
include("session.php");

$busnum = $_POST['busnum'];
$seats = $_POST['seat'];
$type = $_POST['type'];
$ticket = $_POST['ticket'];

$sql = "insert into bus_list values('','$busnum','$seats','$type','$ticket')";
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