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
	var acc = "<?php echo $_SESSION["sess_acc"]; ?>";
	if(acc == "staff")
	{
		$('p#staff').show();
		$('p#customer').hide();
		$('p#admin_super').hide();
	}
	else if(acc == "admin" || acc == "superuser")
	{
		$('#staff').hide();
		$('#customer').hide();
		$('#admin_super').show();
	}
	else
	{
		$('#staff').hide();
		$('#customer').show();
		$('#admin_super').hide();
	}
	$("#username").html(name);
	$("#inout").html("Sign Out");
	$("#inout").attr("href","logout.php");

</script>

<?php
	}
?>