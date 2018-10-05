<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Order History</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.main
{
	width: 100%;
	margin: auto;
}
.left
{
	float: left;
}
.left ul li
{
	display: block;
	height: 30px;
	margin-bottom: 10px;
}
.left ul li:hover
{
	background-color: #8CC63F;
}
.left ul li a
{
	text-decoration: none;
	font-size: 1.5em;
	color: black;
}
.left ul li a:hover
{
	background-color: #8CC63F;
	color: white;
}
.right
{
	margin-left: 20%;
	border-left: 1px solid silver;
	margin-top: 20px;
	margin-bottom: 10px;
}
.right table
{
	border-collapse: collapse;
	border-spacing: 0px;
	border: 1px solid silver;
	width: 100%;
	font-size: 1em;
}
.right tr td,th
{
	border: 1px solid silver;
	padding: 2%;
}
.right tr a
{
	text-decoration: none;
}
#url
{
	color: blue;
}
#url:hover
{
	color: red;
	text-decoration: underline;
}
.footer
{
	position: absolute;
	bottom: 0;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php 
			require 'html/header.html'; 
			if (!isset($_SESSION["loggedin"]))
			{
				header("Location: login.php");
			}
			require 'include/identity.php';

			$cus = $_SESSION["sess_memid"];
			$sqlOrder = 
			"
				SELECT o.*,
				IF(o.order_status = 0, 'Pending', 'Delivered') as status
				FROM orders o
				WHERE o.customer_id = $cus
				ORDER BY o.order_date DESC
			";
			$resultOrder = mysqli_query($conn, $sqlOrder);
		?>
		<div class="main">
			<div class="left">
				<ul>
					<li><a href="account.php">My Account</a></li>
					<li><a href="orderhistory.php">Order History</a></li>
				<ul>
			</div>
			<div class="right">
				<table width="100%">
					<tr class="topic">
						<th style="width: 5%">#</th>
						<th style="width: 15%">Order</th>
						<th style="width: 10%">Date</th>
						<th style="width: 35%">Product</th>
						<th style="width: 10%">Payment(RM)</th>
						<th style="width: 10%">Status</th>
					</tr>
					<?php
					while($rowOrder = mysqli_fetch_assoc($resultOrder))
					{
						$orderID = $rowOrder["order_id"];
						$i = 1;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td style="color: blue; text-align: center;"><?php echo $rowOrder["order_code"]; ?></td>
						<td style="text-align: center;"><?php echo $rowOrder["order_date"]; ?></td>
						<td>
							<?php
							$sqlProduct =
							"
								SELECT od.*, p.*
								FROM order_details od
								LEFT JOIN product p ON od.product_id = p.product_id
								WHERE od.order_id = $orderID
							";
							$resultProduct = mysqli_query($conn, $sqlProduct);
							while($rowProduct = mysqli_fetch_assoc($resultProduct))
							{
							?>
							<a href="productdetail.php?pid=<?php echo $rowProduct['product_id']; ?>" id="url">
								<p>
									<?php echo $rowProduct["product_name"]; ?>
								</p>
							</a>
							<?php
							}
							?>
						</td>
						<td style="text-align: center;"><?php echo $rowOrder["order_total_price"]; ?></td>
						<td style="text-align: center;" id="status"><?php echo $rowOrder["status"]; ?></td>
						<script type="text/javascript">
							var status = <?php echo $rowOrder["order_status"]; ?>;
							if(status == 1)
							{
								$("#status").css('color','red');
							}
							else
							{
								$("#status").css('color','green');
							}
						</script>
					</tr>
					<?php
						$i++;
					}
					?>
				</table>
			</div>
		</div>
		<?php 
			require 'html/footer.html'; 
		?>
	</div>
</body>
</html>