<?php
//  session_start() ;  
$localisation = "";
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "Localhost" || $REMOTE_ADDR = "127.0.0.1") {
	$localisation = "localhost";
	include("class/php/bdd_local.php");
} else {
	$localisation = "internet";
	include("class/php/bdd_local.php");
	$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
	$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip)); //connection au serveur de ip-api.com et recuperation des données
	if ($query && $query['status'] == 'success') {	//code avec les variables
		//echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
	}
}
