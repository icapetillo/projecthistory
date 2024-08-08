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

$MM_restrictGoTo = "ERROR.html";
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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
	
	$tipo_prod = $_POST["lstTipo"];

//Guardar imagen
if(is_uploaded_file($_FILES['fileFoto']['tmp_name'])) { // verifica haya sido cargado el archivo
$ruta=“Fotos/$tipo_prod/”.$_FILES['fileFoto']['name'];
move_uploaded_file($_FILES['fileFoto']['tmp_name'], $ruta);
}
  $insertSQL = sprintf("INSERT INTO Alumnos (Matricula, Foto, Nombre, Ap_Paterno, Ap_Materno, Especialidad, Direccion, Telefono, Edo_Civil, Tutor_Padre, Serv_Medico, Notas) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Matricula'], "int"),
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
                       GetSQLValueString($_POST['Notas'], "text"));

  mysql_select_db($database_SIPRE, $SIPRE);
  $Result1 = mysql_query($insertSQL, $SIPRE) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SIPRE - Administración de alumnos</title>
<style type="text/css">
.T_captura {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	border-radius: 10;
	border: 1px solid #CCC;
}
.Borde_celda {
	border-radius: 10;
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
	color: #000000;
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
	color: #09F;
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
<div align="center">
  <table width="750" height="438" align="left">
    <tr>
      <td width="226" bgcolor="#D7DCE0" class="Borde_celda"><div class="Subtitulos1">Módulo de alumnos        </div>
        <div class="Submenu">
          <p>&nbsp;</p>
        <p><a href="Nuevo_alumno.php" class="Tabla2">Nuevo</a></p>
        <p class="Tabla2"><a href="ConsultaGral_Alum.php" class="Tabla2">Consulta</a></p>
        <p class="Tabla2"><a href="busca_alum.php" class="Tabla2">Buscar</a></p>
        <p>&nbsp;</p>
    </div
        ><p>&nbsp;</p>
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
      <td width="545" height="432" class="T_captura"><form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <p align="center" class="Instrucciones"> LLena el siguiente formulario con los datos del alumno. Revisa bien la información, antes de enviarla.</p>
        <table align="center">
          <tr valign="baseline">
            <td width="85" align="right" nowrap="nowrap" class="T_captura2">Matricula:</td>
            <td width="357" class="t1">
              <input type="text" name="Matricula" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Foto:</td>
            <td>              <span class="t1">
              <input name="fileFoto" type="file" class="Boton1" id="fileFoto" />
            </span></td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Nombre:</td>
            <td class="t1">
              <input type="text" name="Nombre" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Ap. Paterno:</td>
            <td class="t1">
              <input type="text" name="Ap_Paterno" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Ap. Materno:</td>
            <td class="t1">
              <input type="text" name="Ap_Materno" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Especialidad:</td>
            <td class="t1">
              <input type="text" name="Especialidad" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Dirección:</td>
            <td class="t1">
              <input type="text" name="Direccion" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Teléfono:</td>
            <td class="t1">
              <input type="text" name="Telefono" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Edo. Civil:</td>
            <td class="t1">
              <input type="text" name="Edo_Civil" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Tutor/Padre:</td>
            <td class="t1">
              <input type="text" name="Tutor_Padre" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Serv. Medico:</td>
            <td class="t1">
              <input type="text" name="Serv_Medico" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap" class="T_captura2">Notas:</td>
            <td class="t1">
              <input type="text" name="Notas" value="" size="32" />
            </td>
            </tr>
          <tr valign="baseline">
            <td align="right" nowrap="nowrap">&nbsp;</td>
            <td class="t1">
              <input type="submit" class="Boton1" value="Guardar" />
              <input name="button" type="reset" class="Boton1" id="button" value="Limpiar" />
            </td>
            </tr>
        </table>
        <p>
          <input type="hidden" name="MM_insert" value="form1" />
          </p>
      </form></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>