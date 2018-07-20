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
		<div class="header">
			<div class="left-content">
				<a href="index.html"><img src="image/logo.png"/></a>
			</div>
			<div class="right-content">
				<p>Welcome Eric Heng  | <a href="index.html">Logout</a></p>
				<hr />
				<p>
					<a href="account.html"><img src="image/user.jpg"/>My Account</a>
					<a href="shoppingcart.html"><img src="image/shoppingcart.png"/>View Cart</a>
					<a href="payment.html"><img src="image/shoppingcartout.png" />Checkout</a>
				</p>
			</div>
			<div class="navigation" style="background-color: #323232">
				<ul>
					<li><a href="playstation.html"/>PLAYSTATION</a></li>
					<li><a href="xbox.html"/>XBOX</a></li>
					<li><a href="pc.html"/>PC</a></li>
					<li><input type="text" size="13" placeholder="SEARCH HERE" style="text-align:right;"/></li>
				</ul>
			</div>
		</div>
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
		<div class="footer">
			<div class="content">
				<p>INFORMATION</p>
				<a href="#">About Us</a><br>
				<a href="#">Terms & Conditions</a><br>
				<a href="#">Privacy Policy</a><br>
				<a href="#">Our News / Blog</a><br>
			</div>
			<div class="content">
				<p>CONTACT US</p>
				<p>+6018-7940870</p>
				<p>+6011-35338702</p>
				<p>support@bullsgaming.com.my</p>
				<p>Or click <a href="#">here</a> to send us a message</p>
			</div>
			<div class="content">
				<p>BUSINESS HOURS</p>
				<p>Monday - Friday</p>
				<p>10am - 6pm</p>
				<p>Saturday</p>
				<p>10am - 3pm</p>
				<p>Holiday OFF</p>
			</div>
			<div class="bottom">
				<p><small>Copyright &copy BULLsGaming.com.my. All rights reserved.</small></p> 
			</div>
		</div>
	</div>
</body>
</html>