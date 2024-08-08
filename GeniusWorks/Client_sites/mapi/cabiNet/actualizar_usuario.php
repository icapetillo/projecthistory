<?
session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

include("conexion.php");

mysql_query("DELETE FROM semp_usuarios WHERE idusuario='$idusuario'") or die(mysql_error());
mysql_query("INSERT INTO semp_usuarios (usrname,pass,appaterno,apmaterno,nombres,status,rol) values ('$txUsrName', '$txPass1', '$txApPat', '$txApMat', '$txNombres','$status','$rol')");

echo "<script language='javascript'>"; 
echo "alert('Los datos del usuario se han eliminado de la base de datos. Esta acción no se puede deshacer.');";
echo "document.location=('admonusuarios.php');";
echo "</script>";

?>

