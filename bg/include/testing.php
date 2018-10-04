<form method="post">
	<button name="test" value=3> testing</button>
</form>

<?php
if (isset($_POST["test"])) 
{
	echo $_POST["test"];
}
?>