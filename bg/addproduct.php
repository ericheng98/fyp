<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Admin</title>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/adminpage.js"></script>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.main
{
	width: 100%;
	margin-bottom: 20px
	overflow: auto;
}
.left
{
	float: left;
	margin: 30px;
	font-size: 1.5em;
}
.reference
{
	padding: 10px 10px;
	display: inline-block;
	border-right: 1px solid silver;
}
.reference:hover
{
	background-color: #8CC63F;
	color: white;
	cursor: pointer;
}
.right
{
	margin-bottom: 50px;
	clear: both;
}
.right table 
{	
	font-size: 1.2em;
	border-spacing: 20px;
}
.right td input[type=text], [type=date], [type=number]
{
	padding: 5px;
}
input[type="submit"]
{
	height: 30px;
	font-size: 1em;
	margin: 0px 0px 10px 0px;
	background-color: #8CC63F;
	border: 0px;
	color: white;
}
input[type="submit"]:hover
{
	filter:brightness(80%);
	cursor: pointer;
}
#alert-side
{
	border: 1px solid red;
	margin-top: 5px; 
	padding: 5px; 
	width: 500px;
	background-color: pink;
	color: #E52752;
	font-weight: bold;
	font-size: 1.3em;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php 
			require 'html/header.html';
			// echo $_SESSION["loggedin"];die;
			if($_SESSION["loggedin"] != 1)
			{
				header("Location: http://localhost/fyp/bg/login.php");
			}
			require 'include/identity.php';
		?>
		<div class="main">

			<div class="left">
				<div class="reference" id="stat">
					Overall Statistics
				</div>
				<div class="reference" id="history">
					Order History
				</div>
				<div class="reference" id="product">
					Product
				</div>
				<div class="reference" id="staff">
					Staff
				</div>
			</div>
			<div class="right">
				<div id="alert-side" style="display:none;">
					<p id="msg"></p>
				</div>
				<h1>Add NEW Product</h1>
				<form method="POST" action="addproduct.php" name="addProductForm" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="namefrm" maxlength="100" size="50" /></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="image" /></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>RM <input type="text" maxlength="6" name="price" /></td>
						</tr>
						<tr>
							<td>Product Stock</td>
							<td><input type="number" name="stock" /></td>
						</tr>
						<tr>
							<td>Product Platform</td>
							<td>
								<select name="platform">
									<option value="0" selected>Please Choose Platform</option>
								<?php
									$sqlPlatform = 
									"
										SELECT p.* FROM platform p
									";
									$resultPlatform = mysqli_query($conn, $sqlPlatform);
									while($rowPlatform = mysqli_fetch_assoc($resultPlatform))
									{
								?>
										<option value="<?php echo $rowPlatform["platform_id"]; ?>"><?php echo $rowPlatform["platform_code"]; ?></option>
								<?php
									}
								?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Product Category</td>
							<td>
								<?php
									$sqlCategory = 
									"
										SELECT c.* FROM category c
									";
									$resultCategory = mysqli_query($conn, $sqlCategory);
									while($rowCategory = mysqli_fetch_assoc($resultCategory))
									{
									 echo'<input type="checkbox" name="category" value='.$rowCategory["category_id"].' >'.$rowCategory["category_name"].' ';
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Product Release Date</td>
							<td><input type="date" name="releasedate"/></td>
						</tr>
						<tr>
							<td>Product Description</td>
							<td><textarea rows="4" cols="50" name="description"></textarea></td>
						</tr>
					</table>
					<input type="submit" name="addbtn" value="ADD NEW PRODUCT" />
				</form>
			</div>
		</div>
		<?php 
			require 'html/footer.html'; 
		?>
	</div>
</body>
</html>
<?php
if(isset($_POST["addbtn"]))
{
	$pname = $_POST["namefrm"];

	// $img = $_POST["image"];
	if(!isset($_POST["category"]))
	{
		$category = "";
	}
	else
	{
		$category = $_POST["category"];
	}

	$price = $_POST["price"];
	$stock = $_POST["stock"];
	$platform = $_POST["platform"];
	$releasedate = $_POST["releasedate"];
	$description = $_POST["description"];

	$date = str_replace('-', '', $releasedate);
	$num = rand(0,10000);
	$code = $platform."/".$date."/".$num;

	$sqlcode =
	"
		SELECT product_code 
		FROM product
		WHERE product_code = '$code'
	";
	$result = mysqli_query($conn, $sqlcode);

	if(mysqli_num_rows($result) != 0)
	{
		$code = $platform."/".$date."/".rand(0,10000);
	}
	// echo $platform;
	// echo $category;die;
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];

	$sql = 
	"
		INSERT INTO product 
		(product_code, product_name, product_price, product_released_date, product_description, product_stock, product_image, product_isActive, category_id, platform_id)
		VALUES
		('$code', \"$pname\", $price, '$releasedate', \"$description\", $stock, '$image', 1, $category, $platform)
	";

	// echo $sql;die;
	$sqlproduct = 
	"
		SELECT * FROM product 
		WHERE product_name = \"$pname\"
	";

	$resultDuplicate = mysqli_query($conn, $sqlproduct);

	if($pname == "")
	{
		$message = "Please key in Product Name!";
	}
	else if($image == "")
	{
		$message = "Please upload a photo for your product!";
	}
	else if($price == "")
	{
		$message = "Please enter a number for product price!";
	}
	else if($stock == "")
	{
		$message = "Please enter price stock!";
	}
	else if($platform == "")
	{
		$message = "Please select your products platform!";
	}
	else if($category == "")
	{
		$message = "Please select your product category!";
	}
	else if($releasedate == "")
	{
		$message = "Please choose the release date of your product!";
	}
	else if(mysqli_num_rows($resultDuplicate) != 0)
	{
		$message = "This product has already existed!";
	}
	else
	{
		mysqli_query($conn, $sql);
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
		{
			$msg = "GOT";
		}
		else 
		{
			$msg = "NO";
		}
		$message = "Prodcuct has successfully added!";
		$condition = 1;
		
	}
	?>
		<script type="text/javascript">
			var msg = "<?php echo $message; ?>";
			var a = "<?php echo $condition ?>";
			if(a == "1")
			{
				$("#alert-side").css("display", "");
				$("#alert-side").css("background-color", "#8BFC81");
				$("#alert-side").css("color", "green");
				$('#alert-side').css("border", "1px solid green");
				$("#msg").html(msg);
				$("#alert-side").show().delay(2000).fadeOut();
			}
			else
			{
				$("#alert-side").css("display", "");
				$("#msg").html(msg);
				$("#alert-side").show().delay(2000).fadeOut();
			}
		</script>
	<?php

}

?>