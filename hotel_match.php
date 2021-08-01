<?php
@session_start();
include 'db.php';

$search = $_POST['id'];

$query = "select * from hotel where hotel_name LIKE '%{$search}%'";
$run_q = mysqli_query($db,$query);
    $output = '';
    if(mysqli_num_rows($run_q)>0)
    {
        while($row = mysqli_fetch_array($run_q))
        {
            $output .='
                <div style="width: 230px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);float:left; margin-right:30px; margin-bottom:20px;">
                    <p align="center"><a href="room.php?hotel_id='.$row['hotel_id'].'"><label style="text-decoration:none;"><img src=hotel/'.$row['hotel_image'].' width=230 height=250/></label></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><label  style="text-decoration:none; width:240px; color: black; font-weight:light; font-size:14px;">Item:- '.$row['hotel_name'].'</label></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><label style="text-decoration:none; margin-left:15px; color: black; font-weight:bold;">&#8377 '.$row['hotel_address'].'</label></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><label  style="text-decoration:none; margin-left:15px; color: black; font-weight:bold;">View Rooms</label></a></p>
                </div>
            ';
        }
    
    echo $output;  
}
    ?>