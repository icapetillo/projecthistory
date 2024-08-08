<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>Sistema de Captura de Calificaciones</title>
<script>

function confirmar() {
	enviar=window.confirm ("ADVERTENCIA: Una vez grabadas las calificaciones, ya no se pueden modificar. ¿Está seguro que los datos facilitados son correctos?");
    if (enviar) {
        //Envía el formulario
        return true;
    } else {
        //No envía el formulario
       return false;
    }
}
</script>

</head>
<?
if ($grado=="INGLÉS"){
	$materia="Inglés";
	}
?>
<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="30" height="30" bgcolor="#FF6600" class="titulos">&nbsp;</td>
        <td width="720" height="40" bgcolor="#FF6600" class="titulos_tablas">Capture las calificaciones de cada alumno</td>
      </tr>
      <tr>
        <td colspan="2"><p>&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><form name="calificaciones" action="insertar_ingles.php" method="post" target="mainFrame" onsubmit="return confirmar();">
          <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" class="controles">
            <tr>
              <td colspan="11" align="center" valign="middle"><table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="70">Materia:</td>
                  <td width="130">INGL&Eacute;S
                    <input name="materia" type="hidden" id="materia" value="Ingles" /></td>
                  <td width="60">Grupo:</td>
                  <td width="200"><? echo $grupo; ?>
                    <input name="grado" type="hidden" id="grado" value="7" />
                    <input name="grupo" type="hidden" id="grupo" value="<? echo $grupo; ?>" /></td>
                  <td width="70">Periodo:</td>
                  <td width="130"><input name='mes' type='text' id='mes' size='6' value="<? echo $mes?>" />
                    <input name='ano' type='text' id='ano' size='5' value="<? echo $ano?>" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="11" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td width="300" height="30" align="center" valign="middle">Nombre</td>
              <td width="50" height="30" align="center" valign="middle">Part.</td>
              <td width="50" height="30" align="center" valign="middle">Exp. Oral</td>
              <td width="50" height="30" align="center" valign="middle">Exp. Escrita</td>
              <td width="50" align="center" valign="middle">Comp. Lectura</td>
              <td width="50" align="center" valign="middle">Comp. Aud.</td>
              <td width="50" height="30" align="center" valign="middle">Cond.</td>
              <td width="50" height="30" align="center" valign="middle">Ex. Oral</td>
              <td width="50" height="30" align="center" valign="middle">Ex. Escrito</td>
              <td width="50" height="30" align="center" valign="middle">CALIF</td>
              <td width="50" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" align="center" valign="middle"><select name="nombre[]" value="" id='nombre[]'>
                <?
  	  		  mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
		      mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
			  $datos = mysql_query('SELECT * FROM ingles WHERE grado="7" and grupo=\''.$grupo.'\'');
			  while ($row=mysql_fetch_array($datos)){				  
				  $alumno = $row['matricula']."-".$row['appaterno']." ".$row['apmaterno'].", ".$row['nombres'];
				  echo "<option value='".$alumno."'>".$alumno."</option>";
			  }
			  
			  mysql_free_result($datos);
			  mysql_close();
		  ?>
              </select></td>
              <td height="30" align="center" valign="middle"><input name="part" type="text" id="part" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="exp_oral" type="text" id="exp_oral" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="exp_esc" type="text" id="exp_esc" size="5" /></td>
              <td align="center" valign="middle"><input name="comp_lect" type="text" id="comp_lect" size="5" /></td>
              <td align="center" valign="middle"><input name="comp_aud" type="text" id="comp_aud" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="cond" type="text" id="cond" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="ex_oral" type="text" id="ex_oral" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="ex_escrito" type="text" id="ex_escrito" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="total" type="text" id="total" size="5" /></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" colspan="3" align="center" valign="middle"><label>
                <input type="submit" name="button2" id="button2" value="A&ntilde;adir calificaci&oacute;n"/>
              </label></td>
              </tr>
          </table>
        </form></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>