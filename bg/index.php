<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Home </title>
<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.slider img
{
	width: 100%;
	margin: 30px 0px 0px 0px;
}
.hot
{
	margin-bottom: 2%;
}
.hot a
{
	text-decoration: none;
}
.product
{
	display: inline-block;
	margin: 0px 2%;
	text-align: center;
}
.product button
{
	background-color: #A8D13B;
	color: white;
	padding: 8px 10px;
	border: 0px;
}
.product button:hover
{
	cursor: pointer;
}
.new
{
	margin: 5% 0% 1% 0%;
}
.new a
{
	text-decoration: none;
}
.product2 
{
	display: inline-block;
	margin: 0px 0.5%;
	text-align: center;
	height: 30%;
}
.product2 button
{
	background-color: #A8D13B;
	color: white;
	padding: 8px 10px;
	border: 0px;
}
div.product2
{
	width: 12%;
	height: 300px;
	vertical-align: top;
	border: 1px solid silver;
	padding: 1% 3%;
}
div.product2:hover
{
	filter:brightness(80%);
	cursor: pointer;
}
.product2 button:hover
{
	cursor: pointer;
}
.product2 img
{
	width: 100%;
	height: 203.69px;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<form method="POST">
		<?php 
			require 'html/header.html';
			require 'include/identity.php';

			$sqlNew = 
			"
				SELECT p.*
				FROM product p
				WHERE p.product_isActive = 1
				ORDER BY p.product_released_date DESC
				LIMIT 5
			";
			$resultNew = mysqli_query($conn, $sqlNew);

			$sqlHot =
			"
				SELECT p.*
				FROM product p
				WHERE p.product_isActive = 1
				ORDER BY RAND()
				LIMIT 5
			";
			$resultHot = mysqli_query($conn, $sqlHot);

		?>
		</form>
		<div class="slider">
			<a href="#"><img src="image/sale.jpg"/></a>
		</div>
		<div class="new">
			<h2>NEWEST GAMES !!!</h2>
			<?php
			while($rowNew = mysqli_fetch_assoc($resultNew))
			{
			?>
				<div class="product2">
					<a href="productdetail.php?pid=<?php echo $rowNew["product_id"]; ?>">
						<img src="images/<?php echo $rowNew["product_image"]; ?>" id="productImg" />
					</a>
					<p><?php echo $rowNew["product_name"]; ?></p>
					<p>RM <?php echo $rowNew["product_price"]; ?></p>
				</div>
			<?php
			}
			?>
			<br><br><br>
			<hr>
		</div>
		<div class="hot">
			<h2>Recommended !!!</h2>
			<?php
			while($rowHot = mysqli_fetch_assoc($resultHot))
			{
			?>
				<div class="product2">
					<a href="productdetail.php?pid=<?php echo $rowHot["product_id"]; ?>">
						<img src="images/<?php echo $rowHot["product_image"]; ?>" id="productImg" />
					</a>
					<p><?php echo $rowHot["product_name"]; ?></p>
					<p>RM <?php echo $rowHot["product_price"]; ?></p>
				</div>
			<?php
			}
			?>
		</div>	
		<?php 
			require 'html/footer.html' 
		?>
	</div>
</body>
</html>