<?php
//DB info
//dev
//$dbhost='techdeba.com:3306';
//prod
$dbhost='localhost:3306';
$dbusername='techdeba_master52';
$dbpassword='icapetillos#52';
$dbschema='techdeba_tdbexplorer';

mysql_connect($dbhost, $dbusername, $dbpassword);
mysql_select_db($dbschema) or die('No puede seleccionarse la bd');
?>