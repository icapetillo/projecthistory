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

$maxRows_RSConGral_User = 10;
$pageNum_RSConGral_User = 0;
if (isset($_GET['pageNum_RSConGral_User'])) {
  $pageNum_RSConGral_User = $_GET['pageNum_RSConGral_User'];
}
$startRow_RSConGral_User = $pageNum_RSConGral_User * $maxRows_RSConGral_User;

mysql_select_db($database_SIPRE, $SIPRE);
$query_RSConGral_User = "SELECT * FROM usuarios";
$query_limit_RSConGral_User = sprintf("%s LIMIT %d, %d", $query_RSConGral_User, $startRow_RSConGral_User, $maxRows_RSConGral_User);
$RSConGral_User = mysql_query($query_limit_RSConGral_User, $SIPRE) or die(mysql_error());
$row_RSConGral_User = mysql_fetch_assoc($RSConGral_User);

if (isset($_GET['totalRows_RSConGral_User'])) {
  $totalRows_RSConGral_User = $_GET['totalRows_RSConGral_User'];
} else {
  $all_RSConGral_User = mysql_query($query_RSConGral_User);
  $totalRows_RSConGral_User = mysql_num_rows($all_RSConGral_User);
}
$totalPages_RSConGral_User = ceil($totalRows_RSConGral_User/$maxRows_RSConGral_User)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Consulta General de Usuarios</title>

<style type="text/css">
.T_captura {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	border-radius: 10;
	border: 1px solid #CCC;
	padding-top: 10px;
	text-align: left;
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
.Submenu1 {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #039;
	margin: 0 auto 0 auto;
	text-align: left;
	height: 300px;
	float: left;
	width: 220px;
}
.Tabla21 {	text-align: left;
	text-decoration: none;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #4187D7;
}
.T_captura div table tr td {
	text-align: center;
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
      <p>En esta sección puedes consultar y hacer modificaciones a los usuarios, o bien, puedes eliminar algún usuario...</p>
      <p>&nbsp;</p>
      </div>
      <div></div>
      <div>
        <table border="1" cellspacing="1">
          <tr>
            <td>email</td>
            <td>usuario</td>
            <td>password</td>
            <td>Perfil</td>
            <td colspan="2">Acciones</td>
          </tr>
          <?php do { ?>
            <tr>
              <td><?php echo $row_RSConGral_User['email']; ?></td>
              <td><?php echo $row_RSConGral_User['usuario']; ?></td>
              <td><?php echo $row_RSConGral_User['password']; ?></td>
              <td><?php echo $row_RSConGral_User['Perfil']; ?></td>
              <td><a href="Modifica_user.php?email=<?php echo $row_RSConGral_User['email']; ?>" class="Tabla2">Modificar</a></td>
              <td><a href="Elimina_user.php?email=<?php echo $row_RSConGral_User['email']; ?>" class="Tabla2">Eliminar</a></td>
            </tr>
            <?php } while ($row_RSConGral_User = mysql_fetch_assoc($RSConGral_User)); ?>
        </table>
      </div>
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
mysql_free_result($RSConGral_User);
?>
