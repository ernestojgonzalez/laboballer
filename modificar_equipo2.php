<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>Sistema </title>
<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script> 

</head>
<body>


    <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
   $consulta = "SELECT * from equipo where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><table><tr><td><br><br><strong><center>El informe $criterio no existe.</center></strong></td></tr></table></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $codigo_equipo=$row[0];
                   $nombre_equipo=$row[1];
                   $modelo=$row[2];
                   $marca=$row[3];
                   $descripcion=$row[4];
                   $herramienta=$row[5];
                   $estado=$row[6];
                   $cantidad=$row[7];
				   $fecha=$row[8];
                   $titulo=$row[10];
				   $id_equipo=$row[11];           

				   $link2=$row[9];
                   ?>

<strong>MODIFICAR INFORME</strong>
<br>
<br>
                      <table width="400" border="8" bordercolor="#CCCCCC">
                      <tr><td><strong>Nombre del equipo:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
                      <tr><td><strong>Código del equipo:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
                      <tr><td><strong>Modelo:</strong></td><td><?php echo "  $row[2]" ?></td></tr>
                      <tr><td><strong>Marca:</strong></td><td><?php echo "$row[3]" ?></td></tr>
                      <tr><td><strong>Descripción:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
                      <tr><td><strong>Herramientas:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
					  <tr><td><strong>estado:</strong></td><td><?php echo "  $row[6]" ?></td></tr>
					  <tr><td><strong>Cantidad:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
                      <tr><td><strong>Fecha de ingreso del sistema:</strong></td><td><?php echo "  $row[8]" ?></td></tr>			  
                      <tr><td><strong>Foto del Equipo:</strong></td><td><?php echo "<a href='$link2'>$row[9]</a>" ?></td></tr>

                   <?php
                   }
                   ?>

<form action="modificar_equipo.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return validar2()"  >

<br>   
 
<p align="center" class="Estilo3"><strong>MODIFICAR EQUIPO</strong></p>

<div align="center"><br>
    <br>
  
    <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="100"><div align="center"><strong>Nombre del equipo </strong></div></td>
        <td width="144"><label>
          <div align="center">
            <input name="nombre_equipo" type="text" id="nombre_equipo"  value="<?php echo $nombre_equipo ?>" />
          </div>
        </label></td>
        <td width="100"><div align="center">
          <p><strong>Código del equipo </strong></p>
        </div></td>
        <td width="144"><div align="center">
          <input name="codigo_equipo" type="text" id="codigo_equipo"  value="<?php echo $codigo_equipo ?>" />
        </div></td>
        <td width="94"><div align="center">
          <p><strong>Modelo</strong> </p>
          </div></td>
        <td width="150"><div align="center">
          <input name="modelo" type="text" id="modelo"  value="<?php echo $modelo ?>" />
        </div></td>
      </tr>
    </table>
  <br>
  <br>
  
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="99"><div align="center"><strong>Marca</strong></div></td>
        <td width="144"><div align="center">
          <input name="marca" type="text" id="marca"  value="<?php echo $marca ?>" />
        </div></td>
        <td width="102"><div align="center"><strong>Descripción</strong></div></td>
        <td width="145"><div align="center">
          <label for="textarea"></label>
          <textarea rows="2" cols="20" name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>

        </div></td> 
        <td width="92"><div align="center"><strong>Herramientas </strong></div></td>
        <td width="150"><div align="center">
          <input name="herramienta" type="text" id="herramienta"  value="<?php echo $herramienta ?>"/>
        </div></td> 
      </tr>
    </table>
  <br>
  <br>
  <table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
      <tr>
        <td width="99"><div align="center"><strong>Fecha de ingreso del sistema </strong></div></td>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <td width="144"><div align="center">
          <input type="text" id="fecha1" name="fecha" size="10" value="<?php echo $fecha?>" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
          <input type="image" src="calendario/calendario.gif" id="fecha" />
          <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
          <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fecha1", //nombre del id de del campo
      								ifFormat    : "%Y-%m-%d",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
        </div></td>
        <!-- combo 1 municipio -->
        <td width="100"><div align="center"><strong>Cantidad </strong></div></td>
        <td width="144"><div align="center">
          <input name="cantidad" type="text" id="cantidad" size="5"  value="<?php echo $cantidad ?>" />
        </div></td>
        <td width="96"><div align="center"><strong>Estato del equipo </strong></div></td>
        <td width="149"><div align="center">
          <select name="estado" id="estado" >
		   <option selected><?php echo $estado ?></option>
            <option value="Bueno">Bueno</option>
            <option value="Regular">Regular</option>
            <option value="Malo">Malo</option>
          </select>
        </div></td>
      </tr>
    </table>
  <br>
  <br>
    <strong> </strong>
    <br>
    <br>
  
  <br>
  <br>
  
  
 
  
  
  
  
    </table>
 
<br><br>
<strong>FOTO DEL EQUIPO</strong>
<br>
<br>
<strong><a href="modificar_foto_equipo.php?id_equipo=<?php echo $id_equipo?>">Si desea Modificar la Foto pulse aqui</a></strong>
<br><br>

  
 <input type="hidden" name="id_equipo" id="id_equipo" value="<?php echo $id_equipo ?>"> 

<tr><td colspan="2"><strong><br><br>Presione el botón continuar para guardar los cambios</strong></td></tr>
<br>
<br>

<br>
<tr><td colspan="2"><center><br><input name="submit" type="submit" value="Continuar"></center></td></tr>

</form>
</center>
</table>

<?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>


</body>
</html>