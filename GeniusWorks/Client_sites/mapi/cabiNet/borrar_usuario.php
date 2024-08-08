<?
session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

include("conexion.php");

mysql_query("DELETE FROM semp_usuarios WHERE idusuario='$idusuario'") or die(mysql_error());

echo "<script language='javascript'>"; 
echo "alert('Los datos del usuario se han eliminado de la base de datos. Esta acción no se puede deshacer.');";
echo "document.location=('admonusuarios.php');";
echo "</script>";

?>

