<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Login</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="login-box animated fadeInUp">
				<div class="box-header">
				<form method="post" action="adminLogin.php">
					<h2>Admin Login</h2>
				</div>
				<label for="username" autofocus>Username</label>
				<br/>
				<input type="text" id="username" name="username">
				<br/>
				<label for="password">Password</label>
				<br/>
				<input type="password" id="password" name="password">
				<br/>
				<button type="submit" id="adminlogin" >Login</button>
				<br/>
				<a href="adminForgetPassword.php"><p class="small"><b>Forgot your password?</b></p></a>
			</div>
		</div>
		</form>
	</body>
</html>