<!-- IE in quirks mode -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
  <title>.: Guia Salamanca - La guía definitiva para comprar en tu ciudad :.</title>
	<!--META-->
  <link rel="shortcut icon" href="images/favicon.ico" />

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/datePicker.css"  />
  <link rel="stylesheet" type="text/css" href="css/tiptip.css"  />
  <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />



	<!--JAVASCRIPT-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/fechahora.js"></script>  
  <script type="text/javascript" src="js/date.js"></script>
  <script type="text/javascript" src="js/jquery.datePicker.js"></script>
  <script type="text/javascript" src="js/kickstart.js"></script>
  <script type="text/javascript" src="js/prettify.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

  <script type="text/javascript" src="js/validar.js"></script>

  <script type="text/javascript">
    $(function()
    {
        $('.date-pick').datePicker({startDate:'01/01/1900'});
    });
  </script>     


  <script type="text/javascript">
    $(document).ready(function() {    
        $('#usrname').blur(function(){

            $('#Info').html('<img src="images/loading.gif" alt="Verificando..."  />').fadeOut(1000);

            var username = $(this).val();        
            var dataString = 'usrname='+username;

            $.ajax({
                type: "POST",
                url: "verificarusuario.php",
                data: dataString,
                success: function(data) {
                    $('#Info').fadeIn(1000).html(data);
                }
            });
        });              
    });    
  </script>
  

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

    <table width="800px" height="820px" class="tabla_ads">
      <tr><td>
        <br>
        <div class="titulo_seccion">¡Regístrate ahora! </div>
        <br>

      <div id="formulario">
        <p style="text-align:justify">
          Registrarte como usuario de la Guia Salamanca tiene grandes ventajas: podrás marcar tus anunciantes favoritos, recibir promociones y descuentos exclusivos de nuestros anunciantes, participar en sorteos y concursos, ¡y muchas sorpresas más!. Sólo llena el siguiente formulario y podrás empezar a disfrutar de los servicios ampliados de la Guia Salamanca.
        </p>
        <form id="regusuario" name="regusuario" method="post" action="registrarusuario.php">
          <fieldset name="personales">            
            <legend>Datos personales</legend>

            <table width="100%">
              <tr>
                <td>
                  <label for="nombre">Nombre</label><br>
                  <input type="text" name="nombre" width="100" class="longinput tooltip-right" title="Escribe tu nombre completo" />
                </td>
                <td>
                  <label>Sexo:</label><br>
                  <input type="radio" name="sexo" value="1" /> Hombre <input type="radio" name="sexo" value="2" /> Mujer <br>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="email">Correo Electrónico</label><br>
                  <input type="text" name="email" width="100" class="longinput tooltip-right" title="Escribe tu correo electrónico" />
                </td>
                <td>
                  <label for="f_nac">Fecha de nacimiento</label><br>
                  <input type="text" name="f_nac" class="date-pick dp-applied tooltip-right" title="Haz clic en el icono del calendario para elegir tu fecha de nacimiento" />
                </td>
              </tr>
            </table>          
          </fieldset>

          <fieldset name="personales">
            <legend>Datos de acceso</legend>
            
            <label for="usrname">Nombre de usuario</label><br>
            <input type="text" id="usrname" name="usrname" width="100" class="longinput tooltip-right" title="Escribe el nombre de usuario que deseas utilizar" />
            <div id="Info"></div>

            <br><br>            
            <label for="pass1">Contraseña</label><br>
            <input type="password" name="pass1" class="longinput tooltip-right" title="Escribe tu contraseña, debe contener más de 3 caracteres" />

            <br><br>            
            <label for="pass2">Repetir contraseña</label><br>
            <input type="password" name="pass2" class="longinput tooltip-right" title="Vuelve a escribir tu contraseña" />

            <br><br>            
            <input type="checkbox" name="suscripcion" checked="true" value="1" />Deseo recibir noticias y promociones de los anunciantes via correo electrónico.
          </fieldset>          
          <div style="width:600px; margin:0 auto; text-align:right;">
            <button type="button" class="green btregistrar" name="registrar" onclick="validarDatos();">¡Regístrate ahora!</button>
            <button type="button" class="btcancelar" name="cancelar" onclick="javascript:location.href='index.php';">Cancelar</button>
          </div>
        </form>       
      </div>
      </td></tr>
      </table>

       <div id="footer">
        <center>
          La Guía Salamanca es un servicio de <a href="http://www.geniusworksmexico.com" target="_blank"><img src="images/gwlogo.png"  align="absmiddle" border="0"></a>          
        </center>
       </div>
    </div>

  </div>
</body>
</html>