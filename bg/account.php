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
	width: 150%;
	margin: 10px 20px;
	text-align: left;
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
		<?php 
			require 'html/header.html';
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
					<li><a href="orderhistory.php">Order History</a></li>
				<ul>
			</div>
			<div class="right">
				<h1>My Profile</h1>
				<table>
					<tr>
						<td>Customer Code</td>
						<td><input type="text" name="userid" value="<?php echo $row["customer_code"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>User Name</td>
						<td><input type="text" name="username" value="<?php echo $row["customer_name"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="usermail" value="<?php echo $row["customer_email"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>User IC</td>
						<td><input type="text" name="useric" value="<?php echo $row["customer_IC"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>User Contact Number</td>
						<td><input type="text" name="userCNo" value="<?php echo $row["customer_contactNo"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>User Birthday</td>
						<td><input type="text" name="userbirthday" value="<?php echo $row["customer_birthday"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="usera" value="<?php echo $row["customer_address"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="userc" value="<?php echo $row["customer_city"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>Postcode</td>
						<td><input type="text" name="userpc" value="<?php echo $row["customer_postcode"] ?>" readonly /></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="userstate" value="<?php echo $row["customer_state"] ?>" readonly /></td>
					</tr>
				</table>
				<button name="editbtn" onclick="edit()">EDIT</button>
				<button name="editpwbtn" onclick="editpw()">CHANGE PASSWORD</button>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>

<script type="text/javascript">
	function edit()
	{
		window.location.replace("editprofile.php");
	}
	function editpw()
	{
		window.location.replace("editpw.php");
	}
	
</script>