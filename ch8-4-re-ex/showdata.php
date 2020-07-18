<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>whatever</title>
		<style>
			body {
				font-family: segoe, sans serif;
				font-size:18px;
			}
			#output-form {
				width:700px;
				background: rgb(235, 255, 255);
				border: 2px solid rgb(200, 200, 222);
				margin: 0 auto;
				padding: 40px;
			}
			.data {
				margin:10px;
			}
			input, textarea {
				padding:5px;
				border-radius: 4px;
			}
		</style>
	</head>
	<body>
		<?php 
			$DBName = "parysa2_ch8ex4";
			$DBConnect = mysqli_connect("localhost", "", "", $DBName); /* username and password removed */
			
			if ($DBConnect === FALSE)
			echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_errno() . ": " . mysqli_error() .
			"</p>";
			else {
				if (!@mysqli_select_db($DBConnect, $DBName)) {
					echo "<p>There are no interview entries!</p>";
				}
				else {
					$TableName = "interviews";
					$SQLstring = "SELECT * FROM $TableName";
					$QueryResult = @mysqli_query($DBConnect,$SQLstring);
					if (mysqli_num_rows($QueryResult) == 0) { /* might be null */
						echo "<p>There are no interview entries!</p>";
					}
					else {
						echo "<div id='output-form'>";
						echo "<h2>Interview Data:</h2>";
						
						while ($Row = mysqli_fetch_assoc($QueryResult)) { /* if issues try null */
							echo "<br><hr style='width:90%; border-color: rgb(150,150,150)'><br>";
							echo "<div class='data'><b>Record ID:</b> {$Row['recordID']}</div>";
							echo "<div class='data'><b>Interviewers Name:</b> {$Row['interviewersname']}</div>";
							echo "<div class='data'><b>Interviewers Position:</b> {$Row['interviewersposition']}</div>";
							echo "<div class='data'><b>Interviewer Date:</b> {$Row['Interviewdate']}</div>";
							echo "<div class='data'><b>Candidate Name:</b> {$Row['candidatename']}</div>";
							echo "<div class='data'><b>Communication Ability:</b> {$Row['communicationabilities']}</div>";
							echo "<div class='data'><b>Professional Appearance:</b> {$Row['professionalappearance']}</div>";
							echo "<div class='data'><b>Computer Skills:</b> {$Row['computerskills']}</div>";
							echo "<div class='data'><b>Business Knowledge:</b> {$Row['businessknowledge']}</div>";
							echo "<div class='data'><b>Comments:</b> {$Row['comments']}</div>";
						}
						echo "</div>";
					}
				mysqli_free_result($QueryResult);
					
				}
		mysqli_close($DBConnect);
			}
			
		 ?>
	</body>
</html>