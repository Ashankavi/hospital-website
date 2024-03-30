<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask a Doctor</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header4">
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
            <h1>Ask a Doctor</h1>
    </section>
    
<!---------- Doc Page Content ---------->
    
    <section class="blog-content">
    <div class="row">
    <div class="blog-left">
        <img src="images/askdoc1.jpg">
        <h2>Ask a Doctor</h2>
        
        <p>We at Horizon Hospitals are committed to our mission of helping to build a healthier nation. As yet another demonstration of this commitment, we are providing you this free "Ask a Doctor" service.</p>
        <br>
        <p>This service is designed to help answer any questions you may have regarding health related issues, as any doubts or uncertainties you have will be directed to one of our experienced doctors, who willwrite a reply to your question within 24 hours.</p>
        <br>
        <p>However, this site is not for any medical emergencies or any serious symptoms, as these should be handled by presenting oneself to our Emergency Care Unit specialist doctors who are available at all three of our hospitals 24 hours a day.</p>
        <br>
        
        <div class="comment-box">
            <h3>Tell a Question</h3>
            <form class="comment-form">
                    <input type="text" id="name" placeholder="Enter Name"required>
                    <input type="email" name="email" placeholder="Enter email address" required>
                    <textarea rows="5" placeholder="Write Your Questions"required></textarea>
                    <button type="submit" class="hero-btn red-btn">SUBMIT QUESTION</button>
            </form>
        </div>
    </div>
        
    <div class="blog-right">
        
            <h3>Our Hospital Chain Have</h3>
            <div>
                <span>Specialist Doctors</span>
                <span>56</span>
            </div>
            <div>
                <span>Consultanter</span>
                <span>74</span>
            </div>
            <div>
                <span>Nurses</span>
                <span>356</span>
            </div>
            <div>
                <span>Rooms</span>
                <span>502</span>
            </div>
            <div>
                <span>Operation Theaters</span>
                <span>8</span>
            </div>
            <div>
                <span>CT Scanner</span>
                <span>3</span>
            </div>
            <div>
                <span>Ambulances</span>
                <span>34</span>
            </div>
           
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