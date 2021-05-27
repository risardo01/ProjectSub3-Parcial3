<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventory</title>
</head>
<body>
	

		<h1 align="center">Welcome</h1>

	<p align="center">
		<font size=5>
			<?php echo $_POST['newUser']; ?> 
		</font>
	</p>

	<p align="center">
		<a href="createAcc.html">Create account</a>	<a href="http://localhost/phpmyadmin/">See database</a>
	</p>

	<h1 align="center">Inventory</h1>
	<hr>

	<table border="3" bordercolor="black" align="center">
		<tr>
			<td>Thing 1</td><td>Description of the thing 1</td><td>Price</td>
		</tr>

		<tr>
			<td>Thing 2</td><td>Description of the thing 2</td><td>Price</td>
		</tr>
	</table>

</body>
</html>