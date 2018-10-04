<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Forget Password</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">

.forgetpassword
{
	width: 100%;
 	margin: auto;
	margin: 5% 0%;
}


.forgetpassword input[type="email"]
{height: 35px;
 margin: 7px 100px;
 padding-left: 10px;
 outline: none;
 width: 280px;
}
.forgetpassword input[type="email"]:focus
{border-color: #8CC63F;
}

.forgetpassword input[type="submit"]
{width: 170px;
 height: 40px;
 font-family: Sans-serif;
 font-size: 1em;
 background-color: #8CC63F;
 color: white;
 border: 0px;
}
.forgetpassword input[type="submit"]:hover
{filter: brightness(80%);
 cursor: pointer;
}

.forgetpassword table td
{font-size: 1.2em;
}

#title
{font-size: 2.5em;
}



</style>
</head>
<body>
	<div class="mainwrapper">
		<?php
			require 'html/header.html'; 
		?>
		<div class="forgetpassword">
			<p id="title">Forget Password</p>
			<div id="" >
				<form name="loginfrm" method="post" action="">
					<table>
						<tr>
							<td>Email*</td>
							<td><input type="email" name="useremail" size="50" autofocus required /><br /><td>
						</tr>
						<tr>
							<td><p><input type="submit" name="btnsend" value="SUBMIT" /></p></td>
						</tr>
					</table>
					
					

				</form>
			</div>
		</div>
	<div>
		<?php 
			require 'html/footer.html' 
		?>
	</div>
</body>



<?php

if(isset($_POST["btnsend"]))
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $newpassword = '';
    $length = 10;
    for ($i = 0; $i < $length; $i++) 
    {
        $newpassword .= $characters[rand(0, $charactersLength - 1)];
    }

    $encriptpw = md5($newpassword);

	$to = $_POST["useremail"];
	$sqlcheck = "select * from customer where customer_email = '$to'";
	$result = mysqli_query($conn,$sqlcheck);
	$row = mysqli_fetch_assoc($result);
    $username = $row["customer_name"];

	$subject = 'Hello from BULLs GAMING ONLINE STORE!';
	$message = 
	"
	Hi, $username. This email is from BULLs GAMING ONLINE STORE. Your new password is $newpassword. Kindly to change Your password after this. Thank you.
	";
	$headers = "From: bullsgamingonlinegamestore@gmail.com\r\n";

	
	if(mysqli_num_rows($result) == 0)
	{
		?>
		   <script type="text/javascript">
		   		alert("Invalid Email!");
		   </script>
		   <?php
	}
	else
		{
			
		   if (mail($to, $subject, $message, $headers)) 
		{
			$sql = 
			"
				UPDATE customer
				SET
				customer_password = \"$encriptpw\" WHERE customer_email = \"$to\"
			";
			mysqli_query($conn,$sql);
		   ?>
		   <script type="text/javascript">
		   		alert("New password had been sent to your email!");
		   </script>
		   <?php
		} 
		}
	
}
?>
</html>