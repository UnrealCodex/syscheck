<?php
session_start();
session_destroy();
//header('Location:' . $_SERVER['DOCUMENT_ROOT'] . 'alpha/');
//exit;

echo('<div align="center"><br><br><br><br><a href="../../index.php"><img src="../../images/simbolos/arrow_left_32.png" width="80" height="80" border="0" /><br>
	 REGRESAR A PAGINA PRINCIPAL</a></div>');
?>