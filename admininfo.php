<?php
	session_start();
	require 'db.php';

	$sql="select * from admin_info Where email='".$_SESSION['info']."'";
	$run_query=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($run_query);

	$email=$row['email'];
	$pwd=$row['password'];

	 echo"<h3>Your information is :</h3>" ."<br><b>Your Email :</b>".$email."<br><b>Your Password : </b>".$pwd;
	 
	 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Electronic Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>

	<body>
		<div class="container">
			<a href="adminLoginScreen.php" class="btn btn-success" role="button">Go Back</a>
		</div>
	</body>
</html>
