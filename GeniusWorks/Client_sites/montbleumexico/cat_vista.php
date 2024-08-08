<?php
	include("db_functions.php");	

	$conexion = conectar("montbleumexico_com_catalogo");
	$sql = "select * from productos where categoria = $categoria";

	$resultado = ejecutar($sql, $conexion);
?>

<!DOCTYPE html>

<head>
	<title>MontBleu México - Sitio Oficial</title>	

	<!--CSS-->	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!--JAVASCRIPT-->
 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
</head>

<body>
    <?
    switch ($categoria) {
        case 1:
            $nombre_cat = "Artículos de Belleza";
            break;
        case 2:
            $nombre_cat = "Joyería";
            break;
        case 3:
            $nombre_cat = "Limas para uñas";
            break;
        case 4:
            $nombre_cat = "Accesorios personales";
            break;
        case 5:
            $nombre_cat = "Productos sobre pedido";
            break;
        case 6:
            $nombre_cat = "Productos personalizados";
            break;
        
    }
    ?>
    <div class="titulo_cat"><? echo strtoupper($nombre_cat); ?></div>
    <center>		
        <?
        while($fila = mysql_fetch_array($resultado)){
                echo "<div class='item_cat'>";
                        /*echo "<td width='60px'>".$fila['codigo']."</td>";*/
                        echo "<center><img src='images/catalogo/".$fila['foto']."' border'0'></center><br/>";	
                        echo "<span class='item_text'>".$fila['descripcion']."</span><br>";					
                        echo "<span class='item_detail'>".$fila['detalle']."</span>";					
                echo "</div>";
                /*echo "<tr height='180px' class='filas'>";
                        echo "<td width='60px'>".$fila['codigo']."</td>";
                        echo "<td width='270px'>".$fila['descripcion']."<br>".$fila['detalle']."</td>";
                        echo "<td width='180px'><img src='images/catalogo/".$fila['foto']."' border'0'></td>";	
                echo "</tr>";*/
        }
        ?>		
    </center>
</body>

</html>