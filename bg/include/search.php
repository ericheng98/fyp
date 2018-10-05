<?php
if(isset($_POST["search"]))
{
	$search = $_POST["searchInput"];
?>
<script type="text/javascript">
	window.location.replace('product.php?search=<?php echo $search; ?>');
</script>
<?php
}
?>