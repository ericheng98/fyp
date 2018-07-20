<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Admin</title>
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
	font-size: 1.5em;
	float: left;
	margin: 30px;
}
#reference
{
	display: inline-block;
	padding: 10px 10px;
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
				<h1>Product</h1>
				<a href="addproduct.html"><button name="newbtn">ADD NEW PRODUCT</button></a>
				<table>
					<tr class="topic">
						<th style="width: 3%">#</th>
						<th style="width: 7%">Product ID</th>
						<th style="width: 20%">Product Name</th>
						<th style="width: 25%">Product Image</th>
						<th style="width: 8%">Platform</th>
						<th style="width: 8%">Price(RM)</th>
						<th style="width: 10%">Release Date</th>
						<th style="width: 10%">Edit/Remove</th>
					</tr>
					<tr>
						<td>1</td>
						<td style="color: blue">PS4A031</td>
						<td><a href="#">Valkyrie Revolution</a></td>
						<td><img src="image/deals1.jpg"/></td>
						<td>PS4</td>
						<td>159.00</td>
						<td>27/06/2017</td>
						<td>
							<a href="editp.html"><img src="image/edit.png" style="width: 25%"/></a>  
							<img src="image/remove.png" style="width: 25%"/>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td style="color: blue">PS4T064</td>
						<td><a href="#">Toukiden 2</a></td>
						<td><img src="image/deals5.jpg"/></td>
						<td>PS4</td>
						<td>179.00</td>
						<td>21/03/2017</td>
						<td>
							<a href="editp.html"><img src="image/edit.png" style="width: 25%"/></a>  
							<img src="image/remove.png" style="width: 25%"/>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td style="color: blue">PS4M044</td>
						<td><a href="#">Warriors All-star</a></td>
						<td><img src="image/new1.jpg"/></td>
						<td>PS4</td>
						<td>149.00</td>
						<td>29/08/2017</td>
						<td>
							<a href="editp.html"><img src="image/edit.png" style="width: 25%"/></a>  
							<img src="image/remove.png" style="width: 25%"/>
						</td>
					</tr>
				</table>
				<a href="#"><button name="nextbtn">NEXT PAGE</button></a>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>