<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Select Test</title>
		
	</head>
	<body>
		<?php
		include ("inc_db_newsletter.php");
		if ($DBConnect != FALSE) {
			echo "<p>Selected the \"$DBName\" database</p>\n";
			echo "<p>I am here</p>";
			mysqli_close($DBConnect);
		} else {
			echo "<p>This didn't work</p>";
		}
		?>
	</body>
</html>