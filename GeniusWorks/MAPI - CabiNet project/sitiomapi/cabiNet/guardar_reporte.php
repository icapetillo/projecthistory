<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?
include("conexion.php");

$nombre_completo = $nom_completo;


mysql_query("INSERT INTO semp_reportes(idalumno, mes, ano, area, reporte, maestro) VALUES ('$id_alumno', '$mes','$ano','$txarea','$reporte','$usuario')") or die(mysql_error());

echo "<script language='javascript'>"; 
echo "alert('El reporte del alumno se ha guardado con éxito.');";
echo "document.location=('menu_expediente.php?nombre_completo=".utf8_encode($nombre_completo)."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
echo "</script>";

?>

</body>
</html>