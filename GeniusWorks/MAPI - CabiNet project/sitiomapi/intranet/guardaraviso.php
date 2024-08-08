<?
    // Configura los datos de tu cuenta
    $dbhost='200.52.83.41';
   	$dbusername='mapimx';
	$dbuserpass='gh5188';
    $dbname='mapi';
  
    

    // Conectar a la base de datos
    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    mysql_select_db($dbname) or die('Cannot select database');
	
	//Obtener valores
	//$materia = $HTTP_POST_VARS['materia'];
    //$mes = $HTTP_POST_VARS['mes'];
    //$ano = $HTTP_POST_VARS['ano'];

	
    //Insertar nuevo registro
	mysql_query("INSERT INTO avisos (fecha,aviso) values ('$fechaAviso', '$aviso')") or die(mysql_error());
	
	header("Location: capturaravisos.php?mensaje=Se ha guardado el aviso"); 
?>