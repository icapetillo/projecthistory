<?
//Determino los parámetros para la conexión
$servidor = "localhost";
$usuario = "root";
$pass = "123";

//Establezco la conexión con el servidor
$conn = mysql_connect($servidor, $usuario, $pass) or die ("No se pudo establecer la conexión al servidor de bases de datos");

//Selecciono la base de datos del servidor
mysql_select_db("agenda", $conn) or die ("No se pudo abrir la base de datos");
?>
