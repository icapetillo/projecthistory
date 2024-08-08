<?
session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

include("conexion.php");

mysql_query("DELETE FROM semp_alumnos WHERE id_alumno='$idusuario'") or die(mysql_error());
mysql_query("INSERT INTO semp_alumnos (appaterno,apmaterno,nombres,nivel,grupo,matricula,pass) values ('$txUsrName', '$txPass1', '$txApPat', '$txApMat', '$txNombres','$nivel','$grupo','$matricula','$pass')");

echo "<script language='javascript'>"; 
echo "alert('Los datos del usuario se han eliminado de la base de datos. Esta acción no se puede deshacer.');";
echo "document.location=('admonusuarios.php');";
echo "</script>";

?>

