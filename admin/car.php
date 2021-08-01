<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM car_no WHERE car_no LIKE '%".$valueToSearh."%' OR car_type LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM car_no";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
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
  <a href="room.php"><i class="fa fa-person-booth"></i></a>
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
</div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<h2>Car</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Search">
<button type="submit" class="signupbtn" name="search" >Search</button>
</form>
<br />
<?php


echo "<table border='1'>
<tr>
<th>Car No</th>
<th>Car Type</th>
<th>Update</th>
<th>Delete</th>
<th>Print</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['car_no'] . "</td>";
echo "<td>" . $row['car_type'] . "</td>";
echo "<td><a href='car_edit.php?id=".$row['car_id']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='car_delete.php?id=".$row['car_id']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "<td><a href='print.php?id=".$row['car_id']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 