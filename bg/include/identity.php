<?php
// echo $_SESSION["username"];die;
	// if($_SESSION["loggedin"] != 1)
	if(!isset($_SESSION["loggedin"]))
	{
		
?>

<script type="text/javascript">
	
	$(document).ready(function()
	{
		$("#username").html("Guest ");
		$("#inout").html("Login");
		$("#inout").attr("href","login.php");
	})	
</script>

<?php
	}
	else
	{
?>

<script type="text/javascript">
	var name = "<?php echo $_SESSION["username"]; ?> ";
	$("#username").html(name);
	$("#inout").html("Sign Out");
	$("#inout").attr("href","logout.php");

</script>

<?php
	}
?>