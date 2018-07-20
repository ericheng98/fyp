<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Product Detail</title>
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

.productdetail
{	
	overflow:auto;
	width:72%;
	float:left;
	margin-left:2%;
	border:1px solid black;
}

.img
{
	margin-left:3%;
	float:left;
	width:35%;
	text-align:center;
}

.img img
{
	width:80%
}

.details
{
	float:left;
	margin-left:3%;
}

.details p
{
	font-size:1.2em;
}

.details h3
{
	font-size:1.3em;
}

.details button
{
	background-color:#A8D13B;
	color:white;
	border:0px;
	padding: 8px 10px;
}

.details button:hover
{
	cursor: pointer;
}

.description
{
	clear:both;
	margin-left:3%;
	margin-right:3%;
}

.description h3
{
	font-size:1.3em;
}

iframe
{
	margin-top:2%;
	margin-bottom:2%;
}

.location
{
	text-align:center;
	border-top:1px solid grey;
	border-bottom:1px solid grey;
	margin:3%;
}

.location a
{
	text-decoration:none;
	color:green;
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
			
			<div class="productdetail">
				<p style="margin-left:3%;">More information about product</p>
				<div class="location">
					<p><a href="index.html"/>Home </a>> <a href="product.html"/>Products </a>> <a href="playstation.html"/>PlayStation </a>> Accel World vs Sword Art Online: Millennium Twilight (PS4)</p>
				</div>
				<div class="img">
					<p><img src="image/ps4productdetail1.jpg" /></p>
				</div>
				<div class="details">
					<h3>Accel World vs Sword Art Online: Millennium Twilight (PS4)</h3>
					<p>Price: <del>RM169.00</del>&nbsp <ins>RM159.00</ins></p>
					<p><b>ITEM DETAILS</b>
						<br/>SKU: PS4A026
						<br/>Weight: 200 grams
						<br/>Stock: Stock available
					</p>
					<p>Brand: Bandai Namco Games
						<br/>Platform: PlayStation Vita
						<br/>Publisher: Bandai Namco Games
						<br/>Genre: Action
						<br/>Region: Region 3
						<br/>Language: Japanese Voice, English Subtitle
						<br/>Release Date: 7/7/2017
					</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="description">
					<h3>Description</h3>
					<p>
						Virtual and accelerated worlds collide in this action-packed crossover of the hit anime/light-novel series 
						Accel World and Sword Art Online! Svart Alfheim and the Accelerated World have begun to merge. In the midst of the 
						chaos, Yui has gone missing. Kirito must challenge the Seven Kings of pure color from the Accelerated World to gain 
						access to her location. Players from both groups come together in a war of the worlds where the strongest Burst 
						Linkers and ALO Players are on a mission to save Yui from the hands of Personna Babel.
					</p>
					<p>
						Accel World VS. Sword Art Online combines the best of both series, with a storyline supervised by Reki Kawahara 
						himself -- the creator behind both of these award-winning animes and master of the technological fantasy genre. 
						Play with Kirito, Asuna, Yuuki, Leafa, or any number of classic SAO characters in a setting where the Accelerated 
						and Virtual worlds intersect. Challenge Black Lotus, Silver Crow, Scarlet Rain, and the rest of the Seven Kings of 
						Pure Color from the Accelerated World, and amass clues as to where to find your friend. Mix and match characters 
						from both Accel World and Swords Art Online, and switch between them in real-time adrenaline-filled battles.Offset 
						over 30 playable characters’ strengths and weaknesses to create the perfect team and deliver your beloved Yui from 
						the evil grasp of Personna Babel! The main story offers 30 hours of intense gameplay in Single-Player mode, making 
						for a well-rounded solo adventure. But Accel World VS. Sword Art Online doesn’t stop there! Thanks to its Online 
						Player-Versus-Player mode, unlock new special moves, or check out also its extensive Adventure mode where you can: 
						play co-op or compete in teams to overcome these other-worldly obstacles together.
					</p>
					
					<iframe width="560" height="315" src="https://www.youtube.com/embed/EWYNQij0opc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
			
		
		
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>