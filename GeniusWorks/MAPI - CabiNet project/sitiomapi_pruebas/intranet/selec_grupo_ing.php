<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

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

<body topmargin="0" onload="document.forms['form1']['nivel'].value='<? if (isset($nivel)){ echo $nivel; } else {echo '0';} ?>'">
<table width="200" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="300"><form id="form1" name="form1" method="post"  target="topFrame" action="captura2_ingles.php">
      <table width="200" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="40" colspan="2" class="titulos_tablas">Seleccione el grupo y periodo con el que desea trabajar</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="100" class="titulos_tablas">Grupo:</td>
          <td width="300" class="controles"><select id="grupo" name="grupo">
            <option value="ROJO" selected="selected">ROJO</option>
            <option value="AMARILLO">AMARILLO</option>
            <option value="AZUL">AZUL</option>
            <option value="VERDE">VERDE</option>
            <option value="NARANJA">NARANJA</option>
          </select>
            <input name="grado" type="hidden" id="grado" value="7" />
            <input name="materia" type="hidden" id="materia" value="Ingles" /></td>
        </tr>
        <tr>
          <td class="titulos_tablas">Mes:</td>
          <td><label>
            <select name="mes" id="mes">
              <option value="ENERO">ENERO</option>
              <option value="FEBRERO">FEBRERO</option>
              <option value="MARZO">MARZO</option>
              <option value="ABRIL">ABRIL</option>
              <option value="MAYO">MAYO</option>
              <option value="JUNIO">JUNIO</option>
              <option value="JULIO">JULIO</option>
              <option value="AGOSTO">AGOSTO</option>
              <option value="SEPTIEMBRE">SEPTIEMBRE</option>
              <option value="OCTUBRE">OCTUBRE</option>
              <option value="NOVIEMBRE">NOVIEMBRE</option>
              <option value="DICIEMBRE">DICIEMBRE</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td class="titulos_tablas">Año:</td>
          <td><label>
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
          <td><span class="controles">
            <input type="submit" name="button" id="button" value="       Abrir grupo       " />
          </span></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><a href="menu_ingles.php" target="_parent"><img src="../imagenes/btnvolver.png" width="150" height="30" border="0" /></a></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>