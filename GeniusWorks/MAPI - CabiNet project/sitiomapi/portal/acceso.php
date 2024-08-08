<?php
      session_start();
      //datos para establecer la conexion con la base de mysql.
      mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
      mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
      function quitar($mensaje)
      {
          $nopermitidos = array("'",'\\','<','>',"\"");
          $mensaje = str_replace($nopermitidos, "", $mensaje);
          return $mensaje;
      }     
      if(trim($HTTP_POST_VARS["matricula"]) != "" && trim($HTTP_POST_VARS["password"]) != "")
      {
          // Puedes utilizar la funcion para eliminar algun caracter en especifico
          $usuario = $HTTP_POST_VARS["matricula"];
          $password = $HTTP_POST_VARS["password"];
         // o puedes convertir los a su entidad HTML aplicable con htmlentities
         // $usuario = strtolower(htmlentities($HTTP_POST_VARS["matricula"], ENT_QUOTES));   
		 // $password = $HTTP_POST_VARS["password"];
          $result = mysql_query('SELECT matricula, password FROM alumnos WHERE matricula=\''.$usuario.'\'');
          if($row = mysql_fetch_array($result)){
              if($row["password"] == $password){
                  $_SESSION["k_username"] = $row['matricula'];
				  echo $usuario;
                  //Conectarse y buscar los datos de la boleta
				  $datos = mysql_query('SELECT * FROM calificaciones WHERE matricula =\''.$usuario.'\'');
				  if ($renglon = mysql_fetch_array($datos)){
					  echo "Hola ".$renglon['materia'];
					  }
				  
				  
              }else{
                  echo 'Password incorrecto';
              }
          }else{
			  echo $usuario;
              echo 'Usuario no existente en la base de datos';
          }
          mysql_free_result($result);
      }else{
          echo 'Debe especificar un usuario y password';
      }
      mysql_close();
      ?>