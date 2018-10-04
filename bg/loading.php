<!DOCTYPE html>
<html>
<head>
	<title>Redirecting...</title>
<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<center>
	<p>
		<i>Please do not refresh! Your transaction is being process...</i>
		<br>
		<i>Will redirect you in <span class="count"></span> second(s)</i>
	</p>
</center>
</body>
</html>
<script type="text/javascript">
$(function()
{
	var time = 5;
	function redirect()
	{
		var id = setTimeout(redirect, 1000);
		$(".count").html(time);
		if(time == 0)
		{
			clearTimeout(id);
			window.location.replace("thankyoupage.php");
		}

		time--;
	}
	
	redirect();
});
</script>
