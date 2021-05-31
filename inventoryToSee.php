<?php  

	//to check error in php:
	//ini_set('display_errors', '1'); ini_set('html_errors', '1'); error_reporting(E_ALL);

	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "SAMRO";

	$conn = mysqli_connect($host,$user,$pwd, $db) 
	or die("unable to connect");



?>

<!DOCTYPE html>
<html>
<head>
	<title>Ver Inventario</title>
</head>
<body>

	<h1 align="center">Inventory</h1>
	<hr>

	<table border="3" bordercolor="black" align="center">

		<tr>
			<td align="center">Name</td><td align="center">Info. from the object</td><td align="center">Items in the inventory</td><td align="center">Price</td>
		</tr>


		<?php  

			$query = "SELECT NAME, INFO, CANT, PRICE FROM INVENTORY";
			$run = mysqli_query($conn,$query);

			if($run){
				while ($row = $run-> fetch_assoc()) {
					echo "<tr><td align=center>", $row['NAME'], "</td><td align=center>", $row['INFO'], "</td><td align=center>", $row['CANT'], "</td><td align=center>", $row['PRICE'], "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "<h1>Failed to submit data</h1>";
			}

		?>

	</table>

</body>
</html>