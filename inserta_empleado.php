<?php
// declaracion de variables


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$sexo=$_POST['sexo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$titulo=$_POST['titulo'];
$fecha=$_POST['fecha'];
$horario=$_POST['horario'];
$cargo=$_POST['cargo'];
$titulo=$nombre.$cedula;
$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()


//tomo el valor de un elemento de tipo texto del formulario "$num_reg"
 $nombre_archivo2 = $nombre.$cedula.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<table align=center><tr><td>La extensión no es correcta. <br><br><table><tr><td><li>Se permiten archivos .pdf unicamente</table>";
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


$nombre=strtoupper($nombre);
$apellido=strtoupper($apellido);
$sexo=strtoupper($sexo);
$titulo=strtoupper($titulo);
$direccion=strtoupper($direccion);
$cargo=strtoupper($cargo);
$horario=strtoupper($horario);


// funcion para insertar los ddatos en la tabla informe_personal
             $Insertar= "INSERT INTO empleado VALUES('$cedula','$nombre','$apellido','$cargo','$telefono','$direccion','$sexo','$fecha','$horario','$ruta','$titulo')";
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