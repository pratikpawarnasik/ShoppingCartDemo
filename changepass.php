<?php
	include_once("db.php");

	if(!isset($_SESSION["uid"]))
	{
		header("location:index.php");
	}
?>	 
  
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Change Password</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="style1.css" rel="stylesheet">
		<link href="nav.css" rel="stylesheet" type="text/css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/font_awsome_date.css">
		<link href="style.css" rel="stylesheet" type="text/css">
		<script src="js/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</head>

	<body id="home">
		<div class="content">
			<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 menu"></div>
				<div class="col-xs-12 col-sm-8 col-md-10 col-lg-10 content-main" style="">
					<div class="apply_leave">
						<div class="leave_app"><br><br>
							<div class="row">
								<div class="col-sm-1"></div>
								<div class="col-sm-10">
									<div class="panel panel-default" style="border:1px solid #ce1126;">
										<div class="panel-heading">
											<label for="feedback">Change your Password:</label>
										</div>
										<div class="panel-body"><br>
											<form method="post">
												<div class="form-group required">
													<div class="col-sm-10">
														<div class="row">
															<div class="col-sm-4">
																<label for="password" align="right">Enter New Password:</label>
															</div>
								
															<div class="col-sm-8" >
																<input class="form-control" name="password" id="newpass" type="text"></textarea>
															</div>
														</div>
		
														<div class="col-sm-4">
															<label for="password" align="right">Enter New Password:</label>															
														</div>
													</div>

													<div class="col-sm-8" >
														<input class="form-control" name="password" id="newpass" type="text"></textarea>
													</div>
												</div>
												<div class="col-sm-1"></div>
										</div>
									</div>
									<div class="form-group required">
										<div class="row">
											<center><input type="submit" name="changep" id="changep" class="btn btn-default" value="Change Password" onClick="return backfeed()" style="background-color:#ce1126; color:#fff; border-radius:0;"></center>
										</div>		 
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div> 
		</div>
			
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>
	</body>
</html>