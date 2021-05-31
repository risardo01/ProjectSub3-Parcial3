<?php
//connection to the server

//ini_set('display_errors', '1'); ini_set('html_errors', '1'); error_reporting(E_ALL);

$host="localhost";
$user="root";
$pwd="";
$db="SAMRO";

$conn = mysqli_connect($host,$user,$pwd,$db) 
or die("unable to connect");


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Erase object</title>
</head>
<body>

	<h1>Welcome to the erase object page</h1>
	<hr>

	<form action="" method="post" onsubmit="return check ();">
		<h3>Please write the next information about the object that do you want to erase</h3>

		Name of the product: <br>
		<input type="text" name="name" id="username" placeholder="Name" required><br><br>
		Price of the item:<br>
		<input type="number" name="price" id="price" placeholder="Price" required>
		
		<br><br>

		<button type="submit" name="submitBtn">Submit</button>
		
	</form>

	<script type="text/javascript">

		function check () {

			var chec = 0;

			var user = document.getElementById("username").value;
			var price = document.getElementById("price").value;

			user = user.replace(/\s/g, '');

			if (user.length == 0 && user.length <= 15) {
				chec += 1;
			} else {
				
			}

			if (price.length == 0 && price.length <= 15) {
				chec += 1;
			} else {
				
			}

			if (chec == 0) {
				return true;
			} else {
				alert("Something is wrong with the information");
				return false;
			}

		}

	</script>
</body>
</html>

<?php 

if(isset($_POST['submitBtn'])) {


	$name = $_POST['name'];
	$price = $_POST['price'];

	//MySql code
	$query = "DELETE FROM INVENTORY WHERE NAME = '$name' AND PRICE = '$price'";


	//talk to the database
	$run = mysqli_query($conn,$query);


	if ($run) {
		echo "<h1>Data submitted successfully</h1>";
	} else {
		echo "<h1>Some information is incorrect</h1>";
	}

}

?>