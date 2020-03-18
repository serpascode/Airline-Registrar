<?php 
	include ("php/account.php");	
	include	("php/connect.php");

	if (isset($_GET['cargoKey']) && is_numeric($_GET['cargoKey']))
	{
		$cargoKey = $_GET['cargoKey'];
		
		$result = mysql_query("DELETE FROM cargo WHERE cargo_key=$cargoKey")
			or die(mysql_error());

		header("Location: WWACargo.php");
	}
	else
	{
		header("Location: WWACargo.php");
	}
?>

