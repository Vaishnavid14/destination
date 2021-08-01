<?php
@session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html>

   <head>
      <title>Bold Text Example</title>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css1/style.css">
        <link rel="stylesheet" href="css1/tour.css">
         <script src="jquery.js" type="text/javascript"></script>
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   </head>
   <body>
      <div class="box-area" style="overflow: hidden;">

            <header>
                <div class="wrapper">
                    <div class="logo">
                        <a href="#" style="color: #1a1a1d;">The</a><a href="#" style="color: #950740;">Destination</a>
                    </div>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="about.php">About</a>
                        <a href="services.php">Services</a>
                        <a href="contactus.php">Contact</a>
                         <?php
                            if(!isset($_SESSION['email']))
                            {
                            ?>
                            <a href="#" style="color: #1a1a1d;" id="login">Sign up</a>
                            <a href="#" style="color: #1a1a1d;" id="signup">Sign in</a>
                            <?php
                            }
                            else
                            {
                            ?>
                            <a href="myaccount.php" style="color: #1a1a1d;">My account</a>
                            <a href="logout.php" style="color: #1a1a1d;" id="signup">Log out</a>
                            <?php
                            }
                            ?>
                    </nav>
                    <div class="modal_container" id="modal">
                        <div class="modal">
                            <a href="#" class="close" id="close">X</a>
                            <span class="modal_heading">Enter Your Details</span>
                            <form action="#" method="post">
                                <input type="text" name="name" pattern="^[A-Za-z.\s_]+$" placeholder="Enter Your Name" required title="pattern does not match">
                                <input type="text" name="mobile" pattern="[7-9]{1}[0-9]{9}" placeholder="Enter Your Mobile no." required title="pattern does not match">
                                <input type="text" name="address"  placeholder="Enter Your Address." required title="pattern does not match">
                                <input type="text" name="pincode" pattern="[0-9]{5}" placeholder="Enter Your Pincode." required title="pattern does not match">
                                <input type="email" name="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" placeholder="Enter Your Email" required title="pattern does not match">
                                <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter A Password" required title="Atleast -One Uppercase, One lowercase, One Number" id="myInput">
                                <input type="submit" name="submit" value="Submit" class="btnRegister">
                            </form>
                            <input type="checkbox" onclick="myFunction()" style="width:15px; float: left;"><a href="#" style="color:#950740; float: left; text-decoration: none; margin-top: 15px;">Show Password</a>
                        </div>
                    </div>
                    <div class="modal_container" id="modallogin">
                        <div class="modal">
                            <a href="#" class="close" id="closeLog">X</a>
                            <span class="modal_heading">Enter Your Details</span>
                            <form action="#" method="post">
                                <input type="email" name="customer_email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" placeholder="Enter Your Email" title="pattern does not match">
                                <input type="password" name="customer_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter A Password" id="myInputt">
                                <input type="submit" name="login" value="Submit" class="btnRegister" title="pattern does not match">
                            </form>
                            <input type="checkbox" onclick="myFunc()" style="width:15px; float: left;"><a href="#" style="color:#950740; float: left; text-decoration: none; margin-top: 15px;">Show Password</a>
                            <a href="#" class="forgot" style="color:#950740;">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="tour-content">
                <div class="tour-search">
                    <input type="text" name="valueToSearch" id="search" autocomplete="off" placeholder="Enter a Destination">
                </div>
                <!-- <div class="left">
                    <div id="style" class="list-group">
                        <h3 style="color: #1a1a1d;">Types</h3>
                        <div style="height: 50px; overflow-y: auto; overflow-x: hidden">
                            <?php
                                
                                    $email = $_SESSION['email'];
                                    $s_query = "select tour_id from tour_booking where booking_no = '$email'";
                                    $r_query = mysqli_query($db,$s_query);
                                    
                             ?>           
                                     <div class="list-group-item checkbox" style="display: inline;">
                                    <label for="style">
                                      <input style="width: 25px; height: 20px;margin-left: 15px;" type="checkbox" id="style" class="common_selector tour" value="<?php echo $row_query['tour_id']; ?>">
                                        Search according to your tour</label>
                                     </div>   
                            <?php        
                            ?>
                        </div>
                    </div>
                </div> -->
                <div class="right filter_data">

                </div>
            </div>
            <footer style="border: #950740; margin-left: 50px">
                <div class="some-class">
                    <div class="bottom-logo">
                        <a href="#">The Destination</a>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                    </div>
                    <div class="side-menu">
                        <a href="#">About</a>
                        <a href="">Enquiry/Request</a>
                        <a href="">Contact</a>
                        <a href="" style="color: #1a1a1d;">Login</a>
                    </div>
                </div>
            </footer>
            </div>
    <script type="text/javascript">
    var btn = document.getElementById('login');
    var modal = document.getElementById('modal');
    var close = document.getElementById('close');
    var login = document.getElementById('signup');
    var log = document.getElementById('modallogin');
    var closeLog = document.getElementById('closeLog');
    
    btn.addEventListener('click',openModal);
    close.addEventListener('click',closeModal);
    login.addEventListener('click', openLog);
    closeLog.addEventListener('click',closeLg);
    
    function openModal()
    {
        modal.style.display = 'block';
    }
    
    function closeModal()
    {
        modal.style.display = 'none';
        history.back();
    }
    
    function openLog()
    {
        log.style.display = 'block';
    }
    
    function closeLg()
    {
        log.style.display = 'none';
        history.back();
    }
</script>
<!-------Search bar------->
<script type="text/javascript">
$(document).ready(function(){
    $("#search").on("keyup",function(){
      var id = $(this).val()
      $.ajax({
      url:"hotel_match.php",  
      type:"post",
      data:{id:id},
      success:function(data){
        $('.filter_data').html(data);
      }
      });
      
    });
    
});
  
</script>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunc() {
  var x = document.getElementById("myInputt");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<!---Checkbox--->
<script type="text/javascript">
$(document).ready(function(){
    filter_data();
    
    function filter_data(page)
    {
      $('.filter_data').html('<div id="loading" style=""></div>');
      var action = 'hotel_search';
      $.ajax({
        url:"hotel_search.php",
        method:"POST",
        data:{
          action:action,
          page:page,
        },
        success:function(data)
        {
          $('.filter_data').html(data);
        }
        });
    }
    
    $(document).on("click","#pagination a",function(e){
      e.preventDefault();
      var page_id = $(this).attr("id");
      filter_data(page_id);
      
      });
    

    
    // $(document).on("click",".add",function(){
    //   var id = $(this).attr("data-id");
    //   $.ajax({
    //   url:"room.php",  
    //   type:"post",
    //   data:{id:id},
    //   success:function(data){
    //     alert(data);
    //   }
    //   });
      
    // });
    
});
  
</script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $sql_u = "SELECT * FROM customer WHERE customer_mobile='$mobile'";
    $sql_e = "SELECT * FROM customer WHERE customer_email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);
    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken";  
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken";    
    }else{
       $insert = "insert into customer values('','$_POST[name]','$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[address]','$_POST[pincode]')";
        $run_insert = mysqli_query($db,$insert);
        echo "<script>window.open('tour.php','_self')</script>";
        exit();
    }

}

if(isset($_POST['login']))
{
    $customer_email = $_POST['customer_email'];
    $customer_pass = $_POST['customer_password'];;
    
    $select = "select * from customer where customer_email = '$customer_email' AND customer_pass = '$customer_pass'";
    $check = mysqli_query($db,$select);
    $count = mysqli_num_rows($check);
    
    if($count==0)
    {
        echo "<script>alert('Password or Email address is not correct, try again!')</script>";
        exit();
    }
    else
    {
        $_SESSION['email'] = $customer_email;
        echo "<script>alert('Successfully login!')</script>";
        echo "<script>window.open('hotel.php','_self')</script>";
        exit();
    }
}
?>