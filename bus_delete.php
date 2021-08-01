<?php
session_start();
include 'db.php';

$r_id = $_POST['id'];

    $r_id = $_POST['id'];
    $c_mail = $_SESSION['email'];
$select = "insert into cancel_bus(booking_no, person_name, address, pincode, phone_no, email_id, no_of_seats, source, destination, booking_date, start_date, end_date, cost, payment_status, bus_no, route) select booking_no, person_name, address, pincode, phone_no, email_id, no_of_seats, source, destination, booking_date, start_date, end_date, cost, payment_status, bus_no, route from bus_booking where booking_no='$r_id' AND email_id='$c_mail'";
mysqli_query($db,$select);
$now = date("Y-m-d");
$update = "update cancel_bus set cancellation_date='$now' where booking_no='$r_id' AND email_id='$c_mail'";
mysqli_query($db,$update);
    $delete = "delete from bus_booking where booking_no='$r_id' AND email_id='$c_mail'";
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