<?php
include("config.php");
include("session.php");

$carname = $_POST['carnum'];
$type = $_POST['type'];

$sql = "insert into car_no values('','$carname','$type')";
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