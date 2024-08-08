<?php
	//parametros de conexion
	$dbhost	=	"localhost";
	$dbuser	=	"root";
	$dbpass	=	"123as";
	
	//establecer conexion
	$link = @mysql_connect($dbhost, $dbuser, $dbpass) or die ("No se ha podido establecer la conexión. ERROR: ".utf8_encode(mysql_error()));

?>