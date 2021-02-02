<?php
	include "db.php";
	session_start();

	if(!isset($_SESSION["aid"]))
	{
		header("location:adminLoginScreen.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/adminPanel.css">
		<script src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Website Name</a>
				</div>

				<ul class="nav navbar-right top-nav">
                    <li class="dropdown">
						<a href="adminLogout.php" class="dropdown-toggle" > <span class="glyphicon glyphicon-log-out"></span>Log Out</a>
					</li>
				</ul>
            
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li>
							<a href="adminPanel.php"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard </a>
						</li>
                     
						<li>
							<a  href="adminProfile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a>
						</li>
                     
						<li>
							<a href="addProduct.php"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Add Product</a>
						</li>
					
						<li>
							<a href="addCategory.php"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Add Category</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<center>
							<h1 class="page-header" style="margin-left: 30px;">
								Admin Dashboard 
							</h1>
						</center>
                       
						<li class="active">
							<div class="container">
								<div class="container">
									<div class="row centered-form">
										<div class="col-xs-12 col-sm-11 col-md-11 col-sm-offset-1 col-md-offset-1">
											<div class="panel panel-default" style="margin-right:  27px;">
												<center>
													<div class="panel-heading">
														<h2>Profile</h2>
													</div>
												</center>
									
												<div class="panel-body">
													<form method="POST" action="updateAdminInfo.php">
														<?php
															$query = "SELECT * FROM admin_info";
															$result = mysqli_query($con,$query)
															or die(mysqli_error());  

															$row = mysqli_fetch_assoc($result);
														?>
													
														<div class="row">
															<div class="col-xs-6 col-sm-6 col-md-6">
																<div class="form-group">
																	<label>Name:</label>
																	 <input type="text"  id="name" name="name" class="form-control input-sm" placeholder="Your Name" value="<?= $row['name']; ?>">
																 </div>
															</div>

															<div class="col-xs-6 col-sm-6 col-md-6">
																<div class="form-group">
																	<label>Email:</label>
																	<input type="text"  id="email" name="email" class="form-control input-sm" placeholder="Your Email Address" value="<?= $row['email']; ?>">
																</div>
															</div>
                                                        </div>

                                                        <div class="row">
															<div class="col-xs-6 col-sm-6 col-md-6">
																<div class="form-group">
																	<label>Username:</label>
																	<input type="text"  id="username" name="username" class="form-control input-sm" placeholder="Your Username" value="<?= $row['username']; ?>">
																</div>
															</div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
																<div class="form-group">
																	<label>Password:</label>
																	<input type="text"  id="password" name="password" class="form-control input-sm" placeholder="Your Password" value="<?= $row['password']; ?>">
																</div>
															</div>
                                                         </div>

                                                         
                                                         <center>
															<button type="submit" name="button" class="btn btn-primary btn-md">Update</button>
														</center>
													</form>
	                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header" style="color: white;">
							<center>Copyright &copy;2018 All Rights Reserved.
                                <br/><br/>
							</center>
                        </h4>
                    </div>
                </div>
            </div>
		</div>
    </body>
</html>