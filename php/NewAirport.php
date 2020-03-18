<?php
	session_start();

	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");
	

	//all these variables will get the information that is submitted into the forms
	$codeAirport = getSafeData($_POST["airportCode"]);
	$nameAirport = getSafeData($_POST["airportName"]);


	$s = "SELECT * from airport where airport_name = '$nameAirport' and airport_code = '$codeAirport'";

	$data = mysql_query($s) or die(mysql_error());


	if (mysql_num_rows($data) >0)
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('That Airport exists. Please enter another Airport.')
				window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
				</SCRIPT>");	
	}
	
	else 
	{
		$s = "insert into airport(airport_name, airport_code) values ('$nameAirport',  '$codeAirport')" ;

		mysql_query ( $s ) or print (mysql_error());
		
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('The airport entered was saved.')
				window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
				</SCRIPT>");
	}
?>