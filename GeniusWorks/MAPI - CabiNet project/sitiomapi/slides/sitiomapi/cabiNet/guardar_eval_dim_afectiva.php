<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
include("conexion.php");

$nombre_completo = $nom_completo;

//Verificar que no exista el mes y año capturados
$sql = "SELECT * FROM semp_dim_afectiva WHERE mes=$mes AND ano=$ano AND idalumno=$id_alumno";
$result = mysql_query($sql);
$numero = mysql_num_rows($result);

if ($numero>0)
{
	echo "<script language='javascript'>"; 
	echo "alert('Ya existe una evaluación cargada para el mes y año seleccionado. Seleccione un mes y año distintos y vuelva a intentar.');";
	echo "document.location=('dimensionafectiva.php?nombre_completo=".utf8_encode($nombre_completo)."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";

	}
else
{
	//Insertar nuevo registro
	for ($k=0;$k<14;$k++){
		$j=$k+1;
		mysql_query("INSERT INTO semp_dim_afectiva (idalumno, nivel, grupo, mes, ano, id_parametro, evaluacion) VALUES ('$id_alumno', '$nivel', '$grupo', '$mes', '$ano','$j','$evaluacion[$k]')") or die(mysql_error());
		};
	
	echo "<script language='javascript'>"; 
	echo "alert('La evaluación del alumno se ha guardado con éxito');";
	echo "document.location=('menu_expediente.php?nombre_completo=".utf8_encode($nombre_completo)."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";
	}
?>
</body>
</html>