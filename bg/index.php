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
	margin: 30px 0px;
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
	margin: 5% 0%;
}
.new a
{
	text-decoration: none;
}
.product2
{
	display: inline-block;
	margin: 0px 2.5%;
	text-align: center;
}
.product2 button
{
	background-color: #A8D13B;
	color: white;
	padding: 8px 10px;
	border: 0px;
}
.product2 button:hover
{
	cursor: pointer;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php 
			require 'html/header.html';
			if ($_SESSION["loggedin"] == 1) 
			{
				require 'include/identity.php';
			}
			else
			{
		?>

				<script type="text/javascript">
					$(document).ready(function()
					{
						$("#username").html("Guest ");
						$("#inout").html("Login");
						$("#inout").attr("href","login.php");
					})
				</script>
		<?php
			}
		?>
		<div class="slider">
			<a href="#"><img src="image/sale.jpg"/></a>
		</div>
		<div class="hot">
			<a href="#"><h2>HOT DEALS !!!</h2></a><br>
			<div class="product">
				<img src="image/deals1.jpg"/><br>
				<p>RM <del>159.00</del> <ins> 139.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product">
				<img src="image/deal2.jpg"/>
				<p>RM <del>179.00</del> <ins> 129.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product">
				<img src="image/deals3.jpg"/>
				<p>RM <del>169.00</del> <ins> 149.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product">
				<img src="image/deals4.jpg"/>
				<p>RM <del>149.00</del> <ins> 99.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product">
				<img src="image/deals5.jpg"/>
				<p>RM <del>179.00</del> <ins> 120.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<hr>
		</div>
		<div class="new">
			<a href="#"><h2>NEWEST GAMES !!!</h2></a><br>
			<div class="product2">
				<img src="image/new1.jpg"/><br>
				<p>RM 219.00<p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product2">
				<img src="image/new4.jpg"/>
				<p>RM 159.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product2">
				<img src="image/new5.jpg"/>
				<p>RM 179.00<p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product2">
				<img src="image/new2.jpg"/>
				<p>RM <del>229.00</del> <ins> 99.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
			<div class="product2">
				<img src="image/new3.jpg"/>
				<p>RM <del>199.00</del> <ins> 99.00</ins><p>
				<button name="addbtn">ADD TO CART</button>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>