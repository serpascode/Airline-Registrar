<?php
$navsection = 'what';
//function valid($flightNumber, $tailNumber, $pilot,$incoming, $outgoing, $skidID)
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8> 
		<title>Wrong Way Airline - Inbound Flights</title>
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>	
		<link rel="stylesheet" type="text/css" href="wwasitestyle.css" />
			
		<script>$(document).ready(function() {

    $('#flightTables tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });

});

</script>
	</head>
	
	<body>
		<div class="navBar" id="container">
			<header>
				<h1>Wrong Way Airlines</h1>
			</header>
		
			<section id="navHolder">
				<ul id="nav">
					<li<?php echo ($navsection == 'what') ? ' class="current"' : ''; ?>><a href="WWAAbout.html">About Us</a></li>
					<li><a href="WWAEntry.html">New Entry</a></li>
					<li><a href="http://web.njit.edu/~lec8/temp/IT490/Inbound.php">Inbound Flights</a></li>
					<li><a href="WWAOutbound.html">Outbound Flights</a></li>
					<li><a href="WWACargo.html">Cargo</a></li>
					<li><a href="WWASearch.html">Search</a></li>
					<li><a href="http://web.njit.edu/~lec8/temp/IT490/WWALoginPage.html">Log Out</a></li>

				</ul>
			</section>
			
		
			<div id="content">

<?php include("includes/navigation.php"); 


include('account.php');
 $dbh = mysql_connect ( $hostname, $username, $password)
			or die ("Unable to connect to MySQL database");
mysql_select_db( $project);
print "connected";

$flightNumber = $_GET['flightNumber'];  
$tailNumber = $_GET['tailNumber'];
		$pilot = $_GET['pilot'];
		$incoming = $_GET['incoming'];
		$outgoing = $_GET['outgoing'];
		$skidID = $_GET['skidID'];

$results = mysql_query("select tailNumber, pilot, incoming, outgoing, skidID from flightTable where flightNumber = $flightNumber");  
$row = mysql_fetch_assoc($results);  
		print "$tailNumber $pilot $incoming $outgoing $skidID";

?>
				<form action="" >
				<input type="hidden" name="flightNumber" value="<?php echo $row["flightNumber"]; ?>"/>

				<table border="1">
				<tr>
				<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
				</tr>
				<tr>
				<td width="179"><b><font color='#663300'>Tailnumber<em>*</em></font></b></td>
				<td><label>
				<input type="text" name="tailNumber" value="<?php echo $row["tailNumber"]; ?>" />
				</label></td>
				</tr>

				<tr>
				<td width="179"><b><font color='#663300'>pilot<em>*</em></font></b></td>
				<td><label>
				<input type="text" name="pilot" value="<?php echo $row["pilot"]; ?>" />
				</label></td>
				</tr>

				<tr>
				<td width="179"><b><font color='#663300'>incoming<em>*</em></font></b></td>
				<td><label>
				<input type="text" name="incoming" value="<?php echo $row["incoming"]; ?>" />
				</label></td>
				</tr>

				<tr>
				<td width="179"><b><font color='#663300'>outgoing<em>*</em></font></b></td>
				<td><label>
				<input type="text" name="outgoing" value="<?php echo $row["outgoing"] ?>" />
				</label></td>
				</tr>

				<tr>
				<td width="179"><b><font color='#663300'>skidid<em>*</em></font></b></td>
				<td><label>
				<input type="text" name="skidID" value="<?php echo $row["skidID"]; ?>" />
				</label></td>
				</tr>


				<tr align="Right">
				<td colspan="2"><label>
				<input type="submit" name="submit" value="submit">
				</label></td>
				</tr>
				</table>
				</form>

<?php
$flightNumber2 = $_GET['flightNumber'];
		$tailNumber2 = intval($_GET['tailNumber']);
		$pilot2 = $_GET['pilot'];
		$incoming2 = $_GET['incoming'];
		$outgoing2 = $_GET['outgoing'];
		$skidID2 = intval($_GET['skidID']);
mysql_query("UPDATE flightTable SET  tailNumber='$tailNumber2' ,pilot='$pilot2', incoming='$incoming2', outgoing='$outgoing2' ,skidID='$skidID2' WHERE flightNumber='$flightNumber'")
				or die(mysql_error());

				header("Location: Inbound.php");
?>

<!--
<?php include("includes/navigation.php"); 

/**
include('account.php');
 $dbh = mysql_connect ( $hostname, $username, $password)
			or die ("Unable to connect to MySQL database");
mysql_select_db( $project);
print "connected";

$flightNumber = $_GET['flightNumber'];
		$tailNumber = intval($_GET['tailNumber']);
		$pilot = $_GET['pilot'];
		$incoming = $_GET['incoming'];
		$outgoing = $_GET['outgoing'];
		$skidID = intval($_GET['skidID']);

print "$tailNumber $pilot $incoming $outgoing $skidID";



$flightNumber = $_POST['flightNumber'];
		$tailNumber = intval($_POST['tailNumber']);
		$pilot = $_POST['pilot'];
		$incoming = $_POST['incoming'];
		$outgoing = $_POST['outgoing'];
		$skidID = intval($_POST['skidID']);

//UPDATE flightTable SET  tailNumber=1234, pilot='Lauren', incoming='AFB', outgoing='NWK', skidID=314 WHERE flightNumber=5


print "$tailNumber $pilot $incoming $outgoing $skidID";
mysql_query("UPDATE flightTable SET  tailNumber='$tailNumber' ,pilot='$pilot' incoming='$incoming', outgoing='$outgoing' ,skidID='$skidID' WHERE flightNumber='$flightNumber'")
				or die(mysql_error());

				header("Location: Inbound.php");
/**if (isset($_POST['submit'])){
	if (is_numeric($_POST['flightNumber'])){

		$flightNumber = $_POST['flightNumber'];
		$tailNumber = mysql_real_escape_string(htmlspecialchars($_POST['tailNumber']));
		$pilot = mysql_real_escape_string(htmlspecialchars($_POST['pilot']));
		$incoming = mysql_real_escape_string(htmlspecialchars($_POST['incoming']));
		$outgoing = mysql_real_escape_string(htmlspecialchars($_POST['outgoing']));
		$skidID = mysql_real_escape_string(htmlspecialchars($_POST['skidID']));

			if ($flightNumber == '' || $tailNumber == '' || $pilot == '' $incoming == '' || $outgoing == '' || $skidID == '' ||){
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Empty')
					window.location.href='http://web.njit.edu/~lec8/temp/IT490/WWAEntry.html'
					</SCRIPT>")
			}
			else{
				mysql_query("UPDATE flightTable SET flightNumber='$flightNumber', tailNumber='$tailNumber' ,pilot='$pilot' incoming='$incoming', outgoing='$outgoing' ,skidID='$skidID' WHERE flightNumber='$flightNumber'")
				or die(mysql_error());

				header("Location: Inbound.php");
			}
	}
	else{

echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Empty')
					window.location.href='http://web.njit.edu/~lec8/temp/IT490/WWAInbound.php'
					</SCRIPT>")	}
}
else{
	if (isset($_GET['flightNumber']) && is_numeric($_GET['flightNumber']) && $_GET['flightNumber'] > 0){

		$flightNumber = $_GET['flightNumber'];
		$result = mysql_query("SELECT * FROM flightTable WHERE flightNumber=$flightNumber")
		or die(mysql_error());
		$row = mysql_fetch_array($result);



		if($row){
			$flightNumber = $row['name'];
			$tailNumber = $row['address'];
			$pilot = $row['city'];
			$incoming = $row['city'];
			$outgoing = $row['city'];
			$skidID = $row['city'];

			valid($id, $name, $address,$city,'');
		}
		else{
			echo "No results!";
		}
	}
	else{
		echo 'Error!';
	}
}


**/


?>
-->


			</div>

			
			<footer>
				Group Five <span id="copy">&copy;</span>
			</footer>
		</div>		
	</body>
</html>


