<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>SISTEMA </title>

</head>
<body>

<?php
$cedula=$_REQUEST['cedula'];
	//recibe variabla codigo_equipo
$titulo=$_POST['titulo'];
		//declarando la variable $titulo

$nro_fil = 0;

include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()

//tomo el valor de un elemento de tipo texto del formulario
 $nombre_archivo2 = $titulo.".jpeg";
//datos del arhivo
 $nombre_archivo = $_FILES['archivo']['name'];
 $tipo_archivo = $_FILES['archivo']['type'];
 $tamano_archivo = $_FILES['archivo']['size'];
//compruebo si las características del archivo son las que deseo
if (!((strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000000)))
{
   echo "<table align=center><tr><td>La extensión o el tamano de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten fotos con formato .jpg unicamente<br><li></td></tr></table>";
}
else 
{
	// funcion para copiar el archivo en el servidor
   if (move_uploaded_file($_FILES['archivo']['tmp_name'], "rutas/$nombre_archivo2"))
   {
      echo "<table  align=center><tr><td><BR><p><strong><center>El archivo ha sido Modificado correctamente</center></strong></p><BR></td></tr></table>";
      if($nro_fil == 0)
           {
             $ruta = "rutas/$nombre_archivo2"; 
			 // modifica la tabla cuando el nu de registro sea igual al num de registro recibido
             $Insertar= "UPDATE empleado SET titulo='$titulo', archivo='$ruta' WHERE $cedula=cedula";
             $resultadoins=basedatos($Insertar);
             echo "<table id='background-image'  align=center><tr><td><BR><p><strong><center>Informe almacenado</center></strong></p><BR></td></tr></table>";
           }
       mysql_close ($enlace);
   }else
    {
      echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
}
?>

</body>
</html>
