<?php
session_start();
$Body = "";
$errors = 0;
$InternID = 0;
if (!isset($_SESSION['internID'])) {
 $Body .= "<p>You have not logged in or registered. " .
 " Please return to the <a href='InternLogin.php'>Registration / " .
 " Log In page</a>.</p>";
 ++$errors;
}
if ($errors == 0) {
 if (isset($_GET['opportunityID']))
 $OpportunityID = $_GET['opportunityID'];
 else {
 $Body .= "<p>You have not selected an opportunity. " .
 " Please return to the " .
 " <a href='AvailableOpportunities.php?" . SID . "'>Available " .
 " Opportunities page</a>.</p>";
 ++$errors;
 } 
}

if ($errors == 0) {
	$DBName = "parysa2_internships";
	$DBConnect = mysqli_connect("localhost", "", "", $DBName); /* username and password removed */
	if ($DBConnect === FALSE) {
		$Body .= "<p>Unable to connect to the
		database " .
		" server. Error code " . mysqli_errno() . ": " .
		mysqli_error() . "</p>\n";
		++$errors;
		}
		else {
			$DBName = "parysa2_internships";
			$result = mysqli_select_db($DBConnect, $DBName);
			if ($result === FALSE) {
				$Body .= "<p>Unable to select the database. " .
				"Error code " . mysqli_errno($DBConnect) .
				": " . mysqli_error($DBConnect)
				. "</p>\n";
				++$errors;
			}
		}
}

$DisplayDate = date("l, F j, Y, g:i A");
$DatabaseDate = date("Y-m-d H:i:s");
if ($errors == 0) {
 $TableName = "assigned_opportunities";
 $SQLstring = "INSERT INTO $TableName " .
 " (opportunityID, internID, " .
 " date_selected) VALUES " .
 " ($OpportunityID, " .
 $_SESSION['internID'] . ", '$DatabaseDate')";

 $QueryResult = mysqli_query($DBConnect, $SQLstring);
 if ($QueryResult === FALSE) {
 $Body .= "<p>Unable to execute the query. " .
 " Error code " . mysqli_errno($DBConnect) .
 ": " . mysqli_error($DBConnect) .
 "</p>\n";
 ++$errors;
 }
 else {
 $Body .= "<p>Your request for opportunity# " .
 " $OpportunityID has been entered " .
 " on $DisplayDate.</p>\n";
 }
 mysqli_close($DBConnect);
}

if ($_SESSION['internID'] > 0)
 $Body .= "<p>Return to the <a href='AvailableOpportunities.php?" . SID . "'>" .
  "Available Opportunities</a> page.</p>\n";
else
 $Body .= "<p>Please <a href='InternLogin.php'>Register " .
 " or Log In</a> to use this page.</p>\n";
 
if ($errors == 0)
 setcookie("LastRequestDate", urlencode($DisplayDate), time()+60*60*24*7);
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Available Opportunities</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>College Internship</h1>
		<h2>Available Opportunities</h2>
		
		<?php echo $Body; ?>
	</body>
</html>