<?php

	include "db.php";
			
	if(isset($_POST["addCategory"]))
	{
		$cat = $_POST['cat'];
		
		if(empty($cat))
		{
				echo "<div class='alert alert-danger'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><i>Please Fill all fields..!</i></b>
					  </div>";
				exit();
		}
		 else 
		 {
					$sql = "INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES (NULL, '$cat');";
				
					$run_query = mysqli_query($con,$sql);
					if($run_query)
					{
						echo "<script>";
						echo "alert('Category added');";
						echo"</script>";
						header("Location: addCategory.php");
					}
					
			}
			
			
		}
?>
