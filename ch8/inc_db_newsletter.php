<?php
echo "<h1>This is working maybe</h1>";
		$DBName = "parysa2_newsletter";
		$DBConnect = mysqli_connect("localhost", "", "", $DBName); /* username and password removed */
		if ($DBConnect === FALSE)
			echo "<p?Connection error: " . mysqli_error() . "</p>\n";
		else {
			if (@mysqli_select_db($DBName, $DBConnect) === FALSE) {
				echo "<p>Could not create the \"$DBName\" " .
				"database: " . mysqli_error($DBConnect) . 
				"</p>\n";
				mysqli_close($DBConnect);
				$DBConnect = FALSE;
			}
		}
		?>