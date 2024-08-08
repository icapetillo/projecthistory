<?php
session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
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
        <td height="20" align="right" class="usuario">Bienvenido, <?php echo $usuario; ?></td>
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
    <td width="650" align="center"><img src="../imagenes/TopDimensionAfectiva.jpg" width="350" height="43" /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_reporte.php">
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="130">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="250">&nbsp;</td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Alumno:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $nombre_completo; ?>
            <input type="hidden" name="id_alumno" id="id_alumno" value=<? echo $id_alumno; ?> />
            <input type="hidden" name="nom_completo" id="nom_completo" value='<? echo $nombre_completo; ?>' /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Nivel:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? if($nivel==1){echo 'MATERNAL';} else {echo 'PREESCOLAR';}?>
            <input type="hidden" name="nivel" id="nivel" value=<? echo $nivel; ?> /></td>
        </tr>
        <tr>
          <td width="130" height="30" align="right" class="titulos_tablas">Grupo:</td>
          <td width="20" height="30">&nbsp;</td>
          <td width="250" height="30" class="textos"><? echo $grupo; ?>
            <input type="hidden" name="grupo" id="grupo" value=<? echo $grupo; ?> /></td>
        </tr>
     
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="controles">
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" alt="" width="24" height="24" /></p></td>
          <td width="200" align="right" valign="middle"><a href='menu_expediente.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>' class="controles">Volver a la portada del expediente</a></td>
        </tr>
      </table>
<br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
       <tr><td colspan="6"><h2>Borradores existentes</h2></td></tr>
       <tr class="titulos_tablas">
       	<td width="100">Mes/Año</td><td width="410">Alumno</td><td width="90">Ver borrador</td>
       </tr>
       <!-- introducir código para generar la lista de reportes -->
       <?php
       include("conexion.php");
       $datos = mysql_query("Select Distinct mes, ano from semp_borradores_dim_afectiva where idalumno=$id_alumno order by ano DESC, mes DESC");
       $num_fila=0;       
       while($fila = mysql_fetch_array($datos)) {
	$mes1=$fila['mes'];
	$ano1=$fila['ano'];
       	if ($num_fila%2==0){
			   $color_fila='#FFFFFF';
			}else{
			   $color_fila='#ACD9FD';
			}
			$num_reporte = $fila['idreporte'];
       	echo "<tr class='textos' bgcolor='".$color_fila."'>";
       	echo "<td width='100' align='center'>".$fila['mes']."/".$fila['ano']."</td>";
       	echo "<td width='410' align='center'>".$nombre_completo."</td>";
       	echo "<td width='90' align='center'><a href='borrador_dimensionafectiva.php?nombre_completo=$nombre_completo&nivel=$nivel&grupo=$grupo&id_alumno=$id_alumno&mes=$mes1&ano=$ano1'><img src='search.png' alt='Ver este borrador' border='0'></td>";      	
       	echo "</tr>";
       	$num_fila++;
       	} 
       ?>
       <tr height="80">&nbsp;</tr>
      </table>
      
    </form></td>
  </tr>
</table>
</body>
</html>
