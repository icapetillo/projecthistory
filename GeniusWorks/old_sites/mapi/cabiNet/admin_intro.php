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

<body style="margin-top:0; margin-left:0; margin-right:0;">

<!--barra superior-->
<div id="barraSup" class="barraSup">
<table width="800" valign="middle" align="center" cellpadding="0" cellspacing="0">
	<tr heigth="40">
	<td width="30%" align="left" class="logo">[ cabinet ]</td>
	<td width="70%" align="right" class="usuario">Bienvenido, <? echo $usuario; ?><br><a href="index.php" class="loginstatus">cerrar sesión</a></td>
	</tr>
</table>
</div>

<!--contenido-->
<center>
<div id="contenido" class="contenido">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
<tr height="70">
<td>&nbsp;</td>
</tr>
<tr>
    <td>

<!--Menu de opciones -->
<table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr height="30">
	<td colspan="2" class="secciones">[ Panel de Administración de Cabinet ]</td>
	</tr>
	<tr>
	<td width="200" height="30" align="center" valign="middle" class="controles2"><a href="admonusuarios.php" class="controles2"><img src="../imagenes/id_card.png" width="64" height="64" border="0" /><br>Administrar Usuarios de cabiNet</a></td>
	<td width="200" height="30" align="center" valign="middle" class="controles2"><a href="admonalumnos.php" class="controles2"><img src="../imagenes/users2.png" width="64" height="64" border="0" /><br>Administrar Alumnos</a></td>
	</tr>
	<tr>
	<td width="200" height="30" align="center" valign="middle" class="controles2"><a href="selnivelgrupo.php" class="controles2"><img src="../imagenes/folder_full2.png" width="64" height="64" border="0" /><br>Ver expedientes de alumnos</a></td>	
	<td width="200" height="30" align="center" valign="middle" class="controles2"><a href="asignarpermisos.php" class="controles2"><img src="../imagenes/tools.png" width="64" height="64" border="0" /><br>Configurar Cabinet</a></td>
	</tr>
	<tr>
	<td width="200" height="30" align="center" valign="middle" class="controles2">&nbsp;</td>
	<td width="200" height="30" align="center" valign="middle" class="controles2">&nbsp;</td>
	</tr>
</table>

   </td>
  </tr>
</table>
</div>
</center>


</body>
</html>
