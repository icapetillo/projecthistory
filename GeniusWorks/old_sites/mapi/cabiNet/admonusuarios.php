<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
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
	      <tr><td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/back.png" width="16" height="16" /><a href="admin_intro.php" class="controles">Volver al menú</a></td>
	      </tr>
	      <tr><td valign="middle">&nbsp;</td>
      	      </tr>
	</table>
    </td>
    <td><div class="textos">Estos son los usuarios que se encuentran actualmente registrados en la base de datos. Utilice los botones del lado izquierdo de la pantalla para agregar o buscar usuarios. Si desea modificar o eliminar los datos de un usuario existente, selecciónelo y haga clic en el botón correspondiente.</div><br/>

<form id='lista usuarios' action='#' method='post'>
<!--Lista de usuarios-->
    <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="titulos_tablas">
          <td width="160" align="center">Apellido <br />
            Paterno</td>
          <td width="160" align="center">Apellido <br />
            Materno</td>
          <td width="160" align="center">Nombre(s)</td>
          <td width="130" align="center">Rol</td>
	  <td width="40" align="center">Ver</td>
        </tr>
        <?php
		include("conexion.php");
		$_pagi_sql = "SELECT * FROM semp_usuarios order by rol, appaterno asc"; 
		include("paginator.inc.php"); 
		
		$i=0;
		while($fila=mysql_fetch_array($_pagi_result)){
			$id_usuario=$fila['idusuario'];
			if ($i%2==0){
			$color="#FFFFFF";
			}else{
			$color="#ACD9FD";
			}
			echo "<tr class='textos' bgcolor='".$color."'>";
			echo "<td width='160' align='center'>".$fila['appaterno']."</td>";
			echo "<td width='160' align='center'>".utf8_encode($fila['apmaterno'])."</td>";
			echo "<td width='160' align='center'>".$fila['nombres']."</td>";
			if ($fila['rol']==1){
			$rol = 'Administrador';			
			}
			if ($fila['rol']==2){
			$rol = 'Maestro';			
			}
			if ($fila['rol']==3){
			$rol = 'Usuario';			
			}
			echo "<td width='130' align='center'>".$rol."</td>";
			echo "<td width='40' align='center'><a href='usuarios_ver.php?idusuario=$id_usuario'><img src='../imagenes/edit.png' width='16' height='16' border='0' alt='Borrar usuario' /></a></td>";
			echo "</tr>";
		$i++;
		}
		echo"<div bgcolor='#FFC71F'>".$_pagi_navegacion."</div>";
		?>
      </table>
</form>
    </td>
</tr>
</table>

</body>
</html>
