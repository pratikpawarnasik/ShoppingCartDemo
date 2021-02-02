<?php
	include 'db.php';

	$newpassword=$_POST['newpassword'];
	$confirm_password=$_POST['conpassword'];
	$oldpassword=$_POST['oldpassword'];

	$query="UPDATE user_info SET password='$newpassword' where `password`='$oldpassword'";

	if($newpassword==$confirm_password)
	{
	   $update_password=mysqli_query($con,$query);
		if($update_password=true)
		{
			echo "Congratulations You have successfully changed your password";
		}
	 }
	 else
	{
	   echo "Passwords do not match";
	}
?>