<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>ELIMINAR EMPLEADO</title>
</head>
<body>

 <?php
  include "coneccionbasedatosmysql.inc";
    $cedula = $_POST['cedula'];
	//declarando la variable $registro
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
 $Eliminar = "DELETE FROM empleado WHERE cedula = '$cedula'";
 $resultado=basedatos($Eliminar);
 echo "<center><table><tr><td><BR><p><strong><center>El empleado fu� eliminado</center></strong></p><BR></td></tr></table></center>";
 mysql_close ($enlace);
 ?>
</body>
</html>