<?php

	$db_host = '200.52.83.41';
	$db_user = 'montbleu_master';
	$db_pass = 'israel52';
	$db_name = 'montbleumexico_com_catalogo';


	$con = mysql_connect($db_host, $db_user, $db_pass) or die ("Error de conexión a la base de datos: ".mysql_error());
	mysql_select_db($db_name, $con) or die ("Error al seleccionar la base de datos: ".mysql_error());

?>