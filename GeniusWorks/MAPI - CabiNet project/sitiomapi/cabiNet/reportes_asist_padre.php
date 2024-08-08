<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutor&iacute;as ::.</title>
<script type="text/javascript" src="stmenu.js"></script>
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />  

</head>

<body topmargin="0">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <? echo $usuario; ?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesi&oacute;n</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="650" align="center"><img src="../imagenes/TopReportesAsist.jpg" width="500" height="53" /></td>
  </tr>
  <tr>
    <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="130">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr>
        <td width="130" height="30" align="right" class="titulos_tablas">Alumno:</td>
        <td width="20" height="30">&nbsp;</td>
        <td width="250" height="30" class="textos"><? echo $nombre_completo; ?>
          <input type="hidden" name="id_alumno" id="id_alumno" value="<? echo $id_alumno; ?>" />
          <input type="hidden" name="nom_completo" id="nom_completo" value='<? echo $nombre_completo; ?>' /></td>
      </tr>
      <tr>
        <td width="130" height="30" align="right" class="titulos_tablas">Nivel:</td>
        <td width="20" height="30">&nbsp;</td>
        <td width="250" height="30" class="textos"><? if($nivel==1){echo 'MATERNAL';} else {echo 'PREESCOLAR';}?>
          <input type="hidden" name="nivel" id="nivel" value="<? echo $nivel; ?>" /></td>
      </tr>
      <tr>
        <td width="130" height="30" align="right" class="titulos_tablas">Grupo:</td>
        <td width="20" height="30">&nbsp;</td>
        <td width="250" height="30" class="textos"><? echo $grupo; ?>
          <input type="hidden" name="grupo" id="grupo" value="<? echo $grupo; ?>" /></td>
      </tr>
    </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="controles">
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="right" valign="middle"><a href='menu_expediente_padre.php?nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>' class="controles">Volver a la portada del expediente</a></td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="200" height="40" class="titulos_tablas">Mes</td>
          <td width="100" height="40" class="titulos_tablas">Clases del mes</td>
          <td width="100" height="40" class="titulos_tablas">Asistencias</td>
          <td width="100" height="40" class="titulos_tablas">Faltas</td>
        </tr>
        <tr>
          <?
			include('conexion.php');
			$datos = mysql_query("SELECT * FROM semp_asistencias WHERE idalumno=$id_alumno ORDER BY mes ASC",$link);
			
			while ($fila = @mysql_fetch_array($datos)){
			   $mes_num=$fila['mes'];
			   switch($mes_num)
			   {
				   case 1:
				   		$mes_nombre="Enero";
						break;
					case 2:
						$mes_nombre="Febrero";
						break;
					case 3:
						$mes_nombre="Marzo";
						break;
					case 4:
						$mes_nombre="Abril";
						break;
					case 5:
						$mes_nombre="Mayo";
						break;
					case 6:
						$mes_nombre="Junio";
						break;
					case 7:
						$mes_nombre="Julio";
						break;
					case 8:
						$mes_nombre="Agosto";
						break;
					case 9:
						$mes_nombre="Septiembre";
						break;
					case 10:
						$mes_nombre="Octubre";
						break;
					case 11:
						$mes_nombre="Noviembre";
						break;
					case 12:
						$mes_nombre="Diciembre";
						break;
				   }
			   echo "<td width='200' class='textos' height='40'><div align='center'>".$mes_nombre."</div></td>";
               echo "<td width='100' class='textos' height='40' align='center'><div align='center'>".$fila['total_clases']."</div></td>";
               echo "<td width='100' class='textos' height='40' align='center'><div align='center'>".$fila['asistencias']."</div></td>";
               echo "<td width='100' class='textos' height='40' align='center'><div align='center'>".$fila['faltas']."</div></td>";
		   }	   
		?>
        </tr>
      </table>
    <p></p></td>
  </tr>
</table>
</body>
</html>