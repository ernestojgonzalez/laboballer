<?php
require('fpdf.php');
$cedula=19847190;
 include "../coneccionbasedatosmysql.inc";
 $enlace =conectarbase();
	$consulta="(SELECT * FROM empleado where cedula='$cedula')";
    $resultado=basedatos($consulta);
	$row = mysql_fetch_row($resultado);
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,10,$cedula,0,1,'C');
$pdf->Cell(60,10,$row[2],0,1,'C');
$pdf->Cell(40,10,$row[4]);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();
?>