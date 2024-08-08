<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/style.css" type="text/css" rel="stylesheet" />
<title>.: Les Brasseurs B.N.L. :.</title>

</head>

<body>
<?
include('actions/conexion.php');
$num_post=$_GET["post_id"];
$datos=mysql_query("SELECT * FROM posts WHERE post_id=$num_post");
$fila=mysql_fetch_array($datos);
?>
<table width="981" height="1110" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/admin_bkg2.png">
  <tr>
    <td height="313" colspan="2">&nbsp;</td>
    <td width="584">&nbsp;</td>
  </tr>
  <tr>
    <td width="138">&nbsp;</td>
    <td width="259" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="60"><a href="admin.php" class="mainMenu">Afficher les messages</a></td>
      </tr>
      <tr>
        <td height="64" class="mainMenu">Composent nouveau message</td>
      </tr>
      <tr>
        <td height="62"><a href="/index.html" target="_blank" class="mainMenu">Voir le site principal</a></td>
      </tr>
      <tr>
        <td height="61">&nbsp;</td>
      </tr>
      <tr>
        <td height="61">&nbsp;</td>
      </tr>
    </table></td>
    <td width="584" valign="top"><h2>Afficher un message</h2>
    <div id="stylized" class="myform">
      <form id="compose" name="compose" method="post" action="" enctype="multipart/form-data">
      <input type="hidden" name="post_num" id="post_num" value="<? echo $fila['post_id']; ?>" />
      <input type="hidden" name="accion" id="accion" value="1" /> <!-- valor 1 significa que es un borrador que se reedita -->
      <table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3">Titre</td>
  </tr>
  <tr>
    <td colspan="3" class="small">Entrez un titre pour l'article.</td>
  </tr>
  <tr>
    <td colspan="3"><input type="text" name="title" id="title" value="<? echo $fila['title']; ?>" /></td>
  </tr>
  <tr>
    <td colspan="3">Thumbnail</td>
  </tr>
  <tr>
    <td colspan="3" class="small">Sélectionnez une image pour la couverture de l'article.</td>
  </tr>
  <tr>
    <td colspan="3"><input type="file" name="thumb_img" id="thumb_img" /></td>
  </tr>
  <tr>
    <td colspan="3">Message:</td>
  </tr>
  <tr>
    <td colspan="3" class="small">Donnez le contenu du message à afficher sur le site.</td>
  </tr>
  <tr>
    <td colspan="3"><textarea name="message" id="message" cols="45" rows="10"><? echo $fila['post_content']; ?></textarea></td>
  </tr>
  <tr>
    <td colspan="3">L'image principale:</td>
  </tr>
  <tr>
    <td colspan="3" class="small">Sélectionnez une image pour le corps de l'article.</td>
  </tr>
  <tr>
    <td colspan="3"><input type="file" name="main_img" id="main_img" /></td>
  </tr>
  <tr>
    <td colspan="3">Date:</td>
    </tr>
  <tr>
    <td colspan="3"><input type="text" name="post_date" id="post_date" readonly value=<? $fecha= time(); echo date("Y/m/j", $fecha); ?> /></td>
  </tr>
  <tr>
    <td colspan="3">Time:</td>
  </tr>
  <tr>
    <td colspan="3"><input type="text" name="post_time" id="post_time" readonly value=<? $fecha= time(); echo date("h:i:s", $fecha); ?> /></td>
  </tr>
  <tr align="center">
    <td width="30%"><button onClick="this.disabled=true; this.form.action='actions/save_draft.php'; this.form.submit()">Sauver le projet</button></td>
    <td width="30%"><button onClick="this.disabled=true; this.form.action='actions/publish.php'; this.form.submit()">Publier</button></td>
    <td width="40%"><button onClick="if (confirm('Etes-vous sûr de vouloir supprimer le message? Cette action ne peut pas être annulée.')){ this.disabled=true; this.form.action='actions/remove.php'; this.form.submit()}">Supprimer Ce Message</button></td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
      </table>

      </form></div>
    <p><a href="admin.php" class="lirelasuite"> << Voir tous les messages</a></p></td>
  </tr>
  
</table>

</body>
</html>
