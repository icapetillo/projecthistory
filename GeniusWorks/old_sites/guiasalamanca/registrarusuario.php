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

		<?php 
				include("connect.php");
        mysql_select_db("usuarios");

				//Obtener valores del formulario
				$nombre				=	$_POST['nombre'];
				$fecha_nac		=	$_POST['f_nac'];
				$sexo         =	$_POST['sexo'];
				$email				=	$_POST['email'];
				$usrname			=	$_POST['usrname'];
				$password			=	$_POST['pass1'];
        $susc         = $_POST['suscripcion'];

        $suscrip=1;

				$fnac=implode('-',array_reverse(explode('/',$fecha_nac)));

				//NOTA: Para recuperar el formato original de la fecha usa SELECT DATE_FORMAT(fecha,'%d-%m-%Y ') as fechaInvertida FROM tabla WHERE algo=algo ... atte: Tu yo del pasado.

				//Calcular la edad
				function calculaedad($fechanacimiento){
				    list($dia,$mes,$ano) = explode("/",$fechanacimiento);
				    $ano_diferencia  = date("Y") - $ano;
				    $mes_diferencia = date("m") - $mes;
				    $dia_diferencia   = date("d") - $dia;
				    if ($dia_diferencia < 0 || $mes_diferencia < 0)
				        $ano_diferencia--;
				    return $ano_diferencia;
				}

				$edad = calculaedad($fecha_nac);

				//Fecha de registro
				$fecha_registro = date("Y-m-d");

        //Suscripcion
        if ($susc != 1){
          $suscrip = 0;
        }

				//Insertar el registro
				try {
					$sql = "insert into usuarios (nombre, fecha_nac, edad, sexo, email, usrname, password, fecha_registro, suscripcion) values ('$nombre', '$fnac', '$edad', '$sexo', '$email', '$usrname', '$password', '$fecha_registro','$suscrip')";
					@mysql_query($sql) or die("Error al insertar el registro: ".mysql_error());
          echo "<br><div class='titulo_seccion'> ¡Regístro exitoso! </div><br>";
					echo "<div id='resultado'>Te has registrado exitosamente. Bienvenido a la comunidad de compradores más grande de Salamanca.</div>";
				} catch (Exception $e) {
					echo "<div id='resultadoNeg'>Ha ocurrido un error con tu registro. Por favor <a href='javascript:history.back();'>regresa</a> y vuelve a intentarlo.</div>";
				}
				

				
		?>
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