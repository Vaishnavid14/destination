<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  word-wrap: break-word;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #1a1a1d;
  color: white;
}
.form{
  width: 90%;
  height: 50px;
  display: inline;
  align-content: center;
  margin-bottom: 20px;
}

.form input{
  width: 200px;
  margin-right: 20px;
  color: #950740;
  border: 1px solid #1a1a1d;
}
.form label{
  width: 200px;
  margin-right: 30px;
  color: #950740;
}
</style>
<script src="jquery.js" type="text/javascript"></script>
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<h2 style="text-align: center;">The Destination</h2>
<div class="form">
                <form action="tourBook.php" method="post">
                    <label>*</label>
                    <label for="from">From:</label>
                    <input type="date" id="from" name="from" min="06-06-2021" max="31-12-2021" value="" required>
                    <label for="to">to:</label>
                    <input type="date" id="to" name="to" min="06-06-2021" max="31-12-2021" value="" optional>
                    <label for="count">Enter No. of Cars:</label>
                    <input type="text" id="count" name="count" value="" style="width:30px;" required>
                </form>
</div>
<table style="margin-top: 20px; height: ; width: 100%;">
  <!-- <tr>
    <th>Bus No.</th>
    <th>Source</th>
    <th>Destination</th>
    <th>Departuring Time</th>
    <th>Pick Up Time</th>
    <th>Journey Time</th>
    <th>Km</th>
    <th>Total Fare</th>
    <th>Select</th>
  </tr> -->
<tr>
  <td id="display"></td>
</tr>  
  </table>
<!-Display--->
<script type="text/javascript">
$(document).ready(function(){
    filter_data();
    
    function filter_data()
    {
      
      var action = 'search';
      $.ajax({
        url:"car_search.php",
        method:"POST",
        data:{
          action:action,
        },
        success:function(data)
        {
          $('#display').html(data);
        }
        });
    }
    
    
    $(document).on("click",".add",function(){
      var car_id = $(this).attr("data-id");
      var from = $('#from').val();
      var to = $('#to').val();
      var count = $('#count').val();
      $.ajax({
      url:"carBook.php",  
      type:"post",
      data:{car_id:car_id,from:from,to:to,count:count},
      success:function(data){
        alert(data);
        if(jQuery.trim(data) === "Car _Booked"){
          window.open('checkout.php','_self');
        }
        else{
           location.reload();
        }
      }
      });
      
    });
    
});
  
</script>
</body>

</html>
