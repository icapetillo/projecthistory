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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Administración de Catalogos - SIPRE Celaya</title>
<style type="text/css">
.tabla1 {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 14px;
	text-align: center;
	color: #06C;
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

.footer1 {
	border-bottom: 1px #ccc solid;
	border-top: 1px #ccc solid;
	height: 25px;
	line-height: 25px;
	background-color: #FFF;
}
.iframe1 {
	border-radius: 10px;
	background-color: #FFF;
	background-repeat: no-repeat;
}
.header1 {
	height: 80px;
	border: 2px solid #ccc;
	border-radius: 10px;
	background-color: #FFF;
	background-image: url(imagenes/header1.jpg);
	background-repeat: no-repeat;
}
.subheader1 {
	float: left;
	width: 430px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	text-align: left;
	color: #000000;
	margin-left: 8px;
	z-index: 0;
}
.subheader2 {
	float: right;
	width: 430px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	text-align: right;
	color: #000000;
	margin-right: 8px;
	z-index: 0;
}
.Logo1 {
	margin: 0 auto 0 auto;
	width: 150px;
	z-index: 100;
	background-color: #FFF;
}
body {
	background-color: #EBEBEB;
}
</style>
</head>

<body>
<table width="899" height="594" border="0" align="center" class="Fondo_tabla">
  <tr class="Tabla_sombra">
    <th height="70" scope="col"><div class="header1">
        <div class="Logo1"><img src="imagenes/LOGO.jpg" width="67" height="53" alt="Logo_Conalep" /></div>
        <div class="subheader1">Bienvenido, <?php echo $_SESSION['MM_Username'] ?></div>
    <div class="subheader2">Sistema de Preceptorías - Conalep Celaya </div></div></th>
  </tr>
  <tr>
    <td height="461"><p>
      <iframe name="contenedor1" width="900" height="500" class="iframe1" id="contenedor1"></iframe>
    </p>
      <a href="<?php echo $logoutAction ?>"></a></td>
  </tr>
  <tr>
    <td height="39"><div align="center" class="footer1"><span class="Tabla2">Módulo de Administración de Catálogos</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  |  <a href="Nuevo_Usuario.php" target="contenedor1" class="Tabla2">Usuarios</a> | <a href="Nuevo_alumno.php" target="contenedor1" class="Tabla2">Alumnos</a> | <a href="Nuevo_docente.php" target="contenedor1" class="Tabla2">Docentes</a> | <a href="Nuevo_adtivo.php" target="contenedor1" class="Tabla2">Administrativos</a> | <a href="ERROR.html" target="contenedor1" class="Tabla2">Cerrar Sesión</a> |</div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>