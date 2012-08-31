<?php
require('fpdf.php');
$cedula=19847190;
 include "../coneccionbasedatosmysql.inc";
 $enlace =conectarbase();
	$consulta="(SELECT * FROM empleado where cedula='$cedula')";
    $resultado=basedatos($consulta);
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,10,'Hecho $cedula con .',0,1,'C');
$pdf->Cell(60,10,'Hecho con FPDF.',0,1,'C');
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();
?>