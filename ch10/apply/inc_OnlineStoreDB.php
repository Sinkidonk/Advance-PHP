<?php
error_reporting(E_ALL);
ini_set('display_error', 1);
	$ErrorMsgs = array();
	//$DBConnect = @new mysqli("http://apollo.gtc.edu", "parysa2", "7Nxdz16FrD", "parysa2_online_stores");
	$DBConnect = @new mysqli("localhost", "parysa2", "7Nxdz16FrD", "parysa2_online_stores");
	if ($DBConnect->connect_errno)
		$ErrorMsgs[] = "Unable to connect to the database server." .
			" Error code " . $DBConnect->connect_errno 
			. ": " . $DBConnect->connect_error;
	//else 
	//	echo "got connect";

?>