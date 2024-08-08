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
<style type="text/css">
<!--
.Estilo1 {font-size: 14px}
-->
</style>
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
    <td width="650">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><img src="../imagenes/topExpediente.jpg" width="400" height="55" /></td>
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
        <td width="250" height="30" class="textos"><? echo $nombre_completo; ?></td>
      </tr>
      <tr>
        <td width="130" height="30" align="right" class="titulos_tablas">Nivel:</td>
        <td width="20" height="30">&nbsp;</td>
        <td width="250" height="30" class="textos"><? if($nivel==1){echo 'MATERNAL';} else {echo 'PREESCOLAR';}?></td>
      </tr>
      <tr>
        <td width="130" height="30" align="right" class="titulos_tablas">Grupo:</td>
        <td width="20" height="30">&nbsp;</td>
        <td width="250" height="30" class="textos"><? echo $grupo; ?></td>
      </tr>
    </table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td width="165" align="right" valign="middle">&nbsp;</td>
        </tr>
      </table>
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle">&nbsp;</td>
          <td width="165" align="right" valign="middle">&nbsp;</td>
        </tr>
      </table>
      <table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="40" colspan="4" align="center" valign="middle" class="titulos_tablas">Elementos del expediente del alumno</td>
        </tr>
        <tr>
          <td width="180" height="90" align="center" valign="middle"><a href="tabla_dimensionafectiva_padre.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btDimAfect.jpg" width="85" height="80" border="0" /></a></td>
          <td width="180" height="90" align="center" valign="middle"><a href="tabla_dimensionsocial_padre.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btDimSocial.jpg" width="82" height="80" border="0" /></a></td>
          <td width="180" height="90" align="center" valign="middle"><a href="tabla_parametros_padre.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btCompCar.jpg" width="112" height="80" border="0" /></a></td>
          <td width="180" height="90" align="center" valign="middle"><a href="cuant_parametros_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btCalculo.jpg" width="86" height="80" border="0" /></a></td>
        </tr>
        <tr>
          <td height="90" align="center" valign="middle"><a href="graficos_intro_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btGraficas.jpg" alt="" width="88" height="80" border="0" /></a></td>
          <td height="90" align="center" valign="middle"><a href="reportes_resumen_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btRepDiag.jpg" alt="" width="87" height="80" border="0" /></a></td>
          <?php /*?><?php */?>
          <td width="180" height="90" align="center" valign="middle"><a href="reportes_asist_padre.php?nombre_completo=<? echo $nombre_completo;?>&nivel=<? echo $nivel; ?>&grupo=<? echo $grupo; ?>&id_alumno=<? echo $id_alumno; ?>"></a><a href="reportes_asist_padre.php?nombre_completo=<? echo $nombre_completo;?>&amp;nivel=<? echo $nivel; ?>&amp;grupo=<? echo $grupo; ?>&amp;id_alumno=<? echo $id_alumno; ?>"><img src="../imagenes/btRepAsist.jpg" alt="" width="79" height="80" border="0" /></a></td>
          <td width="180" height="90" align="center" valign="middle"><label><span class="botones Estilo1"><strong class="botones Estilo1"><a href="http://187.144.130.115:8010"><br>
          <img src="../imagenes/resultset_next.png" border="0"><br>
                    Cámaras
          </a></strong><br>
          </span></label></td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
