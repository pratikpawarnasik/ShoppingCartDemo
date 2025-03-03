<?php

include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];

$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2))
{
		echo "<div class='alert alert-danger'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><i>Please Fill all fields..!</i></b>
			  </div>";
		exit();
}
 else 
 {
		if(!preg_match($name,$f_name))
		{
			echo 
				"<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>First name <i>$f_name</i> is not valid..!</b>
				</div>";
			exit();
		}
	
		if(!preg_match($name,$l_name))
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Last name <i>$l_name</i> is not valid..!</b>
				</div>";
			exit();
		}
	
		if(!preg_match($emailValidation,$email))
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>This Email <i>$email</i> is not valid..!</b>
				</div>";
			exit();
		}
		
		if(strlen($password) < 6 )
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Password is weak</b>
				</div>";
			exit();
		}
	
		if(strlen($repassword) < 6 )
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Password is weak</b>
				</div>";
			exit();
		}
	
		if($password != $repassword)
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b><i>Password not matches</i></b>
				</div>";
		}
	
		if(!preg_match($number,$mobile))
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Mobile number <i>$mobile</i> is not valid</b>
				</div>";
			exit();
		}
		
		if(!(strlen($mobile) == 10))
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Mobile number must be greater than 10 digit</b>
				</div>";
			exit();
		}
	
		$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($con,$sql);
		$count_email = mysqli_num_rows($check_query);
	
		if($count_email > 0)
		{
			echo "
				<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Email Address is already available Try Another email address</b>
				</div>";
				exit();
		}
		else 
		{
			$sql = "INSERT INTO `user_info`(`user_id`, `first_name`, `last_name`, 
					`email`, `password`, `mobile`, `address1`, `address2`, `registration_date`) 
					VALUES (NULL,'$f_name','$l_name','$email','$password',
					'$mobile','$address1','$address2',NOW())";
		
			$run_query = mysqli_query($con,$sql);
			if($run_query)
			{
				echo "<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>You Have Registered Successfully...</b>
					</div>";
			}
		}
	}
?>