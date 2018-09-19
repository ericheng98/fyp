<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Order History</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.main
{
	width: 100%;
	margin: auto;
}
.left
{
	float: left;
}
.left ul li
{
	display: block;
	height: 30px;
	margin-bottom: 10px;
}
.left ul li:hover
{
	background-color: #8CC63F;
}
.left ul li a
{
	text-decoration: none;
	font-size: 1.5em;
	color: black;
}
.left ul li a:hover
{
	background-color: #8CC63F;
	color: white;
}
.right
{
	margin-left: 20%;
	border-left: 1px solid silver;
	margin-top: 20px;
	margin-bottom: 10px;
}
.right table
{
	border-collapse: collapse;
	border-spacing: 0px;
	border: 1px solid silver;
	width: 90%;
	font-size: 1em;
}
.right tr td,th
{
	border: 1px solid silver;
	padding: 2%;
}
.right tr a
{
	text-decoration: none;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php require 'html/header.html'; ?>
		<div class="main">
			<div class="left">
				<ul>
					<li><a href="account.html">My Account</a></li>
					<li><a href="orderhistory.html">Order History</a></li>
					<li><a href="#">Weekly Log</a></li>
				<ul>
			</div>
			<div class="right">
				<table>
					<tr class="topic">
						<th style="width: 5%">#</th>
						<th style="width: 10%">Order</th>
						<th style="width: 15%">Date</th>
						<th style="width: 35%">Product</th>
						<th style="width: 10%">Payment(RM)</th>
						<th style="width: 10%">Status</th>
					</tr>
					<tr>
						<td>1</td>
						<td style="color: blue">B112290P330</td>
						<td>22/02/2018<br>1038 HRS</td>
						<td><a href="#">Ark Survival Evolved (PS4)</a> * 1</td>
						<td>189.00</td>
						<td style="color: orange">Posting</td>
					</tr>
					<tr>
						<td>2</td>
						<td style="color: blue">B102290P190</td>
						<td>20/02/2018<br>1546 HRS</td>
						<td><a href="#">Battlezone (PS4)</a> * 1</td>
						<td>99.00</td>
						<td style="color: green">Delivered</td>
					</tr>
					<tr>
						<td>3</td>
						<td style="color: blue">B100190P101</td>
						<td>12/01/2018<br>1718 HRS</td>
						<td><a href="#">Warriors All-stars (PS4)</a> * 1</td>
						<td>99.00</td>
						<td style="color: green">Delivered</td>
					</tr>
				</table>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>