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

<?php 

	$username = $_POST['user'];
	$ps = $_POST['password'];

	//account validation (here is the problem)
	$query = "SELECT * FROM USERS WHERE USERNAME = '$username' AND PAW = '$ps'";

	$run = mysqli_query($conn,$query);

	$row = mysqli_fetch_array($run);

	$countp = $row['PAW'];
	$countu = $row['USERNAME'];

	if($countp > 0 && $countu > 0){
    
    }else{
    	echo "Invalid username and password <br>";
    	echo '<a href="loginPage.html">Back</a>';
    	exit();
    }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventory</title>
	<link rel="stylesheet" type="text/css" href="css/inventory.css">
</head>
<body>
	

	<h1 align="center">Welcome</h1>

	
	<p align="center">
		<a href="createAcc.php">Create account</a>	<a href="eraseAcc.php">Erase account</a><br>
		<a href="http://localhost/phpmyadmin/">Go to database</a><br>
		<a href="newObj.php">New object</a>	<a href="eraseObj.php">Erase object</a>	<a href="modifyObj.php">Modify an object</a>
	</p>

	
	<h1 align="center">Inventory</h1>
	<hr>

	<table border="3" bordercolor="white" align="center">

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


