<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>MySQL Server Infomation</title>
		
	</head>
	<body>
		<h1>MySQL DataBase Server Infomation</h1>
		
		<?php
		
		
		$DBConnect = mysqli_connect("localhost", "", ""); /* username and password removed */
		
		echo "<p>MySQL Client Version: " . mysqli_get_client_info() . "</p>\n";
		
		if ($DBConnect === FALSE)
			echo "<p>Connection failed.</p>\n";
		else {
			echo "<p>MySQL connection: " . mysqli_get_host_info($DBConnect) . "</p>\n";
			echo "<p>MySQL protocol version: " . mysqli_get_proto_info($DBConnect) . "</p>\n";
			echo "<p>MySQL server version: " . mysqli_get_server_info($DBConnect) . "</p>\n";
			mysqli_close($DBConnect);
		}
		?>
		
	</body>
</html>