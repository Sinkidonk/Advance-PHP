		<?php
		$DBName = "parysa2_trying";
		$DBConnect = mysqli_connect("localhost", "", "", $DBName); /* username and password removed */
		

				echo "<p>Could not create the \"$DBName\" " .
				"database: " . mysqli_error($DBConnect) . 
				"</p>\n";
		//mysqli_close($DBConnect);
		//		$DBConnect = FALSE;	
		?>