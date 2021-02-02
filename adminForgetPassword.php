<?php
	session_start();
	require 'db.php';

	if(isset($_POST['recovery']))
	{
		$sql="select * from admin_info where email='".$_POST['email']."'";
		$run_query=mysqli_query($con,$sql);
	 
		if(!empty($_POST['email']) && mysqli_fetch_assoc($run_query)>0 && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==FALSE)
		{
			$_SESSION['info']=$_POST['email'];
			header("location:admininfo.php");
		}
	   
		if(empty($_POST['email']))
		{
			$ree="What is your email?";
		}
		elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==true)
		{
			$ree="Invalid email";
		}
		elseif(mysqLi_fetch_assoc($dqlq)<1)
		{
			$ree="That email does not exist";
		}
	}
 ?>


<html>
	<head>
	<title>Password Recovery</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	</head>

	<body>
		<form action="admininfo.php" method="post">
			<input type="text" name="email" placeholder="Enter Your Email ID" autofocus><span> * <?php echo $ree;?> </span>
			<input type="submit" class="btn btn-success" name="recovery" value="Recover">
		</form>
	</body>
</html>