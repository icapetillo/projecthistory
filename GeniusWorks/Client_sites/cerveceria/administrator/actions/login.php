<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="../estilos/intranet.css" />
<title>.: Les Brasseurs B.N.L. :.</title>
</head>
<body>
<?php
     include("conexion.php");
	 $usuario = $_POST["usuario"];
	 $password = $_POST["password"];
      if ($usuario != "" || $password != "")
      {
          $result = mysql_query("SELECT usrname, password FROM users WHERE usrname='".$usuario."'") or die(mysql_error());
          if($row = mysql_fetch_array($result))
		  {
              if($row["password"] == $password)
			  {
				  header("Location:../admin.php");
			  }
			  else
			  {
				echo "<script language='javascript'>"; 
				echo "alert('Impossible de se connecter. Vérifiez votre nom d´utilisateur et mot de passe.');";
				echo "document.location=('../index.html');";
				echo "</script>";
				  /*
				 header("Location:../admins.php");
				
				 echo "Login erroneo";*/
			  }
		  }
		  else
		  {
				echo "<script language='javascript'>"; 
				echo "alert('Impossible de se connecter. Vérifiez votre nom d´utilisateur et mot de passe.');";
				echo "document.location=('../index.html');";
				echo "</script>";
		  }
	  }
      else
	  {
	        echo "<script language='javascript'>"; 
			echo "alert('Vous devez fournir un nom d´utilisateur et mot de passe.');";
			echo "document.location=('../index.html');";
			echo "</script>";
      }
      mysql_close();
?>
</body>
</html>

