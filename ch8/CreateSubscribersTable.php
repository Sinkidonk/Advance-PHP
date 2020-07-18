<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Subscribers Table</title>
</head>
<body>


<?php 
include("inc_db_newsletter.php"); 
if ($DBConnect !== FALSE) { 
    $TableName = "subscribers"; 
    $SQLstring = "SHOW TABLES LIKE '$TableName'"; 
    $QueryResult = @mysqli_query($DBConnect, $SQLstring); 
     
    if (mysqli_num_rows($QueryResult) == 0) { 
        $SQLstring = "CREATE TABLE subscribers (subscriberID 
            SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(80), email VARCHAR(100), 
            subscribe_date DATE, 
            confirmed_date DATE)"; 
        $QueryResult = @mysqli_query($DBConnect, $SQLstring); 
        if ($QueryResult === FALSE) 
            echo "<p>Unable to create the subscribers table.</p>" 
            . "<p>Error code " . mysqli_errno($DBConnect) 
            . ": " . mysqli_error($DBConnect) . "</p>"; 
        else 
			mysqli_query($SQLstring, $DBConnect); 
            echo "<p>Successfully created the " 
            . "subscribers table.</p>"; 
    } 
    else 
        echo "<p>The Subscribers table already 
        exists.</p>"; 
        ((is_null($___mysqli_res = mysqli_close($DBConnect))) ? false : $___mysqli_res); 
} 
?> 
</body>
</html>