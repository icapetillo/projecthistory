<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>Sistema de Captura de Calificaciones</title>
<script>

function confirmar() {
	enviar=window.confirm ("ADVERTENCIA: Una vez grabadas las calificaciones, ya no se pueden modificar. �Est� seguro que los datos facilitados son correctos?");
    if (enviar) {
        //Env�a el formulario
        return true;
    } else {
        //No env�a el formulario
       return false;
    }
}
</script>

</head>
<?
if ($grado=="INGL�S"){
	$materia="Ingl�s";
	}
?>
<body>
<table width="770" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="30" height="30" bgcolor="#FF6600" class="titulos">&nbsp;</td>
        <td width="720" bgcolor="#FF6600" class="titulos">2. Capture las calificaciones de cada alumno</td>
      </tr>
      <tr>
        <td colspan="2"><p>&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><form name="calificaciones" action="insertar.php" method="post" target="mainFrame" onsubmit="return confirmar();">
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="controles">
            <tr>
              <td colspan="9" align="center" valign="middle"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="75">Grado:</td>
                  <td width="75"><input name='grado' type='text' id='grado' size='5' value="<? echo $grado ?>" /></td>
                  <td width="75">Grupo:</td>
                  <td width="75"><input name='grupo' type='text' id='grupo' size='5' value="<? echo $grupo?>" /></td>
                  <td width="70">Materia:</td>
                  <td width="130"><input name='materia' type='text' id='materia' size='10' value="<? echo htmlentities($materia) ?>" /></td>
                  <td width="70">Periodo:</td>
                  <td width="130"><input name='mes' type='text' id='mes' size='6' value="<? echo $mes?>" />
                    <input name='ano' type='text' id='ano' size='5' value="<? echo $ano?>" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td colspan="9" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td width="300" height="30" align="center" valign="middle">Nombre</td>
              <td width="50" height="30" align="center" valign="middle">Asist.</td>
              <td width="50" height="30" align="center" valign="middle">Tareas</td>
              <td width="50" height="30" align="center" valign="middle">Exam.</td>
              <td width="50" height="30" align="center" valign="middle">Cond.</td>
              <td width="50" height="30" align="center" valign="middle">Part.</td>
              <td width="50" height="30" align="center" valign="middle">OyA</td>
              <td width="50" height="30" align="center" valign="middle">CALIF</td>
              <td width="50" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" align="center" valign="middle"><select name="nombre[]" value="" id='nombre[]'>
                <?
  	  		  mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
		      mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
			  if ($grado=="INGL�S")
			  {
			  $datos = mysql_query('SELECT * FROM ingles WHERE grado="7" and grupo=\''.$grupo.'\'');
			  }else
			  {
			  $datos = mysql_query('SELECT * FROM alumnos WHERE grado='.$grado.' and grupo=\''.$grupo.'\'');
			  }
			  while ($row=mysql_fetch_array($datos)){				  
				  $alumno = $row['matricula']."-".$row['appaterno']." ".$row['apmaterno'].", ".$row['nombres'];
				  echo "<option value='".$alumno."'>".$alumno."</option>";
			  }
			  
			  mysql_free_result($datos);
			  mysql_close();
		  ?>
              </select></td>
              <td height="30" align="center" valign="middle"><input name="asist" type="text" id="asist" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="tareas" type="text" id="tareas" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="exam" type="text" id="exam" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="cond" type="text" id="cond" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="part" type="text" id="part" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="oya" type="text" id="oya" size="5" /></td>
              <td height="30" align="center" valign="middle"><input name="total" type="text" id="total" size="5" /></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" align="center" valign="middle">&nbsp;</td>
              <td height="30" colspan="2" align="center" valign="middle"><label>
                <input type="submit" name="button2" id="button2" value="A&ntilde;adir"/>
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