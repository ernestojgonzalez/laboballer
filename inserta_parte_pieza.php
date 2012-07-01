<title>INSERTA PIEZAS Y PARTES</title><?php
// declaracion de variables

$id_parte_pieza=$_POST['id_parte_pieza'];
$nombre_equipo=$_POST['nombre_equipo'];
$nombre_parte=$_POST['nombre_parte'];
$codigo_parte=$_POST['codigo_parte'];
$cantidad_parte=$_POST['cantidad_parte'];
$piezas=$_POST['piezas'];



include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()
$nombre_equipo=strtoupper($nombre_equipo);
$nombre_parte=strtoupper($nombre_parte);
$codigo_parte=strtoupper($codigo_parte);
$cantidad_parte=strtoupper($cantidad_parte);
$piezas=strtoupper($piezas);

             $Insertar= "INSERT INTO partepieza VALUES('NULL','$nombre_equipo','$piezas','$codigo_parte','$nombre_parte','$cantidad_parte')";
             $resultadoins=basedatos($Insertar);
             echo "<table  align=center id='background-image'><tr><td><BR><p><strong><center>La Información fue registrada satisfactoriamente</center></strong></p><BR></td></tr></table>";
   
       mysql_close ($enlace);
   ?>