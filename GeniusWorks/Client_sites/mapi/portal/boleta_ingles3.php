<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../estilos/portal.css" type="text/css" />
<title>Tabla de avance individual (ingl&eacute;s)</title>
<style type="text/css">
<!--
body {
	background-image: url(../imagenes/fondoPagina.png);
}
-->
</style>
</head>

<body topmargin="0">
<table width="750" border="0" align="center" cellpadding="0"
	cellspacing="0">
	<tr>
		<td width="18" rowspan="3" align="center"
			background="../imagenes/background-izq.gif">&nbsp;</td>
		<td height="30" align="left" bgcolor="#FFFFFF"
			background="../imagenes/fondoTablaNavega.png"><span
			class="datos_alumno"><a href="javascript:history.back()"><img
			src="../imagenes/btnvolver.png" width="150" height="30" border="0" /></a></span></td>
		<td width="18" rowspan="3" align="center"
			background="../imagenes/background-der.gif">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" bgcolor="#FFFFFF">
		<form id="form1" name="form1" method="post" action="boleta.php">
		<table width="600" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td colspan="3" align="center" bgcolor="#FFFFFF"
					class="datos_alumno">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3" align="center" bgcolor="#FFFFFF"
					class="titulo_boleta">Tabla de avance individual (ingl&eacute;s)</td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF">&nbsp;</td>
				<td bgcolor="#FFFFFF">&nbsp;</td>
				<td bgcolor="#FFFFFF">&nbsp;</td>
			</tr>
			<tr class="encabezados_boleta">
				<td width="150" align="center">MATRICULA</td>
				<td width="300" align="center">NOMBRE</td>
				<td width="150" align="center">PERIODO</td>
			</tr>
			<tr class="datos_alumno">
				<td width="150" height="30" align="center" bgcolor="#FFFFFF"><? echo $matri; ?></td>
				<td width="300" height="30" align="center" bgcolor="#FFFFFF"><? echo $nombre; ?></td>
				<td width="150" height="30" align="center" bgcolor="#FFFFFF"><? echo $mes ?></td>
			</tr>
			<tr class="datos_alumno">
				<td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
				<td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
				<td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
			</tr>
		</table>
		</form>
		<table width="700" border="0" cellspacing="0" cellpadding="0">
			<tr class="titulos_tablas">
				<td width="250" align="center" valign="middle" bgcolor="#0033CC">Mes</td>
				<td width="50" align="center" valign="middle">Tareas<br>(1.0)</td>
				<td width="50" align="center" valign="middle">Examen<br>(1.0)</td>
				<td width="50" align="center" valign="middle">Conducta<br>(1.0)</td>
				<td width="50" align="center" valign="middle">Part.<br>(1.5)</td>
				<td width="50" align="center" valign="middle">Com. Oral<br>(2.5)</td>
				<td width="50" align="center" valign="middle">Com. Esc.<br>(1.0)</td>
				<td width="50" align="center" valign="middle">Comp. Aud.<br>(1.0)</td>
				<td width="50" align="center" valign="middle">Comp. Lect.<br>(1.0)</td>
				<td width="50" height="30" align="center" valign="middle"
					bgcolor="#0033CC">CALIF</td>
			</tr>
			<?
			include('conexion.php');
			$datos = mysql_query("SELECT * FROM calif_ingles WHERE matricula ='".$matri."' and mes='".$mes."' and ano='".$ano."'");
			while ($fila = @mysql_fetch_array($datos))
			{
			echo "<tr class='datos_boleta'>";
			echo "<td height='30' align='center' valign='middle'>".$fila['mes']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['tareas']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['examen']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['conducta']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['part']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['com_oral']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['com_esc']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['comp_aud']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['comp_lect']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['total']."</td>";
			echo"</tr>";
			}
			?>
		</table>
		<p>&nbsp;</p>
		</td>
	</tr>
	<tr>
		<td align="right" bgcolor="#FFFFFF"><a href="javascript:print()"><img
			border="0" src="../imagenes/btnImprimir.png" width="120" height="48" /></a></td>
	</tr>
	<tr>
		<td width="18" align="center" background="../imagenes/esq-izq-inf.gif">&nbsp;</td>
		<td align="right" background="../imagenes/background-inf.gif">&nbsp;</td>
		<td width="18" align="center" background="../imagenes/esq-der-inf.gif">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
		<table width="350" border="0" cellpadding="0" cellspacing="0"
			class="borde_boleta">
			<tr>
				<td height="20" colspan="2" class="titulos_tablas">Elementos que
				incluye la tabla de avance:</td>
			</tr>
			<tr>
				<td width="50" height="30" class="titulos_tablas">Part</td>
				<td width="300" height="30" bgcolor="#FFFFFF" class="datos_boleta">Participaci&oacute;n</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">Exp. Oral</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Expresi&oacute;n
				Oral</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">Exp. Escrita</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Expresi&oacute;n
				Escrita</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">Comp. Lectora</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Comprensi&oacute;n
				Lectora</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">Cond.</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Conducta</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">Ex. Oral</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Examen Oral</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">Ex. Escrito</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Examen
				Escrito</td>
			</tr>
			<tr>
				<td height="30" class="titulos_tablas">CALIF</td>
				<td height="30" bgcolor="#FFFFFF" class="datos_boleta">Calificaci&oacute;n
				final</td>
			</tr>
		</table>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
