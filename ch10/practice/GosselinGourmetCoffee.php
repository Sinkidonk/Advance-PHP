<?php 
error_reporting(E_ALL);
ini_set('display_error', 1);
	session_start();
	//require_once("inc_OnlineStoreDB.php");
	require_once("class_OnlineStore.php");
	
	$storeID = "COFFEE";
	$storeInfo = array();

	if (class_exists("OnlineStore")) {
		if (isset($_SESSION['currentStore']))
			$Store = unserialize($_SESSION['currentStore']);
		else {
			$Store = new OnlineStore();
		}
		$Store->setStoreID($storeID);
		$storeInfo = $Store->getStoreInformation();
		if (isset($_GET['ItemToAdd']))
			$Store->addItem();
	}
	else {
		$ErrorMsgs[] = "The OnlineStore class is not available!";
		$Store = NULL;
	}

?>

<!DOCTYPE html>

<html>
	<head>
		<title><?php echo $storeInfo['name']; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo $storeInfo['css_file']; ?>" />
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1><?php echo htmlentities($storeInfo['name']); ?></h1>
		<h2><?php echo htmlentities($storeInfo['description']); ?></h2>
		<p><?php echo htmlentities($storeInfo['welcome']); ?></p>
	
		<?php
			$Store->getProductList();
			$_SESSION['currentStore'] = serialize($Store);
		/*
		if ($Store !== NULL)
			echo "<p>Successfully instantiated an object of the OnlineStore class.</p>\n";
		
		if (count($ErrorMsgs)==0) {
			$SQLstring = "SELECT * FROM inventory WHERE storeID='COFFEE'";
			$QueryResult = $DBConnect->query($SQLstring);
			if ($QueryResult === FALSE)
				$ErrorMsgs[] = "<p>Unable to perform the query. " .
				"<p>Error code " . $DBConnect->errno .
				": " . $DBConnect->error . "</p>\n";
			else {
				echo "<table width='100%'>\n";
				echo "<tr><th>Product</th><th>Description</th>" .
				"<th>Price Each</th></tr>\n";
				while (($Row = $QueryResult->fetch_assoc()) !== NULL) {
					echo "<tr><td>" . htmlentities($Row['name']) . "</td>\n";
					echo "<td>" . htmlentities($Row['description']) . "</td>\n";
					printf("<td>$%.2f</td></tr>\n", $Row['price']);
				}
				echo "</table>";
			}
		}
		
		if (count($ErrorMsgs)) {
			foreach ($ErrorMsgs as $Msg)
			echo "<p>" . $Msg . "</p>\n";
		}
		*/
?>

	</body>
</html>