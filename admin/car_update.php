<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$num = $_POST['num'];
$type = $_POST['type'];



$sql = "UPDATE car_no SET car_no='$num', car_type='$type' WHERE bus_id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>