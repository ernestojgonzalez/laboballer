<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                 <h1 class="art-logo-name"><a href="./index.html">LABOBALLER �</a></h1>
                         <h2 class="art-logo-text">�BARRY WEHMILLER �Lavadora de botellas</h2>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 class="art-postheader" align="center">LABOBALLER</h2>
<p>&nbsp;</p>                
                                
								
<p>&nbsp;</p>
<p>&nbsp;</p>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->
<div align="center">

    <p>&nbsp;      </p>
    <p>
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

                   echo "<center><table><tr><td><br><br><strong><center>El equipo $criterio <br> no existe en nuestra base de datos.</center></strong></td></tr></table></center>";
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
      <strong>MODIFICAR EQUIPO</strong>    </p>
    <table width="400" border="8" bordercolor="#CCCCCC">
                      <tr><td><strong>Nombre del equipo:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
                      <tr><td><strong>C�digo del equipo:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
                      <tr><td><strong>Modelo:</strong></td><td><?php echo "  $row[2]" ?></td></tr>
                      <tr><td><strong>Marca:</strong></td><td><?php echo "$row[3]" ?></td></tr>
                      <tr><td><strong>Descripci�n:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
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
<div align="center">
   
  
    <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="100"><div align="center"><strong>Nombre del equipo </strong></div></td>
        <td width="144"><label>
          <div align="center">
            <input name="nombre_equipo" type="text" id="nombre_equipo"  value="<?php echo $nombre_equipo ?>" />
          </div>
        </label></td>
        <td width="100"><div align="center">
          <p><strong>C�digo del equipo </strong></p>
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
        <td width="102"><div align="center"><strong>Descripci�n</strong></div></td>
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
<strong>FOTO DEL EQUIPO</strong>
<br>

<strong><a href="modificar_foto_equipo.php?id_equipo=<?php echo $id_equipo?>">Si desea Modificar la Foto pulse aqui</a></strong>


  
 <input type="hidden" name="id_equipo" id="id_equipo" value="<?php echo $id_equipo ?>"> 

<tr><td colspan="2"><strong><br><br>Presione el bot�n continuar para guardar los cambios</strong></td></tr>
<br>

<tr><td colspan="2"><center><br><input name="submit" type="submit" value="Continuar"></center></td></tr>

</form>
</center>
</table>

    <p>
      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>
      </p>
    <p>&nbsp;
        </p>
</div>
<!-- FINALIZA LA PAG -->
<!-- PIE DE PAG -->
         </div>       <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
                                
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>
<p>Derechos reservados en Espanol</p>


                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"><a href="http://www.artisteer.com/?p=website_templates">Website Template</a> created with Artisteer.</p>
</div>

</body>
</html>