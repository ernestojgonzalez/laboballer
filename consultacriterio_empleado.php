<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>CONSULTA-EMPLEADO</title>
</head>
<body>
                               <br><br>
<center>
<strong>CONSULTA POR CRITERIO</strong>
<br>
<br><br>
<p> ESTA CONSULTA PUEDE SER POR; </p>
<table width="173" height="99" border="1" bordercolor="CCCCCC">
<TR>
<td width="85"> <div align="center">Nombre</div></td>
<td width="72"> <div align="center">Cédula</div></td>
</TR>
<TR>
<td> <div align="center">Fecha de ingreso</div></td>
<td> <div align="center">Cargo</div></td>
</TR>
<TR>
<td> <div align="center">Sexoo</div></td>
<td> <div align="center">Horario</div></td>
</TR>
</table>

<form action="consultacriterio_empleado2.php" method="post" name="form1" id="form1">
  <table width="250" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
<tr>
  <td width="98"><strong>Criterio de Búsqueda</strong></td>
  <td width="136"><input type="text" size="20" name="criterio" id="criterio"></td>

</tr>
</table>
  <input name="submit" type="submit" value="Buscar">
</form>
</body>
</html>