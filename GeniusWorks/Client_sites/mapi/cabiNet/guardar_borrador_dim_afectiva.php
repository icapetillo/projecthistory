<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
</head>
<body>
<?
//Guardar un borrador
//1. Verificar si ya existe el borrador que se intenta guardar; en caso afirmativo, preguntar si se desea reemplazar. Reemplazar = UPDATE.
//2. Si no existe el borrador, insertar el registro en la base de datos. Insertar = INSERT INTO.

include("conexion.php");

$nombre_completo = $nom_completo;

//Verificar que no existan borradores el mes y año capturados
$sql = "SELECT * FROM semp_borradores_dim_afectiva WHERE mes=$mes AND ano=$ano AND idalumno=$id_alumno";
$result = mysql_query($sql);
$numero = mysql_num_rows($result);

if ($numero>0)
{

//Borrar registros existentes
	mysql_query("DELETE FROM semp_borradores_dim_afectiva WHERE idalumno=$id_alumno AND mes=$mes AND ano=$ano") or die(mysql_error());
//Insertar nuevos registros
	for ($k=0;$k<14;$k++){
		$j=$k+1;
		mysql_query("INSERT INTO semp_borradores_dim_afectiva (idalumno, nivel, grupo, mes, ano, id_parametro, evaluacion) VALUES ('$id_alumno', '$nivel', '$grupo', '$mes', '$ano','$j','$evaluacion[$k]')") or die(mysql_error());
		};
	echo "<script language='javascript'>"; 
	echo "alert('Ya existe un borrador guardado para el mes y año seleccionado. Se han eliminado los datos del borrador anterior y se guardaron los datos actuales.');";
	if ($pagina==0){
	//Es principal
	echo "document.location=('dimensionafectiva.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	} else {
	//Es borrador
	echo "document.location=('borrador_dimensionafectiva.php?nombre_completo=$nombre_completo&nivel=$nivel&grupo=$grupo&id_alumno=$id_alumno&mes=$mes&ano=$ano');";	
	}	
	echo "</script>";
}
else
{
	//Insertar nuevo registro
	for ($k=0;$k<14;$k++){
		$j=$k+1;
		mysql_query("INSERT INTO semp_borradores_dim_afectiva (idalumno, nivel, grupo, mes, ano, id_parametro, evaluacion) VALUES ('$id_alumno', '$nivel', '$grupo', '$mes', '$ano','$j','$evaluacion[$k]')") or die(mysql_error());
		};
	
	echo "<script language='javascript'>"; 
	echo "alert('El borrador de evaluación del alumno se ha guardado con éxito. Podrá visualizarlo y editarlo más adelante.');";
	echo "document.location=('menu_expediente.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";
}
?>
</body>
</html>

