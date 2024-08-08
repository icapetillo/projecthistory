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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_RSMod_alum = 10;
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
<title>Documento sin título</title>
<style type="text/css">
.t1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	color: #69C;
	text-align: center;
}
t2 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	color: #006;
}
.Titulo1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 14px;
	color: #00C;
}
.T3 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #F93;
}
</style>
</head>

<body>
<p class="Titulo1">Consulta General de Alumnos</p>
<table width="1085" border="1" align="left" class="t1">
  <tr>
    <td width="90" class="t1">Conóceme</td>
    <td width="116">Matricula</td>
    <td width="106">Nombre</td>
    <td width="125">Ap_Paterno</td>
    <td width="128">Ap_Materno</td>
    <td width="128">Especialidad</td>
    <td width="115">Direccion</td>
    <td width="110">Telefono</td>
    <td colspan="2"><div align="center">Acciones</div></td>
  </tr>
  <?php do { ?>
    <tr>
      <td><img src="<?php echo $row_RSMod_alum['Foto']; ?>"/></td>
      <td><?php echo $row_RSMod_alum['Matricula']; ?></td>
      <td><?php echo $row_RSMod_alum['Nombre']; ?></td>
      <td><?php echo $row_RSMod_alum['Ap_Paterno']; ?></td>
      <td><?php echo $row_RSMod_alum['Ap_Materno']; ?></td>
      <td><?php echo $row_RSMod_alum['Especialidad']; ?></td>
      <td><?php echo $row_RSMod_alum['Direccion']; ?></td>
      <td><?php echo $row_RSMod_alum['Telefono']; ?></td>
      <td width="59"><a href="Modifica_Alum.php?Matricula=<?php echo $row_RSMod_alum['Matricula']; ?>">Modificar</a></td>
      <td width="54"><a href="Elimina_Alum.php?Matricula=<?php echo $row_RSMod_alum['Matricula']; ?>">Eliminar</a></td>
    </tr>
    <?php } while ($row_RSMod_alum = mysql_fetch_assoc($RSMod_alum)); ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="0">
  <tr>
    <td><?php if ($pageNum_RSMod_alum > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, 0, $queryString_RSMod_alum); ?>"><img src="First.gif" /></a>
    <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_RSMod_alum > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, max(0, $pageNum_RSMod_alum - 1), $queryString_RSMod_alum); ?>"><img src="Previous.gif" /></a>
    <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_RSMod_alum < $totalPages_RSMod_alum) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, min($totalPages_RSMod_alum, $pageNum_RSMod_alum + 1), $queryString_RSMod_alum); ?>"><img src="Next.gif" /></a>
    <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_RSMod_alum < $totalPages_RSMod_alum) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_RSMod_alum=%d%s", $currentPage, $totalPages_RSMod_alum, $queryString_RSMod_alum); ?>"><img src="Last.gif" /></a>
    <?php } // Show if not last page ?></td>
  </tr>
</table>
<p class="T3">Total Alumnos: <?php echo $totalRows_RSMod_alum ?></p>
</p>
</body>
</html>
<?php
mysql_free_result($RSMod_alum);
?>

