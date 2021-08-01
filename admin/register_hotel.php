<?php
include("config.php");
include("session.php");

$fnm = $_FILES["image"]["name"];
		$dst = "./images1/".$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

$name = $_POST['name'];
$add = $_POST['address'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$room = $_POST['room'];

$sql = "insert into hotel values('','$name','$fnm','$room','$add','$pincode','$city','1')";
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