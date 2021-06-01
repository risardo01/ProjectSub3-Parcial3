<?php
//connection to the server

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
	<title>Modify object</title>
	<link rel="stylesheet" type="text/css" href="css/loginPage.css">
</head>
<body>
	
	<h1 align="center">New Object Menu</h1>
	<hr>

	<form action="" method="post" onsubmit="return check();">


		<font>
			<h2 align="center">Last Information</h2>
			<p align="center">
				Last product name:<br>
			<input type="text" name="name1" placeholder="Last Name" required><br>
			</p>

			<p align="center">
				Last product price:<br>
			<input type="number" name="price1" placeholder="Last Price" required><br>
			</p>

			<hr>

			<h2 align="center">New Information</h2>
			<p align="center">
				Product name:<br>
			<input id="name" type="Text" name="objectName" placeholder="Product name" required>
			<br>
			</p>


			<p align="center">
				Object description:<br>
			<textarea id="textarea" name="description" maxlength="1000" placeholder="No more of 1000 characters" minlength="6" rows="8" cols="40" required></textarea>
			<br>
			</p>


			<p align="center">
				Objects avaible:<br>
			<input type="Number" name="cant" maxlength="11" required>
			<br>
			</p>


			<p align="center">
				Price:<br>
			<input type="Number" name="price" maxlength="4" required>
			<br>
			</p>



			<p align="center">
				<button type="submit" name="submitBtn">Create</button>
			</p>

		</font>

	</form>

	<script type="text/javascript">

	//validation of the data given on the form
		function check() {

			var chec = 0;
			var things = "Some information is write incorrectly: \n";

			var name = document.getElementById("name").value;
			var info = document.getElementById("price").value;

			name = name.replace(/\s/g, '');

			if (name.length == 0 && name.length <= 2) {
				things += "Name of the product \n";
				chec += 1;
			} else {
				
			}

			if (info.length == 0 && info.length <= 2) {
				things += "Name of the product \n";
				chec += 1;
			} else {
				
			}

			//alert
			if (chec == 0 ) {
				return true;
			} else {
				alert(things);
				return false;
			}

		}
		
	</script>

</body>
</html>

<?php

	
	if(isset($_POST['submitBtn'])) {

		$name1 = $_POST['name1'];
		$price1 = $_POST['price1'];

		$name = $_POST['objectName'];
		$info = $_POST['description'];
		$cant = $_POST['cant'];
		$price = $_POST['price'];

		//MySql code
		$query = ("UPDATE INVENTORY SET NAME = '$name', INFO = '$info', CANT = '$cant', PRICE = '$price' WHERE NAME = '$name1' AND PRICE = '$price1'");

		//talk to the database
		$run = mysqli_query($conn,$query);

		if($run){
			echo "<h1>Data submitted successfully</h1>";
		} else {
			echo "<h1>Failed to submit data</h1>";
		}

	}
?>