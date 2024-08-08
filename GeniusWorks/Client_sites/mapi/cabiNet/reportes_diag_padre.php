<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutor&iacute;as ::.</title>
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
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesi&oacute;n</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="650" align="center"><img src="../imagenes/TopReportes.jpg" width="500" height="48" /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_reporte.php">
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="130">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="250">&nbsp;</td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Alumno:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $nombre_completo; ?>
            <input type="hidden" name="id_alumno" id="id_alumno" value=<? echo $id_alumno; ?> />
            <input type="hidden" name="nom_completo" id="nom_completo" value='<? echo $nombre_completo; ?>' /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Nivel:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? if($nivel==1){echo 'MATERNAL';} else {echo 'PREESCOLAR';}?>
            <input type="hidden" name="nivel" id="nivel" value=<? echo $nivel; ?> /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Grupo:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $grupo; ?>
            <input type="hidden" name="grupo" id="grupo" value=<? echo $grupo; ?> /></td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="controles">
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" alt="" width="24" height="24" /></p></td>
          <td width="200" align="right" valign="middle"><a href='menu_expediente_padre.php?nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>' class="controles">Volver a la portada del expediente</a></td>
        </tr>
      </table>
      <p><div class="textos">Estos son los reportes de diagn&oacute;stico cargados a la fecha:      </div></p>
      <table width="700" border="0" align="center" cellpadding="4" cellspacing="10">
        <tr class="titulos_tablas">
          <td width="150" height="40">&Aacute;rea</td>
          <td width="350" height="40">Reporte</td>
          <td width="200" height="40">Maestro que redact&oacute;</td>
        </tr>
        <tr>
        <? 
		include('conexion.php');
		$reportes = mysql_query("SELECT * FROM semp_reportes WHERE idalumno=$id_alumno",$link);
		
		while($fila=mysql_fetch_array($reportes))
		{
			echo "<tr class='textos'>";
			echo "<td>".$fila['area']."</td>";
			echo "<td>".$fila['reporte']."</td>";
			echo "<td>".$fila['maestro']."</td>";
			echo "</tr>";
			}

		?>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p><br />
      </p>
    </form></td>
  </tr>
</table>
</body>
</html>