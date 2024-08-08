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
</style></head>

<body topmargin="0">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" bgcolor="#FFFFFF"><img src="../imagenes/logoMapi.png" width="158" height="77" /></td>
  </tr>
  <tr>
    <td height="40" align="left" bgcolor="#FF6600" class="titulos">&nbsp;</td>
    <td height="40" align="left" bgcolor="#FF6600" class="titulos">Captura de tareas de grupo</td>
  </tr>
  <tr>
    <td width="50" height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="650" align="left" bgcolor="#FFFFFF"><form action="guardartarea.php" method="post" name="form1" id="form1">
      <table width="600" border="0" cellpadding="0" cellspacing="0" class="controles">
        <tr>
          <td width="100">&nbsp;</td>
          <td width="400">&nbsp;</td>
          <td width="100">&nbsp;</td>
          <td width="200">&nbsp;</td>
        </tr>
        <tr>
          <td width="100">Grado:</td>
          <td width="400"><label>
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
          <td width="100">Mes:</td>
          <td width="200"><select name="mes" id="mes">
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
          <td width="100">Grupo:</td>
          <td width="400"><label>
          <select name="grupo" id="grupo" >
            <option value="UNICO" selected="selected">UNICO</option>
            <option value="AZUL">AZUL</option>
            <option value="VERDE">VERDE</option>
                    </select>
          </label></td>
          <td width="100">A&ntilde;o:</td>
          <td width="200"><label>
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
          <td width="100">Materia:</td>
          <td width="400"><select name="materia" id="materia">
           <?
              while ($row=mysql_fetch_array($datos)){				  
				  $materia = $row['materia'];
				  echo "<option value='".$materia."'>".$materia."</option>";
			  } 
		   ?>
          </select></td>
          <td width="100">&nbsp;</td>
          <td width="200">&nbsp;</td>
        </tr>
        <tr>
          <td width="100">&nbsp;</td>
          <td width="400">&nbsp;</td>
          <td width="100">&nbsp;</td>
          <td width="200">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">Descripci&oacute;n de la tarea:</td>
          <td colspan="2">Observaciones:</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
          </label></td>
          <td colspan="2"><label>
            <textarea name="observaciones" id="observaciones" cols="30" rows="5"></textarea>
          </label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">Fecha de entrega</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>D&iacute;a:</td>
          <td><select name="dia_entrega" id="dia_entrega">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Mes:</td>
          <td><select name="mes_entrega" id="mes_entrega">
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
          <td colspan="2" align="right"><input type="submit" name="lista" id="lista" value="Grabar tarea" />
            <input type="reset" name="button" id="button" value="Nueva tarea" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" bgcolor="#FFFFFF"><a href="menu.php"><img src="../imagenes/btnvolver.png" width="150" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td width="50" height="30" align="left">&nbsp;</td>
    <td width="650" align="left">&nbsp;</td>
  </tr>
</table>
</body>
</html>
