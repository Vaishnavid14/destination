<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$num = $_POST['num'];
$seat = $_POST['seat'];
$type = $_POST['type'];
$ticket = $_POST['ticket'];


$sql = "UPDATE bus_list SET bus_no='$num', total_seats='$seat', bus_type='$type', ticket_per_km='$ticket' WHERE bus_id='$id'";
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