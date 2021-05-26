<!DOCTYPE html>
<html>
<head>
	<title>Gracias</title>
</head>
<body>
	<a href="loginPage.html">Regresar</a>
</body>
</html>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "SAMRO";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn) {
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['createAccBtn']))
{
	$username = $_POST['newUser'];
	$pssUser = $_POST['newPas'];

	$sql = ("INSERT INTO USERS (USERNAME, PAW) VALUES ('$username', '$pssUser')") or die ($mysqli->error);
}

?>