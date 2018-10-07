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
	padding: 0.5%;
}
.right tr a
{
	text-decoration: none;
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
#img
{
	width: 60%;
}
#b
{
	background-color: white;
}
#b:hover
{
	filter:brightness(100%);
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
			if(isset($_SESSION["sess_acc"]) == "staff")
			{
		?>
				<script type="text/javascript">
					alert("You dont have permission to view this page!!!");
					window.location.replace("aorderhistory.php");
				</script>
		<?php
			}
			if($_SESSION["sess_acc"] == "superuser")
			{
				$sql = 
				"
					SELECT a.admin_code AS code, a.admin_name AS name, a.admin_image AS image, a.admin_IC AS ic, a.admin_joinDate AS joinDate,
						   a.admin_id AS id
					FROM admin a
					WHERE a.admin_isActive = 1
				";
			}
			else if($_SESSION["sess_acc"] == "admin")
			{
				$sql =
				"
					SELECT s.staff_code AS code, s.staff_name AS name, s.staff_image AS image, s.staff_IC AS ic, s.staff_joinDate AS joinDate,
						   s.staff_id AS id
					FROM staff s
					WHERE s.staff_isActive = 1
				";
			} 
			$result = mysqli_query($conn, $sql);
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
				<h1>Staff</h1>
				<a href="newstaff.php"><button name="newbtn">ADD NEW STAFF</button></a>
				<form method="post">
				<table style="clear: both">
					<tr class="topic">
						<th style="width: 3%">#</th>
						<th style="width: 10%">Staff ID</th>
						<th style="width: 20%">Staff Name</th>
						<th style="width: 20%">Staff Image</th>
						<th style="width: 10%">I/C Number</th>
						<th style="width: 10%">Join Date</th>
						<th style="width: 10%">Remove</th>
					</tr>
					<?php
					while($row = mysqli_fetch_assoc($result))
					{
						$i = 1;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td style="color: blue; text-align: center;"><?php echo $row["code"]; ?></td>
						<td><?php echo $row["name"]; ?></td>
						<td><img src="images/<?php echo $row["image"] ?>" id="img" /></td>
						<td style="text-align: center;"><?php echo $row["ic"]; ?></td>
						<td style="text-align: center;"><?php echo $row["joinDate"]; ?></td>
						<td style="text-align: center">
							<button name="del" onclick="return con();" value="<?php echo $row["id"]; ?>" id="b" >
								<img src="image/remove.png" style="width: 25%"/>
							</button>
						</td>
						<td style="text-align: center">
							<button name="btn" onclick="return confirmation();" value="<?php echo $row["id"]; ?>">
								RESET PASSWORD
							</button>
						</td>
					</tr>
					<?php
						$i++;
					}
					?>
				</table>
				</form>
				<a href="#"><button name="nextbtn">NEXT PAGE</button></a>
			</div>
		</div>
		<?php require 'html/footer.html'; ?>
	</div>
</body>
</html>
<script type="text/javascript">
	function confirmation()
	{
		var answer = confirm("Confirm reset password?");
		return answer;
	}
	function con()
	{
		var ans = confirm("Do you want to delete?");
		return ans;
	}
</script>
<?php
if(isset($_POST["btn"]))
{
	$id = $_POST["btn"];
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $newpassword = '';
    $length = 10;
    for ($i = 0; $i < $length; $i++) 
    {
        $newpassword .= $characters[rand(0, $charactersLength - 1)];
    }

    $encriptpw = md5($newpassword);
    $useremail = "";
    if($_SESSION["sess_acc"] == "superuser")
    {
    	$sql =
    	"
    		UPDATE admin
    		SET admin_password = '$encriptpw'
    		WHERE admin_id = $id
    	";
    	$sqlEmail =
    	"
    		SELECT admin_email AS email, admin_name AS name
    		FROM admin
    		WHERE admin_id = $id
    	";
    }

    if($_SESSION["sess_acc"] == "admin")
    {
    	$sql =
    	"
    		UPDATE staff
    		SET staff_password = '$encriptpw'
    		WHERE staff_id = $id
    	";
    	$sqlEmail =
    	"
    		SELECT staff_email AS email, staff_name AS name
    		FROM staff
    		WHERE staff_id = $id
    	";
    }
    // echo $sqlEmail;die;
    $resultEmail = mysqli_query($conn, $sqlEmail);
    while($row = mysqli_fetch_assoc($resultEmail))
    {
    	$useremail = $row["email"];
    	$username = $row["name"];
    }

    // echo $useremail;die;

    mysqli_query($conn, $sql);
    
    $subject = 'Hello from BULLs GAMING ONLINE STORE!';
	$message = 
	"
	Hi, $username. 
	Your password has been successfully reset.
	Please copy down your new password for your futher login process.
	New password : $newpassword.

	Kindly please remember or copy down to prevent this kind of things happen again. Thank you.
	";
	$headers = "From: bullsgamingonlinegamestore@gmail.com\r\n";


	if (mail($useremail, $subject, $message, $headers)) 
	{
?>
<script type="text/javascript">
	alert("Password has been reset and sent! Please refer to email inbox!");
</script>
<?php
	}
}

if(isset($_POST["del"]))
{
	$id = $_POST["del"];

	if($_SESSION["sess_acc"] == "superuser")
    {
    	$sql =
    	"
    		UPDATE admin
    		SET admin_isActive = 0
    		WHERE admin_id = $id
    	";
    }

    if($_SESSION["sess_acc"] == "admin")
    {
    	$sql =
    	"
    		UPDATE staff
    		SET staff_isActive = 0
    		WHERE staff_id = $id
    	";
    }
    // echo $sql;die;
    mysqli_query($conn, $sql);
?>
<script type="text/javascript">
	alert("Deleted!");
	window.location.replace("astaff.php");
</script>
<?php

}
?>