<?php 
	include ("php/account.php");	
	include	("php/connect.php");

	if (isset($_GET['flightNumber']) && is_numeric($_GET['flightNumber']))
	{
		$flightNumber = $_GET['flightNumber'];
		
		$result = mysql_query("DELETE FROM flight WHERE flight_key=$flightNumber")
			or die(mysql_error());

		header("Location: WWAInbound.php");
	}
	else
	{
		header("Location: WWAInbound.php");
	}
?>

