<?php
header("Access-Control-Allow-Origin: *");
// Exemple d'execution du code
$servername = "localhost";
$username =$_POST["login"] ; // login utilisateur
$password =$_POST["password"] ;// mot de passe utilisateur

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
