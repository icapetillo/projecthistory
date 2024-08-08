<!-- IE in quirks mode -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
  <title>.: Guia Salamanca - La guía definitiva para comprar en tu ciudad :.</title>
	<!--META-->
  <link rel="shortcut icon" href="images/favicon.ico" />

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />

	<!--JAVASCRIPT-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/fechahora.js"></script>  
  <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

</head>

<body onload="actualizaReloj()">
  
  
  
  <div id="main_container">

    <div id="cabecera">
        <div id="logo"><a href="index.php"><img src="images/logo.png" border="0"></a></div>
        <div id="datos_contacto">
          <div id="sociales">¡Síguenos! &nbsp;&nbsp;<img src="images/face.png" border="0" align="absmiddle">&nbsp;&nbsp;<img src="images/twitter.jpg" align="absmiddle" border="0"></div>
          <div id="Fecha_Reloj"></div>        
        </div>      
    </div>

    <div id="left-sidebar"> 
      <div id="menuv">
        <?php include("menuprincipal.html"); ?>
      </div>
      <br>
      <hr id="separador">
      <div id="utilidades">
        <div id="menuv">
        <ul>
                <li><a href="#menuv">Números de emergencia</a></li>
                <li><a href="#menuv">Presidencia municipal</a></li>
                <li><a href="#menuv">Bolsa de trabajo</a></li>
                <li><a href="#menuv">Casa de la Cultura</a></li>                
        </ul>
      </div>
      </div>
      <br>
      <hr id="separador">
      <div id="widgets">
        <center>
        <!-- Yahoo! Clima Badge -->
        <iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" class="vertical" src="http://mx.clima.yahoo.com/_external/badge/?id=141150&l=vertical&t=trans&u=c" height="255px" width="186px"></iframe>
        <noscript><a href="http://mx.clima.yahoo.com/méxico/guanajuato/salamanca-141150/">Salamanca Clima</a> from <a href="http://mx.clima.yahoo.com">Yahoo! Clima</a></noscript>
        <!-- Yahoo! Clima Badge -->
        </center>
      </div>
      <hr id="separador">
      <center>
        <span class="texto_adicional">Sitio optimizado para:</span>
        <br>
        <img src="images/logo-chrome.png">
        <img src="images/logo-firefox.png">
        <img src="images/logo-opera.png">
      </center>
    </div>


    <div id="content">
    	<!--<div id="topbar">        
        <div id="datosusuario"><img src="images/user.png" align="absmiddle"><span style="padding:5px;"> Juan Pérez García </span><input type="image" src="images/settings.png" align="absmiddle"></div>      
      </div>-->
      <div id="caja_busqueda">
        <div id="searchwidget">
          <form action="buscar.php" method="post">
              <span class="texto_buscar">¿Qué estás buscando?</span>
              &nbsp;&nbsp;
              <input type="text" id="searchbox" name="searchbox" placeholder="Escribe tu búsqueda"/>
              &nbsp;
              <input type="image" src="images/find.png" align="absmiddle">
          </form>
        </div>
      </div>
        
    	<? include("destacados.html"); ?>

      <div id="cont_anuncios">

        <table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="80" colspan="3" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=4" border="0"><img src="images/banners/cunbajio.png" border="0"></a></td>
          </tr>
          <tr>
            <td width="398" height="220" rowspan="2" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=5" border="0"><img src="images/banners/anexa.png" border="0"></a></td>
            <td width="198" height="110" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=2" border="0"><img src="images/banners/lancaster.png" border="0"></a></td>
            <td width="198" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=6" border="0"><img src="images/banners/chanchos.png" border="0"></td>
          </tr>
          <tr>
            <td width="198" height="110" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=3" border="0"><img src="images/banners/vero.png" border="0"></a></td>
            <td width="198" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=7" border="0"><img src="images/banners/mapi.png" border="0"></td>
          </tr>
        </table>

        <table width="800" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="220" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=10" border="0"><img src="images/banners/montbleu.png" border="0"></a></td>
          </tr>
        </table>
      
       <table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="198" height="110" class="tabla_ads" align="center" valign="middle"><a href="anuncio.php?idanunciante=8" border="0"><img src="images/banners/clasesdoris.png" border="0"></a></td>
            <td width="198" height="110" class="tabla_ads" align="center" valign="middle"><img src="images/rect_mini2.png" border="0"></td>
            <td width="398" height="220" colspan="2" rowspan="2" class="tabla_ads" align="center" valign="middle"><img src="images/rect_gde2.png" border="0"></td>
          </tr>
          <tr>
            <td width="198" height="110" class="tabla_ads" align="center" valign="middle"><img src="images/rect_mini3.png" border="0"></td>
            <td width="198" height="110" class="tabla_ads" align="center" valign="middle"><img src="images/rect_mini4.png" border="0"></td>
          </tr>
          <tr>
            <td width="798" height="80" colspan="4" class="tabla_ads"align="center" valign="middle"><img src="images/cintillo2.png" border="0"></td>
          </tr>
       </table>
       
       <div id="footer">
        <center>
          La Guía Salamanca es un servicio de <a href="http://www.geniusworksmexico.com" target="_blank"><img src="images/gwlogo.png"  align="absmiddle" border="0"></a>          
        </center>
       </div>
      
      </div>
    </div>
  </div>
</body>
</html>