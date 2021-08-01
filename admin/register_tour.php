<?php
include("config.php");
include("session.php");

$fnm = $_FILES["image"]["name"];
		$dst = "./images1/".$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

$tourname = $_POST['tourname'];
$price = $_POST['price'];
$days = $_POST['days'];
$type = $_POST['type'];
$places = $_POST['places'];

$sql = "insert into tour values('','$tourname','$fnm','$price','$days','$type','$places')";
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