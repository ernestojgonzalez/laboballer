<?php
require ('mc_table.php');

define('FPDF_FONTPATH', 'font/');
// DECLARACIÓN DE VARIABLES
	$criterio =  $_POST['criterio'];
/*	$segundoCombo =  $_POST['segundoCombo'];
	$ubica =  $_POST['ubica'];
	$conformado =  $_POST['conformado'];
	$cargo =  $_POST['cargo'];
	
$number = $totala;


// notación inglesa con 3 decimales
$english_format_number2 = number_format($number, 3);
// 1,235.560
*/
   ob_end_clean();

// Encabezado del pdf 
$pdf = new PDF_Mc_Table('l');
$pdf->AddPage();

$pdf->SetFont('Helvetica','B', 12);
//un arreglo con su medida  a lo ancho
$pdf->SetWidths(array(15,15,15,10,35,170,35,35));
//un arreglo con alineacion de cada celda
$pdf->SetAligns(array('C','C','C','C','C','L','C','C'));
//OTro arreglo pero con el contenido
//utf8_decode es para que escriba bien
//los acentos. 

$pdf->SetFont('Arial','',9);



 include "coneccionbasedatosmysql.inc";

   // CONECTA LA BASE DE DATOS INPRADEM
	$enlace =conectarbase();
	
   //CONSULTA LA TABLA BIENES 
	$consulta="SELECT * FROM equipo";
    $resultado=basedatos($consulta);

    //$consulta="SELECT SUM(valor_unitario) as total FROM bienes WHERE divi='Direccion General' and dep='Oficina Direccion'";

   /* $consulta2="SELECT SUM(valor_unitario) as total from bienes where (divi like '$primerCombo') and (dep like '$segundoCombo')";
    $resultado2=basedatos($consulta2);
    */
    
    while ($row = mysql_fetch_row($resultado2))
    {
          $var=$row[0];
    }
      $k=0;
      $z=1;
      $x=11;
      while ($row = mysql_fetch_row($resultado))
    {
                                    $grupo = $row[1];
                                    $subgrupo = $row[2];
                                    $seccion = $row[3];
                                    $cantidad = $row[15];
                                    $id = $row[0];
                                    $division = $row[4];
                                    $departamento = $row[5];
                                    $nombre = $row[8];
                                    $descripcion = $row[9];
                                    $serial= $row[12];
									$fecha_r= $row[24];
									$activo = $row[17];
                                    $marca = $row[10];
                                    $modelo = $row[11];
                                    $color = $row[13];
                                    $medidas = $row[14];
                                    $valor_unitario=$row[16];
									

                                    //$k=$k+1;




                                    //$pdf->Ln(7);

                                    $pdf->SetFont('Arial','',8);
                                    //$pdf->Cell(15,7,"",1,0,'C');
                                    //$pdf->Cell(15,7,"",1,0,'C');
                                    //$pdf->Cell(15,7,"",1,0,'C');
                                    //$pdf->Cell(10,7,"$cantidad",1,0,'C');
                                    //$pdf->SetFont('Arial','',11);
                                    //$pdf->Cell(35,7,"$id",1,0,'');
                                    //$pdf->SetFont('Arial','',8);
                                    //$pdf->Cell(170,7,"",1,0,'L');
									//$pdf->SetFont('Arial','',9);
                                    //$pdf->Cell(35,7,"$valor_unitario",1,0,'C');
                                    //$pdf->Cell(35,7,"$valor_unitario",1,0,'C');
                                    //$pdf->Ln(3);
$pdf->Row(array(utf8_decode("$grupo"),utf8_decode("$subgrupo"),utf8_decode("$seccion"),utf8_decode("$cantidad"),utf8_decode("$id"),utf8_decode("$nombre $descripcion SERIAL $serial MARCA $marca MODELO $modelo COLOR $color MEDIDAS $medidas"),utf8_decode("$valor_unitario"),utf8_decode("$valor_unitario")));
									 }
//$var = number_format($var,2,'.','');
$var = number_format($var, 3 ,',','.');

//echo $var;
  $pdf->SetFont('Arial','',10);
  //$pdf->Ln(7);
  $pdf->Cell(285,7,"Total:",0,0,'R');
  $pdf->Cell(45,7,"$var",0,0,'R');
// fin y entrega del pdf 
$pdf->Output();

	
?>