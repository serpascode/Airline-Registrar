<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");
	
	$tailNumber = getSafeData($_POST["tailNumber"]);
	$airportCode = getSafeData($_POST["airportCode"]);
	$pilotName = getSafeData($_POST["pilotName"]);
	$skidNumber = getSafeData($_POST["skidNumber"]);
	
	$s = "SELECT * from flight where tail_number = '$tailNum'";


?>