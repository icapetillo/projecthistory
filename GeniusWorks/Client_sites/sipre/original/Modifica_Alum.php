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

//Guardar imagen
if(is_uploaded_file($_FILES['fileFoto']['tmp_name'])) { // verifica haya sido cargado el archivo
$ruta=“Fotos/$tipo_prod/”.$_FILES['fileFoto']['name'];
move_uploaded_file($_FILES['fileFoto']['tmp_name'], $ruta);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE Alumnos SET Foto=%s, Nombre=%s, Ap_Paterno=%s, Ap_Materno=%s, Especialidad=%s, Direccion=%s, Telefono=%s, Edo_Civil=%s, Tutor_Padre=%s, Serv_Medico=%s, Notas=%s WHERE Matricula=%s",
                       GetSQLValueString($ruta, "text"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Ap_Paterno'], "text"),
                       GetSQLValueString($_POST['Ap_Materno'], "text"),
                       GetSQLValueString($_POST['Especialidad'], "text"),
                       GetSQLValueString($_POST['Direccion'], "text"),
                       GetSQLValueString($_POST['Telefono'], "text"),
                       GetSQLValueString($_POST['Edo_Civil'], "text"),
                       GetSQLValueString($_POST['Tutor_Padre'], "text"),
                       GetSQLValueString($_POST['Serv_Medico'], "text"),
                       GetSQLValueString($_POST['Notas'], "text"),
                       GetSQLValueString($_POST['Matricula'], "text"));

  mysql_select_db($database_SIPRE, $SIPRE);
  $Result1 = mysql_query($updateSQL, $SIPRE) or die(mysql_error());

  $updateGoTo = "ConsultaGral_Alum.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_RSModifica_Alum = "-1";
if (isset($_GET['Matricula'])) {
  $colname_RSModifica_Alum = $_GET['Matricula'];
}
mysql_select_db($database_SIPRE, $SIPRE);
$query_RSModifica_Alum = sprintf("SELECT * FROM Alumnos WHERE Matricula = %s", GetSQLValueString($colname_RSModifica_Alum, "int"));
$RSModifica_Alum = mysql_query($query_RSModifica_Alum, $SIPRE) or die(mysql_error());
$row_RSModifica_Alum = mysql_fetch_assoc($RSModifica_Alum);
$totalRows_RSModifica_Alum = mysql_num_rows($RSModifica_Alum);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Actualización de datos generales de los alumnos - SIPRE Celaya</title>
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
<table width="887" height="518" border="0" cellpadding="1">
  <tr>
    <td width="226" height="514" class="Borde_celda"><div class="Subtitulos1">Módulo de alumnos 
    </div>
      <div class="Submenu">
        <p>Hola, buen día <?php echo $_SESSION['MM_Username'] ?></p>
      <p>&nbsp;</p>
      <p><a href="Nuevo_alumno.php" class="Tabla2">Nuevo</a></p>
      <p class="Tabla2"><a href="ConsultaGral_Alum.php" class="Tabla2">Consulta</a></p>
      <p class="Tabla2">Buscar</p>
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
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="651" height="514" class="T_captura"><div><span class="Instrucciones">LLena el siguiente formulario con los datos del alumno. Revisa bien la información, antes de enviarla.</span></div>
      <p>&nbsp;</p>
      <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
        <table align="center" class="t1">
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Matricula:</td>
          <td class="Borde_celda"><?php echo $row_RSModifica_Alum['Matricula']; ?></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Foto:</td>
          <td class="Borde_celda"><input name="fileFoto" type="file" class="Boton1" id="fileFoto" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Nombre:</td>
          <td class="Borde_celda"><input type="text" name="Nombre" value="<?php echo htmlentities($row_RSModifica_Alum['Nombre'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Ap. Paterno:</td>
          <td class="Borde_celda"><input type="text" name="Ap_Paterno" value="<?php echo htmlentities($row_RSModifica_Alum['Ap_Paterno'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Ap. Materno:</td>
          <td class="Borde_celda"><input type="text" name="Ap_Materno" value="<?php echo htmlentities($row_RSModifica_Alum['Ap_Materno'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Especialidad:</td>
          <td class="Borde_celda"><input type="text" name="Especialidad" value="<?php echo htmlentities($row_RSModifica_Alum['Especialidad'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Direccion:</td>
          <td class="Borde_celda"><input type="text" name="Direccion" value="<?php echo htmlentities($row_RSModifica_Alum['Direccion'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Telefono:</td>
          <td class="Borde_celda"><input type="text" name="Telefono" value="<?php echo htmlentities($row_RSModifica_Alum['Telefono'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Edo. Civil:</td>
          <td class="Borde_celda"><input type="text" name="Edo_Civil" value="<?php echo htmlentities($row_RSModifica_Alum['Edo_Civil'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Tutor ó Padre:</td>
          <td class="Borde_celda"><input type="text" name="Tutor_Padre" value="<?php echo htmlentities($row_RSModifica_Alum['Tutor_Padre'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Serv. Medico:</td>
          <td class="Borde_celda"><input type="text" name="Serv_Medico" value="<?php echo htmlentities($row_RSModifica_Alum['Serv_Medico'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">Notas:</td>
          <td class="Borde_celda"><input type="text" name="Notas" value="<?php echo htmlentities($row_RSModifica_Alum['Notas'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap" class="Borde_celda">&nbsp;</td>
          <td class="Borde_celda"><input type="submit" class="Boton1" value="Actualizar Datos" /></td>
        </tr>
        </table>
      <p>
        <input type="hidden" name="MM_update" value="form1" />
        <input type="hidden" name="Matricula" value="<?php echo $row_RSModifica_Alum['Matricula']; ?>" />
      </p>
  </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($RSModifica_Alum);
?>
