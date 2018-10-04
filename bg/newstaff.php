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
	clear: both;
}
.right table 
{	
	font-size: 1.2em;
	border-spacing: 20px;
}
.right td input[type=text], [type=date], [type=number]
{
	padding: 5px;
}
input[type="submit"]
{
	height: 30px;
	font-size: 1em;
	margin: 0px 0px 10px 0px;
	background-color: #8CC63F;
	border: 0px;
	color: white;
}
input[type="submit"]:hover
{
	filter:brightness(80%);
	cursor: pointer;
}
#alert-side
{
	border: 1px solid red;
	margin-top: 5px; 
	padding: 5px; 
	width: 500px;
	background-color: pink;
	color: #E52752;
	font-weight: bold;
	font-size: 1.3em;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php 
			require 'html/header.html';
			// echo $_SESSION["loggedin"];die;
			if (!isset($_SESSION["loggedin"]))
			{
				header("Location: login.php");
			}
			require 'include/identity.php';
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
				<div id="alert-side" style="display:none;">
					<p id="msg"></p>
				</div>
				<h1>Add NEW Admin/ Staff</h1>
				<form method="POST" action="newstaff.php" name="addASForm" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Name</td>
							<td><input type="text" name="uname" maxlength="100" size="50" /></td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="file" name='image' /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="umail" /></td>
						</tr>
						<tr>
							<td>I/C</td>
							<td><input type="text" name="ic" maxlength="14" /></td>
						</tr>
						<tr>
							<td>Join Date</td>
							<td><input type="date" name="joinDate"/></td>
						</tr>
					</table>
					<input type="submit" name="addbtn" value="ADD !!" />
				</form>
			</div>
		</div>
		<?php 
			require 'html/footer.html'; 
		?>
	</div>
</body>
</html>
<?php
if(isset($_POST["addbtn"]))
{
	$name = $_POST["uname"];
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$email = $_POST["umail"];
	$ic = $_POST["ic"];
	$joinDate = $_POST["joinDate"];

	$condition = 0;

	$date = str_replace('-', '', $joinDate);
	$num = rand(0,100);

	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $newpassword = '';
    $length = 10;
    for ($i = 0; $i < $length; $i++) 
    {
        $newpassword .= $characters[rand(0, $charactersLength - 1)];
    }

    $encriptpw = md5($newpassword);

	if($_SESSION["sess_acc"] == "superuser")
	{
		$code = "A".$date.$num;
		$sqlcode =
		"
			SELECT admin_code 
			FROM admin
			WHERE admin_code = '$code'
		";
		$result = mysqli_query($conn, $sqlcode);

		if(mysqli_num_rows($result) != 0)
		{
			$code = "A".$date.$num;
		}

		$sql =
		"
			INSERT INTO admin
			(admin_code, admin_name, admin_image, admin_email, admin_password, admin_IC, admin_joinDate, admin_isActive)
			VALUES
			('$code', '$name', '$image', '$email', '$encriptpw', '$ic', '$joinDate', 1)
		";

		$sqlproduct = 
		"
			SELECT * FROM admin 
			WHERE admin_email = \"$email\"
		";
	}
	if($_SESSION["sess_acc"] == "admin")
	{
		$code = "S".$date.$num;
		$sqlcode =
		"
			SELECT staff_code 
			FROM staff
			WHERE staff_code = '$code'
		";
		$result = mysqli_query($conn, $sqlcode);

		if(mysqli_num_rows($result) != 0)
		{
			$code = "S".$date.$num;
		}

		$sql =
		"
			INSERT INTO staff
			(staff_code, staff_name, staff_image, staff_email, staff_password, staff_IC, staff_joinDate, staff_isActive)
			VALUES
			('$code', '$name', '$image', '$email', '$encriptpw', '$ic', '$joinDate', 1)
		";

		$sqlproduct = 
		"
			SELECT * FROM staff 
			WHERE staff_email = \"$email\"
		";
	}



	$resultDuplicate = mysqli_query($conn, $sqlproduct);
	if(mysqli_num_rows($resultDuplicate) != 0)
	{
		$message="Email existed!!";
	}
	else if($name != "" && $image != "" && $email != "" && $ic != "" && $joinDate != "")
	{
		mysqli_query($conn, $sql);
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
		{
			$msg = "GOT";
		}
		else 
		{
			$msg = "NO";
		}
		$message = "Successfully added! Please copy down password!<br>Your password : ".$newpassword;
		$condition = 1;
	}
?>
	<script type="text/javascript">
		var msg = "<?php echo $message; ?>";
		var a = "<?php echo $condition; ?>";
		if(a == "1")
		{
			$("#alert-side").css("display", "");
			$("#alert-side").css("background-color", "#8BFC81");
			$("#alert-side").css("color", "green");
			$('#alert-side').css("border", "1px solid green");
			$("#msg").html(msg);
			$("#alert-side").show().delay(10000).fadeOut();
		}
		else
		{
			$("#alert-side").css("display", "");
			$("#msg").html(msg);
			$("#alert-side").show().delay(2000).fadeOut();
		}
	</script>
<?php

}

?>