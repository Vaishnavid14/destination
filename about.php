<?php
@session_start();
include 'db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="css1/style.css">
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
                        <a href="">Enquiry/Request</a>
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
                            <a href="#" class="forgot">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </header>
    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
        </div>
    </div>
    <footer style="border: #950740;  margin-left: 40px;">
                <div class="some-class">
                    <div class="bottom-logo">
                        <a href="#">The Destination</a>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It???s easy. Just click ???Edit Text??? or double click me to add your own content and make changes to the font. I???m a great place for you to tell a story and let your users know a little more about you.</p>
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
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script>
function myFunc() {
  var x = document.getElementById("myInputt");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
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
        echo "<script>window.open('about.php','_self')</script>";
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
        echo "<script>window.open('about.php','_self')</script>";
        exit();
    }
}
?>