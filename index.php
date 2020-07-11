<!DOCTYPE html>
<html lang="en">
<head id="head">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{title}}</title>
</head>
<body>
	<div id="login">
		<?php
	include("login/login.php");
		?>
</div>
<div id="connexion" :class="display">
		<?php
	include("login/connexion.php");
		?>
</div>
<div id="inscriptions" :class="display">
		<?php
	include("login/inscriptions.php");
		?>
</div>
<?php 
//	include("app.php");	
	include("link.php");
	//<script src="vue.js"></script>
?>
<script src="login/connexion.js"></script>
<script src="login/inscription.js"></script>
<script src="login/login.js"></script>
<style>
	.display-none{
		display: none;
	}
	.width-70{
		width: 70%;
		margin: auto;
	}
</style>
</body>
</html>