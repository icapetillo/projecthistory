<?php
// Account information
$dbhost='sql206.260mb.net';
$dbusername='n260m_16216686';
$dbuserpass='israel52';
$dbname='n260m_16216686_iq_secundaria';

// Connect and select databases
mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname) or die('Cannot select database');
?>