<?php

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

$fechnacsol3=substr($_REQUEST['fechnacsol'], 0,4);

$fechnacsol2=substr($_REQUEST['fechnacsol'], 5,2);

$fechnacsol1=substr($_REQUEST['fechnacsol'], 8,2);

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

$benesol=ucwords($_REQUEST['benesol3']);
$benesol2=ucwords($_REQUEST['benesol1']);
$benesol3=ucwords($_REQUEST['benesol2']);
$benesolC=$benesol.' '.$benesol2.' '.$benesol3;

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

$nomref2=ucwords($_REQUEST['nomref2']);

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
$ApPatDatCon=ucwords($_REQUEST['conyuape1']);
$ApMatDatCon=ucwords($_REQUEST['conyuape2']);

$compaconyu=$_REQUEST['compaconyu'];

$puestconyu=$_REQUEST['puestconyu'];

$datobnom1=ucwords($_REQUEST['datobnom1']);

$datobappat1=ucwords($_REQUEST['datobappat1']);

$datobapmat1=ucwords($_REQUEST['datobapmat1']);

$datobdir1=$_REQUEST['datobdir1'];

$datobcol1=$_REQUEST['datobcol1'];

$datobcd1=$_REQUEST['datobcd1'];

$datoblugnac1=$_REQUEST['datoblugnac1'];

if ($datobnom1 != "" && $datobappat1 !="" && $datobapmat1!="") {
	$datobprop1=$_REQUEST['datobprop1'];
}else{
	$datobprop1="";
}


$datobedo1=$_REQUEST['datobedo1'];

$datobcp1=$_REQUEST['datobcp1'];

$datobmail1=$_REQUEST['datobmail1'];

if ($datobnom1 != "" && $datobappat1 !="" && $datobapmat1!="") {
	$datobsex1=$_REQUEST['datobsex1'];
}else{
	$datobsex1="";
}

$datobfechnac1a=substr($_REQUEST['datobfechnac1d'], 0,4);

$datobfechnac1m=substr($_REQUEST['datobfechnac1d'], 5,2);

$datobfechnac1d=substr($_REQUEST['datobfechnac1d'], 8,2);




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

if ($datobnom2 != "" && $datobappat2 !="" && $datobapmat2!="") {
	$datobprop2=$_REQUEST['datobprop2'];
}else{
	$datobprop2="";
}


$datobedo2=$_REQUEST['datobedo2'];

$datobcp2=$_REQUEST['datobcp2'];

$datobmail2=$_REQUEST['datobmail2'];

if ($datobnom2 != "" && $datobappat2 !="" && $datobapmat2!="") {
	$datobsex2=$_REQUEST['datobsex2'];
}else{
	$datobsex2="";
}

$datobfechnac2a=substr($_REQUEST['datobfechnac2d'], 0,4);

$datobfechnac2m=substr($_REQUEST['datobfechnac2d'], 5,2);

$datobfechnac2d=substr($_REQUEST['datobfechnac2d'], 8,2);



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
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';

$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
$rendererLibrary = 'dompdf';
$rendererLibraryPath = dirname(__FILE__).'/' . $rendererLibrary;



// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("formatos/Solicitud_PFA_VWL_septi 2016-2.xls");





	
	$objPHPExcel->getActiveSheet()->setCellValue('B9', $nomsol);
	$objPHPExcel->getActiveSheet()->setCellValue('N9', $segnomsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AA9', $apepasol);
	$objPHPExcel->getActiveSheet()->setCellValue('AQ9', $apemasol);
	$objPHPExcel->getActiveSheet()->setCellValue('B13', $rfc1);
	$objPHPExcel->getActiveSheet()->setCellValue('C13', $rfc2);
	$objPHPExcel->getActiveSheet()->setCellValue('D13', $rfc3);
	$objPHPExcel->getActiveSheet()->setCellValue('E13', $rfc4);
	$objPHPExcel->getActiveSheet()->setCellValue('F13', $rfc5);
	$objPHPExcel->getActiveSheet()->setCellValue('G13', $rfc6);
	$objPHPExcel->getActiveSheet()->setCellValue('H13', $rfc7);
	$objPHPExcel->getActiveSheet()->setCellValue('I13', $rfc8);
	$objPHPExcel->getActiveSheet()->setCellValue('L13', $rfc9);
	$objPHPExcel->getActiveSheet()->setCellValue('M13', $rfc10);
	$objPHPExcel->getActiveSheet()->setCellValue('N13', $rfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('O13', $rfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('P13', $rfc13);
	
	$objPHPExcel->getActiveSheet()->setCellValue('U13', $telsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('V13', $telsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('W13', $telsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('X13', $telsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('Y13', $telsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('Z13', $telsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('AA13', $telsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('AB13', $telsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('AC13', $telsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('AD13', $telsol10);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AQ13', $movsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('AR13', $movsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('AS13', $movsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('AT13', $movsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('AU13', $movsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('AV13', $movsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('AW13', $movsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('AX13', $movsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('AY13', $movsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('AZ13', $movsol10);
	
	$numeroDirSol=$_REQUEST['dirnumsol'];
	$objPHPExcel->getActiveSheet()->setCellValue('B17', $dirsol.' #'.$numeroDirSol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM17', $mailsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B21', $colsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AA21', $cdsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AM21', $lugnacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B25', $edosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('p25', $cpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aa25', $curpsol);
	
	if($sexsol=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('c29', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('c259', "Masculino");
	}
	if($sexsol=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('f29', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('c259', "Femenino");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('i29', $fechnacsol1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('l29', $fechnacsol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('o29', $fechnacsol3);
	
	$objPHPExcel->getActiveSheet()->setCellValue('r29', $edsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w29', $nacsol);
	$objPHPExcel->getActiveSheet()->setCellValue('v259', $nacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('af29', $depensol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('am29', $acdomsol);
	
	if($vivsol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('f33', "X");
	}
	if($vivsol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('l33', "X");
	}
	if($vivsol=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('s33', "X");
	}
	if($vivsol=="4"){
	$objPHPExcel->getActiveSheet()->setCellValue('l35', "X");
	}
	if($vivsol=="5"){
	$objPHPExcel->getActiveSheet()->setCellValue('s35', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('b36', $vivsolesp);
	}
	
	if($inmusol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('w35', "X");
	}
	if($inmusol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('aa35', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('af35', $anosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('al35', $arraisol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('av35', $acdomsol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('k39', $anosol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('p40', $benesol.' '.$benesol2.' '.$benesol3);
	
	if($civilsol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L43', "X");
	}
	if($civilsol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('x43', "X");
	}
	if($civilsol=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('ah43', "X");
	}
	if($civilsol=="4"){
	$objPHPExcel->getActiveSheet()->setCellValue('as43', "X");
	}
	if($civilsol=="5"){
	$objPHPExcel->getActiveSheet()->setCellValue('ay43', "X");
	}
	
	if($autosol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('c47', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('i47', $marcasol);
	}
	if($autosol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('f47', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('b53', $puestosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('t53', $depasol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aw53', $desdesol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b57', $compasol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq57', $compatelsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('ar57', $compatelsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('as57', $compatelsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('at57', $compatelsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('au57', $compatelsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('av57', $compatelsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('aw57', $compatelsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('ax57', $compatelsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('ay57', $compatelsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('az57', $compatelsol10);
	$objPHPExcel->getActiveSheet()->setCellValue('av59', $compatelsolext);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b61', $nomref1);
	$objPHPExcel->getActiveSheet()->setCellValue('x61', $parenref1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq61', $telref11);
	$objPHPExcel->getActiveSheet()->setCellValue('ar61', $telref12);
	$objPHPExcel->getActiveSheet()->setCellValue('as61', $telref13);
	$objPHPExcel->getActiveSheet()->setCellValue('at61', $telref14);
	$objPHPExcel->getActiveSheet()->setCellValue('au61', $telref15);
	$objPHPExcel->getActiveSheet()->setCellValue('av61', $telref16);
	$objPHPExcel->getActiveSheet()->setCellValue('aw61', $telref17);
	$objPHPExcel->getActiveSheet()->setCellValue('ax61', $telref18);
	$objPHPExcel->getActiveSheet()->setCellValue('ay61', $telref19);
	$objPHPExcel->getActiveSheet()->setCellValue('az61', $telref110);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b65', $nomref2);
	$objPHPExcel->getActiveSheet()->setCellValue('x65', $parenref2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq65', $telref21);
	$objPHPExcel->getActiveSheet()->setCellValue('ar65', $telref22);
	$objPHPExcel->getActiveSheet()->setCellValue('as65', $telref23);
	$objPHPExcel->getActiveSheet()->setCellValue('at65', $telref24);
	$objPHPExcel->getActiveSheet()->setCellValue('au65', $telref25);
	$objPHPExcel->getActiveSheet()->setCellValue('av65', $telref26);
	$objPHPExcel->getActiveSheet()->setCellValue('aw65', $telref27);
	$objPHPExcel->getActiveSheet()->setCellValue('ax65', $telref28);
	$objPHPExcel->getActiveSheet()->setCellValue('ay65', $telref29);
	$objPHPExcel->getActiveSheet()->setCellValue('az65', $telref210);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b69', $refbanc);
	$objPHPExcel->getActiveSheet()->setCellValue('x69', $tarjrefbanc);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b73', $cargdir);
	$objPHPExcel->getActiveSheet()->setCellValue('x73', $nocuentcd);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b77', $conyunom.' '.$ApPatDatCon.' '.$ApMatDatCon);
	$objPHPExcel->getActiveSheet()->setCellValue('ab77', $compaconyu);
	$objPHPExcel->getActiveSheet()->setCellValue('at77', $puestconyu);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b81', $datobnom1);
	$objPHPExcel->getActiveSheet()->setCellValue('h81', $datobappat1);
	$objPHPExcel->getActiveSheet()->setCellValue('r81', $datobapmat1);
	$objPHPExcel->getActiveSheet()->setCellValue('b85', $datobdir1);
	$objPHPExcel->getActiveSheet()->setCellValue('b89', $datobcol1);
	$objPHPExcel->getActiveSheet()->setCellValue('ab89', $datobcd1);
	$objPHPExcel->getActiveSheet()->setCellValue('ag89', $datoblugnac1);
	if($datobprop1=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('as89', "X");
	}
	if($datobprop1=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('aw89', "X");
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b94', $datobedo1);
	$objPHPExcel->getActiveSheet()->setCellValue('j94', $datobcp1);
	$objPHPExcel->getActiveSheet()->setCellValue('q94', $datobmail1);
	
	if($datobsex1=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ad94', "X");
	}
	if($datobsex1=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('ag94', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('aj94', $datobfechnac1d);
	$objPHPExcel->getActiveSheet()->setCellValue('am94', $datobfechnac1m);
	$objPHPExcel->getActiveSheet()->setCellValue('aq94', $datobfechnac1a);
	
	$objPHPExcel->getActiveSheet()->setCellValue('av94', $datobed1);
	$objPHPExcel->getActiveSheet()->setCellValue('ab85', $datobcurp1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ab81', $datobrfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('ac81', $datobrfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('ad81', $datobrfc13);
	$objPHPExcel->getActiveSheet()->setCellValue('ae81', $datobrfc14);
	$objPHPExcel->getActiveSheet()->setCellValue('af81', $datobrfc15);
	$objPHPExcel->getActiveSheet()->setCellValue('ag81', $datobrfc16);
	$objPHPExcel->getActiveSheet()->setCellValue('ah81', $datobrfc17);
	$objPHPExcel->getActiveSheet()->setCellValue('ai81', $datobrfc18);
	$objPHPExcel->getActiveSheet()->setCellValue('aj81', $datobrfc19);
	$objPHPExcel->getActiveSheet()->setCellValue('ak81', $datobrfc110);
	$objPHPExcel->getActiveSheet()->setCellValue('al81', $datobrfc111);
	$objPHPExcel->getActiveSheet()->setCellValue('am81', $datobrfc112);
	$objPHPExcel->getActiveSheet()->setCellValue('an81', $datobrfc113);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq81', $datobtel11);
	$objPHPExcel->getActiveSheet()->setCellValue('ar81', $datobtel12);
	$objPHPExcel->getActiveSheet()->setCellValue('as81', $datobtel13);
	$objPHPExcel->getActiveSheet()->setCellValue('at81', $datobtel14);
	$objPHPExcel->getActiveSheet()->setCellValue('au81', $datobtel15);
	$objPHPExcel->getActiveSheet()->setCellValue('av81', $datobtel16);
	$objPHPExcel->getActiveSheet()->setCellValue('aw81', $datobtel17);
	$objPHPExcel->getActiveSheet()->setCellValue('ax81', $datobtel18);
	$objPHPExcel->getActiveSheet()->setCellValue('ay81', $datobtel19);
	$objPHPExcel->getActiveSheet()->setCellValue('az81', $datobtel110);
	////
	
	$objPHPExcel->getActiveSheet()->setCellValue('b102', $datobnom2);
	$objPHPExcel->getActiveSheet()->setCellValue('h102', $datobappat2);
	$objPHPExcel->getActiveSheet()->setCellValue('r102', $datobapmat2);
	$objPHPExcel->getActiveSheet()->setCellValue('b106', $datobdir2);
	$objPHPExcel->getActiveSheet()->setCellValue('b110', $datobcol2);
	$objPHPExcel->getActiveSheet()->setCellValue('ab111', $datobcd2);
	$objPHPExcel->getActiveSheet()->setCellValue('ag111', $datoblugnac2);
	if($datobprop2=="Si"){
	$objPHPExcel->getActiveSheet()->setCellValue('as110', "X");
	}
	if($datobprop2=="No"){
	$objPHPExcel->getActiveSheet()->setCellValue('aw110', "X");
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b115', $datobedo2);
	$objPHPExcel->getActiveSheet()->setCellValue('j115', $datobcp2);
	$objPHPExcel->getActiveSheet()->setCellValue('q115', $datobmail2);
	
	if($datobsex2=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ad115', "X");
	}
	if($datobsex2=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('ag115', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('aj115', $datobfechnac2d);
	$objPHPExcel->getActiveSheet()->setCellValue('am115', $datobfechnac2m);
	$objPHPExcel->getActiveSheet()->setCellValue('aq115', $datobfechnac2a);
	
	$objPHPExcel->getActiveSheet()->setCellValue('av115', $datobed2);
	$objPHPExcel->getActiveSheet()->setCellValue('ab106', $datobcurp2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ab102', $datobrfc21);
	$objPHPExcel->getActiveSheet()->setCellValue('ac102', $datobrfc22);
	$objPHPExcel->getActiveSheet()->setCellValue('ad102', $datobrfc23);
	$objPHPExcel->getActiveSheet()->setCellValue('ae102', $datobrfc24);
	$objPHPExcel->getActiveSheet()->setCellValue('af102', $datobrfc25);
	$objPHPExcel->getActiveSheet()->setCellValue('ag102', $datobrfc26);
	$objPHPExcel->getActiveSheet()->setCellValue('ah102', $datobrfc27);
	$objPHPExcel->getActiveSheet()->setCellValue('ai102', $datobrfc28);
	$objPHPExcel->getActiveSheet()->setCellValue('aj102', $datobrfc29);
	$objPHPExcel->getActiveSheet()->setCellValue('ak102', $datobrfc210);
	$objPHPExcel->getActiveSheet()->setCellValue('al102', $datobrfc211);
	$objPHPExcel->getActiveSheet()->setCellValue('am102', $datobrfc212);
	$objPHPExcel->getActiveSheet()->setCellValue('an102', $datobrfc213);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq102', $datobtel21);
	$objPHPExcel->getActiveSheet()->setCellValue('ar102', $datobtel22);
	$objPHPExcel->getActiveSheet()->setCellValue('as102', $datobtel23);
	$objPHPExcel->getActiveSheet()->setCellValue('at102', $datobtel24);
	$objPHPExcel->getActiveSheet()->setCellValue('au102', $datobtel25);
	$objPHPExcel->getActiveSheet()->setCellValue('av102', $datobtel26);
	$objPHPExcel->getActiveSheet()->setCellValue('aw102', $datobtel27);
	$objPHPExcel->getActiveSheet()->setCellValue('ax102', $datobtel28);
	$objPHPExcel->getActiveSheet()->setCellValue('ay102', $datobtel29);
	$objPHPExcel->getActiveSheet()->setCellValue('az102', $datobtel210);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b152', $clavcon);
	$objPHPExcel->getActiveSheet()->setCellValue('n152', $nomcons);
	$objPHPExcel->getActiveSheet()->setCellValue('at152', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('b155', $nomvend);
	$objPHPExcel->getActiveSheet()->setCellValue('y155', $gerentegral);
	
	if($tipocredito=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('an6', "X");
	}
	if($tipocredito=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('ay6', "X");
	}
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq85', $_REQUEST['datobtel112']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar85', $_REQUEST['datobtel122']);
	$objPHPExcel->getActiveSheet()->setCellValue('as85', $_REQUEST['datobtel132']);
	$objPHPExcel->getActiveSheet()->setCellValue('at85', $_REQUEST['datobtel142']);
	$objPHPExcel->getActiveSheet()->setCellValue('au85', $_REQUEST['datobtel152']);
	$objPHPExcel->getActiveSheet()->setCellValue('av85', $_REQUEST['datobtel162']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw85', $_REQUEST['datobtel172']);
	$objPHPExcel->getActiveSheet()->setCellValue('ax85', $_REQUEST['datobtel182']);
	$objPHPExcel->getActiveSheet()->setCellValue('ay85', $_REQUEST['datobtel192']);
	$objPHPExcel->getActiveSheet()->setCellValue('az85', $_REQUEST['datobtel1102']);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('aq106', $_REQUEST['datobtel212']);
	$objPHPExcel->getActiveSheet()->setCellValue('aR106', $_REQUEST['datobtel222']);
	$objPHPExcel->getActiveSheet()->setCellValue('aS106', $_REQUEST['datobtel232']);
	$objPHPExcel->getActiveSheet()->setCellValue('aT106', $_REQUEST['datobtel242']);
	$objPHPExcel->getActiveSheet()->setCellValue('au106', $_REQUEST['datobtel252']);
	$objPHPExcel->getActiveSheet()->setCellValue('av106', $_REQUEST['datobtel262']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw106', $_REQUEST['datobtel272']);
	$objPHPExcel->getActiveSheet()->setCellValue('ax106', $_REQUEST['datobtel282']);
	$objPHPExcel->getActiveSheet()->setCellValue('ay106', $_REQUEST['datobtel292']);
	$objPHPExcel->getActiveSheet()->setCellValue('az106', $_REQUEST['datobtel2102']);
	
	
	
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'images/logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AI167');
$objDrawing->setCoordinates('AI241');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'images/logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AI167');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());  

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'images/logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AJ1');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('E174', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('I251', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('AN398', $fecha);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AH251', $cliente);


	if($_REQUEST['escliente']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AN174', "ü");
	}
	if($_REQUEST['escliente']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AX174', "ü");
	}

	if($_REQUEST['select']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M191', "Otra");
	$objPHPExcel->getActiveSheet()->setCellValue('X191', "1");
	$select="Otra";
	}
	if($_REQUEST['select']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M191', "Informal");
	$objPHPExcel->getActiveSheet()->setCellValue('X191', "2");
	$select="Informal";
	}
	if($_REQUEST['select']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M191', "Vulnerable");
	$objPHPExcel->getActiveSheet()->setCellValue('X191', "3");
	$select="Vulnerable";
	}
	
	
	if($_REQUEST['select2']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('M192', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('X192', "0");
	$select2="N/A";
	}
	if($_REQUEST['select2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M192', "7-10 años");
	$objPHPExcel->getActiveSheet()->setCellValue('X192', "1");
	$select2="7-10 años";
	}
	if($_REQUEST['select2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M192', "4-6 años");
	$objPHPExcel->getActiveSheet()->setCellValue('X192', "2");
	$select2="4-6 años";
	}
	if($_REQUEST['select2']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M192', "1-3 años");
	$objPHPExcel->getActiveSheet()->setCellValue('X192', "3");
	$select2="1-3 años";
	}
	
	
	
	if($_REQUEST['select3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M193', "Prestamo");
	$objPHPExcel->getActiveSheet()->setCellValue('X193', "1");
	$select3="Prestamo";
	}
	if($_REQUEST['select3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M193', "Arrendamiento");
	$objPHPExcel->getActiveSheet()->setCellValue('X193', "2");
	$select3="Arrendamiento";
	}
	if($_REQUEST['select3']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M193', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('X193', "3");
	$select3="Otros";
	}
	
	
	if($_REQUEST['select4']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('M194', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('X194', "0");
	$select4="N/A";
	}
	if($_REQUEST['select4']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M194', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('X194', "1");
	$select4="1 a 2";
	}
	if($_REQUEST['select4']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M194', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('X194', "2");
	$select4="3 a 4";
	}
	if($_REQUEST['select4']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M194', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('X194', "3");
	$select4="5 o mas";
	}
	
	
	if($_REQUEST['select5']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('M195', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('X195', "0");
	$select5="N/A";
	}
	if($_REQUEST['select5']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M195', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('X195', "1");
	$select5="1 a 2";
	}
	if($_REQUEST['select5']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M195', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('X195', "2");
	$select5="3 a 4";
	}
	if($_REQUEST['select5']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M195', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('X195', "3");
	$select5="5 o mas";
	}
	
	
	if($_REQUEST['select6']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M196', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('X196', "1");
	$select6="1% - 49%";
	}
	if($_REQUEST['select6']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M196', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('X196', "2");
	$select6="50% - 74%";
	}
	if($_REQUEST['select6']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M196', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('X196', "3");
	$select6="75% - 100%";
	}
	
	
	if($_REQUEST['select7']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M197', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('X197', "1");
	$select7="1% - 49%";
	}
	if($_REQUEST['select7']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M197', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('X197', "2");
	$select7="50% - 74%";
	}
	if($_REQUEST['select7']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M197', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('X197', "3");
	$select7="75% - 100%";
	}
	
	
	if($_REQUEST['select8']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M198', "$18000 - $20000");
	$objPHPExcel->getActiveSheet()->setCellValue('X198', "1");
	$select8="$18000 - $20000";
	}
	if($_REQUEST['select8']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M198', "$21000 - $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('X198', "2");
	$select8="$21000 - $25000";
	}
	if($_REQUEST['select8']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M198', "mas de $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('X198', "3");
	$select8="mas de $25000";
	}
	
	
	if($_REQUEST['select9']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M199', "1 a 3");
	$objPHPExcel->getActiveSheet()->setCellValue('X199', "1");
	$select9="1 a 3";
	}
	if($_REQUEST['select9']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M199', "4 a 6");
	$objPHPExcel->getActiveSheet()->setCellValue('X199', "2");
	$select9="4 a 6";
	}
	if($_REQUEST['select9']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M199', "7 a 10");
	$objPHPExcel->getActiveSheet()->setCellValue('X199', "3");
	$select9="7 a 10";
	}
	
	
	if($_REQUEST['select10']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M200', "Transferencia");
	$objPHPExcel->getActiveSheet()->setCellValue('X200', "1");
	$select10="Transferencia";
	}
	if($_REQUEST['select10']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M200', "Cheque");
	$objPHPExcel->getActiveSheet()->setCellValue('X200', "2");
	$select10="Cheque";
	}
	if($_REQUEST['select10']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M200', "Efectivo");
	$objPHPExcel->getActiveSheet()->setCellValue('X200', "3");
	$select10="Efectivo";
	}
	
	
	
	if($_REQUEST['select11']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M201', "Agencia");
	$objPHPExcel->getActiveSheet()->setCellValue('X201', "1");
	$select11="Agencia";
	}
	if($_REQUEST['select11']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M201', "Internet");
	$objPHPExcel->getActiveSheet()->setCellValue('X201', "2");
	$select11="Internet";
	}
	if($_REQUEST['select11']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M201', "Otro");
	$objPHPExcel->getActiveSheet()->setCellValue('X201', "3");
	$select11="Otro";
	}
	
	
	if($_REQUEST['select12']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M202', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('X202', "1");
	$select12="México";
	}
	if($_REQUEST['select12']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M202', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('X202', "2");
	$select12="Otros";
	}
	if($_REQUEST['select12']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M202', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('X202', "3");
	$select12="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	if($_REQUEST['select13']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M203', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('X203', "1");
	$select13="Puebla-Coahuila-Zcatecas-Hidalgo-Durango";
	}
	if($_REQUEST['select13']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M203', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('X203', "2");
	$select13="Durango-Chihuhua-Jalisco-México-CD México-Sonora";
	}
	if($_REQUEST['select13']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M203', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('X203', "3");
	$select13="Guerrero-Michoacan-Tamaulipas-Morelos";
	}
	
	if($_REQUEST['select14']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M204', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('X204', "1");
	$select14="Puebla-Coahuila-Zcatecas-Hidalgo-Durango";
	}
	if($_REQUEST['select14']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M204', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('X204', "2");
	$select14="Durango-Chihuhua-Jalisco-México-CD México-Sonora";
	}
	if($_REQUEST['select14']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M204', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('X204', "3");
	$select14="Guerrero-Michoacan-Tamaulipas-Morelos";
	}
	
	
	if($_REQUEST['select15']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M205', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('X205', "1");
	$select15="México";
	}
	if($_REQUEST['select15']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M205', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('X205', "2");
	$select15="Otros";
	}
	if($_REQUEST['select15']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M205', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('X205', "3");
	$select15="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	if($_REQUEST['select16']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M206', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('X206', "1");
	$select16="México";
	}
	if($_REQUEST['select16']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M206', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('X206', "2");
	$select16="Otros";
	}
	if($_REQUEST['select16']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M206', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('X206', "3");
	$select16="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	if($_REQUEST['select17']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('M207', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('X207', "1");
	$select17="Otros";
	}
	if($_REQUEST['select17']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('M207', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('X207', "2");
	$select17="Otros";
	}
	if($_REQUEST['select17']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('M207', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('X207', "3");
	$select17="Otros";
	}
	
	
	
	$suma=$_REQUEST['select']+$_REQUEST['select2']+$_REQUEST['select3']+$_REQUEST['select4']+$_REQUEST['select5']+$_REQUEST['select6']+$_REQUEST['select7']+$_REQUEST['select8']+$_REQUEST['select9']+$_REQUEST['select10']+$_REQUEST['select11']+$_REQUEST['select12']+$_REQUEST['select13']+$_REQUEST['select14']+$_REQUEST['select15']+$_REQUEST['select16']+$_REQUEST['select17'];
	
	if(21<=$suma && $suma<=29){
	$objPHPExcel->getActiveSheet()->setCellValue('Z213', "Bajo");
	$objPHPExcel->getActiveSheet()->setCellValue('V188', "P");
	$GradoRiesgo="Bajo";
	}
	if(30<=$suma && $suma<=45){
	$objPHPExcel->getActiveSheet()->setCellValue('Z213', "Medio");
	$objPHPExcel->getActiveSheet()->setCellValue('AA188', "P");
	$GradoRiesgo="Medio";
	}
	if(45<$suma){
	$objPHPExcel->getActiveSheet()->setCellValue('Z213', "Alto");
	$objPHPExcel->getActiveSheet()->setCellValue('AG188', "P");
	$GradoRiesgo="Alto";
	}
	
	
	
	
	include("Conexion2.php");
	
	
	
	
	
	if($tipocredito=="1"){
	$tipocredito="Credit";
	}
	if($tipocredito=="2"){
	$tipocredito="Premium Credit";
	}
	$NomSolicitante="";

	if($segnomsol!=""){
	$NomSolicitante.=$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol;
	}else{
	$NomSolicitante.=$nomsol.' '.$apepasol.' '.$apemasol;
	}
	$objPHPExcel->getActiveSheet()->setCellValue('J178', $NomSolicitante);
	$objPHPExcel->getActiveSheet()->setCellValue('b254', $apepasol);
	$objPHPExcel->getActiveSheet()->setCellValue('x254', $apemasol);
	$objPHPExcel->getActiveSheet()->setCellValue('al254', $nomsol.' '.$segnomsol);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('J179', $cliente);
	$objPHPExcel->getActiveSheet()->setCellValue('J180', $dirsol);
	$objPHPExcel->getActiveSheet()->setCellValue('b264', $dirsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J181', $colsol);
	$objPHPExcel->getActiveSheet()->setCellValue('b269', $colsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J182', $_REQUEST['textfield5']);
	$objPHPExcel->getActiveSheet()->setCellValue('r269', $_REQUEST['textfield22']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J183', $edosol);
	$objPHPExcel->getActiveSheet()->setCellValue('z269', $edosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN181', $cpsol);
	$objPHPExcel->getActiveSheet()->setCellValue('ap264', $cpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN182', $cdsol);
	$objPHPExcel->getActiveSheet()->setCellValue('ah269', $cdsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN183', $lugnacsol);
	
	
	
$RFCSolicitante="";
$RFCSolicitante.=$rfc1.$rfc2.$rfc3.$rfc4.$rfc5.$rfc6.$rfc7.$rfc8.$rfc9.$rfc10.$rfc11.$rfc12.$rfc13;
	$objPHPExcel->getActiveSheet()->setCellValue('AN184', $RFCSolicitante);
	$objPHPExcel->getActiveSheet()->setCellValue('b279', $RFCSolicitante.' / '.$_REQUEST['textfield30']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN279', $_REQUEST['textfield32']);
	
	$Ocupacion_Profesion=$_REQUEST['textfield32'];
	

	$TelSolicitante="";
	$TelSolicitante.=$telsol1.$telsol2.$telsol3.$telsol4.$telsol5.$telsol6.$telsol7.$telsol8.$telsol9.$telsol10;
	$objPHPExcel->getActiveSheet()->setCellValue('aq269', $TelSolicitante);
	
	$MovSolicitante="";
	$MovSolicitante.=$movsol1.$movsol2.$movsol3.$movsol4.$movsol5.$movsol6.$movsol7.$movsol8.$movsol9.$movsol10;
	
	$FeNacDatGen="";
	$FeNacDatGen.=$fechnacsol3.'-'.$fechnacsol2.'-'.$fechnacsol1;
	$objPHPExcel->getActiveSheet()->setCellValue('J184', $FeNacDatGen);
	$objPHPExcel->getActiveSheet()->setCellValue('an259', $FeNacDatGen);
	$OtrvivDatGen="";
	$VivDatGen="";
	if($vivsol=="1"){
	$VivDatGen="Casa Propia";
	}
	if($vivsol=="2"){
	$VivDatGen="Rentada";
	}
	if($vivsol=="3"){
	$VivDatGen="Hipotecada";
	}
	if($vivsol=="4"){
	$VivDatGen="Casa propiedad de sus familiares";
	}
	if($vivsol=="5"){
	$VivDatGen="Otros especificar";
	$OtrvivDatGen=$vivsolesp;
	}
	
	$EstCivDatGen="";
	if($civilsol=="1"){
	$EstCivDatGen="Casado Bienes Mancomunados";
	}
	if($civilsol=="2"){
	$EstCivDatGen="Casado Bienes Separados";
	}
	if($civilsol=="3"){
	$EstCivDatGen="Viudo";
	}
	if($civilsol=="4"){
	$EstCivDatGen="Divorciado";
	}
	if($civilsol=="5"){
	$EstCivDatGen="Soltero";
	}
	
	//////////////
	$objPHPExcel->getActiveSheet()->setCellValue('b274', $EstCivDatGen);
	$objPHPExcel->getActiveSheet()->setCellValue('U274', $mailsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AO274', $curpsol);
	$objPHPExcel->getActiveSheet()->setCellValue('w279', $nacsol);
	$objPHPExcel->getActiveSheet()->setCellValue('B284', $compasol);
	$objPHPExcel->getActiveSheet()->setCellValue('W284', $_REQUEST['textfield34']);
	$objPHPExcel->getActiveSheet()->setCellValue('AQ284', $_REQUEST['textfield35']);
	$objPHPExcel->getActiveSheet()->setCellValue('B289', $puestosol);
	$objPHPExcel->getActiveSheet()->setCellValue('S289', $_REQUEST['textfield37']);
	$objPHPExcel->getActiveSheet()->setCellValue('AK289', $_REQUEST['textfield38']);
	$objPHPExcel->getActiveSheet()->setCellValue('M321', $_REQUEST['textfield39']);
	$objPHPExcel->getActiveSheet()->setCellValue('M322', $_REQUEST['textfield40']);
	$objPHPExcel->getActiveSheet()->setCellValue('M323', $_REQUEST['textfield41']);
	$objPHPExcel->getActiveSheet()->setCellValue('M324', $_REQUEST['textfield42']);
	$objPHPExcel->getActiveSheet()->setCellValue('M325', $_REQUEST['textfield43']);
	$objPHPExcel->getActiveSheet()->setCellValue('M326', $_REQUEST['textfield44']);
	
	
	
	
	
	if($_REQUEST['adjuntos1']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W331', "P");
	}
	if($_REQUEST['adjuntos1']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA331', "P");
	}
	
	if($_REQUEST['adjuntos2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W332', "P");
	}
	if($_REQUEST['adjuntos2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA332', "P");
	}
	
	if($_REQUEST['adjuntos3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W334', "P");
	}
	if($_REQUEST['adjuntos3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA334', "P");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('C342', $_REQUEST['textfield45']);
	$objPHPExcel->getActiveSheet()->setCellValue('V342', $_REQUEST['textfield46']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN342', $_REQUEST['textfield47']);
	$objPHPExcel->getActiveSheet()->setCellValue('B347', $_REQUEST['textfield48']);
	$objPHPExcel->getActiveSheet()->setCellValue('R347', $_REQUEST['textfield49']);
	$objPHPExcel->getActiveSheet()->setCellValue('AF347', $_REQUEST['textfield50']);
	$objPHPExcel->getActiveSheet()->setCellValue('AS347', $_REQUEST['textfield51']);
	$objPHPExcel->getActiveSheet()->setCellValue('B353', $_REQUEST['textfield52']);
	$objPHPExcel->getActiveSheet()->setCellValue('W353', $_REQUEST['textfield53']);
	$objPHPExcel->getActiveSheet()->setCellValue('AO353', $_REQUEST['textfield54']);
	$objPHPExcel->getActiveSheet()->setCellValue('B358', $_REQUEST['textfield55']." - ".$_REQUEST['textfield56']);
	$objPHPExcel->getActiveSheet()->setCellValue('X358', $_REQUEST['textfield57']);
	$objPHPExcel->getActiveSheet()->setCellValue('AS358', $_REQUEST['textfield58']);
	$objPHPExcel->getActiveSheet()->setCellValue('B363', $_REQUEST['textfield59']);
	$objPHPExcel->getActiveSheet()->setCellValue('X363', $_REQUEST['textfield60']);
	$objPHPExcel->getActiveSheet()->setCellValue('AQ363', $_REQUEST['textfield61']);
	$objPHPExcel->getActiveSheet()->setCellValue('B368', $_REQUEST['textfield62']);
	$objPHPExcel->getActiveSheet()->setCellValue('X368', $_REQUEST['textfield63']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN368', $_REQUEST['textfield64']);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('I400', $_REQUEST['textfield65']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB400', $_REQUEST['textfield66']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I402', $_REQUEST['textfield67']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB402', $_REQUEST['textfield68']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I404', $_REQUEST['textfield69']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB404', $_REQUEST['textfield70']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I406', $_REQUEST['textfield71']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB406', $_REQUEST['textfield72']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I408', $_REQUEST['textfield73']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB408', $_REQUEST['textfield74']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I410', $_REQUEST['textfield75']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB410', $_REQUEST['textfield76']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I412', $_REQUEST['textfield77']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB412', $_REQUEST['textfield78']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I414', $_REQUEST['textfield79']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB414', $_REQUEST['textfield80']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I416', $_REQUEST['textfield81']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB416', $_REQUEST['textfield82']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I418', $_REQUEST['textfield83']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB418', $_REQUEST['textfield84']);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('K420', $_REQUEST['textfield85']);
	$objPHPExcel->getActiveSheet()->setCellValue('K422', $_REQUEST['textfield86']);
	$objPHPExcel->getActiveSheet()->setCellValue('K423', $_REQUEST['textfield87']);
	$objPHPExcel->getActiveSheet()->setCellValue('K424', $_REQUEST['textfield88']);
	$objPHPExcel->getActiveSheet()->setCellValue('K425', $_REQUEST['textfield89']);
	$objPHPExcel->getActiveSheet()->setCellValue('K426', $_REQUEST['textfield90']);
	$objPHPExcel->getActiveSheet()->setCellValue('K427', $_REQUEST['textfield91']);
	$objPHPExcel->getActiveSheet()->setCellValue('K428', $_REQUEST['textfield92']);
	
	
	if($_REQUEST['PEPS']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W484', "P");
	$objPHPExcel->getActiveSheet()->setCellValue('H488', $_REQUEST['textfield93']);
	$objPHPExcel->getActiveSheet()->setCellValue('AF488', $_REQUEST['textfield94']);
	$objPHPExcel->getActiveSheet()->setCellValue('H490', $_REQUEST['textfield95']);
	}
	if($_REQUEST['PEPS']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AB484', "P");
	}
	
	
	////////////////	
	
	$PropInmuDatGen="";
	if($inmusol=="1"){
	$PropInmuDatGen="Si";
	}
	if($inmusol=="2"){
	$PropInmuDatGen="No";
	}
	$MarDatGen="";
	$AuPropDatGen="";
	if($autosol=="1"){
	$AuPropDatGen="Si";
	$MarDatGen=$marcasol;
	}
	if($autosol=="2"){
	$AuPropDatGen="No";
	}
	
	$SexoDatGen="";
	if($sexsol=="M"){
	$SexoDatGen="Masculino";
	}
	if($sexsol=="F"){
	$SexoDatGen="Femenino";
	}

	$TelDatEmp="";
	$TelDatEmp.=$compatelsol1.$compatelsol2.$compatelsol3.$compatelsol4.$compatelsol5.$compatelsol6.$compatelsol7.$compatelsol8.$compatelsol9.$compatelsol10;
	
	$TelRefPer="";
	$TelRefPer.=$telref11.$telref12.$telref13.$telref14.$telref15.$telref16.$telref17.$telref18.$telref19.$telref110;
	
	$TelRefPer2="";
	$TelRefPer2.=$telref21.$telref22.$telref23.$telref24.$telref25.$telref26.$telref27.$telref28.$telref29.$telref210;
	
	$NomObSol="";
	$NomObSol.=$datobnom1.' '.$datobappat1.' '.$datobapmat1;
	
	$RFCObSol="";
	$RFCObSol.=$datobrfc11.$datobrfc12.$datobrfc13.$datobrfc14.$datobrfc15.$datobrfc16.$datobrfc17.$datobrfc18.$datobrfc19.$datobrfc110.$datobrfc111.$datobrfc112.$datobrfc113;
	
	$TelObSol="";
	$TelObSol.=$datobtel11.$datobtel12.$datobtel13.$datobtel14.$datobtel15.$datobtel16.$datobtel17.$datobtel18.$datobtel19.$datobtel110;
	
	
	$MovObSol="";
	$MovObSol.=$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102'];
	$PropObSol="";
	if($datobprop1=="1"){
	$PropObSol="Si";
	}
	if($datobprop1=="2"){
	$PropObSol="No";
	}
	
	$FeNacObSol="";
	$FeNacObSol.=$datobfechnac1a.$datobfechnac1m.$datobfechnac1d;
	
	$SexoObSol="";
	if($datobsex1=="M"){
	$SexoObSol.="Masculino";
	}
	if($datobsex1=="F"){
	$SexoObSol.="Femenino";
	}
	
	$NomObSol2="";
	$NomObSol2.=$datobnom2.' '.$datobappat2.' '.$datobapmat2;
	
	$RFCObSol2="";
	$RFCObSol2.=$datobrfc21.$datobrfc22.$datobrfc23.$datobrfc24.$datobrfc25.$datobrfc26.$datobrfc27.$datobrfc28.$datobrfc29.$datobrfc210.$datobrfc211.$datobrfc212.$datobrfc213;
	
	$TelObSol2="";
	$TelObSol2.=$datobtel21.$datobtel22.$datobtel23.$datobtel24.$datobtel25.$datobtel26.$datobtel27.$datobtel28.$datobtel29.$datobtel210;
	
	
	$MovObSol2="";
	$MovObSol2.=$_REQUEST['datobtel212'].$_REQUEST['datobtel222'].$_REQUEST['datobtel232'].$_REQUEST['datobtel242'].$_REQUEST['datobtel252'].$_REQUEST['datobtel262'].$_REQUEST['datobtel272'].$_REQUEST['datobtel282'].$_REQUEST['datobtel292'].$_REQUEST['datobtel2102'];
	
	$PropObSol2="";
	if($datobprop2=="Si"){
	$PropObSol2="Si";
	}
	if($datobprop2=="No"){
	$PropObSol2="No";
	}
	
	$SexoObSol2="";
	if($datobsex2=="M"){
	$SexoObSol2="Masculino";
	}
	if($datobsex2=="F"){
	$SexoObSol2="Femenino";
	}
	
	$FeNacObSol2="";
	$FeNacObSol2.=$datobfechnac2a.$datobfechnac2m.$datobfechnac2d;
	
	/////datos Anexos 
	//$numeroDirSol=$_REQUEST['dirnumsol'];
	$municipioSol=$_REQUEST['textfield5'];
	$numSerieFiel=$_REQUEST['textfield30'];
	$domicilioLaboral=$_REQUEST['textfield34'];
	$SueldoSolicitante=$_REQUEST['textfield35'];
	$ActividadAdicional=$_REQUEST['textfield37'];
	$IngAdMensualAprox=$_REQUEST['textfield38'];
	$INESolicitante=$_REQUEST['textfield39'];
	 $copias="";
	$copias2="";
	$copias3="";
	$copias4="";
	$copias5="";
	if($INESolicitante!=""){
		if($_REQUEST['copias']=="1"){
			$copias="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AD321', "P");
		}
		if($_REQUEST['copias']=="2"){
			$copias="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AH321', "P");
		}
	}
	$Pasaporte_o_CedulaProfSolicitante=$_REQUEST['textfield40'];
	if($Pasaporte_o_CedulaProfSolicitante!=""){
		if($_REQUEST['copias2']=="1"){
			$copias2="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AD322', "P");
		}
		if($_REQUEST['copias2']=="2"){
			$copias2="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AD322', "P");
		}
	}
	$CartillaMilitarSolicitante=$_REQUEST['textfield41'];
	if($CartillaMilitarSolicitante!=""){
		if($_REQUEST['copias3']=="1"){
			$copias3="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AD323', "P");
		}
		if($_REQUEST['copias3']=="2"){
			$copias3="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AD323', "P");
		}
	}
	$LicenciaConducirSolicitante=$_REQUEST['textfield42'];
	if($LicenciaConducirSolicitante!=""){
		if($_REQUEST['copias4']=="1"){
			$copias4="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AD324', "P");
		}
		if($_REQUEST['copias4']=="2"){
			$copias4="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AD324', "P");
		}
	}
	$OtraIdentSolicitante=$_REQUEST['textfield43'];
	$EspIdentSolicitante="";
	if($OtraIdentSolicitante!=""){
		if($_REQUEST['copias5']=="1"){
			$copias5="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AD325', "P");
		}
		if($_REQUEST['copias5']=="2"){
			$copias5="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AD325', "P");
		}
		$EspIdentSolicitante=$_REQUEST['textfield44'];
	}

	if($LicenciaConducirSolicitante!="" || $OtraIdentSolicitante!="" || $CartillaMilitarSolicitante!="" || $Pasaporte_o_CedulaProfSolicitante!="" || $INESolicitante!=""){
		if($_REQUEST['cotejo']=="1"){
			$cotejo="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AD326', "P");
		}
		if($_REQUEST['cotejo']=="2"){
			$cotejo="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AD326', "P");
		}
	}

		$fechaComprobante=$_REQUEST['fechaComprobante'];
		$objPHPExcel->getActiveSheet()->setCellValue('U333', $fechaComprobante);

		if($_REQUEST['adjuntos1']=="1"){
			$adjuntos1="Si";
		}
		if($_REQUEST['adjuntos1']=="2"){
			$adjuntos1="No";
		}
		if($_REQUEST['adjuntos2']=="1"){
			$adjuntos2="Si";
		}
		if($_REQUEST['adjuntos2']=="2"){
			$adjuntos2="No";
		}
		if($_REQUEST['adjuntos3']=="1"){
			$adjuntos3="Si";
		}
		if($_REQUEST['adjuntos3']=="2"){
			$adjuntos3="No";
		}

		

	$DomBeneficiario=$_REQUEST['textfield48'];
	$ColBeneficiario=$_REQUEST['textfield49'];
	$CPBeneficiario=$_REQUEST['textfield50'];
	$PaisBeneficiario=$_REQUEST['textfield51'];
	$TelBeneficiario=$_REQUEST['textfield52'];
	$CURPBeneficiario=$_REQUEST['textfield53'];
	$RFCBeneficiario=$_REQUEST['textfield54'];
	$ParentescoBeneficiario=$_REQUEST['textfield55'];
	$PorcientoBeneficiario=$_REQUEST['textfield56'];
	$FeNacBeneficiario=$_REQUEST['textfield57'];
	$MunBeneficiario=$_REQUEST['textfield58'];
	$EdoBeneficiario=$_REQUEST['textfield59'];
	$EdoCivilBeneficiario=$_REQUEST['textfield60'];
	$SoConBeneficiario=$_REQUEST['textfield61'];
	$OcuProfBeneficiario=$_REQUEST['textfield62'];
	$PEPSBeneficiario=$_REQUEST['textfield63'];
	$OrigenRecBeneficiario=$_REQUEST['textfield64'];
	$PerTrans1=$_REQUEST['textfield65'];
	$FuentePerTrans1=$_REQUEST['textfield66'];
	$PerTrans2=$_REQUEST['textfield67'];
	$FuentePerTrans2=$_REQUEST['textfield68'];
	$PerTrans3=$_REQUEST['textfield69'];
	$FuentePerTrans3=$_REQUEST['textfield70'];
	$PerTrans4=$_REQUEST['textfield71'];
	$FuentePerTrans4=$_REQUEST['textfield72'];
	$PerTrans5=$_REQUEST['textfield73'];
	$FuentePerTrans5=$_REQUEST['textfield74'];
	$PerTrans6=$_REQUEST['textfield75'];
	$FuentePerTrans6=$_REQUEST['textfield76'];
	$PerTrans7=$_REQUEST['textfield77'];
	$FuentePerTrans7=$_REQUEST['textfield78'];
	$PerTrans8=$_REQUEST['textfield79'];
	$FuentePerTrans8=$_REQUEST['textfield80'];
	$PerTrans9=$_REQUEST['textfield81'];
	$FuentePerTrans9=$_REQUEST['textfield82'];
	$PerTrans10=$_REQUEST['textfield83'];
	$FuentePerTrans10=$_REQUEST['textfield84'];
	$totalIngreso=$PerTrans1+$PerTrans2+$PerTrans3+$PerTrans4+$PerTrans5+$PerTrans6+$PerTrans7+$PerTrans8+$PerTrans9+$PerTrans10;
	$ValorAuto=$_REQUEST['textfield86'];
	$EngAutomovil=$_REQUEST['textfield87'];
	$PorEnganche=$_REQUEST['textfield88'];
	$PorFinanciamiento=$_REQUEST['textfield89'];
	$MontoFinanciado=$_REQUEST['textfield90'];
	$Plazo=$_REQUEST['textfield91'];
	$PagoMensEsp=$_REQUEST['textfield92'];
	
	if($_REQUEST['PEPS']=="1"){
			$PEPS="Si";
		}
	if($_REQUEST['PEPS']=="2"){
			$PEPS="No";
		}
	
	if ($PEPS=="Si") {
		$NombrePEPS=$_REQUEST['textfield93'];
		$ParentescoPEPS=$_REQUEST['textfield94'];
		$PuestoPEPS=$_REQUEST['textfield95'];
	} else {
		$NombrePEPS="";
		$ParentescoPEPS="";
		$PuestoPEPS="";
	}


	$objPHPExcel->getActiveSheet()->setCellValue('T264', $numeroDirSol);
	$FechaComprobanteDom=$_REQUEST['fechaComprobante'];
	

	
	if($cliente==""){
		
		mysqli_query($cnx,"insert into pfa (NomSolicitante,SegNomSolicitante,ApPatSolicitante,ApMatSolicitante,RFCSolicitante,TelSolicitante,MovSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,LugNacSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,CURPSolicitante,EmailSolicitante,SexoDatGen,FeNacDatGen,EdDatGen,NaDatGen,NoDepDatGen,AcDomDatGen,VivDatGen,OtrDatGen,PropInmuDatGen,ArDomDatGen,AnResDatGen,NomBenDatGen,ApPatBenDatGen,ApMatBenDatGen,EstCivDatGen,AuPropDatGen,MarDatGen,PuestDatEmp,DepDatEmp,DesAnDatEmp,CompDatEmp,TelDatEmp,ExtDatEmp,DomicilioLaboral,NumSerieFIEL,SueldoSolicitante,ActEcoAdicional,IngAdMensualAprox,Ocupacion_Profesion) values('$nomsol','$segnomsol','$apepasol','$apemasol','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$colsol','$cdsol','$lugnacsol','$edosol','$municipioSol','$cpsol','$curpsol','$mailsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$OtrvivDatGen','$PropInmuDatGen','$arraisol','$anosol','$benesol','$benesol2','$benesol3','$EstCivDatGen','$AuPropDatGen','$MarDatGen','$puestosol','$depasol','$desdesol','$compasol','$TelDatEmp','$compatelsolext','$domicilioLaboral','$numSerieFiel','$SueldoSolicitante','$ActividadAdicional','$IngAdMensualAprox','$Ocupacion_Profesion');");
		
		$id_pfaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pfa=$id_pfaRequest['LAST_INSERT_ID()'];
		$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pfa where Id='$id_pfa'"));
		$Folio_Cliente=$folio_request['Folio_Cliente'];
		mysqli_query($cnx,"insert into registro (Folio_Cliente,Fecha_apertura) values('$Folio_Cliente',CURDATE());");
		mysqli_query($cnx,"insert into solicitudpfa (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$Folio_Cliente','$tipocredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$tarjrefbanc','$cargdir','$nocuentcd','$conyunom','$ApPatDatCon','$ApMatDatCon','$compaconyu','$puestconyu','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

		$id_solicitudpfaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfa=$id_solicitudpfaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfa where Id='$id_solicitudpfa'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom) values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','$copias','$Pasaporte_o_CedulaProfSolicitante','$copias2','$CartillaMilitarSolicitante','$copias3','$LicenciaConducirSolicitante','$copias4','$OtraIdentSolicitante','$copias5','$EspIdentSolicitante','$cotejo','$adjuntos1','$adjuntos2','$adjuntos3','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','$PEPS','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$FechaComprobanteDom');");

		
$objPHPExcel->getActiveSheet()->setCellValue('M6', $Folio_Cliente);
$objPHPExcel->getActiveSheet()->setCellValue('AH251', $Folio_Cliente);
$objPHPExcel->getActiveSheet()->setCellValue('J179', $Folio_Cliente);
$objPHPExcel->getActiveSheet()->setCellValue('AV3', $Folio_Sol);

	}else {
		
		
		mysqli_query($cnx,"insert into solicitudpfa (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$cliente','$tipocredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$tarjrefbanc','$cargdir','$nocuentcd','$conyunom','$ApPatDatCon','$ApMatDatCon','$compaconyu','$puestconyu','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

		$id_solicitudpfaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfa=$id_solicitudpfaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfa where Id='$id_solicitudpfa'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom) values ('$Folio_Sol','$cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','$copias','$Pasaporte_o_CedulaProfSolicitante','$copias2','$CartillaMilitarSolicitante','$copias3','$LicenciaConducirSolicitante','$copias4','$OtraIdentSolicitante','$copias5','$EspIdentSolicitante','$cotejo','$adjuntos1','$adjuntos2','$adjuntos3','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','$PEPS','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$FechaComprobanteDom');");

$objPHPExcel->getActiveSheet()->setCellValue('M6', $cliente);
$objPHPExcel->getActiveSheet()->setCellValue('AV3', $Folio_Sol);
	}


	
//elementos para descargar en excel
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

//elementos para descargar excel



/*
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="01simple.pdf"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->save('php://output');
*/




if(isset($_POST['cancelar'])){
include("carpetaraiz.php");
header('Location: '.$raiz.'indexmenu.php');
}

?>