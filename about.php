<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header1">
        <nav>
            <a href="home.php"><img src="images/logo.png"></a>
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
            <h1>About Us</h1>
    </section>
    
    
<!------- about us content -------->
    
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>VISION</h1>     
            <p>"Horizon Hospital is popular for the quality of service it offers, its vision reflects the experience of the patient and the reputation of the hospital. The Horizon Hospital claim itself as the most trusted in its vision statement, which is difficult to claim as there might be other healthcare providers that may be regarded as the most trusted by the individuals or the organizations, however, this encourages the Mayo clinic to acquire the title of ‘most trusted’ by offering the best services."</p>
            <h1>MISSION</h1>     
            <p>Providing a high quality specialized and patient friendly healthcare service with the expertise services of the doctors and kind, polite service of the nursing staff, using latest technology.</p>
            <h1>MAIN OBJECTIVE</h1>     
            <p>Horizon Hospital will continue to provide a continuum of high-quality, cost-effective services in order to improve the health status of those we serve. In providing these services, we strive to operate at the highest level of personal and business integrity.</p>
            <h1>QUALITY POLICY</h1>     
            <p>We strive to exceed the expectations of all our clients by committing to providing ethical, reliable, high quality, cost effective and value in every aspect of our work. We will improve quality for all our patients by educating them about their health and empowering them to be partners in their care. We provide care with dignity, care, courtesy and respect for the diversity of our community.</p>
            
            <a href="service.php" class="hero-btn red-btn">EXPOLER NOW</a>
        </div>
        <div class="about-col">
            <img src="images/about.jpg">
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