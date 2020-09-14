<?php
$servername = "localhost";
$username = "u481158665_bokonzi_cops";
$password = "v3p9r3e@59A";
$dbname = $username;
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
$localisation = "internet"; // atribution delement variable 
// $_SESSION["country"] = $query['country'];
// $_SESSION["city"] = $query['city'];
$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip)); //connection au serveur de ip-api.com et recuperation des données
if ($query && $query['status'] == 'success') {	//code avec les variables
//	echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
	$country=$query['country'];
	$city=$query['city'];
} 

 
?>