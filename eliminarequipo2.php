<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>ELIMINAR EQUIPO</title>
</head>
<body>
    <?php
    include "coneccionbasedatosmysql.inc";
    $codigo_equipo = $_POST['codigo_equipo'];
//declarando la variable $criterio
	$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()

   $consulta = "SELECT * from equipo where codigo_equipo = '$codigo_equipo';";
   // consulta a la tabla informe_personal	
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><table><tr><td><br><br><strong><center>El equipo $codigo_equipo no existe.</center></strong></td></tr></table></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $registro=$row[0];	   
                   ?>

<strong>ELIMINAR EQUIPO</strong>
<br>
<br><table width="400" border="8" bordercolor="#CCCCCC">
                       <tr><td><strong>Nombre del equipo:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
                      <tr><td><strong>Código del equipo:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
                      <tr><td><strong>Modelo:</strong></td><td><?php echo "  $row[2]" ?></td></tr>
                      <tr><td><strong>Marca:</strong></td><td><?php echo "$row[3]" ?></td></tr>
                      <tr><td><strong>Descripción:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
                      <tr><td><strong>Herramientas:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
					  <tr><td><strong>estado:</strong></td><td><?php echo "  $row[6]" ?></td></tr>
					  <tr><td><strong>Cantidad:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
                      <tr><td><strong>Fecha de ingreso del sistema:</strong></td><td><?php echo "  $row[8]" ?></td></tr>			                    <?php   $row[11] ?>
					   <?php
                   }
                   ?>
                   
                   </table>
				   
				   
<tr><td colspan="2"><strong><br><br>Presione el botón continuar si está seguro de eliminar el presente informe</strong></td></tr>
<br>
<br>
<!--* se llama al archivo eliminarinforme3.php*-->
<form action="eliminarequipo3.php" method="post" name="form1" id="form1">
<br>
<tr><td colspan="2"><center><br><input type="hidden" name="codigo_equipo" id="codigo_equipo" value="<?php echo $codigo_equipo ?>"><input name="submit" type="submit" value="Continuar"></center></td></tr>

</form>
</center>


<?php
                   
                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>

</body>
</html>