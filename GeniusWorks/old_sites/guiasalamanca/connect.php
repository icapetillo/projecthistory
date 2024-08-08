<?php

/* REMOTO */
$server="localhost";
$dbusr="geniuswo_master";
$dbpass="israel52";
$database="geniuswo_guiasalamanca";


/*LOCAL
$server="localhost";
$dbusr="root";
$dbpass="123";
$database="guiasalamanca";
*/


$link = @mysql_connect($server, $dbusr, $dbpass) or die ("No se pudo establecer la conexión a la base de datos. ERROR: ".mysql_error());
mysql_select_db($database, $link) or die ("Error: ". mysql_error());

?>