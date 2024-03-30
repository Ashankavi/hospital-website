<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password) VALUES('$name','$email','$password')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="style.css">
</head>
<section class="sub-header1">
    <nav>
        <a href="home.php"><img src="images/logo.png"></a>
        <div class="nav-links" id="navLinks">  
            <i class="fa fa-close" onclick="hideMenu()"></i>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="service.php">OUR SERVICE</a></li>
                <li><a href="doctor.php">ASK A DOCTOR</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="dashboard/index.php">SIGN UP</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>   
        <h1>Create Account</h1>
</section>

	<!-- Login -->

<section class="vh-100">
	<div class="container-fluid h-custom">
	  <div class="row d-flex justify-content-center align-items-center h-100">
		<div class="col-md-9 col-lg-6 col-xl-5">
		  <img src="images/create.png"
			class="img-fluid" alt="Sample image">
		</div>
		<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
		  <form id="form">
		
            
				<div class="contact-col">
					<form method="post" action="contact-form-handler.php">
                            <h3>Create New Account</h3><br><br><br>
                            
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

							  <label for="fullname">Full name</label><br><br>
					<input type="name" name="name" placeholder="Enter name " required>
					<br>
					  <label for="email">Email</label><br><br>
					<input type="email" name="email" placeholder="Enter email address" required>
					<br>
					  <label for="password">New Password</label><br><br>
					<input type="password" name="password" placeholder="Enter new password" required>
					<br>
					 <label for="password2">Confirm Password</label><br><br>
					<input type="password" name="cpassword" placeholder="Enter password again" required>
					<br>
					<a href="login.php" button type="login" name="create" class="btn btn-primary btn-lg">Create</button>
					</form>   
			 </div>	
		  </form>
		</div>
	  </div>
	</div>
  </section>

</body>
</html>