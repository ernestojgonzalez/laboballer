<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script>  


</head>
<body>
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
                 <h1 class="art-logo-name"><a href="./index.php">LABOBALLER �</a></h1>
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
<h2 class="art-postheader" align="center">LABOBALLER</h2>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->
 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="inserta_equipo.php" onSubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3"><strong>REGISTRO DE EQUIPO</strong></p>

<div align="center">
  
    <table  width="772" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="100"><div align="center"><strong>Nombre del equipo </strong></div></td>
        <td width="144"><label>
          <div align="center">
            <input name="nombre_equipo" type="text" id="nombre_equipo" />
          </div>
        </label></td>
        <td width="100"><div align="center">
          <strong>C�digo del equipo </strong>
        </div></td>
        <td width="144"><div align="center">
          <input name="codigo_equipo" type="text" id="codigo_equipo" />
        </div></td>
        <td width="94"><div align="center">
          <strong>Modelo</strong> 
          </div></td>
        <td width="150"><div align="center">
          <input name="modelo" type="text" id="modelo" />
        </div></td>
      </tr>
    </table>
  <br>

  <br>
  
    <table width="772" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
      <tr>
        <td width="101"><div align="center"><strong>Marca</strong></div></td>
        <td width="136"><div align="center">
          <input name="marca" type="text" id="marca" size="20" />
        </div></td>
        <td width="85"><div align="center"><strong>Descripci�n</strong></div></td>
        <td width="162"><div align="center">
          <label for="textarea"></label>
          <textarea name="descripcion" cols="15" id="descripcion"></textarea>
        </div></td>
        <td width="93"><div align="center"><strong>Cantidad </strong></div></td>
        <td width="155"><div align="center">
           <input name="cantidad" type="text" id="cantidad" size="5" />
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
        <td width="151"><div align="center">
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
        <td width="247"><div align="center"></div>          <div align="center">&nbsp;      
          </div></td>
        <td width="92"><div align="center"><strong>Estato del equipo </strong></div></td>
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
