<?
include("lib_carrito.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/style.css" type="text/css" rel="stylesheet" />
<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/jquery.skinned-select.js" type="text/javascript"></script>
<title>.: Les Brasseurs B.N.L. :.</title>

</head>

<body>
<table width="981" height="1110" border="0" align="center" cellpadding="0" cellspacing="0" background="images/fondo_pagina.png">
  <tr>
    <td height="313" colspan="2">&nbsp;</td>
    <td width="584">&nbsp;</td>
  </tr>
  <tr>
    <td width="138">&nbsp;</td>
    <td width="259" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="60"><a href="index.html" class="mainMenu">ACTUALITÉ</a></td>
      </tr>
      <tr>
        <td height="64"><a href="produits.html" class="mainMenu">NOS PRODUITS</a></td>
      </tr>
      <tr>
        <td height="62"><a href="propos.html" class="mainMenu">À PROPOS</a></td>
      </tr>
      <tr>
        <td height="61"><a href="contact.html" class="mainMenu">CONTACT</a></td>
      </tr>
      <tr>
        <td height="61"><a href="view_cart.php" class="mainMenu">PANIER D'ACHAT</a></td>
      </tr>
    </table></td>
    <td width="584" align="left" valign="top"><p>
        <? $_SESSION["ocarrito"]->imprime_carrito(); ?>
      </p>
    <p>&nbsp; </p></td>
  </tr>
  
</table>
</body>
</html>
