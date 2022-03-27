<?php 
//include "connection.php";
//include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$phone = stripslashes($_REQUEST['phone']);
		$phone = mysqli_real_escape_string($con,$phone);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);


    date_default_timezone_set('Asia/Kolkata');
		$trn_date = date("Y-m-d H:i:s");

    
        $query = "INSERT into `users` (username, phone, password, trn_date) VALUES ('$username', '$phone', '".md5($password)."', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>


  <!--<div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Username" required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text" name="phone" placeholder="Phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Password" required>
          </div>
          
         
         
        </div>
       
        <div class="button">
          <input type="submit" value="Submit and Exit">
        </div>
    --><div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-banner.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>-->
          <img src="images/logo.png" class="img-responsive center-block d-block mx-auto">
					

					<span class="login100-form-title p-b-34 p-t-27">
						SIGN UP
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
          <div class="wrap-input100 validate-input" data-validate = "Enter Phonenumber">
						<input class="input100" type="number" name="phone" placeholder="Phoneumber" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" value="Submit and Exit">
							REGISTER
						</button>
					</div>

					<p style="color: white;">ALREADY REGISTERD? <a href='login.php' style="color: white;">LOGIN</a></p>

<br /><br />
				</form>
			</div>
		</div>
	</div>
	

        <?php } ?>
      </form>
    </div>
  </div>



</body>
</html>