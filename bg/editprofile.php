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
#drop
{
	margin-left: 8%;
	height: 30px;
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
				<ul>
			</div>
			<form name="edit" method="POST">
			<div class="right">
				<h1>My Profile</h1>
				<table>
					<tr>
						<td>Customer Code</td>
						<td><input type="text" name="userid" value="<?php echo $row["customer_code"] ?>" disabled /></td>
					</tr>
					<tr>
						<td>User Name</td>
						<td><input type="text" name="username" value="<?php echo $row["customer_name"] ?>" required/></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="usermail" value="<?php echo $row["customer_email"] ?>" disabled /></td>
					</tr>
					<tr>
						<td>IC</td>
						<td><input type="text" name="useric" value="<?php echo $row["customer_IC"] ?>" disabled /></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<td><input type="text" name="userCNo" pattern="[0-9]{10,11}" value="<?php echo $row["customer_contactNo"] ?>"
							required/></td>
					</tr>
					<tr>
						<td>Birthday</td>
						<td><input type="text" name="userbirthday" value="<?php echo $row["customer_birthday"] ?>" disabled /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td>
							<input type="text" name="usera" value="<?php echo $row["customer_address"] ?>" required style="width: 200%;" />
						</td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="userc" value="<?php echo $row["customer_city"] ?>" required /></td>
					</tr>
					<tr>
						<td>Postcode</td>
						<td><input type="text" name="userpc" value="<?php echo $row["customer_postcode"] ?>" required /></td>
					</tr>
					<tr>
						<td>State</td>
						<td>
							<select name="state" id="drop" value="<?php echo $row["customer_state"] ?> >
								<option value="default" selected>Choose Your State</option>
								<option value="Johor">Johor</option>
								<option value="Kedah">Kedah</option>
								<option value="Kelantan">Kelantan</option>
								<option value="Malacca">Malacca</option>
								<option value="Negeri Sembilan">Negeri Sembilan</option>
								<option value="Pahang">Pahang</option>
								<option value="Perak">Perak</option>
								<option value="Perlis">Perlis</option>
								<option value="Pulau Pinang">Pulau Pinang</option>
								<option value="Sabah">Sabah</option>
								<option value="Sarawak">Sarawak</option>
								<option value="Selangor">Selangor</option>
								<option value="Terengganu">Terengganu</option>
							</select>
						</td>
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
		$username = $_POST["username"];
		$userphoneno = $_POST["userCNo"];
		$useraddress = $_POST["usera"];
		$userc = $_POST["userc"];
		$userpostcode = $_POST["userpc"];
		$userstate = $_POST["state"];
	
		$sql = 
		"
		UPDATE customer 
		SET customer_name = \"$username\", customer_contactNo = '$userphoneno', customer_address = '$useraddress', 
			customer_city = \"$userc\", customer_postcode = '$userpostcode', 
			customer_state = '$userstate' WHERE customer_id = $sess_memid 
		";

		mysqli_query($conn,$sql);
?>
<script type="text/javascript">
	alert("Update successfully!!");
	window.location.replace("account.php");
</script>
<?php
	}
?>