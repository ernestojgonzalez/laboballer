<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>LABOBALLER</title>

<?php
// declaracion de variables
$nombre_equipo=$_POST['nombre_equipo'];
$codigo_equipo=$_POST['codigo_equipo'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$descripcion=$_POST['descripcion'];
$herramienta=$_POST['herramienta'];
$fecha=$_POST['fecha'];
$estado=$_POST['estado'];
$cantidad=$_POST['cantidad'];
$id_equipo=$_POST['id_equipo'];

$nro_fil = 0;


include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();


//tomo el valor de un elemento de tipo texto del formulario

//datos del arhivo

//compruebo si las características del archivo son las que deseo

 //COLOCA CONTENIDO EN MAYUSCULA


$nombre_equipo=strtoupper($nombre_equipo);
$codigo_equipo=strtoupper($codigo_equipo);
$modelo=strtoupper($modelo);

$marca=strtoupper($marca);
$descripcion=strtoupper($descripcion);
$herramienta=strtoupper($herramienta);
$estado=strtoupper($estado);
            
			$Insertar= "UPDATE equipo SET  nombre_equipo='$nombre_equipo',codigo_equipo='$codigo_equipo',modelo='$modelo',marca='$marca',descripcion='$descripcion',herramienta='$herramienta',fecha='$fecha',estado='$estado',cantidad='$cantidad' WHERE id_equipo = '$id_equipo' ";
			
			 		 
			 
             $resultadoins=basedatos($Insertar);
             echo "<table align=center id='background-image'><tr><td><BR><p><strong><center>Los Datos fueron modificados exitosamente</center></strong></p><BR></td></tr></table>";

       mysql_close ($enlace);
   

?>
                    
</body>
</html>