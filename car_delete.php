<?php
session_start();
include 'db.php';

$r_id = $_POST['id'];

    $r_id = $_POST['id'];
    $c_mail = $_SESSION['email'];
$select = "insert into cancel_car(booking_no, person_name, address, pincode, phone_no, email_id, booking_date,, date_from, date_upto, car_type, advance_amount, ac_non_ac, no_of_cars, payment_status) select booking_no, person_name, address, pincode, phone_no, email_id, booking_date, date_from, date_upto, car_type, advance_amount, ac_non_ac, no_of_cars, payment_status from bus_booking where booking_no='$r_id' AND email_id='$c_mail'";
mysqli_query($db,$select);
$now = date("Y-m-d");
$update = "update cancel_car set cancellation_date='$now' where booking_no='$r_id' AND email_id='$c_mail'";
mysqli_query($db,$update);
    $delete = "delete from car_booking where booking_no='$r_id' AND email_id='$c_mail'";
    $run_delete = mysqli_query($db,$delete);
    
    if($run_delete)
    {
        echo "Record deleted";
    }
    else
    {
        echo "Record not deleted";
        
    } 
       
?>