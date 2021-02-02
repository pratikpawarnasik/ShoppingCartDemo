<?php

include "db.php";
		
if(isset($_POST["addProduct"]))
{
	
	$title = $_POST['title'];
	$price = $_POST['price'];
	$desc = $_POST['desc'];
	//$image = $_POST['image'];
	$image = 'cable3.jpg';
	$keyword = $_POST['keyword'];
	$cat_id = $_POST['cat'];

	if(empty($cat_id) || empty($title) || empty($price) || empty($desc) || empty($keyword) || empty($image))
	{
			echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><i>Please Fill all fields..!</i></b>
				  </div>";
			exit();
	}
	else 
	{
		 			$sql = "INSERT INTO products(product_id, product_title, product_price, 
							product_desc, product_image, product_keywords, product_cat)
							VALUES (NULL,'$title','$price','$desc','$image','$keyword',
							(SELECT cat_id FROM categories WHERE cat_title='$cat_id'))";
										
				$run_query = mysqli_query($con,$sql);
				if($run_query)
				{
					header("Location: addProduct.php");
				}
	}
}
?>