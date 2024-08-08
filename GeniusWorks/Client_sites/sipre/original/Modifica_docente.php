<?php require_once('../Connections/SIPRE.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "Acceso.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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
  $updateSQL = sprintf("UPDATE docentes SET nombre_dct=%s, apellido_pat_dct=%s, apellido_mat_dct=%s, perfil_dct=%s, foto_dct=%s, horario_dct=%s WHERE id_docente=%s",
                       GetSQLValueString($_POST['nombre_dct'], "text"),
                       GetSQLValueString($_POST['apellido_pat_dct'], "text"),
                       GetSQLValueString($_POST['apellido_mat_dct'], "text"),
                       GetSQLValueString($_POST['perfil_dct'], "text"),
                       GetSQLValueString($_POST['foto_dct'], "text"),
                       GetSQLValueString($_POST['horario_dct'], "text"),
                       GetSQLValueString($_POST['id_docente'], "text"));

  mysql_select_db($database_SIPRE, $SIPRE);
  $Result1 = mysql_query($updateSQL, $SIPRE) or die(mysql_error());

  $updateGoTo = "ConsultaGral_Docente.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_RSModifica_docente = "-1";
if (isset($_GET['id_docente'])) {
  $colname_RSModifica_docente = $_GET['id_docente'];
}
mysql_select_db($database_SIPRE, $SIPRE);
$query_RSModifica_docente = sprintf("SELECT * FROM docentes WHERE id_docente = %s", GetSQLValueString($colname_RSModifica_docente, "text"));
$RSModifica_docente = mysql_query($query_RSModifica_docente, $SIPRE) or die(mysql_error());
$row_RSModifica_docente = mysql_fetch_assoc($RSModifica_docente);
$totalRows_RSModifica_docente = mysql_num_rows($RSModifica_docente);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<style type="text/css">
.T_captura {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	border-radius: 10px;
	border: 1px solid #CCC;
}
.Borde_celda {
	border-radius: 10px;
	border: 1px solid #CCC;
}
.T_captura2 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
}
.Subtitulos1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #FFF;
	margin: 0 auto 0 auto;
	text-align: center;
	border-bottom: 1px #ccc solid;
	height: 30px;
	background-color: #3A557E;
	line-height: 30px;
}
.Tabla2 {
	text-align: left;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #4187D7;
}
.Tabla2:hover {
	text-decoration: underline;
	color: #369;
}
.Instrucciones {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	margin: 0 auto 0 auto;
	text-align: left;
	height: 60px;
}
.Submenu {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	margin: 0 auto 0 auto;
	text-align: left;
	height: 300px;
	float: left;
	width: 220px;
}
.Boton1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	color: #039;
	font-weight: bold;
}
</style>
</head>

<body>
<table width="740" height="446" border="0" cellpadding="1">
  <tr>
    <td width="224" height="442" class="Borde_celda"><div class="Subtitulos1">Módulo de docentes </div>
    <div class="Submenu">
      <p>Hola, buen día <?php echo $_SESSION['MM_Username'] ?></p>
      <p>&nbsp;</p>
      <p><a href="Nuevo_docente.php" class="Tabla2">Nuevo</a></p>
      <p class="Tabla2"><a href="ConsultaGral_Docente.php" class="Tabla2">Consulta</a></p>
      <p class="Tabla2">Buscar</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
    <p>&nbsp;</p></td>
    <td width="506" height="442" class="Borde_celda"><div>
      <p class="Instrucciones">LLena el siguiente formulario con los datos del Profesor. Revisa bien la información, antes de enviarla.</p>
    </div>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center">
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Clave:</td>
          <td class="T_captura"><?php echo $row_RSModifica_docente['id_docente']; ?></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Nombre:</td>
          <td class="T_captura"><input type="text" name="nombre_dct" value="<?php echo htmlentities($row_RSModifica_docente['nombre_dct'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Apellido Paterno:</td>
          <td class="T_captura"><input type="text" name="apellido_pat_dct" value="<?php echo htmlentities($row_RSModifica_docente['apellido_pat_dct'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Apellido Materno:</td>
          <td class="T_captura"><input type="text" name="apellido_mat_dct" value="<?php echo htmlentities($row_RSModifica_docente['apellido_mat_dct'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Perfil Prof.:</td>
          <td class="T_captura"><input type="text" name="perfil_dct" value="<?php echo htmlentities($row_RSModifica_docente['perfil_dct'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Foto:</td>
          <td class="T_captura"><input type="text" name="foto_dct" value="<?php echo htmlentities($row_RSModifica_docente['foto_dct'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">Horario:</td>
          <td class="T_captura"><input type="text" name="horario_dct" value="<?php echo htmlentities($row_RSModifica_docente['horario_dct'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="T_captura">&nbsp;</td>
          <td class="T_captura"><input type="submit" class="Boton1" value="Actualizar registro" /></td>
        </tr>
        </table>
      <input type="hidden" name="MM_update" value="form1" />
      <input type="hidden" name="id_docente" value="<?php echo $row_RSModifica_docente['id_docente']; ?>" />
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($RSModifica_docente);
?>
