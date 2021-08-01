<?php
session_start();
include 'db.php';
if(empty($_POST['count']))
{
  $count = $_POST['count'];
  $count = 1;
}
else
{
  $count = $_POST['count'];

}
if(isset($_SESSION['email']))
   {
    if(empty($_POST['from']))
    {
      echo "Select date";
      exit();
    }
    if(empty($_POST['to']))
    {
      echo "Select date";
      exit();
    }
    $cr_id = $_POST['car_id'];
    $email = $_SESSION['email'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $booking_date = date("Y/m/d");
    

  
    
    $s = "select * from car_list where car_id='$cr_id'";
    $r = mysqli_query($db,$s);
    
    $fetch= mysqli_fetch_array($r);
    
    $car_id = $fetch['car_id'];
    $type = $fetch['car_type'];
    $description = $fetch['description'];
    $capacity = $fetch['capacity'];
    $p_km = $fetch['price_per_km'];
    $car_ac = $fetch['car_ac'];
    $advance = $fetch['advance_amount'];
    $available = $fetch['available'];
    

    $cc = "select * from customer where customer_email='$email'";
    $rr = mysqli_query($db,$cc);

     $fet= mysqli_fetch_array($rr);
     $c_id = $fet['customer_id'];
     $c_name = $fet['customer_name'];
     $c_add =  $fet['customer_add'];
     $c_mob =  $fet['customer_mobile'];
     $c_pin = $fet['cust_pincode'];

    $user_id = 7; //example from session variable
    $cur_date = date('dmyHis'); //timestamp ticket submitted
    $booking_num = $user_id.'-'. $cur_date;



     if($count>$available){
      echo "Number not available";
      exit();
     }
     else
     {
      $num=1;

      $q = "select * from car_booking where date_from= '$from' AND car_type='$type'";
      $run = mysqli_query($db,$q);
      
      if(mysqli_num_rows($run)>0)
      {
          echo "Booking Done Already";
          exit();
      }
      else
      {
        $qty = $advance*$count;
        $insert_q = "insert into car_booking values('$booking_num','$c_name','$c_add','$c_pin','$c_mob','$email','$booking_date','$from','$to','$type','$qty','$car_ac','$count','pending')";
        $run_qry = mysqli_query($db,$insert_q);
        echo "Car _Booked";
        $_SESSION['car'] = $qty;
        $available = $available-$count;

        $u_q = "UPDATE car_list SET available = '$available' WHERE car_id = '$cr_id'";   
        mysqli_query($db,$u_q);  
        

        
      }
  }

}
else
  {
      echo "Please login! to book room";
      
  }

?>