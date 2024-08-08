<?

session_cache_limiter('public');
session_start();
$usuario = $_SESSION['usuario_mapi'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <td width="650" align="center"><img src="../imagenes/TopParametros.jpg" width="500" height="50" /></td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="cuant_parametros_result.php">
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
            <input type="hidden" name="nombre_completo" id="nombre_completo" value='<? echo $nombre_completo; ?>' /></td>
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
          <td height="30" align="right" class="titulos_tablas">Subsección:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><select name="subseccion" id="subseccion">
            <option value="1">Cognitivos</option>
            <option value="2">Sociales</option>
            <option value="3">Vida Independiente</option>
            <option value="4">Motricidad</option>
            </select>
            </td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Año:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><select name="ano" id="ano">
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
          </select></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Cuantificación:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><select name="cuant" id="cuant">
            <option value="1">Octubre</option>
            <option value="2">Febrero</option>
            <option value="3">Junio</option>
          </select></td>
        </tr>
        <tr>
          <td height="30" align="right" class="titulos_tablas">Parámetro a evaluar:</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><select name="idparametro" id="idparametro">
            <option value="1" selected="selected">7 meses</option>
            <option value="2">8 a 12 meses</option>
            <option value="3">12 a 17 meses</option>
            <option value="4">18 a 23 meses</option>
            <option value="5">2 años</option>
            <option value="6">3 años</option>
            <option value="7">4 años</option>
            <option value="8">5 años</option>
            <option value="9">6 años</option>
          </select></td>
        </tr>
        <tr>
          <td height="30" align="right">&nbsp;</td>
          <td height="30">&nbsp;</td>
          <td height="30" class="textos"><input type="submit" name="btCuantificar" id="btCuantificar" value="Cuantificar parámetros" /></td>
        </tr>
      </table>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="left" valign="middle"><a href='menu_expediente.php?nombre_completo=<? echo utf8_encode($nombre_completo);?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr><td>&nbsp;</td></tr>
</table>
</body>
</html>