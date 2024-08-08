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
    <td colspan="2"><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" align="right" class="usuario">Bienvenido, <? echo $usuario; ?></td>
      </tr>
      <tr>
        <td height="20" align="right" class="loginstatus"><a href="index.php" class="loginstatus">cerrar sesión</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#C7D4E5"><script type="text/javascript">
<!--
stm_bm(["menu1a91",900,"","blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0,0,1,2,"default","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,0,3,5,9,100,"",-2,"",-2,50,0,0,"#999999","transparent","",3,0,0,"#000000"]);
stm_ai("p0i0",[0,"Administración","","",-1,-1,0,"#","_self","","","","",5,5,0,"0604scroll2ldlaludrr.gif","0604scroll2lda.gif",9,16,0,0,1,"#FFFFF7",1,"#993333",1,"","",3,1,0,0,"#FFFFF7","#000000","#000000","#FF3300","bold 9pt Arial","bold 9pt Arial",0,0,"","","","",0,0,0],0,25);
stm_bp("p1",[1,4,13,0,0,0,0,0,100,"progid:DXImageTransform.Microsoft.Fade(overlap=.5,enabled=0,Duration=0.22)",-2,"",-2,88,0,0,"#666666","transparent","",3,0,0,"#33CCFF"]);
stm_aix("p1i0","p0i0",[0,"Control de usuarios de cabiNet","","",-1,-1,0,"#","_self","","","","",0,0,0,"","",0,0,0,0,1,"#F9E0CA",1,"#F9E0CA",1,"","",3,1,0,0,"#FFFFFF","#FFFFFF","#666666","#FF0000","9pt Arial","9pt Arial",0,1],0,18);
stm_aix("p1i1","p1i0",[0,"Control de alumnos"],0,18);
stm_ep();
stm_aix("p0i1","p0i0",[0,"Expedientes","","",-1,-1,0,"#","_self","","","","",5,5,0,"0604scroll2ldlaludrr.gif","0604scroll2lda.gif",9,16,0,0,1,"#FFFFF7",1,"#993333",1,"","",1],0,25);
stm_bpx("p2","p1",[1,4,14]);
stm_aix("p2i0","p1i0",[0,"Dimensión afectiva"],0,18);
stm_aix("p2i1","p1i0",[0,"Dimensión social"],0,18);
stm_aix("p2i2","p1i0",[0,"Control de asistencias y faltas"],0,18);
stm_aix("p2i3","p1i0",[0,"Reportes de diagnóstico"],0,18);
stm_aix("p2i4","p1i0",[0,"Comportamientos característicos"],0,18);
stm_ep();
stm_ep();
stm_sc(1,["transparent","transparent","","",3,3,0,0,"#FFFFF7","#000000","greytwo-u.gif","blackup.gif",7,9,0,"greytwo-d.gif","balckdown.gif",7,9,0,1,150]);
stm_em();
//-->
</script></td>
  </tr>
  <tr>
    <td width="150" rowspan="2" bgcolor="#D6DDED"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" class="titulos_tablas">Acciones de Usuarios</td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/add.png" alt="" width="16" height="16" /><a href="registrarusuarios.php" class="controles">Agregar...</a></span></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/search.png" alt="" width="16" height="16" /><a href="buscarusuarios.php" class="controles">Buscar...</a></span></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/search_user.png" width="16" height="16" /><a href="admonusuarios.php" class="controles">Ver lista de usuarios</a></td>
      </tr>
      <tr>
        <td valign="middle">&nbsp;</td>
      </tr>
    </table></td>
    <td width="650">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3" align="right"><img src="../imagenes/topBuscarUsr.jpg" width="400" height="53" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="left" class="textos">Escriba el nombre de usuario que desea buscar para encontrar sus datos..</td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Nombre de usuario para cabiNet:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles"><input name="txApPat4" type="text" id="txApPat4" size="30" />
            <input name="btGrabar" type="submit" class="botones" id="btGrabar" value="Buscar usuario" />
            </span></td>
        </tr>
        <tr>
          <td width="250">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="380">&nbsp;</td>
        </tr>
      </table>
    </form>
    <p>Resultados de la búsqueda:</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>