<?php

include("connection.php");

if($_SESSION["loggedin"]!=1)
	header("Location: login.php");

$sess_memid = $_SESSION["sess_memid"];

$result = mysqli_query($conn,"select * from customer where customer_id = $sess_memid");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | My Account</title>
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
	margin-left: 25%;
	border-left: 1px solid silver;
	padding-left: 5%; 
}
.right tr td
{
	font-size: 1.5em;
}
.right tr td input[type=text]
{
	height: 30px;
	width: 100%;
	margin: 10px 20px;
	text-align: right;
}

.right button
{
	background-color: #8CC63F;
	color: white;
	height: 30px;
	font-size: 1.2em;
	border: 0px;
	margin: 10px;
}
.right button:hover
{
	filter:brightness(80%);
	cursor: pointer;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php require 'html/header.html'; 
		if (!isset($_SESSION["loggedin"]))
			{
				header("Location: login.php");
			}
			require 'include/identity.php'; 
		?>
		<div class="main">
			<div class="left">
				<ul>
					<li><a href="account.php">My Account</a></li>
					<li><a href="orderhistory.html">Order History</a></li>
					<li><a href="#">Weekly Log</a></li>
				<ul>
			</div>
			<form name="edit" method="POST">
			<div class="right">
				<h1>My Profile</h1>
				<table>
					<tr>
						<td>Old Password</td>
						<td><input type="password" name="oldpw" required maxlength="16" minlength="8"/></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" name="newpw" required maxlength="16" minlength="8"/></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="confirmpw" required maxlength="16" minlength="8"/></td>
					</tr>
				</table>

				<button name="updatebtn" >Update</button>
			</div>
			</form>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>

<?php
	if(isset($_POST["updatebtn"]))
	{	
		$oldpw = $_POST["oldpw"];
		$newpw = $_POST["newpw"];
		$confirmpw = $_POST["confirmpw"];
		$encriptpw = md5($newpw);

		$sqlcheck = 
			"
			SELECT * FROM customer WHERE customer_id = $sess_memid
			";
		$result = mysqli_query($conn,$sqlcheck);
		$row = mysqli_fetch_assoc($result);
		$databasepw = $row["customer_password"];

		if(md5($oldpw)==$databasepw)
		{
			$sql = 
			"
			UPDATE customer 
			SET customer_password = \"$encriptpw\" WHERE customer_id = $sess_memid 
			";

			mysqli_query($conn,$sql);

			?>
				<script type="text/javascript">
					alert("Update successfully!!");
					window.location.replace("account.php");
				</script>
			<?php
		}
		else
		{
			?>
		   <script type="text/javascript">
		   		alert("Old Password is Wrong!");
		   </script>
		   <?php
		}

		
	
		

	}
?>