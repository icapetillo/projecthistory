<?
//Determino los par�metros para la conexi�n
$servidor = "localhost";
$usuario = "root";
$pass = "123";

//Establezco la conexi�n con el servidor
$conn = mysql_connect($servidor, $usuario, $pass) or die ("No se pudo establecer la conexi�n al servidor de bases de datos");

//Selecciono la base de datos del servidor
mysql_select_db("agenda", $conn) or die ("No se pudo abrir la base de datos");
?>
