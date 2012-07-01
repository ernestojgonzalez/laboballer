<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>CONSULTA-EMPLEADO</title>
</head>
<body>

<?php

	include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()


	if(!isset($_GET['pag']))
//paginacion
	{

	$pag=1;

	}else

	{

		$pag=$_GET['pag'];

	}

	$hasta=10000000;
	$desde=($hasta*$pag)-$hasta;
// consulta a la tabla informe_personal	
	$consulta="SELECT * FROM empleado where match (cedula,nombre,apellido,cargo,sexo,fecha,horario) against ('$criterio*' IN BOOLEAN MODE) order by fecha LIMIT $desde, $hasta";
	$resultado=mysql_query($consulta,$enlace);


?>

<center>
<CAPTION><strong>CONSULTA POR CRITERIO</strong></CAPTION>
<p>&nbsp;</p>
<table width="850"  border="1" class="tabla1"/>

   <TR bgcolor="#E4E4E7">

	<TH>Nombre</TH>
	<TH>Apellido</TH>
	<TH>Cédula</TH>
	<TH>Sexo</TH>    
	<TH>Telefono</TH
	><TH>Direccion</TH>
	<TH>Fecha</TH>
	<TH>Horario</TH>
	<TH>Cargo</TH>
    <TH>Foto</TH>
  </tr>
	<?PHP
		$i=0;
		while ($row = mysql_fetch_row($resultado))
    {
       $link2 =$row[9];
        
		echo "<td>$row[1]</td>";
       	echo "<td>$row[2]</td>";
       	echo "<td>$row[0]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
       	echo "<td>$row[7]</td>";
       	echo "<td>$row[8]</td>";
		echo "<td>$row[3]</td>";
		echo "<td><a target=_blank href='$link2'>$row[9]</a></td>";

	   $i=$i+1;

       if (($i%1)==0)

       {

       echo "<tr></tr>";

       }

    }

		mysql_free_result($resultado);

	 ?>
  </table>
</body>
</html>