<?php
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
include "coneccionbasedatosmysql.inc";
$enlace=conectarbase();
$insertar="insert into tabla values ('NULL','$nombre','$apellidos')";
echo 'la informacion se agrero correctamento';
$resultadoins=basedatos($insertar);
mysql_close ($enlace)



?>