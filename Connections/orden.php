<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_orden = "localhost";
$database_orden = "daniel";
$username_orden = "root";
$password_orden = "";
$orden = mysql_pconnect($hostname_orden, $username_orden, $password_orden) or trigger_error(mysql_error(),E_USER_ERROR); 
?>