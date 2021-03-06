<?php
@session_start();
include 'db.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
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
                    <div class="modall_container" id="modall">
                        <div class="modall">
                            <a href="#" class="close" id="close">X</a>
                            <span class="modall_heading">Enter Your Details</span>
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
                    <div class="modall_container" id="modalllogin">
                        <div class="modall">
                            <a href="#" class="close" id="closeLog">X</a>
                            <span class="modall_heading">Enter Your Details</span>
                            <form action="#" method="post">
                                <input type="email" name="customer_email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" placeholder="Enter Your Email" title="pattern does not match">
                                <input type="password" name="customer_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter A Password" id="myInputt">
                                <input type="submit" name="login" value="Submit" class="btnRegister" title="pattern does not match">
                            </form>
                            <input type="checkbox" onclick="myFunction()" style="width:15px; float: left;"><a href="#" style="color:#950740; float: left; text-decoration: none; margin-top: 15px;">Show Password</a>
                            <a href="#" class="forgot">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </header>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact Us</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3>Contact us</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<div class="row mb-4">
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@destination.com</a></p>
							          </div>
						          </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>Phone:</span> <a href="tel://1234567920">+91 1235 2355 98</a></p>
							          </div>
						          </div>
										</div>
									</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
									<div class="w-100 social-media mt-5">
										<h3>Follow us here</h3>
										<p>
											<a href="#">Facebook</a>
											<a href="#">Twitter</a>
											<a href="#">Instagram</a>
											<a href="#">Dribbble</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(images1/contact.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer style="border: #950740;  margin-left: 150px;">
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
<script type="text/javascript">
    var btn = document.getElementById('login');
    var modall = document.getElementById('modall');
    var close = document.getElementById('close');
    var login = document.getElementById('signup');
    var log = document.getElementById('modalllogin');
    var closeLog = document.getElementById('closeLog');
    
    btn.addEventListener('click',openModall);
    close.addEventListener('click',closeModall);
    login.addEventListener('click', openLog);
    closeLog.addEventListener('click',closeLg);
    
    function openModall()
    {
        modall.style.display = 'block';
    }
    
    function closeModall()
    {
        modall.style.display = 'none';
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
 <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
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
        echo "<script>window.open('contactus.php','_self')</script>";
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
        echo "<script>window.open('contactus.php','_self')</script>";
        exit();
    }
}
?>
