<!DOCTYPE html>
<html lang="en">
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
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<?php include("header.php"); ?>

	<div class="row save" >
	<div class="container">
		<div class="col-md-4">
			<br>
			<br>
			<ul class="nav nav-pills nav-stacked">
				<li><a data-toggle="pill" href="#safe_path" class="btn btn-success">Safe Path</a></li>
				<li><a data-toggle="pill" href="#get_in" class="btn btn-danger">Get in</a></li>
				<li><a data-toggle="pill" href="#water"	 class="btn btn-warning">Water Source</a></li>
				<li><a data-toggle="pill" href="#danger" class="btn btn-danger">Danger Zone</a></li>
				<li><a data-toggle="pill" href="#safe" class="btn btn-success">Safe Zone</a></li>
				<li><a data-toggle="pill" href="#call" class="btn btn-info">Make Call</a></li>
			</ul>danger
		</div>
		<div class="col-md-8">
			<div class="tab-content">
				<div id="safe_path" class="tab-pane fade in active">
					<h2>Safe Path to rescue</h2>
					<img src="images/2.jpg" width="750px" height="550px;">
				</div>
				<div id="get_in" class="tab-pane fade">
					<h2>Safe Paht to get in</h2>
					<img src="images/1.jpg" width="750px" height="550px;">	
				</div>
				<div id="water" class="tab-pane fade">
					<h2>Nearest Water resource</h2>
					<img src="images/3.jpg" width="750px" height="550px;">
				</div>
				<div id="danger" class="tab-pane fade">
					<h2>Danger zone</h2>
					<img src="images/333.jpg" width="750px" height="550px;">
				</div>
				<div id="safe" class="tab-pane fade">
					<h2>Safe Zone</h2>
					<img src="images/333.jpg" width="750px" height="550px;">
				</div>
				<div id="call" class="tab-pane fade">
					<h2> your call has been sent to the nearest fire service station</h2>
					<img src="images/4.jpg" width="750px" height="550px;">
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
