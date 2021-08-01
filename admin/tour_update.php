<?php
include("config.php");
include("session.php");

$fnm = $_FILES["image"]["name"];
		$dst = "./images1/".$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$days = $_POST['days'];
$type = $_POST['type'];
$place = $_POST['place'];


$sql = "UPDATE tour SET tour_name='$name', total_image='$fnm', tour_price='$price', tour_no_of_days='$days', tour_places='$place' WHERE tour_id='$id'";
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