<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | PC Product</title>
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
		<?php require 'html/header.html'; ?>
		
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
					<p><a href="#"><img src="image/pcgame1.jpg" /></a></p>
					<p>Grand Theft Auto IV(PC)</p>
					<p>RM168.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p ><a href="#"><img src="image/pcgame2.jpg" /></a></p>
					<p>Assassin's Creed Brotherhood(PC)</p>
					<p>RM93.90</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/pcgame3.jpg" /></a></p>
					<p>The Witcher 3: Wild Hunt(PC)</p>
					<p>RM181.90</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="img">
					<p><a href="#"><img src="image/pcgame4.jpg" /></a></p>
					<p>Call of Duty: Infinite Warfare(PC)</p>
					<p>RM249.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p ><a href="#"><img src="image/pcgame5.jpg" /></a></p>
					<p>X-Plane 11(PC)</p>
					<p>RM259.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/pcgame6.jpg" /></a></p>
					<p>Overwatch(PC)</p>
					<p>RM181.90</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="img">
					<p><a href="#"><img src="image/pcgame7.jpg" /></a></p>
					<p>NBA 2K17(PC)</p>
					<p>RM239.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p ><a href="#"><img src="image/pcgame8.jpg" /></a></p>
					<p>World of Warcraft: Legion(PC)</p>
					<p>RM210.90</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/pcgame9.jpg" /></a></p>
					<p>WWE 2K17 English(PC)</p>
					<p>RM198.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
			</div>
		</div>
		
		
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>