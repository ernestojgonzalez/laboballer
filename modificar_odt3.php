<?php require_once('Connections/conexion.php'); ?>
<?php
mysql_select_db($database_conexion, $conexion);
$query_odt = "SELECT * FROM empleado";
$odt = mysql_query($query_odt, $conexion) or die(mysql_error());
$row_odt = mysql_fetch_assoc($odt);
$totalRows_odt = mysql_num_rows($odt);

mysql_select_db($database_conexion, $conexion);
$query_odt2 = "SELECT * FROM equipo";
$odt2 = mysql_query($query_odt2, $conexion) or die(mysql_error());
$row_odt2 = mysql_fetch_assoc($odt2);
$totalRows_odt2 = mysql_num_rows($odt2);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ne-us" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FORMULARIO EQUIPO</title>
<!-- plantilla  -->
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- fin plantilla  -->

<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="jquery.js"></script>

</head>
<body>
 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="modificar_odt4.php" onSubmit="return validar()">
<!--INICIO DE LA PLANTILLA -->
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
    <div class="art-header">
        <div class="art-header-clip">
        <div class="art-header-center">
            <div class="art-header-png"></div>
            <div class="art-header-jpeg"></div>
        </div>
        </div>
    <div class="art-header-wrapper">
    <div class="art-header-inner">
        <div class="art-textblock"> </div>
        <div class="art-headerobject"></div>
        <script type="text/javascript" src="swfobject.js"></script>
        <div id="art-flash-area">
        <div id="art-flash-container">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="788" height="150" id="art-flash-object">
        	<param name="movie" value="container.swf" />
        	<param name="quality" value="high" />
        	<param name="scale" value="default" />
        	<param name="wmode" value="transparent" />
        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=20&amp;clipx=0&amp;clipy=-36&amp;initalclipw=900&amp;initalcliph=255&amp;clipw=788&amp;cliph=223&amp;width=788&amp;height=150&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true" />
            <param name="swfliveconnect" value="true" />
        	<!--[if !IE]>-->
        	<object type="application/x-shockwave-flash" data="container.swf" width="788" height="150">
        	    <param name="quality" value="high" />
        	    <param name="scale" value="default" />
        	    <param name="wmode" value="transparent" />
            	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=20&amp;clipx=0&amp;clipy=-36&amp;initalclipw=900&amp;initalcliph=255&amp;clipw=788&amp;cliph=223&amp;width=788&amp;height=150&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true" />
                <param name="swfliveconnect" value="true" />
        	<!--<![endif]-->
        		<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
        	<!--[if !IE]>-->
        	</object>
        	<!--<![endif]-->
        </object>
        </div>
        </div>
        <script type="text/javascript">    swfobject.switchOffAutoHideShow(); swfobject.registerObject("art-flash-object", "9.0.0", "expressInstall.swf");</script>
        <div class="art-logo">
                 <h1 class="art-logo-name"><a href="./index.php">LABOBALLER  </a></h1>
                         <h2 class="art-logo-text"> BARRY WEHMILLER  Lavadora de botellas</h2>
                </div>
    </div>
    </div>
    </div>
    <div class="cleared reset-box"></div>
    <div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
<div class="art-nav">
	<div class="art-nav-l"></div>
	<div class="art-nav-r"></div>
<?php include "menu.php" ?>
<p>&nbsp;</p>
 <?php
    include "coneccionbasedatosmysql.inc";
    $id_odt = $_REQUEST['id_odt'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  $consulta="SELECT * FROM odt where id_odt='$id_odt'";
  
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El empleado $criterio <br> no existe en nuestra base de datos.</center></strong></center>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                    $id_odt=$row[0];
                    $fallos=$row[1];
                   $fecha_ini=$row[2];
                   $fecha_fin=$row[3];
                   $prioridad=$row[4];
				   $estatus=$row[5];
                   $datos_empleado=$row[6];
				   $datos_equipo=$row[7];

                   ?>
     <center>
    <table width="400" border="8" bordercolor="#CCCCCC">
                      <tr><td><strong>Estatus:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
					  <tr><td><strong>Datos del empleado:</strong></td><td><?php echo "  $row[6]" ?></td></tr>
                      <tr><td><strong>Datos del equipo:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
                      <tr><td><strong>Fallas:</strong></td><td><?php echo "$row[1]" ?></td></tr>
                      <tr><td><strong>Prioridad:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
                      <tr><td><strong>Fecha inicial:</strong></td><td><?php echo "  $row[2]" ?></td></tr>
					  <tr><td><strong>Fecha Final:</strong></td><td><?php echo "  $row[3]" ?></td></tr>
					 <p></p><p></p>
					 
                   <?php
                   }
                   ?>


</table>

    <p></p>
      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>
<h2 class="art-postheader" align="center">LABOBALLER</h2>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->
<br>   
 
<p align="center" class="Estilo3"><strong>ORDEN DE TRABAJO </strong><br>
   </p>

<div align="center">
  <table  width="632" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="124"><div align="center"><strong>Fallos que presenta el equipo </strong></div></td>
        <td width="172"><label>
          <div align="center">
            <label>
            <textarea rows="2" cols="20" name="fallos" id="fallos"><?php echo $fallos ?></textarea>
			</label>
          </div>
        </label></td>
        <td width="120"><div align="center">
          <p><strong>Prioridad</strong></p>
        </div></td>
        <td width="170"><div align="center">
           <label>
           <select name="prioridad" id="prioridad">
             <option selected><?php echo $prioridad ?></option>
			 <option></option>
             <option value="urgente">Urgente</option>
             <option value="normal">Normal</option>
           </select>
           </label>
        </div></td>
      </tr>
    </table>
    <br />
    <table  border="1" bordercolor="#FFFFFF" width="632" bgcolor="#BDBDBD">
      <tr>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <!-- combo 1 municipio -->
        <td width="166">Fecha de Inicio:</td>
            <td width="144">
		  <input type="text" id="fecha1" name="fecha_ini" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly" value="<?php echo $fecha_ini?>"/>
          <input type="image" src="calendario/calendario.gif" id="fecha" />
          <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
          <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fecha1", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script></td>
         <td width="150">Fecha de Culminaci&oacute;n: </td>
            <div><td width="144"><input type="text" id="Fecha_ini" readonly="readonly"name="fecha_fin" size="10" onKeyPress="return nonumeyletra(event)" value="<?php echo $fecha_fin?>"/><input type="image" src="calendario/calendario.gif" id="fecha_i" /></td>
			
<!--**********SCRIPT PARA CALENDARIO  *************-->
			<script type="text/javascript"> 
					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar 
 					Calendar.setup
						(
    							{
      								inputField  : "Fecha_ini", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha_i" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);
  
				</script></div>
      </tr>
    </table>

	<p>ESTATUS</p>
	<table width="250" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
        <td width="170"><center>
           <select name="estatus" id="estatus">
             <option selected><?php echo $estatus ?></option>
			 <option></option>
             <option value="activo">Activo</option>
             <option value="culminado">culminado</option>
           </select>
           </td>
      </tr>
    </table>
	
    <p>DATOS DEL  EMPLEADO</p>
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td height="26"><div align="center">
          <label></label>
            <label>
            <input name="datos_empleado" size="60" type="text" id="datos_empleado"  value="<?php echo $datos_empleado ?>"/>
			
            
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
        <td height="26"><div align="center">
            <label></label>
            <label>
     			<textarea rows="2" cols="60" name="datos_equipo" id="datos_equipo"><?php echo $datos_equipo ?></textarea>
            </label>
</div>          
          <div align="center">
            <label for="textarea"></label>
            <div align="center"></div>
        </div>          </td>
      </tr>
    </table>
    <br>
    <br>
  
  
  
  
  
  
  
  
  
    </table>
	 <input type="hidden" name="id_odt" id="id_odt" value="<?php echo $id_odt ?>"> 


    <input name="submit" type="submit" value="Guardar">
</div>
 </form>

</body>
</html>
<?php
mysql_free_result($odt);

mysql_free_result($odt2);
?>