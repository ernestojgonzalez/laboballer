<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>sistema </title>

<!-- se hace llamado al archivo del estilo -->

    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
<!--* uso de script necesarios por defecto*-->
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>





    <style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
    </style>
</head>
<body>


<?php
echo "<BR>";
	include "coneccionbasedatosmysql.inc";
	$enlace =conectarbase();
// $enlace se iguala a la funcion cenectarbase()
	$id_equipo=$_REQUEST['id_equipo'];  	
	//requiere o recibe la variable num_reg
if (!$enlace)
{
	echo "Falla en la Conexion con la base de datos";
	exit;
}
$resultado = mysql_query ("SELECT titulo, archivo FROM equipo  WHERE $id_equipo=id_equipo", $enlace);
 //$resultado = mysql_query ("SELECT codigo_equipo, titulo, archivo FROM equipo  WHERE match (codigo_equipo, titulo, archivo)('$codigo_equipo*' IN BOOLEAN MODE", $enlace);
if (!$resultado)
{
	echo "Ocurrio un Error con la Tabla\n";
	exit;
}

        echo "";
          
		  
			 $resultado = mysql_query ("UPDATE equipo SET titulo='', archivo='' WHERE $id_equipo=id_equipo", $enlace);

		 mysql_close();

   ?>
                 
   
<form method="post" name="form1" id="form1" enctype="multipart/form-data" action="modicar_foto_equipo1.php">
      
	  <p>&nbsp;</p>
         <p align="center" class="Estilo3"><strong>MODIFICAR ARCHIVO</strong></p>


<center>
<br><br>
<strong>ARCHIVO</strong>
<br>
<br>
<table width="772" bgcolor="#BDBDBD">
<tr>
  <td><strong>Título</strong></td>
  <td><input type="input" size="20" name="titulo" id="titulo"></td>
  
  

  <td><strong>Archivo</strong></td>
  <td><input type="file" size="20" name="archivo" id="archivo"></td>
</tr>
</table>

<br><br>


</table>



<input name="submit" type="submit" value="Guardar">
<input type="hidden" name="id_equipo" id="id_equipo" value="<?php 
$id_equipo=$_REQUEST['id_equipo'];
echo $id_equipo?>">
</center>
</form>							  


</body>
</html>