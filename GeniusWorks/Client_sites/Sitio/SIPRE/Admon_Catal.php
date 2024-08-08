<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "Acceso.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<style type="text/css">
.Fuente1 {	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.Fuente1 {	font-weight: bold;
}
.uno {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	color: #060;
}
.dos {
	font-family: "Lucida Console", Monaco, monospace;
}
.dos {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.dos {
	font-size: 10px;
}
.dos {
	font-size: 12px;
}
.dos {
	color: #69C;
}
</style>
</head>

<body>
<div align="center">
  <table width="899" height="687" border="1">
    <tr>
      <th height="106" scope="col"><p align="right"><span class="Fuente1"><img src="imagenes/LOGO.jpg" alt="Logo Conalep" width="62" height="59" align="middle" /></span></p>
      <p align="right" class="uno">Módulo de Administración de Catálogos</p></th>
      <th width="578" height="106" scope="col"><p class="uno">Bienvenido, <?php echo $_SESSION['MM_Username'] ?></p>
      <p class="uno">Sistema de Preceptorías - Conalep Celaya</p></th>
      <th width="119" height="106" scope="col"><p align="right"><a href="<?php echo $logoutAction ?>" class="uno">Cerrar Sesion</a></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></th>
    </tr>
    <tr>
      <td width="180" height="422"><p class="dos"><span class="dos"><a href="Nuevo_Usuario.php" target="nuevo_user" >Nuevo usuario</a></span></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p class="dos"><span class="dos"><a href="Nuevo_alumno.php" target="nuevo_user">Opciones de Alumnos</a></span></p>
        <p class="dos"><span class="dos"><a href="Nuevo_docente.php">Captura de Docente</a></span></p>
        <p class="dos"><span class="dos">Captura de Administrativo</span></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      <td colspan="2"><p>
        <iframe name="nuevo_user" width="700" height="450" id="nuevo_user"></iframe>
      </p>
      <a href="<?php echo $logoutAction ?>"></a></td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>