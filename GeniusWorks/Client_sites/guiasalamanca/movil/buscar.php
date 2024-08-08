<?
	include("../connect.php");

	$parametros = $_POST['searchbox'];

	$sql = "select * from anunciantes where descripcion like '%". $parametros ."%' or nombre like '%". $parametros ."%' or keywords like '%" . $parametros ."%' order by nombre asc";

	$resultado = mysql_query($sql, $link) or die("Error: ".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
  <title>.: Guia Salamanca - La gu&iacute;a definitiva para comprar en tu ciudad :.</title>
	<!--META-->  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../images/favicon.ico" />

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="movilcss.css">
	
	<!--JAVASCRIPT-->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


</head>

<body>
	
	<div id="topbar">
		<center>
			<a href="index.php"><img src="../images/logotop.png" ></a>
		</center>
	</div>


	<div id="nav_menu"></div>


	<div id="search">
		<div id="searchwidget">
          <form action="buscar.php" method="post">              
              <input type="text" id="searchbox" name="searchbox" placeholder="Escribe tu b&uacute;squeda"/>              
              <input type="image" src="../images/find.png" align="absmiddle">
          </form>
        </div>
	</div>
	<div id="searchresults">
	<?php
    			while ($fila = mysql_fetch_array($resultado)){				

    				echo "<a href='anuncio.php?idanunciante=". $fila['id_anunciante'] ."'><div id='item'>";
    					echo "<table>";
    						echo "<tr>";
    							echo "<td valign='top'>";
    							echo "<img src='../".$fila['logotipo']."' class='logo' />";
    							echo "</td>";
    							echo "<td>";
                    if ($fila['tipo_anuncio'] == 1){
                      echo "<img src='../images/star.png' />";
                      echo "<a href='anuncio.php?idanunciante=". $fila['id_anunciante'] ."' class='titulo_item'>" . $fila['nombre']. "</a><br>";
                    }
                    else {
                      echo "<div class='titulo_item'>" . $fila['nombre']. "</div><br>";
                    }
    								
    								echo "<b>Tel&eacute;fono: </b><div class='texto_descripcion'>" . $fila['telefono']. "</div>";
    								echo "<b>Domicilio: </b><div class='texto_descripcion'>" . $fila['domicilio']. "</div>";
    								echo "<b>Giro: </b><div class='texto_descripcion'>" . $fila['giro']. "</div>";
    							echo "</td>";
    						echo "</tr>";
    					echo "</table>";
    				echo "</div></a>";    				
    			}
    		?>
	</div>

	<div id="container"></div>


	<div id="footer"></div>

</body>

</html>