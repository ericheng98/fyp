<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Sign In</title>
<script src="js/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.signin
{width: 100%;
 margin: auto;
 overflow: auto;
 font-size: 1.3em;
 margin-bottom: 10px;
}
.signinfrm
{overflow: auto;
 float: left;
 border-right: 1px solid grey;
 width: 45%;
 border-top: 1px solid grey;
}
.reg
{float: left;
 width: 50%;
 border-top: 1px solid grey;
 padding-left: 50px;
}
.signinfrm input[type="email"],[type="password"]
{margin: 2% 0px; 
 height: 35px;
 padding-left: 10px;
}
.signinfrm input[type="submit"]
{height: 35px;
 width: 130px;
 background-color:#8CC63F;
 font-size: 1em;
 color: white;
 border: 0px;
}
.signinfrm input[type="submit"]:hover
{filter:brightness(80%);
 cursor: pointer;
}
#forget a
{color: grey;
 font-size: 0.8em;
}
.reg li
{color: grey;
}
.reg input[type="submit"]
{height: 35px;
 width: 250px;
 background-color:#8CC63F;
 font-size: 0.8em;
 color: white;
 border: 0px;
}
.reg input[type="submit"]:hover
{filter:brightness(80%);
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
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php
			require 'html/header.html'; 
		?>
		<div class="signin">
			<div id="alert-side" style="display:none;">
				<p id="msg"></p>
			</div>
			<h2>Sign In</h2>
			<div class="signinfrm">
				<form name="loginfrm" method="post" action="">
				<h3>Member Sign In</h3>
				<p><i><small>**Please sign in with your personal or corporate login</small></i></p>
				<p><span id="title">Email Address</span><br />
				<input type="email" name="useremail" size="50" autofocus required /><br />
				<input type="checkbox" name="rmbme" value="1" /> Remember me</p>
				<p><span id="title">Password</span><br />
				<input type="password" name="userpw" required /><br /></p>
				<p><span id="title">Login As</span><br /><br />
				<input type="radio" name="login_as" value="customer" /> Customer
				<input type="radio" name="login_as" value="superuser" /> Superuser
				<input type="radio" name="login_as" value="admin" /> Admin
				<input type="radio" name="login_as" value="staff" /> Staff
				</p>
				<p><span id="forget"><a href="#">Forget Password?</a></span></p>
				<p><input type="submit" name="signinbtn" value="SIGN IN" /></p>
				</form>
			</div>
			<div class="reg">
				<h3>Not a Member? Register today and get these benefits:</h3>
				<ul>
					<li>Enjoy faster and simpler checkout</li>
					<li>Track previous order</li>
					<li>Store your address book, and much more</li>
				</ul>
				<p><a href="reg.html"><input type="submit" name="createacc" value="CREATE AN ACCOUNT"/></a></p>
			</div>
		</div>
		
<?php

if(isset($_POST["signinbtn"]))
{
	$useremail = $_POST["useremail"];
	$password = md5($_POST["userpw"]);
	$login_as = $_POST["login_as"];
	// echo $login_as;die;
	switch($login_as)
	{
		case "superuser":
		$sql = 
		"
			SELECT s.* FROM superuser s
			WHERE s.superuser_email = '$useremail'
			AND s.superuser_password = '$password'
		";
		// echo $sql;die;
		break;

		case "admin":
		$sql = 
		"
			SELECT a.* FROM admin a
			WHERE a.admin_email = '$useremail'
			AND a.admin_password = '$password'
		";
		// echo $sql;die;
		break;

		case "customer":
		$sql = 
		"
			SELECT c.* FROM customer c
			WHERE c.customer_email = '$useremail'
			AND c.customer_password = '$password'
		";
		// echo $sql;die;
		break;

		case "staff":
		$sql = 
		"
			SELECT s.* FROM staff s
			WHERE c.staff_email = '$useremail'
			AND c.staff_password = '$password'
		";
		// echo $sql;die;
		break;
	}

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result) != 1)
	{
?>
		<script type="text/javascript">
			// console.log(123);
			var msg = "";
			msg = "Invalid Username or Password! Please try again.";
			$("#alert-side").css("display", "");
			$("#msg").html(msg);
			$("#alert-side").show().delay(2000).fadeOut();
		</script>
<?php
	}

	else
	{
		switch ($login_as)
		{
			case 'admin':
				$id = "admin_id";
				$url = "adminpage.php";
			break;

			case 'superuser':
				$id = "superuser_id";
				$url = "adminpage.php";
			break;

			case 'customer':
				$id = "customer_id";
				$url = "account.php";
			break;

			case 'staff':
				$id = "staff_id";
				$url = "account.php";
			break;
		}

		$_SESSION["sess_memid"] = $row[$id];
		$_SESSION["loggedin"] = 1;

		header("Location: ".$url);
	}
}

?>

<?php 
	require 'html/footer.html' 
?>
	</div>
</body>
</html>