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
        <td height="20" align="right" class="loginstatus">cerrar sesión</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><img src="../imagenes/header.jpg" width="800" height="90" /></td>
  </tr>
  <tr>
    <td width="150" rowspan="2" bgcolor="#D6DDED"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" class="titulos_tablas">Acciones de Alumnos</td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/add.png" alt="" width="16" height="16" /><a href="registraralumnos.php" class="controles">Agregar...</a></span></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><span class="controles"><img src="../imagenes/search.png" alt="" width="16" height="16" /><a href="buscaralumnos.php" class="controles">Buscar...</a></span></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF" class="controles"><img src="../imagenes/search_user.png" width="16" height="16" /><a href="admonalumnos.php" class="controles">Ver lista de alumnos</a></td>
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
    <td><form id="form1" name="form1" method="post" action="guardar_alumno.php">
      <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3" align="right"><img src="../imagenes/TopregistroAlumnos.jpg" width="300" height="43" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Apellido Paterno:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txApPat" type="text" id="txApPat" size="30" />
            </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Apellido Materno:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txApMat" type="text" id="txApMat" size="30" />
          </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Nombre(s):</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <input name="txNombres" type="text" id="txNombres" size="30" />
          </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Nivel:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <label>
              <select name="nivel" class="controles" id="nivel">
                  <option value="0" selected="selected">--Seleccione un nivel--</option>
                  <option value="1">Maternal</option>
                  <option value="2">Preescolar</option>
              </select>
              </label>
            </span></td>
        </tr>
        <tr>
          <td width="250" align="right"><span class="controles">Grupo:</span></td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <label>
              <select name="grupo" class="controles" id="grupo">
                <option value="0">--MATERNAL--</option>
                <option value="A">A</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="1">--PREESCOLAR--</option>
                <option value="FANTASIA">FANTASIA</option>
                <option value="SILVESTRE">SILVESTRE</option>
                <option value="NEWTON">NEWTON</option>
                <option value="EINSTEIN">EINSTEIN</option>
                <option value="N/A">N/A</option>
              
              </select>
            </label>
          </span></td>
        </tr>
        <tr>
          <td width="250">&nbsp;</td>
          <td width="20">&nbsp;</td>
          <td width="380"><span class="controles">
            <label>
              <input type="submit" name="btGrabar" id="btGrabar" value="Grabar alumno" />
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