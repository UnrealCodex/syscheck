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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

function toggleD() {
 if( document.getElementById("hidethis").style.display=='none' ){
   document.getElementById("hidethis").style.display = 'table-row'; // set to table-row instead of an empty string
 }else{
   document.getElementById("hidethis").style.display = 'none';
 }
}

function toggleU() {
 if( document.getElementById("hidethis2").style.display=='none' ){
   document.getElementById("hidethis2").style.display = 'table-row'; // set to table-row instead of an empty string
 }else{
   document.getElementById("hidethis2").style.display = 'none';
 }
}
	
</script>
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
	
	$contador = 0;
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
	
	//echo $rowAccount2['fol_int'];
	echo ('<script>

function toggleA').$rowAccount2['fol_int'].('() {
 if( document.getElementById("A').$rowAccount2['fol_int'].('").style.display=="none" ){
   document.getElementById("A').$rowAccount2['fol_int'].('").style.display = "table-row"; // set to table-row instead of an empty string
 }else{
   document.getElementById("A').$rowAccount2['fol_int'].('").style.display = "none";
 }
}

function toggleB').$rowAccount2['fol_int'].('() {
 if( document.getElementById("B').$rowAccount2['fol_int'].('").style.display=="none" ){
   document.getElementById("B').$rowAccount2['fol_int'].('").style.display = "table-row"; // set to table-row instead of an empty string
 }else{
   document.getElementById("B').$rowAccount2['fol_int'].('").style.display = "none";
 }
}
	
</script>');
	
	
	echo ('

	<br>
<br>

	<table width="100%" border="1" align="center">
  <tbody>
    <tr align="left">
		<td width="50%" align="left"><strong>Seccion :</strong>
		</td>
		<td width="30%" align="left"> ').$rowAccount2['secci'].('</td>
		<td width="20%" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="left"><strong>Casilla :</strong></td>
      <td align="left" > ').utf8_encode($rowAccount2['tip_cas']).('</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="left"><strong>Direccion :</strong></td>
      <td align="left"><span onClick="toggleA').$rowAccount2['fol_int'].('();">Ver</span></td>
      <td align="left">');
	
	if ($rowAccount2['secci'] == 844){
		echo ('<a href="').$rowAccount2['link_map'].('" >Mapa</a>');
	}
	elseif ($rowAccount2['secci'] == 845)
	{
		echo ('<a href="').$rowAccount2['link_map'].('" >Mapa</a>');
	}
	elseif ($rowAccount2['secci'] == 2329)
	{
		echo ('<a href="').$rowAccount2['link_map'].('" >Mapa</a>');
	}
	else
	{	
		include('api_test/code_abe.php');
	}
	
		
	
	
	
	echo ('</td>
    </tr>
    <tr id="A').$rowAccount2['fol_int'].('" style="display:none;">
      <td colspan="3" align="left" >').utf8_encode($rowAccount2['dom']).('</td>
    </tr>
    <tr>
      <td align="left"><strong>Ubicacion :</strong></td>
      <td align="left"><span onClick="toggleB').$rowAccount2['fol_int'].('();">Ver</span></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr id="B').$rowAccount2['fol_int'].('" style="display:none;">
      <td colspan="3" align="left">').utf8_encode($rowAccount2['ubi']).('</td>
    </tr>
    <tr>
      <td align="left"><strong>Apertura :</strong>
</td>
      <td align="left"> ').$rowAccount2['abre'].('</td>
      <td align="left"><a href="timeA.php?fol_int=').$rowAccount2['fol_int'].('&secci=').$rowAccount2['secci'].('&pass=').$rowAccount2['pass'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td align="left"><strong>Cierre :</strong>
</td>
      <td align="left"> ').$rowAccount2['cierra'].('</td>
      <td align="left"><a href="timeC.php?fol_int=').$rowAccount2['fol_int'].('&secci=').$rowAccount2['secci'].('&pass=').$rowAccount2['pass'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><strong>Gente de estructura Registrada</strong>
        
        
</td>
    </tr>
    <tr>
      <td align="left"> <strong>Hora :</strong></td>
      <td align="left"> ').$rowAccount2['h_gente'].('</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="left"><strong>No. Personas :</strong> </td>
      <td align="left"> ').$rowAccount2['gente'].('</td>
      <td align="left"><a href="gente.php?fol_int=').$rowAccount2['fol_int'].('&gente=').$rowAccount2['gente'].('&secci=').$rowAccount2['secci'].('&pass=').$rowAccount2['pass'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td align="left"><strong>R. Alcalde :</strong></td>
      <td align="left"> ').$rowAccount2['fin_alc'].('</td>
      <td align="left"><a href="alcalde.php?fol_int=').$rowAccount2['fol_int'].('&fin_alc=').$rowAccount2['fin_alc'].('&secci=').$rowAccount2['secci'].('&pass=').$rowAccount2['pass'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
    <tr>
      <td align="left"><strong>R. Diputado :</strong></td>
      <td align="left"> ').$rowAccount2['fin_dip'].('</td>
      <td align="left"><a href="diputado.php?fol_int=').$rowAccount2['fol_int'].('&fin_dip=').$rowAccount2['fin_dip'].('&secci=').$rowAccount2['secci'].('&pass=').$rowAccount2['pass'].('" class="btn btn-primary btn-sm notActive" style="font-size: 12px ; background-color: red; " > Editar </a></td>
    </tr>
  </tbody>
</table>
') ;
$contador = $contador + 1 ;
	
}
	?>
	<br>
<br>
	
		
<a href="index.php" class="btn btn-primary btn-sm notActive" style="font-size: 28px ; background-color: red; " > Salir </a>		
		
		
		</div>

</body>
</html>