@php
/*

*/
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="user/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="user/css/util.css">
	<link rel="stylesheet" type="text/css" href="user/css/main.css">
<!--===============================================================================================-->
</head>
<body>
@php/*
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){

		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE phone='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: welcome_user.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{*/
@endphp
<div class="form">
	<!--
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />

</div>-->


	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-banner.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" name="login">
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>-->
						<img src="images/logo.png" class="img-responsive center-block d-block mx-auto">

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Enter Registered Phone Number">
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
						<button class="login100-form-btn" value="Login">
							Login
						</button>
					</div>

					<p style="color: white;">Not registered yet? <a href='registration.php' style="color: white;">Register Here</a></p>

<br /><br />
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="user/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/bootstrap/js/popper.js"></script>
	<script src="user/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/daterangepicker/moment.min.js"></script>
	<script src="user/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="user/js/main.js"></script>

</body>
</html>
<?php } ?>


</body>
</html>
