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
  <? 
$post_num = $_GET["post_id"];
include('administrator/actions/conexion.php');
$datos = mysql_query("SELECT * FROM posts WHERE post_id=$post_num AND status=1");
while($fila=mysql_fetch_array($datos)){
  ?><br />	
<table width="520" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="130" height="740" rowspan="2" align="center" valign="top">
    
<div>
  <b class="spiffy">
  <b class="spiffy1"><b></b></b>
  <b class="spiffy2"><b></b></b>
  <b class="spiffy3"></b>
  <b class="spiffy4"></b>
  <b class="spiffy5"></b></b>
 
  <div class="spiffyfg">

    
    <img src="administrator<? echo $fila['thumb_img']; ?>" width="120" height="120">
    
    
  </div>
 
  <b class="spiffy">
  <b class="spiffy5"></b>
  <b class="spiffy4"></b>
  <b class="spiffy3"></b>
  <b class="spiffy2"><b></b></b>
  <b class="spiffy1"><b></b></b></b>
</div>
    
<br /><br /><!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4da5f4e264c5441d"></script>
<!-- AddThis Button END --></td>
    <td width="390" height="40" valign="top" class="titer"><? echo $fila['title']; ?></td>
  </tr>
  <tr>
    <td width="390" height="700" valign="top" class="message"><? echo $fila['post_content']; ?><br /><br /><center>
      <p><img src="administrator<? echo $fila['post_img']; ?>" width="380" height="150" /></p>
      <p><a href="javascript:history.back();" class="lirelasuite">Retour</p>
    </center></td>
  </tr>
</table>
<?
}
?>
</body>
</html>