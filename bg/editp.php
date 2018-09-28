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
button
{
	height: 30px;
	font-size: 1em;
	margin: 0px 0px 10px 0px;
	background-color: #8CC63F;
	border: 0px;
	color: white;
}
button:hover
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
			if (!isset($_SESSION["loggedin"]))
			{
				header("Location: login.php");
			} 
			require 'include/identity.php';
			$pid = $_REQUEST["pid"];
			$sqlProduct = 
			"
				SELECT p.*, plt.* 
				FROM product p
				LEFT JOIN platform plt ON p.platform_id = plt.platform_id
				WHERE p.product_id = $pid
			";

			$result = mysqli_query($conn, $sqlProduct);
			$row = mysqli_fetch_assoc($result);
			$platform = $row["platform_id"];
			$category = $row["category_id"];
		?>
		<div class="main">
			<div class="left">
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
				<h1>Edit Product</h1>
				<form method="POST" name="editForm" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Product Code</td>
							<td><input type="text" name="code" maxlength="7" value="<?php echo $row['product_code'] ?>" readonly /></td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="namefrm" maxlength="100" size="50" value="<?php echo $row['product_name'] ?>"/></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="image" accept=".jpg,.png"/></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>RM <input type="text" maxlength="6" name="price" value="<?php echo $row['product_price'] ?>"/></td>
						</tr>
						<tr>
							<td>Product Stock</td>
							<td><input type="number" name="stock" value="<?php echo $row['product_stock'] ?>" /></td>
						</tr>
						<tr>
							<td>Product Platform</td>
							<td>
								<select name="platform">
								<?php 
									$sqlPlatform = 
									"
										SELECT plt.*
										FROM platform plt
									";
									$resultPlatfrom = mysqli_query($conn, $sqlPlatform);

									while ($rowPlatform = mysqli_fetch_assoc($resultPlatfrom)) 
									{
								
								?>
										<option
											<?php echo "value= \"".$rowPlatform["platform_id"]."\" ";
												if($rowPlatform["platform_id"] == $platform)
												{
													echo "selected";
												}

											?>
												> <!-- close > for option above-->
												<?php echo $rowPlatform["platform_code"]; ?>
										</option>
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
									$sqlCat = 
									"
										SELECT c.*
										FROM category c
									";
									$resultCat = mysqli_query($conn, $sqlCat);
									while($rowCat = mysqli_fetch_assoc($resultCat))
									{

								?>
										<input type="radio" name="category" value="<?php echo $rowCat['category_id']; ?>"
								<?php
										if($rowCat["category_id"] == $category)
										{
											echo "checked";
										}
								?> 
										/> <?php echo $rowCat["category_name"]; ?>
								<?php
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Product Release Date</td>
							<td><input type="date" name="releasedate" value="<?php echo $row['product_released_date'] ?>" /></td>
						</tr>
						<tr>
							<td>Product Description</td>
							<td><textarea rows="10" cols="100" name="description"><?php echo $row["product_description"]; ?></textarea></td>
						</tr>
					</table>
					<button name="updatebtn">Update</button>
				</form>
			</div>
		</div>
		<?php 
			require 'html/footer.html' 
		?>
	</div>
</body>
</html>
<?php
if(isset($_POST["updatebtn"]))
{
	$pname = $_POST["namefrm"];

	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$description = $_POST["description"];

	if($image == "")
	{
		$image = $row["product_image"];
	}
	else
	{
		$image = $_FILES['image']['name'];
	}

	$price = $_POST["price"];
	$stock = $_POST["stock"];
	$newPlatform = $_POST["platform"];
	$releasedate = $_POST["releasedate"];

	if(!isset($_POST["category"]))
	{
		$category = "";
	}
	else
	{
		$category = $_POST["category"];
	}

	$condition = 0;
	$code = "";


	if ($newPlatform == $platform) 
	{
		$code = $_POST["code"];
	}
	else
	{
		$date = str_replace('-', '', $releasedate);
		$num = rand(0,10000);
		$code = $newPlatform."/".$date."/".$num;
		// echo $row["platform_code"];die;
		
		$sqlcode =
		"
			SELECT product_code 
			FROM product
			WHERE product_code = '$code'
		";
		$result = mysqli_query($conn, $sqlcode);

		if(mysqli_num_rows($result) != 0)
		{
			$code = $newPlatform."/".$date."/".rand(0,10000);
		}
	}

	// echo $platform;die;
	// echo $code;die;

	$sql = 
	"
		UPDATE product 
		SET
		product_name = \"$pname\", product_image = '$image', product_price = $price, product_stock = $stock, product_code = '$code',
		platform_id = $newPlatform, category_id = $category, product_released_date = '$releasedate',
		product_description = \"$description\"
		WHERE product_id = $pid
	";

	// echo "<pre>$sql</pre>";die;

	if($pname == "")
	{
		$message = "Please key in Product Name!";
		// echo 1;die;
	}
	else if($price == "")
	{
		$message = "Please enter a number for product price!";
		// echo 2;die;
	}
	else if($stock == "")
	{
		$message = "Please enter price stock!";
		// echo 3;die;
	}
	else if($newPlatform == "")
	{
		$message = "Please select your products platform!";
		// echo 4;die;
	}
	else if($category == "")
	{
		$message = "Please select your product category!";
		// echo 5;die;
	}
	else if($releasedate == "")
	{
		$message = "Please choose the release date of your product!";
		// echo 6;die;
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
		$message = "Prodcuct has successfully Update!";
		$condition = 1;
		// echo 123;die;
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
			// window.location.reload();
			// window.location.replace("aproduct.php");
			setTimeout("window.location.replace('aproduct.php')",1000)
		</script>
	<?php
}
?>