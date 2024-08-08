<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

include("conexion.php");

$nombre_completo = $nom_completo;


mysql_query("DELETE FROM semp_reportes WHERE idreporte='$idreporte'") or die(mysql_error());

echo "<script language='javascript'>"; 
echo "alert('El reporte del alumno se ha eliminado de la base de datos. Esta acción no se puede deshacer.');";
echo "document.location=('reportes_resumen.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
echo "</script>";

?>

