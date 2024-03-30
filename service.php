<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Service</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header2">
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
            <h1>Our Service</h1>
    </section>
    
    
<!---------- Facilities ---------->
    
    <section class="facility">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row">
                <div class="facility-col">
                    <img src="images/facility 1.jpg">
                    <h3>Ambulance Service</h3>
                    <p>It gives the patient a full satisfaction by providing a comfortable, caring and attentive emergency service.</p>
                </div>
                <div class="facility-col">
                    <img src="images/facility 2.jpg">
                    <h3>Channel Consultations</h3>
                    <p>To find out more about our range of specialties and doctors use the search facility below.</p>
                </div>
                <div class="facility-col">
                    <img src="images/facility 3.jpg">
                    <h3>24 hour Pharmacy</h3>
                    <p>It gives the patient a full satisfaction by providing a comfortable, caring and attentive emergency service.</p>
                </div>
            </div>

            <div class="row">
                <div class="facility-col">
                    <img src="images/facility 5.jpg">
                    <h3>Laboratory Service</h3>
                    <p>Our pharmacy is the only 24 hour functional service in the area. We are a local agent of S.P.C and also we keep a very nominal margin on pharmaceuticals.</p>
                </div>
                <div class="facility-col">
                    <img src="images/facility 4.jpg">
                    <h3>Operation Theater</h3>
                    <p>Our fully equipped operation theater provides all undermentioned surgeries & surgical treatments by a team of reputed consultant surgeons and fully qualified assisting.</p>
                </div>
                <div class="facility-col">
                    <img src="images/facility 6.jpg">
                    <h3>Eye Unit</h3>
                    <p>Our eye unit is also fully equipped and we undertake the treatments and surgeries with regards to eye related cases. Our Eye Operation Theatre is also under a vast expansion.</p>
                </div>   
            </div>
            
    </section>
    
<!-------- footer ---------->

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