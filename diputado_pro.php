<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
	<title>Encuesta</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<style>
html, body 
  {
    height: 100%;
  }  
	#radioBtn .notActive
  {
    color: #3276b1;
    background-color: #ffFFFf;
  }
	</style>
	
	
</head>

<body>
<div class="container" align="center">
<div class="row">
<div class="col-lg-1 col-centered" > 
<?php
require_once  'conexion.php';
	$fin_dip = $_POST['fin_dip'];
	
	$fol_int = $_POST['fol_int'];
 $secci = $_POST['secci'];
	$pass = $_POST['pass'];


		mysqli_query($link ,"UPDATE `casillas` SET 


fin_dip='$fin_dip'

WHERE `casillas`.`fol_int`='$fol_int'");	
	
	mysqli_select_db($link,"db_quest"); //mysql_select_db("agro_db",$conexion) or die("Problemas en la seleccion de la base de datos");

//Inserccion de Datos del Formulario a la BD//

mysqli_close($link);

echo ('<br>
<br>
<a href="pre.php?fol_int=').$fol_int.('&secci=').$secci.('&pass=').$pass.('" class="btn btn-primary btn-sm notActive" style="font-size: 28px ; background-color: green; " > Continuar </a>')

?>>
	</body>
	
