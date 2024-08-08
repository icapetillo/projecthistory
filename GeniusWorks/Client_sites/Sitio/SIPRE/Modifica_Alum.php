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
.t1 {	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 14px;
	color: #69C;
}
</style>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center" class="t1">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Matricula:</td>
      <td class="t1"><?php echo $row_RSModifica_Alum['Matricula']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Foto:</td>
      <td class="t1"><input type="file" name="fileFoto" id="fileFoto" />      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nombre:</td>
      <td class="t1"><input type="text" name="Nombre" value="<?php echo htmlentities($row_RSModifica_Alum['Nombre'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ap_Paterno:</td>
      <td class="t1"><input type="text" name="Ap_Paterno" value="<?php echo htmlentities($row_RSModifica_Alum['Ap_Paterno'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Ap_Materno:</td>
      <td class="t1"><input type="text" name="Ap_Materno" value="<?php echo htmlentities($row_RSModifica_Alum['Ap_Materno'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Especialidad:</td>
      <td class="t1"><input type="text" name="Especialidad" value="<?php echo htmlentities($row_RSModifica_Alum['Especialidad'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Direccion:</td>
      <td class="t1"><input type="text" name="Direccion" value="<?php echo htmlentities($row_RSModifica_Alum['Direccion'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td class="t1"><input type="text" name="Telefono" value="<?php echo htmlentities($row_RSModifica_Alum['Telefono'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Edo_Civil:</td>
      <td class="t1"><input type="text" name="Edo_Civil" value="<?php echo htmlentities($row_RSModifica_Alum['Edo_Civil'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Tutor_Padre:</td>
      <td class="t1"><input type="text" name="Tutor_Padre" value="<?php echo htmlentities($row_RSModifica_Alum['Tutor_Padre'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Serv_Medico:</td>
      <td class="t1"><input type="text" name="Serv_Medico" value="<?php echo htmlentities($row_RSModifica_Alum['Serv_Medico'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Notas:</td>
      <td class="t1"><input type="text" name="Notas" value="<?php echo htmlentities($row_RSModifica_Alum['Notas'], ENT_COMPAT, 'UTF-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td class="t1"><input type="submit" value="Actualizar Datos" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="Matricula" value="<?php echo $row_RSModifica_Alum['Matricula']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($RSModifica_Alum);
?>
