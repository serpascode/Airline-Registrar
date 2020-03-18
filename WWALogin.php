<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Wrong Way Airline Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	
		<link rel="stylesheet" type="text/css" href="assets/wwaloginstyle.css" />
	</head>
	
	<body>
	<div id="loginArea">
		<h1>Wrong Way <br/>Airlines</h1>
		<p>Where the wrong direction is the right one</p>
		<form action="php/Login.php" method="post">
	
			<table border ="1" cellpadding="4">
			<!--Row one-->
			<tr>
				<th>Date and Time</th>
				<td>
					<?php 
					echo date("m/d/Y")."<br />";
					echo date("g:i:s");
					?>
				</td>
			</tr>
			<!-- Row two -->
			<tr>
				<th>Account:</th>
				<td>
					<input type="text" name="username" maxlength="30" value=""/>
				</td>
			</tr>
			<!-- Row three -->
			<tr>
				<th>Password:</th>
				<td>
					<input type="password" name="password" maxlength="30" value=""/>
				</td>
			</tr>
			<!-- checkbox Row four-->
			<tr>
				<th id="remember">Remember Account Info?</th>
				<td>
					<input type="checkbox" value="true" id="box"></input>
				</td>
			</tr>
			<!-- Row five -->
			<tr>
				<td>
					<input type="submit" value="Submit" id="button"></input>
				</td>
			</tr>
			</table>
		</form>
	</div>
	</body>
</html>
