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

<body topmargin="0">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <? echo $usuario; ?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesión</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  <tr>
    <td width="150" rowspan="3" bgcolor="#D6DDED"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" class="titulos_tablas">Acciones de Alumnos</td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/add.png" alt="" width="16" height="16" /><a href="registraralumnos.php" class="controles">Agregar...</a></span></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/search.png" alt="" width="16" height="16" /><a href="buscaralumnos.php" class="controles">Buscar...</a></span></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/back.png" alt="" width="16" height="16" /><a href="admin_intro.php" class="controles">Volver al menú</a></td>
      </tr>
      <tr>
        <td valign="middle">&nbsp;</td>
      </tr>
    </table></td>
    <td width="650">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><p><img src="../imagenes/TopAdmonAlumnos.jpg" width="400" height="41" /></p></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="textos">Estos son los alumnos que se encuentran actualmente registrados en la base de datos. Utilice los botones del lado izquierdo de la pantalla para agregar o buscar alumnos. Si desea modificar o eliminar los datos de un alumno existente, selecciónelo y haga clic en el botón correspondiente.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="titulos_tablas">
          <td width="30" align="center">Sel</td>
          <td width="30" height="31" align="center">Id</td>
          <td width="143" align="center">Apellido <br />
            Paterno</td>
          <td width="143" align="center">Apellido <br />
            Materno</td>
          <td width="144" align="center">Nombre(s)</td>
          <td width="80" align="center">Nivel</td>
          <td width="80" align="center">Grupo</td>
        </tr>
        <?php
		
		include("conexion.php");
		
		$datos=mysql_query("SELECT * FROM semp_alumnos", $link) or die(mysql_error());
		
		while($fila=mysql_fetch_array($datos)){
			echo "<tr class='textos'>";
			echo "<td width='30' align='center'><input type='radio' name='idalu[]' id='idalu[]' value='".$fila['id_alumno']."' /></td>";
			echo "<td width='30' height='31' align='center'>".$fila['id_alumno']."</td>";
			echo "<td width='143' align='center'>".$fila['appaterno']."</td>";
			echo "<td width='143' align='center'>".$fila['apmaterno']."</td>";
			echo "<td width='144' align='center'>".$fila['nombres']."</td>";
			echo "<td width='80' align='center'>".$fila['nivel']."</td>";
			echo "<td width='80' align='center'>".$fila['grupo']."</td>";
			echo "</tr>";
			}
		
		?>
      </table>
      <p>&nbsp;</p>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="400" height="30" valign="middle"><span class="textos">Seleccione la acción que desea ejecutar sobre el alumno seleccionado:</span></td>
          <td width="125" height="30" align="center" valign="middle"><img src="../imagenes/edit.png" width="16" height="16" border="0" /><span class="controles">Modificar</span></td>
          <td width="125" height="30" align="center" valign="middle"><img src="../imagenes/delete.png" width="16" height="16" border="0" /><span class="controles">Eliminar</span></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>
</body>
</html>