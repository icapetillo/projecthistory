<?php require_once('../Connections/SIPRE.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE usuarios SET usuario=%s, password=%s, Perfil=%s WHERE email=%s",
                       GetSQLValueString($_POST['usuario'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['Perfil'], "text"),
                       GetSQLValueString($_POST['email'], "text"));

  mysql_select_db($database_SIPRE, $SIPRE);
  $Result1 = mysql_query($updateSQL, $SIPRE) or die(mysql_error());

  $updateGoTo = "ConsultaGral_User.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['email'])) {
  $colname_Recordset1 = $_GET['email'];
}
mysql_select_db($database_SIPRE, $SIPRE);
$query_Recordset1 = sprintf("SELECT * FROM usuarios WHERE email = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $SIPRE) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<style type="text/css">
.Borde_celda {	border-radius: 10;
	border: 1px solid #CCC;
}
.Submenu1 {font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	margin: 0 auto 0 auto;
	text-align: left;
	height: 300px;
	float: left;
	width: 220px;
}
.Subtitulos1 {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #FFF;
	margin: 0 auto 0 auto;
	text-align: center;
	border-bottom: 1px #ccc solid;
	height: 30px;
	background-color: #3A557E;
	line-height: 30px;
}
.T_captura {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	border-radius: 10;
	border: 1px solid #CCC;
	padding-top: 10px;
	text-align: left;
}
.Tabla21 {text-align: left;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #4187D7;
}
.Instrucciones {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	margin: 0 auto 0 auto;
	text-align: left;
	height: 60px;
}
</style>
</head>

<body>
<table width="835" height="450" border="0" cellpadding="1">
  <tr>
    <td width="226" height="446" bgcolor="#D7DCE0" class="Borde_celda"><div class="Subtitulos1">Módulo de Usuarios</div>
      <div class="Submenu1">
        <p>&nbsp;</p>
        <p><a href="Nuevo_Usuario.php" class="Tabla21">Nuevo</a></p>
        <p><a href="ConsultaGral_User.php" class="Tabla21">Consulta</a></p>
        <p>&nbsp;</p>
      </div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="599" height="446" class="T_captura"><div>
      <p>Modifica la información que consideras prudente actualizar, no olvides guardar tus actualizaciones...</p>
      <p>&nbsp;</p>
    </div>
      <div></div>
      <p>&nbsp;</p>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Email:</td>
            <td><?php echo $row_Recordset1['email']; ?></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Usuario:</td>
            <td><input type="text" name="usuario" value="<?php echo htmlentities($row_Recordset1['usuario'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Password:</td>
            <td><input type="text" name="password" value="<?php echo htmlentities($row_Recordset1['password'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Perfil:</td>
            <td><input type="text" name="Perfil" value="<?php echo htmlentities($row_Recordset1['Perfil'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Actualizar registro" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="form1" />
        <input type="hidden" name="email" value="<?php echo $row_Recordset1['email']; ?>" />
      </form>
      <p>&nbsp;</p>
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
