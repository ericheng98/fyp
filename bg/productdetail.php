<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Product Detail</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
	
.main-content
{
	overflow:auto;
	margin-top:5%;
	margin-bottom:5%;
}
	
.filtering
{
	border:1px solid grey;
	padding-left:1%;
	width:20%;
	float:left;
	font-size: 1.1em;
}

#platform ul li
{
	display:block;
	font-size:1.1em;
}

#platform ul li a
{
	text-decoration:none;
	color:black;
}

#platform ul li a:hover
{
	text-decoration:none;
	color:green;
}

#category p
{
	font-size:1.1em;
}

.productdetail
{	
	overflow:auto;
	width:72%;
	float:left;
	margin-left:2%;
	border:1px solid black;
}

.img
{
	margin-left:3%;
	float:left;
	width:35%;
	text-align:center;
}

.img img
{
	width:80%
}

.details
{
	float:left;
	margin-left:3%;
}

.details p
{
	font-size:1.2em;
}

.details h3
{
	font-size:1.3em;
}

.details button
{
	background-color:#A8D13B;
	color:white;
	border:0px;
	padding: 8px 10px;
}

.details button:hover
{
	cursor: pointer;
}

.description
{
	clear:both;
	margin-left:3%;
	margin-right:3%;
}

.description h3
{
	font-size:1.3em;
}

iframe
{
	margin-top:2%;
	margin-bottom:2%;
}

.location
{
	text-align:center;
	border-top:1px solid grey;
	border-bottom:1px solid grey;
	margin:3%;
}

.location a
{
	text-decoration:none;
	color:green;
}

</style>
</head>
<body>
	<div class="mainwrapper">
		<?php 
			require 'html/header.html'; 
			require 'include/identity.php';	
		?>
		
		<div class="main-content">
			<form name="add" method="POST">
			<?php 
				include 'include/filtering.php';
				$productID = $_REQUEST["pid"];
				$stock = 1;
				$sqlProduct = 
				"
					SELECT p.*, c.*, plt.*
					FROM product p
					LEFT JOIN category c ON p.category_id = c.category_id
					LEFT JOIN platform plt ON p.platform_id = plt.platform_id
					WHERE p.product_isActive = 1
					AND p.product_id = $productID
				";

				$resultPro = mysqli_query($conn, $sqlProduct);
				while($rowProduct = mysqli_fetch_assoc($resultPro))
				{
			?>
			<div class="productdetail">
				<div class="location">
					<p>
						<a href="index.php"/>Home </a>> 
						<a href="product.php"/>Products </a>> 
						<?php echo $rowProduct["product_name"]; ?>
					</p>
				</div>
				<div class="img">
					<p><img src="images/<?php echo $rowProduct["product_image"]; ?>" /></p>
				</div>
				<div class="details">
					<h1><?php echo $rowProduct["product_name"]; ?></h1>
					
					<p>
						<h2>PRODUCT DETAILS</h2>
						<p>Price: RM <?php echo $rowProduct["product_price"]; ?></p>
						<p>Product Code: <?php echo $rowProduct["product_code"]; ?></p>
						
						<p>Platform: <?php echo $rowProduct["platform_code"]; ?></p>
						<p>Category: <?php echo $rowProduct["category_name"]; ?></p>
						<p>Release Date: <?php echo $rowProduct["product_released_date"]; ?></p>
						<h3>
							<?php
							if($rowProduct["product_stock"] > 0)
							{
								echo "Stock Available !!!";
							}
							else
							{
								echo "Currently out of Stock !!!";
								$stock = 0;
							}
							?>
						</h3>
					</p>
					<p>
						<button name="addbtn" id="addbtn">ADD TO CART</button>
						<!-- <input type="button" name="addbtn" id="addbtn" value="ADD TO CART" /> -->
					</p>
				</div>
				
				<div class="description">
					<h2>Description</h2>
					<p style="white-space: pre-line">
						<?php
							$description = $rowProduct["product_description"];
							echo $description;
						?>
					</p>
				</div>
			</div>
			<?php
				}
			?>
			</form>
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
	if(!isset($_SESSION["loggedin"]))
	{
?>
<script type="text/javascript">
	window.location.replace("login.php");
</script>
<?php
	}
	$sql = 
	"
		SELECT p.*, c.*, plt.*
		FROM product p
		LEFT JOIN category c ON p.category_id = c.category_id
		LEFT JOIN platform plt ON p.platform_id = plt.platform_id
		WHERE p.product_isActive = 1
		AND p.product_id = $productID
	";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "product_id");
		$count = count($_SESSION["shopping_cart"]);
		$item_array = 
		array(
			'product_id' => $_REQUEST["pid"],
			'product_code' => $row["product_code"], 
			'product_price' => $row["product_price"],
			'product_image' => $row["product_image"],
			'product_name' => $row["product_name"],
			'platform' => $row["platform_code"],
			'category' => $row["category_name"],
			'release_date' => $row["product_released_date"]
		);
		$_SESSION["shopping_cart"][$count] = $item_array;
		$added = 1;
		$msg = "Success added to cart!";
	}
	else
	{
		$item_array = 
		array(
			'product_id' => $_REQUEST["pid"],
			'product_code' => $row["product_code"], 
			'product_price' => $row["product_price"],
			'product_image' => $row["product_image"],
			'product_name' => $row["product_name"],
			'platform' => $row["platform_code"],
			'category' => $row["category_name"],
			'release_date' => $row["product_released_date"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
		$msg = "Success added to cart!";
		$added = 0;
	}
?>
	<script type="text/javascript">
		alert("<?php echo $msg; ?>");
	</script>
<?php
}
?>

<script type="text/javascript">
	var stock = <?php echo $stock; ?>;
	$(document).ready()
	{
		if(stock == 0)
		{
			$('button').attr("disabled","disabled");
			$('#addbtn').css("cursor","not-allowed");
		}
	}
</script>
