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
		<?php require 'html/header.html'; ?>
		<div class="main">
			<div class="left">
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="orderhistory.html">Order History</a></li>
					<li><a href="#">Weekly Log</a></li>
				<ul>
			</div>
			<div class="right">
				<h1>My Profile</h1>
				<table>
					<tr>
						<td>Customer ID</td>
						<td><input type="text" name="userfnm" value="C00199" readonly /></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="userfnm" value="Eric" readonly /></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" name="userlnm" value="Heng" readonly /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="usermail" value="eheng55@gmail.com" readonly /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="usera" value="47, Jalan Melati 1, Taman Melati putih" readonly /></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="userc" value="Kota Tinggi" readonly /></td>
					</tr>
					<tr>
						<td>Postcode</td>
						<td><input type="text" name="userpc" value="81900" readonly /></td>
					</tr>
					<tr>
						<td>State</td>
						<td><input type="text" name="userstate" value="Johor" readonly /></td>
					</tr>
				</table>
				<button name="editbtn">EDIT</button>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>