<?php
$server="localhost";
$userid="geniuswo_master";
$pass="israel52";
$dbname="geniuswo_genius";

$link=mysql_connect($server, $userid, $pass) or die("Conexión imposible");
mysql_select_db($dbname, $link) or die ("No existe la base de datos");

?>