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
                 <h1 class="art-logo-name"><a href="./index.php">LABOBALLER  </a></h1>
                         <h2 class="art-logo-text"> BARRY WEHMILLER  Lavadora de botellas</h2>
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
<p>&nbsp;</p>
                <div class="cleared"></div>
        <div class="art-postcontent">
<!-- EMPIEZA LA PAG -->
<?php

	include "coneccionbasedatosmysql.inc";

	$enlace =conectarbase();



	if(!isset($_GET['pag']))

	{

	$pag=1;

	}else

	{

		$pag=$_GET['pag'];

	}

	$hasta=30;

	$desde=($hasta*$pag)-$hasta;

	$consulta="SELECT * FROM equipo order by fecha LIMIT $desde, $hasta";

	$resultado=mysql_query($consulta,$enlace);

?><title>Consulta-LABOBALLER</title>





<center>

<table width="550"  border="1" bordercolor="#CCCCCC" class="tabla1"/>
<CAPTION><strong>
<p>&nbsp;</p>
<p>CONSULTA GENERAL</p>

<p></strong></CAPTION>


  <TR>

	<TH bgcolor="#E4E4E7" width="10">Equipo</TH>
	<TH bgcolor="#E4E4E7" width="110">Modelo</TH>
	<TH bgcolor="#E4E4E7" width="130">Marca</TH>
	<TH bgcolor="#E4E4E7" width="130">Descripción</TH>
	<TH bgcolor="#E4E4E7" width="90">Estado del Equipo</TH>
	<TH bgcolor="#E4E4E7" width="120">Cantidad</TH>
	<TH bgcolor="#E4E4E7" width="120">Fecha de ingreso</TH>
	<TH bgcolor="#E4E4E7" width="120">Mostrar Foto del Equipo</TH>
  </tr>

	<?PHP
		$i=0;
		while ($row = mysql_fetch_row($resultado))
    {

        $link2 =$row[8];


        echo "<center><td>$row[1]<br>$row[0]</td>";
       	echo "<td><center>$row[2]</td>";
		echo "<td><center>$row[3]</td>";
       	echo "<td><center>$row[4]</td>";
		echo "<td><center>$row[5]</td>";
       	echo "<td><center>$row[6]</td>";
       	echo "<td><center>$row[7]</td>";	
		echo "<td><a target=_blank href='$link2'><img src='$row[8]' width='120'height='100'></a></td>";	
		//echo "<td><a target=_blank href='$link2'>$row[9]</a></td>";
      	//echo "<td><img src='$row[9]' width='100'height='100'></td>";
	   $i=$i+1;

       if (($i%1)==0)

       {

       echo "<tr></tr>";

       }

    }

		mysql_free_result($resultado);

	 ?>



  </table>

    <?PHP

		$consulta="select count(codigo_equipo) from equipo";

		$lista=mysql_query($consulta,$enlace);

		$row=mysql_fetch_row($lista);

		$paginas=ceil($row[0]/$hasta);

		echo "<br>P&aacute;gina [".$pag."] de [".$paginas."]<br>";

		if($pag>1)

		{

			echo "<a href=\"consult_equipo.php?pag=1\">|<<</a> <a href=\"pagina1.php?pag=".($pag-1)."\"></a> | ";

		}

		echo "<a href=\"consul_equipo.php\">Volver</a> | ";

		if($pag<$paginas)

		{


			echo "<a href=\"consulta_equipo.php?pag=".($pag+1)."\">>></a> <a href=\"pagina1.php?pag=".($paginas)."\">|</a>";

		}

	?>
<!-- FINALIZA LA PAG -->
<!-- PIE DE PAG -->
</div>
                <div class="cleared"></div>
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
<p>Derechos reservados en Español</p>


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