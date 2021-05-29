<?php

$host="localhost";
$user="root";
$pwd="";
$db="SAMRO";

$conn = mysqli_connect($host,$user,$pwd,$db) 
or die("unable to connect");


?>

<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="css/loginPage.css">
</head>
<body>

	<h1>Create Account</h1>

	<form action="" method="post" onsubmit="return check ();">
		
		<label>Write your user</label>
		<input id="user" type="text" name="newUser" required>

		<label>Write your password</label>
		<input id="password" type="password" name="newPas" required>

		<button type="submit" name="createAccBtn">Create</button> <a href="inventory.php">Go Back</a>

	</form>

	<script type="text/javascript">
		//function to check if the data is correctly
		function check () {

			var chec = 0;
			var things = "Some information is write incorrectly: \n";

			var user = document.getElementById("user").value;
			var pss =  document.getElementById("password").value;

			//eliminate all the blank spaces 
			user = user.replace(/\s/g, '');
			pss = pss.replace(/\s/g, '');

			if (user.length == 0 && user.length <= 15) {
				things += "User \n";
				chec += 1;
			} else {
				
			}

			if (pss.length == 0 && pss.length <= 30) {
				things += "Password";
				chec += 1;
			} else {
				
			}


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

if(isset($_POST['createAccBtn'])) {

	$username = $_POST['newUser'];
	$pssUser = $_POST['newPas'];

	//MySql code
	$query = ("INSERT INTO USERS (USERNAME, PAW) VALUES ('$username', '$pssUser')");

	//talk to the database
	$run = mysqli_query($conn,$query);

	if($run){
		echo "<h1>Data submitted successfully</h1>";
	}

	else{
		echo "<h1>Failed to submit data</h1>";
	}
}

?>