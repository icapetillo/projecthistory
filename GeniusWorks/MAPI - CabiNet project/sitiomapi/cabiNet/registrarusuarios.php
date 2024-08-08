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
        <td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/back.png" alt="" width="16" height="16" /><a href="admin_intro.php" class="controles">Volver al menú</a></td>
      </tr>
      <tr>
        <td valign="middle">&nbsp;</td>
      </tr>
    </table></td>
    <td width="650">&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_usuario.php">
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3" align="right"><img src="../imagenes/TopRegistroUsuarios.jpg" width="300" height="41" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="left" class="textos">Proporcione los datos que se piden sobre el usuario de <em><strong>cabiNet</strong></em>. Los campos marcados con <font color="#FF0000">*</font> son obligatorios.</td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="250" align="right" class="controles"><span class="controles">Apellido Paterno:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txApPat" type="text" id="txApPat" size="30" />
          </span></td>
        </tr>
        <tr>
          <td width="250" align="right" class="controles"><span class="controles">Apellido Materno:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txApMat" type="text" id="txApMat" size="30" />
          </span></td>
        </tr>
        <tr>
          <td width="250" align="right" class="controles"><span class="controles">Nombre(s):</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txNombres" type="text" id="txNombres" size="30" />
          </span></td>
        </tr>
        <tr>
          <td align="right" class="controles">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="250" align="right" class="controles"><span class="controles">Nombre de usuario para cabiNet:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles"><input name="txUsrName" type="text" id="txUsrName" size="30" /><font color="#FF0000">
          *</font></span></td>
        </tr>
        <tr class="controles">
          <td align="right" class="controles">Contraseña:</td>
          <td>&nbsp;</td>
          <td><input name="txPass1" type="password" id="txPass1" size="30" />
            <font color="#FF0000">*</font></td>
        </tr>
        <tr>
          <td width="250" align="right" class="controles"><span class="controles">Repetir contraseña:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txPass2" type="password" id="txPass2" size="30" />
            <font color="#FF0000">*</font></span></td>
        </tr>
        <tr>
          <td align="right" class="controles">Rol del usuario:</td>
          <td>&nbsp;</td>
          <td><select name="rol" id="rol">
            <option value="1">Administrador</option>
            <option value="2">Maestro</option>
          </select></td>
        </tr>
        <tr>
          <td align="right" class="controles">&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input name="status" type="checkbox" id="status" value="1" checked="checked" />
            <span class="controles">            Activar usuario</span></label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="250">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <label>
              <input name="btGrabar" type="submit" class="botones" id="btGrabar" value="Grabar usuario" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td width="250">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="380">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>