<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../estilos/portal.css" type="text/css" />
<title>Tabla de avance individual</title>
<style type="text/css">
<!--
body {
	background-image: url(../imagenes/fondoPagina.png);
}
-->
</style>
</head>
<body style="margin-top: 0px;">
<table class="tablas" align="center" border="0" cellpadding="0"
	cellspacing="0" width="750">
	<tr>
		<td align="left" background="../imagenes/fondoTablaNavega.png"
			bgcolor="#ffffff" height="30"><span class="datos_alumno"><a
			href="javascript:history.back()"><img src="../imagenes/btnvolver.png"
			border="0" height="30" width="150" /></a></span></td>
	</tr>
	<tr>
		<td align="center" bgcolor="#ffffff">
		<form id="form1" name="form1" method="post" action="boleta.php">
		<table border="0" cellpadding="0" cellspacing="0" width="600">
			<tbody>
				<tr>
					<td colspan="3" class="datos_alumno" align="center"
						bgcolor="#ffffff">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="3" class="titulo_boleta" align="center"
						bgcolor="#ffffff">Tabla de avance individual</td>
				</tr>
				<tr>
					<td bgcolor="#ffffff">&nbsp;</td>
					<td bgcolor="#ffffff">&nbsp;</td>
					<td bgcolor="#ffffff">&nbsp;</td>
				</tr>
				<tr class="encabezados_boleta">
					<td align="center" width="150">MATRICULA</td>
					<td align="center" width="300">NOMBRE</td>
					<td align="center" width="150">PERIODO</td>
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
				<td width="50" align="center" valign="middle">Part.<br>(1.5)</td>
				<td width="50" align="center" valign="middle">Exp. Oral<br>(1.5)</td>
				<td width="50" align="center" valign="middle">Exp. Escrita<br>(1.5)</td>
				<td width="50" align="center" valign="middle">Comp. Lectura<br>(1.5)</td>
				<td width="50" align="center" valign="middle">Comp. Aud.<br>(1.5)</td>
				<td width="50" align="center" valign="middle">Cond.<br>(1.0)</td>
				<td width="50" align="center" valign="middle">Ex. Oral<br>(0.75)</td>
				<td width="50" align="center" valign="middle">Ex. Escrito<br>(0.75)</td>
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
			echo "<td height='30' align='center' valign='middle'>".$fila['part']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['exp_oral']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['exp_esc']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['comp_lect']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['comp_aud']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['cond']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['ex_oral']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['ex_escrito']."</td>";
			echo "<td height='30' align='center' valign='middle'>".$fila['total']."</td>";
			echo"</tr>";
			}
			?>
		</table>
		<p>&nbsp;</p>
		</td>
	</tr>
	<tr>
		<td align="right" bgcolor="#ffffff"><a href="javascript:print()"><img
			src="../imagenes/btnImprimir.png" border="0" height="48" width="120" /></a></td>
	</tr>
	<tr bgcolor="#ffffff">
		<td style="vertical-align: top; horizontal-align: center;">
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
	</tr>
	<tr>
		<td style="vertical-align: top; background-color: white;">&nbsp;</td>
	</tr>


	</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

</body>
</html>
