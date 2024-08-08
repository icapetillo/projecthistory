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
<table width="800" border="0" align="center" cellpadding="5" cellspacing="0">
<tr><td bgcolor="#FFC71F">&nbsp;</td></tr>
<tr><td bgcolor="#FFC71F" width="150">&nbsp;</td><td width="650" align="right" class="secciones">[ Administración de Usuarios de cabinet ]</td></tr>
<tr valign="top">
    <td  bgcolor="#FFC71F">
	<table width="130" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td height="30" class="secciones">Acciones</td>
	      </tr>
	      <tr>
	        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/add.png" alt="" width="16" height="16" /><a href="registrarusuarios.php" class="controles">Agregar...</a></span></td>
	      </tr>
	      <tr><td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/search.png" alt="" width="16" height="16" /><a href="buscarusuarios.php" class="controles">Buscar...</a></span></td>
	      </tr>
	      <tr><td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/back.png" width="16" height="16" /><a href="admonusuarios.php" class="controles">Volver al menú</a></td>
	      </tr>
	      <tr><td valign="middle">&nbsp;</td>
      	      </tr>
	</table>
    </td>
    <td>
	<form id="form1" name="form1" method="post" action="buscarusuarios.php">
	      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
		  <td align="right"><big>[ Buscar usuarios ]</big></td>
		</tr>
		<tr>
		  <td align="right">&nbsp;</td>
		</tr>
		<tr>
		  <td align="left" class="textos">Escriba el término a buscar: <input type="text" name="parametro" id="parametro" size="30"><br>Tipo de búsqueda: <input type="radio" name="tipo" group="buscar" value="1" checked>por nombre de usuario o matrícula <input type="radio" name="tipo" group="buscar" value="2">por apellido paterno <input type="radio" name="tipo" group="buscar" value="3">por nombre <input id="btBuscar" type="submit" value="Buscar"> <br><br></td>
		</tr>
	      </table>
	</form>
	
<!-- Resultados de la busqueda -->
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
		<?
		if ($tipo==1) {$par_busqueda="por nombre de usuario";}
		if ($tipo==2) {$par_busqueda="por apellido paterno";}
		if ($tipo==3) {$par_busqueda="por nombre";}			
		?>
          <td colspan="3" align="right"><big>[ Resultados de la búsqueda <? if (isset($tipo)) { echo "$par_busqueda";} ?> ]</big></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
        </tr>
        <tr>
          <td width="200" align="center" class="titulos_tablas">Nombre de usuario<br>o matrícula</td>
          <td width="400" align="center" class="titulos_tablas">Nombre completo</td>
          <td width="50" align="center" class="titulos_tablas">Ver</td>
	</tr>
	<?
	if (isset($parametro))
	{
		if ($tipo==1) {$param='usrname';}
		if ($tipo==2) {$param='appaterno'; }
		if ($tipo==3) {$param='nombres';}
		include('conexion.php');
		$datos=mysql_query("select * from semp_usuarios where $param like '%$parametro%' order by usrname asc");
		$i=0;
		while ($fila=mysql_fetch_array($datos))
		{
			$id_usuario=$fila['idusuario'];
			if ($i%2==0){
			$color='#FFFFFF';
			}
			else{
			$color="#ACD9FD";
			}
			echo "<tr class='textos' bgcolor='".$color."'>";
			echo "<td width='200' align='center'>".$fila['usrname']."</td>";
			echo "<td width='400'>".utf8_encode($fila['appaterno'])." ".utf8_encode($fila['apmaterno'])." ".utf8_encode($fila['nombres'])."</td>";
			echo "<td align='center'><a href='usuarios_ver.php?idusuario=$id_usuario'><img src='../imagenes/edit.png' width='16' height='16' border='0' alt='Borrar usuario' /></a></td>";
			echo "<tr>";
			$i++;
		}
	}
	?>
      	</table>
<!--Fin de resultados-->

   </td>
</tr>
</table>

</body>
</html>
