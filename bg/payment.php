<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Payment </title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.main-content
{
	
	overflow:auto;
	overflow-x:hidden;
	width:50%;
	height:100%;
	margin:auto;
	margin-top:3%;
	margin-bottom:3%;
	border:2px solid black;
}

.title
{
	border-bottom:2px solid black;
	padding-left:2%;
}
.paymenttype
{	
	width:100%;
}


table td
{
	width:20%;
	
}

table td p
{
	text-align:center;
}

.details
{
	padding-left:2%;
}

.orderbtn
{	
	border:2px solid black;
	border-left:0px;
	border-bottom:0px;
	width:98%;
	padding-left:2%;
	background-image:url(image/visa.png);
	background-position:right center;
	background-repeat:no-repeat;
}

#orderbtn
{	
	width:200px;
	height:50px;
	background-color:#323232;
	color:white;
}

#orderbtn:hover
{
	text-decoration:underline;
	font-style:italic;
	cursor:pointer;
}

.cardexpiry input[type="text"]
{
	width:30px;
	hight:20px;
	margin-right:10px;
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
					<a href="checkout.html"><img src="image/shoppingcartout.png" />Checkout</a>
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
		
			<div class="paymenttype">
				<table>
					<tr>
						<div class="title"><p>Choose Payment Option</p></div>
					</tr>
					<tr>
						<td>
							<p>Credit or Debit Card</p>
							<p><img src="image/creditcard.png" /></p>
							<p><input type="radio" name="paymentmethod"/></p>
						</td>
						<td>
							<p>Online Banking (FPX)</p>
							<p><img src="image/fpx.png" /></p>
							<p><input type="radio" name="paymentmethod"/></p>
						</td>
						<td>
							<p>Cash at 7-Eleven</p>
							<p><img src="image/7-11.png" /></p>
							<p><input type="radio" name="paymentmethod"/></p>
						</td>
						<td>
							<p>Cash on Delivery</p>
							<p><img src="image/cash.png" /></p>
							<p><input type="radio" name="paymentmethod"/></p>
						</td>
						<td>
							<p>Maybank Installments</p>
							<p><img src="image/maybank.png" /></p>
							<p><input type="radio" name="paymentmethod"/></p>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="details">
				<div class="cardnumber">
					<p>Card Number</p>
					<p><input type="text" name="cardnumber" pattern="[0-9]{12}" required /></p>
				</div>
				<div class="cardname">
					<p>Name on Card</p>
					<p><input type="text" name="cardname" required /></p>
				</div>
				<div class="cardexpiry">
					<p>Expiry Date</p>
					<p><input type="text" name="cardmm" placeholder="mm" required /><input type="text" name="cardyy" placeholder="yy" required /></p>
				</div>
				<div class="ccv">
					<p>CCV/CVV</p>
					<p><input type="text" name="cardccv" pattern="[0-9]{3}" required /></p>
				</div>
				<div class="save">
					<p><input type="checkbox" name="saveornot" value="yes"/> Do not save this card for future use</p>
				</div>
			</div>
			
			<div class="orderbtn">
					<p><a href="thankyoupage.html"/><input id="orderbtn" type="button" name="orderbtn" value="Continue with transaction" /></a></p>
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