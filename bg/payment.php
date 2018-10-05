<?php
	include 'connection.php';
?>
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
		<?php 
			require 'html/header.html';
			if(!isset($_SESSION["loggedin"]))
			{
				header("Location: login.php");
			}
			require 'include/identity.php';  
		?>
		<div class="main-content">
		<form method="POST" name="paymentfrm">
			<div class="paymenttype">
				<table>
					<tr>
						<div class="title"><p>Enter Payment Details</p></div>
					</tr>
					<tr>
						<td>
							<p>Credit or Debit Card</p>
							<p><img src="image/creditcard.png" /></p>
							<p><input type="radio" name="paymentmethod" checked /></p>
						</td>
						<td>
							<!-- <p>Online Banking (FPX)</p> -->
							<p><img src="image/acept.jpg" style="width: 80%" /></p>
							<!-- <p><input type="radio" name="paymentmethod"/></p> -->
						</td>
					</tr>
				</table>
			</div>
			
			<div class="details">
				<div class="cardnumber">
					<p>Card Number</p>
					<p><input type="text" name="cardnumber" pattern="[0-9]{4} *[0-9]{4} *[0-9]{4} *[0-9]{4}" required /></p>
				</div>
				<div class="cardname">
					<p>Name on Card</p>
					<p><input type="text" name="cardname" required /></p>
				</div>
				<div class="cardexpiry">
					<p>Expiry Date</p>
					<p>
						<input type="text" name="cardmm" placeholder="mm" required pattern="0[1-9]|1[012]" />/&nbsp;  
						<input type="text" name="cardyy" placeholder="yy" required pattern="2[0-9]" />
					</p>
				</div>
				<div class="ccv">
					<p>CVC</p>
					<p><input type="text" name="cardccv" pattern="[0-9]{3}" required /></p>
				</div>
			</div>
			
			<div class="orderbtn">
				<p>
					<input id="orderbtn" type="submit" name="order" value="Continue with transaction" />
				</p>
			</div>
		</form>
		</div>
		
		<?php 
			// echo $_SESSION["address"];die;
			require 'html/footer.html' 
		?>
	</div>
</body>
</html>
<?php
if(isset($_POST["order"]))
{
	// echo 123;die;
	$cardnumber = $_POST["cardnumber"];
	$name = $_POST["cardname"];
	$month = $_POST["cardmm"];
	$year = $_POST["cardyy"];
	$cvc = $_POST["cardccv"];
	$total = $_SESSION["total"];
	$delivery = $_SESSION["address"];
	$date = date("Y-m-d");
	$customer = $_SESSION["sess_memid"];
	$d = str_replace('-', '', $date);
	$num = rand(0,100);
	$code = "P".$d."00".$num;
	// echo $code;die;
	$sqlcode =
	"
		SELECT order_code 
		FROM orders
		WHERE order_code = '$code'
	";
	$result = mysqli_query($conn, $sqlcode);

	if(mysqli_num_rows($result) != 0)
	{
		$code = "P".$d."00".$num;
	}

	if($cardnumber == "")
	{
		$msg = "Please fill in card number";
	}
	else if($name == "") 
	{
		$msg = "Please fill in name on card";
	}
	else if($month == "") 
	{
		$msg = "Please fill in month of expired date";
	}
	else if($year == "") 
	{
		$msg = "Please fill in year of expired date";
	}
	else if($cvc == "") 
	{
		$msg = "Please fill in your cvc";
	}
	else
	{
		$sqlOrder = 
		"
			INSERT INTO orders
			(order_code, order_total_price, order_status, order_date, order_deliveryAddress, payment_method, customer_id)
			VALUES
			('$code', $total, 0, '$date', \"$delivery\", \"VISA/CREDIT\",$customer)
		";
		// echo $sqlOrder;die;
		mysqli_query($conn, $sqlOrder);
		$done = 1;

		$sql = 
		"
			SELECT max(order_id) AS order_id
			FROM orders
		";
		$result = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($result))
		{
			$order_id = $row["order_id"];
			foreach ($_SESSION["shopping_cart"] as $key => $value) 
			{
				$product = $value["product_id"];
				$price = $value["product_price"];
				$sqlDetail = 
				"
					INSERT INTO order_details
					(order_id, product_id, subtotal)
					VALUES
					($order_id, $product, $price)
				";
				mysqli_query($conn, $sqlDetail);

			}
		}
		$ordered = 1;
	}
		

	if($ordered == 1)
	{
		unset($_SESSION["shopping_cart"]);
	}
?>
<script type="text/javascript">
	window.location.replace("loading.php");
</script>
<?php
}
?>