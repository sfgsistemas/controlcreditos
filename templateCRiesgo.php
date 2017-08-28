<?php
echo $_GET['prueba'];
if(isset($_POST['aceptar'])){
$cliente=$_REQUEST['cliente'];
$nomsol=ucwords($_REQUEST['nomsol']);
$segnomsol=ucwords($_REQUEST['segnomsol']);
$apepasol=ucwords($_REQUEST['apepasol']);
$apemasol=ucwords($_REQUEST['apemasol']);
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

$curpsol=strtoupper($_REQUEST['curpsol']);

$sexsol=$_REQUEST['sexsol'];

$fechnacsol1=$_REQUEST['fechnacsol1'];

$fechnacsol2=$_REQUEST['fechnacsol2'];

$fechnacsol3=$_REQUEST['fechnacsol3'];

$edsol=$_REQUEST['edsol'];

$nacsol=$_REQUEST['nacsol'];

$depensol=$_REQUEST['depensol'];

$acdomsol=$_REQUEST['acdomsol'];

$vivsol=$_REQUEST['vivsol'];

$vivsolesp=$_REQUEST['vivsolesp'];

$inmusol=$_REQUEST['inmusol'];

$anosol=$_REQUEST['anosol'];

$arraisol=$_REQUEST['arraisol'];

$acdomsol2=$_REQUEST['acdomsol2'];

$anosol2=$_REQUEST['anosol2'];

$benesol=ucwords($_REQUEST['benesol']);

$civilsol=$_REQUEST['civilsol'];

$autosol=$_REQUEST['autosol'];

$marcasol=$_REQUEST['marcasol'];

$puestosol=$_REQUEST['puestosol'];

$depasol=$_REQUEST['depasol'];

$desdesol=$_REQUEST['desdesol'];

$compasol=$_REQUEST['compasol'];

$compatelsol1=$_REQUEST['compatelsol1'];
$compatelsol2=$_REQUEST['compatelsol2'];
$compatelsol3=$_REQUEST['compatelsol3'];
$compatelsol4=$_REQUEST['compatelsol4'];
$compatelsol5=$_REQUEST['compatelsol5'];
$compatelsol6=$_REQUEST['compatelsol6'];
$compatelsol7=$_REQUEST['compatelsol7'];
$compatelsol8=$_REQUEST['compatelsol8'];
$compatelsol9=$_REQUEST['compatelsol9'];
$compatelsol10=$_REQUEST['compatelsol10'];

$compatelsolext=$_REQUEST['compatelsolext'];

$nomref1=ucwords($_REQUEST['nomref1']);

$parenref1=$_REQUEST['parenref1'];

$telref11=$_REQUEST['telref11'];
$telref12=$_REQUEST['telref12'];
$telref13=$_REQUEST['telref13'];
$telref14=$_REQUEST['telref14'];
$telref15=$_REQUEST['telref15'];
$telref16=$_REQUEST['telref16'];
$telref17=$_REQUEST['telref17'];
$telref18=$_REQUEST['telref18'];
$telref19=$_REQUEST['telref19'];
$telref110=$_REQUEST['telref110'];

$nomref2=$_REQUEST['nomref2'];

$parenref2=$_REQUEST['parenref2'];

$telref21=$_REQUEST['telref21'];
$telref22=$_REQUEST['telref22'];
$telref23=$_REQUEST['telref23'];
$telref24=$_REQUEST['telref24'];
$telref25=$_REQUEST['telref25'];
$telref26=$_REQUEST['telref26'];
$telref27=$_REQUEST['telref27'];
$telref28=$_REQUEST['telref28'];
$telref29=$_REQUEST['telref29'];
$telref210=$_REQUEST['telref210'];

$refbanc=$_REQUEST['refbanc'];

$tarjrefbanc=$_REQUEST['tarjrefbanc'];

$cargdir=$_REQUEST['cargdir'];

$nocuentcd=$_REQUEST['nocuentcd'];

$conyunom=ucwords($_REQUEST['conyunom']);

$compaconyu=$_REQUEST['compaconyu'];

$puestconyu=$_REQUEST['puestconyu'];

$datobnom1=ucwords($_REQUEST['datobnom1']);

$datobappat1=ucwords($_REQUEST['datobappat1']);

$datobapmat1=ucwords($_REQUEST['datobapmat1']);

$datobdir1=$_REQUEST['datobdir1'];

$datobcol1=$_REQUEST['datobcol1'];

$datobcd1=$_REQUEST['datobcd1'];

$datoblugnac1=$_REQUEST['datoblugnac1'];

$datobprop1=$_REQUEST['datobprop1'];

$datobedo1=$_REQUEST['datobedo1'];

$datobcp1=$_REQUEST['datobcp1'];

$datobmail1=$_REQUEST['datobmail1'];

$datobsex1=$_REQUEST['datobsex1'];

$datobfechnac1d=$_REQUEST['datobfechnac1d'];

$datobfechnac1m=$_REQUEST['datobfechnac1m'];

$datobfechnac1a=$_REQUEST['datobfechnac1a'];

$datobed1=$_REQUEST['datobed1'];

$datobcurp1=strtoupper($_REQUEST['datobcurp1']);

$datobrfc11=strtoupper($_REQUEST['datobrfc11']);
$datobrfc12=strtoupper($_REQUEST['datobrfc12']);
$datobrfc13=strtoupper($_REQUEST['datobrfc13']);
$datobrfc14=strtoupper($_REQUEST['datobrfc14']);
$datobrfc15=strtoupper($_REQUEST['datobrfc15']);
$datobrfc16=strtoupper($_REQUEST['datobrfc16']);
$datobrfc17=strtoupper($_REQUEST['datobrfc17']);
$datobrfc18=strtoupper($_REQUEST['datobrfc18']);
$datobrfc19=strtoupper($_REQUEST['datobrfc19']);
$datobrfc110=strtoupper($_REQUEST['datobrfc110']);
$datobrfc111=strtoupper($_REQUEST['datobrfc111']);
$datobrfc112=strtoupper($_REQUEST['datobrfc112']);
$datobrfc113=strtoupper($_REQUEST['datobrfc113']);


$datobtel11=$_REQUEST['datobtel11'];
$datobtel12=$_REQUEST['datobtel12'];
$datobtel13=$_REQUEST['datobtel13'];
$datobtel14=$_REQUEST['datobtel14'];
$datobtel15=$_REQUEST['datobtel15'];
$datobtel16=$_REQUEST['datobtel16'];
$datobtel17=$_REQUEST['datobtel17'];
$datobtel18=$_REQUEST['datobtel18'];
$datobtel19=$_REQUEST['datobtel19'];
$datobtel110=$_REQUEST['datobtel110'];

////
$datobnom2=ucwords($_REQUEST['datobnom2']);

$datobappat2=ucwords($_REQUEST['datobappat2']);

$datobapmat2=ucwords($_REQUEST['datobapmat2']);

$datobdir2=$_REQUEST['datobdir2'];

$datobcol2=$_REQUEST['datobcol2'];

$datobcd2=$_REQUEST['datobcd2'];

$datoblugnac2=$_REQUEST['datoblugnac2'];

$datobprop2=$_REQUEST['datobprop2'];

$datobedo2=$_REQUEST['datobedo2'];

$datobcp2=$_REQUEST['datobcp2'];

$datobmail2=$_REQUEST['datobmail2'];

$datobsex2=$_REQUEST['datobsex2'];

$datobfechnac2d=$_REQUEST['datobfechnac2d'];

$datobfechnac2m=$_REQUEST['datobfechnac2m'];

$datobfechnac2a=$_REQUEST['datobfechnac2a'];

$datobed2=$_REQUEST['datobed2'];

$datobcurp2=strtoupper($_REQUEST['datobcurp2']);

$datobrfc21=strtoupper($_REQUEST['datobrfc21']);
$datobrfc22=strtoupper($_REQUEST['datobrfc22']);
$datobrfc23=strtoupper($_REQUEST['datobrfc23']);
$datobrfc24=strtoupper($_REQUEST['datobrfc24']);
$datobrfc25=strtoupper($_REQUEST['datobrfc25']);
$datobrfc26=strtoupper($_REQUEST['datobrfc26']);
$datobrfc27=strtoupper($_REQUEST['datobrfc27']);
$datobrfc28=strtoupper($_REQUEST['datobrfc28']);
$datobrfc29=strtoupper($_REQUEST['datobrfc29']);
$datobrfc210=strtoupper($_REQUEST['datobrfc210']);
$datobrfc211=strtoupper($_REQUEST['datobrfc211']);
$datobrfc212=strtoupper($_REQUEST['datobrfc212']);
$datobrfc213=strtoupper($_REQUEST['datobrfc213']);


$datobtel21=$_REQUEST['datobtel21'];
$datobtel22=$_REQUEST['datobtel22'];
$datobtel23=$_REQUEST['datobtel23'];
$datobtel24=$_REQUEST['datobtel24'];
$datobtel25=$_REQUEST['datobtel25'];
$datobtel26=$_REQUEST['datobtel26'];
$datobtel27=$_REQUEST['datobtel27'];
$datobtel28=$_REQUEST['datobtel28'];
$datobtel29=$_REQUEST['datobtel29'];
$datobtel210=$_REQUEST['datobtel210'];



$clavcon=$_REQUEST['clavcon'];

$nomcons=$_REQUEST['nomcons'];

$fecha=$_REQUEST['fecha'];

$nomvend=$_REQUEST['nomvend'];

$gerentegral=$_REQUEST['gerentegral'];

$tipocredito=$_REQUEST['tipocredito'];

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
require_once dirname(__FILE__) . '../Classes/PHPExcel.php';
require_once dirname(__FILE__) . '../Classes/PHPExcel/IOFactory.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("./Solicitud_PFA_VWL_septi 2016.xls");





	$objPHPExcel->getActiveSheet()->setCellValue('M6', $_GET['prueba']);
	
	
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Solicitud PFA '.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol.'.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
}
if(isset($_POST['cancelar'])){
include("carpetaraiz.php");
header('Location: '.$raiz.'indexmenu.php');
}

?>