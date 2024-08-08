<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../estilos/portal.css" type="text/css" />
<title>Tabla de avance individual</title>
<style type="text/css">
<!--
body {
	background-image: url(../imagenes/fondoPagina.png);
}
-->
</style></head>

<body topmargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="18" rowspan="3" align="center" bgcolor="#FFFFFF" background="../imagenes/background-izq.gif">&nbsp;</td>
    <td height="30" align="left" background="../imagenes/fondoTablaNavega.png" bgcolor="#FFFFFF"><span class="datos_alumno"><a href="javascript:history.back()"><img src="../imagenes/btnvolver.png" width="150" height="30" border="0"/></a></span></td>
    <td width="18" rowspan="3" align="center" background="../imagenes/background-der.gif" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="boleta.php"><table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="titulo_boleta">Lista de tareas encargadas en el periodo</td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      <tr class="encabezados_boleta">
        <td width="150" align="center">GRADO</td>
        <td width="300" align="center">GRUPO</td>
        <td width="150" align="center">PERIODO</td>
        </tr>
      <tr class="datos_alumno">
        <td width="150" height="30" align="center" bgcolor="#FFFFFF"><? echo $grado; ?></td>
        <td width="300" height="30" align="center" bgcolor="#FFFFFF"><? echo $grupo; ?></td>
        <td width="150" height="30" align="center" bgcolor="#FFFFFF"><? echo $mes."-".$ano ?></td>
        </tr>
      <tr class="datos_alumno">
        <td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        <td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        <td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      <tr class="datos_alumno">
        <td height="30" colspan="3" align="center" bgcolor="#FFFFFF">A continuaci&oacute;n se describe la lista de tareas encargadas para el periodo seleccionado. Las tareas m&aacute;s recientes se listan en primer orden.</td>
        </tr>
      <tr class="datos_alumno">
        <td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        <td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        <td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
      </form>
      <table width="600" border="0" cellspacing="0" cellpadding="0">
        <tr class="titulos_tablas">
          <td width="150" height="30" align="center" valign="middle" bgcolor="#0033CC">Materia</td>
          <td width="150" align="center" valign="middle" bgcolor="#0033CC">Descripcion</td>
          <td width="150" align="center" valign="middle" bgcolor="#0033CC">Observaciones</td>
          <td width="150" height="40" align="center" valign="middle" bgcolor="#0033CC">Fecha de Entrega</td>
        </tr>
        <? 
        //Conectarse y buscar los datos de la boleta
		mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
        mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
   	    $datos = mysql_query("SELECT * FROM tareas WHERE mes='".$mes."' and ano='".$ano."' and grado='".$grado."' and grupo='".$grupo."' ORDER BY idtarea DESC");
		while ($renglon = @mysql_fetch_array($datos))
		{
        echo "<tr class='datos_boleta'>";
        echo'<td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['materia'].'</td>
		  <td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['desccripcion'].'</td>
		  <td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['observaciones'].'</td>
		  <td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['dia_entrega'].'-'.$renglon['mes_entrega'].'</td>
        </tr>';
		}
		?>
      </table>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#FFFFFF"><a href="javascript:print()"><img border="0" src="../imagenes/btnImprimir.png" width="120" height="48" /></a></td>
  </tr>
  <tr>
    <td width="18" height="14" background="../imagenes/esq-izq-inf.gif" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="14" bgcolor="#FFFFFF" background="../imagenes/background-inf.gif">&nbsp;</td>
    <td height="14" bgcolor="#FFFFFF" background="../imagenes/esq-der-inf.gif">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>