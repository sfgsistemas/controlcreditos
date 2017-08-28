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

$movsol12=$_REQUEST['movsol12'];
$movsol22=$_REQUEST['movsol22'];
$movsol32=$_REQUEST['movsol32'];
$movsol42=$_REQUEST['movsol42'];
$movsol52=$_REQUEST['movsol52'];
$movsol62=$_REQUEST['movsol62'];
$movsol72=$_REQUEST['movsol72'];
$movsol82=$_REQUEST['movsol82'];
$movsol92=$_REQUEST['movsol92'];
$movsol102=$_REQUEST['movsol102'];

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



$inmusol=$_REQUEST['inmusol'];


$arraisol=$_REQUEST['arraisol'];



$anosol2=$_REQUEST['anosol2'];

$benesol1=ucwords($_REQUEST['benesol1']);
$benesol2=ucwords($_REQUEST['benesol2']);
$benesol3=ucwords($_REQUEST['benesol3']);

$civilsol=$_REQUEST['civilsol'];

$autosol=$_REQUEST['autosol'];

$marcasol=$_REQUEST['marcasol'];



$depasol=$_REQUEST['depasol'];



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


$impmenpag=$_REQUEST['impmenpag'];

$giroprof=$_REQUEST['giroprof'];



$desdesol3=substr($_REQUEST['desdesol'], 0,4);

$desdesol2=substr($_REQUEST['desdesol'], 5,2);

$desdesol1=substr($_REQUEST['desdesol'], 8,2);



$noempleados=$_REQUEST['noempleados'];


$giroactreal=$_REQUEST['giroactreal'];

$domneg=$_REQUEST['domneg'];

$refbanc=$_REQUEST['refbanc'];

$numcuebanc=$_REQUEST['numcuebanc'];

$sucbanc1=$_REQUEST['sucbanc1'];

$refbanc2=$_REQUEST['refbanc2'];

$sucbanc2=$_REQUEST['sucbanc2'];

$aperbanc1a=substr($_REQUEST['aperbanc1d'], 0,4);

$aperbanc1m=substr($_REQUEST['aperbanc1d'], 5,2);

$aperbanc1d=substr($_REQUEST['aperbanc1d'], 8,2);


$aperbanc1a2=substr($_REQUEST['aperbanc1d2'], 0,4);

$aperbanc1m2=substr($_REQUEST['aperbanc1d2'], 5,2);

$aperbanc1d2=substr($_REQUEST['aperbanc1d2'], 8,2);



$refcomemp1=$_REQUEST['refcomemp1'];
$antirefcom1=$_REQUEST['antirefcom1'];
$telrefcom11=$_REQUEST['telrefcom11'];
$telrefcom12=$_REQUEST['telrefcom12'];
$telrefcom13=$_REQUEST['telrefcom13'];
$telrefcom14=$_REQUEST['telrefcom14'];
$telrefcom15=$_REQUEST['telrefcom15'];
$telrefcom16=$_REQUEST['telrefcom16'];
$telrefcom17=$_REQUEST['telrefcom17'];
$telrefcom18=$_REQUEST['telrefcom18'];
$telrefcom19=$_REQUEST['telrefcom19'];
$telrefcom110=$_REQUEST['telrefcom110'];




$refcomemp2=$_REQUEST['refcomemp2'];
$antirefcom2=$_REQUEST['antirefcom2'];

$telrefcom21=$_REQUEST['telrefcom21'];
$telrefcom22=$_REQUEST['telrefcom22'];
$telrefcom23=$_REQUEST['telrefcom23'];
$telrefcom24=$_REQUEST['telrefcom24'];
$telrefcom25=$_REQUEST['telrefcom25'];
$telrefcom26=$_REQUEST['telrefcom26'];
$telrefcom27=$_REQUEST['telrefcom27'];
$telrefcom28=$_REQUEST['telrefcom28'];
$telrefcom29=$_REQUEST['telrefcom29'];
$telrefcom210=$_REQUEST['telrefcom210'];

$conyuape1=ucwords($_REQUEST['conyuape1']);
$conyuape2=ucwords($_REQUEST['conyuape2']);



$nomrazsoc=$_REQUEST['nomrazsoc'];


$telpermor1=$_REQUEST['telpermor1'];
$telpermor2=$_REQUEST['telpermor2'];
$telpermor3=$_REQUEST['telpermor3'];
$telpermor4=$_REQUEST['telpermor4'];
$telpermor5=$_REQUEST['telpermor5'];
$telpermor6=$_REQUEST['telpermor6'];
$telpermor7=$_REQUEST['telpermor7'];
$telpermor8=$_REQUEST['telpermor8'];
$telpermor9=$_REQUEST['telpermor9'];
$telpermor10=$_REQUEST['telpermor10'];


$permorrfc1=$_REQUEST['permorrfc1'];
$permorrfc2=$_REQUEST['permorrfc2'];
$permorrfc3=$_REQUEST['permorrfc3'];
$permorrfc4=$_REQUEST['permorrfc4'];
$permorrfc5=$_REQUEST['permorrfc5'];
$permorrfc6=$_REQUEST['permorrfc6'];
$permorrfc7=$_REQUEST['permorrfc7'];
$permorrfc8=$_REQUEST['permorrfc8'];
$permorrfc9=$_REQUEST['permorrfc9'];
$permorrfc10=$_REQUEST['permorrfc10'];
$permorrfc11=$_REQUEST['permorrfc11'];
$permorrfc12=$_REQUEST['permorrfc12'];
$permorrfc13=$_REQUEST['permorrfc13'];

$dirpermor=$_REQUEST['dirpermor'];
$colpermor=$_REQUEST['colpermor'];
$cdpermor=$_REQUEST['cdpermor'];
$lugnacpermor=$_REQUEST['lugnacpermor'];
$edopermor=$_REQUEST['edopermor'];
$cppremor=$_REQUEST['cppremor'];

$antemp=$_REQUEST['antemp'];

$apodsusc=$_REQUEST['apodsusc'];


$actprinc=$_REQUEST['actprinc'];
$cantperson=$_REQUEST['cantperson'];

$inicoper3=substr($_REQUEST['inicoper1'], 0,4);

$inicoper2=substr($_REQUEST['inicoper1'], 5,2);

$inicoper1=substr($_REQUEST['inicoper1'], 8,2);


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


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("formatos/Solicitud_PFNA_VWL_2016sept-2.xls");




	$objPHPExcel->getActiveSheet()->setCellValue('M7', $cliente);
	$objPHPExcel->getActiveSheet()->setCellValue('B10', $nomsol);
	$objPHPExcel->getActiveSheet()->setCellValue('N10', $segnomsol);
	$objPHPExcel->getActiveSheet()->setCellValue('Ae10', $apepasol);
	$objPHPExcel->getActiveSheet()->setCellValue('An10', $apemasol);
	$objPHPExcel->getActiveSheet()->setCellValue('B14', $rfc1);
	$objPHPExcel->getActiveSheet()->setCellValue('C14', $rfc2);
	$objPHPExcel->getActiveSheet()->setCellValue('D14', $rfc3);
	$objPHPExcel->getActiveSheet()->setCellValue('E14', $rfc4);
	$objPHPExcel->getActiveSheet()->setCellValue('F14', $rfc5);
	$objPHPExcel->getActiveSheet()->setCellValue('G14', $rfc6);
	$objPHPExcel->getActiveSheet()->setCellValue('H14', $rfc7);
	$objPHPExcel->getActiveSheet()->setCellValue('I14', $rfc8);
	$objPHPExcel->getActiveSheet()->setCellValue('L14', $rfc9);
	$objPHPExcel->getActiveSheet()->setCellValue('M14', $rfc10);
	$objPHPExcel->getActiveSheet()->setCellValue('N14', $rfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('O14', $rfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('P14', $rfc13);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w14', $telsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('x14', $telsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('y14', $telsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('z14', $telsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('ac14', $telsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('ad14', $telsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('ae14', $telsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('af14', $telsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('ag14', $telsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('ah14', $telsol10);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Ac18', $movsol12);
	$objPHPExcel->getActiveSheet()->setCellValue('Ad18', $movsol22);
	$objPHPExcel->getActiveSheet()->setCellValue('Ae18', $movsol32);
	$objPHPExcel->getActiveSheet()->setCellValue('Af18', $movsol42);
	$objPHPExcel->getActiveSheet()->setCellValue('Ag18', $movsol52);
	$objPHPExcel->getActiveSheet()->setCellValue('Ah18', $movsol62);
	$objPHPExcel->getActiveSheet()->setCellValue('Ai18', $movsol72);
	$objPHPExcel->getActiveSheet()->setCellValue('Aj18', $movsol82);
	$objPHPExcel->getActiveSheet()->setCellValue('Ak18', $movsol92);
	$objPHPExcel->getActiveSheet()->setCellValue('Al18', $movsol102);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('An14', $movsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('Ao14', $movsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('Ap14', $movsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('Aq14', $movsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('Ar14', $movsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('As14', $movsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('At14', $movsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('Au14', $movsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('Av14', $movsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('Aw14', $movsol10);
	
	$numeroDirSol=$_REQUEST['dirnumsol'];
	$objPHPExcel->getActiveSheet()->setCellValue('B18', $dirsol.' #'.$numeroDirSol);
	$objPHPExcel->getActiveSheet()->setCellValue('An18', $mailsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B22', $colsol);
	$objPHPExcel->getActiveSheet()->setCellValue('Ae22', $cdsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('An22', $lugnacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B26', $edosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('r26', $cpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ae26', $curpsol);
	
	if($sexsol=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('c30', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('B320', "Masculino");
	}
	if($sexsol=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('f30', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('B320', "Femenino");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('i30', $fechnacsol1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('l30', $fechnacsol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('o30', $fechnacsol3);
	
	$objPHPExcel->getActiveSheet()->setCellValue('r30', $edsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w30', $nacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('af30', $depensol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak30', $acdomsol);
	
	if($vivsol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('e34', "X");
	}
	if($vivsol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('l34', "X");
	}
	if($vivsol=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('s34', "X");
	}
	if($vivsol=="4"){
	$objPHPExcel->getActiveSheet()->setCellValue('s35', "X");
	}
	if($vivsol=="5"){
	$objPHPExcel->getActiveSheet()->setCellValue('s35', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('w35', $impmenpag);
	
	
	if($inmusol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('af35', "X");
	}
	if($inmusol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('ai35', "X");
	}
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('ar34', $arraisol);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('k39', $anosol2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('p40', $benesol3.' '.$benesol1.' '.$benesol2);
	
	if($civilsol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L43', "X");
	}
	if($civilsol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('y43', "X");
	}
	if($civilsol=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('ag43', "X");
	}
	if($civilsol=="4"){
	$objPHPExcel->getActiveSheet()->setCellValue('ao43', "X");
	}
	if($civilsol=="5"){
	$objPHPExcel->getActiveSheet()->setCellValue('au43', "X");
	}
	
	if($autosol=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('d47', "X");
	$objPHPExcel->getActiveSheet()->setCellValue('i47', $marcasol);
	}
	if($autosol=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('f47', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('b53', $giroprof);
	
	$objPHPExcel->getActiveSheet()->setCellValue('t53', $depasol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('ao53', $desdesol1);
	$objPHPExcel->getActiveSheet()->setCellValue('ar53', $desdesol2);
	$objPHPExcel->getActiveSheet()->setCellValue('au53', $desdesol3);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b57', $compasol);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('af57', $noempleados);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak57', $compatelsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('al57', $compatelsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('am57', $compatelsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('an57', $compatelsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('ao57', $compatelsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('ap57', $compatelsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('aq57', $compatelsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('ar57', $compatelsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('as57', $compatelsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('at57', $compatelsol10);
	$objPHPExcel->getActiveSheet()->setCellValue('au57', $compatelsolext);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b61', $giroactreal);
	$objPHPExcel->getActiveSheet()->setCellValue('af61', $domneg);
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b66', $nomref1);
	$objPHPExcel->getActiveSheet()->setCellValue('ab66', $parenref1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an66', $telref11);
	$objPHPExcel->getActiveSheet()->setCellValue('ao66', $telref12);
	$objPHPExcel->getActiveSheet()->setCellValue('ap66', $telref13);
	$objPHPExcel->getActiveSheet()->setCellValue('aq66', $telref14);
	$objPHPExcel->getActiveSheet()->setCellValue('ar66', $telref15);
	$objPHPExcel->getActiveSheet()->setCellValue('as66', $telref16);
	$objPHPExcel->getActiveSheet()->setCellValue('at66', $telref17);
	$objPHPExcel->getActiveSheet()->setCellValue('au66', $telref18);
	$objPHPExcel->getActiveSheet()->setCellValue('av66', $telref19);
	$objPHPExcel->getActiveSheet()->setCellValue('aw66', $telref110);

	$objPHPExcel->getActiveSheet()->setCellValue('b70', $nomref2);
	$objPHPExcel->getActiveSheet()->setCellValue('ab70', $parenref2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an70', $telref21);
	$objPHPExcel->getActiveSheet()->setCellValue('ao70', $telref22);
	$objPHPExcel->getActiveSheet()->setCellValue('ap70', $telref23);
	$objPHPExcel->getActiveSheet()->setCellValue('aq70', $telref24);
	$objPHPExcel->getActiveSheet()->setCellValue('ar70', $telref25);
	$objPHPExcel->getActiveSheet()->setCellValue('as70', $telref26);
	$objPHPExcel->getActiveSheet()->setCellValue('at70', $telref27);
	$objPHPExcel->getActiveSheet()->setCellValue('au70', $telref28);
	$objPHPExcel->getActiveSheet()->setCellValue('av70', $telref29);
	$objPHPExcel->getActiveSheet()->setCellValue('aw70', $telref210);



	$objPHPExcel->getActiveSheet()->setCellValue('b74', $refbanc);
	$objPHPExcel->getActiveSheet()->setCellValue('ae74', $numcuebanc);
	$objPHPExcel->getActiveSheet()->setCellValue('n74', $sucbanc1);
	$objPHPExcel->getActiveSheet()->setCellValue('ap74', $aperbanc1d);
	$objPHPExcel->getActiveSheet()->setCellValue('as74', $aperbanc1m);
	$objPHPExcel->getActiveSheet()->setCellValue('av74', $aperbanc1a);




	$objPHPExcel->getActiveSheet()->setCellValue('b78', $refbanc2);
	$objPHPExcel->getActiveSheet()->setCellValue('ae78', $tarjrefbanc);
	$objPHPExcel->getActiveSheet()->setCellValue('n78', $sucbanc2);
	$objPHPExcel->getActiveSheet()->setCellValue('ap78', $aperbanc1d2);
	$objPHPExcel->getActiveSheet()->setCellValue('as78', $aperbanc1m2);
	$objPHPExcel->getActiveSheet()->setCellValue('av78', $aperbanc1a2);

	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b82', $refcomemp1);
	$objPHPExcel->getActiveSheet()->setCellValue('ag82', $antirefcom1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an82', $telrefcom11);
	$objPHPExcel->getActiveSheet()->setCellValue('ao82', $telrefcom12);
	$objPHPExcel->getActiveSheet()->setCellValue('ap82', $telrefcom13);
	$objPHPExcel->getActiveSheet()->setCellValue('aq82', $telrefcom14);
	$objPHPExcel->getActiveSheet()->setCellValue('ar82', $telrefcom15);
	$objPHPExcel->getActiveSheet()->setCellValue('as82', $telrefcom16);
	$objPHPExcel->getActiveSheet()->setCellValue('at82', $telrefcom17);
	$objPHPExcel->getActiveSheet()->setCellValue('au82', $telrefcom18);
	$objPHPExcel->getActiveSheet()->setCellValue('av82', $telrefcom19);
	$objPHPExcel->getActiveSheet()->setCellValue('aw82', $telrefcom110);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b86', $refcomemp2);
	$objPHPExcel->getActiveSheet()->setCellValue('ag86', $antirefcom2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an86', $telrefcom21);
	$objPHPExcel->getActiveSheet()->setCellValue('ao86', $telrefcom22);
	$objPHPExcel->getActiveSheet()->setCellValue('ap86', $telrefcom23);
	$objPHPExcel->getActiveSheet()->setCellValue('aq86', $telrefcom24);
	$objPHPExcel->getActiveSheet()->setCellValue('ar86', $telrefcom25);
	$objPHPExcel->getActiveSheet()->setCellValue('as86', $telrefcom26);
	$objPHPExcel->getActiveSheet()->setCellValue('at86', $telrefcom27);
	$objPHPExcel->getActiveSheet()->setCellValue('au86', $telrefcom28);
	$objPHPExcel->getActiveSheet()->setCellValue('av86', $telrefcom29);
	$objPHPExcel->getActiveSheet()->setCellValue('aw86', $telrefcom210);
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b90', $cargdir);
	$objPHPExcel->getActiveSheet()->setCellValue('ab90', $nocuentcd);
	
	$objPHPExcel->getActiveSheet()->setCellValue('C94', $conyunom);
	$objPHPExcel->getActiveSheet()->setCellValue('h94', $conyuape1);
	$objPHPExcel->getActiveSheet()->setCellValue('s94', $conyuape2);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('AF94', $compaconyu);
	$objPHPExcel->getActiveSheet()->setCellValue('an94', $puestconyu);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b98', $nomrazsoc);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an98', $telpermor1);
	$objPHPExcel->getActiveSheet()->setCellValue('ao98', $telpermor2);
	$objPHPExcel->getActiveSheet()->setCellValue('ap98', $telpermor3);
	$objPHPExcel->getActiveSheet()->setCellValue('aq98', $telpermor4);
	$objPHPExcel->getActiveSheet()->setCellValue('ar98', $telpermor5);
	$objPHPExcel->getActiveSheet()->setCellValue('as98', $telpermor6);
	$objPHPExcel->getActiveSheet()->setCellValue('at98', $telpermor7);
	$objPHPExcel->getActiveSheet()->setCellValue('au98', $telpermor8);
	$objPHPExcel->getActiveSheet()->setCellValue('av98', $telpermor9);
	$objPHPExcel->getActiveSheet()->setCellValue('aw98', $telpermor10);
	
	$objPHPExcel->getActiveSheet()->setCellValue('w98', $permorrfc1);
	$objPHPExcel->getActiveSheet()->setCellValue('X98', $permorrfc2);
	$objPHPExcel->getActiveSheet()->setCellValue('Y98', $permorrfc3);
	$objPHPExcel->getActiveSheet()->setCellValue('Z98', $permorrfc4);
	$objPHPExcel->getActiveSheet()->setCellValue('aC98', $permorrfc5);
	$objPHPExcel->getActiveSheet()->setCellValue('aD98', $permorrfc6);
	$objPHPExcel->getActiveSheet()->setCellValue('aE98', $permorrfc7);
	$objPHPExcel->getActiveSheet()->setCellValue('aF98', $permorrfc8);
	$objPHPExcel->getActiveSheet()->setCellValue('aG98', $permorrfc9);
	$objPHPExcel->getActiveSheet()->setCellValue('aH98', $permorrfc10);
	$objPHPExcel->getActiveSheet()->setCellValue('aI98', $permorrfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('aJ98', $permorrfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('aK98', $permorrfc13);

	$objPHPExcel->getActiveSheet()->setCellValue('b102', $dirpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('b106', $colpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('ae106', $cdpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('an106', $lugnacpermor);
	$objPHPExcel->getActiveSheet()->setCellValue('b110', $edopermor);
	$objPHPExcel->getActiveSheet()->setCellValue('ae110', $cppremor);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b115', $antemp);
	$objPHPExcel->getActiveSheet()->setCellValue('ab115', $apodsusc);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b120', $actprinc);
	$objPHPExcel->getActiveSheet()->setCellValue('an120', $cantperson);
	
	
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('b125', $datobnom1);
	$objPHPExcel->getActiveSheet()->setCellValue('k125', $datobappat1);
	$objPHPExcel->getActiveSheet()->setCellValue('s125', $datobapmat1);
	$objPHPExcel->getActiveSheet()->setCellValue('b129', $datobdir1);
	$objPHPExcel->getActiveSheet()->setCellValue('b133', $datobcol1);
	$objPHPExcel->getActiveSheet()->setCellValue('af133', $datobcd1);
	$objPHPExcel->getActiveSheet()->setCellValue('m133', $datoblugnac1);
	$PropObSol="";
	if($datobprop1=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('ar133', "X");
	$PropObSol="Si";
	}
	if($datobprop1=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('au133', "X");
	$PropObSol="No";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b137', $datobedo1);
	$objPHPExcel->getActiveSheet()->setCellValue('j137', $datobcp1);
	$objPHPExcel->getActiveSheet()->setCellValue('q137', $datobmail1);
	
	$SexoObSol="";
	if($datobsex1=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ae137', "X");
	$SexoObSol="Masculino";
	}
	if($datobsex1=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('ah137', "X");
	$SexoObSol="Femenino";
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak137', $datobfechnac1d);
	$objPHPExcel->getActiveSheet()->setCellValue('am137', $datobfechnac1m);
	$objPHPExcel->getActiveSheet()->setCellValue('ao137', $datobfechnac1a);
	
	$objPHPExcel->getActiveSheet()->setCellValue('as137', $datobed1);
	$objPHPExcel->getActiveSheet()->setCellValue('af125', $datobcurp1);
	
	$objPHPExcel->getActiveSheet()->setCellValue('v129', $datobrfc11);
	$objPHPExcel->getActiveSheet()->setCellValue('w129', $datobrfc12);
	$objPHPExcel->getActiveSheet()->setCellValue('x129', $datobrfc13);
	$objPHPExcel->getActiveSheet()->setCellValue('y129', $datobrfc14);
	$objPHPExcel->getActiveSheet()->setCellValue('z129', $datobrfc15);
	$objPHPExcel->getActiveSheet()->setCellValue('aa129', $datobrfc16);
	$objPHPExcel->getActiveSheet()->setCellValue('ab129', $datobrfc17);
	$objPHPExcel->getActiveSheet()->setCellValue('ac129', $datobrfc18);
	$objPHPExcel->getActiveSheet()->setCellValue('ad129', $datobrfc19);
	$objPHPExcel->getActiveSheet()->setCellValue('ae129', $datobrfc110);
	$objPHPExcel->getActiveSheet()->setCellValue('af129', $datobrfc111);
	$objPHPExcel->getActiveSheet()->setCellValue('ag129', $datobrfc112);
	$objPHPExcel->getActiveSheet()->setCellValue('ah129', $datobrfc113);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an125', $datobtel11);
	$objPHPExcel->getActiveSheet()->setCellValue('ao125', $datobtel12);
	$objPHPExcel->getActiveSheet()->setCellValue('ap125', $datobtel13);
	$objPHPExcel->getActiveSheet()->setCellValue('aq125', $datobtel14);
	$objPHPExcel->getActiveSheet()->setCellValue('ar125', $datobtel15);
	$objPHPExcel->getActiveSheet()->setCellValue('as125', $datobtel16);
	$objPHPExcel->getActiveSheet()->setCellValue('at125', $datobtel17);
	$objPHPExcel->getActiveSheet()->setCellValue('au125', $datobtel18);
	$objPHPExcel->getActiveSheet()->setCellValue('av125', $datobtel19);
	$objPHPExcel->getActiveSheet()->setCellValue('aw125', $datobtel110);
	////
	
	$objPHPExcel->getActiveSheet()->setCellValue('b142', $datobnom2);
	$objPHPExcel->getActiveSheet()->setCellValue('k142', $datobappat2);
	$objPHPExcel->getActiveSheet()->setCellValue('s142', $datobapmat2);
	$objPHPExcel->getActiveSheet()->setCellValue('b146', $datobdir2);
	$objPHPExcel->getActiveSheet()->setCellValue('b150', $datobcol2);
	$objPHPExcel->getActiveSheet()->setCellValue('af150', $datobcd2);
	$objPHPExcel->getActiveSheet()->setCellValue('m150', $datoblugnac2);
	$PropObSol2="";
	if($datobprop2=="Si"){
	$objPHPExcel->getActiveSheet()->setCellValue('ar150', "X");
	$PropObSol2="Si";
	}
	if($datobprop2=="No"){
	$objPHPExcel->getActiveSheet()->setCellValue('au150', "X");
	$PropObSol2="No";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b154', $datobedo2);
	$objPHPExcel->getActiveSheet()->setCellValue('j154', $datobcp2);
	$objPHPExcel->getActiveSheet()->setCellValue('q154', $datobmail2);
	
	$SexoObSol2="";
	if($datobsex2=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ae154', "X");
	$SexoObSol2="Masculino";
	}
	if($datobsex2=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('ah154', "X");
	$SexoObSol2="Femenino";
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('ak154', $datobfechnac2d);
	$objPHPExcel->getActiveSheet()->setCellValue('am154', $datobfechnac2m);
	$objPHPExcel->getActiveSheet()->setCellValue('ao154', $datobfechnac2a);
	
	$objPHPExcel->getActiveSheet()->setCellValue('as154', $datobed2);
	$objPHPExcel->getActiveSheet()->setCellValue('af142', $datobcurp2);
	
	$objPHPExcel->getActiveSheet()->setCellValue('v146', $datobrfc21);
	$objPHPExcel->getActiveSheet()->setCellValue('w146', $datobrfc22);
	$objPHPExcel->getActiveSheet()->setCellValue('x146', $datobrfc23);
	$objPHPExcel->getActiveSheet()->setCellValue('y146', $datobrfc24);
	$objPHPExcel->getActiveSheet()->setCellValue('z146', $datobrfc25);
	$objPHPExcel->getActiveSheet()->setCellValue('aa146', $datobrfc26);
	$objPHPExcel->getActiveSheet()->setCellValue('ab146', $datobrfc27);
	$objPHPExcel->getActiveSheet()->setCellValue('ac146', $datobrfc28);
	$objPHPExcel->getActiveSheet()->setCellValue('ad146', $datobrfc29);
	$objPHPExcel->getActiveSheet()->setCellValue('ae146', $datobrfc210);
	$objPHPExcel->getActiveSheet()->setCellValue('af146', $datobrfc211);
	$objPHPExcel->getActiveSheet()->setCellValue('ag146', $datobrfc212);
	$objPHPExcel->getActiveSheet()->setCellValue('ah146', $datobrfc213);
	
	$objPHPExcel->getActiveSheet()->setCellValue('an142', $datobtel21);
	$objPHPExcel->getActiveSheet()->setCellValue('ao142', $datobtel22);
	$objPHPExcel->getActiveSheet()->setCellValue('ap142', $datobtel23);
	$objPHPExcel->getActiveSheet()->setCellValue('aq142', $datobtel24);
	$objPHPExcel->getActiveSheet()->setCellValue('ar142', $datobtel25);
	$objPHPExcel->getActiveSheet()->setCellValue('as142', $datobtel26);
	$objPHPExcel->getActiveSheet()->setCellValue('at142', $datobtel27);
	$objPHPExcel->getActiveSheet()->setCellValue('au142', $datobtel28);
	$objPHPExcel->getActiveSheet()->setCellValue('av142', $datobtel29);
	$objPHPExcel->getActiveSheet()->setCellValue('aw142', $datobtel210);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b191', $clavcon);
	$objPHPExcel->getActiveSheet()->setCellValue('n191', $nomcons);
	$objPHPExcel->getActiveSheet()->setCellValue('at191', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('b194', $nomvend);
	$objPHPExcel->getActiveSheet()->setCellValue('y194', $gerentegral);
	
	if($tipocredito=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('aj7', "X");
	}
	if($tipocredito=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('aq7', "X");
	}
	if($tipocredito=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('aw7', "X");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('ae120', $inicoper1);
	$objPHPExcel->getActiveSheet()->setCellValue('ag120', $inicoper2);
	$objPHPExcel->getActiveSheet()->setCellValue('ak120', $inicoper3);
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('an129', $_REQUEST['datobtel112']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao129', $_REQUEST['datobtel122']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap129', $_REQUEST['datobtel132']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq129', $_REQUEST['datobtel142']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar129', $_REQUEST['datobtel152']);
	$objPHPExcel->getActiveSheet()->setCellValue('as129', $_REQUEST['datobtel162']);
	$objPHPExcel->getActiveSheet()->setCellValue('at129', $_REQUEST['datobtel172']);
	$objPHPExcel->getActiveSheet()->setCellValue('au129', $_REQUEST['datobtel182']);
	$objPHPExcel->getActiveSheet()->setCellValue('av129', $_REQUEST['datobtel192']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw129', $_REQUEST['datobtel1102']);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('an146', $_REQUEST['datobtel212']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao146', $_REQUEST['datobtel222']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap146', $_REQUEST['datobtel232']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq146', $_REQUEST['datobtel242']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar146', $_REQUEST['datobtel252']);
	$objPHPExcel->getActiveSheet()->setCellValue('as146', $_REQUEST['datobtel262']);
	$objPHPExcel->getActiveSheet()->setCellValue('at146', $_REQUEST['datobtel272']);
	$objPHPExcel->getActiveSheet()->setCellValue('au146', $_REQUEST['datobtel282']);
	$objPHPExcel->getActiveSheet()->setCellValue('av146', $_REQUEST['datobtel292']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw146', $_REQUEST['datobtel2102']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('aN102', $_REQUEST['faxpermor1']);
	$objPHPExcel->getActiveSheet()->setCellValue('aO102', $_REQUEST['faxpermor2']);
	$objPHPExcel->getActiveSheet()->setCellValue('aP102', $_REQUEST['faxpermor3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aQ102', $_REQUEST['faxpermor4']);
	$objPHPExcel->getActiveSheet()->setCellValue('aR102', $_REQUEST['faxpermor5']);
	$objPHPExcel->getActiveSheet()->setCellValue('aS102', $_REQUEST['faxpermor6']);
	$objPHPExcel->getActiveSheet()->setCellValue('aT102', $_REQUEST['faxpermor7']);
	$objPHPExcel->getActiveSheet()->setCellValue('aU102', $_REQUEST['faxpermor8']);
	$objPHPExcel->getActiveSheet()->setCellValue('aV102', $_REQUEST['faxpermor9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aW102', $_REQUEST['faxpermor10']);
	
	
	
		
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'images/logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AL302');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'images/logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AL210');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());  
	
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$logo =  'images/logosfg.png'; // Provide path to your logo file
$objDrawing->setPath($logo);
$objDrawing->setOffsetX(8);    // setOffsetX works properly
$objDrawing->setOffsetY(300);  //setOffsetY has no effect
$objDrawing->setCoordinates('AL1');
$objDrawing->setHeight(75); // logo height
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	
	
		$objPHPExcel->getActiveSheet()->setCellValue('D217', $fecha);

	if($_REQUEST['escliente']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AM217', "ü");
	}
	if($_REQUEST['escliente']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AW217', "ü");
	}

	if($_REQUEST['select']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L234', "Otra");
	$objPHPExcel->getActiveSheet()->setCellValue('W234', "1");
	$select="Otra";
	}
	if($_REQUEST['select']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('l234', "Informal");
	$objPHPExcel->getActiveSheet()->setCellValue('W234', "2");
	$select="Informal";
	}
	if($_REQUEST['select']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L234', "Vulnerable");
	$objPHPExcel->getActiveSheet()->setCellValue('W234', "3");
	$select="Vulnerable";
	}
	
	
	if($_REQUEST['select2']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "0");
	$select2="N/A";
	}
	if($_REQUEST['select2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "7-10 años");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "1");
	$select2="7-10 años";
	}
	if($_REQUEST['select2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "4-6 años");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "2");
	$select2="4-6 años";
	}
	if($_REQUEST['select2']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L235', "1-3 años");
	$objPHPExcel->getActiveSheet()->setCellValue('W235', "3");
	$select2="1-3 años";
	}
	
	
	
	if($_REQUEST['select3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L236', "Prestamo");
	$objPHPExcel->getActiveSheet()->setCellValue('W236', "1");
	$select3="Prestamo";
	}
	if($_REQUEST['select3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L236', "Arrendamiento");
	$objPHPExcel->getActiveSheet()->setCellValue('W236', "2");
	$select3="Arrendamiento";
	}
	if($_REQUEST['select3']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L236', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W236', "3");
	$select3="Otros";
	}
	
	
	if($_REQUEST['select4']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "0");
	$select4="N/A";
	}
	if($_REQUEST['select4']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "1");
	$select4="1 a 2";
	}
	if($_REQUEST['select4']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "2");
	$select4="3 a 4";
	}
	if($_REQUEST['select4']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L237', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('W237', "3");
	$select4="5 o mas";
	}
	
	
	if($_REQUEST['select5']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "0");
	$select5="N/A";
	}
	if($_REQUEST['select5']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "1");
	$select5="1 a 2";
	}
	if($_REQUEST['select5']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "2");
	$select5="3 a 4";
	}
	if($_REQUEST['select5']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L238', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('W238', "3");
	$select5="5 o mas";
	}
	
	
	if($_REQUEST['select6']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L239', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('W239', "1");
	$select6="1% - 49%";
	}
	if($_REQUEST['select6']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L239', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('W239', "2");
	$select6="50% - 74%";
	}
	if($_REQUEST['select6']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L239', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('W239', "3");
	$select6="75% - 100%";
	}
	
	
	if($_REQUEST['select7']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L240', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('W240', "1");
	$select7="1% - 49%";
	}
	if($_REQUEST['select7']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L240', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('W240', "2");
	$select7="50% - 74%";
	}
	if($_REQUEST['select7']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L240', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('W240', "3");
	$select7="75% - 100%";
	}
	
	
	if($_REQUEST['select8']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L241', "$18000 - $20000");
	$objPHPExcel->getActiveSheet()->setCellValue('W241', "1");
	$select8="$18000 - $20000";
	}
	if($_REQUEST['select8']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L241', "$21000 - $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('W241', "2");
	$select8="$21000 - $25000";
	}
	if($_REQUEST['select8']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L241', "mas de $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('W241', "3");
	$select8="mas de $25000";
	}
	
	
	if($_REQUEST['select9']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L242', "1 a 3");
	$objPHPExcel->getActiveSheet()->setCellValue('W242', "1");
	$select9="1 a 3";
	}
	if($_REQUEST['select9']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L242', "4 a 6");
	$objPHPExcel->getActiveSheet()->setCellValue('W242', "2");
	$select9="4 a 6";
	}
	if($_REQUEST['select9']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L242', "7 a 10");
	$objPHPExcel->getActiveSheet()->setCellValue('W242', "3");
	$select9="7 a 10";
	}
	
	
	if($_REQUEST['select10']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L243', "Transferencia");
	$objPHPExcel->getActiveSheet()->setCellValue('W243', "1");
	$select10="Transferencia";
	}
	if($_REQUEST['select10']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L243', "Cheque");
	$objPHPExcel->getActiveSheet()->setCellValue('W243', "2");
	$select10="Cheque";
	}
	if($_REQUEST['select10']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L243', "Efectivo");
	$objPHPExcel->getActiveSheet()->setCellValue('W243', "3");
	$select10="Efectivo";
	}
	
	
	
	if($_REQUEST['select11']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L244', "Agencia");
	$objPHPExcel->getActiveSheet()->setCellValue('W244', "1");
	$select11="Agencia";
	}
	if($_REQUEST['select11']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L244', "Internet");
	$objPHPExcel->getActiveSheet()->setCellValue('W244', "2");
	$select11="Internet";
	}
	if($_REQUEST['select11']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L244', "Otro");
	$objPHPExcel->getActiveSheet()->setCellValue('W244', "3");
	$select11="Otro";
	}
	
	
	if($_REQUEST['select12']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L245', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W245', "1");
	$select12="México";
	}
	if($_REQUEST['select12']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L245', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W245', "2");
	$select12="Otros";
	}
	if($_REQUEST['select12']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L245', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W245', "3");
	$select12="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	if($_REQUEST['select13']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L246', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('W246', "1");
	$select13="Puebla-Coahuila-Zcatecas-Hidalgo-Durango";
	}
	if($_REQUEST['select13']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L246', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('W246', "2");
	$select13="Durango-Chihuhua-Jalisco-México-CD México-Sonora";
	}
	if($_REQUEST['select13']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L246', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('W246', "3");
	$select13="Guerrero-Michoacan-Tamaulipas-Morelos";
	}
	
	if($_REQUEST['select14']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L247', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('W247', "1");
	$select14="Puebla-Coahuila-Zcatecas-Hidalgo-Durango";
	}
	if($_REQUEST['select14']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L247', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('W247', "2");
	$select14="Durango-Chihuhua-Jalisco-México-CD México-Sonora";
	}
	if($_REQUEST['select14']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L247', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('W247', "3");
	$select14="Guerrero-Michoacan-Tamaulipas-Morelos";
	}
	
	
	if($_REQUEST['select15']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L248', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W248', "1");
	$select15="México";
	}
	if($_REQUEST['select15']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L248', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W248', "2");
	$select15="Otros";
	}
	if($_REQUEST['select15']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L248', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W248', "3");
	$select15="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	if($_REQUEST['select16']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L249', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W249', "1");
	$select16="México";
	}
	if($_REQUEST['select16']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L249', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W249', "2");
	$select16="Otros";
	}
	if($_REQUEST['select16']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L249', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W249', "3");
	$select16="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	if($_REQUEST['select17']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('L250', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('W250', "1");
	$select17="México";
	}
	if($_REQUEST['select17']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('L250', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('W250', "2");
	$select17="Otros";
	}
	if($_REQUEST['select17']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('L250', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('W250', "3");
	$select17="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar";
	}
	
	
	
	$suma=$_REQUEST['select']+$_REQUEST['select2']+$_REQUEST['select3']+$_REQUEST['select4']+$_REQUEST['select5']+$_REQUEST['select6']+$_REQUEST['select7']+$_REQUEST['select8']+$_REQUEST['select9']+$_REQUEST['select10']+$_REQUEST['select11']+$_REQUEST['select12']+$_REQUEST['select13']+$_REQUEST['select14']+$_REQUEST['select15']+$_REQUEST['select16']+$_REQUEST['select17'];
	
	if(21<=$suma && $suma<=29){
	$objPHPExcel->getActiveSheet()->setCellValue('Z256', "Bajo");
	$objPHPExcel->getActiveSheet()->setCellValue('U231', "P");
	$GradoRiesgo="Bajo";
	}
	if(30<=$suma && $suma<=45){
	$objPHPExcel->getActiveSheet()->setCellValue('Z256', "Medio");
	$objPHPExcel->getActiveSheet()->setCellValue('Z231', "P");
	$GradoRiesgo="Medio";
	}
	if(45<$suma){
	$objPHPExcel->getActiveSheet()->setCellValue('Z256', "Alto");
	$objPHPExcel->getActiveSheet()->setCellValue('AF231', "P");
	$GradoRiesgo="Alto";
	}
	
	
	
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('H312', $fecha);
	$objPHPExcel->getActiveSheet()->setCellValue('AL482', $fecha);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AF312', $cliente);
	
	
	$objPHPExcel->getActiveSheet()->setCellValue('B315', $apepasol);
	$objPHPExcel->getActiveSheet()->setCellValue('U315', $apemasol);
	$objPHPExcel->getActiveSheet()->setCellValue('AL315', $nomsol.' '.$segnomsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B325', $dirsol);
	$objPHPExcel->getActiveSheet()->setCellValue('B330', $colsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Q330', $_REQUEST['textfield22']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Y330', $edosol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('T320', $lugnacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN325', $cpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AG330', $cdsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('U335', $mailsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AO335', $curpsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V340', $nacsol);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN340', $_REQUEST['textfield32']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B345', $_REQUEST['textfield33']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V345', $_REQUEST['textfield34']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AO345', $_REQUEST['textfield35']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B350', $_REQUEST['textfield36']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('S350', $_REQUEST['textfield37']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AJ350', $_REQUEST['textfield38']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L393', $_REQUEST['textfield39']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L394', $_REQUEST['textfield40']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L395', $_REQUEST['textfield41']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L396', $_REQUEST['textfield42']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('L397', $_REQUEST['textfield43']);
	$objPHPExcel->getActiveSheet()->setCellValue('L398', $_REQUEST['textfield44']);
	
	
	if($_REQUEST['adjuntos1']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V403', "P");
	}
	if($_REQUEST['adjuntos1']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Z403', "P");
	}
	
	if($_REQUEST['adjuntos2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V404', "P");
	}
	if($_REQUEST['adjuntos2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Z404', "P");
	}
	
	if($_REQUEST['adjuntos3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V406', "P");
	}
	if($_REQUEST['adjuntos3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('Z406', "P");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('C414', $_REQUEST['textfield45']);
	$objPHPExcel->getActiveSheet()->setCellValue('V414', $_REQUEST['textfield46']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN414', $_REQUEST['textfield47']);
	$objPHPExcel->getActiveSheet()->setCellValue('B419', $_REQUEST['textfield48']);
	$objPHPExcel->getActiveSheet()->setCellValue('R419', $_REQUEST['textfield49']);
	$objPHPExcel->getActiveSheet()->setCellValue('AE419', $_REQUEST['textfield50']);
	$objPHPExcel->getActiveSheet()->setCellValue('AS419', $_REQUEST['textfield51']);
	$objPHPExcel->getActiveSheet()->setCellValue('a425', $_REQUEST['textfield52']);
	$objPHPExcel->getActiveSheet()->setCellValue('W425', $_REQUEST['textfield53']);
	$objPHPExcel->getActiveSheet()->setCellValue('AO425', $_REQUEST['textfield54']);
	$objPHPExcel->getActiveSheet()->setCellValue('B430', $_REQUEST['textfield55']." - ".$_REQUEST['textfield56']);
	$objPHPExcel->getActiveSheet()->setCellValue('X430', $_REQUEST['textfield57']);
	$objPHPExcel->getActiveSheet()->setCellValue('AS430', $_REQUEST['textfield58']);
	$objPHPExcel->getActiveSheet()->setCellValue('B435', $_REQUEST['textfield59']);
	$objPHPExcel->getActiveSheet()->setCellValue('X435', $_REQUEST['textfield60']);
	$objPHPExcel->getActiveSheet()->setCellValue('AQ435', $_REQUEST['textfield61']);
	$objPHPExcel->getActiveSheet()->setCellValue('B440', $_REQUEST['textfield62']);
	$objPHPExcel->getActiveSheet()->setCellValue('X440', $_REQUEST['textfield63']);
	$objPHPExcel->getActiveSheet()->setCellValue('AN440', $_REQUEST['textfield64']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H484', $_REQUEST['textfield65']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA484', $_REQUEST['textfield66']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H486', $_REQUEST['textfield67']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA486', $_REQUEST['textfield68']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H488', $_REQUEST['textfield69']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA488', $_REQUEST['textfield70']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H490', $_REQUEST['textfield71']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA490', $_REQUEST['textfield72']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H492', $_REQUEST['textfield73']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA492', $_REQUEST['textfield74']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H494', $_REQUEST['textfield75']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA494', $_REQUEST['textfield76']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H496', $_REQUEST['textfield77']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA496', $_REQUEST['textfield78']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H498', $_REQUEST['textfield79']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA498', $_REQUEST['textfield80']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H500', $_REQUEST['textfield81']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA500', $_REQUEST['textfield82']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('H502', $_REQUEST['textfield83']);
	$objPHPExcel->getActiveSheet()->setCellValue('AA502', $_REQUEST['textfield84']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J504', $_REQUEST['textfield85']);
	$objPHPExcel->getActiveSheet()->setCellValue('J506', $_REQUEST['textfield86']);
	$objPHPExcel->getActiveSheet()->setCellValue('J507', $_REQUEST['textfield87']);
	$objPHPExcel->getActiveSheet()->setCellValue('J508', $_REQUEST['textfield88']);
	$objPHPExcel->getActiveSheet()->setCellValue('J509', $_REQUEST['textfield89']);
	$objPHPExcel->getActiveSheet()->setCellValue('J510', $_REQUEST['textfield90']);
	$objPHPExcel->getActiveSheet()->setCellValue('J511', $_REQUEST['textfield91']);
	$objPHPExcel->getActiveSheet()->setCellValue('J512', $_REQUEST['textfield92']);
	
	
	if($_REQUEST['PEPS']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('V579', "P");
	$objPHPExcel->getActiveSheet()->setCellValue('G583', $_REQUEST['textfield93']);
	$objPHPExcel->getActiveSheet()->setCellValue('AE583', $_REQUEST['textfield94']);
	$objPHPExcel->getActiveSheet()->setCellValue('G585', $_REQUEST['textfield95']);
	}
	if($_REQUEST['PEPS']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA579', "P");
	}

	
	
	
	include("Conexion2.php");
	

	
	
	
	$TipoCredito="";
	if($tipocredito=="1"){
	$TipoCredito="Leasing";
	}
	if($tipocredito=="2"){
	$TipoCredito="Credit";
	}
	if($tipocredito=="3"){
	$TipoCredito="Premium Credit";
	}
	
	$NomSolicitante="";
	if($segnomsol!=""){
	$NomSolicitante.=$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol;
	}else{
	$NomSolicitante.=$nomsol.' '.$apepasol.' '.$apemasol;
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('I221', $NomSolicitante);
	$objPHPExcel->getActiveSheet()->setCellValue('I222', $cliente);
	$objPHPExcel->getActiveSheet()->setCellValue('I223', $dirsol);
	$objPHPExcel->getActiveSheet()->setCellValue('I224', $colsol);
	$objPHPExcel->getActiveSheet()->setCellValue('I225', $_REQUEST['textfield5']);
	$objPHPExcel->getActiveSheet()->setCellValue('I226', $edosol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM224', $cpsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM225', $cdsol);
	$objPHPExcel->getActiveSheet()->setCellValue('AM226', $lugnacsol);
	
	
	
	$RFCSolicitante="";
$RFCSolicitante.=$rfc1.$rfc2.$rfc3.$rfc4.$rfc5.$rfc6.$rfc7.$rfc8.$rfc9.$rfc10.$rfc11.$rfc12.$rfc13;
	$objPHPExcel->getActiveSheet()->setCellValue('AM227', $RFCSolicitante);
	$objPHPExcel->getActiveSheet()->setCellValue('B340', $RFCSolicitante.' / '.$_REQUEST['textfield30']);


	
	$TelSolicitante="";
	$TelSolicitante.=$telsol1.$telsol2.$telsol3.$telsol4.$telsol5.$telsol6.$telsol7.$telsol8.$telsol9.$telsol10;
	$objPHPExcel->getActiveSheet()->setCellValue('AP330', $TelSolicitante);
	
	
	
	$MovSolicitante="";
	$MovSolicitante.=$movsol1.$movsol2.$movsol3.$movsol4.$movsol5.$movsol6.$movsol7.$movsol8.$movsol9.$movsol10;
	
	$FaxSolicitante="";
	$FaxSolicitante.=$movsol12.$movsol22.$movsol32.$movsol42.$movsol52.$movsol62.$movsol72.$movsol82.$movsol92.$movsol102;
	
	$SexoDatGen="";
	if($sexsol=="M"){
	$SexoDatGen="Masculino";
	}
	if($sexsol=="F"){
	$SexoDatGen="Femenino";
	}
	
	$FeNacDatGen="";
	$FeNacDatGen.=$fechnacsol3.'-'.$fechnacsol2.'-'.$fechnacsol1;
	$objPHPExcel->getActiveSheet()->setCellValue('I227', $FeNacDatGen);
	$objPHPExcel->getActiveSheet()->setCellValue('AL320', $FeNacDatGen);
	
	
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
	$VivDatGen="Con familiares";
	}
	
	if($inmusol=="1"){
	$PropInmuDatGen="Si";
	}
	if($inmusol=="2"){
	$PropInmuDatGen="No";
	}
	
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
	
	$objPHPExcel->getActiveSheet()->setCellValue('B335', $EstCivDatGen);
	
	$MarDatGen="";
	if($autosol=="1"){
	$AuPropDatGen="Si";
	$MarDatGen=$marcasol;
	}
	if($autosol=="2"){
	$AuPropDatGen="No";
	}
	
	$DesAnDatEmp="";
	$DesAnDatEmp.=$desdesol3.'-'.$desdesol2.'-'.$desdesol1;
	
	$TelDatEmp="";
	$TelDatEmp.=$compatelsol1.$compatelsol2.$compatelsol3.$compatelsol4.$compatelsol5.$compatelsol6.$compatelsol7.$compatelsol8.$compatelsol9.$compatelsol10;
	
	$TelRefPer="";
	$TelRefPer.=$telref11.$telref12.$telref13.$telref14.$telref15.$telref16.$telref17.$telref18.$telref19.$telref110;
	
	$TelRefPer2="";
	$TelRefPer2.=$telref21.$telref22.$telref23.$telref24.$telref25.$telref26.$telref27.$telref28.$telref29.$telref210;
	
	$FecApRefBan="";
	$FecApRefBan.=$aperbanc1a.'-'.$aperbanc1m.'-'.$aperbanc1d;
	
	$FecApRefBan2="";
	$FecApRefBan2.=$aperbanc1a2.'-'.$aperbanc1m2.'-'.$aperbanc1d2;
	
	$TelRefCom="";
	$TelRefCom.=$telrefcom11.$telrefcom12.$telrefcom13.$telrefcom14.$telrefcom15.$telrefcom16.$telrefcom17.$telrefcom18.$telrefcom19.$telrefcom110;
	
	$TelRefCom2="";
	$TelRefCom2.=$telrefcom21.$telrefcom22.$telrefcom23.$telrefcom24.$telrefcom25.$telrefcom26.$telrefcom27.$telrefcom28.$telrefcom29.$telrefcom210;
	
	$NomDatCon="";
	$NomDatCon.=$conyunom.' '.$conyuape1.' '.$conyuape2;
	
	$RFCObPerMor="";
	$RFCObPerMor.=$permorrfc1.$permorrfc2.$permorrfc3.$permorrfc4.$permorrfc5.$permorrfc6.$permorrfc7.$permorrfc8.$permorrfc9.$permorrfc10.$permorrfc11.$permorrfc12.$permorrfc13;
	
	$TelObPerMor="";
	$TelObPerMor.=$telpermor1.$telpermor2.$telpermor3.$telpermor4.$telpermor5.$telpermor6.$telpermor7.$telpermor8.$telpermor9.$telpermor10;
	
	$FaxObPerMor="";
	$FaxObPerMor.=$_REQUEST['faxpermor1'].$_REQUEST['faxpermor2'].$_REQUEST['faxpermor3'].$_REQUEST['faxpermor4'].$_REQUEST['faxpermor5'].$_REQUEST['faxpermor6'].$_REQUEST['faxpermor7'].$_REQUEST['faxpermor8'].$_REQUEST['faxpermor9'].$_REQUEST['faxpermor10'];
	
	$IniOpDatGen="";
	$IniOpDatGen.=$inicoper3.'-'.$inicoper2.'-'.$inicoper1;
	
	$NomObSol="";
	$NomObSol.=$datobnom1.' '.$datobappat1.' '.$datobapmat1;
	
	$NomObSol2="";
	$NomObSol2.=$datobnom2.' '.$datobappat2.' '.$datobapmat2;
		
	
	$RFCObSol="";
		$RFCObSol.=$datobrfc11.$datobrfc12.$datobrfc13.$datobrfc14.$datobrfc15.$datobrfc16.$datobrfc17.$datobrfc18.$datobrfc19.$datobrfc110.$datobrfc111.$datobrfc112.$datobrfc113;
		
	$RFCObSol2="";
		$RFCObSol2.=$datobrfc21.$datobrfc22.$datobrfc23.$datobrfc24.$datobrfc25.$datobrfc26.$datobrfc27.$datobrfc28.$datobrfc29.$datobrfc210.$datobrfc211.$datobrfc212.$datobrfc213;
		
		$TelObSol="";
		$TelObSol.=$datobtel11.$datobtel12.$datobtel13.$datobtel14.$datobtel15.$datobtel16.$datobtel17.$datobtel18.$datobtel19.$datobtel110;
		
		$TelObSol2="";
		$TelObSol2.=$datobtel21.$datobtel22.$datobtel23.$datobtel24.$datobtel25.$datobtel26.$datobtel27.$datobtel28.$datobtel29.$datobtel210;
		
		$MovObSol="";
		$MovObSol.=$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102'];
		
		$MovObSol2="";
		$MovObSol2.=$_REQUEST['datobtel212'].$_REQUEST['datobtel222'].$_REQUEST['datobtel232'].$_REQUEST['datobtel242'].$_REQUEST['datobtel252'].$_REQUEST['datobtel262'].$_REQUEST['datobtel272'].$_REQUEST['datobtel282'].$_REQUEST['datobtel292'].$_REQUEST['datobtel2102'];
		
		
		$FeNacObSol="";
		$FeNacObSol.=$datobfechnac1a.'-'.$datobfechnac1m.'-'.$datobfechnac1d;
		
		$FeNacObSol2="";
		$FeNacObSol2.=$datobfechnac2a.'-'.$datobfechnac2m.'-'.$datobfechnac2d;
		

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
			$objPHPExcel->getActiveSheet()->setCellValue('AC393', "P");
		}
		if($_REQUEST['copias']=="2"){
			$copias="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AG393', "P");
		}
	}
	$Pasaporte_o_CedulaProfSolicitante=$_REQUEST['textfield40'];
	if($Pasaporte_o_CedulaProfSolicitante!=""){
		if($_REQUEST['copias2']=="1"){
			$copias2="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AC394', "P");
		}
		if($_REQUEST['copias2']=="2"){
			$copias2="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AG394', "P");
		}
	}
	$CartillaMilitarSolicitante=$_REQUEST['textfield41'];
	if($CartillaMilitarSolicitante!=""){
		if($_REQUEST['copias3']=="1"){
			$copias3="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AC395', "P");
		}
		if($_REQUEST['copias3']=="2"){
			$copias3="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AG395', "P");
		}
	}
	$LicenciaConducirSolicitante=$_REQUEST['textfield42'];
	if($LicenciaConducirSolicitante!=""){
		if($_REQUEST['copias4']=="1"){
			$copias4="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AC396', "P");
		}
		if($_REQUEST['copias4']=="2"){
			$copias4="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AG396', "P");
		}
	}
	$OtraIdentSolicitante=$_REQUEST['textfield43'];
	$EspIdentSolicitante="";
	if($OtraIdentSolicitante!=""){
		if($_REQUEST['copias5']=="1"){
			$copias5="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AC397', "P");
		}
		if($_REQUEST['copias5']=="2"){
			$copias5="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AG397', "P");
		}
		$EspIdentSolicitante=$_REQUEST['textfield44'];
	}

	if($LicenciaConducirSolicitante!="" || $OtraIdentSolicitante!="" || $CartillaMilitarSolicitante!="" || $Pasaporte_o_CedulaProfSolicitante!="" || $INESolicitante!=""){
		if($_REQUEST['cotejo']=="1"){
			$cotejo="Si";
			$objPHPExcel->getActiveSheet()->setCellValue('AC398', "P");
		}
		if($_REQUEST['cotejo']=="2"){
			$cotejo="No";
			$objPHPExcel->getActiveSheet()->setCellValue('AG398', "P");
		}
	}

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

		$fechaComprobante=$_REQUEST['fechaComprobante'];
		$objPHPExcel->getActiveSheet()->setCellValue('T405', $fechaComprobante);


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
	$totalIngreso=$PerTrans1+$PerTrans2+$PerTrans3+$PerTrans4+$PerTrans5+$PerTrans6+$PerTrans7+$PerTrans8+$PerTrans9+$PerTrans10;
	$FuentePerTrans10=$_REQUEST['textfield84'];
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



			
	if($cliente==""){
		//mysqli_query($cnx,"insert into clientes (id,Nombre,RFC,Tel,Cel,Direccion,Numero,Email,Colonia,Ciudad,LugNacimiento,Estado,CP,CURP,Sexo,Nacimiento,Edad,Nacionalidad,Dependientes,AcreDom,Vivienda,Inmueble,AnResidirCD,ArraigoDomicilio,Beneficiario,EstadoCivil,AutoPropio,PuestoEmpleo,DepartamentoEmpleo,Desdean,Empresa,TelEmpleo,ExtensionEmpleo,TipoCliente) values ('null','$NomSolicitante','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$mailsol','$colsol','$cdsol','$lugnacsol','$edosol','$cpsol','$curpsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$PropInmuDatGen','$anosol2','$arraisol','$benesol','$EstCivDatGen','$AuPropDatGen','$depasol','','$desdesol3','$compasol','$TelDatEmp','$compatelsolext','PFNA')");

		mysqli_query($cnx,"insert into pfna (NomSolicitante,SegNomSolicitante,ApPatSolicitante,ApMatSolicitante,RFCSolicitante,TelSolicitante,MovSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,LugNacSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,CURPSolicitante,EmailSolicitante,SexoDatGen,FeNacDatGen,EdDatGen,NaDatGen,NoDepDatGen,AcDomDatGen,VivDatGen,ImpMenDatGen,PropInmuDatGen,ArDomDatGen,AnResDatGen,NomBenDatGen,ApPatBenDatGen,ApMatBenDatGen,EstCivDatGen,AuPropDatGen,MarDatGen,PuestDatEmp,DesAnDatEmp,CompDatEmp,TelDatEmp,ExtDatEmp,DomicilioLaboral,NumSerieFIEL,SueldoSolicitante,ActEcoAdicional,IngAdMensualAprox,Ocupacion_Profesion,FaxSolicitante,GiroDatEmp) values('$nomsol','$segnomsol','$apepasol','$apemasol','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$colsol','$cdsol','$lugnacsol','$edosol','$municipioSol','$cpsol','$curpsol','$mailsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$impmenpag','$PropInmuDatGen','$arraisol','$anosol2','$benesol3','$benesol1','$benesol2','$EstCivDatGen','$AuPropDatGen','$MarDatGen','$depasol','$DesAnDatEmp','$compasol','$TelDatEmp','$compatelsolext','$domicilioLaboral','$numSerieFiel','$SueldoSolicitante','$ActividadAdicional','$IngAdMensualAprox','$giroprof','$MovSolicitante','$giroactreal');");
		
		$id_pfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pfna=$id_pfnaRequest['LAST_INSERT_ID()'];
		$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pfna where Id='$id_pfna'"));
		$Folio_Cliente=$folio_request['Folio_Cliente'];
		mysqli_query($cnx,"insert into registro (Folio_Cliente,Fecha_apertura) values('$Folio_Cliente',CURDATE());");
		mysqli_query($cnx,"insert into solicitudpfna (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,SucRefBan,FecApRefBan,BancRefBan2,NoTarRefBan2,SucRefBan2,FecApRefBan2,EmpRefCom,AntRefCom,TelRefCom,EmpRefCom2,AntRefCom2,TelRefCom2,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObPerMor,DirObPerMor,ColObPerMor,CdObPerMor,LugNacObPerMor,EdoObPerMor,CPObPerMor,RFCObPerMor,TelObPerMor,FaxObPerMor,AntConsEmpPM,ApoConsEmpPM,ActPrinDatGen,IniOpDatGen,CantPerDatGen,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$Folio_Cliente','$TipoCredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$numcuebanc','$sucbanc1','$FecApRefBan','$refbanc2','$tarjrefbanc','$sucbanc2','$FecApRefBan2','$refcomemp1','$antirefcom1','$TelRefCom','$refcomemp2','$antirefcom2','$TelRefCom2','$cargdir','$nocuentcd','$conyunom','$conyuape1','$conyuape2','$compaconyu','$puestconyu','$nomrazsoc','$dirpermor','$colpermor','$cdpermor','$lugnacpermor','$edopermor','$cppremor','$RFCObPerMor','$TelObPerMor','$FaxObPerMor','$antemp','$apodsusc','$actprinc','$IniOpDatGen','$cantperson','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

		$id_solicitudpfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfna=$id_solicitudpfnaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfna where Id='$id_solicitudpfna'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom) values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','$copias','$Pasaporte_o_CedulaProfSolicitante','$copias2','$CartillaMilitarSolicitante','$copias3','$LicenciaConducirSolicitante','$copias4','$OtraIdentSolicitante','$copias5','$EspIdentSolicitante','$cotejo','$adjuntos1','$adjuntos2','$adjuntos3','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','$PEPS','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");



		
		
		
$objPHPExcel->getActiveSheet()->setCellValue('M7', $Folio_Cliente);
$objPHPExcel->getActiveSheet()->setCellValue('AF312', $Folio_Cliente);
$objPHPExcel->getActiveSheet()->setCellValue('I222', $Folio_Cliente);
$objPHPExcel->getActiveSheet()->setCellValue('At3', $Folio_Sol);

	}else {

		mysqli_query($cnx,"insert into solicitudpfna (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,SucRefBan,FecApRefBan,BancRefBan2,NoTarRefBan2,SucRefBan2,FecApRefBan2,EmpRefCom,AntRefCom,TelRefCom,EmpRefCom2,AntRefCom2,TelRefCom2,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObPerMor,DirObPerMor,ColObPerMor,CdObPerMor,LugNacObPerMor,EdoObPerMor,CPObPerMor,RFCObPerMor,TelObPerMor,FaxObPerMor,AntConsEmpPM,ApoConsEmpPM,ActPrinDatGen,IniOpDatGen,CantPerDatGen,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$cliente','$TipoCredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$numcuebanc','$sucbanc1','$FecApRefBan','$refbanc2','$tarjrefbanc','$sucbanc2','$FecApRefBan2','$refcomemp1','$antirefcom1','$TelRefCom','$refcomemp2','$antirefcom2','$TelRefCom2','$cargdir','$nocuentcd','$conyunom','$conyuape1','$conyuape2','$compaconyu','$puestconyu','$nomrazsoc','$dirpermor','$colpermor','$cdpermor','$lugnacpermor','$edopermor','$cppremor','$RFCObPerMor','$TelObPerMor','$FaxObPerMor','$antemp','$apodsusc','$actprinc','$IniOpDatGen','$cantperson','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

		$id_solicitudpfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfna=$id_solicitudpfnaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfna where Id='$id_solicitudpfna'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom) values ('$Folio_Sol','$cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','$copias','$Pasaporte_o_CedulaProfSolicitante','$copias2','$CartillaMilitarSolicitante','$copias3','$LicenciaConducirSolicitante','$copias4','$OtraIdentSolicitante','$copias5','$EspIdentSolicitante','$cotejo','$adjuntos1','$adjuntos2','$adjuntos3','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','$PEPS','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");


		$objPHPExcel->getActiveSheet()->setCellValue('At3', $Folio_Sol);



		
	
	

	}

		
		
			
	

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Solicitud PFNA '.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol.'.xls"');
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




/*
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="Solicitud PFNA '.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol.'.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'PDF');
$objWriter->save('php://output');
*/


exit;

if(isset($_POST['cancelar'])){
include("carpetaraiz.php");
header('Location: '.$raiz.'indexmenu.php');
}

?>