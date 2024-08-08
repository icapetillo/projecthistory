<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
$rol = $_SESSION['rol_usr'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>

   
</head>

<body style="margin-top:0; margin-left:0; margin-right:0;" onload="document.forms['form1']['nivel'].value='<? if (isset($nivel)){ echo $nivel; } else {echo '0';} ?>'">

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

<form id="form1" name="form1" method="post" action="lista_alumnos.php">
<h2>[ Seleccione nivel y grupo ]</h2><br>
<span class="controles">Nivel:</span>
<select name="nivel" class="controles" id="nivel" onChange="window.location.href='?nivel='+this.options[this.selectedIndex].value">
	          <option value="0" selected="selected">--Seleccione un nivel--</option>
	          <option value="1">Maternal</option>
	          <option value="2">Preescolar</option>
                </select>
<span class="controles">Grupo:</span>
<select name="grupo" class="controles" id="grupo">
		<?
		  	if (isset($nivel))
			{
				include("conexion.php");
			  
				$datos = mysql_query("SELECT grupo FROM semp_niveles_grupos WHERE nivel=".$nivel."",$link);
		
				while($fila = @mysql_fetch_array($datos)){					
				echo "<option value='".$fila['grupo']."'>".$fila['grupo']."</option>";
				}
				
			}			  
		?>
		</select>
	<br><br><div align="right"><input name="button" type="submit" class="botones" id="button" value="Continuar &gt;&gt;" /><br>	<? if ($rol==1) { echo "<img src='../imagenes/icono_test_menu.png' width=16 heigth=16><a href='admin_intro.php' class='textos'>Volver a las opciones administrativas</a>"; } ?></div>

</form>

</div>
<b class="rnd_bottom"><b class="rnd_b4"></b><b class="rnd_b3"></b><b class="rnd_b2"></b><b class="rnd_b1"></b></b>
</div>
</div>
</center>
<!--Fin de contenido-->

</body>
</html>
