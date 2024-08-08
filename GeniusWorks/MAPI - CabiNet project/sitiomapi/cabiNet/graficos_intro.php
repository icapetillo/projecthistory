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
    <td width="650" height="40" align="center" class="titulos_tablas">Gráficos de avance</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_eval_dim_social.php">
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
        <tr>
          <td align="right" valign="middle"><p class="controles"><img src="../imagenes/folder_full.png" width="24" height="24" /></p></td>
          <td width="200" align="left" valign="middle"><a href='menu_expediente.php?nombre_completo=<? echo utf8_encode($nombre_completo);?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>'><span class="controles">Volver a la portada del expediente</span></a></td>
        </tr>
      </table>
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" align="center" valign="middle" class="titulos_tablas2">Seleccione el parámetro que desea graficar</td>
        </tr>
        <tr>
          <td align="center" valign="middle"><table width="600" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?idparametro=1&nombre_completo=<? echo utf8_encode($nombre_completo);?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>" class="controles">7 meses</a></td>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=4&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">18 - 23 meses</a></td>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=7&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">4 años</a></td>
            </tr>
            <tr>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=2&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">8 - 12 meses</a></td>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=5&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">2 años</a></td>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=8&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">5 años</a></td>
            </tr>
            <tr>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=3&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">12 - 17 meses</a></td>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=6&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">3 años</a></td>
              <td width="200" height="30" align="center" valign="middle"><a href="grafico.php?param=9&amp;nombre_completo=<? echo utf8_encode($nombre_completo);?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>" class="controles">6 años</a></td>
            </tr>
          </table></td>
        </tr>
        </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>
</body>
</html>