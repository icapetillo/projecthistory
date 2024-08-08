<?
include("conexion.php");

//Insertar nuevo registro
mysql_query("INSERT INTO semp_usuarios (usrname,pass,appaterno,apmaterno,nombres,status,rol) values ('$txUsrName', '$txPass1', '$txApPat', '$txApMat', '$txNombres','$status','$rol')") or die(mysql_error());

/*header("Location: registrarusuarios.php"); */

echo "<script language='javascript'>"; 
echo "alert('Los datos del usuario se han guardado con éxito.');";
echo "document.location=('registrarusuarios.php');";
echo "</script>";
?>