<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");



	//all these variables will get the information that is submitted into the forms
	$tailNum = getSafeData(intval($_POST["tailNumber"]));
	$namePilot = getSafeData($_POST["pilotName"]);
	$out = getSafeData($_POST["outgoing"]);
	$in = getSafeData($_POST["incoming"]);
	$skidNum = getSafeData(intval($_POST["skidNumber"]));

	$s = "SELECT * from flight where tail_number = '$tailNum'";

	$data = mysql_query($s) or die(mysql_error());
	 
	if (mysql_num_rows($data) >0 )
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The flight entered exists. Please enter different flight details.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");	
	}
	else 
	{
		$s = "insert into flight(tail_number, pilot, incoming, outgoing, skid_id) values ('$tailNum',  '$namePilot', '$in', '$out', '$skidNum')" ;
	
		mysql_query ( $s ) or print (mysql_error());
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The aircraft entered was saved.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");
	}
	




?>