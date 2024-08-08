<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$subseccion = $_SESSION['subsec'];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>   
</head>

<body topmargin="0"><form id="form2" name="form2" method="post" action="guardar_cuant.php" target="_blank">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <? echo $usuario; ?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesión</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="650" align="center" class="titulos_tablas">Gráfico de avance</td>
  </tr>
  <tr>
    <td>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="130">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="250">&nbsp;</td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Alumno:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $nombre_completo; ?>
            <input type="hidden" name="id_alumno" id="id_alumno" value="<? echo $id_alumno; ?>" />
            <input type="hidden" name="nombre_completo" id="nombre_completo" value='<? echo $nombre_completo; ?>' /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Nivel:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? if($nivel==1){echo 'MATERNAL';} else {echo 'PREESCOLAR';}?>
            <input type="hidden" name="nivel" id="nivel" value="<? echo $nivel; ?>" /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Grupo:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $grupo; ?>
            <input type="hidden" name="grupo" id="grupo" value="<? echo $grupo; ?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Parámetro evaluado:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><? 
		  switch($idparametro){
			  case 1:
			  	echo "7 meses";
				break;
			  case 2:
			  	echo "8 - 12 meses";
				break;
			  case 3:
			  	echo "12 - 17 meses";
				break;
			  case 4:
			  	echo "18 - 23 meses";
				break;
			  case 5:
			  	echo "2 años";
				break;
			  case 6:
			  	echo "3 años";
				break;
			  case 7:
			  	echo "4 años";
				break;
			  case 8:
			  	echo "5 años";
				break;
			  case 9:
			  	echo "6 años";
				break;
			  } 
		  ?>
            <input type="hidden" name="idparametro" id="idparametro" value="<? echo $idparametro; ?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right">&nbsp;</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos">&nbsp;</td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="left" valign="middle"><a href='menu_expediente.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
      </table>
</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td height="30" align="center" class="titulos_tablas2">Gráfico de avance</td>
  </tr>
  <tr>
    <td><br />
<center>    <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" class="titulos_tablas2">Datos de la cuantificación - Octubre</td>
        </tr>
      <tr>
        <td width="200" class="titulos_tablas2">Aspecto</td>
        <td width="100" class="titulos_tablas2">Puntos</td>
        <td width="100" class="titulos_tablas2">Porcentaje</td>
      </tr>
      <tr>
    <?
	include("conexion.php");
	include("GoogChart.class.php");
	
	if (($param==8) || ($param==9)) {
	$datos= mysql_query("SELECT num_cuant, subseccion, puntos, porcentaje FROM semp_cuantificaciones WHERE idalumno=$id_alumno AND num_cuant=1 LIMIT 2", $link) or die(mysql_error());
	
	$i=0;
	echo "<tr><td colspan='3' class='titulos_tablas2'>OCTUBRE</td></tr>";
	while($fila=mysql_fetch_array($datos)){
		echo "<tr>";
		if ($fila['subseccion']==1) $categoria='Lógico Matemáticas';
		if ($fila['subseccion']==2) $categoria='Lecto-escritura';
		echo "<td class='textos'>".$categoria."</td>";
		echo "<td class='textos'>".$fila['puntos']."</td>";
		echo "<td class='textos'>".$fila['porcentaje']."</td>";
		$numeros[$i]=$fila['porcentaje'];
		$i=$i+1;
		echo "</tr>";
		}

	$datos2= mysql_query("SELECT num_cuant, subseccion, puntos, porcentaje FROM semp_cuantificaciones WHERE idalumno=$id_alumno AND num_cuant=2 LIMIT 2", $link) or die(mysql_error());
	
	$i=0;
	$i2=0;
	echo "<tr><td colspan='3' class='titulos_tablas2'>FEBRERO</td></tr>";
	while($fila2=mysql_fetch_array($datos2)){
		echo "<tr>";
		if ($fila2['subseccion']==1) $categoria2='Lógico Matemáticas';
		if ($fila2['subseccion']==2) $categoria2='Lecto-escritura';
		echo "<td class='textos'>".$categoria2."</td>";
		echo "<td class='textos'>".$fila2['puntos']."</td>";
		echo "<td class='textos'>".$fila2['porcentaje']."</td>";
		$numeros2[$i2]=$fila2['porcentaje']-$numeros[$i];
		$i=$i+1;
		$i2=$i2+1;
		echo "</tr>";
		}


	echo "</table>";
	echo "<br /></center>";
	$grafico = new GoogChart();
	
	$datos_g = array(
				   'Octubre'=> array(
										'Logico-matematicas' => $numeros[0]*100/25, //50=12.5*100/25
										'Lecto-escritura' => $numeros[1]*100/25,
										),
				   'Febrero'=> array(
										'Logico-matematicas' => $numeros2[0]*100/25,
										'Lecto-escritura' => $numeros2[1]*100/25,
										),

				   'Junio'=> array(
										'Logico-matematicas' => 0,
										'Lecto-escritura' => 0,
										),
				   );
	
	$color = array ('#154789', '#990000','#FF9900');

	$grafico->setChartAttrs( array(
								   'type'=>'bar-vertical-s',
								   'title'=>'Grafico de avance del alumno',
								   'data'=>$datos_g,
								   'size'=> array( 600, 500 ),
								   'color'=>$color,
								   'labelsXY'=>true,
								   'min'=>array(0,25),
								   'max'=>array(0,25),
								   ));
	echo $grafico;  

	}
	else{
	$datos= mysql_query("SELECT num_cuant, subseccion, puntos, porcentaje FROM semp_cuantificaciones WHERE idalumno=$id_alumno AND num_cuant=1", $link) or die(mysql_error());
	
	$i=0;
	echo "<tr><td colspan='3' class='titulos_tablas2'>OCTUBRE</td></tr>";
	while($fila=mysql_fetch_array($datos)){
		echo "<tr>";
		if ($fila['subseccion']==1) $categoria='Cognitivos';
		if ($fila['subseccion']==2) $categoria='Sociales';
		if ($fila['subseccion']==3) $categoria='Vida independiente';
		if ($fila['subseccion']==4) $categoria='Motricidad';
		echo "<td class='textos'>".$categoria."</td>";
		echo "<td class='textos'>".$fila['puntos']."</td>";
		echo "<td class='textos'>".$fila['porcentaje']."</td>";
		$numeros[$i]=$fila['porcentaje'];
		$i=$i+1;
		echo "</tr>";
		}

	$datos2= mysql_query("SELECT num_cuant, subseccion, puntos, porcentaje FROM semp_cuantificaciones WHERE idalumno=$id_alumno AND num_cuant=2", $link) or die(mysql_error());
	
	$i=0;
	$i2=0;
	echo "<tr><td colspan='3' class='titulos_tablas2'>FEBRERO</td></tr>";
	while($fila2=mysql_fetch_array($datos2)){
		echo "<tr>";
		if ($fila2['subseccion']==1) $categoria2='Cognitivos';
		if ($fila2['subseccion']==2) $categoria2='Sociales';
		if ($fila2['subseccion']==3) $categoria2='Vida independiente';
		if ($fila2['subseccion']==4) $categoria2='Motricidad';
		echo "<td class='textos'>".$categoria2."</td>";
		echo "<td class='textos'>".$fila2['puntos']."</td>";
		echo "<td class='textos'>".$fila2['porcentaje']."</td>";
		$numeros2[$i2]=$fila2['porcentaje']-$numeros[$i];
		$i=$i+1;
		$i2=$i2+1;
		echo "</tr>";
		}


	echo "</table>";
	echo "<br /></center>";
	$grafico = new GoogChart();
	
	$datos_g = array(
				   'Octubre'=> array(
										'Cognitivos' => $numeros[0]*100/25, //50=12.5*100/25
										'Sociales' => $numeros[1]*100/25,
										'Vida Independiente' => $numeros[2]*100/25,
										'Motricidad' => $numeros[3]*100/25,
										),
				   'Febrero'=> array(
										'Cognitivos' => $numeros2[0]*100/25,
										'Sociales' => $numeros2[1]*100/25,
										'Vida Independiente' => $numeros2[2]*100/25,
										'Motricidad' => $numeros2[3]*100/25,
										),

				   'Junio'=> array(
										'Cognitivos' => 0,
										'Sociales' => 0,
										'Vida Independiente' =>0,
										'Motricidad' => 0,
										),
				   );
	
	$color = array ('#154789', '#990000','#FF9900');

	$grafico->setChartAttrs( array(
								   'type'=>'bar-vertical-s',
								   'title'=>'Grafico de avance del alumno',
								   'data'=>$datos_g,
								   'size'=> array( 600, 500 ),
								   'color'=>$color,
								   'labelsXY'=>true,
								   'min'=>array(0,25),
								   'max'=>array(0,25),
								   ));
	echo $grafico;  


	}
	
	
	?>
  <tr>
    <!--<td align="center" valign="top"><img src="../imagenes/chart.png" width="600" height="500" /></td> -->
  </tr>
</table></form>
</body>
</html>
