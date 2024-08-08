<?php

	include("connect.php");
	$idanunciante = $_GET['idanunciante'];
	$sql = "select mapa from mapas where id_anunciante=$idanunciante";
	$resultado = mysql_query($sql, $link) or die("Error: ".mysql_error());

	$fila = mysql_fetch_array($resultado);

	echo "<div class='linktext'>".$fila['mapa']."</div>";


?>