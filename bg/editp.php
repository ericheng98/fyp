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
				<h1>Edit Product</h1>
				<form method="POST" name="editForm" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Product ID</td>
							<td><input type="text" name="idfrm" maxlength="7" value="<?php echo $row['product_code'] ?>" readonly /></td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="name" maxlength="100" size="50" value="<?php echo $row['product_name'] ?>"/></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="image" accept=".jpg,.png"/></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>RM <input type="text" maxlength="6" value="<?php echo $row['product_price'] ?>"/></td>
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
										<input type="checkbox" name="cat" value="<?php $rowCat["category_id"]; ?>"
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
							<td><input type="date" name="proreleasedate" value="<?php echo $row['product_released_date'] ?>" /></td>
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
	$name = $_POST["name"];
}
?>