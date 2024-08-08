<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$id_tipo_pagina = 1; //Es borrador

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

//Crear un array con los parámetros
$parametros[]='Acepta responsabilidades';
$parametros[]='Controla sus impulsos y emociones.';
$parametros[]='Tiene confianza en sí mismo en sus trabajos.';
$parametros[]='Resuelve sus propios problemas de prudente.';
$parametros[]='Sabe tomar decisiones adecuadas a su edad.';
$parametros[]='Expresa sus afectos espontáneamente.';
$parametros[]='Es autónomo e independiente.';
$parametros[]='Trata de valerse por sí mismo.';
$parametros[]='Respeta el trabajo y la concentración de sus compañeros.';
$parametros[]='Es capaz de llegar a acuerdos y respetarlos.';
$parametros[]='Se siente orgulloso y satisfecho de lo que hace.';
$parametros[]='Participa armoniosamente en tareas de equipo.';
$parametros[]='Respeta y trabaja adecuadamente su tiempo de trabajo personal.';
$parametros[]='Conoce y trabaja la estructura del silencio.';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
   
<style type="text/css">
<!--
body {
	background-image: url();
}
-->
</style></head>

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
    <td width="650" align="center"><img src="../imagenes/TopDimensionSocial.jpg" width="400" height="67" /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
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
          <td height="30" align="right" class="titulos_tablas">Mes de captura:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="mes" id="mes">
		<?
		for ($j=0;$j<12;$j++){
			$valor=$j+1;
			echo "<option value=$valor ";
			if ($mes==$valor) { echo "selected"; }
			echo ">".$meses[$j]."</option>";
		}
		?>  
            </select>
          </label></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Año:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="ano" id="ano">
              <?
		for ($j=2010;$j<2021;$j++){
			echo "<option value=$j ";
			if ($ano==$j) { echo "selected"; }
			echo ">".$j."</option>";
		}
		?>  
            </select>
          </label></td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="left" valign="middle" class="controles"><a href='menu_expediente.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
        
      </table>
      <br />
<?

//Traer el borrador guardado
include ('conexion.php'); 
$sql = "SELECT * FROM semp_borradores_dim_social WHERE idalumno=$id_alumno AND mes=$mes AND ano=$ano ORDER BY id_parametro ASC";
$result = mysql_query($sql);

?>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr class="error_login"><td colspan="3">Está editando un borrador</td></tr>
        <tr class="textos">
          <td colspan="3">Capture la evaluación correspondiente a la competencia seleccionada en la siguiente tabla. Una vez que haya terminado, haga clic en el botón &quot;Guardar&quot;, ubicado al final de la tabla, pero sólo cuando esté seguro de que los valores son correctos, pues una vez guardados los datos no se pueden volver a cambiar.</td>
        </tr>
        <tr class="textos"><td colspan="3">&nbsp;</td></tr>
        <tr class="titulos_tablas">
          <td width="30" height="30">ID</td>
          <td width="380" height="30">Competencia</td>
          <td width="90" height="30">Evaluación</td>
        </tr>
	<?
	$i=0;
	while ($fila=mysql_fetch_array($result))
	{
		echo "<tr class='textos' id='".$i."'>";
		echo "<td height='30' align='center'>".$fila['id_parametro']."</td>";
		echo "<td height='30'>$parametros[$i]</td>";
		echo "<td height='30' align='center'>";
		echo "<select style='width:75px' name='evaluacion[]' id='evaluacion[]'>";
		echo "<option value='1' style='background-color:#000066' ";
			if ($fila['evaluacion']==1) { echo 'selected'; }
		echo "> 1 </option>";
		echo "<option value='0.5' style='background-color:#A2E0F9' ";
			if ($fila['evaluacion']==0.5) { echo 'selected'; }
		echo "> 0.5 </option>";
		echo "<option value='0' style='background-color:#FFFFFF' ";
			if ($fila['evaluacion']==0) { echo 'selected'; }
		echo "> 0 </option>";
		echo "</select></td></tr>";
	$i++;
	}
	?>        
      </table>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
        </tr>  
        <tr>
          <td align="right" valign="middle">
	  <input name="button" type="button" onclick="if (confirm('¿Seguro que desea eliminar este borrador? Esta acción NO se puede deshacer.')){ this.form.action='borrar_borrador_dim_social.php'; this.disabled=true; this.value='Eliminando...'; this.form.submit()}" class="botones" id="button" value="Eliminar este borrador" />
	  <input name="button" type="button" onclick="if (confirm('¿Seguro que desea guardar un borrador de esta evaluación? Podrá visualizarlo y editarlo más adelante.')){ this.form.action='guardar_borrador_dim_social.php'; this.disabled=true; this.value='Guardando...'; this.form.submit()}" class="botones" id="button" value="Guardar borrador" />
          <input name="button" type="button" onclick="if (confirm('¿Seguro que desea guardar la evaluación? Esta acción no se puede deshacer.')){ this.form.action='guardar_eval_dim_social.php'; this.disabled=true; this.value='Guardando...'; this.form.submit()}" class="botones" id="button" value="Guardar evaluación" />
          </td>
          </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p></p>
    </form>      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
