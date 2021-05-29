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
	<title>Create new object</title>
</head>
<body>

	<form action="" method="post" onsubmit="return check();">

		<h1 align="center">New Object Menu</h1>
		<hr>

		<font>
			<p align="center">
				Name of the product:<br>
			<input id="name" type="Text" name="objectName" placeholder="Product name" required>
			<br>
			</p>


			<p align="center">
				Write the description of the object:<br>
			<textarea id="textarea" name="description" maxlength="1000" placeholder="No more of 1000 characters" minlength="6" rows="8" cols="40" required></textarea>
			<br>
			</p>


			<p align="center">
				Number of products avaible:<br>
			<input type="Number" name="cant" maxlength="11" required>
			<br>
			</p>


			<p align="center">
				Price :<br>
			<input type="Number" name="price" maxlength="4" required>
			<br>
			</p>



			<p align="center">
				<button type="submit" name="submitBtn">Create</button>
			</p>

			<a href="inventory.php">Go Back</a>
		</font>

	</form>

	<script type="text/javascript">

	//validation of the data given on the form
		function check() {

			var chec = 0;
			var things = "Some information is write incorrectly: \n";

			var name = document.getElementById("name").value;
			var info = document.getElementById("textarea").value;

			name = name.replace(/\s/g, '');
			info = info.replace(/\s/g, '');

			if (name.length == 0 && name.length <= 2) {
				things += "Name of the product \n";
				chec += 1;
			} else {
				
			}

			if (info.length == 0 || info.length <= 6) {
				things += "Information of the product \n";
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

		$name = $_POST['objectName'];
		$info = $_POST['description'];
		$cant = $_POST['cant'];
		$price = $_POST['price'];

		//MySql code
		$query = ("INSERT INTO INVENTORY (NAME, INFO, CANT, PRICE) VALUES ('$name', '$info', '$cant', '$price')");

		//talk to the database
		$run = mysqli_query($conn,$query);

		if($run){
			echo "<h1>Data submitted successfully</h1>";
		} else {
			echo "<h1>Failed to submit data</h1>";
		}

	}
?>