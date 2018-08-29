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
							<td>Product ID</td>
							<td><input type="text" name="idfrm" maxlength="7" placeholder="Eg: PS40001" /></td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="namefrm" maxlength="100" size="50" /></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="imagefrm" accept=".jpg,.png"/></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>RM <input type="text" maxlength="6" /></td>
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
										<option value="<?php echo $rowPlatform["platform_code"]; ?>"><?php echo $rowPlatform["platform_code"]; ?></option>
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
									 echo'<input type="checkbox" name="cat" value='.$rowCategory["category_code"].' >'.$rowCategory["category_name"].' ';
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Product Release Date</td>
							<td><input type="date" name="proreleasedate"/></td>
						</tr>
						<tr>
							<td>Product Publisher</td>
							<td><input type="text" name="publisherfrm" maxlength="50" placeholder="Eg: CAPCOM"/></td>
						</tr>
					</table>
					<button name="addbtn">ADD NEW PRODUCT</button>
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
	$img = $_POST["imagefrm"];
	echo $img;die;
}
?>