<?php
// declaracion de variables

$id_equipo=$_POST['id_equipo'];
$nombre_equipo=$_POST['nombre_equipo'];
$codigo_equipo=$_POST['codigo_equipo'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$descripcion=$_POST['descripcion'];
$herramienta=$_POST['herramienta'];
$fecha=$_POST['fecha'];
$estado=$_POST['estado'];
$cantidad=$_POST['cantidad'];
$titulo=$nombre_equipo.$codigo_equipo;
$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()


//tomo el valor de un elemento de tipo texto del formulario "$num_reg"
 $nombre_archivo2 = $nombre_equipo.$codigo_equipo.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<table align=center><tr><td>La extensión no es correcta. <br><br><table><tr><td><li>Se permiten fotos con formato .jpg unicamente</table>";
}
else
{
// funcion para almacenar el archivo en el servidor
   if (move_uploaded_file($_FILES['archivo']['tmp_name'], "rutas/$nombre_archivo2"))
   {
      echo "<table  align=center><tr><td><BR><p><strong><center>Datos Correctos</center></strong></p><BR></td></tr></table>";
      if($nro_fil == 0)
           {
             $ruta = "rutas/$nombre_archivo2";
			 
			 
			 //COLOCA CONTENIDO EN MAYUSCULA

$fecha=strtoupper($fecha);
$nombre_equipo=strtoupper($nombre_equipo);
$codigo_equipo=strtoupper($codigo_equipo);
$modelo=strtoupper($modelo);
$titulo=strtoupper($titulo);
$marca=strtoupper($marca);
$descripcion=strtoupper($descripcion);
$herramienta=strtoupper($herramienta);
$estado=strtoupper($estado);



// funcion para insertar los ddatos en la tabla informe
             $Insertar= "INSERT INTO equipo VALUES('$codigo_equipo','$nombre_equipo','$modelo','$marca','$descripcion','$herramienta','$estado','$cantidad','$fecha','$ruta','$titulo',NULL)";
             $resultadoins=basedatos($Insertar);
             echo "<table  align=center id='background-image'><tr><td><BR><p><strong><center>La Información fue registrada satisfactoriamente</center></strong></p><BR></td></tr></table>";
           }
       mysql_close ($enlace);
   }else
    {
      echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}
?>