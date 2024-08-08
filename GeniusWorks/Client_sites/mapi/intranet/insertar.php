<?
if (isset($nombre[0],$materia,$grado,$grupo,$cond,$oya,$asist,$tareas,$part,$exam,$total,$mes,$ano))
{
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


    $matricula=explode("-",$nombre[0]);
	
    //Insertar nuevo registro
	mysql_query("INSERT INTO calificaciones (matricula, nombre,materia,grado,grupo,conducta,oya,asistencia,tareas,participacion,examen,total,mes,ano) values ('$matricula[0]', '$matricula[1]','$materia', '$grado', '$grupo', '$cond', '$oya','$asist','$tareas','$part','$exam','$total','$mes','$ano')") or die(mysql_error());
}


header("Location:captura3.php?materia=".$materia."&grado=".$grado."&grupo=".$grupo."&mes=".$mes."&ano=".$ano); 

?>