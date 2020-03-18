<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");

	//all these variables will get the information that is submitted into the forms
	$numberSkid = getSafeData(intval($_POST["skidNumber"]));
	$cargoWeight = getSafeData(intval($_POST["weight"]));
	$contentCargo = getSafeData($_POST["cargoContent"]);

	$s = "SELECT * from cargo where skid_id = '$numberSkid'";

	$data = mysql_query($s) or die(mysql_error());
 

	if (mysql_num_rows($data) >0 )
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The skid number entered exists. Please enter a different skid number.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");	
	}
		
	else 
	{

		$s = "insert into cargo(skid_id, weight, description) values ('$numberSkid',  '$cargoWeight', '$contentCargo')" ;

		mysql_query ( $s ) or print (mysql_error());
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The cargo entered was saved.')
					window.location.href='http://web.njit.edu/~lms4/it490/project/WWAEntry.php'
					</SCRIPT>");
	}
?>