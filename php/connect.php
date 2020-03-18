<?php
	include ("account");

	//account connection
	$dbh = mysql_connect($hostname, $username, $password)
			or die ("Unable to connect to MySql Database");
			

	//database selection
	mysql_select_db($project);

?>