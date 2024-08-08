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
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
<script type="text/javascript" src="stmenu.js"></script>
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
   
</head>

<body topmargin="0">
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
    <td width="650" align="center"><img src="../imagenes/TopParametros.jpg" alt="" width="500" height="50" /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_eval_param_desarrollo.php">
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
            <input type="hidden" name="nom_completo" id="nom_completo" value='<? echo $nombre_completo; ?>' /></td>
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
          <td height="30" align="right" class="titulos_tablas">Mes de captura:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="mes" id="mes">
              <option value="9" selected="selected">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
              <option value="1">Enero</option>
              <option value="2">Febrero</option>
              <option value="3">Marzo</option>
              <option value="4">Abril</option>
              <option value="5">Mayo</option>
              <option value="6">Junio</option>
              <option value="7">Julio</option>
              <option value="8">Agosto</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Año:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="ano" id="ano">
              <option value="2010" selected="selected">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </label></td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="left" valign="middle"><a href='menu_expediente.php?nombre_completo=<? echo utf8_encode($nombre_completo);?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
        <tr>
          <td height="30" align="right" valign="middle"><img src="../imagenes/note_accept.png" alt="" width="24" height="24" /></td>
          <td align="left" valign="middle" class="controles"><a href="tabla_parametros.php?nombre_completo=<? echo utf8_encode($nombre_completo);?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>" target="_blank" class="controles">Revisar evaluaciones cargadas</a></td>
        </tr>
      </table>
      <br />
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="textos">
          <td colspan="3">Capture la evaluación correspondiente a la competencia seleccionada en la siguiente tabla. Una vez que haya terminado, haga clic en el botón &quot;Guardar&quot;, ubicado al final de la tabla, pero sólo cuando esté seguro de que los valores son correctos, pues una vez guardados los datos no se pueden volver a cambiar.</td>
        </tr>
        <tr class="textos">
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr class="titulos_tablas">
          <td height="30" colspan="3" align="center">Parámetros
		  <?php /*?><? 
		  switch ($subseccion){
			case 1:
				  echo "Aspectos cognitivos";
				  break;
			case 2:
				  echo "Aspectos sociales";
				  break;
			case 3:
				  echo "Aspectos de vida independiente";
				  break;
			case 4:
				  echo "Aspectos de motricidad";
				  break;
			  }
		  ?> <?php */?>
		  </td>
          </tr>
        <tr class="titulos_tablas">
          <td width="30" height="30">ID</td>
          <td width="380" height="30">Competencia</td>
          <td width="90" height="30">Evaluación</td>
        </tr>
        <?php
		include('conexion.php');
		//AND idseccion=1 AND idsubseccion=$subseccion
		$datos=mysql_query("SELECT * FROM semp_parametros_desarrollo WHERE idparametro=$param order by id_par asc",$link);
		
		while ($fila=mysql_fetch_array($datos))
		{
			echo "<tr class='textos'>";
			echo "<td height='30' align='center'><input name='numparam[]' type='hidden' id='numparam[]' value='".$fila[id_par]."' /><input name='seccion[]' type='hidden' id='seccion[]' value='".$fila[idseccion]."' /><input name='subseccion[]' type='hidden' id='subseccion[]' value='".$fila[idsubseccion]."' />".$fila[id_par]."</td>";
			echo "<td height='30'>".utf8_encode($fila[descripcion])."</td>";
			echo "<td height='30' align='center'><select style='width:75px' name='evaluacion[]' id='evaluacion[]'><option value='1' style='background-color:#000066'>&nbsp;</option><option value='0.5' style='background-color:#A2E0F9'>&nbsp;</option><option value='0' style='background-color:#FFFFFF'>&nbsp;</option></select></td>";
			}
		?>
      </table>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" valign="middle"><label>
            <input name="button" type="submit" class="botones" id="button" value="Guardar evaluación" />
          </label></td>
          </tr>
      </table>
      <p>&nbsp;</p>
    </form>      
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>