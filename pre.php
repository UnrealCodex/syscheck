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
		html,
 body {
    height: 100%;
  }  
	#radioBtn .notActive{
    color: #3276b1;
    background-color: #ffFFFf;
}
	</style>
	
	
	
	</head>

<body>
	<?php 
	$secci = $_REQUEST['secci'] ;
	date_default_timezone_set("America/Mexico_City");
	$hoy = date("g:i a"); 
	//echo $hoy;
	 ?>
	<div class="container" align="center">
<div class="row">
<div class="col-lg-1 col-centered" > 
<?php
	 
			
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM casillas WHERE secci = '$secci'  ");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	echo ('

	
	
	
<table width="100%" border="0">
  <tbody>
    <tr>
		<td><strong>Seccion:</strong>').$rowAccount2['secci'].('<br>
		<strong>Casilla:</strong>').utf8_encode($rowAccount2['tip_cas']).('<br>
		<strong>Direccion:<br></strong>').utf8_encode($rowAccount2['dom']).('<br>
		<strong>Ubicacion:<br></strong>').utf8_encode($rowAccount2['ubi']).('<br>
		</td>
    </tr>
    <tr>
      <td><strong>Apertura:</strong></td>
    </tr>
    <tr>
      <td><strong>Cierre:</strong></td>
    </tr>
    <tr>
      <td><strong>Gente de estructura Registrada</strong><br>
	  <strong>Hora:</strong><input type="text" value="').$hoy.('" disabled name="reg" max="10"> <strong># Personas</strong> <input type="text" value="" disabled name="reg"></td>
    </tr>
    <tr>
      <td><strong>Resultado Final Alcalde:</strong></td>
    </tr>
    <tr>
      <td><strong>Resultado Final Diputado:</strong></td>
    </tr>
  </tbody>
</table>') ;

}
	?>
</body>
</html>