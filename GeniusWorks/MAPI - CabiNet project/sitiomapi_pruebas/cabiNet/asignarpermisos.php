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
    <td width="150" rowspan="3" bgcolor="#D6DDED">&nbsp;</td>
    <td width="650" height="20">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><p><img src="../imagenes/topAsignarPermisos.jpg" width="350" height="59" /></p></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_permisos.php">
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="textos">En esta página podrá definir las áreas a las que tienen acceso los maestros que utilizan el sistema cabiNet para capturar las evaluaciones de sus alumnos. Seleccione de la lista el nombre del maestro al que desea asignarle permisos y márquelos en cada una de las casillas correspondientes.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
          <span class="textos">Seleccione un maestro de la lista:</span>
            <select name="idusuario" id="idusuario">
          <? 
		  include("conexion.php");
		  $datos=mysql_query("SELECT * FROM semp_usuarios") or die(mysql_error());
		  while($fila=mysql_fetch_array($datos)){
			  $nombre = $fila['appaterno']." ".$fila['apmaterno'].", ".$fila['nombres'];
			  echo "<option value='".$fila['idusuario']."'>".$nombre."</option>";
			  }		  
		  ?>
          	</select>
          </td>
        </tr>
        <tr>
          <td><p class="textos">&nbsp;</p>
            <p class="textos">Seleccione las secciones y subsecciones a las que tendrá acceso el maestro:</p>
            <table width="400" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="150" height="25" class="titulos_tablas2">Sección:</td>
                <td width="250" height="25"><label>
                  <select name="seccion" id="seccion">
                    <option value="1" selected="selected">Comportamientos característicos</option>
                    <option value="2">Dimensión afectiva</option>
                    <option value="3">Dimensión social</option>
                    <option value="4">Reporte de asistencias</option>
                    <option value="5">Reportes de diagnóstico</option>
                  </select>
                </label></td>
                </tr>
              <tr>
                <td width="150" height="25" class="titulos_tablas2">Subsecciones:</td>
                <td width="250"><select name="subseccion" id="subseccion">
                  <option value="1">Cognitivos</option>
                  <option value="2">Sociales</option>
                  <option value="3">Vida Independiente</option>
                  <option value="4">Motricidad</option>
                  <option value="0" selected="selected">N/A</option>
                </select></td>
                </tr>
              <tr>
                <td width="150" height="25" class="titulos_tablas2">Permiso:</td>
                <td width="250"><label class="textos">
                  <input type="radio" name="permisoSi" id="radio" value="1" />
                Si  
                <input type="radio" name="permisoNo" id="radio2" value="1" />
                No</label></td>
                </tr>
              <tr>
                <td height="25">&nbsp;</td>
                <td><label><span class="botones">
                  <input name="button" type="submit" class="botones" id="button" value="Guardar permiso" />
                </span></label>
                  <span class="botones">
                  <input name="button2" type="reset" class="botones" id="button2" value="Nueva asignación" />
                  </span></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" colspan="3"><label>
            <input type="button" name="button3" id="button3" value="Actualizar lista" onclick="window.location.reload()" />
          </label></td>
        </tr>
        <tr>
          <td height="30" colspan="3" class="titulos_tablas2">Permisos asignados actualmente*</td>
          </tr>
        <tr class="titulos_tablas">
          <td width="250" height="20">Maestro</td>
          <td width="200" height="20">Seccion</td>
          <td width="150" height="20">Subseccion</td>
        </tr>
        <?
		include("conexion.php");
		$datos = mysql_query("SELECT semp_asignaciones.id_usuario, semp_asignaciones.seccion, semp_asignaciones.subseccion, semp_usuarios.appaterno, semp_usuarios.apmaterno, semp_usuarios.nombres FROM semp_asignaciones, semp_usuarios WHERE semp_asignaciones.id_usuario = semp_usuarios.idusuario ORDER BY semp_usuarios.idusuario");
		while($fila=mysql_fetch_array($datos)){
			$nombre = $fila['nombres']." ".$fila['appaterno']." ".$fila['apmaterno'];
			echo "<tr class='textos'>";
			echo "<td width='250'>".$nombre."</td>";
			switch($fila['seccion']){
				case 1:
					$secc='Parámetros de desarrollo';
					break;
				case 2:
					$secc='Dimensión afectiva';
					break;
				case 3:
					$secc='Dimensión social';
					break;
				case 4:
					$secc='Reporte de asistencias y faltas';
					break;
				case 5:
					$secc='Reportes de diagnóstico';
					break;
				}
			echo "<td width='200'>".$secc."</td>";
			switch($fila['subseccion']){
				case 0:
					$subsecc='N/A';
					break;
				case 1:
					$subsecc='Cognitivos';
					break;
				case 2:
					$subsecc='Sociales';
					break;
				case 3:
					$subsecc='Vida Independiente';
					break;
				case 4:
					$subsecc='Motricidad';
					break;
				}
			echo "<td width='150'>".$subsecc."</td>";
			echo "</tr>";
			}
		?>
      </table>
      <p class="textos">&nbsp;</p>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><span class="textos"><strong><font color="#FF0000">*</font></strong> Si desea eliminar un permiso, seleccione el maestro, la seccion y la subsección pertinentes y marque &quot;No&quot; en el área de permiso. Luego haga clic en el botón &quot;Guardar permiso&quot;.</span></td>
        </tr>
      </table>
      <p class="textos">&nbsp;</p>
<p>&nbsp;</p>
    </form>      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>