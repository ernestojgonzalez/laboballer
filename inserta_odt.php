<title>REGISTRA ODT</title><?php
// declaracion de variables

$id_odt=$_POST['id_odt'];
$fallos=$_POST['fallos'];
$fecha_ini=$_POST['fecha_ini'];
$fecha_fin=$_POST['fecha_fin'];
$prioridad=$_POST['prioridad'];
$datos_empleado=$_POST['datos_empleado'];
$datos_equipo=$_POST['datos_equipo'];



include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()
$fallos=strtoupper($fallos);
$prioridad=strtoupper($prioridad);
$datos_empleado=strtoupper($datos_empleado);
$datos_equipo=strtoupper($datos_equipo);

             $Insertar= "INSERT INTO odt VALUES('NULL','$fallos','$fecha_ini','$fecha_fin','$prioridad','$datos_empleado','$datos_equipo')";
             $resultadoins=basedatos($Insertar);
             echo "<table  align=center id='background-image'><tr><td><BR><p><strong><center>La Información fue registrada satisfactoriamente</center></strong></p><BR></td></tr></table>";
   
       mysql_close ($enlace);
   ?>