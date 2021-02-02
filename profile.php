<?php
	session_start();
	include 'db.php';

	if(!isset($_SESSION["uid"]))
	{
		header("location:index.php");
	}

	$sql_query=mysqli_query($con,"select * from user_info where user_id =".$_SESSION["uid"]);
	$_row=mysqli_fetch_assoc($sql_query);

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
		<style>
			.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
		</style>
	</head>

	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Website Name</a>
				</div>
	 			<ul class="nav navbar-nav">
					<li><a href="profile.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href=""	 id="cart_container" class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;	">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sr.No.</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Product Price ($)</div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
									</div>
								</div>
								<div class="panel-footer"></div>
							</div>
					 	</div>
					</li>
					
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi, ".$_SESSION['name'] ?></a>
						<ul class="dropdown-menu">
								<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
								<li class="divider"></li>
								<li><a href="#"  data-toggle="modal" data-target="#myModal1" style="text-decoration:none; color:blue;">Change Password</a></li>
								<li class="divider"></li>
								<li><a href="logout.php" style="text-decoration:none; color:blue;">Log out</a></li>
						</ul>
					</li>
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
						<div class="row">
							<div class="col-md-12" id="product_msg">
							</div>
						</div>

						<div class="panel panel-primary">
							<div class="panel-heading">Products</div>
							<div class="panel-body" >
								<div id="get_product">
								</div>							
							</div>
							<div class="panel-footer">&copy; 2017 All Rights Reserved.</div>
						</div>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<center>
						<ul class="pagination" id="pageno">
							<li><a href="#">1</a></li>
						</ul>
					</center>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">
    			<div style="width:400px;height:220px">
					<div class="panel panel-primary">
					   <form method="POST" id="frmask" name="frmask">
							<div class="panel-heading"><b>Change your Password<button type="button" class="close" data-dismiss="modal">&times;</button></b></div>
								<div class="panel-heading">
									<label for="password">Enter Old Password:</label>
									<input type="password" class="form-control" name="oldpassword" id="newpass" type="text" value="<?php echo $_row['password'];?>"></textarea>
									</br>
								
									<label for="password" >Enter New Password:</label>
									<input class="form-control" name="newpassword" id="newpassword" type="password" autofocus>
									<span id="new-info" class="info"></span>
									</br>
									
									<label for="password">Enter Confirm Password:</label>
									<input class="form-control" name="conpassword" id="conpass" type="password">
									<span id="conpass-info" class="info"></span>
	
									<p></br></p>
											
									<input type="button" class="btn btn-success" onclick="enq();" style="float:right;" id="save" value="Save" name="save">
									<p id="success"style="color:red"></p>
								</div>
						</form>
					</div>
				</div>	
		
				<div class="col-sm-1"></div>
			</div>
	   </div>
	
        <div class="modal-footer" style="border-top: 0px solid #aaa;">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
	</body>
</html>

<script>
	function enq()
	{
		var valid;
		var valid;	
		valid = validate();

		if(valid) 
		{
			$.ajax({
					url: "chang_password.php",
					type: "POST",
					data: new FormData($("#frmask")[0]),
					processData: false, 
					contentType: false, 
					success:function (data) 
							{
								$("#success").html(data);
								$('#frmask')[0].reset();
							},
					error: function(jqXHR, textStatus, errorThrown) 
							{
								console.log(textStatus, errorThrown);
							}
					});
		}
	}
	
	function validate() 
	{
		var valid = true;	
		$(".demoInputBox").css('background-color','');
		$(".info").html('');
	
		if(!$.trim($("#conpass").val())) 
		{
			$("#conpass-info").html("Re-Enter Password");	
			valid = false;
		}
		
		if(!$.trim($("#newpassword").val())) 
		{
			$("#new-info").html("Enter Password");	
			valid = false;
		}
		return valid;
	}
</script>