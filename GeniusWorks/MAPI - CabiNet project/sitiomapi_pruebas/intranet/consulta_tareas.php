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
<table width="770" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="center" bgcolor="#FF6600" class="titulos">Tareas Capturadas</td>
        </tr>
      <tr>
        <td colspan="2" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><table width="600" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="150" align="right"><strong><span class="controles">Grado:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $grado ?></td>
            <td width="150" align="right"><strong><span class="controles">Mes:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $mes ?></td>
          </tr>
          <tr>
            <td width="150" align="right"><strong><span class="controles">Grupo:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $grupo ?></td>
            <td width="150" align="right"><strong><span class="controles">A&ntilde;o:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $ano ?></td>
          </tr>
          <tr>
            <td width="150" align="right"><strong><span class="controles">Materia:</span></strong></td>
            <td width="150" align="center" class="botones"><? echo $materia ?></td>
            <td width="150">&nbsp;</td>
            <td width="150">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="right">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="300" height="30" align="center" valign="middle" class="titulos_tablas">Descripci&oacute;n</td>
            <td width="300" height="30" align="center" valign="middle" class="titulos_tablas">Observaciones</td>
            <td width="100" height="30" align="center" valign="middle" class="titulos_tablas">Fecha de Entrega</td>
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
					
		$datos = mysql_query("SELECT * FROM tareas WHERE materia='".$materia."' and grado=".$grado." and grupo='".$grupo."' and mes='".$mes."' and ano=".$ano." ORDER BY idtarea ASC",$link);
		
		$cant = mysql_num_rows($datos);
		if ($cant>0)
		{
			while($fila = @mysql_fetch_array($datos)){
			echo "<tr class='controles'>";
			echo "<td height='30' align='center' valign='middle'>".$fila['desccripcion']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['observaciones']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['dia_entrega']."/".$fila['mes_entrega']."</td>";			
			echo "<td align='center' valign='middle'>&nbsp;</td>";
			echo"</tr>";
				}
		}
		else
		{
			echo "<tr><td><center>No se encontraron tareas registradas para los criterios seleccionados</center></td></tr>";

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
