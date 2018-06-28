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
	<?php 
	date_default_timezone_set("America/Mexico_City");
	$hoy = date("g:i a"); 
	
	
	?>	
	<div class="container">

<div class="container" align="center">
<div class="row">
<div class="col-lg-1 col-centered" style="font-size: 32px" > 
	<form action="gente_pro.php" method="post">
	<br>
		<div align="center">Gente de estructura Registrada</div><br>

    <table width="100%" border="1">
      <tbody>
        <tr>
          <td width="50%" align="right">Actuales:</td>
          <td width="50%"><?php echo $_REQUEST['gente']; ?><input type="hidden" value="<?php echo $_REQUEST['gente']; ?>" name="old_gente"></td>
        </tr>
        <tr>
          <td align="right">Hora:</td>
          <td><input name="h_gente" type="text" style="width: 120px" value="<?php echo $hoy; ?>" readonly="readonly"></td>
        </tr>
        <tr>
          <td align="right">Agregar:</td>
          <td><input type="text" value=""  name="gente" style="width: 120px"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><br>            <input type="submit" value="Guardar" class="btn btn-primary btn-sm notActive" style="font-size: 32px">
          <br></td>
        </tr>
      </tbody>
    </table>
    <br>

	<input type="hidden" value="<?php echo $_REQUEST['secci'];?>" name="secci">
	<input type="hidden" value="<?php echo $_REQUEST['fol_int'];?>" name="fol_int">
	
	</form></div>
</body>
</html>