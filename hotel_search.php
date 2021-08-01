<?php
@session_start();
include 'db.php';

if(isset($_POST["action"]))
{
    $limit_per_page = 8;
    $page = "";
    if(isset($_POST["page"]))
    {
        $page = $_POST["page"];
    }
    else
    {
        $page = 1;
    }
    
    $offset = ($page-1)*$limit_per_page;
    
    
    $query = "select * from hotel where hotel_city !=''";
    
    
    $query .= "limit $offset,$limit_per_page";
    
    $run_q = mysqli_query($db,$query);
    $output = '';
    if(mysqli_num_rows($run_q)>0)
    {
        while($row = mysqli_fetch_array($run_q))
        {
            $output .='
                <div style="width: 230px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);float:left; margin-right:30px; margin-bottom:20px;">
                    <p align="center"><a href="room.php?hotel_id='.$row['hotel_id'].'"<label style="text-decoration:none;"><img src=hotel/'.$row['hotel_image'].' width=230 height=250/></label></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><label  style="text-decoration:none; width:240px; color: black; font-weight:light; font-size:14px;">Item:- '.$row['hotel_name'].'</label></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><label style="text-decoration:none; margin-left:15px; color: black; font-weight:bold;">&#8377 '.$row['hotel_address'].'</label></p>
                    <p align="left" style="margin-left:15px; margin-right:15px; border-bottom:1px solid black; border-radius:5px;"><label  style="text-decoration:none; margin-left:15px; color: black; font-weight:bold;">View Rooms</label></a></p>
                </div>
            ';
        }
    }
    
    $sql_total = "select * from tour where tour_type !=''";
    
    if(isset($_POST["tour_type"]))
    {
        $style_filter = implode("','",$_POST["tour_type"]);
        $sql_total .= "AND tour_type IN('".$style_filter."')";
    }
    
    
    $records = mysqli_query($db,$sql_total);
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record/$limit_per_page);
    
    $output .= "
    <div id='center' style='clear:both; text-align: center; '>
    <div id='pagination' style='display: inline-block;'>";
    for($i=1;$i<=$total_pages;$i++)
    {
        if($i==$page)
        {
            $class_name = "active";
        }
        else
        {
            $class_name = "";
        }
        $output .= "<a href='' id='$i' class='$class_name' style='color: black; float: left; padding: 8px 16px; text-decoration: none; transition: background-color .3s;border: 1px solid #ddd;margin: 0 4px;'>$i</a>";
    
    }
    
    $output .= "</div>
    </div>
    ";
    
    echo $output;    
   
}
?>