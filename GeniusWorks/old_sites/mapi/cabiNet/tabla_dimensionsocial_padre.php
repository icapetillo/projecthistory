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

<body topmargin="0">
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
    <td width="650" align="center"><img src="../imagenes/TopDimensionSocial.jpg" width="400" height="67" /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="tabla_dimensionsocial_padre.php">
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
            <input type="hidden" name="nombre_completo" id="nombre_completo" value='<? echo $nombre_completo; ?>' />
            <input type="hidden" name="id_alumno" id="id_alumno" value=<? echo $id_alumno; ?> /></td>
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
        <tr>
          <td height="30" align="right" class="titulos_tablas">Ciclo Escolar:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><label>
            <select name="ano" id="ano">
              <option value="2010" selected="selected">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              </select>
            <select name="ano2" id="ano2">
              <option value="2010" selected="selected">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td height="30" colspan="2" align="right">&nbsp;</td>
          <td height="30" class="textos"><label>
            <input name="btConsultar" type="submit" class="botones" id="btConsultar" value="Consultar evaluación" />
          </label></td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td align="left" valign="middle"><a href='menu_expediente_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
      </table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="450" height="30">&nbsp;</td>
          <td><table width="300" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="90" height="30" class="titulos_tablas2"><? echo "$ano"; ?></td>
              <td width="5">&nbsp;</td>
              <td width="178" class="titulos_tablas2"><? echo "$ano2"; ?></td>
              <td width="27">&nbsp;</td>
            </tr>
          </table></td>
          </tr>
      </table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="450" rowspan="2" valign="top"><table width="450" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr class="titulos_tablas2">
              <td width="30" height="30">ID</td>
              <td width="420" height="30">Competencia</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">1</td>
              <td height="30">Se comunica con sus compañeros.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">2</td>
              <td height="30"><p>Se relaciona espontáneamente con sus guías.</p></td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">3</td>
              <td height="30">Acepta y respeta normas establecidas.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">4</td>
              <td height="30">Participa en juegos.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">5</td>
              <td height="30">Participa en trabajos por equipo de forma prudente.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">6</td>
              <td height="30">Tiene y maneja buenos hábitos.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">7</td>
              <td height="30">Termina sus trabajos y deja sus utensilios y material en orden.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">8</td>
              <td height="30">Comparte su material espontáneamente.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">9</td>
              <td height="30">Participa animosamente festejando los trabajos de sus compañeros.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">10</td>
              <td height="30">Respeta la manera de pensar de sus compañeros.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">11</td>
              <td height="30">Cuida el material e instrumentos de trabajo.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">12</td>
              <td height="30">Inicia una acción cuando se le indica.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">13</td>
              <td height="30">Suspende una acción cuando se le indica.</td>
            </tr>
            <tr class="textos">
              <td height="30" align="center">14</td>
              <td height="30">Respeta sus horarios de trabajo.</td>
            </tr>
            </table></td>
          <td width="95" height="30" align="left" valign="top"><table width="90" border="1" cellpadding="0" cellspacing="0" class="controles">
            <tr class="meses">
              <td width="20" height="30">Sep</td>
              <td width="20" height="30">Oct</td>
              <td width="20" height="30">Nov</td>
              <td width="20" height="30">Dic</td>
              </tr>
            </table></td>
          <td width="205" align="left" valign="top"><table width="178" border="1" cellpadding="0" cellspacing="0" class="controles">
            <tr class="meses">
              <td width="20" height="30">Ene</td>
              <td width="20" height="30">Feb</td>
              <td width="20" height="30">Mar</td>
              <td width="20" height="30">Abr</td>
              <td width="20" height="30">May</td>
              <td width="20" height="30">Jun</td>
              <td width="20" height="30">Jul</td>
              <td width="20" height="30">Ago</td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td width="95" valign="top"><table border="1" cellpadding="0" cellspacing="0">
            <?php
		  include("conexion.php");
		  $datos1 = mysql_query("SELECT * FROM semp_dim_social WHERE idalumno=".$id_alumno." and ano=".$ano." ORDER BY id_parametro ASC",$link);
		  $meses1 = mysql_query("SELECT DISTINCT mes FROM semp_dim_social WHERE idalumno=".$id_alumno." and ano=".$ano, $link) or die;
		  $num_meses1 = mysql_num_rows($meses1);

//Crear la tabla para en año 1
		for ($k=1; $k<=14; $k++)
		{
			echo "<tr height='32' class='controles'>";
				for ($cont=1; $cont<=$num_meses1; $cont++)
				{
					$fila = @mysql_fetch_row($datos1);
					$valor=$fila[6];
					if ($valor==1)
					{
						$color='#000066';
					}
					if ($valor==0.5)
					{
						$color='#A2E0F9';
					}
					if ($valor==0)
					{
						$color='#FFFFFF';
					}
					echo "<td width='19' align='center' bgcolor='$color'></td>";		
				}
			echo "</tr>";
		}
		  ?></table>
            </td>
          <td width="205" valign="top">
            <table border="1" cellpadding="0" cellspacing="0">
              <?php
		  include("conexion.php");
		  $datos2 = mysql_query("SELECT * FROM semp_dim_social WHERE idalumno=".$id_alumno." and ano=".$ano2." ORDER BY id_parametro ASC",$link);
  		  $meses2 = mysql_query("SELECT DISTINCT mes FROM semp_dim_social WHERE idalumno=".$id_alumno." and ano=".$ano2, $link) or die;
		  $num_meses2 = mysql_num_rows($meses2);

//Crear la tabla para en año 2
		for ($k=1; $k<=14; $k++)
		{
			echo "<tr height='32' class='controles'>";
				for ($cont=1; $cont<=$num_meses2; $cont++)
				{
					$fila = @mysql_fetch_row($datos2);
					$valor=$fila[6];
					if ($valor==1)
					{
						$color='#000066';
					}
					if ($valor==0.5)
					{
						$color='#A2E0F9';
					}
					if ($valor==0)
					{
						$color='#FFFFFF';
					}
					echo "<td width='19' align='center' bgcolor='$color'></td>";		
				}
			echo "</tr>";
		}
		  ?></table>
            </td>
          </tr>
      </table>
    </form>      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
