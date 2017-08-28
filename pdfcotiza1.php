<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */




// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');
require_once('tcpdf/tcpdf.php');











// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 048');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', 'Servicios Financieros del Guadiana, S.A de C.V  SOFOM, E.N.R 
');
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 14);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Tabla de Amortización', '', 0, 'L', true, 0, false, false, 0);
$pdf -> Ln(3);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------



// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------


// -----------------------------------------------------------------------------



$pdf->MultiCell(40,0, 'Tasa de Interes 
  '.$_REQUEST['tasanomina'] , 0, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Monto Solicitado
  '.$_REQUEST['montonomina'] , 0, 'L', 0, 0, '', '', true,0,false,true);

$pdf->MultiCell(40,0, 'Seguro de Desempleo
  '.$_REQUEST['segurodesempleonomina'] , 0, 'L', 0, 0, '', '', true,0,false,true);




$pdf->MultiCell(40,0, 'Seguro de Vida
  '.$_REQUEST['segurovidanomina'] , 0, 'L', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);


$pdf->MultiCell(40,0, 'Frecuencia de Pago 
  Mensual' , 0, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Plazo
  '.$_REQUEST['plazonomina'].' Meses' , 0, 'L', 0, 0, '', '', true,0,false,true);

$pdf->MultiCell(40,0, 'Comision por Apertura
  '.$_REQUEST['comisionnomina'] , 0, 'L', 0, 0, '', '', true,0,false,true);



$arr = array("%" => "","$"=>"",","=>""); 
 


$tasamensual=(strtr($_REQUEST['tasanomina'],$arr)/100)/12;

$pago=(strtr($_REQUEST['montonomina'],$arr)*$tasamensual*1.16)/(1-pow(1+$tasamensual*1.16,(-strtr($_REQUEST['plazonomina'],$arr))));

//cuota=((totalafinanciar*intRate*1.16)/(1-Math.pow(1+intRate*1.16,(-1*months)))*100)/100;


$pdf->MultiCell(40,0, 'Pagos
  '.toMoney($pago) , 0, 'L', 0, 1, '', '', true,0,false,true);


$pdf->Ln(1);

$tbl = 
'<table border="1" cellpadding="2" cellspacing="2">
<thead>
 <tr style="background-color:#F4BF30;color:#FEFFFE;">
  <td width="20"align="center"><b>A</b></td>
  <td align="center"><b>Balance Inicial</b></td>
  <td align="center"><b>Capital</b></td>
  <td align="center"> <b>Interés</b></td>
  <td align="center"><b>Balance final</b></td>
  <td align="center"><b>Iva de los intereses</b></td>
  <td align="center"><b>Pago Total Programado</b></td>


 </tr>
</thead>';

$falta=strtr($_REQUEST['montonomina'],$arr);
$sumbalance=0;
$sumint=0;
$sumivaint=0;
$sumbalncefin=0;
$sumpatoprog=0;
for($i=1;$i<=$_REQUEST['plazonomina'];$i++){
  $tbl.='<tr>
  <td width="20">'.$i.'</td>
  <td >'.toMoney($falta).'</td>';
  $sumbalance+=$falta;
  $intereses=($falta*$tasamensual);

  $sumint+=$intereses;
  $ivaintereses=($falta*$tasamensual*0.16);
  $sumivaint+=$ivaintereses;

  $capital=$pago-$intereses-$ivaintereses;
  $tbl.=
  '<td >'.toMoney($capital).'</td>
  <td >'.toMoney($intereses).'</td>';

  $falta=$falta-$capital;
  $sumbalncefin+=$falta;
  $sumpatoprog+=$pago; 
  $tbl.='
  <td >'.toMoney($falta).'</td>
  <td >'.toMoney($ivaintereses).'</td>
  <td >'.toMoney($pago).'</td>
 </tr>';
}

$tbl.='

 <tr><td>--></td><td>Total</td></tr>
 <tr><td>--></td><td></td>
 <td>'.toMoney(strtr($_REQUEST['montonomina'],$arr)).'</td>
 <td>'.toMoney($sumint).'</td>
 <td></td>
 <td>'.toMoney($sumivaint).'</td>
 <td>'.toMoney($sumpatoprog).'</td>
 </tr>

 
</table>';



$pdf->MultiCell(40,0, 'Total a Financiar
  '.$_REQUEST['montonomina'] , 0, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Total a Pagar
  '.toMoney($sumpatoprog) , 0, 'L', 0, 1, '', '', true,0,false,true);

//$pdf->MultiCell(0,0, 'CAT 20.4% sin IVA Calculado al 28/06/2017 "Para fines informativos y de comparación exclusivamente' , 0, 'L', 0, 1, '', '', true,0,false,true);







$pdf->Ln(1);



// -----------------------------------------------------------------------------

// Table with rowspans and THEAD
$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->AddPage();

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->AddPage();

$pdf->writeHTML($tbl, true, false, false, false, '');
// -----------------------------------------------------------------------------

// NON-BREAKING TABLE (nobr="true")



// -----------------------------------------------------------------------------

// NON-BREAKING ROWS (nobr="true")


// -----------------------------------------------------------------------------

//$pdf->IncludeJS('print(true);');

//Close and output PDF document

$pdf->IncludeJS('print(true);');
$pdf->Output('example_048.pdf', 'I');



function toMoney($val,$symbol='$',$r=2)
{


    $n = $val; 
    $c = is_float($n) ? 1 : number_format($n,$r);
    $d = '.';
    $t = ',';
    $sign = ($n < 0) ? '-' : '';
    $i = $n=number_format(abs($n),$r); 
    $j = (($j = $i.'length') > 3) ? $j % 3 : 0; 

   return  $symbol.$sign .($j ? substr($i,0, $j) + $t : '').preg_replace('/(\d{3})(?=\d)/',"$1" + $t,substr($i,$j)) ;

}






//============================================================+
// END OF FILE
//============================================================+
