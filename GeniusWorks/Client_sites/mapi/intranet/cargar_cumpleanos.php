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
    <td height="40" align="left" bgcolor="#FF6600" class="titulos">Escriba los detalles del maestro:</td>
  </tr>
  <tr>
    <td width="50" height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="650" align="left" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="guardarcumpleanos.php">
      <table width="470" border="0" align="center" cellpadding="0" cellspacing="0" class="controles">
        <tr>
          <td width="120">&nbsp;</td>
          <td width="10">&nbsp;</td>
          <td width="340">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" align="right">APELLIDO PATERNO:</td>
          <td height="20">&nbsp;</td>
          <td height="20"><input type="text" name="appaterno" id="appaterno" /></td>
        </tr>
        <tr>
          <td height="20" align="right">APELLIDO MATERNO:</td>
          <td height="20">&nbsp;</td>
          <td height="20"><input type="text" name="apmaterno" id="apmaterno" /></td>
        </tr>
        <tr>
          <td height="20" align="right">NOMBRE(S):</td>
          <td height="20">&nbsp;</td>
          <td height="20"><input type="text" name="nombres" id="nombres" /></td>
        </tr>
        <tr>
          <td height="20" align="right">FECHA DE NACIMIENTO:</td>
          <td height="20">&nbsp;</td>
          <td height="20"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>D&iacute;a:</td>
              <td><label>
                <select name="dia" id="dia">
                 <? 
				for ($i=1;$i<32;$i++){
					echo "<option value='".$i."'>".$i."</option>";
				}
				?>
                </select>
              </label></td>
              <td>Mes:</td>
              <td><label>
                <select name="mes" id="mes">
                 <? 
				for ($i=1;$i<13;$i++){
					echo "<option value='".$i."'>".$i."</option>";
				}
				?>
                </select>
              </label></td>
              <td>A&ntilde;o:</td>
              <td><label>
                <select name="ano" id="ano">
                <? 
				for ($i=1950;$i<2010;$i++){
					echo "<option value='".$i."'>".$i."</option>";
				}
				?>
                </select>
              </label></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="Guardar cumplea&ntilde;os" />
          </label>
            <label>
              <input type="submit" name="button2" id="button2" value="Nuevo cumplea&ntilde;os" />
            </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="center"><? echo $mensaje ?></td>
          </tr>
        <tr>
          <td colspan="3" align="center"><a href="menu_admin.php"><img src="../imagenes/btnvolver.png" border="0" width="150" height="30" /></a></td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="50" height="30" align="left">&nbsp;</td>
    <td width="650" align="left">&nbsp;</td>
  </tr>
</table>
</body>
</html>
