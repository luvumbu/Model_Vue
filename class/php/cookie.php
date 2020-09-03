<?php
$servername = $_SESSION["servername"];
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$dbname = $_SESSION["dbname"];
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$localisation = $_SESSION["localisation"];
if ($localisation == "internet") { // ajoute l'information si l'utilisateur est en production 
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO cookie_all_connexion (cookie_all_connexion_ip)
	VALUES ('$REMOTE_ADDR')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
}
