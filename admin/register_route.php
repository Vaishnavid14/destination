<?php
include("config.php");
include("session.php");

$route = $_POST['route'];

$sql = "insert into route_table values('','$route')";
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