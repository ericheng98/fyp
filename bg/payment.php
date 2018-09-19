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
		<?php require 'html/header.html'; ?>
		
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
		
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>