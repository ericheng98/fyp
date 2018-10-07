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
	clear:both;
}
.right table
{
	border-collapse: collapse;
	border-spacing: 0px;
	border: 1px solid silver;
	font-size: 1em;
}
.right tr td,th
{
	border: 1px solid silver;
	padding: 0.5%;
}
.right tr a
{
	text-decoration: none;
}
.right button
{
	background-color: #8CC63F;
	color: white;
	height: 30px;
	font-size: 1.2em;
	border: 0px;
	margin: 10px;
}
.right button:hover
{
	filter:brightness(80%);
	cursor: pointer;
}
.ProductImg
{
	width: 40%;
	margin-left: 30%;
}
.align
{
	text-align: center;
}
.editDelete 
{
	border-radius: 7px;
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
			$sqlProduct =
			"
				SELECT p.*, plt.*
				FROM product p
				LEFT JOIN platform plt ON p.platform_id = plt.platform_id 
				WHERE p.product_isActive = 1
				ORDER BY p.product_id ASC
			";
			$result = mysqli_query($conn, $sqlProduct);
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
				<h1>Product</h1>
				<a href="addproduct.php"><button name="newbtn">ADD NEW PRODUCT</button></a>
				<table>
					<tr class="topic">
						<th style="width: 3%">#</th>
						<th style="width: 8%">Product Code</th>
						<th style="width: 19%">Product Name</th>
						<th style="width: 25%">Product Image</th>
						<th style="width: 8%">Platform</th>
						<th style="width: 8%">Price(RM)</th>
						<th style="width: 10%">Release Date</th>
						<th style="width: 10%">Edit/Remove</th>
					</tr>
				<?php
					$i = 1;  
					while($row = mysqli_fetch_assoc($result))
					{

				?>
					<tr>
						<th><?php echo $i ?></th>
						<td style="color: blue"><?php echo $row["product_code"]?></td>
						<td><a href="#"><?php echo $row["product_name"]?></a></td>
						<td><img src="image/<?php echo $row['product_image']?>"  class="ProductImg" /></td>
						<td class="align"><?php echo $row["platform_code"]?></td>
						<td class="align"><?php echo $row["product_price"]?></td>
						<td class="align"><?php echo $row["product_released_date"]?></td>
						<td class="align">
						    <a href="editp.php?pid=<?php echo $row['product_id'] ?>" > 
								<button class="editDelete" style="background-color: #205FED; border: 1px solid #205FED;">
	         						Edit
	       						</button>
							</a>
							<a href="aproduct.php?pid=<?php echo $row['product_id'] ?>" > 
								<button name="delete" class="editDelete" onclick="return confirmation();" id="delete" 
										style="background-color: #F65959; border: 1px solid #F65959;">
	         						Remove
	       						</button>
							</a>
							
						</td>
					</tr>
				<?php
					$i++;
					}
				?>
				</table>
				<a href="#"><button name="nextbtn">NEXT PAGE</button></a>
			</div>
		</div>
		<?php
			require 'html/footer.html'; 
		?>
	</div>
</body>
</html>
<script type="text/javascript">
	function confirmation()
	{
		answer = confirm("Confirm to delete this product?");
		return answer;
	}
</script>
<?php 
	if (isset($_REQUEST["pid"])) 
	{
		if($_SESSION["sess_acc"] == "staff")
		{
?>
		<script type="text/javascript">
			alert("You don't have permission to delete product!!");
			setTimeout("window.location='aproduct.php'",10);
			// window.location('aproduct.php');
		</script>
<?php
		}
		else
		{
			$pid = $_REQUEST["pid"];
			$sqlDelete = 
			"
				UPDATE product
				SET product_isActive = 0
				WHERE product_id = $pid
			";
			mysqli_query($conn, $sqlDelete);
?>
		<script type="text/javascript">
			alert("Product Deleted!");
			setTimeout("window.location='aproduct.php'",10);
			// window.location('aproduct.php');
		</script>
<?php
		}
	}
?>