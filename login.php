<?php

@include 'config.php';

session_start();

if(isset($_POST['create'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['email'] == 'email'){

        $_SESSION['email'] = $row['name'];
        header('location: appoiment_form.php');
     
   }else{
      $error[] = 'incorrect email or password!';
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
                <li><a href="login.php">SIGN UP</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>   
        <h1>Sign Up</h1>
</section>

<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

	<!-- Login -->

<section class="vh-100">
	<div class="container-fluid h-custom">
	  <div class="row d-flex justify-content-center align-items-center h-100">
		<div class="col-md-9 col-lg-6 col-xl-5">
		  <img src="images/login1.jpg"
			class="img-fluid" alt="Sample image">
		</div>
		<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form id="form" action="/">
			
  
			<!-- Email input -->
			<!-- <div class="form-outline mb-4">
					<label class="form-label" for="form3Example3">Email address</label>
			  <input type="email" id="email" class="form-control form-control-lg"
				placeholder="Enter a valid email address" />
            </div> -->
            
            <!-- <div class="form-outline mb-4">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div> -->

              <div class="contact-col">
                <form method="post" action="contact-form-handler.php">
               <h3>Sign in</h3><br><br><br>
                 <label for="email">Email</label><br><br>
                <input type="email" name="email" placeholder="Enter email address" required>
                <br>
                  <label for="password">Password</label><br><br>
                <input type="password" name="password" placeholder="Enter password" required>
                <br><br>
                <button type="login" class="btn btn-primary btn-lg">Login</button>
                </form>   
             </div>

             <div class="text-center text-lg-start mt-4 pt-2">

                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                      <a href="signin.php" class="link-danger"id="register">Register</a></p>
              </div>
    
  
			<!-- Password input
			<div class="form-outline mb-3">
					<label class="form-label" for="form3Example4">Password</label>
			  <input type="password" id="password" class="form-control form-control-lg"
				placeholder="Enter password" required />
			</div> -->
  
			<!-- <div class="d-flex justify-content-between align-items-center"> -->
			  <!-- Checkbox -->
			  <!-- <div class="form-check mb-0">
				<input class="form-check-input me-2" type="checkbox" value="" id="email" />
				<label class="form-check-label" for="email">
				  Remember me
				</label>
			  </div>
			</div>
   -->

  
		  </form>
		</div>
	  </div>
	</div>
	</section>
	

	<script>
    $(function(){
    $("#error_password").hide();
    var error_password = false;
    $("#password").focusout(function(){
        check_password();
    });
    function check_password(){
        var password_pattern = /^[a-zA-Z]*$/;
        var password = $("#password").val();
        if(password_pattern.test(password) && password !== ""){
            $("#error.password").hide();
        }else{
            $("#error_password").html("Please Enter the Name");
            $("#error_password").show();
            error_password = true;
        }
    }  
    
    function check_address(){
        var name = $("#email").val();
        if(address !== ""){
            $("#error.email").hide();
        }else{
            $("#error_email").html("Please Enter the Address");
            $("#error_email").show();
            error_email = true;
        }
    }      

    $("#form").submit(function(){
        error_password = false;
        error_email =false;

        check_password();
        check_email();

        if(error_password === false && error_email === false){
        alert("success");
        return true;
    }else{
        alert("not success");
        return false;
    }
       });
});

</script>


</body>
</html>