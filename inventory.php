<?php  

	$host="localhost";
	$user="root";
	$pwd="";
	$db="SAMRO";

	$conn = mysqli_connect($host,$user,$pwd, $db) 
	or die("unable to connect");


	$query = "SELECT * FROM USERNAME";

	$run = mysqli_query($conn,$query);

	if($run){
		
	} else {
		echo "<h1>Something is wrong</h1>";
	}

?>

<?php 
	//account validation 
	if ($_POST['user'] == "a" && $_POST['password'] == "asd") {
		echo $row;
	} else {
		echo "Something is wrong";
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
		<a href="createAcc.html">Create account</a>	<a href="http://localhost/phpmyadmin/">See database</a> <a href="eraseAcc.php"></a>
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


