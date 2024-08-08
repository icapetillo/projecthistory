<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$rol = $_SESSION['rol_usr'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 


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

<center><div class="contenido2">
<div id="rnd_container">
<b class="rnd_top"><b class="rnd_b1"></b><b class="rnd_b2"></b><b class="rnd_b3"></b><b class="rnd_b4"></b></b>
<div class="rnd_content">

	<center><h3>

	<? 
		if ($nivel==1) { 
			echo "Maternal "; 
		} else {
			echo "Preescolar ";
		}
		echo $grupo;
	?>
	
	</h3></center>

	<p class="textos">Estos son los alumnos que se encuentran
				registrados en el nivel y grupo seleccionados. Para ver y/o
				modificar el expediente de tutorías del alumno, haga clic en el
				enlace correspondiente, situado en la columna
				&quot;Expediente&quot;:</p>
	<table width="500" border="0" align="center" cellpadding="0"
			cellspacing="0">
			<tr class="titulos_tablas">
				<td width="80" height="30">Matricula</td>
				<td width="90" height="30">Expediente</td>
				<td width="330" height="30">Nombre</td>
			</tr>
			<tr>
			<?
			include("conexion.php");

			$datos = mysql_query("SELECT id_alumno, appaterno, apmaterno, nombres, nivel, grupo FROM semp_alumnos WHERE nivel=".$nivel." and grupo='".$grupo."' ORDER BY appaterno ASC",$link);
			mysql_query("SET NAMES 'utf8'");
			$num_fila=0;
			while($fila = @mysql_fetch_array($datos)){
			$nombre_completo=utf8_encode($fila['appaterno'])." ".$fila['apmaterno']." ".$fila['nombres'];
			if ($num_fila%2==0){
			   $color_fila='#FFFFFF';
			}else{
			   $color_fila='#ACD9FD';
			}
			echo "<tr class='textos' bgcolor='".$color_fila."'>";
			echo "<td width='80' align='center'>".$fila['id_alumno']."</td>";
			echo "<td width='90' align='center'><a href='menu_expediente.php?nombre_completo=".$nombre_completo."&nivel=".$nivel."&grupo=".$grupo."&id_alumno=".$fila['id_alumno']."'>Abrir</a></td>";
			echo "<td width='330'>".$nombre_completo."</td>";
			echo "</tr>";
			$num_fila++;
			}
		 ?>
			</tr>
		</table>
		<p>&nbsp;</p>
		<table width="500" border="0" cellpadding="0"
			cellspacing="0">
			<tr>
				<td align="right" valign="middle">
				<p class="controles"><img src="../imagenes/book_accept.png"
					width="24" height="24" /></p>
				</td>
				<td width="165" align="right" valign="middle"><a
					href="selnivelgrupo.php"><span class="controles">Seleccionar un
				grupo distinto</span></a>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td width="165" align="right" valign="middle" class='controles'><? if ($rol==1) { echo "<img src='../imagenes/icono_test_menu.png' width=16 heigth=16><a href='admin_intro.php'>Volver a las opciones administrativas</a>"; } ?>
				</td>
			</tr>
		</table>


</div>
<b class="rnd_bottom"><b class="rnd_b4"></b><b class="rnd_b3"></b><b class="rnd_b2"></b><b class="rnd_b1"></b></b>
</div>
</div>
</center>
<!--Fin de contenido-->





</body>
</html>
