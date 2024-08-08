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

			$buscar=$_POST["buscar"];

			$resultados = mysql_query("SELECT * FROM contactos WHERE nombre LIKE '%".$buscar."%'") or die (mysql_error());
			$num = mysql_num_rows($resultados);

			if ($num>0){
				echo("Se encontraron $num coincidencias: <br><br>");
				echo("<table border='0'>");
				echo("<tr class='titulos_tablas'><td width='50'>Clave</td>
					<td width='500'>Nombre</td>
					<td width='50'>Ver</td></tr>");
				$cont=0;
				while($fila=mysql_fetch_array($resultados)){
					if ($cont % 2 == 0){
						$color = "#FFFFFF";
					} else {
						$color = "#ACD9FD";
					}
					echo("<tr class='filas_tablas' bgcolor='$color'>");
					echo("<td>".$fila['clave']."</td>");
					echo("<td>".$fila['nombre']."</td>");
					echo("<td><center><img src='search.png' border='0'></center></td>");
					echo("</tr>");
					$cont++;
				}
			}else{
				echo("No se encontraron contactos que coincidan con el término de búsqueda");
			}
			?>		
		</td>
	</tr>
	</table>
	
</body>

</html>

