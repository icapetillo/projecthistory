<?php
     include("conexion.php");
      
      if($usuario != "" && $pass != "")
      {
          $result = mysql_query("SELECT semp_usuarios.pass, semp_usuarios.nombres, semp_usuarios.appaterno, semp_usuarios.apmaterno, semp_usuarios.rol FROM semp_usuarios WHERE semp_usuarios.usrname='".$usuario."'") or die(mysql_error());
          if($row = mysql_fetch_array($result)){
              if($row["pass"] == $pass){
				$nom_completo = $row["nombres"]." ".$row["appaterno"]." ".$row["apmaterno"];
				session_start();
				$_SESSION["usuario_mapi"]=$nom_completo;
				$_SESSION["rol_usr"]=$row["rol"];
				
				//Si es administrador
				if ($row["rol"]==1) {
					 header("Location:admin_intro.php");					
					}
				//Si es maestro
				if ($row["rol"]==2) {
					 header("Location:selnivelgrupo.php");
					}
				//Si es padre de familia
				if ($row["rol"]==3) {
					$resultado = mysql_query("SELECT * FROM semp_alumnos WHERE matricula='".$usuario."'") or die(mysql_error());
					$fila=mysql_fetch_array($resultado);
					$nombre_completo=$fila['appaterno']." ".$fila['apmaterno']." ".$fila['nombres'];
					echo "<center><a href='menu_expediente_padre.php?nombre_completo=".utf8_encode($nombre_completo)."&nivel=".$fila['nivel']."&grupo=".$fila['grupo']."&id_alumno=".$fila['id_alumno']."'><img src='acceso.png' border='0'></center></a>";
					}
              }else{
                  header("Location:login_incorrecto.php");
              }
          }else{
             header("Location:login_incorrecto.php");
          }
          mysql_free_result($result);
      }else{
          echo 'Debe especificar un usuario y password';
      }
      mysql_close();
?>
