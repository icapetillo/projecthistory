<?
include_once("connect.php");
$username=$_POST['uname'];
$password=$_POST['pass'];

$sql = "SELECT * FROM usuarios WHERE email='$username' AND password='$password'";
	
$res = mysql_query($sql);

if ($row = mysql_fetch_array($res)){
	echo "1";
	session_start();
	$_SESSION['name'] = $row['nombre'];
	$_SESSION['id'] = $row['id'];
}	
else {
	echo "0";
}	
?>