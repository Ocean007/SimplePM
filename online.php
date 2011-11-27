<?php

include 'config.php';

$con = mysql_connect($host,$user,$pass);
mysql_select_db($dbname,$con);
$sql = "SELECT Status from Stat WHERE user = ". $user;
$result = mysql_query($sql,$con);

$ar = mysql_fetch_array($result);

if ($ar["status"] == "logged in" {
echo "user is online";
}
elseif ($ar["status"] == "logged out" {
echo "user is offline";
}
else {
echo "an error has occoured";
}

?>