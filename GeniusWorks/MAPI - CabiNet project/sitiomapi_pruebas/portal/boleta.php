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
		<table border="0" cellpadding="0" cellspacing="0" width="600">
			<tbody>
				<tr class="titulos_tablas">
					<td align="center" bgcolor="#0033cc" valign="middle" width="250">Materia</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">Cond.</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">OyA</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">Asist.</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">Tar.</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">Part.</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">Exam.</td>
					<td align="center" bgcolor="#0033cc" height="30" valign="middle"
						width="50">Total</td>
				</tr>
				<?
				if ($grado<4){
				echo '<tr class="titulos_tablas">
			          <td width="250" height="20" align="center" valign="middle">&nbsp;</td>
			          <td width="50" height="20" align="center" valign="middle">10%</td>
			          <td width="50" height="20" align="center" valign="middle">10%</td>
			          <td width="50" height="20" align="center" valign="middle">10%</td>
			          <td width="50" align="center" valign="middle">20%</td>
			          <td width="50" align="center" valign="middle">20%</td>
			          <td width="50" height="20" align="center" valign="middle">30%</td>
			          <td width="50" height="20" align="center" valign="middle">100%</td>
			          </tr>';
				}
				?>
				<?
				include('conexion.php');
				$datos = mysql_query("SELECT * FROM calificaciones WHERE matricula ='".$matri."' and mes='".$mes."' and ano='".$ano."'");
				while ($renglon = @mysql_fetch_array($datos))
				{
				echo '<tr class="datos_boleta">
			          <td width="250" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['materia'].'</td>
			          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['conducta'].'</td>
			          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['oya'].'</td>
			          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['asistencia'].'</td>
			          <td width="50" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['tareas'].'</td>
			          <td width="50" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['participacion'].'</td>
			          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['examen'].'</td>
			          <td width="50" height="20" align="center" valign="middle" bgcolor="#FFFFFF">'.$renglon['total'].'</td>
			          </tr>';
				}
				?>
			</tbody>
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
		<table class="borde_boleta" border="0" cellpadding="0" cellspacing="0"
			width="350">
			<tbody>
				<tr>
					<td colspan="2" class="titulos_tablas" height="20">Elementos que
					incluye la tabla de avance:</td>
				</tr>
				<tr>
					<td class="titulos_tablas" width="50">Cond</td>
					<td class="datos_boleta" bgcolor="#ffffff" width="300">Conducta en
					el aula</td>
				</tr>
				<tr>
					<td class="titulos_tablas">OyA</td>
					<td class="datos_boleta" bgcolor="#ffffff">Orden y aseo personal</td>
				</tr>
				<tr>
					<td class="titulos_tablas">Asist</td>
					<td class="datos_boleta" bgcolor="#ffffff">Asistencias</td>
				</tr>
				<tr>
					<td class="titulos_tablas">Tareas</td>
					<td class="datos_boleta" bgcolor="#ffffff">Tareas entregadas</td>
				</tr>
				<tr>
					<td class="titulos_tablas">Part.</td>
					<td class="datos_boleta" bgcolor="#ffffff">Participación</td>
				</tr>
				<tr>
					<td class="titulos_tablas">Exam.</td>
					<td class="datos_boleta" bgcolor="#ffffff">Examen</td>
				</tr>
				<tr>
					<td class="titulos_tablas">Total.</td>
					<td class="datos_boleta" bgcolor="#ffffff">Calificacion final</td>
				</tr>
			</tbody>
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
