<?php
	session_start();

	if(!isset($_SESSION["aid"]))
	{
		header("location:adminLoginScreen.php");
	}

	include "db.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
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
							<center><h1 class="page-header" style="margin-left: 30px;">
								Admin Dashboard </h1>
							</center>
						   
							<li class="active">
								<div class="container">
									<div class="container">
										<div class="row centered-form">
											<div class="col-xs-12 col-sm-11 col-md-11 col-sm-offset-1 col-md-offset-1">
												<div class="panel panel-primary" style="margin-right:  27px;">
													<div class="panel-heading"><b>Adding Product</b>
													</div>
													<div class="panel-body">
														<form action="addProductDB.php" method="POST">
															<div class="row">
																<div class="col-md-6">
																	<label for="title">Product Name</label>
																		<input type="text" id="title" name="title" class="form-control" placeholder="Enter Product Name" autofocus>
																</div>
															</div>
															<p><br/></p>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="sel1">Product Category</label>
																			 <select name="cat" id="cat" class="form-control">
																				<?php
																					include "db.php";
																					$query = "SELECT * FROM categories";
																					$result = mysqli_query($con,$query);  
																					while($row=mysqli_fetch_array($result)){   
																						
																					 echo "<option>".$row['cat_title']."</option>";
																					 }
																				?> 
																			</select>`
																	</div>
																</div>
															</div>

															<p><br/></p>
															<div class="row">
																<div class="col-md-6">
																	<label for="price">Product Price</label>
																	<input type="text" id="price" name="price" class="form-control" placeholder="Enter Product Price (Only Digit)">
																</div>
															</div>

															<p><br/></p>
															<div class="row">
																<div class="col-md-12">
																	<label for="desc">Product Description</label>
																	<input type="text" id="desc" name="desc" class="form-control" placeholder="Enter Product Description">
																</div>
															</div>

															<p><br/></p>
															<div class="row">
																<div class="col-md-6">
																	<label for="keyword">Product Keyword</label>
																	<input type="text" id="keyword" name="keyword" class="form-control" placeholder="Enter Product Keyword">
																</div>
															</div>
															
															<p><br/></p>
															<div class="row">
																<div class="col-md-12">
																	<label for="image">Product Image</label>
																	<input type="file" name="image" id="image">
																</div>
															</div>
															
															<p><br/></p>
															<div class="row">
																<div class="col-md-12">
																	<input style="float:right;" value="Add Product" type="submit" id="addProduct" name="addProduct" class="btn btn-success btn-lg">
																</div>
															</div>
									
														</form>
													</div>
								
													<div id="footer">
														<div class="container-fluid">
															<div class="row">
																<div class="col-lg-12">
																	<h4 class="page-header" style="color: white;">
																		<center>Copyright &copy;2018 All Rights Reserved.</h4>
																		</center>
																</div>
															</div>
														</div>
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
	</body>
</html>