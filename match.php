<?php
@session_start();
include 'db.php';

$search = $_POST['id'];

$query = "select * from tour where tour_name LIKE '%{$search}%'";
$run_q = mysqli_query($db,$query);
    $output = '';
    if(mysqli_num_rows($run_q)>0)
    {
        while($row = mysqli_fetch_array($run_q))
        {
            $output .='
                <div style="width: 230px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);float:left; margin-right:30px; margin-bottom:20px;">
                    <p align="center"><a href="#" style="text-decoration:none;"><img src=images1/'.$row['tour_image'].' width=240 height=250/></a></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><a href="#" style="text-decoration:none; width:240px; color: black; font-weight:light; font-size:14px;">Item:- '.$row['tour_name'].'</a></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><a href="#" style="text-decoration:none; margin-left:15px; color: black; font-weight:bold;">&#8377 '.$row['tour_price'].'</a></p>
                    <p align="center"><button name="cart" class="add" data-id="'.$row['tour_id'].'" style="width:240px; height:50px; border-radius:5px; background:#950740; color:white;">Book Tour</button></a></p>
                </div>
            ';
        }
    
    echo $output;  
}
    ?>