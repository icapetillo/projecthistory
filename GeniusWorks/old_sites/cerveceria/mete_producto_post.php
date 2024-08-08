<?
include("lib_carrito.php");

//Recuperar tipo de cerveza. Con ello, elegir el nombre y los precios adecuados;
$tipo=$_POST["tipo"];
$format=$_POST["format"];
$quant=$_POST["quant"];
$precio=0;
$nombre_cerveza="";
$nombre_formato="";

switch($tipo){
	case 1:
		$nombre_cerveza="Blonde";
		switch($format){
			case 1:
				$nombre_formato="330 ml";
				$precio=2.49;
				break;
			case 2:
				$nombre_formato="750 ml";
				$precio=3.49;
				break;
			case 3:
				$nombre_formato="Case 330 ml (12 unités)";
				$precio=27.99;
				break;
			}
	break;
	
	case 2:
		$nombre_cerveza="Cerises d´automne";
		switch($format){
			case 1:
				$nombre_formato="330 ml";
				$precio=1.99;
				break;
			case 2:
				$nombre_formato="500 ml";
				$precio=2.49;
				break;
			case 3:
				$nombre_formato="750 ml";
				$precio=3.99;
				break;
			case 4:
				$nombre_formato="Case 330 ml (12 unités)";
				$precio=20.99;
				break;
			}
	break;

	case 3:
		$nombre_cerveza="India Pale Ale";
		switch($format){
			case 1:
				$nombre_formato="330 ml";
				$precio=1.99;
				break;
			case 2:
				$nombre_formato="500 ml";
				$precio=2.49;
				break;
			case 3:
				$nombre_formato="750 ml";
				$precio=3.99;
				break;
			case 4:
				$nombre_formato="Case 330 ml (12 unités)";
				$precio=20.99;
				break;
			}
	break;
	
	}

//Calcular el total a pagar
$total=$quant * $precio;

//Armar el nombre del producto a introducir en el carrito (cantidad + nombre).
$producto = $quant."    ".$nombre_cerveza." ".$nombre_formato;

$_SESSION["ocarrito"]->introduce_producto($tipo, $producto, $total);
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
        <td height="61"><a href="panier.html" class="mainMenu">PANIER D'ACHAT</a></td>
      </tr>
    </table></td>
    <td width="584" align="center" valign="top"><table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
      <tr class="titer">
        <td height="49" align="center" bgcolor="#FF6600">Produit mis en panier</td>
      </tr>
    </table>
      <p>
        <? $_SESSION["ocarrito"]->imprime_carrito(); ?>
      </p>
      <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr>
          <td align="right"><a href="produits.html" class="smallselect">Continuer les achats</a></td>
        </tr>
        <tr>
          <td align="right"><a href="#" class="smallselect">Commander sur Paypal</a><br /><img src="images/logo-paypal_small.jpg" /></td>
        </tr>
      </table>
    <p>&nbsp; </p></td>
  </tr>
  
</table>
</body>
</html>
