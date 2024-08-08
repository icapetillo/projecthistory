<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
include("conexion.php");

if ($permisoSi==1){
	mysql_query("INSERT INTO semp_asignaciones (id_usuario, seccion, subseccion) VALUES ('$idusuario', '$seccion', '$subseccion')") or die(mysql_error());
	
	echo "<script language='javascript'>"; 
	echo "alert('Los permisos indicados se han guardado con éxito.');";
	echo "document.location=('asignarpermisos.php');";
	echo "</script>";
}

if ($permisoNo==1)
{
	mysql_query("DELETE FROM semp_asignaciones WHERE id_usuario=$idusuario AND seccion=$seccion AND subseccion=$subseccion") or die(mysql_error());
	echo "<script language='javascript'>"; 
	echo "alert('Los permisos indicados se han eliminado de la base de datos.');";
	echo "document.location=('asignarpermisos.php');";
	echo "</script>";
	
	}
?>
</body>
</html>