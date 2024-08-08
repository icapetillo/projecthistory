<?

?>
        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>Sistema de Captura de Calificaciones</title>
</head>

<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="30" height="30" bgcolor="#FF6600" class="titulos">&nbsp;</td>
        <td width="720" bgcolor="#FF6600" class="titulos_tablas">Datos Capturados</td>
      </tr>
      <tr>
        <td colspan="2" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="350" height="30" align="center" valign="middle" class="titulos_tablas">Nombre</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Tareas<br/>(1.0)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Examen<br/>(1.0)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Conducta<br/>(1.0)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Partic.<br/>(1.5)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas"><p>Com. Oral<br/>
            (2.5)</p></td>
            <td width="50" align="center" valign="middle" class="titulos_tablas">Com. Esc.<br/>
            (1.0)</td>
            <td width="50" align="center" valign="middle" class="titulos_tablas">Comp. Aud.<br/>(1.0)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Comp. Lect.<br/>(1.0)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">CALIF</td>
            </tr>
          <?
		$dbhost='200.52.83.41';
    	$dbusername='mapimx';
	    $dbuserpass='gh5188';
    	$dbname='mapi';
  
    	// Conectar a la base de datos
	    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    	mysql_select_db($dbname) or die('Cannot select database');
		
				
		$datos = mysql_query("SELECT * FROM calif_ingles WHERE grupo='".$grupo."' and mes='".$mes."' and ano='".$ano."' ORDER BY matricula ASC",$link);
		
	  	while($fila = @mysql_fetch_array($datos)){
	    echo "<tr>";
        echo "<td height='30' align='center' valign='middle'>".$fila['matricula']."-".$fila['nombre']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['tareas']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['examen']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['conducta']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['part']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['com_oral']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['com_esc']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['comp_aud']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['comp_lect']."</td>";
        echo "<td height='30' align='center' valign='middle'>".$fila['total']."</td>";
        echo "<td align='center' valign='middle'>&nbsp;</td>";
        echo"</tr>";		

			}
	  ?>
        </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><a href="javascript:print()"><img border="0" src="../imagenes/btnImprimir.png" width="120" height="48" /></a></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
