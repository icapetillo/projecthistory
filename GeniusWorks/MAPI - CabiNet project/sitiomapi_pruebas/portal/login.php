<?php
      include('conexion.php');
      function quitar($mensaje)
      {
          $nopermitidos = array("'",'\\','<','>',"\"");
          $mensaje = str_replace($nopermitidos, "", $mensaje);
          return $mensaje;
      }     
      if(trim($HTTP_POST_VARS["matricula"]) != "" && trim($HTTP_POST_VARS["password"]) != "")
      {
          $result = mysql_query('SELECT * FROM alumnos WHERE matricula=\''.$matricula.'\'');
          if($row = mysql_fetch_array($result)){
              if($row["password"] == $password){
				  $nombre = $row['appaterno']." ".$row['apmaterno'].", ".$row['nombres'];
                  
                  header("Location:principal.php?matricula=".$row['matricula']."&nombre=".$nombre."&grado=".$row['grado']."&grupo=".$row['grupo']."&nivel=".$row['nivel']);
              }else{
                  echo '<table><tr><td bgcolor=red>Password incorrecto</td></tr></table>';
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
