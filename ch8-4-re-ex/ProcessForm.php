		<?php
		$DBName = "parysa2_ch8ex4";
		$TableName = "interviews";
		$DBConnect = mysqli_connect("localhost", "", "", $DBName); /* username and password removed */
		
		$intName = $_POST['interviewersName'];
		$intPos = $_POST['interviewerPosition'];
		$intDate = $_POST['InterviewDate'];
		$candidate = $_POST['candidateName'];
		$commAbility = $_POST['communicationAbilities'];
		$proAppear = $_POST['professionalAppearance'];
		$compSkills = $_POST['computerSkills'];
		$bizKnow = $_POST['businessKnowledge'];
		$comment = $_POST['comments'];
		/*(interviewersname, interviewersposition, Interviewdate, candidatename, communicationabilities, professionalappearance, computerskills, businessknowledge, comments, recordID)  */
		$sql = "INSERT INTO $TableName VALUES ('$intName', '$intPos', '$intDate', '$candidate', '$commAbility', '$proAppear', '$compSkills', '$bizKnow', '$comment', NULL);";

		$sqlQuery = mysqli_query($DBConnect, $sql);
		
		if ($sqlQuery === FALSE) {
			echo "<p>Connecting error: " . mysqli_error() . "</p>\n";
		}
		else {
			echo "<h2>Woo Hoo</h2>";
			$sqlQuery;
			echo "<p>data entered</p>";
			echo "<p>" . $intName . "</p>";
			echo "<p><a href='showdata.php'>Show interview data</a></p>";
		}
		mysqli_close($DBConnect);
		
		
		?>