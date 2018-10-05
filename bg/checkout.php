<?php
	include 'connection.php';
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			foreach($_SESSION["shopping_cart"] as $keys => $values)
			{
				if($values["product_id"] == $_GET["pid"])
				{
					unset($_SESSION["shopping_cart"][$keys]);
					echo'<script>alert("Item Removed")</script>';
					echo'<script>window.location="checkout.php"</script>';
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Check Out </title>
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
{border: 2px solid silver;
}

.table th
{font-size: 1.3em;
 /*font-weight: bold;*/
 text-align: center;
 background-color: silver;
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
#button
{
	margin-top: 2%;
	text-align: center;
}
#button input[type="submit"]
{
	/*margin-left: 2%;*/
	height: 50px;
	padding: 1%;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		
		<?php 
			require 'html/header.html';
			if(!isset($_SESSION["loggedin"]))
			{
				header("Location: login.php");
			} 
			require 'include/identity.php';
			$total = 0;
			$curCus = $_SESSION["sess_memid"];
			$address = "";
			$sqlAddress = 
			"
				SELECT CONCAT(c.customer_address, ', ' ,c.customer_postcode, ', ' , c.customer_city, ', ' , c.customer_state) as full_address
				FROM customer c
				WHERE c.customer_id = $curCus
			";
			$resultAdd = mysqli_query($conn, $sqlAddress);
			// $p = 0;
		?>
		<form method="POST" name="checkoutfrm" action="">
		<div class="address" style="width: 100%;" >
			<h1>Select Delivery Address</h1>
			<h2>
				Default Delivery Address : 
			</h2>
			<?php
			while($rowAdd = mysqli_fetch_assoc($resultAdd))
			{
			?>
				<p>
				<input type="radio" value="0" name="adr" checked /> 
				<?php echo $rowAdd['full_address']; ?>
				</p>
			<?php
			$address = $rowAdd['full_address'];
			// echo $address;die;
			} 
			?>
			<h2>
				Other delivery address : 
			</h2>
			<p>
				<input type="radio" name="adr" value="1" /> 
				<input type="text" name="aInput" size="100" id="addressInput" disabled />
			</p>
			<h1>Confirm your item </h1>
		</div>
		<div class="container" style="width: 100%;">
		<table id="cart" class="table" >
			<tr >
				<th style="width:55%">Product</th>
				<th style="width:15%">Price(RM)</th>
				<th style="width:8%">Quantity</th>
				<th style="width:22%" class="text-center">Subtotal(RM)</th>
				<th style="width:12%"></th>
			</tr>
			<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					$quantity = 1;
					foreach ($_SESSION["shopping_cart"] as $key => $value) 
					{
						
			?>
						<tr>
							<td>
								<div>
								<div id="imgd" style="text-align: left; margin:3%; float: left;">
									<a href="productdetail.php?pid=<?php echo $value["product_id"] ?>">
										<img src="images/<?php echo $value["product_image"]; ?>" />
									</a>
								</div>
								<div id="describe" style="text-align: left; margin: 3%; float: left; width: 60%">
									<h3 style="text-align: left;"><?php echo $value['product_name']; ?></h3>
									<p style="margin-left:3%;">
										Product Code: <?php echo $value['product_code']; ?>
										<br />Platform: <?php echo $value['platform']; ?>
										<br />Category: <?php echo $value['category']; ?>
										<br />Release Date: <?php echo $value['release_date']; ?>
									</p>
								</div>
								</div>
							</td>
							<span id="textcenter">
								<td><?php echo $value['product_price']; ?></td>
								<td><?php echo $quantity; ?></td>
								<td> 
									<?php 
									$sub = $value['product_price'] * $quantity;
									echo $sub;
									?>
								</td>
							</span>
							<td>
								<a href="checkout.php?action=delete&pid=<?php echo $value["product_id"]; ?>">
									<img src="image/delete.png" style="width: 50px;height: 50px;"/>
								</a>
							</td>
						</tr>
			<?php
						$total += $value['product_price'];
						$p = 1;
					}
				}
				else
				{
					$p = 0;
				}
			?>

				<tr style="height: 50px;">
					<td style="border: none;"></td>
					<td style="border: none;"></td>
					<td>Total :</td>
					<span id="textcenter">
						<td>RM <?php echo $total; ?></td>
					</span>
					<td style="border: none;"></td>
				</tr>
			</table>
			<div id="button">
				<input type="submit" id="csbtn" value="< Continue Shopping" name="csbtn" />
				<input type="submit" id="checkoutbtn" value="Prodceed to Payment >" name="checkout"/>
				<!-- <button  name="checkout">Prodceed to payment > </button> -->
			</div>
		</div>
		</form>
			<?php
				require 'html/footer.html'; 
			?>
	</div>
</body>
</html>
<script type="text/javascript">
	var got = <?php echo $p; ?>;

	if (got == 0)
	{
		// $('.container').append('<img id="img" src="image/empty.jpg" style="width: 60%; margin: auto;" />');
		$('<img id="img" src="image/empty.jpg" style="width: 50%; margin: 0% 25%;" />').insertBefore("#button");
		$("table").css("display","none");
		$(".address").css("display","none");
		$("#checkoutbtn").css("display", "none");
		$('#csbtn').attr('value', 'SHOP NOW');
	}
	// $(document).on('click', '#csbtn', function()
	// {
	// 	window.location.replace('product.php');
	// });
	// $(document).on('click', '#checkoutbtn', function()
	// {
	// 	window.location.replace('payment.php');
	// });
	$('input[type=radio][name=adr]').change(function() 
	{
	    if (this.value == '1') 
	    {
	        $('#addressInput').removeAttr('disabled');
	        $('#addressInput').focus();
	    }
	});
</script>
<?php
if(isset($_POST["checkout"]))
{
	if($_POST["adr"] == 0)
	{
		$add = $address;
	}
	else
	{
		if(isset($_POST["aInput"]))
		{
			$add = $_POST["aInput"];
		}
	}
	// echo $add;die;
	$_SESSION["address"] = $add;
	$_SESSION["total"] = $total;
	// header("Location: payment.php");
?>
<script type="text/javascript">
	window.location.replace('payment.php');
</script>
<?php
}

if(isset($_POST["csbtn"]))
{
?>
<script type="text/javascript">
	window.location.replace('product.php');
</script>
<?php
}
?>