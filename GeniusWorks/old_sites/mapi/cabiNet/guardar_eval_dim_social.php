<?
include("conexion.php");
$nombre_completo = $nom_completo;

//Verificar que no exista el mes y año capturados
$sql = "SELECT * FROM semp_dim_social WHERE mes=$mes AND ano=$ano AND idalumno=$id_alumno";
$result = mysql_query($sql);
$numero = mysql_num_rows($result);

if ($numero>0)
{
	echo "<script language='javascript'>"; 
	echo "alert('Ya existe una evaluación cargada para el mes y año seleccionado. Seleccione un mes y año distintos y vuelva a intentar.');";
	echo "document.location=('dimensionsocial.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";

	}
else
{
	
	//Insertar nuevo registro
	for ($k=0;$k<14;$k++){
		$j=$k+1;
		mysql_query("INSERT INTO semp_dim_social (idalumno, nivel, grupo, mes, ano, id_parametro, evaluacion) VALUES ('$id_alumno', '$nivel', '$grupo', '$mes', '$ano','$j','$evaluacion[$k]')") or die(mysql_error());
		};
	
	echo "<script language='javascript'>"; 
	echo "alert('La evaluación del alumno se ha guardado con éxito.');";
	echo "document.location=('menu_expediente.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";
}

?>
</body>
</html>
