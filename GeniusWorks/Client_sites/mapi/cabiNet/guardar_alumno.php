<?
include("conexion.php");

//Insertar nuevo registro
mysql_query("INSERT INTO semp_alumnos (appaterno,apmaterno,nombres,nivel,grupo) values ('$txApPat', '$txApMat', '$txNombres','$nivel','$grupo')") or die(mysql_error());

/*header("Location: registrarusuarios.php"); */

echo "<script language='javascript'>"; 
echo "alert('Los datos del alumno se han guardado con éxito.');";
echo "document.location=('registraralumnos.php');";
echo "</script>";
?>