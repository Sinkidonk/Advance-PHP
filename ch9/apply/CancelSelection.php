<?php
	session_start();
	
	$Body = "";
	$errors = 0;
	if (!isset($_SESSION['internID'])) {
		$Body .= "<p>You have not logged in or registered. " .
		" Please return to the " .
		" <a href='InternLogin.php'>Registration / " .
		" Log In page</a>.</p>\n";
		++$errors; }
		if ($errors == 0) {
			if (isset($_GET['opportunityID']))
				$OpportunityID = $_GET['opportunityID'];
			else {
				$Body .= "<p>You have not selected an opportunity. " . 
				" Please return to the " .
				" <a href='AvailableOpportunities.php?" . SID . "'>Available " .
				" Opportunities page</a>.</p>\n";
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
						$result = @mysqli_select_db($DBName, $DBConnect);
						if ($result === FALSE) {
							$Body .= "<p>Unable to select the database. " .
							"Error code " . mysqli_errno($DBConnect) .
							": " . mysqli_error($DBConnect)
							. "</p>\n";
							++$errors;
							}
						}
					}
					if ($errors == 0) {
						$TableName = "assigned_opportunities";
						$SQLstring = "DELETE FROM $TableName" .
						" WHERE opportunityID=$OpportunityID " .
						" AND internID=" . $_SESSION['internID'] .
						" AND date_approved IS NULL";
						$QueryResult = @mysqli_query($DBConnect, $SQLstring);
						if ($QueryResult === FALSE) {
							$Body .= "<p>Unable to execute the query. " .
							" Error code " . mysqli_errno($DBConnect) .
							": " . mysqli_error($DBConnect) .
							"</p>\n";
							++$errors;
						}
						else {
							$AffectedRows = mysqli_affected_rows($DBConnect);
							if ($AffectedRows == 0)
								$Body .= "<p>You had not previously " .
							" selected opportunity # " .
							$OpportunityID . ".</p>\n";
							else
								$Body .= "<p>Your request for
							opportunity # " .
							" $OpportunityID has been " .
							" removed.</p>";
							}
							mysqli_close($DBConnect);
					}
					
					if ($_SESSION['internID'] > 0)
						$Body .= "<p>Return to the <a href='" .
								"AvailableOpportunities.php?" . SID . "'>" .
								"Available Opportunities</a> page.</p>\n";
					else
						$Body .= "<p>Please <a href='InternLogin.php'>Register " .
								" or Log In</a> to use this page.</p>\n";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cancel Selection</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>College Internship</h1>
		<h2>Cancel Selection</h2>
		
		<?php
		echo $Body;
		?>
	</body>
</html>