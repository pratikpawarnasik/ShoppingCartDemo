<?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
			.bg-1 { 
					background-color: #AED6F1;
					color: #ffffff;
					}
		</style>
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
							<a  href="adminProfile.php" id="adminProfile"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a>
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

		<div id="page-wrapper" style=" background-color:  #AED6F1 ;">
			<div class="container-fluid" >
				<div class="row" >
					<div class="col-lg-12">
						<center>
							<h1 class="page-header" style="margin-left: 30px;" >
								Admin Dashboard 
							</h1>
						</center>
					</div>
				</div>
			</div>
		</div>
	<!--////////////////////////////////////////////////////////////////  Body Image    //////////////////////////////////////////////-->	
        <div class="bg-1">
			<div class="container text-center">
				<img src="img/bird.jpg" class="img-circle" alt="Bird" width="350" height="330">
			</div>
		</div>
						
		<!--////////////////////////////////////////////////////////////////FOOTER//////////////////////////////////////////////-->	
		<div id="footer">
			<div class="container-fluid">
				<div class="row" style=" background-color:  #AED6F1 ;">
					<div class="col-lg-12">
                        <h4 class="page-header" >
							<center>Copyright &copy;2018 All Rights Reserved
							</center>
						</h4>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>