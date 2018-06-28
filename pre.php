<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Encuesta</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	<div class="container">
  
 
</div>


	<?php 
	$secci = $_REQUEST['secci'] ;
	$pass = $_REQUEST['pass'] ;
	date_default_timezone_set("America/Mexico_City");
	$hoy = date("g:i a"); 
	//echo $hoy;
	 ?>
	<div class="container" align="center">
<div class="row">
<div class="col-lg-1 col-centered" > 
	<div style="font-size: 22px ;">
<?php
	 
			
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM casillas WHERE secci = '$secci' AND pass =  '$pass' ");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	echo ('

	<br>
<br>

	
	
	<table width="100%" border="1" align="center">
  <tbody>
    <tr align="left">
		<td width="50%" align="right"><strong>Seccion :</strong>
		</td>
		<td width="50%"> ').$rowAccount2['secci'].('</td>
    </tr>
    <tr>
      <td align="right"><strong>Casilla :</strong></td>
      <td> ').utf8_encode($rowAccount2['tip_cas']).('</td>
    </tr>
    <tr>
      <td align="right"><strong>Direccion :</strong></td>
      <td><a href="#" data-toggle="popover"  data-content="').utf8_encode($rowAccount2['dom']).('"> Ver</a></td>
    </tr>
    <tr>
      <td align="right"><strong>Ubicacion :</strong></td>
      <td><a href="#" data-toggle="popover"  data-content="').utf8_encode($rowAccount2['ubi']).('"> Ver</a></td>
    </tr>
    <tr>
      <td align="right"><strong>Apertura :</strong>
</td>
      <td> ').$rowAccount2['abre'].('<a href="timeA.php?fol_int=').$rowAccount2['fol_int'].('&secci=').$rowAccount2['secci'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td align="right"><strong>Cierre :</strong>
</td>
      <td> ').$rowAccount2['cierra'].('<a href="timeC.php?fol_int=').$rowAccount2['fol_int'].('&secci=').$rowAccount2['secci'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><strong>Gente de estructura Registrada</strong>
        
        
</td>
    </tr>
    <tr>
      <td align="right"> <strong>Hora :</strong></td>
      <td> ').$rowAccount2['h_gente'].('</td>
    </tr>
    <tr>
      <td align="right"><strong>No. Personas :</strong> </td>
      <td> ').$rowAccount2['gente'].('<a href="gente.php?fol_int=').$rowAccount2['fol_int'].('&gente=').$rowAccount2['gente'].('&secci=').$rowAccount2['secci'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td align="right"><strong>R. Alcalde :</strong></td>
      <td> ').$rowAccount2['fin_alc'].('<a href="alcalde.php?fol_int=').$rowAccount2['fol_int'].('&fin_alc=').$rowAccount2['fin_alc'].('&secci=').$rowAccount2['secci'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td align="right"><strong>R. Diputado :</strong></td>
      <td> ').$rowAccount2['fin_dip'].('<a href="diputado.php?fol_int=').$rowAccount2['fol_int'].('&fin_dip=').$rowAccount2['fin_dip'].('&secci=').$rowAccount2['secci'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
  </tbody>
</table>

') ;

}
	?>
	<br>
<br>
	
		
<a href="index.php" class="btn btn-primary btn-sm notActive" style="font-size: 28px ; background-color: red; " > Salir </a>		
		
		
		</div>
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>