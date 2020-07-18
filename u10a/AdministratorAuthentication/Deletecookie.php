<?php
//Delete cookie for name and date. 
$expire = time()-(60*60);
setcookie("Admin[name]", $name, $expire, "/");
setcookie("Admin[date]", $date, $expire, "/");
