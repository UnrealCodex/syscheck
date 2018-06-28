<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Avance</title>
	<link href="css/porcent.css" rel="stylesheet" id="porcent">
	<link rel='stylesheet' href='css/style2.css'>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script>
		$(function() {
			$(".meter > span").each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});
	</script>	
	
</head>

<body>
	
		<div id="page-wrap" style="width: 500px">
			<h1> Avance de Casillas </h1>	
	<?php
require_once  'conexion.php'; //conexion a la BD
$query2       = sprintf("SELECT * FROM estadi  ");
$result2      = @mysqli_query($link,$query2);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount2  = @mysqli_fetch_array($result2))
{	
	
	include ('esta_simple.php');
	
}
	
	?>			
			
			
	  
		
		
	</div>	
	
	
	
	
	
	
</body>
</html>