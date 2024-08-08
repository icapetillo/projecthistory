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
$ruta= “Fotos/$tipo_prod/”.$_FILES['fileFoto']['name'];
move_uploaded_file($_FILES['fileFoto']['tmp_name'], $ruta);
}
		
  $insertSQL = sprintf("INSERT INTO administrativo (id_adtivo, nombre_adt, apellido_pat_adt, apellido_mat_adt, puesto_adt, horario_adt, foto_adt) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id_adtivo'], "text"),
                       GetSQLValueString($_POST['nombre_adt'], "text"),
                       GetSQLValueString($_POST['apellido_pat_adt'], "text"),
                       GetSQLValueString($_POST['apellido_mat_adt'], "text"),
                       GetSQLValueString($_POST['puesto_adt'], "text"),
                       GetSQLValueString($_POST['horario_adt'], "text"),
                       GetSQLValueString($ruta, "text"));

  mysql_select_db($database_SIPRE, $SIPRE);
  $Result1 = mysql_query($insertSQL, $SIPRE) or die(mysql_error());

  /*$insertGoTo = "Admon_Catal.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<style type="text/css">
.t1 {font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 14px;
	color: #69C;
	text-align: left;
}
</style>
</head>

<body>
<table width="681" height="465" border="1">
  <tr>
    <td width="124"><div align="center" class="t1">Nuevo</div>
      <div align="center"></div></td>
    <td width="151"><div align="center"><a href="ConsultaGral_Alum.php" class="t1">Consultas</a></div></td>
    <td width="360"><div align="center"></div></td>
  </tr>
  <tr>
    <td height="432" colspan="3"><p>&nbsp;</p>
      <form action="<?php echo $editFormAction; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table align="center">
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Id_adtivo:</td>
            <td><input type="text" name="id_adtivo" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Nombre:</td>
            <td><input type="text" name="nombre_adt" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Apellido Paterno:</td>
            <td><input type="text" name="apellido_pat_adt" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Apellido Materno:</td>
            <td><input type="text" name="apellido_mat_adt" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Puesto:</td>
            <td><input type="text" name="puesto_adt" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Horario:</td>
            <td><input type="text" name="horario_adt" value="" size="32" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">Foto:</td>
            <td><input type="file" name="fileFoto" id="fileFoto" /></td>
          </tr>
          <tr valign="baseline">
            <td nowrap="nowrap" align="right">&nbsp;</td>
            <td><input type="submit" value="Insertar registro" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>