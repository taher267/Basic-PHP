<?php 
	session_start();
	require_once("connect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PhP Tutorial</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css OR css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js OR js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid headBg">
	<div class="row" id="headerNav">
		<div class="col-md-4"></div>
		<div class="col-md-1"><a href="index.php">Home</a></div>
		<?php 
			if(isset($_COOKIE["comMer"])){
				echo '<div class="col-md-1"><a href="profile_in.php">Profile</a></div>';
			}

		 ?>
		<?php 
			if(!isset($_COOKIE["comMer"])){
				echo '<div class="col-md-1"><a href="signup.php">Sign Up</a></div>';
			}

		 ?>
		<?php 
			if(!isset($_COOKIE["comMer"])){
				echo '<div class="col-md-1"><a href="login.php">Login</a></div>';
			}

		 ?>
		
		
		
		<?php 
			if(isset($_COOKIE["comMer"])){
				echo '<div class="col-md-1"><a href="log_out_core.php">Logout</a></div>';
			}

		 ?>
		
		<div class="col-md-2"></div>
	</div>
</div>