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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Update</h2>
<hr/>

<form action="car_update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM car_no WHERE car_id ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='id' value='{$row['car_id']}' required>";
    echo"<input type='text' placeholder='Car Number' name='num' value='{$row['car_no']}' required>";
    echo"<label><b>Type</b>";
    echo"<select name='type'>
      <option value=''>Select</option>
      <option value='Micro'>Micro</option>
      <option value='Mini'>Mini</option>
      <option value='Sedan'>Sedan</option>
      <option value='SUV'>SUV</option>
    </select>";
    echo"</label>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
	echo"</div>";
	}?>
  </div>
</form>