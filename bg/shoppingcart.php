<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Shopping Cart </title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.container
{
	width: 90%;
	margin: auto;
	margin-top:3%;
	margin-bottom:3%;
	font-size: 1.2em;
}
.container table 
{
	text-align: center;
}
#imgd img
{
	width:150px;
	height:200px;
}
.table
{
	border-collapse : collapse;
	 border-spacing: 0px;
}
.table th,td
{border: 1px solid grey;
}

.table th
{font-size: 1.6em;
 font-weight:: bold;
}
.table input[type="button"]
{width: 280px;
 height: 35px;
}
#csbtn
{background-color: #ec971f;
 color: white;
 font-weight: bold;
 font-size: 1em;
 border-radius: 5px;
 border: 0px;
}
#csbtn:hover
{background-color: #bb7f29;
 cursor: pointer;
}
#checkoutbtn
{background-color: #5cb85c;
 color: white;
 font-weight: bold;
 font-size: 1em;
 border-radius: 5px;
 border: 0px;
}
#checkoutbtn:hover
{background-color: #489648;
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
				<p>Welcome Guest | <a href="login.html">Sign in</a> / <a href="reg.html">Register</a></p>
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
		
		<div class="container">
		<table id="cart" class="table" >
			<tr>
				<th style="width:50%">Product</th>
				<th style="width:10%">Price</th>
				<th style="width:8%">Quantity</th>
				<th style="width:22%" class="text-center">Subtotal</th>
				<th style="width:10%"></th>
			</tr>
			<tr>
				<td>
					<div id="imgd" style="text-align: center; margin-top:3%;">
						<a href="#"><img src="image/ps4game1.jpg" /></a>
					</div>
					<div id="describe" style="text-align: left;">
						<h3 style="text-align: center;">Accel World vs Sword Art Online: Millennium Twilight (PS4)</h3>
						<p style="margin-left:3%;">
							SKU: PS4A026
							<br />Weight: 200 grams
							<br />Brand: Bandai Namco Games
							<br />Platform: PlayStation Vita
							<br />Publisher: Bandai Namco Games
							<br />Genre: Action
							<br />Region: Region 3
							<br />Language: Japanese Voice, English Subtitl
							<br />Release Date: 7/7/2017
						</p>
					</div>
				</td>
				<span id="textcenter">
				<td>RM 159.00</td>
				<td>2</td>
				<td>RM 318.00</td></span>
				<td><img src="image/remove.png" style="width: 50px;height: 50px;"/></td>
			</tr>
			<tr>
				<td>
					<div id="imgd" style="text-align: center; margin-top:3%;">
						<a href="#"><img src="image/ps4game3.jpg" /></a>
					</div>
					<div id="describe" style="text-align: left;">
						<h3 style="text-align: center;">Ark Survival Evolved (PS4)</h3>
						<p style="margin-left:3%;">
							SKU: PS4A031
							<br />Weight: 200 grams
							<br />Platform: PlayStation 4
							<br />Publisher: Studio Wildcard
							<br />Developer: Studio Wildcard
							<br />Genre: Adventure
							<br />Region: Region ALL
							<br />Language: English
							<br />Release Date: 29/8/2017
						</p>
					</div>
				</td>
				<span id="textcenter">
				<td>RM 189.00</td>
				<td>1</td>
				<td>RM 189.00</td></span>
				<td><img src="image/remove.png" style="width: 50px;height: 50px;"/></td>
			</tr>
			<tr>
				<td><a href="index.html"><input type="button" id="csbtn" value="< Continue Shopping"/></a><td>
				<td></td>
				<span id="textcenter">
				<td>Total : RM 507.00</td></span>
				<td><a href="payment.html"><input type="button" id="checkoutbtn" value="Check Out >"/></a></td>
			</tr>
		</table>
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