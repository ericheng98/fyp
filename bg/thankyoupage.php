<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Thank You </title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">

.thank
{	
	overflow:auto;
	margin-left:5%;
	margin-right:5%;
}

.thank h1
{
	font-size:3.5em;
	text-align:center;
	font-style:italic;
	color:#323232;
}

.shopping
{
	float:left;
	
}

.signout
{
	float:right;
	
}

.shopping button
{
	background-color:#323232;
	color:white;
	border:0px;
	padding: 8px 10px;
}

.shopping button:hover
{
	cursor: pointer;
	background-color: #8CC63F;
}

.signout button
{
	background-color:#323232;
	color:white;
	border:0px;
	padding: 8px 10px;
	
}

.signout button:hover
{
	cursor: pointer;
	background-color: #8CC63F;
}

.footer
{
	position: absolute;
	bottom: 0;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php 
			require 'html/header.html'; 
			require 'include/identity.php';
		?>
		
		<div class="thank">
			<h1>Thank For Your Purchase !!!</h1>
			
			<div class="shopping">
				<p><a href="product.php"><button name="continuebtn">CONTINUE SHOPPING</button></a></p>
			</div>
			<form method="post">
			<div class="signout">
				<p><a href="index.php"><button name="signoutbtn">SIGN OUT</button></a></p>
			</div>
			</form>
		</div>
		
		<?php require 'html/footer.html'; ?>
	</div>
</body>
</html>
<?php
if(isset($_POST["signoutbtn"]))
{
	session_destroy();
?>
<script type="text/javascript">
	window.location.replace('logout.php');
</script>
<?php
}
?>
