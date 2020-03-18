<?php
	include ("account.php");
	include ("connect.php");
	include ("getSafeData.php");
	
	$username = getSafeData($_POST["username"]);
	$password = getSafeData($_POST["password"]);

	$login_sql = "SELECT * from user where user = '$username' and password = md5('$password')";

	$data = mysql_query($login_sql)
		or die(mysql_error());

	if (mysql_num_rows($data) >0 )
	{
		//FORWARDS IT IF YOU ARE ALLOWED ACCESS
		header("Location: http://web.njit.edu/~lms4/it490/project/WWAAbout.php");
	}
	else 
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Please enter a valid username and password.')
				window.location.href='http://web.njit.edu/~lms4/it490/project/WWALogin.php'
				</SCRIPT>");	
	}

?>

