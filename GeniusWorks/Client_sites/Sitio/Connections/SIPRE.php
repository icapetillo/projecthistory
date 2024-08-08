<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_SIPRE = "localhost";
$database_SIPRE = "SIPRE_Celaya";
$username_SIPRE = "root";
$password_SIPRE = "pAcorro76";
$SIPRE = mysql_pconnect($hostname_SIPRE, $username_SIPRE, $password_SIPRE) or trigger_error(mysql_error(),E_USER_ERROR); 
?>