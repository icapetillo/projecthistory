<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.: Les Brasseurs B.N.L. :.</title>
</head>
<body>
<?
include("conexion.php");

$post_num=$_POST["post_num"];
mysql_query("DELETE FROM posts WHERE post_id=$post_num") or die(mysql_error());

echo "<script language='javascript'>"; 
echo "alert('Le message a été supprimé. Cette action ne peut pas être annulée.');";
echo "document.location=('/administrator/admin.php');";
echo "</script>";

?>
</body>
</html>

