<?php require_once('Connections/conexion.php'); ?>
<?php
mysql_select_db($database_conexion, $conexion);
$query_nueva = "SELECT equipo.nombre_equipo FROM equipo";
$nueva = mysql_query($query_nueva, $conexion) or die(mysql_error());
$row_nueva = mysql_fetch_assoc($nueva);
$totalRows_nueva = mysql_num_rows($nueva);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INSERTA PIEZAS Y PARTES</title>

<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script>  
<script>function mostrarOcultar(obj) {
    document.getElementById('nombre_parte').style.visibility = (obj.checked) ? 'visible' : 'hidden';
	document.getElementById('codigo_parte').style.visibility = (obj.checked) ? 'visible' : 'hidden';
	document.getElementById('cantidad_parte').style.visibility = (obj.checked) ? 'visible' : 'hidden';
	document.getElementById('piezas').style.visibility = (obj.checked) ? 'visible' : 'hidden';
 
   document.getElementById('et').style.visibility = (obj.checked) ? 'visible' : 'hidden';
   document.getElementById('ot').style.visibility = (obj.checked) ? 'visible' : 'hidden';
}

</script>

</head>
<body onload="document.getElementById('et').style.visibility = 'hidden';document.getElementById('ot').style.visibility = 'hidden'; document.getElementById('nombre_parte').style.visibility = 'hidden'; document.getElementById('codigo_parte').style.visibility = 'hidden';document.getElementById('cantidad_parte').style.visibility = 'hidden';document.getElementById('piezas').style.visibility = 'hidden'; ">

 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="inserta_parte_pieza.php" onSubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3"><strong>REGISTRO</strong></p>
<div align="center">
  <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
    <tr>
      <td width="100" height="64">&nbsp;</td>
      <td width="144"></td>
      <td><div align="center">
           
              <strong>Equipo</strong>
                  <select name="nombre_equipo" id="nombre_equipo">
                    <option selected="selected">------Seleccionar-----</option>
					<option se value="" <?php if (!(strcmp("", $row_nueva['nombre_equipo']))) {echo "selected=\"selected\"";} ?>>
                    
					<?php
do {  
?>
                    <option value="<?php echo $row_nueva['nombre_equipo']?>"<?php if (!(strcmp($row_nueva['nombre_equipo'], $row_nueva['nombre_equipo']))) {echo "selected=\"selected\"";} ?>><?php echo $row_nueva['nombre_equipo']?></option>
                    <?php
} while ($row_nueva = mysql_fetch_assoc($nueva));
  $rows = mysql_num_rows($nueva);
  if($rows > 0) {	
      mysql_data_seek($nueva, 0);
	  $row_nueva = mysql_fetch_assoc($nueva);
  }
?>
            </select>
                 </p>
      </div></td>
      <td width="94">&nbsp;</td>
      <td width="150">&nbsp;</td>
    </tr>
  </table>
 
  <p>PARTES DEL EQUIPO</p>
  <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
    <tr>
      <td colspan="2"><div align="center">PARTES DEL EQUIPO</div>
          <label></label></td>
      <td width="95" bgcolor="#BDBDBD"><div align="center"></div>
        <div align="center"></div></td>
		  <td width="395" bgcolor="#BDBDBD"><div align="center">PIEZAS QUE CONTIENEN LAS PARTES DEL EQUIPO</div></td>
    </tr>
    <tr>
      <td width="110"><div align="center"><strong>Nombre</strong></div></td>
      <td width="144"><label> </label>
          <div align="center">
            <input name="nombre_parte[]" type="text" id="nombre_parte" />
        </div></td>
      <td width="95"><div align="center">
          <p>&nbsp;</p>
      </div></td>
      <td width="395" bgcolor="#BDBDBD">&nbsp;</td>
    </tr>
  <td width="110"><div align="center"><strong>Código</strong></div></td>
      <td width="144"><label> </label>
          <div align="center">
            <input name="codigo_parte[]" type="text" id="codigo_parte" />
        </div></td>
    <td width="95" bgcolor="#BDBDBD"><div align="center">
          <p>&nbsp;</p>
    </div></td>
    <td><div align="center"><strong>Nombre</strong> </div>
        <div align="center">
            <p>
              <label>
              <textarea name="piezas[]" cols="40" id="piezas"></textarea>
              </label>
            </p>
        </div>
      <div align="center"></div></td>
  </tr>
    <tr>
      <td width="100"><div align="center"><strong>Cantidad</strong></div></td>
      <td width="156"><label>
          <div align="center">
            <input name="cantidad_parte[]" type="text" id="cantidad_parte" />
          </div>
        </label></td>
      <td width="88"><div align="center">
          <p>&nbsp;</p>
      </div></td>
      <td width="400" bgcolor="#BDBDBD"><div align="center"></div></td>
      </tr>
  </table>
  <p>
    </table>
	
	
	
	<input name="comod" type="checkbox" id="comod" onclick="mostrarOcultar(this)"/>
	
	
	
	
	  <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF" id="et">
    <tr>
      <td colspan="2"><div align="center">PARTES DEL EQUIPO</div>
          <label></label></td>
      <td width="95" bgcolor="#BDBDBD"><div align="center"></div>
        <div align="center"></div></td>
		  <td width="395" bgcolor="#BDBDBD"><div align="center">PIEZAS QUE CONTIENEN LAS PARTES DEL EQUIPO</div></td>
    </tr>
    <tr>
      <td width="110"><div align="center"><strong>Nombre</strong></div></td>
      <td width="144"><label> </label>
          <div align="center">
            <input name="nombre_parte[]" type="text" id="nombre_parte" />
        </div></td>
      <td width="95"><div align="center">
          <p>&nbsp;</p>
      </div></td>
      <td width="395" bgcolor="#BDBDBD">&nbsp;</td>
    </tr>
  <td width="110"><div align="center"><strong>Código</strong></div></td>
      <td width="144"><label> </label>
          <div align="center">
            <input name="codigo_parte[]" type="text" id="codigo_parte" />
        </div></td>
    <td width="95" bgcolor="#BDBDBD"><div align="center">
          <p>&nbsp;</p>
    </div></td>
    <td><div align="center"><strong>Nombre</strong> </div>
        <div align="center">
            <p>
              <label>
              <textarea name="piezas[]" cols="40" id="piezas"></textarea>
              </label>
            </p>
        </div>
      <div align="center"></div></td>
  </tr>
    <tr>
      <td width="100"><div align="center"><strong>Cantidad</strong></div></td>
      <td width="156"><label>
          <div align="center">
            <input name="cantidad_parte[]" type="text" id="cantidad_parte" />
          </div>
        </label></td>
      <td width="88"><div align="center">
          <p>&nbsp;</p>
      </div></td>
      <td width="400" bgcolor="#BDBDBD"><div align="center"></div></td>
      </tr>
  </table>
  <p>
    </table>
	
	
	
	
	
	
    <input name="id_parte_pieza" type="hidden" value="id_parte_pieza" />
    <input name="submit" type="submit" value="Guardar">
</p>
  </div>
 </form>

</body>
</html>
<?php
mysql_free_result($nueva);
?>