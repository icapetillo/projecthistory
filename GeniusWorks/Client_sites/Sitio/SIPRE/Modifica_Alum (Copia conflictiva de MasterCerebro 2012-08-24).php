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
    <tr valign=- R e g u l a r                                                                                         R e g u l a r                                                   1 . 0 4 0 ; A D B E ; M y r i a d H e b r e w - R e g u l a r ; A D O B E                                                                                   �M     @        #       ADBE    M y r i a d   �����    �     �  �          �Hl� ���0 
     �Hl� ���:       Il� ���A      Il� ���[      �Il� ���a      �Il� ���{      Jl� ����       Jl� ����      �Jl� ����      �Jl� ����      �Jl� ����      �Jl� ����      �Jl� ����      Kl� ����      Kl� ����      TKl� ����      XKl� ����      pKl� ����      xKl� ����      �Kl� ���     �Kl� ���     �Kl� ���     �Kl� ���      �Kl� ���&     �Kl� ���*     �Kl� ���1     �Kl� ���A     �Kl� ���L     �Kl� ���R     �Kl� ���Z      Ll� ���`     Ll� ���j     Ll� ���x     Ll� ���}     Ll� ����     $Ll� ����     (Ll� ����     ,Ll� ���P     4Ll� ���T     <Ll� ���Y     @Ll� ���[     DLl� ���a     HLl� ���c     LLl� ���j     PLl� ����     XLl� ����     `Ll� ����     dLl� ����     hLl� ����     lLl� ����     pLl� ����     xLl� ����     |Ll� ����     �Ll� ����     �Ll� ����     �Ll� ����     �Ll� ����     �Ll� ����     �Ll� ����     �Ll� ���      �Ll� ���     �Ll� ���     �Ll� ���
     �Ll� ���     �Ll� ���#     �Ll� ���.     �Ll� ���1     �Ll� ���a     �Ll� ����      Ml� ����     Ml� ����     Ml� ����	     Ml� ����     0Ml� ����     \Ml� ����     `Ml� ����     �Ml� ����     �Ml� ���     �Ml� ���     �Ml� ���      �Ml� ���$      Nl� ���*     Nl� ���2     Nl� ���b      Nl� ���l     (Nl� ���~     8Nl� ����     @Nl� ����     TNl� ����     \Nl� ����     dNl� ���      lNl� ���      |Nl� ���      �Nl� ���      �Nl� ���      �Nl� ���       �Nl� ���&      �Nl� ���*      �Nl� ���0      �Nl� ���9      �Nl� ���D      �Nl� ����      �Nl� ����      �Nl� ���!     �Nl� ���"!     �Nl� ���&!     �Nl� ���.!     �Nl� ���"     �Nl� ���"     �Nl� ���"     �Nl� ���"     �Nl� ���"      Ol� ���"     Ol� ���"     Ol� ���+"     Ol� ���H"     Ol� ���`"     Ol� ���d"     Ol� ����%     $Ol� ����%     (Ol� ����     ,Ol� ����     4Ol� ���!�     @Ol� ���*�     `Ol� ���,�     hOl� ���.�     pOl� ���6�     �Ol� ���8�     �Ol� ���>�     �Ol� ���@�     �Ol� ���C�     �Ol� ���F�     �Ol� ���I�     �Ol� ��� SXy�}CWjkp�OcN�DEFGHIJKLMPQ���Uxd e f g h i j k l m n o p q r s t u v w x y z { | } l�m���� � � � � � � � � � � � � � � � � � � � � � � � � � n�o��T�����s�u�a�dw�������th��bz{|V~  � � � � � � � � � � � � � � � � � � � � � �� � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �� � � � � � � � � �  � � � � 	� � � � � � � � � � � � � � � � � � ��  !"#$%&'()*+,-./01238;<=��>?������@����������������4�5K L M N O P Q R S X Y T W U a \ b Z [ c V        	 
                      _ ` � � � � � � � � � � � � � � � � 
� ����efgYZ][\^qriR�����~_`����v������������������