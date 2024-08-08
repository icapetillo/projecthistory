<?php 
  include('connect.php'); 

  $id = $_GET['idanunciante'];

  $sql = "select * from anunciantes where id_anunciante = $id";
  $resultado = @mysql_query($sql, $link) or die("Error: ".mysql_error());

  $fila=mysql_fetch_array($resultado);
?>
<!-- IE in quirks mode -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
  <title>.: Guia Salamanca - La gu&iacute;a definitiva para comprar en tu ciudad :.</title>
	<!--META-->
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <meta name="title" content="La Guia Salamanca - <?php echo $fila['nombre']; ?>" />
  <meta name="description" content="<?php echo $fila['descripcion']; ?>" />

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />

	<!--JAVASCRIPT-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/fechahora.js"></script>  
  <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

  <script type="text/javascript">
  var addthis_share ={
    templates: {
         twitter: 'Nuevo anuncio en la Guia Salamanca. {{url}} @guiasalamanca'
     }
  }
  </script>
             
</head>

<body onload="actualizaReloj()">

<!-- Facebook comments required -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Fin Facebook comments required -->

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
        <noscript><a href="http://mx.clima.yahoo.com/m�xico/guanajuato/salamanca-141150/">Salamanca Clima</a> from <a href="http://mx.clima.yahoo.com">Yahoo! Clima</a></noscript>
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
        <div id="datosusuario"><img src="images/user.png" align="absmiddle"><span style="padding:5px;"> Juan P�rez Garc�a </span><input type="image" src="images/settings.png" align="absmiddle"></div>      
      </div>-->
    	
     <div id="caja_busqueda">
        <div id="searchwidget">
          <form action="buscar.php" method="post">
              <span class="texto_buscar">¿Qu&eacute; est&aacute;s buscando?</span>
              &nbsp;&nbsp;
              <input type="text" id="searchbox" name="searchbox" placeholder="Escribe tu b&uacute;squeda"/>
              &nbsp;
              <input type="image" src="images/find.png" align="absmiddle">
          </form>
        </div>
      </div>

      <? include("destacados.html"); ?>
      <br />

      <div id="cont_anuncios">
        <a href="javascript:history.back();" id="btVolver">Regresar</a>
        <center>
          <table width="760" border="0" cellspacing="0" cellpadding="0">
            <tr height="40px">
              <td colspan="3">
                <div id="info_giro"><div class="textoanuncios">Giro: <? echo utf8_encode($fila['giro']); ?></div></div>                
              </td>
              <td colspan="2">
                <div id="share">
                  <!-- AddThis Button BEGIN -->
                  <?
                  $url_pag = "http://localhost/guiasalamanca/anuncio.php?idanunciante=".$id;
                  ?>
                  <div class="addthis_toolbox addthis_default_style">
                  <a class="addthis_button_preferred_1"></a>
                  <a class="addthis_button_preferred_2"></a>
                  <a class="addthis_button_preferred_3"></a>
                  <a class="addthis_button_preferred_4"></a>
                  <a class="addthis_button_compact"></a>
                  <a class="addthis_counter addthis_bubble_style"></a>
                  </div>
                  <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4da5f4e264c5441d"></script>
                  <!-- AddThis Button END -->
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="5">
                <div id="logoanunciante">
                  <img src=<? echo utf8_encode($fila['logotipo']); ?> class="logo" />
                </div>
                <div id="datosanunciante">
                  <div class="nombreanunciante"><? echo utf8_encode($fila['nombre']); ?> </div>
                  <div class="infoanunciante">
                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                      <tr>
                        <td width='15%'><b>Domicilio:</b></td>
                        <td>                          
                          <? echo utf8_encode($fila['domicilio']); ?>
                          <a href="vermapa.php?idanunciante= <? echo $fila['id_anunciante']; ?>" target="_blank"><img src="images/mapa.png" alt="Ver mapa" border="0" align="absmiddle">(Ver mapa)</a>
                        </td>
                      </tr>
                      <tr>
                        <td width='15%'><b>Tel&eacute;fono:</b></td>
                        <td>
                          <? echo utf8_encode($fila['telefono']); ?> 
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </td>
            </tr>
            <tr height="300px" valign="top">
              <td colspan="5">
                <div id="descripanunciante">
                  <div class="titulo_seccion">Acerca de nosotros:</div><br />
                  <div class="texto_descripcion">
                    <? echo utf8_encode($fila['descripcion']); ?> 
                  </div>
                </div>
                <div id="extrasanunciante">
                  <div class="titulo_seccion">Detalles</div>
                  <b>D&iacute;as de atenci&oacute;n:</b><br>
                  &nbsp;&nbsp;&nbsp; <? echo utf8_encode($fila['dias_servicio']); ?>  <br>
                  <b>Horario:</b><br>
                  &nbsp;&nbsp;&nbsp; <? echo utf8_encode($fila['horario']); ?> <br>
                  <b>Formas de pago:</b><br>
                  &nbsp;&nbsp;&nbsp; <? echo utf8_encode($fila['formas_pago']); ?>  <br>
                  <b>Servicio a domicilio:</b><br>
                  &nbsp;&nbsp;&nbsp; <? if ($fila['entregas_dom']==1) echo 'Si'; else echo 'No'; ?>  <br>
                </div>
              </td>
            </tr>
            <tr>
              <td width="152"><div class="titulo_seccion">¡Con&eacute;ctate!</div></td>
              
              <td width="152" align="center">
                <?
                  if ($fila['website'] =="#") {
                    echo "<img src='images/world_gray.png' border='0' align='absmiddle' />";
                    echo "<span class='inactivo'>Sitio web</span>";
                  }
                  else
                  {
                    echo "<img src='images/world.png' border='0' align='absmiddle' />";
                    echo "<a href='".utf8_encode($fila['website'])."' class='linktext' target='_blank'>Sitio Web</a>";
                  }
                ?> 
              </td>
              
              <td width="152" align="center">                
                <?
                  if ($fila['facebook'] =="#") {
                    echo "<img src='images/face_gray.png' border='0' align='absmiddle' />";
                    echo "<span class='inactivo'>Facebook</span>";
                  }
                  else
                  {
                    echo "<img src='images/face_small.png' border='0' align='absmiddle' />";
                    echo "<a href='".utf8_encode($fila['facebook'])."' class='linktext' target='_blank'>Facebook</a>";
                  }
                ?>                
              </td>
              
              <td width="152" align="center">
                <?
                  if ($fila['twitter'] =="#") {
                    echo "<img src='images/twitter_gray.png' border='0' align='absmiddle' />";
                    echo "<span class='inactivo'>Twitter</span>";
                  }
                  else
                  {
                    echo "<img src='images/twitter_small.png' border='0' align='absmiddle' />";
                    echo "<a href='http://www.twitter.com/".utf8_encode($fila['twitter'])."' class='linktext' target='_blank'>Twitter</a>";
                  }
                ?>                
              </td>
              </td>
              
              <td width="152" align="center">
                <?
                  if ($fila['email'] =="#") {
                    echo "<img src='images/mail_gray.png' border='0' align='absmiddle' />";
                    echo "<span class='inactivo'>Enviar correo</span>";
                  }
                  else
                  {
                    echo "<img src='images/mail_small.png' border='0' align='absmiddle' />";
                    echo "<a href='mailto:".utf8_encode($fila['email'])."' class='linktext' target='_blank'>Enviar correo</a>";
                  }
                ?> 
              </td>

            </tr>
            <tr>
              <td colspan="5">
                <div id="promociones">
                  <div class="titulo_seccion">Nuestras promociones</div><br>
                  <div class="texto_descripcion">
                    <?
                      $sql = "select * from promociones where id_anunciante = $id";
                      $resultado = @mysql_query($sql, $link) or die("Error: ".mysql_error());

                      $fila=mysql_fetch_array($resultado);

                      echo utf8_encode($fila['descripcion']);
                    ?>
                    
                  </div>

                </div>
              </td>
            </tr>
            <tr>
              <td colspan="5">
                <div class="titulo_seccion">Comentarios</div><br>
                <center><div class="fb-comments" data-href="http://www.geniusworksmexico.com/guiasalamanca" data-num-posts="5" data-width="750"></div></center>
              </td>
            </tr>
          </table>

        </center>
      </div>
    </div>

  </div>
</body>
</html>