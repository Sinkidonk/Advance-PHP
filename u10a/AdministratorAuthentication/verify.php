<?php

session_start();
//Connect to the ClassRegistration database
include_once "config.php";

$connection = mysqli_connect(HOST, USER, PASS, DATABASE);
if (!$connection) {
   echo "Cannot connect to MySQL. " . mysqli_connect_error();
   exit();
} //Remove white space, check for blank, and remove special characters
if (($userid = trim($_POST['userid'])) == '') {

   $_SESSION["errmsg"] = 1;
   goto tryagain;
} else {
   $userid = mysqli_real_escape_string($connection, $userid);
}
if (($userPasswd = trim($_POST['passwd'])) == '') {
   $_SESSION["errmsg"] = 2;
   goto tryagain;
} else {
   $userPasswd = mysqli_real_escape_string($connection, $userPasswd);
}
//Encrypt the password using sha1
$encryptpasswd = sha1($userPasswd);

//See if match in the administrator table
$query = "SELECT admin_id, admin_password, admin_name FROM administrator WHERE admin_id='$userid' AND admin_password='$encryptpasswd'";

$result = mysqli_query($connection, $query);
if (!$result) {
   echo "Select from administrator failed. " . mysqli_error($connection);
   exit();
}

//Determine if the user ID and password are on file.
$row = mysqli_fetch_object($result);
$db_userid = $row->admin_id;
$db_password = $row->admin_password;
$db_name = $row->admin_name;

if ($db_userid != $userid || $db_password != $encryptpasswd) {

   tryagain:
   //If not, add to Session Retry and test > 3
   $retry = $_SESSION["retry"];
   $retry++;
   if ($retry > 3) {
   //If greater than 3 go to register.
       header("Location: register.php");
   } else {
   //If less than 3 reset Session Retry and go to Sign in
       $_SESSION["retry"] = $retry;
       header("Location: signin.php");
   }
} else {
   //If on file, get name, reset the session, and enter site.
   $_SESSION["name"] = $db_name;
   $_SESSION["retry"] = "admit";
   $_SESSION["time"] = time();
   header("Location: systementry.php");
}
?>
