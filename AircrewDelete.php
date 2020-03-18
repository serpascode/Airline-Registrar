<?php 
	include ("php/account.php");	
	include	("php/connect.php");

	if (isset($_GET['aircrewKey']) && is_numeric($_GET['aircrewKey']))
	{
		$aircrewKey = $_GET['aircrewKey'];
		
		$result = mysql_query("DELETE FROM aircrew WHERE aircrew_key=$aircrewKey")
			or die(mysql_error());

		header("Location: WWAAircrew.php");
	}
	else
	{
		header("Location: WWAAircrew.php");
	}
?>

