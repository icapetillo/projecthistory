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
					<td height="30" colspan="3" align="center" bgcolor="#FFFFFF">A
					continuaci&oacute;n se describe la lista de tareas encargadas para
					el periodo seleccionado. Las tareas m&aacute;s recientes se listan
					en primer orden.</td>
				</tr>
				<tr class="datos_alumno">
					<td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
					<td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
					<td height="30" align="center" bgcolor="#FFFFFF">&nbsp;</td>
				</tr>
		
		</table>
		</form>
		<table width="600" border="1" cellspacing="0" cellpadding="0">
			<tr class="titulos_tablas">
				<td width="150" height="30" align="center" valign="middle"
					bgcolor="#0033CC">Materia</td>
				<td width="150" align="center" valign="middle" bgcolor="#0033CC">Descripcion</td>
				<td width="150" align="center" valign="middle" bgcolor="#0033CC">Observaciones</td>
				<td width="150" height="40" align="center" valign="middle"
					bgcolor="#0033CC">Fecha de Entrega</td>
			</tr>
			<?
			include('conexion.php');
			$datos = mysql_query("SELECT * FROM tareas WHERE mes='".$mes."' and ano='".$ano."' and grado='".$grado."' and grupo='".$grupo."' ORDER BY idtarea DESC");
			while ($renglon = @mysql_fetch_array($datos))
			{
			echo "<tr class='datos_boleta'>";
			echo'<td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['materia'].'</td>
		  <td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['desccripcion'].'</td>
		  <td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['observaciones'].'</td>
		  <td width="150" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['dia_entrega'].'-'.$renglon['mes_entrega'].'</td>
        </tr>';
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
		&nbsp;
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
