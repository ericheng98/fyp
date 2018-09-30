<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Product</title>
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
	margin-left:4.5%;
	width:27%;
	margin-bottom: 4.5%;
}

div.img
{
	text-align:center;
	vertical-align: top;
	border: 1px solid silver;
}
div.img:hover
{
	filter:brightness(80%);
	cursor: pointer;
	color: blue;
}

.img img
{
	width:150px;
	height:200px;
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
		<?php 
			require 'html/header.html'; 
			require 'include/identity.php';
		?>
		<div class="main-content">
			<?php 
				require 'include/filtering.php'; 
			?>			
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
				<?php
					if(!isset($_REQUEST["platform"]) || $_REQUEST["platform"] == "all")
					{
						$whereStr = "";
					}
					else
					{
						// $display = $_REQUEST["platform"];
						$whereStr = "AND plt.platform_code = '".$_REQUEST["platform"]."'";
					}
					
					// echo $whereStr;die;
					$sqlDisplay =
					"
						SELECT p.*, plt.*
						FROM product p
						LEFT JOIN platform plt ON p.platform_id = plt.platform_id
						WHERE p.product_isActive = 1
						$whereStr
						ORDER BY p.product_name ASC
					"; 
					// echo "<pre>$sqlDisplay</pre>";die;
					$resultDisplay = mysqli_query($conn, $sqlDisplay);
					if(mysqli_num_rows($resultDisplay) == 0)
					{
				?>
						<h1>Sorry no product found</h1>
				<?php
					}
					while($rowDisplay = mysqli_fetch_assoc($resultDisplay))
					{
				?>
						<div class="img">
							<p>
								<a href="productdetail.php?pid=<?php echo $rowDisplay["product_id"]; ?>">
									<img src="images/<?php echo $rowDisplay["product_image"]; ?>"/>
								</a>
							</p>
							<p><?php echo $rowDisplay["product_name"]; ?></p>
							<p>RM <?php echo $rowDisplay["product_price"]; ?></p>
						</div>
				<?php
					}
				?>
				<!-- <div class="img">
					<p><a href="ps4productdetail1.html"><img src="image/ps4game1.jpg"/></a></p>
					<p>Accel World vs Sword Art Online(PS4)</p>
					<p><del>RM169.00</del>&nbsp <ins>RM159.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p><a href="#"><img src="image/ps4game2.jpg"/></a></p>
					<p>Far Cry 5 Deluxe Edition (PS4)</p>
					<p>RM269.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/ps4game3.jpg"/></a></p>
					<p>Ark Survival Evolved (PS4)</p>
					<p><del>RM199.00</del>&nbsp <ins>RM189.00</ins></p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="img">
					<p><a href="#"><img src="image/xboxgame1.jpg" /></a></p>
					<p>Super Lucky's Tale(XBOX ONE)</p>
					<p>RM 116.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p><a href="#"><img src="image/xboxgame2.jpg" /></a></p>
					<p>Minecraft with Explorers Pack(XBOX ONE)</p>
					<p>RM 116.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/xboxgame3.jpg" /></a></p>
					<p>Gears of War 4 Ultimate Edition(XBOX ONE)</p>
					<p>RM 234.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				
				<div class="img">
					<p><a href="#"><img src="image/pcgame1.jpg" /></a></p>
					<p>Grand Theft Auto IV(PC)</p>
					<p>RM168.00</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img" >
					<p><a href="#"><img src="image/pcgame2.jpg" /></a></p>
					<p>Assassin's Creed Brotherhood(PC)</p>
					<p>RM93.90</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div>
				<div class="img">
					<p><a href="#"><img src="image/pcgame3.jpg" /></a></p>
					<p>The Witcher 3: Wild Hunt(PC)</p>
					<p>RM181.90</p>
					<p><button name="addbtn">ADD TO CART</button></p>
				</div> -->
			</div>
		</div>
		
		
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>