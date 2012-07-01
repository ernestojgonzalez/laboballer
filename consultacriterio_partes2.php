<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>CONSULTA-EQUIPO</title>
</head>
<body>

<?php

	include "coneccionbasedatosmysql.inc";
    $nombre_equipo = $_POST['nombre_equipo'];
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
	//$consulta="SELECT * FROM equipo where match (nombre_equipo,codigo_equipo,fecha,estado) against ('$criterio*' IN BOOLEAN MODE) order by fecha LIMIT $desde, $hasta";
	
	//$consulta="SELECT * FROM partepieza where match (id_parte_pieza, nombre_equipo,piezas,codigo_parte,nombre_parte,cantidad_parte) against ('$criterio*' IN BOOLEAN MODE) order by id_parte_pieza LIMIT $desde, $hasta";
	
	 $consulta = "SELECT * from partepieza where nombre_equipo = '$nombre_equipo';";
	 
	$resultado=mysql_query($consulta,$enlace);


?>

<center>
<CAPTION><strong>CONSULTA POR CRITERIO</strong></CAPTION>
<p>&nbsp;</p>
<table width="850"  border="1" class="tabla1"/>

   <TR bgcolor="#E4E4E7">

	<TH>Equipo</TH>
	<TH>Parte de la pieza</TH>
	<TH>Código de la pieza</TH>
	<TH>Cantidad</TH>
	<TH>Piezas</TH>
  </tr>
	<?PHP
		$i=0;
		while ($row = mysql_fetch_row($resultado))
    {

       echo "<td>$row[1]</td>";
       	echo "<td>$row[3]</td>";
       	echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[2]</td>";


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


