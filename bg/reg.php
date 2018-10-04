<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Register</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.regf
{width: 100%;
 margin: auto;
 margin: 5% 0px;
}
#title
{font-size: 2.5em;
}
#subtopic
{font-size: 1.8em;
}
.regf table td
{font-size: 1.2em;
}
.info table td input[type="text"],[type="date"]
{height: 35px;
 margin: 7px 100px;
 padding-left: 5%;
 outline: none;
}
.info table td input[type="text"]:focus,[type="date"]:focus
{border-color: #8CC63F;
}
.logininfo table td input[type="email"],[type="password"]
{height: 35px;
 margin: 7px 100px;
 padding-left: 10px;
 outline: none;
 width: 280px;
}
.info table td input[type="email"]:focus,[type="password"]:focus
{border-color: #8CC63F; 
}
.contact table td input[type="text"], select
{height: 35px;
 margin: 7px 100px;
 padding-left: 10px;
 outline: none;
 width: 280px;
}
.contact table td input[type="text"]:focus, select:focus
{border-color: #8CC63F;
}
#term a
{color: black;
 font-style: italic;
 text-decoration: underline;
}
.termcondition input[type="submit"]
{width: 170px;
 height: 40px;
 font-family: Sans-serif;
 font-size: 1.2em;
 background-color: #8CC63F;
 color: white;
 border: 0px;
}
.termcondition input[type="submit"]:hover
{filter: brightness(80%);
 cursor: pointer;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php require 'html/header.html'; ?>
		<div class="regf">
			<p id="title">Create Account</p>
			<form name="regform" method="post" action="">
				<div class="info">
					<p id="subtopic">Personal Information</p><hr />
				<table>
					<tr>
						<td>Name*</td>
						<td><input type="text" name="usernm" size="30" required/><td>
					</tr>
					<tr>
						<td>Birthday*</td>
						<?php 
							$date=date('Y-m-d', strtotime('-18 years'));
						?>
						<td><input type="date" name="userbd" required  max="<?php echo $date ?>"/></td>
					</tr>
					<tr>
						<td>I/C Number*</td>
						<td><input type="text" name="useric" required placeholder="Eg: 980702016311" pattern="[0-9]{12}"/></td>
					</tr>
				</table>
				</div>
				<div class="logininfo">
					<p id="subtopic">Login Information</p><hr />
				<table>
					<tr>
						<td>Email*</td>
						<td><input type="email" name="usermail" id="usermail" placeholder="Eg: abc12345@hotmail.com" required/></td>
					</tr>
					<tr>
						<td>Confirm Email*</td>
						<td><input type="email" name="userconfirmmail" id="userconfirmmail" required/></td>
					</tr>
					<tr>
						<td>Password*</td>
						<td><input type="password" name="userps" placeholder="At least consist 8-16 words and numbers" required maxlength="16" minlength="8" /></td>
					</tr>
					<tr>
						<td>Confirm Password*</td>
						<td><input type="password" name="userconfirmps" required maxlength="16" minlength="8"/></td>
					</tr>
				</table>
				</div>
				<div class="contact">
					<p id="subtopic">Contact</p><hr />
				<table>
					<tr>
						<td>Address*</td>
						<td><input type="text" name="useradd" size="80" required/></td>
					</tr>
						<td><select name="country" hidden>
								<option value="Malaysia" selected>Malaysia</option>
							</select>
						</td>
					<tr>
						<td>State*</td>
						<td><select name="state" required>
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
					<tr>
						<td>City*</td>
						<td><input type="text" name="usercity" required/></td>
					</tr>
					<tr>
						<td>Postcode*</td>
						<td><input type="text" name="userpc" size="5" required placeholder="81620" /></td>
					</tr>
					<tr>
						<td>Phone Number*</td>
						<td><input type="text" name="userhp" size="15" required placeholder="Eg: 01135338702" pattern="[0-9]{10，11}"/></td>
					</tr>
				</table>
				</div>
				<div class="termcondition">
					<p><hr /><input type="checkbox" name="acpt" id="myCheck" value="1" /><small>I verify that I am above 18 years old and agree with the 
					<span id="term"><a href="#">Terms & Conditions</a></span> of CocoaRich</small></p>
					<a href="#"><input type="submit" name="regbtn" value="Register" /></a>
				</div>
		</div>
	</form>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>

<?php
if(isset($_POST["regbtn"]))
{
	$username = $_POST["usernm"];
	$userbirthday = $_POST["userbd"];
	$usericno = $_POST["useric"];
	$useremail = $_POST["usermail"];
	$userconfirmemail = $_POST["userconfirmmail"];
	$userpassword = md5($_POST["userps"]);
	$userconfirmpassword = md5($_POST["userconfirmps"]);
	$useraddress = $_POST["useradd"];
	$usercountry = $_POST["country"];
	$userstate = $_POST["state"];
	$userc = $_POST["usercity"];
	$userpostcode = $_POST["userpc"];
	$userphoneno = $_POST["userhp"];


	$sql = "select * from customer where customer_email = '$useremail'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) != 0)
	{
		?>
		<script type="text/javascript">
			alert("Email already existed");
		</script>
		<?php
	}
	else
	{	
		if($useremail != $userconfirmemail)
		{
			?>
			<script type="text/javascript">
				alert("Email and confirm Email are not same!");
			</script>
			<?php
		}
		else
		{
			if($userpassword != $userconfirmpassword)
			{
			?>
				<script type="text/javascript">
					alert("Password and confirm password are not same!");
				</script>
				<?php
			}
			else
			{
				if(!isset($_POST["acpt"]))
				{
					?>
					<script type="text/javascript">
						alert("You are not accept for the term & condition");
					</script>
					<?php
					
				}
				else
				{
					$sql2 = 
					"insert into customer (customer_name,customer_birthday,customer_IC,customer_email,customer_password,customer_address,customer_country,customer_state,customer_city,customer_postcode,customer_contactNo) values ('$username','$userbirthday','$usericno','$useremail','$userpassword','$useraddress','$usercountry','$userstate','$userc','$userpostcode','$userphoneno')";
					mysqli_query($conn,$sql2);
					?>
					
					<?php

					
					$subject = 'Hello from BULLs GAMING ONLINE STORE!';
					$message = 
					"
					Hi, $username. 
					This is an automatic response sent when registering an email address on BULLs GAMING.
					Your registration is successful. Thank you for register on our website.
					";
					$headers = "From: bullsgamingonlinegamestore@gmail.com\r\n";


					if (mail($useremail, $subject, $message, $headers)) 
					{
						?>
					   <script type="text/javascript">
						alert(" <?php echo'Thank You '.$username.'. Your registration is successful'; ?>");
						</script>
					   <?php
					}
				}
				
			}
		}
	}
	mysqli_close($conn);
}
?>