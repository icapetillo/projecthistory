<?
if (isset($nombre[0],$materia,$grado,$grupo,$part,$exp_oral,$exp_esc,$comp_lect, $comp_aud, $cond, $ex_oral,$ex_escrito,$total,$mes,$ano))
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
	mysql_query("INSERT INTO calif_ingles (matricula, nombre, materia, grado, grupo, mes, ano, tareas, examen, conducta, part, com_oral, com_esc, comp_aud, comp_lect, total) values ('$matricula[0]', '$matricula[1]','$materia', '$grado', '$grupo', '$mes', '$ano', '$part', '$exp_oral','$exp_esc','$comp_lect','$comp_aud','$cond', '$ex_oral', '$ex_escrito','$total')") or die(mysql_error());
}

header("Location:captura3_ingles.php?grupo=".$grupo."&mes=".$mes."&ano=".$ano); 


?>
