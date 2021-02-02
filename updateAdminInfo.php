 <?php
 
 include "db.php";
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $confirmpassword = $_POST['password'];
 
 
 $sql = "UPDATE admin_info SET name='$name',email='$email',username='$username',password='$password',confirmpassword='$password' ";
 $run_query = mysqli_query($con,$sql);
 
 if($run_query)
 {
	 echo "<script>alert('INFORMATION UPDATED SUCCESSFULLY...!!!')</script>";
	 header("Location: adminProfile.php");
 }
 ?>