<?php 
  include('../connect.php'); 

  $id = $_GET['idanunciante'];

  $sql = "select * from anunciantes where id_anunciante = $id";
  $resultado = @mysql_query($sql, $link) or die("Error: ".mysql_error());

  $fila=mysql_fetch_array($resultado);
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
    			 echo "<div id='item'>";
    					echo "<table border='0'>";
    						echo "<tr>";
    							echo "<td valign='top'>";
    							echo "<img src='../".$fila['logotipo']."' class='logo' />";
    							echo "</td>";
    							echo "<td>";
                  echo "<div class='titulo_item'>" . $fila['nombre']. "</div><br>";
                  echo "</td>";
                echo "</tr>";
                echo "<tr>";
                  echo "<td colspan='2'>";
                    echo "<b>Acerca de nosotros: </b><div class='texto_descripcion'>" . $fila['descripcion']. "</div>";
                  echo "</td>";
                echo "</tr>";
                echo "<tr>";
                  echo "<td colspan='2'>";
                  echo "<b>Tel&eacute;fono: </b><div class='texto_descripcion'>" . $fila['telefono']. "</div>";
    							echo "<b>Domicilio: </b><div class='texto_descripcion'>" . $fila['domicilio']. "</div>";
    							echo "<b>Giro: </b><div class='texto_descripcion'>" . $fila['giro']. "</div>";
                  echo "<b>Dias de servicio: </b><div class='texto_descripcion'>" . $fila['dias_servicio']. "</div>";
                  echo "<b>Horario: </b><div class='texto_descripcion'>" . $fila['horario']. "</div>";
                  echo "<b>Servicio a domicilio: </b><div class='texto_descripcion'>";
                  if ($fila['entregas_dom']==1) {
                    echo "Si";
                  }
                  else {
                    echo "No";
                  }
                  "</div>";
                  echo "<br /><b>¡Con&eacute;ctate! </b><br/>";
                  if ($fila['website'] =="#") {
                    echo "<img src='../images/world_gray.png' border='0' align='absmiddle' />";                    
                  }
                  else
                  {
                    echo "<a href='".utf8_encode($fila['website'])."' target='_blank'><img src='../images/world.png' border='0' align='absmiddle' /></a>";
                  }
    							echo "</td>";
    						echo "</tr>";
    					echo "</table>";
    				echo "</div>";    				
    			
    		?>
	</div>

	<div id="container"></div>


	<div id="footer"></div>

</body>

</html>