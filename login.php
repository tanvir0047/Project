<!DOCTYPE html>
<html>
<head>
	<title>Fire</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- shortcut icon -->
	<link rel="shortcut icon" href="images/NASA_logo.png">

	<!-- bootstrap online -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- bootstrap offline -->
  	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
 	<script src="Bootstrap/js/jquery.min.js"></script>
  	<script src="Bootstrap/js/bootstrap.min.js"></script>

	<!-- font awesome -->
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Arsenal' rel='stylesheet'>
  	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<link href="http://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style_of_rl.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<?php include("header.php"); ?>
	<div class="login_box">
		<div class="login_head">
			<!-- <h2>Login</h2> -->
			<!-- <hr> -->
			<img src="images/login_icon.png">
		</div>
		<div class="login_body">
			<form action="" method="post">
				<input type="text" name="username" class="input" placeholder="Username"> <br>
				<input type="password" name="pwd" class="input" placeholder="Password">
				<button class="btn" name="login">Login</button>
			</form>
		</div>
		<br>
		<a href="registration.php">New Member? Sign up here</a><br>
		<a href="">Forgot the Password?</a>
	</div>

	<script type="text/javascript"></script>

</body>
</html>