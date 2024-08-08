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
    <td width="18" rowspan="3" align="center" background="../imagenes/background-izq.gif">&nbsp;</td>
    <td height="30" align="left" bgcolor="#FFFFFF" background="../imagenes/fondoTablaNavega.png"><span class="datos_alumno"><a href="javascript:history.back()"><img src="../imagenes/btnvolver.png" width="150" height="30" border="0"/></a></span></td>
    <td width="18" rowspan="3" align="center" background="../imagenes/background-der.gif">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="boleta.php"><table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="titulo_boleta">Tabla de avance individual</td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      <tr class="encabezados_boleta">
        <td width="150" align="center">MATRICULA</td>
        <td width="300" align="center">NOMBRE</td>
        <td width="150" align="center">PERIODO</td>
        </tr>
      <tr class="datos_alumno">
        <td width="150" height="30" align="center" bgcolor="#FFFFFF"><? echo $matri; ?></td>
        <td width="300" height="30" align="center" bgcolor="#FFFFFF"><? echo $nombre; ?></td>
        <td width="150" height="30" align="center" bgcolor="#FFFFFF"><? echo $mes ?></td>
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
          <td width="250" align="center" valign="middle" bgcolor="#0033CC">Materia</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Cond.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">OyA</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Asist.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Tar.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Part.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Exam.</td>
          <td width="50" height="30" align="center" valign="middle" bgcolor="#0033CC">Total</td>
        </tr>
        <? 
		if ($grado<4){
		echo '<tr class="titulos_tablas">
          <td width="250" height="20" align="center" valign="middle">&nbsp;</td>
          <td width="50" height="20" align="center" valign="middle">10%</td>
          <td width="50" height="20" align="center" valign="middle">10%</td>
          <td width="50" height="20" align="center" valign="middle">10%</td>
          <td width="50" align="center" valign="middle">20%</td>
          <td width="50" align="center" valign="middle">20%</td>
          <td width="50" height="20" align="center" valign="middle">30%</td>
          <td width="50" height="20" align="center" valign="middle">100%</td>
        </tr>';
			}
		?>
        <? 
        //Conectarse y buscar los datos de la boleta
		mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
        mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
   	    $datos = mysql_query("SELECT * FROM calificaciones WHERE matricula ='".$matri."' and mes='".$mes."' and ano='".$ano."'");
		while ($renglon = @mysql_fetch_array($datos))
		{
        echo '<tr class="datos_boleta">
          <td width="250" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['materia'].'</td>
          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['conducta'].'</td>
          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['oya'].'</td>
          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['asistencia'].'</td>
          <td width="50" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['tareas'].'</td>
          <td width="50" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['participacion'].'</td>
          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['examen'].'</td>
          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['total'].'</td>
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
    <td width="18" align="center" background="../imagenes/esq-izq-inf.gif">&nbsp;</td>
    <td align="right" background="../imagenes/background-inf.gif">&nbsp;</td>
    <td width="18" align="center" background="../imagenes/esq-der-inf.gif">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="350" border="0" cellpadding="0" cellspacing="0" class="borde_boleta">
      <tr>
        <td height="20" colspan="2" class="titulos_tablas">Elementos que incluye la tabla de avance:</td>
      </tr>
      <tr>
        <td width="50" class="titulos_tablas">Cond</td>
        <td width="300" bgcolor="#FFFFFF" class="datos_boleta">Conducta en el aula</td>
      </tr>
      <tr>
        <td class="titulos_tablas">OyA</td>
        <td bgcolor="#FFFFFF" class="datos_boleta">Orden y aseo personal</td>
      </tr>
      <tr>
        <td class="titulos_tablas">Asist</td>
        <td bgcolor="#FFFFFF" class="datos_boleta">Asistencias</td>
      </tr>
      <tr>
        <td class="titulos_tablas">Tareas</td>
        <td bgcolor="#FFFFFF" class="datos_boleta">Tareas entregadas</td>
      </tr>
      <tr>
        <td class="titulos_tablas">Part.</td>
        <td bgcolor="#FFFFFF" class="datos_boleta">Participaci&oacute;n</td>
      </tr>
      <tr>
        <td class="titulos_tablas">Exam.</td>
        <td bgcolor="#FFFFFF" class="datos_boleta">Examen</td>
      </tr>
      <tr>
        <td class="titulos_tablas">Total.</td>
        <td bgcolor="#FFFFFF" class="datos_boleta">Calificacion final</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>