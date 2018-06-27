<?php
if (! isset($_SESSION['id']))
{
header('location:http://' . $_SERVER['SERVER_NAME'] . '/spaev2/sistema/seguridad/login/login.php');
//header("location: http://127.0.0.1/Fovi_reset/sistema/seguridad/login/login.php");
exit;
}

?>