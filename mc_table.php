<?php 

require('fpdf.php');
class PDF_MC_Table extends FPDF 
{
// Cabecera de página
function Header()
{

global $segundoCombo;
global $primerCombo;
global $ubica;
global $hoy;

    // Logo
    $this->Image('images/encabezado.png',10,8,330);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(90);
    // Título
    $this->Ln(40);
    $this->Cell(330,10,' Bienes Nacionales Muebles',0,0,'C');
    // Salto de línea
    $this->Ln(10);
    $this->SetFont('Arial','B',11);
    $hoy = date("d/m/Y");
    $this->Cell(20,8,"Fecha:  $hoy",0,1);
	$this->Cell(320,8,'Hoja. '.$this->PageNo(),0,0,'R');
    $this->Ln(7);
    $this->Cell(280,7,"DEPENDENCIA O UNIDAD DE TRABAJO:  $primerCombo",1,0,'');
    $this->Cell(50,7,"Código: 01",1,0,'C');
    $this->Ln(7);
    $this->Cell(155,7,"UBICACION ADMINISTRATIVA:  $segundoCombo",1,0,'');
	$this->Cell(175,7,"UBICACION GEOGRAFICA:  $ubica",1,0,'');
	$this->Ln(7);
    $this->Cell(45,7,"CLASIFICACION",1,0,'C');
	$this->SetFont('Arial','B',9);
    $this->Cell(10,17,"CANT.",1,0,'C');
    $this->Cell(35,17,"No. DE IDENT.",1,0,'C');
    $this->Cell(170,17,"NOMBRE Y ESPECIFICACION DE LOS BIENES",1,0,'C');
	$this->SetFont('Arial','B',9);
    $this->Cell(35,17,"VALOR UNITARIO BS ",1,0,'C');
    $this->Cell(35,17,"VALOR TOTAL BS",1,0,'C');
    $this->Ln(7);
    $this->SetFont('Arial','',7);
    $this->Cell(15,10,"GRUPO",1,0,'C');
    $this->Cell(15,10,"SUB-GRUPO",1,0,'C');
    $this->Cell(15,10,"SECCION",1,0,'C');
    $this->Ln(10);
    
    
}

// Pie de página
function Footer()
{
global $conformado;
global $cargo;   
 // Posición: a 1,5 cm del final
    $this->SetY(-25);
    // Arial italic 8
   //$this->Image('images/firma.png',10,169,273);
    // Número de página
	$this->SetFont('Arial','B',8);
	$this->Cell(90,4,"PREPARACION",1,0,'C');
    $this->Cell(80,4,"COFORMACION",1,0,'C');
    $this->Cell(90,4,"APROBACION",1,0,'C');
	$this->Cell(70,4,"SELLO",1,0,'C');
	$this->Ln(4);
	$this->SetFont('Arial','',8);
	$this->Cell(90,3.5,"Nombre: Fredy Gonzalez",1,0,'');
	$this->Cell(80,3.5,$conformado,1,0,'C');
    $this->Cell(90,3.5,"Noel de Jesús Márquez Ramírez",1,0,'C');
	$this->Cell(70,11,"",1,0,'C');
	
	$this->Ln(3.5);
	$this->Cell(90,3.5,"Cargo: Registrador de Bienes y Materias",1,0,'');
	$this->Cell(80,3.5,$cargo,1,0,'C');
    $this->Cell(90,3.5,"Director General",1,0,'C');
	$this->Ln(3.5);
	$this->Cell(90,4,"Firma:",1,0,'');
	$this->Cell(80,4,'',1,0,'C');
    $this->Cell(90,4,'',1,0,'C');
	//$this->Ln(4);
   

} 
var $widths; 
var $aligns; 

function SetWidths($w) 
{ 
    //Set the array of column widths 
    $this->widths=$w; 
} 

function SetAligns($a) 
{ 
    //Set the array of column alignments 
    $this->aligns=$a; 
} 

function fill($f)
{
	//juego de arreglos de relleno
	$this->fill=$f;
}

function Row($data) 
{ 
    //Calculate the height of the row 
    $nb=0; 
    for($i=0;$i<count($data);$i++) 
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i])); 
    $h=5*$nb; 
    //Issue a page break first if needed 
    $this->CheckPageBreak($h); 
    //Draw the cells of the row 
    for($i=0;$i<count($data);$i++) 
    { 
        $w=$this->widths[$i]; 
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L'; 
        //Save the current position 
        $x=$this->GetX(); 
        $y=$this->GetY(); 
        //Draw the border 
        $this->Rect($x,$y,$w,$h); 
        //Print the text 
        $this->MultiCell($w,5,$data[$i],'LTR',$a); 
        //Put the position to the right of the cell 
        $this->SetXY($x+$w,$y); 
    } 
    //Go to the next line 
    $this->Ln($h); 
} 

function CheckPageBreak($h) 
{ 
    //If the height h would cause an overflow, add a new page immediately 
    if($this->GetY()+$h>$this->PageBreakTrigger) 
        $this->AddPage($this->CurOrientation); 
} 

function NbLines($w,$txt) 
{ 
    //Computes the number of lines a MultiCell of width w will take 
    $cw=&$this->CurrentFont['cw']; 
    if($w==0) 
        $w=$this->w-$this->rMargin-$this->x; 
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize; 
    $s=str_replace("\r",'',$txt); 
    $nb=strlen($s); 
    if($nb>0 and $s[$nb-1]=="\n") 
        $nb--; 
    $sep=-1; 
    $i=0; 
    $j=0; 
    $l=0; 
    $nl=1; 
    while($i<$nb) 
    { 
        $c=$s[$i]; 
        if($c=="\n") 
        { 
            $i++; 
            $sep=-1; 
            $j=$i; 
            $l=0; 
            $nl++; 
            continue; 
        } 
        if($c==' ') 
            $sep=$i; 
        $l+=$cw[$c]; 
        if($l>$wmax) 
        { 
            if($sep==-1) 
            { 
                if($i==$j) 
                    $i++; 
            } 
            else 
                $i=$sep+1; 
            $sep=-1; 
            $j=$i; 
            $l=0; 
            $nl++; 
        } 
        else 
            $i++; 
    } 
    return $nl; 
} 
} 
?>      
