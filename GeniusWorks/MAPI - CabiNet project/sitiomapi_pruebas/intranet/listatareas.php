<?


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
    <td height="40" align="left" bgcolor="#FF6600" class="titulos">Lista de tareas de grupo</td>
  </tr>
  <tr>
    <td width="50" height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="650" align="left" valign="top" bgcolor="#FFFFFF"><form action="captura2.php" method="post" name="form1" target="topFrame" id="form1">
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="controles">
        <tr>
          <td width="100">&nbsp;</td>
          <td width="200">&nbsp;</td>
          <td width="100">&nbsp;</td>
          <td width="200">&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="25">Grado:</td>
          <td width="200" height="25" align="center" class="botones"><? echo $grado ?></td>
          <td width="100" height="25">Mes:</td>
          <td width="200" height="25" align="center" class="botones"><? echo $mes ?></td>
          </tr>
        <tr>
          <td width="100" height="25">Grupo:</td>
          <td width="200" height="25" align="center" class="botones"><? echo $grupo ?></td>
          <td width="100" height="25">A&ntilde;o:</td>
          <td width="200" height="25" align="center" class="botones"><? echo $ano ?></td>
          </tr>
        <tr>
          <td width="100" height="25">Materia:</td>
          <td width="200" height="25" align="center" class="botones"><? echo $materia ?></td>
          <td width="100" height="25">&nbsp;</td>
          <td width="200" height="25">&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="25">&nbsp;</td>
          <td width="200" height="25">&nbsp;</td>
          <td height="25">&nbsp;</td>
          <td height="25">&nbsp;</td>
        </tr>
      </table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="titulos_tablas">
          <td width="250" height="30">Desccripci&oacute;n</td>
          <td width="250">Observaciones</td>
          <td width="100">Entrega</td>
        </tr><?
	    //Traer la tabla de base de datos actualizada
		// Configura los datos de tu cuenta
	    $dbhost='200.52.83.41';
    	$dbusername='mapimx';
	    $dbuserpass='gh5188';
    	$dbname='mapi';
  
    	// Conectar a la base de datos
	    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    	mysql_select_db($dbname) or die('Cannot select database');
		
		$datos = mysql_query("SELECT * FROM tareas WHERE materia='".$materia."' and grado='".$grado."' and grupo='".$grupo."' and mes='".$mes."' and ano='".$ano."'",$link);
		
	  	while($fila = @mysql_fetch_array($datos)){
	    echo "<tr>";
        echo "<td width='250' height='30' align='center' valign='middle'>".$fila['desccripcion']."</td>";
        echo "<td width='250' height='30' align='center' valign='middle'>".$fila['observaciones']."</td>";
        echo "<td width='100' height='30' align='center' valign='middle'>".$fila['dia_entrega']."/".$fila['mes_entrega']."</td>";
        echo"</tr>";		
		}
	  ?>
      </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
  <tr>
    <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="left" bgcolor="#FFFFFF"><a href="javascript:history.back()"><img border="0" src="../imagenes/btnvolver.png" width="150" height="30" /></a></td>
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
