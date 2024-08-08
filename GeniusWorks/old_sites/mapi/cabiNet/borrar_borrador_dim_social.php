<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
</head>
<body>
<?
include("conexion.php");

$nombre_completo = $nom_completo;

mysql_query("DELETE FROM semp_borradores_dim_social WHERE idalumno=$id_alumno AND mes=$mes AND ano=$ano") or die(mysql_error());

echo "<script language='javascript'>"; 
echo "alert('Se han eliminado los datos del borrador. Esta acción no puede ser deshecha.');";
echo "document.location=('menu_expediente.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
echo "</script>";

?>


</body>
</html>

