<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Sign In</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.signin
{width: 100%;
 margin: auto;
 overflow: auto;
 font-size: 1.3em;
 margin-bottom: 10px;
}
.signinfrm
{overflow: auto;
 float: left;
 border-right: 1px solid grey;
 width: 45%;
 border-top: 1px solid grey;
}
.reg
{float: left;
 width: 50%;
 border-top: 1px solid grey;
 padding-left: 50px;
}
.signinfrm input[type="email"],[type="password"]
{margin: 2% 0px; 
 height: 35px;
 padding-left: 10px;
}
.signinfrm input[type="submit"]
{height: 35px;
 width: 130px;
 background-color:#8CC63F;
 font-size: 1em;
 color: white;
 border: 0px;
}
.signinfrm input[type="submit"]:hover
{filter:brightness(80%);
 cursor: pointer;
}
#forget a
{color: grey;
 font-size: 0.8em;
}
.reg li
{color: grey;
}
.reg input[type="submit"]
{height: 35px;
 width: 250px;
 background-color:#8CC63F;
 font-size: 0.8em;
 color: white;
 border: 0px;
}
.reg input[type="submit"]:hover
{filter:brightness(80%);
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
		<div class="signin">
			<h2>Sign In</h2>
			<div class="signinfrm">
				<h3>Member Sign In</h3>
				<p><i><small>**Please sign in with your personal or corporate login</small></i></p>
				<p><span id="title">Email Address</span><br />
				<input type="email" name="useremail" size="50" autofocus required /><br />
				<input type="checkbox" name="rmbme" value="1" /> Remember me</p>
				<p><span id="title">Password</span><br />
				<input type="password" name="userpw" required /><br /></p>
				<p><span id="title">Login As</span><br /><br />
				<input type="radio" name="login_as" value="superuser" /> Superuser
				<input type="radio" name="login_as" value="admin" /> Admin
				<input type="radio" name="login_as" value="customer" /> Customer
				</p>
				<p><span id="forget"><a href="#">Forget Password?</a></span></p>
				<p><a href="account.html"><input type="submit" name="signinbtn" value="SIGN IN" /></a></p>
			</div>
			<div class="reg">
				<h3>Not a Member? Register today and get these benefits:</h3>
				<ul>
					<li>Enjoy faster and simpler checkout</li>
					<li>Track previous order</li>
					<li>Store your address book, and much more</li>
				</ul>
				<p><a href="reg.html"><input type="submit" name="createacc" value="CREATE AN ACCOUNT"/></a></p>
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