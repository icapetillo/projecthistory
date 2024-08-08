<?
session_start();
$usuario = $_SESSION["usuario_mapi"];
mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
$datos = mysql_query("SELECT DISTINCT materia FROM asignaciones WHERE usuario='".$usuario."'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>Sistema de Captura de Calificaciones</title>
<style type="text/css">
<!--
body {
	background-image: url(../imagenes/fondoPagina.png);
}
-->
</style>

</head>

<body>
<table width="190" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><img src="../imagenes/logoMapi.png" width="125" height="58" /></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#FF6600" class="titulos">1. Seleccione grado, grupo, materia y periodo de captura</td>
  </tr>
  <tr>
    <td height="30" align="left"><form action="captura2.php" method="post" name="form1" target="topFrame" id="form1">
      <table width="190" border="0" align="center" cellpadding="0" cellspacing="0" class="controles">
        <tr>
          <td>&nbsp;</td>
          <td width="120">&nbsp;</td>
          </tr>
        <tr>
          <td width="70">Grado:</td>
          <td width="120" class="botones"><label>
            <select name="grado" id="grado">
              <option value="1" selected="selected">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="INGL&Eacute;S">INGL&Eacute;S</option>
            </select>
          </label></td>
          </tr>
        <tr>
          <td>Grupo:</td>
          <td class="botones"><label>
            <select name="grupo" id="grupo" >
<option value="UNICO" selected="selected">UNICO</option>
<option value="AZUL">AZUL</option>
<option value="VERDE">VERDE</option>
            </select>
          </label></td>
          </tr>
        <tr>
          <td>Materia:</td>
          <td class="botones"><label>
            <select name="materia" id="materia">
			<?
              while ($row=mysql_fetch_array($datos)){				  
				  $materia = $row['materia'];
				  echo "<option value='".$materia."'>".$materia."</option>";
			  } 
			 ?>
            </select>
          </label></td>
          </tr>
        <tr>
          <td width="70">Mes:</td>
          <td width="120" class="botones"><select name="mes" id="mes">
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
          </select></td>
          </tr>
        <tr>
          <td width="70">A&ntilde;o:</td>
          <td width="120" class="botones"><label>
            <select name="ano" id="ano">
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              </select>
          </label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="120"><input type="submit" name="lista" id="lista" value="Obtener alumnos" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><a href="javascript:history.back()" target="_parent"><img src="../imagenes/btnvolver.png" width="150" height="30" border="0" /></a></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td height="30" align="left" class="controles">&nbsp;</td>
  </tr>
</table>
</body>
</html>
