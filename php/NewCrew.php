<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");


	//all these variables will get the information that is submitted into the forms
	$namePilot = getSafeData($_POST["pilotName"]);
	$crewNavigator = getSafeData($_POST["navigator"]);
	
	$s = "SELECT * from aircrew where pilot = '$namePilot'";

	$data = mysql_query($s) or die(mysql_error());


	if (mysql_num_rows($data) >0 )
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Pilot entered exists. Please enter different information.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");	
	}
	
	else
	{
		$s = "insert into aircrew(pilot, navigator) values ('$namePilot',  '$crewNavigator')" ;

		mysql_query ( $s ) or print (mysql_error());
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The crew entered was saved.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");

	}
	
?>

