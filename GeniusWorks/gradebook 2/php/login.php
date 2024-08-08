<?
include_once("conn.php");
$username=$_POST['uname'];
$password=$_POST['password'];

$sql = "SELECT Personas.Nombre, Usuarios.UserName, Usuarios.Pass FROM Personas, Usuarios WHERE Usuarios.UserName =  '$username' AND Usuarios.Pass =  '$password' AND Usuarios.IDPersona = Personas.ID";
//$sql = "SELECT * FROM Usuarios WHERE UserName='$username' AND Pass='$password'";
	
$res = mysql_query($sql);
//$row = mysql_fetch_array($res);

if ($row = mysql_fetch_array($res)){
	echo "1";
	session_start();
	$_SESSION['name'] = $row['Nombre'];
}	
else {
	echo "0";
}	
?>