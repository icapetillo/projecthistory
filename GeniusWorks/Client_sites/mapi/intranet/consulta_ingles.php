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
<p>&nbsp;</p>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="center" bgcolor="#FF6600" class="titulos">Datos Capturados</td>
        </tr>
      <tr>
        <td colspan="2" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><table width="600" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right"><strong><span class="controles">Materia:</span></strong></td>
            <td align="center" class="botones"><? echo $materia ?></td>
            <td width="150" align="right"><strong><span class="controles">Mes:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $mes ?></td>
          </tr>
          <tr>
            <td width="150" align="right"><strong><span class="controles">Grupo:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $grupo ?></td>
            <td width="150" align="right"><strong><span class="controles">A&ntilde;o:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $ano ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="350" height="30" align="center" valign="middle" class="titulos_tablas">Nombre</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Part.<br />(1.5)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Exp. Oral<br />(1.5)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Exp. Escrita<br />(1.5)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Comp, Lect.<br />(1.5)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Comp. Audit.<br />
            (1.5)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Cond.<br />
            (1.0)</td>
            <td width="50" height="30" align="center" valign="middle" class="titulos_tablas">Ex. Oral<br />(0.75)</td>
            <td width="50" align="center" valign="middle" class="titulos_tablas">Ex. Escrito<br />(0.75)</td>
            <td width="50" align="center" valign="middle" class="titulos_tablas">CALIF</td>
          </tr>
          <?
	    //Traer la tabla de base de datos actualizada
		// Configura los datos de tu cuenta
		
		
		/*$materia = $HTTP_GET_VARS["materia"];
		$grado = $HTTP_GET_VARS["grado"];
		$grupo = $HTTP_GET_VARS["grupo"];
		$mes = $HTTP_GET_VARS["mes"];
		$ano = $HTTP_GET_VARS["ano"];*/
		$dbhost='200.52.83.41';
    	$dbusername='mapimx';
	    $dbuserpass='gh5188';
    	$dbname='mapi';
  
    	// Conectar a la base de datos
	    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    	mysql_select_db($dbname) or die('Cannot select database');
					
		$datos = mysql_query("SELECT * FROM calif_ingles WHERE grupo='".$grupo."' and mes='".$mes."' and ano=".$ano." ORDER BY matricula ASC",$link);
		
		$cant = mysql_num_rows($datos);
		if ($cant>0)
		{
			while($fila = @mysql_fetch_array($datos)){
			echo "<tr class='controles'>";
			echo "<td height='30' align='center' valign='middle'>".$fila['matricula']."-".$fila['nombre']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['part']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['exp_oral']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['exp_esc']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['comp_lect']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['comp_aud']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['cond']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['ex_oral']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['ex_escrito']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['total']."</td>";
			echo "<td align='center' valign='middle'>&nbsp;</td>";
			echo"</tr>";
				}
		}
		else
		{
			echo "<tr><td><center>No se encontraron calificaciones registradas para los criterios seleccionados</center></td></tr>";

			}

	  ?>
        </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td width="50%" align="left"><a href="javascript:history.back()"><img border="0" src="../imagenes/btnvolver.png" width="150" height="30" /></a></td>
        <td width="50%" align="right"><a href="javascript:print()"><img border="0" src="../imagenes/btnImprimir.png" width="120" height="48" /></a></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
