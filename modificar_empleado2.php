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


    <div align="center">
      <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  $consulta="SELECT * FROM empleado where match (cedula,nombre,apellido,sexo,telefono,direccion,fecha,horario,cargo) against ('$criterio*' IN BOOLEAN MODE) ";
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><table><tr><td><br><br><strong><center>El informe $criterio no existe.</center></strong></td></tr></table></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $cedula=$row[0];
                   $nombre=$row[1];
                   $apellido=$row[2];
                   $cargo=$row[3];
                   $telefono=$row[4];
                   $direccion=$row[5];
                   $sexo=$row[6];
                   $fecha=$row[7];
				   $horario=$row[8];
                   $titulo=$row[10];
          

				   $link2=$row[9];
                   ?>
     
      <table width="400" border="8" bordercolor="#CCCCCC">
        <tr><td><strong>Nombre del empleado:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
        <tr><td><strong>Apellido </strong><strong>del empleado :</strong></td><td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>Cédula    </strong><strong>del empleado:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr><td><strong>Sexo:</strong></td><td><?php echo "$row[6]" ?></td></tr>
        <tr><td><strong>Telefono:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>Direccion:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
        <tr><td><strong>Fecha de Ingreso:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
        <tr><td><strong>Horario de Trabajo:</strong></td><td><?php echo "  $row[8]" ?></td></tr>
        <tr><td><strong>Cargo:</strong></td><td><?php echo "  $row[3]" ?></td></tr>			  
        <tr><td><strong>Foto del Empleado:</strong></td><td><?php echo "<a href='$link2'>$row[9]</a>" ?></td></tr><br />
        
        <?php
                   }
                   ?>
        
 <form action="modificar_empleado.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return validar2()"  >
  
        
  <p align="center" class="Estilo3"><strong>MODIFICAR EMPLEADO</strong></p>
     <br>    
        <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
          <tr>
            <td width="100"><div align="center"><strong>Nombre del Empleado </strong></div></td>
          <td width="144"><label>
            <div align="center">
              <input name="nombre" type="text" id="nombre"  value="<?php echo $nombre?>" />
            </div>
          </label></td>
          <td width="100"><div align="center">
            <p><strong>Apellido del Empleado </strong></p>
          </div></td>
          <td width="144"><div align="center">
            <input name="apellido" type="text" id="apellido"  value="<?php echo $apellido ?>" />
            </div></td>
          <td width="94"><div align="center">
            <p><strong>Cedula</strong> </p>
            </div></td>
          <td width="150"><div align="center">
            <input name="cedula" type="text" id="cedula"  value="<?php echo $cedula ?>" />
            </div></td>
        </tr>
        </table>
    <br>
        <br>
        
        <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
          <tr>
            <td width="99"><div align="center"><strong>Sexo</strong></div></td>
          <td width="144"><div align="center">
            <select name="sexo" id="sexo">
		      <option selected><?php echo $sexo ?></option>
		      <option value="masculino">Masculino</option>
		      <option value="femenino">femenino</option>
	        </select>
			            </div></td>
          <td width="102"><div align="center"><strong>Telefono</strong></div></td>
          <td width="145"><div align="center">
            <label for="textarea"></label>
             <input name="telefono" type="text" id="telefono"  value="<?php echo $telefono ?>"/>
			
            
            </div></td> 
          <td width="92"><div align="center"><strong>Direccion </strong></div></td>
          <td width="150"><div align="center">
            <textarea rows="2" cols="20" name="direccion" id="direccion"><?php echo $direccion ?></textarea>
            </div></td> 
        </tr>
        </table>
    <br>
        <br>
        <table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
          <tr>
            <td width="99"><div align="center"><strong>Fecha de ingreso</strong></div></td>
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
            <td width="100"><div align="center"><strong>Horario de Trabajo</strong></div></td>
          <td width="144"><div align="center">
            <select name="horario" id="horario">
            <option selected><?php echo $horario ?></option>
            <option value="diurno">Diurno</option>
            <option value="nocturno">Nocturno</option>
          </select>
            </div></td>
          <td width="96"><div align="center"><strong>Cargo </strong></div></td>
          <td width="149"><div align="center">
  <input name="cargo" type="text" id="cargo" value="<?php echo $cargo ?>" />             
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
      <p>&nbsp;</p>
      <p><br>
        <br>
        <strong>FOTO DEL EQUIPO</strong>
        <br>
        <br>
        <strong><a href="modificar_foto_empleado.php?id_equipo=<?php echo $id_equipo?>">Si desea Modificar la Foto pulse aqui</a></strong>
        <br>
        <br>
        
        
        <input type="hidden" name="id_equipo" id="id_equipo" value="<?php echo $id_equipo ?>"> 
        
        </p>
</div>
<tr><td colspan="2"><div align="center"><strong><br>
      <br>
Presione el botón continuar para guardar los cambios</strong></div></td></tr>
    <div align="center"><br>
      <br>
      
      <br>
    </div>
<tr><td colspan="2"><div align="center"><br>
      <input name="submit" type="submit" value="Continuar">
</div></td></tr>
    <div align="center">
      </div>
      S
      </form>
      </center>
      </table>

      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>


    </div>
</body>
</html>