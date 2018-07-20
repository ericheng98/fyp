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
				<h1>Staff</h1>
				<a href="#"><button name="newbtn">ADD NEW STAFF</button></a>
				<table style="clear: both">
					<tr class="topic">
						<th style="width: 3%">#</th>
						<th style="width: 7%">Staff ID</th>
						<th style="width: 20%">Staff Name</th>
						<th style="width: 20%">Staff Image</th>
						<th style="width: 10%">I/C Number</th>
						<th style="width: 8%">Salary(RM)</th>
						<th style="width: 10%">Join Date</th>
						<th style="width: 10%">Remove</th>
					</tr>
					<tr>
						<td>1</td>
						<td style="color: blue">S01928</td>
						<td>Heng Wei Bing</td>
						<td><img src="image/staff1.jpg"/></td>
						<td>980901-01-6111</td>
						<td>1800.00</td>
						<td>27/06/2017</td>
						<td style="text-align: center">
							<img src="image/remove.png" style="width: 25%"/>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td style="color: blue">S01761</td>
						<td>Heng Yong Chang</td>
						<td><img src="image/user.jpg" style="width: 60%;"/></td>
						<td>9807072-01-6311</td>
						<td>2100.00</td>
						<td>21/03/2017</td>
						<td style="text-align: center"> 
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