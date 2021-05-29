<?php  

	$host="localhost";
	$user="root";
	$pwd="";
	$db="SAMRO";

	$conn = mysqli_connect($host,$user,$pwd, $db) 
	or die("unable to connect");


	$query = "SELECT * FROM USERS";

	$run = mysqli_query($conn,$query);

	if($run){
		
	} else {
		echo "<h1>Something is wrong</h1>";
	}

	$print = mysqli_fetch_array($run);

?>

<?php 
	//account validation 
	if ($_POST['user'] == "a" && $_POST['password'] == "asd") {
		echo $print;
	} else {
		echo "You shouldn't be here";
		exit();
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inventory</title>
</head>
<body>
	

	<h1 align="center">Welcome</h1>

	
	<p align="center">
		<a href="createAcc.php">Create account</a>	<a href="http://localhost/phpmyadmin/">See database</a> <a href="eraseAcc.php"></a>	<a href="newObj.php">New object</a>
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


