<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8> 
		<title>Wrong Way Airline - Aircrafts</title>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="assets/wwasitestyle.css" />
		
	
	</head>
	
	<body>
		<div id="container">
			<header>
				<h1>Wrong Way Airlines</h1>
			</header>
		
			<section id="navHolder">
				<ul id="nav">
					<li><a href="WWAAbout.php">About Us</a></li>
					<li><a href="WWAEntry.php">New Entry</a></li>
					<li><a href="WWAFlights.php">All Flights</a></li>
					<li><a href="WWAInbound.php">Inbound Flights</a></li>
					<li><a href="WWAOutbound.php">Outbound Flights</a></li>
					<li><a href="WWACargo.php">Cargo</a></li>
					<li><a href="WWAAircrew.php">Air Crew</a></li>
					<li><a href="WWAAircraft.php">Aircrafts</a></li>
					<li><a href="WWASearch.php">Search</a></li>
					<li><a href="WWALogin.php">Log Out</a></li>
				</ul>
			</section>
			
		
			<div id="content">
			
				<div id="results">
				<h2>Aircrafts</h2>
					<?php 
						include ("php/account.php");
						include ("php/connect.php");
						
						$selectAll=("Select * from aircraft");
		
						$result = mysql_query($selectAll) or die(mysql_error());
						
					
						
						echo "<table id='phpTable'>";
						echo "<tr><th style='width: 150px;'>Actions</th>
								<th style='width: 150px;'>Tail Number</th>
								<th style='width: 250px;'>Type</th>
								<th style='width: 150px;'>Fuel</th>";
						 
						while($row = mysql_fetch_array($result))
						{
						
						$aircraftNumber= $row['aircraft_key'];
						$tailNumber= $row['tail_number'];
						$type= $row['type'];
						$fuel= $row['fuel'];
						// Now for each looped row
						 
						echo "<tr>
								<td style='width: 150px;'><a href='AircraftEdit.php?aircraftNumber=".$row['aircraft_key']."'>Edit</a>/<a href='AircraftDelete.php?aircraftNumber=".$row['aircraft_key']."'>Delete</a></td>
								<td style='width: 250px;'>".$tailNumber."</td>
								<td style='width: 250px;'>".$type."</td>
								<td style='width: 150px;'>".$fuel."</td>
							</tr>";
						 
						} // End our while loop
						echo "</table>";
						
					?>
				</div>
			</div>

			
			<footer>
				Group Five <span id="copy">&copy;</span>
			</footer>
		</div>		
	</body>
</html>