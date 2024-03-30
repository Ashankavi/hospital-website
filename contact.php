<?php 
$con=mysqli_connect("localhost","root","","hospitalms");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$contact = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];

	$query="insert into contact(name,email,contact,message) values('$name','$email','$contact','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Message sent successfully!");'; 
		echo 'window.location.href = "contact.php";';
		echo '</script>';
    }
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact US</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="contact.php">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header3">
        <nav>
            <a href="index.php"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="service.php">OUR SERVICE</a></li>
                <!-- <li><a href="doctor.php">ASK A DOCTOR</a></li> -->
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="dashboard.php">SIGN UP</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
            <h1>Contact Us</h1>
    </section>
    
    

    
    <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2441.9397444678248!2d79.84514315814768!3d6.921821061410864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25938d44b54cb%3A0xf4f64688fee2d653!2sColombo%20Main%20Rd%2C%20Colombo!5e1!3m2!1sen!2slk!4v1662480278807!5m2!1sen!2slk" width="720" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
    <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>Abc Road, Sri Jayawardenepura Kotte</h5>
                            <p>Sri Lanka, Colombo 7</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+94 0123456789</h5>
                            <p>Monday to Saturday 10 Am to 6 Pm</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>info@horizonhospital.com</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form method="post" action="contact.php">
                    <input type="text" name="txtName" placeholder="Enter your name" required>
                    <input type="email" name="txtEmail" placeholder="Enter email address" required>
                    <input type="number" name="txtPhone" placeholder="Enter your Mobile Number" required>
                    <textarea rows="8" name="txtMsg" placeholder="Message" required></textarea>
                    <button type="submit" name="btnSubmit" class="hero-btn red-btn">Send Message</button>
                    </form> 
                </div>
            </div>
    </section>
    

<section class="footer">
    <h4>About Horizon</h4>
    <p>You and your loved ones are safe in our internationally accredited care. Our scope of healthcare services revolves around patient safety and we offer you highly specialized medical care including tertiary and super<br> specialty care at our state-of-the-art facilities.</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>©2022 Maffy Design | All Right Reserved</p>
</section>  
  
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>    