<?php
@session_start();
include 'db.php';
if(isset($_POST["action"]))
{
  $query = "select * from car_list where car_type !=''";
    
    $run_q = mysqli_query($db,$query);
    $output = '';
    if(mysqli_num_rows($run_q)>0)
    {
      $output .='<table style="margin-top: 20px; height: ; width: 100%;">
  <tr>
    <th>Car Type.</th>
    <th>Description</th>
    <th>Passengers</th>
    <th>Per km</th>
    <th>Ac/Non Ac</th>
    <th>Advance amount</th>
    <th>Available For rent</th>
    <th>Select</th>
  </tr>';
        while($row = mysqli_fetch_array($run_q))
        {
            $output .='
              <tr>
                <td>'.$row['car_type'].'</td>
               <td>'.$row['description'].'</td>
               <td>'.$row['capacity'].'</td>
               <td>'.$row['price_per_km'].'</td>
               <td>'.$row['car_ac'].'</td>
               
               <td>'.$row['advance_amount'].'</td>
               <td>'.$row['available'].'</td>
               <td><button name="cart" class="add" data-id="'.$row['car_id'].'" style="width:50px; height:20px; background:blue; color:white;">Book</button></td>
              </tr>
            ';
        }
    }
    $output .='</table>';
    echo $output;  
}
  ?>