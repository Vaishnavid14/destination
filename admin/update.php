<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];


$sql = "update customer set customer_name='$name', customer_email='$email', customer_mobile='$mobile', customer_add='$address', cust_pincode='$pincode' WHERE customer_id='$id'";
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