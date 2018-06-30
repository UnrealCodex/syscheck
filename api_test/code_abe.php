<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Single AJAX</title>
</head>

<body>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
  var arreglo=[];
  var arreglof=[];
  var arreglof2=[];
  var nraro;
  var punto;


    // constructing a queryURL variable we will use instead of the literal string inside of the ajax method
    var title = "space+jam";
    var queryURL = "https://ubicatucasilla.ine.mx/api/casillas/19/<?php echo $rowAccount2['secci'] ?>/casillas.json";

    $.ajax({
      url: queryURL,
      method: "GET"
    }).then(function(response) {
    //  console.log(response.data);
     Object.values(response);
     arreglo=Object.entries(response);
    //  console.log(arreglo);
     arreglof=Object.entries(arreglo[0][1]);
     arreglof2=Object.entries(arreglof[<?php echo $contador ; ?>]);

    console.log(arreglof2[1][1].punto.coordinates[0]);
    console.log(arreglof2[1][1].punto.coordinates[1]);
    punto="https://maps.google.com/?q="+arreglof2[1][1].punto.coordinates[1]+","+arreglof2[1][1].punto.coordinates[0];
    console.log(punto);
      nraro=arreglof2[0][1];
      console.log(nraro);
      $(document).ready(function(){

$("#despliega<?php echo $contador ; ?>").attr("href",punto);

});
    });



// ---------------------------------------------------------

  
  </script>

<a href=""  id="despliega<?php echo $contador ; ?>" class="despliega<?php echo $contador ; ?>">Mapa</a>
	
</body>

</html>