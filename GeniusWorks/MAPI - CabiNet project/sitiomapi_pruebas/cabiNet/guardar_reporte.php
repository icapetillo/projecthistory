<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

include("conexion.php");

$nombre_completo = $nom_completo;

mysql_query("INSERT INTO semp_reportes(idalumno, mes, ano, area, reporte, maestro) VALUES ('$id_alumno', '$mes','$ano','$txarea','$reporte','$usuario')") or die(mysql_error());

echo "<script language='javascript'>"; 
echo "alert('El reporte del alumno se ha guardado con éxito.');";
echo "document.location=('reportes_resumen.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
echo "</script>";

?>

