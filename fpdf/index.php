<?php
require('fpdf.php');

$cedula=19847190;
include "../coneccionbasedatosmysql.inc";
$enlace =conectarbase();
	$consulta="(SELECT * FROM empleado where cedula='$cedula')";
    $resultado=basedatos($consulta);
	$row = mysql_fetch_row($resultado);

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

	$this->Image('../images/header-object.png',150,8,50);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Ln(20);
	$this->Cell(65);
    // Título
    $this->Cell(70,10,'LABOBALLER',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Datos del empleado');
 $pdf->Ln(20);
$pdf->Cell(40,10,$row[1]);
$pdf->Cell(40,10,$row[2]);
$pdf->Cell(40,10,$row[0]);
 $pdf->Ln(20);

$pdf->Cell(40,10,$row[4]);


$pdf->Output();
?>