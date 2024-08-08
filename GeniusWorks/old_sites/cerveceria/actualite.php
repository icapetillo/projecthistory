<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/style.css" type="text/css" rel="stylesheet" />
<title>.: Les Brasseurs B.N.L. :.</title>
<style type="text/css">
   body { Background: transparent; }
</style>

</head>
<body>
<p>
  <? 
include('administrator/actions/conexion.php');
$datos = mysql_query("SELECT * FROM posts WHERE status=1 ORDER BY post_id DESC LIMIT 3");
while($fila=mysql_fetch_array($datos)){
	$preview=substr($fila['post_content'],0,250);
	echo '<table width="520" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="150" rowspan="3" align="center" valign="top">

<div>
  <b class="spiffy">
  <b class="spiffy1"><b></b></b>
  <b class="spiffy2"><b></b></b>
  <b class="spiffy3"></b>
  <b class="spiffy4"></b>
  <b class="spiffy5"></b></b>
 
  <div class="spiffyfg">
	
	<img src="administrator'.$fila['thumb_img'].'" width="120" height="120">
	
  </div>
 
  <b class="spiffy">
  <b class="spiffy5"></b>
  <b class="spiffy4"></b>
  <b class="spiffy3"></b>
  <b class="spiffy2"><b></b></b>
  <b class="spiffy1"><b></b></b></b>
</div>	
	
	</td>
    <td width="400" height="30" class="titer">'.$fila['title'].'</td>
  </tr>
  <tr>
    <td height="100" valign="top" class="message">'.$preview.'<br /><div id="footnote" class="footnote" >'.$fila['date'].'<div></td>
  </tr>
  <tr>
    <td align="right"><a href="view_post.php?post_id='.$fila['post_id'].'" class="lirelasuite">[lire la suite...]</a></td>
  </tr>
</table>
<br>';	
}
?>
</p>
<p align="center"><a href="actualite_ext.php" class="lirelasuite"> Toutes les nouvelles</a></p>
</body>
</html>