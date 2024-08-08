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
    <td align="center" background="../imagenes/background-izq.gif">&nbsp;</td>
    <td height="30" align="right" background="../imagenes/fondoTablaNavega.png"><a href="javascript:window.close()"><img src="../imagenes/btnCerrarSesion.png" width="150" height="30" border="0" /></a></td>
    <td align="center" background="../imagenes/background-der.gif">&nbsp;</td>
  </tr>
  <tr>
    <td width="18" align="center" background="../imagenes/background-izq.gif">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF"><table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="titulo_boleta">Bienvenido</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno">&nbsp;</td>
      </tr>
      <tr class="encabezados_boleta">
        <td width="150" align="center">MATRICULA</td>
        <td width="300" align="center">NOMBRE</td>
        <td width="150" align="center">PERIODO</td>
      </tr>
      <tr class="datos_alumno">
        <td height="30" align="center" bgcolor="#FFFFFF"><? echo $matricula; ?></td>
        <td height="30" align="center" bgcolor="#FFFFFF"><? echo $nombre; ?></td>
        <td height="30" align="center" bgcolor="#FFFFFF"><? echo $mes ?></td>
      </tr>
      <tr class="encabezados_boleta">
        <td align="center">GRADO</td>
        <td align="center">GRUPO</td>
        <td align="center">NIVEL</td>
      </tr>
      <tr class="datos_alumno">
        <td height="30" align="center" bgcolor="#FFFFFF"><? echo $grado; ?></td>
        <td height="30" align="center" bgcolor="#FFFFFF"><? echo $grupo; ?></td>
        <td height="30" align="center" bgcolor="#FFFFFF"><? if ($nivel==3)
		   { 
		   echo 'Primaria'; 
		   } 
		   else 
		   { 
		   echo 'Otro'; 
		   } 
		?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno">Seleccione la consulta que desea realizar:</td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" align="center" valign="middle"><label>
          Consulta de calificaciones del periodo</label></td>
            <td width="50%" align="center" valign="middle"><label>
          Consulta de tareas encargadas</label></td>
          </tr>
          <tr>
            <td width="50%" align="center" valign="middle"><form id="formBoleta" name="formBoleta" method="post" action="boleta.php">
              <input name="matri" type="hidden" value=<? echo $matricula ?> />
              <input name="nombre" type="hidden" value="<? echo $nombre ?>" />
Mes:
<select name="mes" id="mes">
                <option value="Enero" selected="selected">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
              </select>
A&ntilde;o:
<select name="ano" id="ano">
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
</select>
<label>
  <input name="grado" type="hidden" value="<? echo $grado ?>" />
  <input type="submit" name="button" id="button" value="Consultar calificaciones" />
</label></form></td>
            <td width="50%" align="center" valign="middle"><form id="formTareas" name="formTareas" method="post" action="listadetareas.php">
              <input name="grado" type="hidden" value="<? echo $grado ?>" />
              <input name="grupo" type="hidden" value="<? echo $grupo ?>" />
              Mes:
<select name="mes" id="mes">
                <option value="Enero" selected="selected">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
              </select>
A&ntilde;o:
<select name="ano" id="ano">
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
</select>
<label>
  <input type="submit" name="button2" id="button2" value="Consultar tareas encargadas" />
</label>
            </form></td>
          </tr>
          <tr>
            <td align="center" valign="middle">&nbsp;</td>
            <td align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="middle">Consulta de calificaciones de ingl&eacute;s</td>
            <td align="center" valign="middle">Consulta de tareas de ingl&eacute;s</td>
          </tr>
          <tr>
            <td align="center" valign="middle"><form id="form1" name="form1" method="post" action="boleta_ingles.php">
              <input name="matri" type="hidden" id="matri" value="<? echo $matricula ?>" />
              <input name="nombre" type="hidden" id="nombre" value="<? echo $nombre ?>" />
Mes:
<select name="mes" id="mes">
  <option value="Enero" selected="selected">Enero</option>
  <option value="Febrero">Febrero</option>
  <option value="Marzo">Marzo</option>
  <option value="Abril">Abril</option>
  <option value="Mayo">Mayo</option>
  <option value="Junio">Junio</option>
  <option value="Julio">Julio</option>
  <option value="Agosto">Agosto</option>
  <option value="Septiembre">Septiembre</option>
  <option value="Octubre">Octubre</option>
  <option value="Noviembre">Noviembre</option>
  <option value="Diciembre">Diciembre</option>
</select>
A&ntilde;o:
<select name="ano" id="ano">
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
</select>
<label>
  <input type="submit" name="button3" id="button3" value="Consultar calificaciones" />
</label>
            </form></td>
            <td align="center" valign="middle"><form id="form2" name="form2" method="post" action="">
            </form></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" class="datos_alumno">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    <td width="18" align="center" background="../imagenes/background-der.gif">&nbsp;</td>
  </tr>
  <tr>
    <td background="../imagenes/esq-izq-inf.gif">&nbsp;</td>
    <td height="14" background="../imagenes/background-inf.gif">&nbsp;</td>
    <td background="../imagenes/esq-der-inf.gif">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>