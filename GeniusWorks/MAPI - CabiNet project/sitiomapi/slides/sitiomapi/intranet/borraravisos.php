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
    <td height="40" align="left" bgcolor="#FF6600" class="titulos">Avisos cargados en el sistema:</td>
  </tr>
  <tr>
    <td width="50" height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="650" align="center" valign="top" bgcolor="#FFFFFF"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="300">&nbsp;</td>
        <td width="140">&nbsp;</td>
      </tr>
      <tr class="titulos_tablas">
        <td width="60">Num.</td>
        <td width="100">Fecha</td>
        <td width="300">Aviso</td>
        <td width="140">Acci&oacute;n</td>
      </tr>
      <?
	  // Conectar a la base de datos
		$dbhost='200.52.83.41';
    	$dbusername='mapimx';
	    $dbuserpass='gh5188';
    	$dbname='mapi';

	    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    	mysql_select_db($dbname) or die('Cannot select database');
		
				
		$datos = mysql_query("SELECT * FROM avisos",$link);
		
	  	while($fila = @mysql_fetch_array($datos)){
	    echo "<tr>";
        echo "<td height='30' align='center' valign='middle' class='avisos3'>".$fila['idaviso']."</td>";
        echo "<td height='30' align='center' valign='middle' class='avisos3'>".$fila['fecha']."</td>";
        echo "<td height='30' align='center' valign='middle' class='avisos3'>".$fila['aviso']."</td>";
        echo "<td height='30' align='center' valign='middle' class='avisos3'><a href='borrar_aviso.php?id=".$fila['idaviso']."'>Borrar</a></td>";
        echo"</tr>";
		}
	  
	  ?>
    </table>
    <p><? echo $mensaje ?></p></td>
  </tr>
  <tr>
    <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF"><a href="menu_admin.php"><img src="../imagenes/btnvolver.png" border="0" width="150" height="30" /></a></td>
  </tr>
  <tr>
    <td width="50" height="30" align="left">&nbsp;</td>
    <td width="650" align="left">&nbsp;</td>
  </tr>
</table>
</body>
</html>
