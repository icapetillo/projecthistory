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

<body topmargin="0" onload="document.forms['form1']['nivel'].value='<? if (isset($nivel)){ echo $nivel; } else {echo '0';} ?>'">
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
    <td>&nbsp;
</td>
  </tr>
  <tr>
    <td height="300"><form id="form1" name="form1" method="post" action="lista_alumnos.php">
      <table width="400" height="207" border="0" align="center" cellpadding="0" cellspacing="0" background="../imagenes/Nivel_Grupo_Cabinet.jpg">
        <tr>
          <td height="150" colspan="2"><table width="300" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
              <td width="100" align="right"><span class="controles">Nivel:</span></td>
              <td width="200" align="left"><label>
                <select name="nivel" class="controles" id="nivel" onChange="window.location.href='?nivel='+this.options[this.selectedIndex].value">
                  <option value="0" selected="selected">--Seleccione un nivel--</option>
                  <option value="1">Maternal</option>
                  <option value="2">Preescolar</option>
                </select>
              </label></td>
            </tr>
            <tr>
              <td width="100" align="right"><span class="controles">Grupo:</span></td>
              <td width="200" align="left"><select name="grupo" class="controles" id="grupo">
              <?
			  	if (isset($nivel))
				{
					include("conexion.php");
				  
					$datos = mysql_query("SELECT grupo FROM semp_niveles_grupos WHERE nivel=".$nivel."",$link);
			
					while($fila = @mysql_fetch_array($datos)){					
					echo "<option value='".$fila['grupo']."'>".$fila['grupo']."</option>";
					}
					
				}			  
			  ?>
              </select></td>
            </tr>
            <tr>
              <td width="100" align="right">&nbsp;</td>
              <td width="200" align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="right">&nbsp;</td>
              <td align="center"><input name="button" type="submit" class="botones" id="button" value="Continuar &gt;&gt;" /></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>