<?php

set_time_limit(0);


	$con = 	@mysql_connect("200.52.83.41", "montbleu_master", "israel52") or die ("Error de conexión a la base de datos: ".mysql_error());
	@mysql_select_db("montbleumexico_com_catalogo", $con) or die ("Error al seleccionar la base de datos: ".mysql_error());

	
	$fp = fopen ("artbelleza.csv", "r");
	$i=1;
	while (($data = fgetcsv ($fp, 1000, ",")) !== FALSE){
		
		//generar el numero secuencial en 2 digitos
		$seq = str_pad((int) $i,2,"0",STR_PAD_LEFT);
		
		//generar el path de la imagen
		$path = 'artbelleza/artbelleza'.$seq.'.png';

		$insertar="insert into productos (codigo,descripcion,detalle,foto) VALUES ('".$data[0]."','".$data[1]."','".$data[2]."','$path')";

		mysql_query($insertar, $con);

		$i++;
	}

	fclose($fp);



?>