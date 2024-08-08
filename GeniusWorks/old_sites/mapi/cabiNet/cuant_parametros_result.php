<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.:: cabiNet - Control de Expedientes de Tutorías ::.</title>
<script type="text/javascript" src="stmenu.js"></script>
<link href="../estilos/intranet.css" rel="stylesheet" type="text/css" />
   
</head>

<body topmargin="0"><form id="form2" name="form2" method="post" action="guardar_cuant.php" target="_blank">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <? echo $usuario; ?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesión</a></td>
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
    <td width="650" align="center"><img src="../imagenes/TopParametros.jpg" width="500" height="50" /></td>
  </tr>
  <tr>
    <td>
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
            <input type="hidden" name="id_alumno" id="id_alumno" value="<? echo $id_alumno; ?>" />
            <input type="hidden" name="nombre_completo" id="nombre_completo" value='<? echo $nombre_completo; ?>' /></td>
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
        <tr>
          <td height="30" align="right" class="titulos_tablas">Aspectos:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><? 
		  switch($subseccion){
			  case 1:
			  if ($idparametro > 7) {
			  		echo "Español";
			  		} else {
			  		echo "Cognitivos";
			  		}			  		
					break;
			  case 2:
			  if ($idparametro > 7) {
			  		echo "Matemáticas";
			  		} else {
			  		echo "Sociales";
			  		}			  	
					break;
			  case 3:
			  		echo "Vida Independiente";
					break;
			  case 4:
			  		echo "Motricidad";
					break;
			  }
		  ?></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Año:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><? echo $ano; ?>
            <input type="hidden" name="ano" id="ano" value='<? echo $ano; ?>' /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Cuantificación:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><?
		switch ($cuant){
			case 1:
				echo "Primera Cuantificación - Octubre";
				$mes_cuant=10;
				break;
			case 2:
				echo "Segunda Cuantificación - Febrero";
				$mes_cuant=2;
				break;
			case 3:
				echo "Tercera Cuantificación - Junio";
				$mes_cuant=6;
				break;
			}
?>		<input type="hidden" name="cuant" id="cuant" value="<? echo $cuant; ?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Parámetro evaluado:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><? 
		  switch($idparametro){
			  case 1:
			  	echo "7 meses";
				break;
			  case 2:
			  	echo "8 - 12 meses";
				break;
			  case 3:
			  	echo "12 - 17 meses";
				break;
			  case 4:
			  	echo "18 - 23 meses";
				break;
			  case 5:
			  	echo "2 años";
				break;
			  case 6:
			  	echo "3 años";
				break;
			  case 7:
			  	echo "4 años";
				break;
			  case 8:
			  	echo "5 años";
				break;
			  case 9:
			  	echo "6 años";
				break;
			  } 
		  ?>
            <input type="hidden" name="idparametro" id="idparametro" value="<? echo $idparametro; ?>" /></td>
        </tr>
        <tr>
          <td height="30" align="right">&nbsp;</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos">&nbsp;</td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="left" valign="middle"><a href='menu_expediente.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
      </table>
</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td height="30" align="center" class="titulos_tablas2">Resultados de la cuantificación</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" class="titulos_tablas2">
        <?
		switch ($cuant){
			case 1:
				echo "Primera Cuantificación - Octubre";
				$mes_cuant=10;
				break;
			case 2:
				echo "Segunda Cuantificación - Febrero";
				$mes_cuant=2;
				break;
			case 3:
				echo "Tercera Cuantificación - Junio";
				$mes_cuant=6;
				break;
			}
?>		

        </td>
      </tr>
      <tr>
        <td align="center">
          <br />
          <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr class="titulos_tablas">
              <td height="20">Aspecto</td>
              <td height="20">Puntos</td>
              <td height="20">Porcentaje</td>
              </tr>
            <?
		  include("conexion.php");
		  
		  //Verificar subseccion
		 switch($subseccion){
			  case 1:
			  		if ($idparametro > 7) {
			  		$sub= "Español";
			  		} else {
			  		$sub= "Cognitivos";
			  		}			  		
					break;
			  case 2:
			  		if ($idparametro > 7) {
			  		$sub= "Matemáticas";
			  		} else {
			  		$sub= "Sociales";
			  		}
					break;
			  case 3:
			  		$sub= "Vida Independiente";
					break;
			  case 4:
			  		$sub= "Motricidad";
					break;
			  }
			  
			  $aspectos=mysql_query("SELECT * FROM semp_eval_parametros WHERE mes=$mes_cuant AND idpar=$idparametro AND subseccion=$subseccion AND idalumno=$id_alumno",$link) or die(mysql_error());
			  
			  $num=mysql_num_rows($aspectos);
			  
			  $datos=mysql_query("SELECT SUM(eval) AS puntos FROM semp_eval_parametros WHERE mes=$mes_cuant AND idpar=$idparametro AND subseccion=$subseccion AND idalumno=$id_alumno",$link) or die(mysql_error());
			  
			  $fila=mysql_fetch_array($datos);
			  $pts = $fila['puntos'];
			  $porc = $pts * 25 / $num;

			  echo "<tr height='30' class='textos'>";
			  echo "<td><input type='hidden' name='subseccion' id='subseccion' value='$subseccion' />".$sub."</td>";
			  echo "<td align='center'><input type='hidden' name='pts' id='pts' value='".$pts."' />".$pts."/".$num."</td>";
			  echo "<td align='center'><input type='hidden' name='porc' id='porc' value='".number_format($porc,2)."' />".number_format($porc,2)."/25</td>";	

?>
            </table>
          <label>
          <div align="center">
            <p>&nbsp;              </p>
            <p>&nbsp;</p>
          </div>
          </label>
          <label>
            <input name="button" type="button" onclick="if (confirm('¿Seguro que desea guardar? Esta acción no se puede deshacer.')){ this.disabled=true; this.value='Guardando...'; this.form.submit()}" class="botones" id="button" value="Guardar cuantificación" />
          </label>
<p>&nbsp;</p>
        </td>
      </tr>
    </table></td>
  </tr>
</table></form>
</body>
</html>
