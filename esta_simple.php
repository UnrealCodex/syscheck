
	<?php
	
	$meta = $rowAccount2['meta18'];
//
	
	
$query3       = sprintf("SELECT * FROM casillas WHERE secci = '$rowAccount2[secci]' GROUP BY secci  ");
$result3      = @mysqli_query($link,$query3);
//$rowAccount2  = @mysqli_fetch_array($result2);


while($rowAccount3  = @mysqli_fetch_array($result3))
{	
	echo ('<div style="">Seccion:').$rowAccount2['secci']."<br>";
	echo ('Abrio:').$rowAccount3['abre']." / Cerro:".$rowAccount3['cierra']."<br></div>";
	echo "Meta: ".$rowAccount3['gente']." de ".$rowAccount2['meta18'];
	$loqueva = $rowAccount3['gente'];
	$res = $loqueva * 100;
		$por = $res / $meta ;
	 $por = number_format((float)$por, 2, '.', '') ;
	echo ('<div class="meter"><span style="color : black ;width: ').$por.('%">').$por.('%</span></div>');
	
}
	
	?>
	