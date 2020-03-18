<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8> 
		<title>Wrong Way Airline - Entry</title>
		<link rel="stylesheet" type="text/css" href="assets/wwasitestyle.css" />
		<link   href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script  src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/wwabuttons.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
			
				$("#forms").hide();
				$('table :button').click(function () {
				$("#forms").hide();
					$("#selection").animate({marginLeft: 20},1000,
					function(){
					
					$("#selection").css({"float":'left'});
					$("#forms").show('slide', {direction: 'left'}, 1000);
					})	
				});
				//end of sliders
				
				/*$("#airportForm").submit(function(form){
					form.preventDefault();
					var dataString = $(this).serializeArray();
					var urlLink = $(this).attr('action');
				
					
					$.ajax({
						type: "POST",
						url: urlLink,
						data: dataString,
						dataType: 'JSON',
						cache: false,
						success: function(data){
							if(data.error){alert("error");}
							else{alert("success");}
							},
						beforeSend : function() {alert("attempting to send");}
					});
				});*/
						
						
					

			});
		</script>
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
			
				<div id="selection" class="height">
					<h2>Select Form</h2>
					<table id="table" border ="1">
						<tr>
							<th>
								<input class="button" type="button" value="Add Flight" onclick="Display('flightForm')" />
							</th>
						</tr>
						<tr>
							<th>
								<input class="button" type="button" value="Add Aircraft" onclick="Display('aircraftForm')" />
							</th>
						</tr>
						<tr>
							<th>
								<input class="button" type="button" value="Add Crew" onclick="Display('crewForm')" />
							</th>
						</tr>
						<tr>
							<th>
								<input class="button" type="button" value="Add Cargo" onclick="Display('cargoForm')" />
							</th>
						</tr>
						<tr>
							<th>
								<input class="button" type="button" value="Add Airport" onclick="Display('airportForm')" />
							</th>
						</tr>
					</table>
				</div>
			
				<div id="forms" class="height">
					<form action="php/NewAirport.php" method="post" id="airportForm" style="display:none">
						<h2>New Airport Entry</h2>
						<table  border ="1">
							<tr>
								<th>Airport Code</th>
								<td>
									<input type="text" name="airportCode" maxlength="3" />
								</td>
							</tr>
						
							<tr>
								<th>Airport Name</th>
								<td>
									<input type="text" name="airportName" maxlength="20"/>
								</td>
							</tr>
							
							<tr>
								<th colspan="2">
									<input class="button" type="submit" value="Submit"/>
								</th>
							</tr>
						</table>
					</form>
					
					<form action="php/NewCargo.php" method="post" id="cargoForm" style="display:none">
						<h2>New Cargo Entry</h2>
						<table  border ="1">
							<tr>
								<th>Skid Id Number</th>
								<td>
									<input type="text" name="skidNumber" maxlength="5" />
								</td>
							</tr>
						
							<tr>
								<th>Weight</th>
								<td>
									<input type="text" name="weight" maxlength="7"/>
								</td>
							</tr>
			
							<tr>
								<th>Cargo Content</th>
								<td>
									<textarea name="cargoContent" maxlength="50" rows="3"></textarea>
								</td>
							</tr>
							
							<tr>
								<th colspan="2">
									<input class="button" type="submit" value="Submit"/>
								</th>
							</tr>
						</table>
					</form>
					
					<form action="php/NewCrew.php" method="post" id="crewForm" style="display:none">
						<h2>New Crew Entry</h2>
						<table border="1">
							<tr>
								<th>Pilot</th>
								<td>
									<input type="text" name="pilotName" maxlength="20" />
								</td>
							</tr>
						
							<tr>
								<th>Navigator</th>
								<td>
									<input type="text" name="navigator" maxlength="20" />
								</td>
							</tr>
							
							<tr>
								<th colspan="2">
									<input class="button" type="submit" value="Submit"/>
								</th>
							</tr>
						</table>
					</form>
				
					<form action="php/NewAircraft.php" method="post" id="aircraftForm" style="display:none">
						<h2>New Aircraft Entry</h2>
						<table border="1">
							<tr>
								<th>Tail Number</th>
								<td>
									<input type="text" name="tailNumber" maxlength="5" />
								</td>
							</tr>
						
							<tr>
								<th>Type</th>
								<td>
									<select name="aircraftType">
										<option value="None">Select One</option>
										<option value="Jet">Jet</option>
										<option value="Propeller">Propeller</option>
										<option value="Rotor">Helicopter</option>
									</select> 
								</td>
							</tr>
			
							<tr>
								<th>Fuel Amount</th>
								<td>
									<input type="text" name="fuelAmount" maxlength="7"/>
								</td>
							</tr>
							
							<tr>
								<th colspan="2">
									<input class="button" type="submit" value="Submit"/>
								</th>
							</tr>
						</table>
					</form>
					
					<form action="php/NewFlight.php" method="post" id="flightForm" style="display:none">
						<h2>New Flight Entry</h2>
						<table  border ="1">
							<tr>
								<th>Tail Number</th>
								<td>
									<input type="text" name="tailNumber" maxlength="5" />
								</td>
							</tr>
						
							<tr>
								<th>Pilot</th>
								<td>
									
									<input type="text" name="pilotName" maxlength="20"/>
								</td>
							</tr>
			
							<tr>
								<th>Outgoing (To)</th>
								<td>
									<input type="text" name="outgoing" maxlength="3"/>
								</td>
							</tr>
							
							<tr>
								<th>Incoming(From)</th>
								<td>
									<input type="text" name="incoming" maxlength="3"/>
								</td>
							</tr>
							<tr>
								<th>Skid Id Number</th>
								<td>
									<input type="text" name="skidNumber" maxlength="5" />
								</td>
							</tr>
							<tr>
								<th colspan="2">
									<input class="button" type="submit" value="Submit"/>
								</th>
							</tr>
						</table>
					</form>
					
					
					
					
				</div>
				
				
			</div>

			
			<footer>
				Group Five <span id="copy">&copy;</span>
			</footer>
		</div>		
	</body>
</html>