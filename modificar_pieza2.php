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
<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
<title>LABOBALLER</title>
<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script> 

  <!-- plantilla  --> 
	<meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />    
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- fin plantilla  -->
   

    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<!--INICIO DE LA PLANTILLA -->
<!-- plantilla  --> 
	<meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />    
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!-- fin plantilla  -->
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
<h2 class="art-postheader" align="center">LABOBALLER</h2>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->

    <div align="center">
      <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
    
   $consulta = "SELECT * from partepieza where codigo_parte = '$criterio';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El codigo $criterio no existe en nuestra base de datos <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
				   $id_parte_pieza=$row[0];
                   $nombre_equipo=$row[1];
                   $piezas=$row[2];
                   $codigo_parte=$row[3];
                   $nombre_parte=$row[4];
                   $cantidad_parte=$row[5];
          

				  
                   ?>
     
      <div align="center">
	  <strong>MODIFICAR PARTE DEL EQUIPO</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>Nombre de equipo:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
        <tr>
          <td><strong>Nombre de la Parte </strong><strong>del empleado:</strong></td>
          <td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>codigo de la parte    </strong><strong>del empleado:</strong></td><td><?php echo "  $row[3]" ?></td></tr>
        <tr><td><strong>Cantidad</strong></td><td><?php echo "$row[5]" ?></td></tr>
        <tr><td><strong>Piezas del equipo</strong></td><td><?php echo "  $row[2]" ?></td></tr>
         </table>        
        <?php
                   }
                   ?>
        
<form method="post" name="form1" id="form1" enctype="multipart/form-data" action="modificar_pieza1.php" onSubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3"><strong>REGISTRO</strong></p>
<div align="center">
  <table  width="300" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
    <tr>
      <td colspan="2">&nbsp;</td>
      <td><div align="center">
           
              <strong>Equipo</strong>
                  <select name="nombre_equipo" id="nombre_equipo">
                    <option><?php echo "$nombre_equipo"; ?></option>
					<option se value="" <?php if (!(strcmp("", $row_nueva['nombre_equipo']))) {echo "$nombre_equipo";} ?>>
                    
					<?php
do {  
?>
                    <option value="<?php echo $row_nueva['nombre_equipo']?>"<?php if (!(strcmp($row_nueva['nombre_equipo'], $row_nueva['nombre_equipo'])))  ?>><?php echo $row_nueva['nombre_equipo']?></option>
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
      <td colspan="2">&nbsp;</td>
      </tr>
  </table>
 
  <p>PARTES DEL EQUIPO</p>
  <table  width="600" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
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
            <input name="nombre_parte" type="text" id="nombre_parte" value="<?php echo $nombre_equipo ?>" />
        </div></td>
      <td width="95"><div align="center">
          <p>&nbsp;</p>
      </div></td>
      <td width="395" bgcolor="#BDBDBD">&nbsp;</td>
    </tr>
  <td width="110"><div align="center"><strong><br><br>Código</strong></div></td>
      <td width="144"><label> </label>
          <div align="center"><br><br>
            <input name="codigo_parte" type="text" id="codigo_parte" value="<?php echo $codigo_parte ?>" />
        </div></td>
    <td width="95" bgcolor="#BDBDBD"><div align="center">
          <p>&nbsp;</p>
    </div></td>
    <td><div align="center"><strong>Nombre</strong> </div>
        <div align="center">
            <p>
              <label>
			  <textarea rows="2" cols="20" name="piezas" id="piezas"><?php echo $piezas ?></textarea>
              </label>
            </p>
        </div>
      <div align="center"></div></td>
  </tr>
    <tr>
      <td width="100"><div align="center"><strong>Cantidad</strong></div></td>
      <td width="156"><label>
          <div align="center">
            <input name="cantidad_parte" type="text" id="cantidad_parte" value="<?php echo $cantidad_parte ?>" />
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
	 <input type="hidden" name="id_parte_pieza" id="id_parte_pieza" value="<?php echo $id_parte_pieza ?>">
    <input name="submit" type="submit" value="Guardar">
</p>
  </div>
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
<?php
mysql_free_result($nueva);
?>