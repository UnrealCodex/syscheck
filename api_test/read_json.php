<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	

<?php

// Read JSON file
$json = file_get_contents('https://ubicatucasilla.ine.mx/api/casillas/19/838/casillas.json');

//Decode JSON
$json_data = json_decode($json,true);

//Print data
	$nraro = $json_data['data'];
	
	//echo "nraro:".$nraro."<br>";
	//print_r(array_values($nraro));
 $cordi = $json_data['data']['5f2e546275269f2192ee0d0cae6bbe80']['punto']['coordinates'][1];
	echo "EXITO:".$cordi;
	echo '<pre>' . print_r($json_data, true) . '</pre>';
?>
	
</body>
</html>