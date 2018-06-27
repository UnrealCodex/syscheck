<?php
session_start();
require_once("../protocolo/connections/connection.php"); //conexion a la BD
//Obtiene los datos de los campos

@$userid  = $_POST['userid'];
@$password  = $_POST['password'];
@$submitted = $_POST['submitted'];



if($userid && $password)
{
////////////////////////////////////
$query       = sprintf("SELECT * FROM admin WHERE user_adm='$userid' and pass_adm='$password'");
$result      = mysqli_query($link,$query);
$rowAccount  = mysqli_fetch_array($result);
//////////////////////////////////////
}

if(!empty($rowAccount))
{
$_SESSION['id'] = $rowAccount['fol_adm'];
header("location: ../../index.php");
exit;
}
elseif($submitted)
{
}
?>



<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>

<img src="images/fondo_login.png" class="bg">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" class="login-form awesome" id="form1" method="post" name="form1">
<div id="page-wrap">

        

<table id="Tabla_01" width="400" height="301" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="5">
			<img src="images/test_01.png" width="400" height="103" alt=""></td>
	</tr>
	<tr> 
		<td rowspan="6">
		 	<img src="images/test_02.png" width="120" height="197" alt=""></td>
		<td colspan="2" background="images/test_03.png" height="31">
        <input name="userid" type="text" id="email" size="17" style="background-color:transparent;border:0px solid white;" value="Usuario"></td>
		<td colspan="2" rowspan="4">
			<img src="images/test_04.png" width="119" height="125" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/test_05.png" width="161" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" background="images/test_06.png" height="31"><input name="password" type="password" id="password" size="17" style="background-color:transparent;border:0px solid white;" value="Password"></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/test_07.png" width="161" height="47" alt=""></td>
	</tr>
	<tr>
    <input name="submitted" type="hidden" id="submitted" value="1" />
		<td rowspan="2">
			<img src="images/test_08.png" width="101" height="72" alt=""></td>
		<td colspan="2" background="images/test_09.png" height="31"><input type="image" src="images/blacksub.png" border="0" alt="Submit" /></td>
		<td rowspan="2">
			<img src="images/test_10.png" width="103" height="72" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/test_11.png" width="76" height="41" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/espacio.gif" width="120" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="101" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="60" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="16" height="1" alt=""></td>
		<td>
			<img src="images/espacio.gif" width="103" height="1" alt=""></td>
	</tr>
</table>

<?php if(isset($rowAccount))
{
}
elseif($submitted)
{
echo ('
	<div align="center">
 	<p><img src="../../images/simbolos/police.png" width="100" height="100" /></p>
 	<p>Acceso Denegado Verifica tus Datos.</p>
	</div>
	');
} 
?>
</div>
</form>
</body>
</html>