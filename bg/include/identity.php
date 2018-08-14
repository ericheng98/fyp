<?php
// echo $_SESSION["loggedin"];die;
	if($_SESSION["loggedin"] != 1)
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
	$("#inout").attr("href","index.php");

</script>

<?php
	}
?>