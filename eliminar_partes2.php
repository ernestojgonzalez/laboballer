<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>ELIMINAR-PARTES</title>
</head>
<body>
<div align="center">
    <?php
    include "coneccionbasedatosmysql.inc";
    $codigo_parte = $_POST['codigo_parte'];
//declarando la variable $criterio
	$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()

   $consulta = "SELECT * from partepieza where codigo_parte = '$codigo_parte';";
   	
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><table><tr><td><br><br><strong><center>La parte del equipo $codigo_parte no existe.</center></strong></td></tr></table></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $registro=$row[0];	   
                   ?>

<strong>ELIMINAR PARTES DEL EQUIPO</strong>
<br>
<br><table width="465" border="8" bordercolor="#CCCCCC">
        <tr><td width="219"><strong>Nombre del equipo</strong></td><td width="216"><?php echo "  $row[1]" ?></td></tr>  
		<tr><td colspan="2"><div align="center"><strong>Partes del equipo</strong></div></td></tr>              
        <tr><td><strong>Codigo</strong></td><td><?php echo "$row[3]" ?></td></tr>
        <tr><td><strong>Nombre</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr>
          <td><strong>Cantidad</strong></td>
          <td><?php echo "  $row[5]" ?></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><strong>Piezas</strong></div></td>
        </tr>  	
		<tr>
	    <td><strong>Descripci&oacute;n</strong></td><td><?php echo "  $row[2]" ?></td></tr>  	                    
		
		   <?php
                   }
                   ?>
                   
                   </table>
				   
				   
<tr><td colspan="2"><strong><br><br>Presione el botón continuar si está seguro de eliminar las partes del equipo</strong></td></tr>
<br>
<br>
<!--* se llama al archivo eliminarinforme3.php*-->
<form action="eliminar_parte3.php" method="post" name="form1" id="form1">
<br>
<tr><td colspan="2"><center><br><input type="hidden" name="codigo_parte" id="codigo_parte" value="<?php echo $codigo_parte ?>"><input name="submit" type="submit" value="Continuar"></center></td></tr>

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