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
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['textfield'])) {
  $loginUsername=$_POST['textfield'];
  $password=$_POST['textfield2'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Admon_Catal.php";
  $MM_redirectLoginFailed = "ERROR.html";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_SIPRE, $SIPRE);
  
  $LoginRS__query=sprintf("SELECT usuario, password FROM usuarios WHERE usuario=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $SIPRE) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Acceso al Sistema - SIPRE Conalep Celaya</title>
<style type="text/css">
.Fuente1 {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.Fuente2 {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 12px;
	font-style: normal;
	color: #999;
	left: 471px;
	top: 159px;
}
.Logo {
}
#form1 p .Fuente2 #button2 {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 10px;
	color: #063;
}
#form1 p .Fuente2 #button {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 10px;
	color: #063;
	position: fixed;
}
.Fuente1 {
	font-weight: bold;
}
.Fuente1 .Fuente1 {
	font-size: 12px;
}
.Fuente1 .Fuente1 {
	font-size: 16px;
}
.Fuente1 .Fuente1 {
	font-size: 18px;
}
.Fuente1 .Fuente1 {
	color: #363;
}
#form1 p {
	font-size: 14px;
	color: #060;
}
#form1 .Fuente1 {
	text-align: center;
}
#form1 p .Fuente1 {
	text-align: center;
}
#form1 p .Fuente1 {
	text-align: justify;
	color: #999;
}
#form1 p {
	text-align: center;
	color: #CCC;
}
#form1 .Fuente1 {
	color: #999;
}
</style>
</head>

<body>
<div align="center">
  <table width="634" height="446" border="1" align="center">
    <tr>
      <td width="511" height="440"><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
        <p class="Fuente1"><img src="imagenes/LOGO.jpg" alt="Logo_Conalep" width="54" height="49" class="Logo" align="middle" /></p>
        <p class="Fuente1">Sistema de Preceptorías - Conalep Celaya </p>
        <p class="Fuente1"> Acceso al sistema de Administración</p>
        <p>&nbsp;</p>
        <p>
          <label for="textfield" class="Fuente1"><span class="Fuente2">Usuario:</span></label>
        </p>
        <p>
          
          <span class="Fuente2">
          <input type="text" name="textfield" id="textfield" />
          </span></p>
        <p>
          
          <span class="Fuente2">
          <label for="textfield2" class="Fuente1">Contraseña:</label>
          </span></p>
        <p>
          
          <span class="Fuente2">
          <input type="password" name="textfield2" id="textfield2" />
          </span></p>
        <p><span class="Fuente2">
          <input name="button" type="submit" id="button" value="Ingresar" />
        </span></p>
        <p>&nbsp;</p>
        <p><span class="Fuente2">
          <input name="button2" type="button" id="button2" value="Cancelar" />
        </span></p>
        <p>&nbsp;</p>
      </form></td>
    </tr>
  </table>
</div>
</body>
</html>