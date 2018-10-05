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
					<select name="sortby" id="sortby">
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
					$orderStr = "ORDER BY p.product_name ASC";
					
					if(!isset($_REQUEST["platform"]) || $_REQUEST["platform"] == "all")
					{
						$where = "";
					}
					else
					{
						// $display = $_REQUEST["platform"];
						$where = "AND plt.platform_code = '".$_REQUEST["platform"]."'";
					}
					if(isset($_REQUEST["sortby"]))
					{
						$sb = $_REQUEST["sortby"];
						switch ($sb)
						{
							case 1:
								$orderStr = " ORDER BY p.product_price ASC";
							break;
							case 2:
								$orderStr = " ORDER BY p.product_price DESC";
							break;
							case 3:
								$orderStr = " ORDER BY p.product_name ASC";
							break;
							case 4:
								$orderStr = " ORDER BY p.product_name DESC";
							break;
							case 5:
								$orderStr = " ORDER BY p.product_released_date DESC";
							break;
							case 6:
								$orderStr = " ORDER BY p.product_released_date ASC";
							break;
							default:
								$orderStr = "ORDER BY p.product_name ASC";
							break;
						}
					}
					else
					{
						$orderStr = "ORDER BY p.product_name ASC";
					}

					if(isset($_REQUEST["cat"]))
					{
						$cat = $_REQUEST["cat"];
						switch ($cat)
						{
							case 'FPS':
								$whereStr = " AND c.category_code = 'FPS'";
							break;
							case 'RPG':
								$whereStr = " AND c.category_code = 'RPG'";
							break;
							case 'ACT':
								$whereStr = " AND c.category_code = 'ACT'";
							break;
							case 'STR':
								$whereStr = " AND c.category_code = 'STR'";
							break;
							case 'ADV':
								$whereStr = " AND c.category_code = 'ADV'";
							break;
							case 'SR':
								$whereStr = " AND c.category_code = 'SR'";
							break;
							default:
								$whereStr = "";
							break;
						}
					}
					else
					{
						$whereStr = "";
					}
					
					// echo $whereStr;die;
					$sqlDisplay =
					"
						SELECT p.*, plt.*
						FROM product p
						LEFT JOIN platform plt ON p.platform_id = plt.platform_id
						LEFT JOIN category c ON p.category_id = c.category_id
						WHERE p.product_isActive = 1
						$where
						$whereStr
						$orderStr
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
			</div>
		</div>
		
		
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>
<script type="text/javascript">
$(document).on("change", "select[id='sortby']", function() 
{
	// console.log(document.URL);
	var url = document.URL + "&sortby=" + $(this).val();
	// console.log(url);
	window.location.replace(url);
});

$(document).on('change', "input[type='radio']", function()
{
	var url = "product.php?cat=" + $(this).val();
	// console.log(url);
	window.location.replace(url);
});
</script>
