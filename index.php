<?php
	include_once("db.php");
	session_start();

	$res="";

	if(isset($_POST["btnrec"]))
	{
		echo $email="$_POST[txtemail]";
		echo $result = mysql_query("SELECT * FROM user_info WHERE email='$email'"); 

		if(mysql_num_rows($result)==1);
		{ 
			$_SESSION["emailidchngpass"] = $_POST["txtemail"];
			header("Location: index.php");
		}
		//else
		{
			$res= "Wrong Email Id  Entered";
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Electronic Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Website Name</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login</a>
						<ul class="dropdown-menu">
							<div style="width:300px;height:180px">
								<div class="panel panel-primary">
									<div class="panel-heading">Login</div>
										<div class="panel-heading">
											<label for="email">Email</label>
											<input type="email" class="form-control" id="email" required autofocus/>
											<label for="email">Password</label>
											<input type="password" class="form-control" id="password" required/>
				
											<p></br></p>
											
											<a href="custforgot.php" style="color:white; list-style:none;">Forget Password</a>
											<input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
										</div>
									<div class="panel-footer" id="e_msg"></div>
								</div>
							</div>	
						</ul>
					</li>
					<li><a href="#"  data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user"></span> Register</a></li>
				</ul>
			</div>
		</div>
		
		<p></br></p>
		<p></br></p>
		<p></br></p>
		
		<div class="container-fluid">
			<div class="row">
				
					<div class="col-md-2">
						<div id="get_category">
						</div>
					</div>
					<div class="col-md-10">
						<div class="panel panel-primary">
							<div class="panel-heading">Products</div>
								<div class="panel-body">
									<div id="get_product">
									</div>							
								</div>
							<div class="panel-footer">&copy; 2017 All Rights Reserved.</div>
						</div>
					</div>
				
			</div>
		</div>

		<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-2"></div>
									<div class=="col-md-8" id="signup_msg">
									</div>
									<div class="col-md-2"></div>
							</div>
			
							<div class="row">
								<div class="col-md-2"></div>
									<div class="col-md-8">
										<div class="panel panel-primary">
											<div class="panel-heading">Customer SignUp Form</div>
											<div class="panel-body">
												<form method="POST">
													<div class="row">
														<div class="col-md-6">
															<label for="f_name">First Name</label>
															<input type="text" id="f_name" name="f_name" class="form-control" autofocus>
														</div>
														
														<div class="col-md-6">
															<label for="l_name">Last Name</label>
															<input type="text" id="l_name" name="l_name" class="form-control">
														</div>
													</div>
								
													<div class="row">
														<div class="col-md-12">
															<label for="email">Email ID</label>
															<input type="text" id="email" name="email" class="form-control">
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<label for="password">Password</label>
															<input type="password" id="password" name="password" class="form-control">
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<label for="repassword">Re-Enter Password</label>
															<input type="password" id="repassword" name="repassword" class="form-control">
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<label for="mobile">Mobile</label>
															<input type="text" id="mobile" name="mobile" class="form-control">
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<label for="address1">Address Line 1</label>
															<input type="text" id="address1" name="address1" class="form-control">
														</div>
													</div>
													
													<div class="row">
														<div class="col-md-12">
															<label for="address2">Address Line 2</label>
															<input type="text" id="address2" name="address2" class="form-control">
														</div>
													</div>
													
													<p><br/></p>
								
													<div class="row">
														<div class="col-md-12">
															<input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button" class="btn btn-success btn-lg">`
														</div>
													</div>
											</div>
											</form>
						
											<div class="panel-footer">&copy;2018 All Rights Reserved.</div>
										</div>
									</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</div>
        
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>