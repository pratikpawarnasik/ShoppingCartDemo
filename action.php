<?php
 
	session_start();

	include "db.php";

	if(isset($_POST["category"]))
	{
		$category_query="select * from categories order by cat_title";
		$run_query=mysqli_query($con,$category_query);
		echo "<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li> ";

		if(mysqli_num_rows($run_query)>0)
		{
			while($row=mysqli_fetch_array($run_query))
			{
				$cid=$row["cat_id"];
				$cat_name=$row["cat_title"];
				echo "<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>";
			}
			echo "</div>";
		}
	}
		
		
	if(isset($_POST["brand"]))
	{
		$brand_query="select * from brands";
		$run_query=mysqli_query($con,$brand_query);
		echo "<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li> ";

		if(mysqli_num_rows($run_query)>0)
		{
			while($row=mysqli_fetch_array($run_query))
			{
				$bid=$row["brand_id"];
				$bname=$row["brand_title"];
				echo "<li><a href='#' class='selectBrand' bid='$bid'>$bname</a></li>";
			}
			echo "</div>";
		}
	}
		

	if(isset($_POST["page"]))
	{
		$sql = "select *from products";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		$pageno = ceil($count/9);
			
		for($i = 1;$i <= $pageno; $i++)
		{
			echo "<li><a href='#' page='$i' id='page'>$i</a></li>";
		}
	}
		

	if(isset($_POST["getProduct"]))
	{
		$limit = 9;
		
		if(isset($_POST["setPage"]))
		{
			$pageno = $_POST["pageNumber"];
			$start = ($pageno * $limit) - $limit;
		}
		else
		{
			$start = 0;
		}
		
		$product_query="select * from products ORDER BY RAND() LIMIT 50";
		$run_query=mysqli_query($con,$product_query);
			
		if(mysqli_num_rows($run_query)>0)
		{
			while($row=mysqli_fetch_array($run_query))
			{
				$pro_id=$row['product_id'];
				$pro_cat=$row['product_cat'];
				$pro_title=$row['product_title'];
				$pro_price=$row['product_price'];
				$pro_image=$row['product_image'];
				
				echo "<div class='col-md-3'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
									<div class='panal-body'>
										<img src='img/$pro_image' style='width:349px; height:250px;'/>
									</div>
								<div class='panel-heading'>Rs. $pro_price
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
					</div>";
			}
			
		}
	}
		 

	 if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"]))
	 {
		if(isset($_POST["get_seleted_Category"]))
		{
			$id=$_POST["cat_id"];
			$sql="select * from products where product_cat='$id'";
		}
		else if(isset($_POST["selectBrand"]))
		{
			$id=$_POST["brand_id"];
			$sql="select * from products where product_brand='$id'";
		}
		else
		{
			$keyword=$_POST["keyword"];
			$sql="select * from products where product_keywords LIKE '%$keyword%'";
		}
		
		$run_query=mysqli_query($con,$sql);
		
		while($row=mysqli_fetch_array($run_query))
		{
			$pro_id=$row['product_id'];
			$pro_cat=$row['product_cat'];
			$pro_title=$row['product_title'];
			$pro_price=$row['product_price'];
			$pro_image=$row['product_image'];
			
			echo "<div class='col-md-3'>
						<div class='panel panel-info'>
							<div class='panel-heading'>$pro_title</div>
								<div class='panal-body'>
									<img src='img/$pro_image' style='width:265px; height:250px;'/>
								</div>
								<div class='panel-heading'>Rs. $pro_price
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
					</div>";
		}
	}
		
		
	if(isset($_POST["addToProduct"]))
	{
		if(isset($_SESSION["uid"]))
		{
			$p_id = $_POST["proId"];
			$user_id = $_SESSION["uid"];
			$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
			$run_query = mysqli_query($con,$sql);
			$count = mysqli_num_rows($run_query);
			
			if($count > 0)
			{
				echo "<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					  </div>";
			} 
			else
			{
				$sql = "SELECT * FROM products WHERE product_id = '$p_id'";
				$run_query = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($run_query);
				$id = $row["product_id"];
				$pro_name = $row["product_title"];
				$pro_image = $row["product_image"];
				$pro_price = $row["product_price"];
			
				$sql = "INSERT INTO `cart` 
						(`id`, `p_id`, `user_id`, `product_title`,
						`product_image`, `quantity`, `price`, `total_amount`)
						VALUES (NULL, '$p_id','$user_id', '$pro_name', 
						'$pro_image', '1', '$pro_price', '$pro_price')";
				
				if(mysqli_query($con,$sql))
				{
					echo "<div class='alert alert-success'>
								<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
								<b>Product is Added..!</b>
						</div>";
				} 
			}
		}
		else
		{
				echo "<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Sorry..!Go and Sign Up First then you can add a product to your cart.</b>
					   </div>";
		}
	}
		

	if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"]))
	{
		$uid = $_SESSION["uid"];
		$sql = "select *from cart where user_id='$uid'";
		$run_query=mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		
		if($count > 0)
		{
			$no = 1;
			$total_amt = 0;
			
			while($row=mysqli_fetch_array($run_query))
			{
				$id = $row["id"];
				$pro_id = $row["p_id"];
				$pro_name = $row["product_title"];
				$pro_image = $row["product_image"];
				$qty = $row["quantity"];
				$pro_price = $row["price"];
				$total = $row["total_amount"];
				$price_array = array($total);
				$total_sum = array_sum($price_array);
				$total_amt = $total_amt + $total_sum;
					 
				if(isset($_POST["get_cart_product"]))
				{
					echo "<div class='row'>
								<div class='col-md-3'>$no</div>
								<div class='col-md-3'>$pro_name</div>
								<div class='col-md-3'><img src = 'img/$pro_image' width='60px' height='50px'></div>
								<div class='col-md-3'>Rs. $pro_price</div>
							</div>";
							$no = $no + 1;
				}
				else
				{
					 echo "<div class='row'>
								<div class='col-md-2'>
									<div class='btn-group'>
										<a href='#'  remove_id = '$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='#'  update_id = '$pro_id' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></span></a>
									</div>
								</div>
							
								<div class='col-md-2'><img src = 'img/$pro_image' width='60px' height='50px'></div>
									<div class='col-md-2'>$pro_name</div>
										<div class='col-md-2'><input type='text' class='form-control qty'   pid='$pro_id' id='qty-$pro_id' value='$qty'></div>
											<div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id'  value='$pro_price' disabled ></div>
												<div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id'   value='$total' disabled >	</div> 
							</div>";
				}
			}
			if(isset($_POST["cart_checkout"]))
			{
				echo "<div class='row'>
						<div class='col-md-8'></div>
							<div class='col-md-4'>
								<b><h1>Total Rs. $total_amt</h1><b>
							</div>
					  </div>";
			}
				 echo '<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="business" value="shopping@PrasadStore.com">
									<input type="hidden" name="upload" value="1">';
					  
					  $x = 0;
					  $uid = $_SESSION['uid'];
					  $sql = "select * from cart where user_id='$uid' ";
					  $run_query=mysqli_query($con,$sql);
					  
					  while($row=mysqli_fetch_array($run_query))
					  {
						  $x++;
						  
						  echo '<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
									<input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
										<input type="hidden" name="amount_'.$x.'" value="'.$row["price"].'">
											<input type="hidden" name="quantity_'.$x.'" value="'.$row["quantity"].'">';
					  }
					 
					 echo '<input style="float:right;margin-right:25px;" type="image" name="submit"
								src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png"
									alt="Paypal Checkout">
							</form>'; 
		}
	}
		

	if(isset($_POST["cart_count"]))
	{
		$uid = $_SESSION['uid'];
		$sql = "select * from cart where user_id= '$uid' ";
		$run_query = mysqli_query($con,$sql);
		echo mysqli_num_rows($run_query);
	}
		

	if(isset($_POST["removeFromCart"]))
	{
		$pid = $_POST["removeId"];
		$uid = $_SESSION["uid"];
		$sql = "delete from cart where user_id='$uid' and p_id='$pid'";
		$run_query = mysqli_query($con,$sql);
		
		if($run_query)
		{
			echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b><i>Product Removed From Cart...<i></b>
				  </div>";
		}
	}	
		

	if(isset($_POST["updateProduct"]))
	{
		$uid = $_SESSION["uid"];
		$pid = $_POST["updateId"];
		$qty = $_POST["qty"];
		$price = $_POST["price"];
		$total = $_POST["total"];
			
		$sql = "update cart set quantity = '$qty' , price = '$price' , total_amount = '$total' 
				 where user_id='$uid' and p_id='$pid'";
			
		$run_query = mysqli_query($con,$sql);
		
		if($run_query)
		{
			echo "<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b><i>Product is updated...<i></b>
				  </div>";
		}
	}
?> 