<?php
/////////////////////////
$database   =  "unrealc1_elec";
$username   =  "unrealc1_eleadm";
$password   =  "789poiQWE,.-";
/////////////////////////

$link  = mysqli_connect('localhost', $username, $password,$database);
//$db    = mysqli_select_db($link);
//mysqli_query("SET NAMES 'utf8'");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
