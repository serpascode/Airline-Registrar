<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");
	
	//all these variables will get the information that is submitted into the forms
	$tailNum = getSafeData(intval($_POST["tailNumber"]));
	$typeAircraft = getSafeData($_POST["aircraftType"]);
	$amountFuel = getSafeData(intval($_POST["fuelAmount"]));
	
	$s = "SELECT * from aircraft where tail_number = '$tailNum'";

	$data = mysql_query($s) or die(mysql_error());
 

	if (mysql_num_rows($data) >0 )
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The tail number entered exists. Please enter a different tail number.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");	
	}
	else 
	{
		$s = "insert into aircraft(tail_number, type, fuel) values ('$tailNum',  '$typeAircraft', '$amountFuel')" ;

		mysql_query ( $s ) or print (mysql_error());
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The aircraft entered was saved.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");
	}
?>