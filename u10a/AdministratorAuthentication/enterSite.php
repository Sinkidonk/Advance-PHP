<?php

session_start();
//Check to see if session retry is "admit."
if (isset($_SESSION["retry"])&& $_SESSION["retry"] == "admit") {
   //If so, continue.
   echo "Hello ", $_SESSION["name"], "!<br />";
} else {
   header( "Location: adminAuthen.php");
}

