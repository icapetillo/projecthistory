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

<body>
<table width="450" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#FF6600" class="titulos"><center>Consulta de calificaciones cargadas</center></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="30" height="30" bgcolor="#FF6600" class="titulos">&nbsp;</td>
        <td width="370" bgcolor="#FF6600" class="titulos">Seleccione el grado, grupo, materia y periodo que desea consultar.</td>
      </tr>
      <tr>
        <td colspan="2"><p>&nbsp;</p></td>
      </tr>
      <tr>
        <td colspan="2"><form name="calificaciones" action="consulta.php" method="post">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="30%" class="controles">Grado:</td>
              <td width="70%"><select name="grado" id="grado">
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="INGL&Eacute;S">INGL&Eacute;S</option>
              </select></td>
            </tr>
            <tr>
              <td width="30%" class="controles">Grupo:</td>
              <td width="70%"><select name="grupo" id="grupo" >
                <option value="UNICO" selected="selected">UNICO</option>
</select></td>
            </tr>
            <tr>
              <td width="30%" class="controles">Materia:</td>
              <td width="70%"><select name="materia" id="materia">
                <?
              while ($row=mysql_fetch_array($datos)){				  
				  $materia = $row['materia'];
				  echo "<option value='".$materia."'>".$materia."</option>";
			  } 
			 ?>
              </select></td>
            </tr>
            <tr>
              <td width="30%" class="controles">Mes:</td>
              <td width="70%"><span class="botones">
                <select name="mes" id="mes">
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
                </select>
              </span></td>
            </tr>
            <tr>
              <td width="30%" class="controles">A&ntilde;o:</td>
              <td width="70%"><select name="ano" id="ano">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>
                <input name="button" type="submit" class="botones" id="button" value="Consultar calificaciones" /></td>
            </tr>
          </table>
        </form></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><a href="javascript:history.back()"><img src="../imagenes/btnvolver.png" width="150" height="30" border="0" /></a></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>