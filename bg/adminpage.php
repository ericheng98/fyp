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
	font-size: 1.5em;
	width: 100%;
	margin-bottom: 20px
	overflow: auto;
}
.left
{
	float: left;
	margin: 30px;
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
.contain
{
	clear: both;
	margin: 10px;
}
.tag
{
	display: inline-block;
	border: 1px solid silver;
	text-align: center;
	margin-right: 3%;
	width: 15%;
}
.tag img
{
	width: 80px;
}
.graphd
{
	width: 90%;
}
.graph
{
	margin: 0px 20px;
}
.graph img
{
	width: 100%;
}
#historycontain
{
	margin-bottom: 50px;
	clear:both;
	font-size: 0.8em;
}
#historycontain table
{
	border-collapse: collapse;
	border-spacing: 0px;
	border: 1px solid silver;
}
#historycontain tr td,th
{
	border: 1px solid silver;
	padding: 2%;
}
#historycontain tr a
{
	text-decoration: none;
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

			<div class="contain" id="statcontain">
				<h3>Overall Statistics</h3>
				<div class="top">
					<div class="tag">
						<p>210<br>Visitor</p>
						<img src="image/visitor.png"/>
					</div>
					<div class="tag">
						<p>59<br>New Member</p>
						<img src="image/user.jpg"/>
					</div>
					<div class="tag">
						<p>20<br>Purchase</p>
						<img src="image/shoppingcart.png"/>
					</div>
					<div class="tag">
						<p>24<br>Minutes</p>
						<img src="image/minutes.jpg"/>
					</div>
				</div>
				<div class="graphd" style="clear: both; overflow: auto">
					<div class="graph" style="float: left;width: 45%;">
						<p>Overall Sales of last Year</p>
						<img src="image/sgraph.png"/>
					</div>
					<div class="graph" style="float: left;width: 45%;">
						<p>Statistics of Category</p>
						<img src="image/pie.png"/>
					</div>
				</div>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>