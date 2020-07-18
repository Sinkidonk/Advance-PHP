<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Newsletter Subscribers</title>
		
	</head>
	<body>
		<?php
		include ("inc_db_newsletter.php");
		if ($DBConnect != FALSE) {
			$TableName = "subscribers";
			$SQLstring = "SELECT * FROM $TableName";
			$QueryResult = mysqli_query($DBConnect, $SQLstring);
			echo "<table width='100%' border='1'>\n";
			echo "<tr><th>Subscriber ID</th>" .
			"<th>Name</th><th>Email</th>" .
			"<th>Subscribe Date</th>" .
			"<th>Confirm Date</th></tr>\n";
			/*
			while (($Row = mysqli_fetch_row($QueryResult)) !== NULL) {
				echo "<tr><td>{$Row[0]}</td>";
				echo "<td>{$Row[1]}</td>";
				echo "<td>{$Row[2]}</td>";
				echo "<td>{$Row[3]}</td>";
				echo "<td>{$Row[4]}</td></tr>\n";
			};
			*/
			//echo $QueryResult . "before";
			$QueryResult = mysqli_query($DBConnect, $SQLstring);
			//echo $QueryResult . "after";
			echo mysqli_num_rows($QueryResult);
			if (mysqli_num_rows($QueryResult) > 0) {
				// output data of each row
				while($row = mysqli_fetch_row($QueryResult)){
					echo "<tr><td>{$row[0]}</td>";
					echo "<td>{$row[1]}</td>";					
					echo "<td>{$row[2]}</td>";					
					echo "<td>{$row[3]}</td>";					
					echo "<td>{$row[4]}</td></tr>\n";
				}
			}
			else {
				echo "<tr><td>0 result</td>";
				echo "<td> </td>";		
				echo "<td> </td>";		
				echo "<td> </td>";		
				echo "<td> </td></tr>\n";
			}
			echo "</table>\n";
			mysqli_free_result($QueryResult);
			$NumRows = mysqli_num_rows($QueryResult);
			$NumFields = mysqli_num_fields($QueryResult);
			echo "<p>Your query returned the above "
			. " rows and " . mysqli_num_fields($QueryResult)
			. " fields:</p>";
			mysqli_close($DBConnect);
		} else {
			echo "<p>This didn't work</p>";
		}
		?>
	</body>
</html>