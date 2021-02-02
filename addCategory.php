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
  <script src="js/jquery.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/adminPanel.css">
  <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
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
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                

                   
                    <li>
                        <a href="adminPanel.php"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard </a>
                       
                    </li>
                     
                    <li>

                        <a  href="adminProfile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a>
                    </li>
                     <li>

                                          
                    <li>
                        <a href="addProduct.php"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Add Product</a>
                    </li>
					
					<li>
                        <a href="addCategory.php"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Add Category</a>
                    </li>

                   
            <!-- /.navbar-collapse -->
        </nav>

       
       
                <!--INVOICE-->

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                <center><h1 class="page-header" style="margin-left: 30px;">
                Admin Dashboard 
                </h1></center>
                       
                <li class="active">
                                
              

                        <div class="container">
                           <div class="container">
                            <div class="row centered-form">
                                <div class="col-xs-12 col-sm-11 col-md-11 col-sm-offset-1 col-md-offset-1">
                                  <div class="panel panel-primary" style="margin-right:  27px;">

                                    <div class="panel-heading"><b>Adding Category</b></div>
						<div class="panel-body">
						
						<form action="addCategoryDB.php" method="POST">
							<div class="row">
								
								<br/>
								<div class="col-md-6">
									<label for="title">Category Name</label>
									<input type="text" id="cat" name="cat" class="form-control" placeholder="Enter Category Name" autofocus>
								</div>
								
							</div>
								
								<p><br/></p>
								
								<div class="row">
									<div class="col-md-6">
								<input style="float:right;" value="Add Category" type="submit" id="addCategory" name="addCategory" class="btn btn-success btn-lg">`
									</div>
								</div>
								
								
							</div>
							</form>
                            <div id="footer">

                              <div class="container-fluid">

                                  <div class="row">
                                      <div class="col-lg-12">
                                      <h4 class="page-header" style="color: white;">
                                     
                                         <center>Copyright &copy;2018 All Rights Reserved.
                                         <br/>
                                          <br/>

                                         
                                        
                                      </h4>
                                      </center>
                                      </div>
                                  </div>
                              </div>

                          </div>
             </form>
		
	</body>
</html>