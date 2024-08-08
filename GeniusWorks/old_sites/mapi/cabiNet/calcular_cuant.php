<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$subseccion = $_SESSION['subsec'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?
		  include("conexion.php");
		  if ($cuant==1)
		  {
			  $aspectos=mysql_query("SELECT * FROM semp_eval_parametros WHERE (mes=9 OR mes=10) AND idpar=$idparametro AND subseccion=$subseccion AND idalumno=$id_alumno",$link) or die(mysql_error());
			  
			  $num=mysql_num_rows($aspectos);
			  
			  $datos=mysql_query("SELECT SUM(eval) AS puntos FROM semp_eval_parametros WHERE (mes=9 OR mes=10) AND idpar=$idparametro AND subseccion=$subseccion AND idalumno=$id_alumno",$link) or die(mysql_error());
			  
			  $fila=mysql_fetch_array($datos);
			  $pts = $fila['puntos'];
			  $porc = $pts * 25 / $num;
			  mysql_query("INSERT INTO semp_cuantificaciones (num_cuant, ano, idalumno, idparametro, subseccion, puntos, porcentaje VALUES ('$cuant', '$ano', '$id_alumno', '$subseccion', '$pts', '$porc')",$link) or die(mysql_error());
																																																									   			  $datos=mysql_query("SELECT * FROM semp_cuantificaciones WHERE num_cuant=1 AND idparametro=$idparametro AND subseccion=$subseccion AND idalumno=$id_alumno",$link) or die(mysql_error());
																																																																  while($fila=mysql_fetch_array($datos)){																																																																  			  	  echo "<tr>";
				  echo "<td>".$sub."</td>";
				  echo "<td align='center'>".$fila['puntos']."</td>";
				  echo "<td align='center'>".$fila['porcentaje']."</td>";																																																																  				}
																																																																				
		  }
		  ?>


</body>
</html>