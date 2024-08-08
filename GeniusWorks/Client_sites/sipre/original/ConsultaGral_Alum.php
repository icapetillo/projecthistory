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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_RSMod_alum = 5;
$pageNum_RSMod_alum = 0;
if (isset($_GET['pageNum_RSMod_alum'])) {
  $pageNum_RSMod_alum = $_GET['pageNum_RSMod_alum'];
}
$startRow_RSMod_alum = $pageNum_RSMod_alum * $maxRows_RSMod_alum;

mysql_select_db($database_SIPRE, $SIPRE);
$query_RSMod_alum = "SELECT * FROM Alumnos";
$query_limit_RSMod_alum = sprintf("%s LIMIT %d, %d", $query_RSMod_alum, $startRow_RSMod_alum, $maxRows_RSMod_alum);
$RSMod_alum = mysql_query($query_limit_RSMod_alum, $SIPRE) or die(mysql_error());
$row_RSMod_alum = mysql_fetch_assoc($RSMod_alum);

if (isset($_GET['totalRows_RSMod_alum'])) {
  $totalRows_RSMod_alum = $_GET['totalRows_RSMod_alum'];
} else {
  $all_RSMod_alum = mysql_query($query_RSMod_alum);
  $totalRows_RSMod_alum = mysql_num_rows($all_RSMod_alum);
}
$totalPages_RSMod_alum = ceil($totalRows_RSMod_alum/$maxRows_RSMod_alum)-1;

$queryString_RSMod_alum = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_RSMod_alum") == false && 
        stristr($param, "totalRows_RSMod_alum") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_RSMod_alum = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_RSMod_alum = sprintf("&totalRows_RSMod_alum=%d%s", $totalRows_RSMod_alum, $queryString_RSMod_alum);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SIPRE - Consulta General por grupo</title>
<style type="text/css">
.T_captura {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	border-radius: 10;
	border: 1px solid #CCC;
	width: 300px;
	padding-top: 10px;
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
.subheader1 {
	float: left;
	width: 130px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	text-align: left;
	color: #5091DB;
	margin-left: 8px;
	z-index: 0;
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
	text-align: left;
	height: 60px;
	width: 400px;
	margin-left: 10px;
}
.Submenu {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #09F;
	margin: 0 auto 0 auto;
	text-align: left;
	height: 300px;
	float: left;
	width: 180px;
}
.Controles1 {
	text-align: right;
	border-right: 10px;
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
<table width="750" height="438" border="0" cellpadding="1" class="Borde_celda">
  <tr>
    <td width="180" height="400" rowspan="2" bgcolor="#D7DCE0" class="Borde_celda"><div class="Subtitulos1">Módulo de alumnos </div>
      <div class="Submenu">
      <p>&nbsp;</p>
      <p><a href="Nuevo_alumno.php" class="Tabla2">Nuevo</a></p>
      <p class="Tabla2"><a href="ConsultaGral_Alum.php" class="Tabla2">Consulta</a></p>
      <p class="Tabla2"><a href="busca_alum.php" class="Tabla2">Buscar</a></p>
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
    <td width="300" height="43" class="T_captura"><div>Aqui puedes consultar la información específica de algún alumno, puedes modificar el registro o bien, lo puedes dar de baja...</div></td>
  </tr>
  <tr>
    <td width="570" height="400" class="T_captura"><p>Selecciona el grupo: 
            </p><div class="Controles1">
              <table border="0" class="Controles1">
          <tr>
            <td><?php if ($pageNum_RSMod_alum > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, 0, $queryString_RSMod_alum); ?>"><img src="First.gif" alt="" /></a>
            <?php } // Show if not first page ?></td>
            <td><?php if ($pageNum_RSMod_alum > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, max(0, $pageNum_RSMod_alum - 1), $queryString_RSMod_alum); ?>"><img src="Previous.gif" alt="" /></a>
            <?php } // Show if not first page ?></td>
            <td><?php if ($pageNum_RSMod_alum < $totalPages_RSMod_alum) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, min($totalPages_RSMod_alum, $pageNum_RSMod_alum + 1), $queryString_RSMod_alum); ?>"><img src="Next.gif" alt="" /></a>
            <?php } // Show if not last page ?></td>
            <td><?php if ($pageNum_RSMod_alum < $totalPages_RSMod_alum) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, $totalPages_RSMod_alum, $queryString_RSMod_alum); ?>"><img src="Last.gif" alt="" /></a>
            <?php } // Show if not last page ?></td>
          </tr>
        </table>
      </div>
      <table width="565" border="1" align="left" cellpadding="1">
        <tr>
        <td width="80">Conóceme</td>
        <td width="70">Matricula</td>
        <td width="80">Nombre</td>
        <td width="80">Ap_Paterno</td>
        <td width="80">Ap_Materno</td>
        <td width="70">Telefono</td>
        <td colspan="2"><div align="center">Acciones</div></td>
      </tr>
      <?php do { ?>
      <tr>
        <td><img src="<?php echo $row_RSMod_alum['Foto']; ?>" alt=""/></td>
        <td><?php echo $row_RSMod_alum['Matricula']; ?></td>
        <td><?php echo $row_RSMod_alum['Nombre']; ?></td>
        <td><?php echo $row_RSMod_alum['Ap_Paterno']; ?></td>
        <td><?php echo $row_RSMod_alum['Ap_Materno']; ?></td>
        <td><?php echo $row_RSMod_alum['Telefono']; ?></td>
        <td width="50"><a href="Modifica_Alum.php?Matricula=<?php echo $row_RSMod_alum['Matricula']; ?>" class="Tabla2">Modificar</a></td>
        <td width="50"><a href="Elimina_Alum.php?Matricula=<?php echo $row_RSMod_alum['Matricula']; ?>" class="Tabla2">Eliminar</a></td>
      </tr>
      <?php } while ($row_RSMod_alum = mysql_fetch_assoc($RSMod_alum)); ?>
  </table>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div>
      <div class="subheader1">Total de alumnos: <?php echo $totalRows_RSMod_alum ?></div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($RSMod_alum);
?>

