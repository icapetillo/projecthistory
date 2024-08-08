<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$subsecc = $_SESSION['subsec'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
include("conexion.php");

//Verificar que no exista el mes, año y subseccion capturados
$sql = "SELECT * FROM semp_cuantificaciones WHERE num_cuant=$cuant AND ano=$ano AND subseccion=$subseccion AND idalumno=$id_alumno";
$result = mysql_query($sql);
$numero = mysql_num_rows($result);

if ($numero > 0) {
	
	echo "<script language='javascript'>"; 
	echo "alert('La cuantificación de los parámetros elegidos ya ha sido guardada con anterioridad. Verifique y vuelva a intentar.');";
	echo "window.close();";
	echo "</script>";
	
	}
else {
	mysql_query("INSERT INTO semp_cuantificaciones (num_cuant, ano, idalumno, idparametro, subseccion, puntos, porcentaje) VALUES ('$cuant', '$ano', '$id_alumno', '$idparametro', '$subseccion', '$pts', '$porc')",$link) or die(mysql_error());

	echo "<script language='javascript'>"; 
	echo "alert('La evaluación del alumno se ha guardado con éxito');";
	echo "window.close();";
	echo "</script>";
	}



?>
</body>
</html>