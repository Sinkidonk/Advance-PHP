<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Creating Database</title>
		
	</head>
	<body>
		<?php
		echo "<h1>This is working maybe</h1>";
		$DBName = "parysa2_newsletter";
		$DBConnect = mysqli_connect("localhost", "", "");/* username and password removed */
		$sqlDB = "Create database $DBName";
		if ($DBConnect === FALSE)
			echo "<p?Connection error: " . mysql_error() . "</p>\n";
		else {
			if (mysqli_query($DBConnect, $sqlDB) === FALSE)
				echo "<p>Could not create the \"$DBName\" " .
				"database: " . mysqli_error($DBConnect) . 
				"</p>\n";
			else
				mysqli_query($DBConnect, $sqlDB);
				echo "<p>Successfully created the " . "\"$DBName\" database.</p>\n"; 
			mysqli_close($DBConnect);
		}
		
		
		//mysqli_close($DBConnect);
		//		$DBConnect = FALSE;	
		?>
	</body>
</html>