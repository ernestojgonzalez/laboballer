<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cone_equipo = "localhost";
$database_cone_equipo = "daniel";
$username_cone_equipo = "root";
$password_cone_equipo = "";
$cone_equipo = mysql_pconnect($hostname_cone_equipo, $username_cone_equipo, $password_cone_equipo) or trigger_error(mysql_error(),E_USER_ERROR); 
?>