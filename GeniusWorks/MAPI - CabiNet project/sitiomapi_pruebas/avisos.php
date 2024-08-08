<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"" />
<link href="estilos/intranet.css" rel="stylesheet" type="text/css" />
<title>Avisos</title>
</head>

<body style="margin-top:0; margin-bottom:0">
<table width="430" border="0" cellspacing="2" cellpadding="2">
<?
	    //Traer la tabla de base de datos actualizada
		// Configura los datos de tu cuenta
	    $dbhost='200.52.83.41';
    	$dbusername='mapimx';
	    $dbuserpass='gh5188';
    	$dbname='mapi';
  
    	// Conectar a la base de datos
	    $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
    	mysql_select_db($dbname) or die('Cannot select database');
		
		$datos = mysql_query("SELECT * FROM avisos ORDER BY idaviso DESC",$link);
		
	  	while($fila = @mysql_fetch_array($datos)){
	    echo "<tr  class='avisos2'>";
        echo "<td width='130' align='center' valign='top'><b><i>".$fila['fecha']."</i></b></td>";
        echo "<td width='300' valign='middle'>".$fila['aviso']."</td>";
        echo"</tr>";		
		}
?>
</table>
</body>
</html>