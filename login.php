<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">
<title>Encuesta</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/css_checkbox.css" rel="stylesheet" id="bootstrap-css">
	<style>
		html,
 body {
    height: 100%;
	 background-color: #171717
  }  
	#radioBtn .notActive{
    color: #3276b1;
    background-color: #ffFFFf;
}
		.tabla {
 width:300px;
    height:300px;
    background-color: #373737;
    position:fixed;
    margin-left:-150px; /* half of width */
    margin-top:-150px;  /* half of height */
    top:50%;
    left:50%;
			
			
			 border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    -moz-border-radius:6px;
}

 th {
    border-left:solid black 1px;
    border-top:solid black 1px;
}

th {
    background-color: blue;
    border-top: none;
}

td:first-child, th:first-child {
     border-left: none;
}
	</style>
	
	
	
	</head>

<body>
<div class="container" align="center">
<div class="row">
<div class="col-lg-1 col-centered" > 
	
	
	<form action="login_pro.php" method="post">
	
	<div align="center">
	
	<table width="100%" border="0" align="center" class="tabla" cellspacing="0" cellpadding="0">
      <tr align="center">
      <td style="font-size: 32px ; color: white">Region<br></td>
      </tr>
    <tr align="center">
      <td><br>
<input name="secci" type="number" style="height:40px;font-size:14pt;width: 80%" ></td>
      </tr>
    <tr align="center">
      <td><br>        <input type="submit" value="Continuar" class="btn btn-primary btn-sm notActive" style="font-size: 32px"></td>
      </tr>
</table>

	
	</div>
	</form>
	
	
	
	
	
	
	
	</div></div></div>


</body>
</html>
