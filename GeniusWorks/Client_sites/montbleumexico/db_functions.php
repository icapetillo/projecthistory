<?php

include("db_config.php");

function conectar($db_name){
	$con = 	mysql_connect(db_host, db_user, db_pass) or die ("Error de conexión a la base de datos: ".mysql_error());
	mysql_select_db($db_name, $con) or die ("Error al seleccionar la base de datos: ".mysql_error());

	return $con;
}

function ejecutar($sql_query, $con){
	$result = mysql_query($sql_query, $con) or die("Error al ejecutar consulta SQL: ".mysql_error());

	return $result;
}



?>