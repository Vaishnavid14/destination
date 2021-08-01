<?php
include("config.php");
include("session.php");

$fnm = $_FILES["image"]["name"];
		$dst = "./images1/".$fnm;
move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$image = $_POST['image'];
$pin = $_POST['pincode'];
$city = $_POST['city'];
$room = $_POST['room'];


$sql = "UPDATE hotel SET hotel_name='$name', hotel_image='$fnm', total_rooms='$room', hotel_address='$address', hotel_pincode='$pin',hotel_city='$city' WHERE hotel_id='$id'";
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