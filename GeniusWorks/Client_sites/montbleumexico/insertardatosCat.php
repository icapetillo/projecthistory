<?php
	$con = 	@mysql_connect("200.52.83.41", "montbleu_master", "israel52") or die ("Error de conexión a la base de datos: ".mysql_error());
	@mysql_select_db("montbleumexico_com_catalogo", $con) or die ("Error al seleccionar la base de datos: ".mysql_error());

	for ($i=1; $i<=57; $i++){
		
		//generar el numero secuencial en 2 digitos
		$seq = str_pad((int) $i,2,"0",STR_PAD_LEFT);
		
		//generar el path de la imagen
		$path = 'artbelleza/artbelleza'.$seq.'.png';

		//insertar los datos
		$sql = "insert into productos (categoria, foto) values ('1','$path')";
		mysql_query($sql, $con) or die("Error al ejecutar la consulta SQL: ".mysql_error());
	}
		

?>