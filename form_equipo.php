<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FORMULARIO EQUIPO</title>

<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script>  


</head>

 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="inserta_equipo.php" onSubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3"><strong>REGISTRO DE EQUIPO</strong></p>

<div align="center"><br>
    <br>
  
    <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="100"><div align="center"><strong>Nombre del equipo </strong></div></td>
        <td width="144"><label>
          <div align="center">
            <input name="nombre_equipo" type="text" id="nombre_equipo" />
          </div>
        </label></td>
        <td width="100"><div align="center">
          <p><strong>Código del equipo </strong></p>
        </div></td>
        <td width="144"><div align="center">
          <input name="codigo_equipo" type="text" id="codigo_equipo" />
        </div></td>
        <td width="94"><div align="center">
          <p><strong>Modelo</strong> </p>
          </div></td>
        <td width="150"><div align="center">
          <input name="modelo" type="text" id="modelo" />
        </div></td>
      </tr>
    </table>
  <br>
  <input name="nombre_equipo2" type="text" id="nombre_equipo2" />
  <br>
  
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="99"><div align="center"><strong>Marca</strong></div></td>
        <td width="144"><div align="center">
          <input name="marca" type="text" id="marca" />
        </div></td>
        <td width="102"><div align="center"><strong>Descripción</strong></div></td>
        <td width="145"><div align="center">
          <label for="textarea"></label>
          <textarea name="descripcion" id="descripcion"></textarea>
        </div></td>
        <td width="92"><div align="center"><strong>Herramientas </strong></div></td>
        <td width="150"><div align="center">
          <input name="herramienta" type="text" id="herramienta" />
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
          <input type="text" id="fecha1" name="fecha" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
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
          <input name="cantidad" type="text" id="cantidad" size="5" />
        </div></td>
        <td width="96"><div align="center"><strong>Estato del equipo </strong></div></td>
        <td width="149"><div align="center">
          <select name="estado" id="estado">
            <option selected="selected">Seleccionar</option>
            <option value="Bueno">Bueno</option>
            <option value="Regular">Regular</option>
            <option value="Malo">Malo</option>
          </select>
        </div></td>
      </tr>
    </table>
  <br>
  <br>
    <strong>FOTO DEL EQUIPO </strong>
    <br>
    <br>
   <table width="772" bgcolor="#BDBDBD">
<tr>
  <td><div align="center">
    <input type="hidden" id="titulo" name="titulo" >
	<input type="hidden" id="id_equipo" name="id_equipo" >    
    <strong>Ruta</strong>    
    <input type="file" size="20" name="archivo" id="archivo">
  </div></td>
  </tr>
</table>
  <br>
  <br>
  
  
  
  
  
  
  
  
  
    </table>

    <input name="submit" type="submit" value="Guardar">
</div>
 </form>

</body>
</html>
