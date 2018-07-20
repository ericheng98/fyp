<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | PlayStation Product</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
	
.main-content
{
	overflow:auto;
	margin-top:5%;
	margin-bottom:5%;
}	
	
	
.filtering
{
	border:1px solid grey;
	padding-left:1%;
	width:20%;
	float:left;
}

#platform ul li
{
	display:block;
	font-size:1.1em;
}

#platform ul li a
{
	text-decoration:none;
	color:black;
}

#platform ul li a:hover
{
	text-decoration:none;
	color:green;
}

#category p
{
	font-size:1.1em;
}

.product div
{
	display:inline-block;
	margin-left:6%;
	width:27%;
}

.img
{
	text-align:center;
}

.img img
{
	width:150px;
	height:200px;
}

.img img:hover
{
	filter:opacity(80%);
}

.img button
{
	background-color:#A8D13B;
	color:white;
	border:0px;
	padding: 8px 10px;
}

.img button:hover
{
	cursor: pointer;
}

.product
{	
	overflow:auto;
	width:72%;
	float:left;
	margin-left:5%;
	border:1px solid black;
	
}

.sort
{
	float:right;
	margin-top:2%;
	text-align:right;
	margin-right:2%;
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
				<p>Welcome Guest | <a href="sign.html">Sign in</a> / <a href="reg.html">Register</a></p>
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
		
		<div class="main-content">
			<div class="filtering">
				<h1>Filtering</h1>
				<div id="platform">
					<h3>Platform</h3>
					<ul class="platform">
						<li><a href="product.html"><b>All</b></a></li>
						<li><a href="xbox.html">XBOX</a></li>
						<li><a href="playstation.html">PlayStation</a></li>
						<li><a href="pc.html">PC</a></li>
					</ul>
				</div>
				<div id="category">
					<h3>Category</h3>
					<p><input type="checkbox" value="1" />FPS</p>
					<p><input type="checkbox" value="2" />MMORPG</p>
					<p><input type="checkbox" value="3" />Action</p>
					<p><input type="checkbox" value="4" />Role-Playing</p>
					<p><input type="checkbox" value="5" />Strategy</p>
					<p><input type="checkbox" value="6" />Stimulation</p>
					<p><input type="checkbox" value="7" />Adventure</p>
					<p><input type="checkbox" value="8" />Sport & Racing</p>
				</div>
			</div>
			
			<div class="product">
				<div class="sort">
					<select name="sortby">
						<option value="0">-------Sort By-------</option>
						<option value="1">Price (low to high)</option>
						<option value="2">Price (high to low)</option>
						<option value="3">Name (A - Z)</option>
						<option value="4">Name (Z - A)</option>
						<option value="5">Newest</option>
						<option value="6">Oldest</option>
						
					</select>
				</div>
				<br /><br /><br /><br /><br />
				<div class="img">
					<p><a href="#"><img src="image/ps4game1.jpg" /></a></p>
					<p>Accel World vs Sword Art Online(PS4)</p>
					<p><del>RM169.00</del>&nbsp <ins>RM159.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p ><a href="#"><img src="image/ps4game2.jpg" /></a></p>
					<p>Far Cry 5 Deluxe Edition (PS4)</p>
					<p>RM269.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/ps4game3.jpg" /></a></p>
					<p>Ark Survival Evolved (PS4)</p>
					<p><del>RM199.00</del>&nbsp <ins>RM189.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="img">
					<p><a href="#"><img src="image/ps4game4.jpg" /></a></p>
					<p>7 days To Die(PS4)</p>
					<p><del>RM169.00</del>&nbsp <ins>RM159.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p ><a href="#"><img src="image/ps4game5.jpg" /></a></p>
					<p>Dead Island Definitive Edition(PS4)</p>
					<p>RM179.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/ps4game6.jpg" /></a></p>
					<p>Assault Suit Leynos(PS4)</p>
					<p><del>RM129.00</del>&nbsp <ins>RM119.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="img">
					<p><a href="#"><img src="image/ps4game7.jpg" /></a></p>
					<p>Assetto Corsa(PS4)</p>
					<p><del>RM139.00</del>&nbsp <ins>RM129.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p ><a href="#"><img src="image/ps4game8.jpg" /></a></p>
					<p>Call of Duty: WWII(PS4)</p>
					<p>RM249.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/ps4game9.jpg" /></a></p>
					<p>Digimon Story: Cyber Sleuth(PS4)</p>
					<p><del>RM149.00</del>&nbsp <ins>RM139.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
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