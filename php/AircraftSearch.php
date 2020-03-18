<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");
	
	$tailNum = getSafeData(intval($_POST["tailNumber"]));
	$typeAircraft = getSafeData($_POST["aircraftType"]);
	
	
?>