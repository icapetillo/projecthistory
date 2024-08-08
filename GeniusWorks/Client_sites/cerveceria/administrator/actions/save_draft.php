<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.: Les Brasseurs B.N.L. :.</title>
</head>
<body>
<?
$title= $_POST["title"];
$archivo1 = $_FILES["thumb_img"]['name'];
$archivo2 = $_FILES["main_img"]['name'];
$post_content = $_POST["message"];
$post_date = $_POST["post_date"];
$post_time = $_POST["post_time"];
$accion=$_POST["accion"];

$prefijo = substr(md5(uniqid(rand())),0,6);
$destino1 = "/files/def_thumb.png";
$destino2 = "/files/def_main.png";

// Guardo el thumbnail a la carpeta files
    if ($archivo1 != "") {
        $destino1 =  "/files/".$prefijo."_".$archivo1;
        if (copy($_FILES['thumb_img']['tmp_name'],"..".$destino1)) {
            $status = "Archivo subido: <b>".$archivo1."</b>";
        } else {
            $status = "Error al subir el archivo";
        }
    } else {
        $status = "Error al subir el archivo";
    }

// Guardo la imagen principal del articulo a la carpeta files
    if ($archivo2 != "") {
        $destino2 =  "/files/".$prefijo."_".$archivo2;
        if (copy($_FILES['main_img']['tmp_name'],"..".$destino2)) {
            $status = "Archivo subido: <b>".$archivo2."</b>";
        } else {
            $status = "Error al subir el archivo";
        }
    } else {
        $status = "Error al subir archivo";
    }

include("conexion.php");

if ($accion==1){
	$post_num=$_POST["post_num"];
	mysql_query("DELETE FROM posts WHERE post_id=$post_num") or die(mysql_error());
	}

$titulo=mysql_real_escape_string($title);
$contenido=mysql_real_escape_string($post_content);
mysql_query("INSERT INTO posts (title, thumb_img, post_img, post_content, date, time, author, status) VALUES ('$titulo', '$destino1', '$destino2', '$contenido', '$post_date','$post_time','admin','0')") or die(mysql_error());
	
echo "<script language='javascript'>"; 
echo "alert('Le projet a été enregistré avec succès.');";
echo "document.location=('/administrator/admin.php');";
echo "</script>";

?>
</body>
</html>

