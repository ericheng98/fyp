<?php
	include 'connection.php';
?>
<div class="filtering">
	<h1>Filtering</h1>
	<div id="platform">
		<h3>Platform</h3>
		<ul class="platform">
			<li><a href="product.php?platform=all"><b>All</b></a></li>
			<li><a href="product.php?platform=PS4"><b>PlayStation</b></a></li>
			<li><a href="product.php?platform=PC"><b>PC</b></a></li>
			<li><a href="product.php?platform=XBOX"><b>XBOX</b></a></li>
		</ul>
	</div>
	<div id="category">
		<h3>Category</h3>
		<?php
			$sqlCategory = 
			"
				SELECT c.*
				FROM category c
			";
			$resultCat = mysqli_query($conn, $sqlCategory);
			while($rowCat = mysqli_fetch_assoc($resultCat))
			{
		?>
				<p><input type="checkbox" value="<?php echo $rowCat["category_code"] ?>" /><?php echo $rowCat["category_name"] ?></p>
		<?php
			}
		?>
	</div>
</div>