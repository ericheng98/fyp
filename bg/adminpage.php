<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Admin</title>
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
#reference
{
	padding: 10px 10px;
	display: inline-block;
	border-right: 1px solid silver;
}
#reference:hover
{
	background-color: #8CC63F;
}
#reference a
{
	text-decoration: none;
	color: black;
}
#reference a:hover
{
	color: white;
}
.right
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
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php require 'html/header.html'; ?>
		<div class="main">
			<div class="left">
				<div id="reference">
					<a href="adminpage.html">Overall Statistics</a>
				</div>
				<div id="reference">
					<a href="aorderhistory.html">Order History</a>
				</div>
				<div id="reference">
					<a href="aproduct.html">Product</a>
				</div>
				<div id="reference">
					<a href="astaff.html">Staff</a>
				</div>
			</div>
			<div class="right">
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