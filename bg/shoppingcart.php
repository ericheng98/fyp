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
		<?php require 'html/header.html'; ?>
		
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
		
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>