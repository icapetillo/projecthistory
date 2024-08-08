<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="estilos/map.css" rel="stylesheet" type="text/css">
<title>Cumpleaños del mes</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:34px;
	top:48px;
	width:252px;
	height:48px;
	z-index:1;
}
-->
</style>
</head>

<body style="margin-top:0; margin-bottom:0; margin-left:0; margin-right:0;">
<table width="500" border="0" cellpadding="0" cellspacing="0" class="textos">
  <tr>
    <td width="500" height="493" align="center" valign="top" background="imagenes/BdayBKG.png"><table width="430" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="titulos_secciones">¡¡¡FELIZ CUMPLEAÑOS!!!</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="textos"><p>Estos son los profesores que cumplen a&ntilde;os este mes:</p>
          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="20%" class="titulos_textos"><div align="center">DIA</div></td>
              <td width="80%" class="titulos_textos"><div align="center">MAESTRO(A)</div></td>
            </tr>
            
			<? 
	//Obtener el mes actual
	$f = time();
    $fecha = date("j/n/Y",$f);
	$digitos = explode("/",$fecha);
	$mes = $digitos[1];	
	//Conectarse y buscar los datos de los maestros cuyo cumpleaños es en el mes actual
		mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
        mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
   	    $datos = mysql_query("SELECT * FROM maestros WHERE mes ='".$mes."'");
		while ($renglon = @mysql_fetch_array($datos))
		{
        echo "<tr><td><div align='center'>".$renglon['dia']."</div></td><td><div align='center'>".$renglon['nombres']." ".$renglon['appaterno']." ".$renglon['apmaterno']."</div></td></tr>";
		}
	?>

          </table>          
          <p>&nbsp;</p></td>
      </tr>
    </table>
      <p>
        
        
    </p>
      <table width="430" border="0" cellpadding="0" cellspacing="0" class="textos">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>