<?php
include("connect.php");
$member=$HTTP_GET_VARS["member"];
$sql = "SELECT * FROM equipo WHERE memberid = $member";
$datos = mysql_query($sql) or die (mysql_error());
$fila = mysql_fetch_array($datos);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  	<link href='css/style.css' rel='stylesheet' type='text/css' />
  	<link href='css/members.css' rel='stylesheet' type='text/css' />
	<title>GeniusWorks ::: Soluciones en Tecnologías de la Información</title>
</head>

<body bgcolor="white">
	<center>
		<table width="600" height="520" border="0">			
			<tr height="150">
				<td width="150" align="center" valign="middle">
					<? echo "<img src='images/genios/".$fila["picname"]."''>"; ?>
				</td>
				<td width="450">
					<div class="memberName"><? echo $fila["nombre"]; ?></div>
					<div class="memberPosition"><? echo $fila["posicion"]; ?></div>
					<div class="memberTwitter">En twitter: &nbsp; <? echo "<a href='http://twitter.com/".$fila['twitter_id']."' target='_blank'>@".$fila['twitter_id']."</a>"; ?></div>
				</td>
			</tr>
			<tr height="150" valign="top">
				<td colspan="2">
					<div class="memberSectionTitle">Acerca de:</div>
					<div class="memberSectionContent"><? echo $fila["descripcion"]; ?></div>
				</td>
			</tr>
			<tr height="60" valign="top">
				<td colspan="2">
					<div class="memberSectionTitle">Le gusta:</div>
					<div class="memberSectionContent"><? echo $fila["gustos"]; ?></div>
				</td>
			</tr>
			<tr height="60" valign="top">
				<td colspan="2">
					<div class="memberSectionTitle">Escucha a:</div>
					<div class="memberSectionContent"><? echo $fila["musica"]; ?></div>
				</td>
			</tr>
		
			<tr height="35" valign="top">
				<td colspan="2">
					<div align="right"><a class="botones" href="equipo.html"> << Volver al equipo</a></div> 
				</td>
			</tr>
		</table>
	</center>
</body>

</html>