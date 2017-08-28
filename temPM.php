<?php
//============================================================+
// File name   : example_004.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 004 for TCPDF class
//               Cell stretching
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**921-769-589
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Cell stretching
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 004');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 004', PDF_HEADER_STRING);

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
$pdf->SetFont('times', '', 6);

// add a page
$pdf->AddPage();

//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
$html="";
// test Cell stretching
$txt = "Nomre / Razon social
Codigo PHP";

$pdf->MultiCell(30,0, "Prueba de 
espacio", 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, $txt, 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, $txt, 1, 'J', 0, 1, '', '', true,1,false,true); 

$pdf->writeHTMLCell(0, 0, '', '', '<input id="tipocredito1" name="tipocredito" type="radio" value="1" ><label for="tipocredito1">Credit</label>', 'LRTB', 1, 0, true, 'L', true);



$params = $pdf->serializeTCPDFtagParameters($pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true));
$html .= '<tcpdf method="MultiCell" params="'.$params.'" />';
$params = $pdf->serializeTCPDFtagParameters($pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true));
$html .= '<tcpdf method="MultiCell" params="'.$params.'" />';
$params = $pdf->serializeTCPDFtagParameters($pdf->MultiCell(30,0, $txt, 1, 'J', 0, 0, '', '', true,1,false,true));
$html .= '<tcpdf method="MultiCell" params="'.$params.'" />';

$pdf->SetFillColor	(0,-1,-1,-1,false,$html);


$pdf->writeHTML($html, true, true, true, 0);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END$pdf->writeHTMLCell(0, 0, '', '', $html, 'LRTB', 1, 0, true, 'L', true); OF FILE
//============================================================+
