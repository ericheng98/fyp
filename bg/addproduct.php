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
	clear: both;
}
.right table 
{	
	font-size: 1.2em;
	border-spacing: 20px;
}
.right td input[type=text], [type=date], [type=number]
{
	padding: 5px;
}
button
{
	height: 30px;
	font-size: 1em;
	margin: 0px 0px 10px 0px;
	background-color: #8CC63F;
	border: 0px;
	color: white;
}
button:hover
{
	filter:brightness(80%);
	cursor: pointer;
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
				<h1>Add NEW Product</h1>
					<table>
						<tr>
							<td>Product ID</td>
							<td><input type="text" name="idfrm" maxlength="7" placeholder="Eg: PS40001" required /></td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="namefrm" maxlength="100" size="50" required /></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="imagefrm" accept=".jpg,.png"/></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>RM <input type="text" maxlength="6" required /></td>
						</tr>
						<tr>
							<td>Product Stock</td>
							<td><input type="number" name="stock" required /></td>
						</tr>
						<tr>
							<td>Product Platform</td>
							<td>
								<select name="platform">
									<option value="0" selected>Please Choose Platform</option>
									<option value="1">PlayStation</option>
									<option value="2">XBox</option>
									<option value="3">PC</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Product Category</td>
							<td>
								<input type="checkbox" name="cat" value="1"/>FPS
								<input type="checkbox" name="cat" value="2"/>Role-Playing
								<input type="checkbox" name="cat" value="3"/>Action
								<input type="checkbox" name="cat" value="4"/>Strategy
								<input type="checkbox" name="cat" value="5"/>Stimulation
								<input type="checkbox" name="cat" value="6"/>Adventure
								<input type="checkbox" name="cat" value="7"/>Sports & Racing
							</td>
						</tr>
						<tr>
							<td>Product Release Date</td>
							<td><input type="date" name="proreleasedate"/></td>
						</tr>
						<tr>
							<td>Product Publisher</td>
							<td><input type="text" name="publisherfrm" maxlength="50" placeholder="Eg: CAPCOM"/></td>
						</tr>
					</table>
					<a href="aproduct.html"><button name="addbtn">ADD NEW PRODUCT</button></a>
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