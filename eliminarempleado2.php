<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>ELIMINAR EMPLEADO</title>
</head>
<body>
<div align="center">
    <?php
    include "coneccionbasedatosmysql.inc";
    $cedula = $_POST['cedula'];
//declarando la variable $criterio
	$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()

   $consulta = "SELECT * from empleado where cedula = '$cedula';";
   	
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><table><tr><td><br><br><strong><center>El empleado $cedula no existe.</center></strong></td></tr></table></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $registro=$row[0];	   
                   ?>

<strong>ELIMINAR EMPLEADO</strong>
<br>
<br><table width="400" border="8" bordercolor="#CCCCCC">
        <tr><td><strong>Nombre del empleado:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
        <tr>
          <td><strong>Apellido </strong><strong>del empleado:</strong></td>
          <td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>Cédula    </strong><strong>del empleado:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr><td><strong>Sexo:</strong></td><td><?php echo "$row[6]" ?></td></tr>
        <tr><td><strong>Telefono:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>Direccion:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
        <tr><td><strong>Fecha de Ingreso:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
        <tr><td><strong>Horario de Trabajo:</strong></td><td><?php echo "  $row[8]" ?></td></tr>
        <tr><td><strong>Cargo:</strong></td><td><?php echo "  $row[3]" ?></td></tr>			  		                    
		
		   <?php
                   }
                   ?>
                   
                   </table>
				   
				   
<tr><td colspan="2"><strong><br><br>Presione el botón continuar si está seguro de eliminar el presente informe</strong></td></tr>
<br>
<br>
<!--* se llama al archivo eliminarinforme3.php*-->
<form action="eliminarempleado3.php" method="post" name="form1" id="form1">
<br>
<tr><td colspan="2"><center><br><input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula ?>"><input name="submit" type="submit" value="Continuar"></center></td></tr>

</form>
</center>


<?php
                   
                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>

</div>
</body>
</html>