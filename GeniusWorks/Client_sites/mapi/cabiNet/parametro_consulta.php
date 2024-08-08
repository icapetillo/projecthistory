<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$subseccion = $_SESSION['subsec'];
$id_tipo_pagina = 0; //Es borrador
//Array de meses
$meses[]='Enero';
$meses[]='Febrero';
$meses[]='Marzo';
$meses[]='Abril';
$meses[]='Mayo';
$meses[]='Junio';
$meses[]='Julio';
$meses[]='Agosto';
$meses[]='Septiembre';
$meses[]='Octubre';
$meses[]='Noviembre';
$meses[]='Diciembre';

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
<script type="text/javascript" src="stmenu.js"></script>
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
   
</head>

<body style="margin-top:0; margin-bottom:0">
<table width="500" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td><form id="form1" name="form1" method="post" action="parametro_consulta.php">
	<input type="hidden" name="pagina" id="pagina" value=<? echo $id_tipo_pagina; ?> />
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
            <input type="hidden" name="id_alumno" id="id_alumno" value=<? echo $id_alumno; ?> />
            <input type="hidden" name="nombre_completo" id="nombre_completo" value='<? echo $nombre_completo; ?>' /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Nivel:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? if($nivel==1){echo 'MATERNAL';} else {echo 'PREESCOLAR';}?>
            <input type="hidden" name="nivel" id="nivel" value=<? echo $nivel; ?> /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Grupo:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $grupo; ?>
            <input type="hidden" name="grupo" id="grupo" value=<? echo $grupo; ?> /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Parámetro:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><? 
		  switch ($param){
			case 1:
				  echo "Parámetro de 7 meses";
				  break;
			case 2:
				  echo "Parámetro de 8 a 12 meses";
				  break;
			case 3:
				  echo "Parámetro de 12 a 17 meses";
				  break;
			case 4:
				  echo "Parámetro de 18 a 23 meses";
				  break;
			case 5:
				  echo "Parámetro de 2 años";
				  break;
			case 6:
				  echo "Parámetro de 3 años";
				  break;
			case 7:
				  echo "Parámetro de 4 años";
				  break;
			case 8:
				  echo "Parámetro de 5 años";
				  break;
			case 9:
				  echo "Parámetro de 6 años";
				  break;
			  }
		  ?> <input name="param" type="hidden" id="param" value="<? echo $param ?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Mes a consultar:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="mes" id="mes">
              	<? 
		for ($i=0; $i<12; $i++){
		$valor=$i+1;
		echo "<option value='".$valor."'>".$meses[$i]."</option>";
		}
		?>
            </select>
          </label></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Año de consulta:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="ano" id="ano">
              	<? 
		for ($i=2010; $i<2021; $i++){
		echo "<option value='".$i."'>".$i."</option>";
		}
		?>
            </select>
          </label></td>
        </tr>
	<tr>
          <td height="30" colspan="2" align="right">&nbsp;</td>
          <td height="30" class="textos"><label>
            <input name="btConsultar" type="submit" class="botones" id="btConsultar" value="Consultar evaluación" />
          </label></td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><a href="javascript:window.close();" class="textos">Cerrar esta ventana</a></td>
        </tr>
      </table>
      <br />
      <table width="400" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr class="textos">
          <td colspan="3"><h3>Estos son los datos capturados para el mes y año seleccionado:</h3> <br /><div align="center"><h2><? if (isset($mes) && isset($ano)) {echo $meses[$mes-1]."/".$ano;}?></h2></div></td>
        </tr>
        <tr class="titulos_tablas">
          <td height="30" colspan="3" align="center">Parámetros</td>
          </tr>
        <tr class="titulos_tablas">
          <td width="30" height="30">ID</td>
          <td width="280" height="30">Competencia</td>
          <td width="90" height="30">Evaluación</td>
        </tr>
        <?php
		include('conexion.php');
		//Obtener la lista de parametros correspondientes y guardarlos en un array
		$datos=mysql_query("SELECT * FROM semp_parametros_desarrollo WHERE idparametro=$param order by id_par asc",$link);
		while ($fila=mysql_fetch_array($datos))
		{
			$parametros[]=$fila[descripcion];			
		}

		//Traer el borrador guardado
		$sql = "SELECT * FROM semp_eval_parametros WHERE idalumno=$id_alumno AND mes=$mes AND ano=$ano AND idpar=$param ORDER BY idparametro ASC";
		$result = mysql_query($sql);
		$i=0;
		while ($fila=mysql_fetch_array($result))
		{
		echo "<tr class='textos'>";
		echo "<td height='30' align='center'><input name='numparam[]' type='hidden' id='numparam[]' value='".$fila[idparametro]."' />".$fila[idparametro]."</td>";
		echo "<td height='30'>".utf8_encode($parametros[$i])."</td>";
		if ($fila['eval']==1) { $fondo='#000066'; $color_texto='#FFFFFF'; $valor=1; }
		if ($fila['eval']==0.5) { $fondo='#A2E0F9'; $color_texto='#000000'; $valor=0.5; }
		if ($fila['eval']==0) { $fondo='#FFFFFF'; $color_texto='#000000'; $valor=0; }
		echo "<td height='30' align='center' style='background-color:".$fondo."; color:".$color_texto."'>".$valor."</td></tr>";
		$i++;
		}
	?>
      </table>
    </form>      
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
