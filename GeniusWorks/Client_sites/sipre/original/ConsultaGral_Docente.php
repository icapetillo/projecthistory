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

$maxRows_RS_Consulta_docente = 5;
$pageNum_RS_Consulta_docente = 0;
if (isset($_GET['pageNum_RS_Consulta_docente'])) {
  $pageNum_RS_Consulta_docente = $_GET['pageNum_RS_Consulta_docente'];
}
$startRow_RS_Consulta_docente = $pageNum_RS_Consulta_docente * $maxRows_RS_Consulta_docente;

mysql_select_db($database_SIPRE, $SIPRE);
$query_RS_Consulta_docente = "SELECT * FROM docentes";
$query_limit_RS_Consulta_docente = sprintf("%s LIMIT %d, %d", $query_RS_Consulta_docente, $startRow_RS_Consulta_docente, $maxRows_RS_Consulta_docente);
$RS_Consulta_docente = mysql_query($query_limit_RS_Consulta_docente, $SIPRE) or die(mysql_error());
$row_RS_Consulta_docente = mysql_fetch_assoc($RS_Consulta_docente);

if (isset($_GET['totalRows_RS_Consulta_docente'])) {
  $totalRows_RS_Consulta_docente = $_GET['totalRows_RS_Consulta_docente'];
} else {
  $all_RS_Consulta_docente = mysql_query($query_RS_Consulta_docente);
  $totalRows_RS_Consulta_docente = mysql_num_rows($all_RS_Consulta_docente);
}
$totalPages_RS_Consulta_docente = ceil($totalRows_RS_Consulta_docente/$maxRows_RS_Consulta_docente)-1;
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
	border: 1px #CCC solid;
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
.Instrucciones1 {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	text-align: left;
	height: 60px;
	width: 400px;
	margin-left: 10px;
}
</style>
</head>

<body>
<table width="759" height="353" border="0" cellpadding="1">
  <tr>
    <td width="226" class="Borde_celda"><div class="Subtitulos1">Módulo de docentes    </div>
    <div class="Submenu">
      <p>Hola, buen día <?php echo $_SESSION['MM_Username'] ?></p>
      <p>&nbsp;</p>
      <p><a href="Nuevo_docente.php" class="Tabla2">Nuevo</a></p>
      <p class="Tabla2"><a href="ConsultaGral_Docente.php" class="Tabla2">Consulta</a></p>
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
    <p>&nbsp;</p></td>
    <td width="523" class="T_captura"><div class="Instrucciones1">
      <p>Aqui puedes consultar la información específica de algún profesor, puedes modificar el registro o bien, lo puedes dar de baja...    </p>
      <p>&nbsp;</p>
    </div>
    <table border="1" cellspacing="1">
      <tr>
        <td width="40">Clave Docente</td>
        <td width="40">Conóceme</td>
        <td width="210">Nombre</td>
        <td width="232">Apellido Paterno</td>
        <td width="235">Apellido Materno</td>
        <td width="202">Horario</td>
        <td colspan="2">Acciones</td>
        </tr>
      <?php do { ?>
        <tr>
          <td><?php echo $row_RS_Consulta_docente['id_docente']; ?></td>
          <td width="40"><?php echo $row_RS_Consulta_docente['foto_dct']; ?></td>
          <td><?php echo $row_RS_Consulta_docente['nombre_dct']; ?></td>
          <td><?php echo $row_RS_Consulta_docente['apellido_pat_dct']; ?></td>
          <td><?php echo $row_RS_Consulta_docente['apellido_mat_dct']; ?></td>
          <td><?php echo $row_RS_Consulta_docente['horario_dct']; ?></td>
          <td width="202"><a href="Modifica_docente.php?id_docente=<?php echo $row_RS_Consulta_docente['id_docente']; ?>" class="Tabla2">Modificar</a></td>
          <td width="202"><a href="Elimina_Docente.php?id_docente=<?php echo $row_RS_Consulta_docente['id_docente']; ?>" class="Tabla2">Eliminar</a></td>
        </tr>
        <?php } while ($row_RS_Consulta_docente = mysql_fetch_assoc($RS_Consulta_docente)); ?>
</table>
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
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($RS_Consulta_docente);
?>
