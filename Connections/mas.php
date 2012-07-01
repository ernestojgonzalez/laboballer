<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mas = "localhost";
$database_mas = "daniel";
$username_mas = "root";
$password_mas = "";
$mas = mysql_pconnect($hostname_mas, $username_mas, $password_mas) or trigger_error(mysql_error(),E_USER_ERROR); 
?>