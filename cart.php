<?php
	session_start();

	if(!isset($_SESSION["uid"]))
	{
		header("location:index.php");
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
					<li>
						<a href="profile.php"><span class="glyphicon glyphicon-home"></span>Home</a>
					</li>
				</ul>
			</div>
		</div>
		
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8" id="cart_msg">
				</div>
				<div class="col-md-2">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">Cart Checkout</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-2"><b>Action</b></div>
										<div class="col-md-2"><b>Product Image</b></div>
										<div class="col-md-2"><b>Product Name</b></div>
										<div class="col-md-2"><b>Quantity</b></div>
										<div class="col-md-2"><b>Product Price</b></div>
										<div class="col-md-2"><b>Price</b></div> 
									</div>
									<div id="cart_checkout"></div>	
								</div>
								<div class="panel-footer"></div>
						</div>
					</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</body>
</html>