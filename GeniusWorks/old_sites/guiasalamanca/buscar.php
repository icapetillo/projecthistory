<?
	include("connect.php");

	$parametros = $_POST['searchbox'];

	$sql = "select * from anunciantes where descripcion like '%". $parametros ."%' or nombre like '%". $parametros ."%' or keywords like '%" . $parametros ."%' order by nombre asc";

	$resultado = mysql_query($sql, $link) or die("Error: ".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html>
<head>
  <title>.: Guia Salamanca - La gu�a definitiva para comprar en tu ciudad :.</title>
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
        <div id="sociales">�S�guenos! &nbsp;&nbsp;<img src="images/face.png" border="0" align="absmiddle">&nbsp;&nbsp;<img src="images/twitter.jpg" align="absmiddle" border="0"></div>
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
                <li><a href="#menuv">N�meros de emergencia</a></li>
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
              <span class="texto_buscar">�Qu� est�s buscando?</span>
              &nbsp;&nbsp;
              <input type="text" id="searchbox" name="searchbox" placeholder="Escribe tu b�squeda"/>
              &nbsp;
              <input type="image" src="images/find.png" align="absmiddle">
          </form>
        </div>
      </div>
        
   	<? include("destacados.html"); ?>

      <div id="cont_anuncios">
      	
        <div class="titulo_seccion">
      		Resultados de la b�squeda
      	</div>
        
        <div style="margin:30px;">
          <?
            if (mysql_num_rows($resultado)==0){
              echo "<div class='texto_descripcion'>Tu b�squeda por <b>'".$parametros."'</b> no arroj� ning�n resultado. Por favor intenta con otro t�rmino de b�squeda.</div>";              
            }
            else {
              echo "<div class='texto_descripcion'>Tu b�squeda por <b>'".$parametros."'</b> arroj� los siguientes resultados. Haz clic en el nombre de cada empresa marcada con una estrella (<img src='images/star.png'>) para ver sus detalles.</div>";
            }
          ?>
          
        </div>
      	
        <?php
    			while ($fila = mysql_fetch_array($resultado)){				

    				echo "<a href='anuncio.php?idanunciante=". $fila['id_anunciante'] ."'><div id='item'>";
    					echo "<table>";
    						echo "<tr>";
    							echo "<td>";
    							echo "<img src='".$fila['logotipo']."' class='logo' />";
    							echo "</td>";
    							echo "<td>";
                    if ($fila['tipo_anuncio'] == 1){
                      echo "<img src='images/star.png' />";
                      echo "<a href='anuncio.php?idanunciante=". $fila['id_anunciante'] ."' class='titulo_item'>" . utf8_encode($fila['nombre']). "</a><br>";
                    }
                    else {
                      echo "<div class='titulo_item'>" . utf8_encode($fila['nombre']). "</div><br>";
                    }
    								
    								echo "<b>Tel&eacute;fono: </b><div class='texto_descripcion'>" . utf8_encode($fila['telefono']). "</div>";
    								echo "<b>Domicilio: </b><div class='texto_descripcion'>" . utf8_encode($fila['domicilio']). "</div>";
    								echo "<b>Giro: </b><div class='texto_descripcion'>" . utf8_encode($fila['giro']). "</div>";
    							echo "</td>";
    						echo "</tr>";
    					echo "</table>";
    				echo "</div></a>";    				
    			}
    		?>
       
      </div>
    </div>

  </div>
</body>
</html>