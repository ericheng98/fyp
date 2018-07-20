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
		<div class="header">
			<div class="left-content">
				<a href="index.html"><img src="image/logo.png"/></a>
			</div>
			<div class="right-content">
				<p>Welcome Admin123 | <a href="index.html">Logout</a></p>
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