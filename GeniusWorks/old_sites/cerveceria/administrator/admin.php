<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/style.css" type="text/css" rel="stylesheet" />
<title>.: Les Brasseurs B.N.L. :.</title>

</head>

<body>
<table width="981" height="1110" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/admin_bkg2.png">
  <tr>
    <td height="313" colspan="2">&nbsp;</td>
    <td width="584">&nbsp;</td>
  </tr>
  <tr>
    <td width="138">&nbsp;</td>
    <td width="259" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="60" class="mainMenu">Afficher les messages</td>
      </tr>
      <tr>
        <td height="64"><a href="compose.php" class="mainMenu">Composent nouveau message</a></td>
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
    <td width="584" valign="top"><p><h2>Afficher les messages</h2>
</p>
      <table width="570" border="0" cellspacing="0" cellpadding="0">
        <tr class="table_titles">
        <td width="180"><p>Titre</p></td>
        <td width="100">Date</td>
        <td width="100">Time</td>
        <td width="100">Statut</td>
        <td width="90">Vue</td>
      </tr>
      <? 
	  include ('actions/conexion.php');
	  $datos = mysql_query("SELECT * FROM posts ORDER BY post_id DESC");
	  $i=0;
	  while ($fila=mysql_fetch_array($datos)){
		  if ($i%2==0){
			  $bkcolor='#FFCC66';
			  }
		  else {
			  $bkcolor='#FFFFFF';
			  }
		  if ($fila['status']==0){
			  $status="Projet";
			  $clase="projet";
		  } else {
			  $status="Publié";
			  $clase="none";
		  }
		  echo "<tr class='table_rows' bgcolor='$bkcolor'>";
		  echo "<td width='180'>".$fila['title']."</td>
        	<td width='100' align='center'>".$fila['date']."</td>
        	<td width='100' align='center'>".$fila['time']."</td>
        	<td width='100' align='center' class=$clase >".$status."</td>
        	<td width='90' align='center'><a href='view.php?post_id=".$fila['post_id']."'><img src='/images/search.png' border='0' alt='Vue' /></a></td>";
		  echo "</tr>"; 
  		  $i++;
		  }
	  ?>
  </table></td>
  </tr>
  
</table>

</body>
</html>
