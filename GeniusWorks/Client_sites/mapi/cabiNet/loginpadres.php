<?php
     include("conexion.php");
     $result = mysql_query("SELECT * FROM semp_alumnos WHERE semp_alumnos.matricula='".$mat."'") or die(mysql_error());
     $nom_completo = $row["nombres"]." ".$row["appaterno"]." ".$row["apmaterno"];
	 session_start();
	 $_SESSION["usuario_mapi"]=$nom_completo;				
  	 header("Location:loginpadres.php");
	 mysql_close();
?>