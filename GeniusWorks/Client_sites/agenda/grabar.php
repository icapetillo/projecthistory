<html>

<head>
	<title>Agenda de contactos</title>
	<link href='estilo.css' rel='stylesheet' type='text/css' />
</head>

<body>
	<table width='100%' border='0'>
	<tr heigth='600'>
		<td width='200' valign='top'>
			<a href='index.php' class='enlace'>INICIO</a><br>
			<a href='grabar.html' class='enlace'>Nuevo contacto</a><br>
			<a href='buscar.html' class='enlace'>Buscar contacto</a><br>
		</td>
		<td>
		<?
			include("connect.php");

			$nombre=$_POST["nombre"];
			$direccion=$_POST["direccion"];
			$telefono=$_POST["telefono"];
			$email=$_POST["email"];
			$notas=$_POST["notas"];

			mysql_query("INSERT INTO contactos (nombre, direccion, telefono, email, notas) values ('$nombre', '$direccion', '$telefono', '$email', '$notas')") or die (mysql_error());

			echo ("Los datos se han grabado con éxito");
		?>
		</td>
	</tr>
	</table>
	
</body>

</html>
