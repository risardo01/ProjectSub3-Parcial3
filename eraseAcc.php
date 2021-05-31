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
	<title>Erase an Account</title>
</head>
<body>

	<h1>Welcome to the Erase Account page</h1>
	<hr>

	<form action="" method="post" onsubmit="return check ();">
		<h3>Please write the next informatios about the account that do you want to erase</h3>

		Username: <br>
		<input type="text" name="username" id="username" required>

		<br><br>Password: <br>
		<input type="password" name="psw" id="psw" required><br><br>

		<button type="submit" name="submitBtn">Submit</button>
		
	</form>

	<script type="text/javascript">

		function check () {

			var chec = 0;
			var things = "Please write the next information: \n";

			var user = document.getElementById("username").value;
			var psw = document.getElementById("psw").value;

			user = user.replace(/\s/g, '');
			psw = psw.replace(/\s/g, '');

			if (user.length == 0 && user.length <= 15) {
				things += "Username \n";
				chec += 1;
			} else {
				
			}

			if (psw.length == 0 && user.length <= 30) {
				things += "Password \n";
				chec += 1;
			} else {
				
			}

			if (chec == 0) {
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


	$username = $_POST['username'];
	$psw = $_POST['psw'];

	//MySql code
	$query = "DELETE FROM USERS WHERE USERNAME, PAW = '$username','$psw'";


	//talk to the database
	$run = mysqli_query($conn,$query);


	if($run){
		echo "<h1>Data submitted successfully</h1>";
	}

	else{
		echo "<h1>Some information is incorrect</h1>";
	}

}

?>