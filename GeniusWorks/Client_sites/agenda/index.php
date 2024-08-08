<html>

<head>
	<title>Libreta de contactos</title>
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
				include ("connect.php");

				$datos = mysql_query("SELECT * FROM contactos");
			
				echo("<h1>Libreta de contactos</h1>");
				echo("<table border='0'>");
				echo("<tr class='titulos_tablas'><td width='50'>Clave</td>
					<td width='200'>Nombre</td>
					<td width='300'>Direccion</td>
					<td width='100'>Telefono</td>
					<td width='100'>E-mail</td>
					<td width='200'>Notas</td></tr>");
				while($fila=mysql_fetch_array($datos)){
					echo("<tr class='filas_tablas'>");
					echo("<td>".$fila['clave']."</td>");
					echo("<td>".$fila['nombre']."</td>");
					echo("<td>".$fila['direccion']."</td>");
					echo("<td>".$fila['telefono']."</td>");
					echo("<td>".$fila['email']."</td>");
					echo("<td>".$fila['notas']."</td>");
					echo("</tr>");
				}
			?>
		</td>
	</tr>
	</table>
	
</body>

</html>
