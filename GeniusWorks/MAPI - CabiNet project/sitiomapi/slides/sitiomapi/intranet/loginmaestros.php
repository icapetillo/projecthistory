<?php
      //datos para establecer la conexion con la base de mysql.
      mysql_connect('200.52.83.41','mapimx','gh5188')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
      mysql_select_db('mapi')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
      
      if(trim($HTTP_POST_VARS["usuario"]) != "" && trim($HTTP_POST_VARS["pass"]) != "")
      {
          $result = mysql_query("SELECT * FROM usuarios WHERE usuario='".$usuario."'");
          if($row = mysql_fetch_array($result)){
              if($row["password"] == $pass){
				session_start();
				$_SESSION["usuario_mapi"]=$usuario;
			  	if ($row["nivel"] == 1){
					 header("Location:menu_admin.php");
				}
				else{
					if ($row["nivel"] == 2)
					{
					header("Location:menu.php");
					}
					else
					{
						header("Location:menu_ingles.php");
					}
				}
                 
              }else{
                  echo '<table><tr><td bgcolor=red>Password incorrecto</td></tr></table>';
				  echo '<br>';
				  echo '<a href="javascript:history.back()">Volver a intentar</a>';
              }
          }else{
              echo 'Usuario no existente en la base de datos';
          }
          mysql_free_result($result);
      }else{
          echo 'Debe especificar un usuario y password';
      }
      mysql_close();
      ?>