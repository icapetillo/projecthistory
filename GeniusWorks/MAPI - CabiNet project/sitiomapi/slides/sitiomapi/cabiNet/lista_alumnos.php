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
    <td><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <? echo $usuario; ?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesión</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  <tr>
    <td width="650">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><p class="textos">Estos son los alumnos que se encuentran registrados en el nivel y grupo seleccionados. Para ver y/o modificar el expediente de tutorías del alumno, haga clic en el enlace correspondiente, situado en la columna &quot;Expediente&quot;:</p>
          <p class="textos">&nbsp;</p></td>
      </tr>
    </table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="titulos_tablas">
          <td width="80" height="30">Matricula</td>
          <td width="430" height="30">Nombre</td>
          <td width="90" height="30">Expediente</td>
        </tr>
        <tr>
        <?
		include("conexion.php");
		
		$datos = mysql_query("SELECT id_alumno, appaterno, apmaterno, nombres, nivel, grupo FROM semp_alumnos WHERE nivel=".$nivel." and grupo='".$grupo."' ORDER BY appaterno ASC",$link);
			
		while($fila = @mysql_fetch_array($datos)){
			$nombre_completo=$fila['appaterno']." ".$fila['apmaterno']." ".$fila['nombres'];
			echo "<tr class='textos'>";
			echo "<td width='80' align='center'>".$fila['id_alumno']."</td>";
			echo "<td width='430'>".utf8_encode($nombre_completo)."</td>";
			echo "<td width='90' align='center'><a href='menu_expediente.php?nombre_completo=".utf8_encode($nombre_completo)."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$fila['id_alumno']."'>Abrir</a></td>";
			echo "</tr>";
		}          
		 ?>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/book_accept.png" width="24" height="24" /></p></td>
          <td width="165" align="right" valign="middle"><a href="selnivelgrupo.php"><span class="controles">Seleccionar un grupo distinto</span></a></td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>