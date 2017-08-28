<?php
if(isset($_POST['aceptar'])){
$cliente=$_REQUEST['cliente'];
$nomsol=$_REQUEST['nomsol'];
$segnomsol=$_REQUEST['segnomsol'];
$apepasol=$_REQUEST['apepasol'];
$apemasol=$_REQUEST['apemasol'];
$rfc1=strtoupper($_REQUEST['rfc1']);
$rfc2=strtoupper($_REQUEST['rfc2']);
$rfc3=strtoupper($_REQUEST['rfc3']);
$rfc4=strtoupper($_REQUEST['rfc4']);
$rfc5=strtoupper($_REQUEST['rfc5']);
$rfc6=strtoupper($_REQUEST['rfc6']);
$rfc7=strtoupper($_REQUEST['rfc7']);
$rfc8=strtoupper($_REQUEST['rfc8']);
$rfc9=strtoupper($_REQUEST['rfc9']);
$rfc10=strtoupper($_REQUEST['rfc10']);
$rfc11=strtoupper($_REQUEST['rfc11']);
$rfc12=strtoupper($_REQUEST['rfc12']);
$rfc13=strtoupper($_REQUEST['rfc13']);

$telsol1=$_REQUEST['telsol1'];
$telsol2=$_REQUEST['telsol2'];
$telsol3=$_REQUEST['telsol3'];
$telsol4=$_REQUEST['telsol4'];
$telsol5=$_REQUEST['telsol5'];
$telsol6=$_REQUEST['telsol6'];
$telsol7=$_REQUEST['telsol7'];
$telsol8=$_REQUEST['telsol8'];
$telsol9=$_REQUEST['telsol9'];
$telsol10=$_REQUEST['telsol10'];

$movsol1=$_REQUEST['movsol1'];
$movsol2=$_REQUEST['movsol2'];
$movsol3=$_REQUEST['movsol3'];
$movsol4=$_REQUEST['movsol4'];
$movsol5=$_REQUEST['movsol5'];
$movsol6=$_REQUEST['movsol6'];
$movsol7=$_REQUEST['movsol7'];
$movsol8=$_REQUEST['movsol8'];
$movsol9=$_REQUEST['movsol9'];
$movsol10=$_REQUEST['movsol10'];

$dirsol=$_REQUEST['dirsol'];

$mailsol=$_REQUEST['mailsol'];

$colsol=$_REQUEST['colsol'];

$cdsol=$_REQUEST['cdsol'];

$lugnacsol=$_REQUEST['lugnacsol'];

$edosol=$_REQUEST['edosol'];

$cpsol=$_REQUEST['cpsol'];

$curpsol=$_REQUEST['curpsol'];

$valida=isset($_REQUEST['sexsol']);
if($valida){
$sexsol=$_REQUEST['sexsol'];
}
$fechnacsol1=$_REQUEST['fechnacsol1'];

$fechnacsol2=$_REQUEST['fechnacsol2'];

$fechnacsol3=$_REQUEST['fechnacsol3'];

$edsol=$_REQUEST['edsol'];

$nacsol=$_REQUEST['nacsol'];

$depensol=$_REQUEST['depensol'];

$acdomsol=$_REQUEST['acdomsol'];

$valida2=isset($_REQUEST['vivsol']);
if($valida2){
$vivsol=$_REQUEST['vivsol'];
}

$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];
$variable=$_REQUEST['cliente'];



/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';


//	Change these values to select the Rendering library that you wish to use
//		and its directory location on your server
//$rendererName = PHPExcel_Settings::PDF_RENDERER_TCPDF;
//$rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
//$rendererLibrary = 'tcPDF5.9';
//$rendererLibrary = 'mPDF5.4';
$rendererLibrary = 'dompdf';
$rendererLibraryPath = dirname(__FILE__).'/' . $rendererLibrary;


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties



// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('AW2', 'world!');

// Miscellaneous glyphs, UTF-8
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');
$objPHPExcel->getActiveSheet()->setShowGridLines(false);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


if (!PHPExcel_Settings::setPdfRenderer(
		$rendererName,
		$rendererLibraryPath
	)) {
	die(
		'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
		'<br />' .
		'at the top of this script as appropriate for your directory structure'
	);
}


// Redirect output to a client’s web browser (PDF)
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="01simple.pdf"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->save('php://output');
exit;



}
if(isset($_POST['cancelar'])){
echo "cancelar";
}

?>