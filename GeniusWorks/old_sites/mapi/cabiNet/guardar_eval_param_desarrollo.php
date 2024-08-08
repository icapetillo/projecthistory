<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$subsecc = $_SESSION['subsec'];

include("conexion.php");

$nombre_completo = $nom_completo;

//Verificar que no exista el mes, año y subseccion capturados
$sql = "SELECT * FROM semp_eval_parametros WHERE mes=$mes AND ano=$ano AND idalumno=$id_alumno AND idpar=$param";
$result = mysql_query($sql);
$numero = mysql_num_rows($result);

if ($numero>0)
{
	echo "<script language='javascript'>"; 
	echo "alert('Ya existe una evaluación cargada para el mes y año seleccionado. Seleccione un mes y año distintos y vuelva a intentar.');";
	echo "document.location=('menu_expediente.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";

	}
else
{
	$sql = "SELECT * FROM semp_parametros_desarrollo WHERE idparametro=$param";
	$result = mysql_query($sql) or die(mysql_error());
	$num = mysql_num_rows($result);
	//Insertar nuevo registro
	for ($k=0;$k<$num;$k++){
		mysql_query("INSERT INTO semp_eval_parametros (idalumno, mes, ano, idpar, idparametro, seccion, subseccion, eval) VALUES ('$id_alumno', '$mes', '$ano','$param', '$numparam[$k]', '$seccion[$k]', '$subseccion[$k]', '$evaluacion[$k]')") or die(mysql_error());
		};
	
	echo "<script language='javascript'>"; 
	echo "alert('La evaluación del alumno se ha guardado con éxito');";
	echo "document.location=('menu_expediente.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$id_alumno."');";
	echo "</script>";
	}
?>
</body>
</html>
