<?php
	
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM casillas WHERE secci = '$_REQUEST[secci]' ");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	$verifica = 1 ;
	echo (' <option value="').$rowAccount2['fol_int'].('">').$rowAccount2['tip_cas'].'-'.utf8_encode($rowAccount2['dom']).('</option>');
}
	?>