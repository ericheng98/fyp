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
				<h1>Add NEW Product</h1>
				<form method="post" action="" name="addProductForm">
					<table>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="namefrm" maxlength="100" size="50" /></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="imagefrm" accept="image/*" /></td>
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
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>
<?php
if(isset($_POST["addbtn"]))
{
	$pname = $_POST["namefrm"];

	$img = $_POST["imagefrm"];

	$target = "images/".basename($_FILES['imagefrm']['name']);
	$image = $_FILES['imagefrm']['name'];

	$price = $_POST["price"];
	$stock = $_POST["stock"];
	$platform = $_POST["platform"];
	$category = $_POST["category"];
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
	// echo $code;die;
	$sql = 
	"
		INSERT INTO product 
		(product_code, product_name, product_price, product_released_date, product_description, product_stock, product_image, product_isActive, category_id, platform_id)
		VALUES
		('$code', '$pname', $price, '$releasedate', '$description', $stock, '$img', 1, $category, $platform)
	";

	// echo $sql;die;
	mysqli_query($conn, $sql);
	if(move_uploaded_file($_FILES["imagefrm"]['tmp_name'],$target))
	{
		$message = "GOT";
	}
	else 
	{
		$message = "NO";
	}

	// echo $target;die;
	?>
		<script type="text/javascript">
			alert("Product is added");
		</script>
	<?php

	// if(move_uploaded_file($_FILES['imagefrm']['tmp_name'],$target))
	// {
	// 	$message = "GOT";
	// }
	// else 
	// {
	// 	$message = "NO";
	// }

	// echo $msg;die;
}
?>