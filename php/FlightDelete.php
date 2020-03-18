<?php 
	include ("account.php");	
	include	("connect.php");

	if (isset($_GET['flightNumber']) && is_numeric($_GET['flightNumber']))
	{
		$flightNumber = $_GET['flightNumber'];

		$result = mysql_query("DELETE FROM flightTable WHERE flight_key=$flightNumber")
			or die(mysql_error());

		header("Location: Inbound.php");
	}
	else
	{
		header("Location: Inbound.php");
	}
?>

