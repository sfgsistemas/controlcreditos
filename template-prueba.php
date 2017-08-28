<?php
require('/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
	// Leer las l�neas del fichero
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Tabla simple
function BasicTable($header, $data)
{
	// Cabecera
	foreach($header as $col)
		$this->Cell(40,7,$col,1);
	$this->Ln();
	// Datos
	foreach($data as $row)
	{
		foreach($row as $col)
			$this->Cell(40,6,$col,1);
		$this->Ln();
	}
}

// Una tabla m�s completa
function ImprovedTable($header, $data)
{
	// Anchuras de las columnas
	$w = array(40, 35, 45, 40);
	// Cabeceras
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	// Datos
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR');
		$this->Cell($w[1],6,$row[1],'LR');
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
		$this->Ln();
	}
	// L�nea de cierre
	$this->Cell(array_sum($w),0,'','T');
}

// Tabla coloreada
function FancyTable($header, $data)
{
	// Colores, ancho de l�nea y fuente en negrita
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Cabecera
	$w = array(40, 35, 45, 40);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Restauraci�n de colores y fuentes
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Datos
	$fill = false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// L�nea de cierre
	$this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// T�tulos de las columnas
$header = array('Pa�s', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
// Carga de datos
//$data = $pdf->LoadData('paises.txt');
$pdf->SetMargins(3.5, 2.5, 3.5);
$pdf->SetRightMargin(3.5);
$pdf->AddPage();

$pdf->SetFont('Arial','B',8);
$row="!Hola¡";
$w = $pdf->GetStringWidth($row);
$pdf->Cell($w,5,utf8_decode($row),1,1);
$txt='Nomb:
'.
$row;
$w = $pdf->GetStringWidth($txt);
$pdf->MultiCell($w,5,utf8_decode($txt),1);


$pdf->Cell(60,10,utf8_decode($row),1,1,'C');
$pdf->Cell(40,5,utf8_decode('¡hola Mundo! á'),1);

$pdf->Cell(60,10,utf8_decode($row),1,1,'C');


$pdf->Cell(100,20,$pdf->Cell(60,10,utf8_decode($row),1,0,'C') ,1,1);


//$pdf->BasicTable($header,$data);
$pdf->AddPage();
//$pdf->ImprovedTable($header,$data);
$pdf->AddPage();
//$pdf->FancyTable($header,$data);
$pdf->Output();
?>
