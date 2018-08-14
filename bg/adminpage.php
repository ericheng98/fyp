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

			<div class="contain" id="historycontain">
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

			<div class="contain" id="productcontain">
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

			<div class="contain" id="staffcontain">
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