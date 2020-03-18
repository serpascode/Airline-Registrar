<?php 
	include ("php/account.php");	
	include	("php/connect.php");

	if (isset($_GET['aircraftNumber']) && is_numeric($_GET['aircraftNumber']))
	{
		$aircraftNumber = $_GET['aircraftNumber'];
		
		$result = mysql_query("DELETE FROM aircraft WHERE aircraft_key=$aircraftNumber")
			or die(mysql_error());

		header("Location: WWAAircraft.php");
	}
	else
	{
		header("Location: WWAAircraft.php");
	}
?>

