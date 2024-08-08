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
    <td width="650" height="30" align="center" class="titulos_tablas2">Administración de cabiNet</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="guardar_eval_dim_social.php">
      <br />
      <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" align="center" valign="middle" class="titulos_tablas2">Seleccione la acción que desea realizar</td>
        </tr>
        <tr>
          <td align="center" valign="middle"><table width="400" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="200" height="30" align="center" valign="middle" class="controles2"><a href="admonusuarios.php" class="controles2"><img src="../imagenes/users.png" width="16" height="16" border="0" />Usuarios de cabiNet</a></td>
              <td width="200" height="30" align="center" valign="middle" class="controles2"><img src="../imagenes/open_folder_accept.png" width="16" height="16" /><a href="selnivelgrupo.php" class="controles2">Ver expedientes</a></td>
              </tr>
            <tr>
              <td width="200" height="30" align="center" valign="middle" class="controles2"><img src="../imagenes/book.png" width="16" height="16" border="0" /><a href="admonalumnos.php" class="controles2">Alumnos</a></td>
              <td width="200" height="30" align="center" valign="middle" class="controles2"><img src="../imagenes/accept.png" width="16" height="16" border="0" /><a href="asignarpermisos.php" class="controles2">Permisos</a></td>
              </tr>
            <tr>
              <td width="200" height="30" align="center" valign="middle" class="controles2">&nbsp;</td>
              <td width="200" height="30" align="center" valign="middle" class="controles2">&nbsp;</td>
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