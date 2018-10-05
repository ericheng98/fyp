<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Admin</title>
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/adminpage.js"></script>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.main
{
	width: 100%;
	margin-bottom: 20px
	overflow: auto;
}
.left
{
	float: left;
	margin: 30px;
	font-size: 1.5em;
}
.reference
{
	padding: 10px 10px;
	display: inline-block;
	border-right: 1px solid silver;
}
.reference:hover
{
	background-color: #8CC63F;
	color: white;
	cursor: pointer;
}
.right
{
	margin-bottom: 50px;
	clear:both;
	width: 100%;
}
.right table
{
	border-collapse: collapse;
	border-spacing: 0px;
	border: 1px solid silver;
	font-size: 1em;
	width: 100%;
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
button#btn
{
	font-size: 1.1em;
	padding: 1%;
	width: 100%;
	background-color: black;
	color: white;
	border: none; 
}
button#btn:hover
{
	background-color: #8CC63F;
	cursor: pointer;
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

			$sqlOrder =
			"
				SELECT o.*, c.customer_code,
				IF(o.order_status = 0, ' - ', s.staff_code) AS approveBy,
				IF(o.order_status = 0, 'Pending', 'Delivered') AS status
				FROM orders o
				LEFT JOIN customer c ON o.customer_id = c.customer_id
				LEFT JOIN staff s ON o.staff_id = s.staff_id
			";
			$resultOrder = mysqli_query($conn, $sqlOrder);
		?>
		<div class="main">
			<div class="left">
				<div class="reference" id="history">
					Order History
				</div>
				<div class="reference" id="product">
					Product
				</div>
				<div class="reference" id="staff">
					Staff
				</div>
			</div>
			<div class="right">
				<form name="historyfrm" method="POST">
				<h1>Order History</h1>
				<table>
					<tr class="topic">
						<th style="width: 5%">#</th>
						<th style="width: 12%">Order</th>
						<th style="width: 10%">Date</th>
						<th style="width: 20%">Product</th>
						<th style="width: 12%">Payment(RM)</th>
						<th style="width: 10%">Status</th>
						<th style="width: 11%">Order By</th>
						<th style="width: 11%">Approved By</th>
					</tr>
					<?php
					$i = 1;
					while($rowOrder = mysqli_fetch_assoc($resultOrder))
					{
						
						$orderID = $rowOrder["order_id"];
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td style="color: blue; text-align: right;"><?php echo $rowOrder["order_code"]; ?></td>
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
								while($rowP = mysqli_fetch_assoc($resultProduct))
								{
								?>
									<p>
										<a href="productdetail.php?pid=<?php echo $rowP["product_id"]; ?>">
											<?php echo $rowP["product_name"]; ?>
										</a>
									</p>
								<?php
								}
								?>
							</td>
							<td style="text-align: center;"><?php echo $rowOrder["order_total_price"]; ?></td>
							<?php
								if($rowOrder["status"] == "Pending")
								{
							?>
									<td style="text-align: center;color: orange;" id="status">
										<?php echo $rowOrder["status"]; ?>
									</td>
							<?php
								}
								else
								{
							?>
									<td style="text-align: center;color: green;" id="status">
										<?php echo $rowOrder["status"]; ?>
									</td>
							<?php
								}
							?>
							<td style="text-align: center;"><?php echo $rowOrder["customer_code"]; ?></td>
							<td style="text-align: center;"><?php echo $rowOrder["approveBy"]; ?></td>
							<td>
							<?php
								if($rowOrder["status"] == "Pending")
								{
							?>
								<button name="update" value="<?php echo $rowOrder["order_id"]; ?>" id="btn" onclick="return confirmation();">
									Update
								</button>
							<?php
								}
								else
								{
							?>
								<button name="update" value="<?php echo $rowOrder["order_id"]; ?>" id="btn" onclick="return confirmation();" style="display: none;">
									Update
								</button>
							<?php
								}
							?>
							</td>
						</tr>
					<?php
						$i++;
					}
					?>
				</table>
				</form>
			</div>
		</div>
		<?php 
			require 'html/footer.html'; 
		?>
	</div>
</body>
</html>
<script type="text/javascript">
function confirmation()
{
	var anwswer = confirm("Confirm update this order?");
	return answer;
}
</script>
<?php
if(isset($_POST["update"]))
{
	$oID = $_POST["update"];
	$id = $_SESSION["sess_memid"];
	$sqlUpdate = 
	"
		UPDATE orders 
		SET order_status = 1, staff_id = $id
		WHERE order_id = $oID
	";
	mysqli_query($conn, $sqlUpdate);
?>
<script type="text/javascript">
	alert("Successfully update !");
	window.location.replace("aorderhistory.php");
</script>
<?php
}
?>