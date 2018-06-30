<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php			
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM casillas ");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{
	$fol_int = $rowAccount2['fol_int'];
	echo $fol_int;
	
	$digits = 3;
$numr = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
	
	
mysqli_query($link2 ,"UPDATE `casillas` SET 


pass='$numr'

WHERE `casillas`.`fol_int`='$fol_int'");	
	
	//mysqli_close($link2);
}
	
	
	
	
	
	
	
	
	
	
	
	?>
</body>
</html>