<!DOCTYPE html>
<html>
<head>
	<title>BULLs GAMING | Admin</title>
<link rel="stylesheet" type="text/css" href="design.css">
<style type="text/css">
.main
{
	width: 100%;
	margin-bottom: 20px
	overflow: auto;
}
.left
{	
	font-size: 1.5em;
	float: left;
	margin: 30px;
}
#reference
{
	display: inline-block;
	padding: 10px 10px;
	border-right: 1px solid silver;
}
#reference:hover
{
	background-color: #8CC63F;
}
#reference a
{
	text-decoration: none;
	color: black;
}
#reference a:hover
{
	color: white;
}
.right
{
	margin-bottom: 50px;
	clear: both;
}
.right table 
{	
	font-size: 1.2em;
	border-spacing: 20px;
}
.right td input[type=text], [type=date], [type=number]
{
	padding: 5px;
}
button
{
	height: 30px;
	font-size: 1em;
	margin: 0px 0px 10px 0px;
	background-color: #8CC63F;
	border: 0px;
	color: white;
}
button:hover
{
	filter:brightness(80%);
	cursor: pointer;
}
</style>
</head>
<body>
	<div class="mainwrapper">
		<?php require 'html/header.html'; ?>
		<div class="main">
			<div class="left">
				<div id="reference">
					<a href="adminpage.html">Overall Statistics</a>
				</div>
				<div id="reference">
					<a href="aorderhistory.html">Order History</a>
				</div>
				<div id="reference">
					<a href="aproduct.html">Product</a>
				</div>
				<div id="reference">
					<a href="astaff.html">Staff</a>
				</div>
			</div>
			<div class="right">
				<h1>Edit Product</h1>
					<table>
						<tr>
							<td>Product ID</td>
							<td><input type="text" name="idfrm" maxlength="7" value="PS4A031" readonly /></td>
						</tr>
						<tr>
							<td>Product Name</td>
							<td><input type="text" name="namefrm" maxlength="100" size="50" value="Valkyrie Revolution" readonly /></td>
						</tr>
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="imagefrm" accept=".jpg,.png"/></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td>RM <input type="text" maxlength="6" readonly value="159.00"/></td>
						</tr>
						<tr>
							<td>Product Stock</td>
							<td><input type="number" name="stock" readonly value="10" /></td>
						</tr>
						<tr>
							<td>Product Platform</td>
							<td>
								<select name="platform">
									<option value="0">Please Choose Platform</option>
									<option value="1" selected>PlayStation</option>
									<option value="2">XBox</option>
									<option value="3">PC</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Product Category</td>
							<td>
								<input type="checkbox" name="cat" value="1"/>FPS
								<input type="checkbox" name="cat" value="2"/>Role-Playing
								<input type="checkbox" name="cat" value="3"/>Action
								<input type="checkbox" name="cat" value="4"/>Strategy
								<input type="checkbox" name="cat" value="5"/>Stimulation
								<input type="checkbox" name="cat" value="6" checked />Adventure
								<input type="checkbox" name="cat" value="7"/>Sports & Racing
							</td>
						</tr>
						<tr>
							<td>Product Release Date</td>
							<td><input type="date" name="proreleasedate"/></td>
						</tr>
						<tr>
							<td>Product Publisher</td>
							<td><input type="text" name="publisherfrm" maxlength="50" value="SEGA" readonly /></td>
						</tr>
					</table>
					<a href="aproduct.html"><button name="addbtn">SAVE EDIT</button></a>
			</div>
		</div>
		<?php require 'html/footer.html' ?>
	</div>
</body>
</html>