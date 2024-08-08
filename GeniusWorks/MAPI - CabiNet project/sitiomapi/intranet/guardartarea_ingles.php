<?
    // Configura los datos de tu cuenta
    $dbhost='200.52.83.41';
   	$dbusername='mapimx';
	$dbuserpass='gh5188';
    $dbname='mapi';
  
    

    // Conectar a la base de datos
    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    mysql_select_db($dbname) or die('Cannot select database');
	
    //Insertar nuevo registro
	mysql_query("INSERT INTO tareas (grado,grupo,materia,desccripcion,observaciones,dia_entrega,mes_entrega,mes,ano) values ('7', '$grupo', 'Ingles', '$descripcion', '$observaciones','$dia_entrega','$mes_entrega','$mes','$ano')") or die(mysql_error());
	
	header("Location: listatareas.php?materia=Ingles&grado=7&grupo=".$grupo."&mes=".$mes."&ano=".$ano); 
?>