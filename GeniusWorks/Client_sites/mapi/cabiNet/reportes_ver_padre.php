<?php
session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate"> 
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutor&iacute;as ::.</title>
<script type="text/javascript" src="stmenu.js"></script>

<script type="text/javascript">
function habilitar(){
	document.form1.borrar.disabled=true;
	document.form1.cambiar.disabled=true;
	document.form1.guardar.disabled=false;
	document.form1.area.disabled=false;
	document.form1.reporte.disabled=false;
	}
	
</script>


<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
   
</head>

<body topmargin="0">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <?php echo $usuario; ?></td>
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
    <td><form id="form1" name="form1" method="post" action="">
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
          <td width="200" align="right" valign="middle"><a href='menu_expediente_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>' class="controles">Volver a la portada del expediente</a></td>
        </tr>
        <tr class="controles">
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" alt="" width="24" height="24" /></p></td>
          <td width="200" align="right" valign="middle"><a href='reportes_resumen_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>' class="controles">Volver al resumen de reportes</a></td>
        </tr>
      </table>
<br />
<?php
include('conexion.php');
$datos=mysql_query("SELECT * FROM semp_reportes WHERE idreporte=$idreporte");
$fila=mysql_fetch_array($datos);
$area = $fila['area'];
$reporte = $fila['reporte'];
$maestro = $fila['maestro'];
?>
		<input type="hidden" name="idreporte" id="idreporte" value=<? echo $idreporte; ?> />
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" align="left" class="titulos_tablas2">Área:</td>
        </tr>
        <tr class="textos">
          <td height="30" align="left" class="reportes" align="center"><input name="area" id="area" disabled="true" size="60" value="<?php echo $area; ?>"></td>
        </tr>
        <tr>
          <td height="30" align="left" class="titulos_tablas2">Reporte:</td>
        </tr>
        <tr class="textos">
          <td height="30" align="left" class="reportes"><textarea name="reporte" id="reporte" readonly cols="80" rows="20"><?php echo utf8_encode($reporte); ?></textarea></td>
        </tr>
        <tr>
          <td height="30" align="left" class="titulos_tablas2">Maestro que captura:</td>
        </tr>
        <tr class="textos">
          <td height="30" align="left" class="reportes"><?php echo $maestro; ?></td>
        </tr>
        
      </table>
      <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" valign="middle"></td>
          </tr>
          <tr height="200"></tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
