<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
   <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a href="bus.php"><i class="fa fa-bus"></i></a>
  <a href="car.php"><i class="fa fa-car"></i></a>
  <a href="tour.php"><i class="fa fa-archway"></i></a>
  <a href="hotel.php"><i class="fa fa-hotel"></i></a>
  <a href="room.php"><i class="fa fa-hotel"></i></a>
  <a href="save_tour.php"><i class="fa fa-save"></i></a>
  <a href="save_car.php"><i class="fa fa-car-side"></i></a>
  <a href="save_bus.php"><i class="fa fa-bus-alt"></i></a>
  <a href="save_hotel.php"><i class="fa fa-h-square"></i></a>
  <a href="save_room.php"><i class="fa fa-route"></i></a>
  <a href="schedule.php"><i class="fa fa-clock"></i></a>
  <a href="route.php"><i class="fa fa-route"></i></a>
  <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<h2>Tour</h2>
<hr/>
<form action="register_hotel.php" method="POST">
  <div class="container">
	<input type="text" placeholder="Hote Name" name="name" required>
    <input type="text" placeholder="Hotel Address" name="address" required>
    <input type="text" placeholder="Hotel Pincode" name="pincode" required>
    <input type="text" placeholder="Hotel City" name="city" required>
    <input type="text" placeholder="Total Rooms" name="room" required>
  	<label>Image</label>
    <input type="file" name="image" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>