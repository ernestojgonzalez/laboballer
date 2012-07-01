<?php require_once('Connections/conexion.php'); ?>
<?php
mysql_select_db($database_conexion, $conexion);
$query_odt = "SELECT * FROM empleado";
$odt = mysql_query($query_odt, $conexion) or die(mysql_error());
$row_odt = mysql_fetch_assoc($odt);
$totalRows_odt = mysql_num_rows($odt);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 
<p align="center" class="Estilo3"><strong>ORDEN DE TRABAJO </strong></p>

<div align="center"><br>
    <br>
  
    <table  width="516" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="100"><div align="center"><strong>Tipo de trabajo </strong></div></td>
        <td width="144"><label>
          <div align="center">
            <label>
            <textarea name="textarea"></textarea>
            </label>
          </div>
        </label></td>
        <td width="100"><div align="center">
          <p><strong>Prioridad</strong></p>
        </div></td>
        <td width="144"><div align="center">
          <input name="codigo_equipo" type="text" id="codigo_equipo" />
        </div></td>
      </tr>
    </table>
    <br />
    <table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
      <tr>
        <td width="99"><div align="center"><strong>Prioridad</strong></div></td>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <td width="144"><div align="center">
            <label>
            <select name="select">
              <option>Seleccionar</option>
              <option value="urgente">Urgente</option>
              <option value="normal">Normal</option>
            </select>
            </label>
        </div></td>
        <!-- combo 1 municipio -->
        <td width="100"><div align="center"><strong>Fecha de inicio</strong></div></td>
        <td width="144"><div align="center">
            <input type="text" id="fecha1" name="fecha" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
            <input name="image" type="image" id="fecha" src="calendario/calendario.gif" />
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
        <td width="96"><div align="center"><strong>Fecha de final </strong></div></td>
        <td width="149"><div align="center">
            <input type="text" id="fecha2" name="fecha2" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
            <input name="image2" type="image" id="image" src="calendario/calendario.gif" />
            <input type="hidden" name="fechatemp12" id="fechatemp1" value="<?php echo $hoy?>" size="20" />
            <script type="text/javascript">

					</script>
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>DATOS DEL  EMPLEADO</p>
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td height="26"><div align="center">
          <label></label>
            <label>
            <select name="select2">
              <?php
do {  
?>
              <option value="<?php echo $row_odt['nombre']?>"<?php if (!(strcmp($row_odt['nombre'], $row_odt['nombre']))) {echo "selected=\"selected\"";} ?>><?php echo $row_odt['nombre'],'----',$row_odt['apellido'],'----',$row_odt['cedula'],'----',$row_odt['sexo'],'----',$row_odt['cargo'],'----',$row_odt['horario']?></option>
              <?php
} while ($row_odt = mysql_fetch_assoc($odt));
  $rows = mysql_num_rows($odt);
  if($rows > 0) {
      mysql_data_seek($odt, 0);
	  $row_odt = mysql_fetch_assoc($odt);
  }
?>
            </select>
            </label>
        </div>
          <div align="center">
            <label for="textarea"></label>
            <div align="center">
              <label></label>
</div>
          </div>
          <div align="center"></div>          <div align="center">
            <label></label>
                              </div></td>
      </tr>
    </table>
    <p><br>
    </p>
    <p>DATOS DEL EQUIPO </p>
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td height="26"><div align="center"><strong>Equipo </strong>
            <input name="marca" type="text" id="marca" />
          </div>          
          <div align="center">
            <label for="textarea"></label>
            <div align="center"></div>
        </div>          </td>
      </tr>
    </table>
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td height="26"><div align="center"><strong>Descripci&oacute;n del equipo</strong></div>
            <div align="center">
              <label for="textarea"></label>
              <div align="center"></div>
            </div></td>
      </tr>
    </table>
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="99"><div align="center"><strong>Partes </strong></div></td>
        <td width="237"><div align="center">
            <input name="marca3" type="text" id="marca3" />
        </div></td>
        <td width="75"><div align="center"></div>          <div align="center">
            <label for="textarea"></label>
            <div align="center"></div>
          </div></td>
        <td width="177"><div align="center"><strong>Piezas</strong></div></td>
        <td width="150"><div align="center">
            <input name="herramienta4" type="text" id="herramienta4" />
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
<?php
mysql_free_result($odt);
?>