<?php
	include "db.php";
	session_start();

	if(empty($_POST["adminlogin"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$sql = "SELECT * FROM admin_info WHERE username = '$username' AND password = '$password'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);

		if($count == 1)
		{
			$row = mysqli_fetch_array($run_query);
			$_SESSION["aid"] = $row["id"];
			header("location:adminPanel.php");
			echo "prasad";
		}
		else
		{
			header("location:adminLoginScreen.php");
		}
		
	}
?>