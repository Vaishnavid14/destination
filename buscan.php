<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<?php
@session_start();
include 'db.php';
$email = $_SESSION['email'];
                $sql_mm = "select * from bus_booking where email_id='$email'";
                $run_mm = mysqli_query($db,$sql_mm);
                if(mysqli_num_rows($run_mm)>0)
                {

                while($row_mm = mysqli_fetch_array($run_mm)){
                $n = $row_mm['booking_no'];
                $m = $row_mm['person_name'];
                $em = $row_mm['address'];
                $ps = $row_mm['pincode'];
                $ad = $row_mm['phone_no'];
                $pi = $row_mm['email_id'];
                $ns = $row_mm['no_of_seats'];
                $ss = $row_mm['source'];
                $dd = $row_mm['destination'];
                $bd = $row_mm['booking_date'];
                $sd = $row_mm['start_date'];
                $ed = $row_mm['end_date'];
                $cost = $row_mm['cost'];
                $pytm = $row_mm['payment_status'];
                $bus_n = $row_mm['bus_no'];
                $route = $row_mm['route'];
?>
<form method="post" action="buscan.php" id="myaccount" enctype="multipart/form-data" style="margin-top: 100px;">
        <table width="700" align="center" border="2" bgcolor="#008080">
            <tr align="center">
                <td colspan="2"><h1>Bus Booked</h1></td>
            </tr>
            <tr>
                <td align="right"><b>Booking Number</b></td>
                <td>
                    <?php echo $n; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Name.</b></td>
                <td>
                    <?php echo $m; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Address</b></td>
                <td>
                    <?php echo $em; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Pincode</b></td>
                <td>
                    <?php echo $ps; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Mobile</b></td>
                <td>
                    <?php echo $ad; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Email</b></td>
                <td>
                    <?php echo $pi; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>No. of Seats</b></td>
                <td>
                    <?php echo $ns; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Source</b></td>
                <td>
                    <?php echo $ss; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Destination</b></td>
                <td>
                    <?php echo $dd; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Booking Date</b></td>
                <td>
                    <?php echo $bd; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Start Date</b></td>
                <td>
                    <?php echo $sd; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>End Date</b></td>
                <td>
                    <?php echo $ed; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Cost</b></td>
                <td>
                    <?php echo $cost; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Payment</b></td>
                <td>
                    <?php echo $pytm; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Bus no.</b></td>
                <td>
                    <?php echo $bus_n; ?>
                </td>
            </tr>
            <tr>
                <td align="right"><b>Route</b></td>
                <td>
                    <?php echo $route; ?>
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <span class='delete-btn' data-id="<?php echo $n; ?>">
                        Cancel
                    </span>
                </td>
            </tr>
        </table>
    </form>
    <?php
        }
    }
    ?>
<script>
$(document).ready(function(){
   $(document).on("click",".delete-btn",function(){
     var id = $(this).attr("data-id");
      $.ajax({
      url:"bus_delete.php",  
      type:"post",
      data:{id:id},
      success:function(data){
       alert(data);
       location.reload();
      }
      });
    });
   
});
</script>
