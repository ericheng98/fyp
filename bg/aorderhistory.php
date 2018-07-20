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
				<h1>Order History</h1>
				<table>
					<tr class="topic">
						<th style="width: 5%">#</th>
						<th style="width: 13%">Order</th>
						<th style="width: 15%">Date</th>
						<th style="width: 25%">Product</th>
						<th style="width: 12%">Payment(RM)</th>
						<th style="width: 10%">Status</th>
						<th style="width: 10%">Order By</th>
						<th style="width: 10%">Approved By</th>
					</tr>
					<tr>
						<td>1</td>
						<td style="color: blue">B112290P330</td>
						<td>22/02/2018<br>1038 HRS</td>
						<td><a href="#">Ark Survival Evolved (PS4)</a> * 1</td>
						<td>189.00</td>
						<td style="color: orange">Posting</td>
						<td>C00199</td>
						<td>S01928</td>
					</tr>
					<tr>
						<td>2</td>
						<td style="color: blue">B102290P190</td>
						<td>20/02/2018<br>1546 HRS</td>
						<td><a href="#">Battlezone (PS4)</a> * 1</td>
						<td>99.00</td>
						<td style="color: green">Delivered</td>
						<td>C00199</td>
						<td>S01928</td>
					</tr>
					<tr>
						<td>3</td>
						<td style="color: blue">B100190P101</td>
						<td>12/01/2018<br>1718 HRS</td>
						<td><a href="#">Warriors All-stars (PS4)</a> * 1</td>
						<td>99.00</td>
						<td style="color: green">Delivered</td>
						<td>C00199</td>
						<td>S01928</td>
					</tr>
					<tr>
						<td>4</td>
						<td style="color: blue">B100013P281</td>
						<td>10/01/2018<br>1245 HRS</td>
						<td><a href="#">Far Cry 5 Deluxe Edition (PS4)</a> * 1</td>
						<td>269.00</td>
						<td style="color: green">Delivered</td>
						<td>C00136</td>
						<td>S01282</td>
					</tr>
					<tr>
						<td>5</td>
						<td style="color: blue">B103932P191</td>
						<td>29/12/2018<br>0912 HRS</td>
						<td><a href="#">Devil May Cry HD Collection (PS4)</a> * 1</td>
						<td>159.00</td>
						<td style="color: green">Delivered</td>
						<td>C00721</td>
						<td>S01282</td>
					</tr>
					<tr>
						<td>6</td>
						<td style="color: blue">B193265P094</td>
						<td>25/12/2018<br>1956 HRS</td>
						<td><a href="#">Overwatch (PC)</a> * 1</td>
						<td>239.00</td>
						<td style="color: green">Delivered</td>
						<td>C12348</td>
						<td>S01761</td>
					</tr>
				</table>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>