<?php
$localisation = ""; // initiallisation de la variable
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "Localhost" || $REMOTE_ADDR = "127.0.0.1") {
	include("class/php/bdd_local.php"); // ajout des fichier local
	$localisation = "localhost"; // atribution delement variable
	$_SESSION["REMOTE_ADDR"] = $localisation;
	$_SESSION["country"] = "country_local";
	$_SESSION["city"] = "city_local";
} else {
	include("class/php/bdd_prod.php"); // ajout des fichier prod
	$localisation = "internet"; // atribution delement variable
	$_SESSION["REMOTE_ADDR"] = $REMOTE_ADDR;
	$_SESSION["country"] = $query['country'];
	$_SESSION["city"] = $query['city'];
	$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
	$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip)); //connection au serveur de ip-api.com et recuperation des données
	if ($query && $query['status'] == 'success') {	//code avec les variables
		echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
	}
}
