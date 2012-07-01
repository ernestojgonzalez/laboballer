<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_equi = "localhost";
$database_equi = "daniel";
$username_equi = "root";
$password_equi = "";
$equi = mysql_pconnect($hostname_equi, $username_equi, $password_equi) or trigger_error(mysql_error(),E_USER_ERROR); 
?>