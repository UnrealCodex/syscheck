<?php
/////////////////////////
$database   =  "abecode_syscheck";
$username   =  "abecode_admsys";
$password   =  "789poiQWE,.-";
/////////////////////////

$link  = mysqli_connect('mysql3001.mochahost.com', $username, $password,$database);
$link2  = mysqli_connect('mysql3001.mochahost.com', $username, $password,$database);
//$db    = mysqli_select_db($link);
//mysqli_query("SET NAMES 'utf8'");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
