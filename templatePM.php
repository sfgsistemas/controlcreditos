<?php
if(isset($_POST['aceptar'])){

/*$nomsol=$_REQUEST['nomsol'];
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

$curpsol=$_REQUEST['curpsol'];

$sexsol=$_REQUEST['sexsol'];

$fechnacsol1=$_REQUEST['fechnacsol1'];

$fechnacsol2=$_REQUEST['fechnacsol2'];

$fechnacsol3=$_REQUEST['fechnacsol3'];

$edsol=$_REQUEST['edsol'];

$nacsol=$_REQUEST['nacsol'];

$depensol=$_REQUEST['depensol'];

$acdomsol=$_REQUEST['acdomsol'];

$vivsol=$_REQUEST['vivsol'];



$inmusol=$_REQUEST['inmusol'];


$arraisol=$_REQUEST['arraisol'];



$anosol2=$_REQUEST['anosol2'];

$benesol=$_REQUEST['benesol'];

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

$nomref1=$_REQUEST['nomref1'];

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

$conyunom=$_REQUEST['conyunom'];

$compaconyu=$_REQUEST['compaconyu'];

$puestconyu=$_REQUEST['puestconyu'];

$datobnom1=$_REQUEST['datobnom1'];

$datobappat1=$_REQUEST['datobappat1'];

$datobapmat1=$_REQUEST['datobapmat1'];

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
$datobnom2=$_REQUEST['datobnom2'];

$datobappat2=$_REQUEST['datobappat2'];

$datobapmat2=$_REQUEST['datobapmat2'];

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


$impmenpag=$_REQUEST['impmenpag'];

$giroprof=$_REQUEST['giroprof'];


$desdesol1=$_REQUEST['desdesol1'];
$desdesol2=$_REQUEST['desdesol2'];
$desdesol3=$_REQUEST['desdesol3'];

$noempleados=$_REQUEST['noempleados'];


$giroactreal=$_REQUEST['giroactreal'];

$domneg=$_REQUEST['domneg'];

$refbanc=$_REQUEST['refbanc'];

$numcuebanc=$_REQUEST['numcuebanc'];

$sucbanc1=$_REQUEST['sucbanc1'];

$refbanc2=$_REQUEST['refbanc2'];

$sucbanc2=$_REQUEST['sucbanc2'];


$aperbanc1d=$_REQUEST['aperbanc1d'];
$aperbanc1m=$_REQUEST['aperbanc1m'];
$aperbanc1a=$_REQUEST['aperbanc1a'];

$aperbanc1d2=$_REQUEST['aperbanc1d2'];
$aperbanc1m2=$_REQUEST['aperbanc1m2'];
$aperbanc1a2=$_REQUEST['aperbanc1a2'];


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

$conyuape1=$_REQUEST['conyuape1'];
$conyuape2=$_REQUEST['conyuape2'];



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


$inicoper1=$_REQUEST['inicoper1'];
$inicoper2=$_REQUEST['inicoper2'];
$inicoper3=$_REQUEST['inicoper3'];

*/

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
$objPHPExcel = $objReader->load("Solicitud_PMoral_VWL_2016 sept.xls");


	


	$cliente=$_REQUEST['cliente'];
	$objPHPExcel->getActiveSheet()->setCellValue('k6', $cliente);
	
	$tipocredito=$_REQUEST['tipocredito'];
	$TipoCredito="";
	if($tipocredito=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('ad6', "X");
	$TipoCredito="Leasing";
	}
	if($tipocredito=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('al6', "X");
	$TipoCredito="Credit";
	}
	if($tipocredito=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('aw6', "X");
	$TipoCredito="Premium Credit";
	}
	
	$nomrazsoc2=$_REQUEST['nomrazsoc2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b9', $nomrazsoc2);
	$dirsol=$_REQUEST['dirsol'];
	$objPHPExcel->getActiveSheet()->setCellValue('b13', $_REQUEST['dirsol']);
	
	$mailsol2=$_REQUEST['mailsol2'];
	$objPHPExcel->getActiveSheet()->setCellValue('z13', $_REQUEST['mailsol2']);
	
	$colsol=$_REQUEST['colsol'];
	$objPHPExcel->getActiveSheet()->setCellValue('b17', $_REQUEST['colsol']);
	
	$cdsol=$_REQUEST['cdsol'];
	$objPHPExcel->getActiveSheet()->setCellValue('s17', $_REQUEST['cdsol']);
	
	
	$edosol=$_REQUEST['edosol'];
	$objPHPExcel->getActiveSheet()->setCellValue('ag17', $_REQUEST['edosol']);
	
	
	$cpsol=$_REQUEST['cpsol'];
	$objPHPExcel->getActiveSheet()->setCellValue('ar17', $_REQUEST['cpsol']);
	
	$rfcsol1=strtoupper($_REQUEST['rfcsol1']);
	$rfcsol2=strtoupper($_REQUEST['rfcsol2']);
	$rfcsol3=strtoupper($_REQUEST['rfcsol3']);
	$rfcsol4=strtoupper($_REQUEST['rfcsol4']);
	$rfcsol5=strtoupper($_REQUEST['rfcsol5']);
	$rfcsol6=strtoupper($_REQUEST['rfcsol6']);
	$rfcsol7=strtoupper($_REQUEST['rfcsol7']);
	$rfcsol8=strtoupper($_REQUEST['rfcsol8']);
	$rfcsol9=strtoupper($_REQUEST['rfcsol9']);
	$rfcsol10=strtoupper($_REQUEST['rfcsol10']);
	$rfcsol11=strtoupper($_REQUEST['rfcsol11']);
	$rfcsol12=strtoupper($_REQUEST['rfcsol12']);
	$rfcsol13=strtoupper($_REQUEST['rfcsol13']);
	$RFCSolicitante="";
	$RFCSolicitante.=$rfcsol1.$rfcsol2.$rfcsol3.$rfcsol4.$rfcsol5.$rfcsol6.$rfcsol7.$rfcsol8.$rfcsol9.$rfcsol10.$rfcsol11.$rfcsol12.$rfcsol13;
	$objPHPExcel->getActiveSheet()->setCellValue('z9', $rfcsol1);
	$objPHPExcel->getActiveSheet()->setCellValue('aa9', $rfcsol2);
	$objPHPExcel->getActiveSheet()->setCellValue('ab9', $rfcsol3);
	$objPHPExcel->getActiveSheet()->setCellValue('ac9', $rfcsol4);
	$objPHPExcel->getActiveSheet()->setCellValue('ad9', $rfcsol5);
	$objPHPExcel->getActiveSheet()->setCellValue('ae9', $rfcsol6);
	$objPHPExcel->getActiveSheet()->setCellValue('af9', $rfcsol7);
	$objPHPExcel->getActiveSheet()->setCellValue('ag9', $rfcsol8);
	$objPHPExcel->getActiveSheet()->setCellValue('ah9', $rfcsol9);
	$objPHPExcel->getActiveSheet()->setCellValue('ai9', $rfcsol10);
	$objPHPExcel->getActiveSheet()->setCellValue('aj9', $rfcsol11);
	$objPHPExcel->getActiveSheet()->setCellValue('ak9', $rfcsol12);
	$objPHPExcel->getActiveSheet()->setCellValue('al9', $rfcsol13);
	
	$TelSolicitante="";
	$TelSolicitante.=$_REQUEST['telsol1'].$_REQUEST['telsol2'].$_REQUEST['telsol3'].$_REQUEST['telsol4'].$_REQUEST['telsol5'].$_REQUEST['telsol6'].$_REQUEST['telsol7'].$_REQUEST['telsol8'].$_REQUEST['telsol9'].$_REQUEST['telsol10'];
	
	$objPHPExcel->getActiveSheet()->setCellValue('an9', $_REQUEST['telsol1']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao9', $_REQUEST['telsol2']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap9', $_REQUEST['telsol3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq9', $_REQUEST['telsol4']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar9', $_REQUEST['telsol5']);
	$objPHPExcel->getActiveSheet()->setCellValue('as9', $_REQUEST['telsol6']);
	$objPHPExcel->getActiveSheet()->setCellValue('at9', $_REQUEST['telsol7']);
	$objPHPExcel->getActiveSheet()->setCellValue('au9', $_REQUEST['telsol8']);
	$objPHPExcel->getActiveSheet()->setCellValue('av9', $_REQUEST['telsol9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw9', $_REQUEST['telsol10']);
	
	$FaxSolicitante="";
	$FaxSolicitante.=$_REQUEST['faxsol1'].$_REQUEST['faxsol2'].$_REQUEST['faxsol3'].$_REQUEST['faxsol4'].$_REQUEST['faxsol5'].$_REQUEST['faxsol6'].$_REQUEST['faxsol7'].$_REQUEST['faxsol8'].$_REQUEST['faxsol9'].$_REQUEST['faxsol10'];
	$objPHPExcel->getActiveSheet()->setCellValue('an13', $_REQUEST['faxsol1']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao13', $_REQUEST['faxsol2']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap13', $_REQUEST['faxsol3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq13', $_REQUEST['faxsol4']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar13', $_REQUEST['faxsol5']);
	$objPHPExcel->getActiveSheet()->setCellValue('as13', $_REQUEST['faxsol6']);
	$objPHPExcel->getActiveSheet()->setCellValue('at13', $_REQUEST['faxsol7']);
	$objPHPExcel->getActiveSheet()->setCellValue('au13', $_REQUEST['faxsol8']);
	$objPHPExcel->getActiveSheet()->setCellValue('av13', $_REQUEST['faxsol9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw13', $_REQUEST['faxsol10']);
	
	$nomconemp=ucwords($_REQUEST['nomconemp']);
	$segnomconemp=ucwords($_REQUEST['segnomconemp']);
	$apepaconemp=ucwords($_REQUEST['apepaconemp']);
	$apemaconemp=ucwords($_REQUEST['apemaconemp']);
	$NomDatConEmp="";
	if($segnomconemp!=""){
	$NomDatConEmp.=$nomconemp.' '.$segnomconemp.' '.$apepaconemp.' '.$apemaconemp;
	}else{
	$NomDatConEmp.=$nomconemp.' '.$apepaconemp.' '.$apemaconemp;
	}
	$objPHPExcel->getActiveSheet()->setCellValue('b23', $nomconemp);
	$objPHPExcel->getActiveSheet()->setCellValue('n23', $segnomconemp);
	$objPHPExcel->getActiveSheet()->setCellValue('ab23', $apepaconemp);
	$objPHPExcel->getActiveSheet()->setCellValue('an23', $apemaconemp);
	
	$TelDatConEmp="";
	$TelDatConEmp.=$_REQUEST['telconemp1'].$_REQUEST['telconemp2'].$_REQUEST['telconemp3'].$_REQUEST['telconemp4'].$_REQUEST['telconemp5'].$_REQUEST['telconemp6'].$_REQUEST['telconemp7'].$_REQUEST['telconemp8'].$_REQUEST['telconemp9'].$_REQUEST['telconemp10'];
	$objPHPExcel->getActiveSheet()->setCellValue('b27', $_REQUEST['telconemp1']);
	$objPHPExcel->getActiveSheet()->setCellValue('c27', $_REQUEST['telconemp2']);
	$objPHPExcel->getActiveSheet()->setCellValue('d27', $_REQUEST['telconemp3']);
	$objPHPExcel->getActiveSheet()->setCellValue('e27', $_REQUEST['telconemp4']);
	$objPHPExcel->getActiveSheet()->setCellValue('f27', $_REQUEST['telconemp5']);
	$objPHPExcel->getActiveSheet()->setCellValue('g27', $_REQUEST['telconemp6']);
	$objPHPExcel->getActiveSheet()->setCellValue('h27', $_REQUEST['telconemp7']);
	$objPHPExcel->getActiveSheet()->setCellValue('i27', $_REQUEST['telconemp8']);
	$objPHPExcel->getActiveSheet()->setCellValue('k27', $_REQUEST['telconemp9']);
	$objPHPExcel->getActiveSheet()->setCellValue('m27', $_REQUEST['telconemp10']);
	
	$mailconemp=$_REQUEST['mailconemp'];
	$objPHPExcel->getActiveSheet()->setCellValue('o27', $_REQUEST['mailconemp']);
	
	$RFCDatConEmp="";
	$RFCDatConEmp.=strtoupper($_REQUEST['rfcconemp1'].$_REQUEST['rfcconemp2'].$_REQUEST['rfcconemp3'].$_REQUEST['rfcconemp4'].$_REQUEST['rfcconemp5'].$_REQUEST['rfcconemp6'].$_REQUEST['rfcconemp7'].$_REQUEST['rfcconemp8'].$_REQUEST['rfcconemp9'].$_REQUEST['rfcconemp10'].$_REQUEST['rfcconemp11'].$_REQUEST['rfcconemp12'].$_REQUEST['rfcconemp13']);
	$objPHPExcel->getActiveSheet()->setCellValue('z27', strtoupper($_REQUEST['rfcconemp1']));
	$objPHPExcel->getActiveSheet()->setCellValue('aa27', strtoupper($_REQUEST['rfcconemp2']));
	$objPHPExcel->getActiveSheet()->setCellValue('ab27', strtoupper($_REQUEST['rfcconemp3']));
	$objPHPExcel->getActiveSheet()->setCellValue('ac27', strtoupper($_REQUEST['rfcconemp4']));
	$objPHPExcel->getActiveSheet()->setCellValue('ad27', strtoupper($_REQUEST['rfcconemp5']));
	$objPHPExcel->getActiveSheet()->setCellValue('ae27', strtoupper($_REQUEST['rfcconemp6']));
	$objPHPExcel->getActiveSheet()->setCellValue('af27', strtoupper($_REQUEST['rfcconemp7']));
	$objPHPExcel->getActiveSheet()->setCellValue('ag27', strtoupper($_REQUEST['rfcconemp8']));
	$objPHPExcel->getActiveSheet()->setCellValue('ah27', strtoupper($_REQUEST['rfcconemp9']));
	$objPHPExcel->getActiveSheet()->setCellValue('ai27', strtoupper($_REQUEST['rfcconemp10']));
	$objPHPExcel->getActiveSheet()->setCellValue('aj27', strtoupper($_REQUEST['rfcconemp11']));
	$objPHPExcel->getActiveSheet()->setCellValue('ak27', strtoupper($_REQUEST['rfcconemp12']));
	$objPHPExcel->getActiveSheet()->setCellValue('al27', strtoupper($_REQUEST['rfcconemp13']));
	
	$FaxDatConEmp="";
	$FaxDatConEmp.=$_REQUEST['faxconemp1'].$_REQUEST['faxconemp2'].$_REQUEST['faxconemp3'].$_REQUEST['faxconemp4'].$_REQUEST['faxconemp5'].$_REQUEST['faxconemp6'].$_REQUEST['faxconemp7'].$_REQUEST['faxconemp8'].$_REQUEST['faxconemp9'].$_REQUEST['faxconemp10'];
	
	$objPHPExcel->getActiveSheet()->setCellValue('an27', $_REQUEST['faxconemp1']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao27', $_REQUEST['faxconemp2']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap27', $_REQUEST['faxconemp3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq27', $_REQUEST['faxconemp4']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar27', $_REQUEST['faxconemp5']);
	$objPHPExcel->getActiveSheet()->setCellValue('as27', $_REQUEST['faxconemp6']);
	$objPHPExcel->getActiveSheet()->setCellValue('at27', $_REQUEST['faxconemp7']);
	$objPHPExcel->getActiveSheet()->setCellValue('au27', $_REQUEST['faxconemp8']);
	$objPHPExcel->getActiveSheet()->setCellValue('av27', $_REQUEST['faxconemp9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw27', $_REQUEST['faxconemp10']);
	
	$puesconemp=$_REQUEST['puesconemp'];
	$objPHPExcel->getActiveSheet()->setCellValue('b31', $_REQUEST['puesconemp']);
	
	$actprinc=$_REQUEST['actprinc'];
	$objPHPExcel->getActiveSheet()->setCellValue('b36', $_REQUEST['actprinc']);
	
	$IniOpDatGenPM="";
	$IniOpDatGenPM.=$_REQUEST['inicoper3'].$_REQUEST['inicoper2'].$_REQUEST['inicoper1'];
	$objPHPExcel->getActiveSheet()->setCellValue('aa36', $_REQUEST['inicoper1']);
	$objPHPExcel->getActiveSheet()->setCellValue('ad36', $_REQUEST['inicoper2']);
	$objPHPExcel->getActiveSheet()->setCellValue('ai36', $_REQUEST['inicoper3']);
	
	$cantperson=$_REQUEST['cantperson'];
	$objPHPExcel->getActiveSheet()->setCellValue('an36', $_REQUEST['cantperson']);
	
	$antemp=$_REQUEST['antemp'];
	$objPHPExcel->getActiveSheet()->setCellValue('b41', $_REQUEST['antemp']);
	
	$apodsusc=ucwords($_REQUEST['apodsusc']);
	$objPHPExcel->getActiveSheet()->setCellValue('m41', $apodsusc);
	
	$refbanc=$_REQUEST['refbanc'];
	$objPHPExcel->getActiveSheet()->setCellValue('b45', $_REQUEST['refbanc']);
	$numcuebanc=$_REQUEST['numcuebanc'];
	$objPHPExcel->getActiveSheet()->setCellValue('w45', $_REQUEST['numcuebanc']);
	
	$sucbanc1=$_REQUEST['sucbanc1'];
	$objPHPExcel->getActiveSheet()->setCellValue('m45', $_REQUEST['sucbanc1']);
	
	$FecApRefBan="";
	$FecApRefBan.=$_REQUEST['aperbanc1a'].$_REQUEST['aperbanc1m'].$_REQUEST['aperbanc1d'];
	$objPHPExcel->getActiveSheet()->setCellValue('an45', $_REQUEST['aperbanc1d']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq45', $_REQUEST['aperbanc1m']);
	$objPHPExcel->getActiveSheet()->setCellValue('au45', $_REQUEST['aperbanc1a']);
	
	$refbanc2=$_REQUEST['refbanc2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b49', $_REQUEST['refbanc2']);
	
	$sucbanc2=$_REQUEST['sucbanc2'];
	$objPHPExcel->getActiveSheet()->setCellValue('m49', $_REQUEST['sucbanc2']);
	
	$tarjrefbanc=$_REQUEST['tarjrefbanc'];
	$objPHPExcel->getActiveSheet()->setCellValue('w49', $_REQUEST['tarjrefbanc']);
	
	$FecApRefBan2="";
	$FecApRefBan2.=$_REQUEST['aperbanc1a2'].$_REQUEST['aperbanc1m2'].$_REQUEST['aperbanc1d2'];
	$objPHPExcel->getActiveSheet()->setCellValue('an49', $_REQUEST['aperbanc1d2']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq49', $_REQUEST['aperbanc1m2']);
	$objPHPExcel->getActiveSheet()->setCellValue('au49', $_REQUEST['aperbanc1a2']);
	
	$cargdir=$_REQUEST['cargdir'];
	$objPHPExcel->getActiveSheet()->setCellValue('b54', $_REQUEST['cargdir']);
	
	$nocuentcd=$_REQUEST['nocuentcd'];
	$objPHPExcel->getActiveSheet()->setCellValue('q54', $_REQUEST['nocuentcd']);
	
	$refcomemp1=$_REQUEST['refcomemp1'];
	$objPHPExcel->getActiveSheet()->setCellValue('b58', $_REQUEST['refcomemp1']);
	
	$antirefcom1=$_REQUEST['antirefcom1'];
	$objPHPExcel->getActiveSheet()->setCellValue('ai58', $_REQUEST['antirefcom1']);
	
	$TelRefCom="";
	$TelRefCom.=$_REQUEST['telrefcom11'].$_REQUEST['telrefcom12'].$_REQUEST['telrefcom13'].$_REQUEST['telrefcom14'].$_REQUEST['telrefcom15'].$_REQUEST['telrefcom16'].$_REQUEST['telrefcom17'].$_REQUEST['telrefcom18'].$_REQUEST['telrefcom19'].$_REQUEST['telrefcom110'];
	$objPHPExcel->getActiveSheet()->setCellValue('an58', $_REQUEST['telrefcom11']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao58', $_REQUEST['telrefcom12']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap58', $_REQUEST['telrefcom13']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq58', $_REQUEST['telrefcom14']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar58', $_REQUEST['telrefcom15']);
	$objPHPExcel->getActiveSheet()->setCellValue('as58', $_REQUEST['telrefcom16']);
	$objPHPExcel->getActiveSheet()->setCellValue('at58', $_REQUEST['telrefcom17']);
	$objPHPExcel->getActiveSheet()->setCellValue('au58', $_REQUEST['telrefcom18']);
	$objPHPExcel->getActiveSheet()->setCellValue('av58', $_REQUEST['telrefcom19']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw58', $_REQUEST['telrefcom110']);
	$refcomemp2=$_REQUEST['refcomemp2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b62', $_REQUEST['refcomemp2']);
	
	$antirefcom2=$_REQUEST['antirefcom2'];
	$objPHPExcel->getActiveSheet()->setCellValue('ai62', $_REQUEST['antirefcom2']);
	
	
	$TelRefCom2="";
	$TelRefCom2.=$_REQUEST['telrefcom21'].$_REQUEST['telrefcom22'].$_REQUEST['telrefcom23'].$_REQUEST['telrefcom24'].$_REQUEST['telrefcom25'].$_REQUEST['telrefcom26'].$_REQUEST['telrefcom27'].$_REQUEST['telrefcom28'].$_REQUEST['telrefcom29'].$_REQUEST['telrefcom210'];
	
	$objPHPExcel->getActiveSheet()->setCellValue('an62', $_REQUEST['telrefcom21']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao62', $_REQUEST['telrefcom22']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap62', $_REQUEST['telrefcom23']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq62', $_REQUEST['telrefcom24']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar62', $_REQUEST['telrefcom25']);
	$objPHPExcel->getActiveSheet()->setCellValue('as62', $_REQUEST['telrefcom26']);
	$objPHPExcel->getActiveSheet()->setCellValue('at62', $_REQUEST['telrefcom27']);
	$objPHPExcel->getActiveSheet()->setCellValue('au62', $_REQUEST['telrefcom28']);
	$objPHPExcel->getActiveSheet()->setCellValue('av62', $_REQUEST['telrefcom29']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw62', $_REQUEST['telrefcom210']);
	$nomrazsoc=$_REQUEST['nomrazsoc'];
	$objPHPExcel->getActiveSheet()->setCellValue('b66', $_REQUEST['nomrazsoc']);
	
	$RFCObPerMor="";
	$RFCObPerMor.=strtoupper($_REQUEST['permorrfc1'].$_REQUEST['permorrfc2'].$_REQUEST['permorrfc3'].$_REQUEST['permorrfc4'].$_REQUEST['permorrfc5'].$_REQUEST['permorrfc6'].$_REQUEST['permorrfc7'].$_REQUEST['permorrfc8'].$_REQUEST['permorrfc9'].$_REQUEST['permorrfc10'].$_REQUEST['permorrfc11'].$_REQUEST['permorrfc12'].$_REQUEST['permorrfc13']);
	$objPHPExcel->getActiveSheet()->setCellValue('z66', strtoupper($_REQUEST['permorrfc1']));
	$objPHPExcel->getActiveSheet()->setCellValue('aa66', strtoupper($_REQUEST['permorrfc2']));
	$objPHPExcel->getActiveSheet()->setCellValue('ab66', strtoupper($_REQUEST['permorrfc3']));
	$objPHPExcel->getActiveSheet()->setCellValue('ac66', strtoupper($_REQUEST['permorrfc4']));
	$objPHPExcel->getActiveSheet()->setCellValue('ad66', strtoupper($_REQUEST['permorrfc5']));
	$objPHPExcel->getActiveSheet()->setCellValue('ae66', strtoupper($_REQUEST['permorrfc6']));
	$objPHPExcel->getActiveSheet()->setCellValue('af66', strtoupper($_REQUEST['permorrfc7']));
	$objPHPExcel->getActiveSheet()->setCellValue('ag66', strtoupper($_REQUEST['permorrfc8']));
	$objPHPExcel->getActiveSheet()->setCellValue('ah66', strtoupper($_REQUEST['permorrfc9']));
	$objPHPExcel->getActiveSheet()->setCellValue('ai66', strtoupper($_REQUEST['permorrfc10']));
	$objPHPExcel->getActiveSheet()->setCellValue('aj66', strtoupper($_REQUEST['permorrfc11']));
	$objPHPExcel->getActiveSheet()->setCellValue('ak66', strtoupper($_REQUEST['permorrfc12']));
	$objPHPExcel->getActiveSheet()->setCellValue('al66', strtoupper($_REQUEST['permorrfc13']));
	
	$TelObPerMor="";
	$TelObPerMor.=$_REQUEST['telpermor1'].$_REQUEST['telpermor2'].$_REQUEST['telpermor3'].$_REQUEST['telpermor4'].$_REQUEST['telpermor5'].$_REQUEST['telpermor6'].$_REQUEST['telpermor7'].$_REQUEST['telpermor8'].$_REQUEST['telpermor9'].$_REQUEST['telpermor10'];
	$objPHPExcel->getActiveSheet()->setCellValue('an66', $_REQUEST['telpermor1']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao66', $_REQUEST['telpermor2']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap66', $_REQUEST['telpermor3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq66', $_REQUEST['telpermor4']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar66', $_REQUEST['telpermor5']);
	$objPHPExcel->getActiveSheet()->setCellValue('as66', $_REQUEST['telpermor6']);
	$objPHPExcel->getActiveSheet()->setCellValue('at66', $_REQUEST['telpermor7']);
	$objPHPExcel->getActiveSheet()->setCellValue('au66', $_REQUEST['telpermor8']);
	$objPHPExcel->getActiveSheet()->setCellValue('av66', $_REQUEST['telpermor9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw66', $_REQUEST['telpermor10']);
	
	$dirpermor=$_REQUEST['dirpermor'];
	$objPHPExcel->getActiveSheet()->setCellValue('b70', $_REQUEST['dirpermor']);
	
	$FaxObPerMor="";
	$FaxObPerMor.=$_REQUEST['faxpermor1'].$_REQUEST['faxpermor2'].$_REQUEST['faxpermor3'].$_REQUEST['faxpermor4'].$_REQUEST['faxpermor5'].$_REQUEST['faxpermor6'].$_REQUEST['faxpermor7'].$_REQUEST['faxpermor8'].$_REQUEST['faxpermor9'].$_REQUEST['faxpermor10'];
	$objPHPExcel->getActiveSheet()->setCellValue('an70', $_REQUEST['faxpermor1']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao70', $_REQUEST['faxpermor2']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap70', $_REQUEST['faxpermor3']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq70', $_REQUEST['faxpermor4']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar70', $_REQUEST['faxpermor5']);
	$objPHPExcel->getActiveSheet()->setCellValue('as70', $_REQUEST['faxpermor6']);
	$objPHPExcel->getActiveSheet()->setCellValue('at70', $_REQUEST['faxpermor7']);
	$objPHPExcel->getActiveSheet()->setCellValue('au70', $_REQUEST['faxpermor8']);
	$objPHPExcel->getActiveSheet()->setCellValue('av70', $_REQUEST['faxpermor9']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw70', $_REQUEST['faxpermor10']);
	
	$colpermor=$_REQUEST['colpermor'];
	$objPHPExcel->getActiveSheet()->setCellValue('b74', $_REQUEST['colpermor']);
	$cdpermor=$_REQUEST['cdpermor'];
	$objPHPExcel->getActiveSheet()->setCellValue('s74', $_REQUEST['cdpermor']);
	$edopermor=$_REQUEST['edopermor'];
	$objPHPExcel->getActiveSheet()->setCellValue('ag74', $_REQUEST['edopermor']);
	$cppremor=$_REQUEST['cppremor'];
	$objPHPExcel->getActiveSheet()->setCellValue('ar74', $_REQUEST['cppremor']);
	
	$antemp2=$_REQUEST['antemp2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b79', $_REQUEST['antemp2']);
	$apodsusc2=ucwords($_REQUEST['apodsusc2']);
	$objPHPExcel->getActiveSheet()->setCellValue('m79', ucwords($_REQUEST['apodsusc2']));
	$actprinc2=$_REQUEST['actprinc2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b83', $_REQUEST['actprinc2']);
	$cantperson2=$_REQUEST['cantperson2'];
	$objPHPExcel->getActiveSheet()->setCellValue('an83', $_REQUEST['cantperson2']);
	
	$IniOpDatGen="";
	$IniOpDatGen.=$_REQUEST['inicoper32'].'-'.$_REQUEST['inicoper22'].'-'.$_REQUEST['inicoper12'];
	$objPHPExcel->getActiveSheet()->setCellValue('z83', $_REQUEST['inicoper12']);
	$objPHPExcel->getActiveSheet()->setCellValue('ad83', $_REQUEST['inicoper22']);
	$objPHPExcel->getActiveSheet()->setCellValue('ai83', $_REQUEST['inicoper32']);
	
	$accionista1=ucwords($_REQUEST['accionista1']);
	$objPHPExcel->getActiveSheet()->setCellValue('e88', ucwords($_REQUEST['accionista1']));
	$accionista2=ucwords($_REQUEST['accionista2']);
	$objPHPExcel->getActiveSheet()->setCellValue('e90', ucwords($_REQUEST['accionista2']));
	$accionista3=ucwords($_REQUEST['accionista3']);
	$objPHPExcel->getActiveSheet()->setCellValue('e92', ucwords($_REQUEST['accionista3']));
	$accionista4=ucwords($_REQUEST['accionista4']);
	$objPHPExcel->getActiveSheet()->setCellValue('e94', ucwords($_REQUEST['accionista4']));
	
	$rfcaccion1=ucwords($_REQUEST['rfcaccion1']);
	$objPHPExcel->getActiveSheet()->setCellValue('z88', strtoupper($_REQUEST['rfcaccion1']));
	$rfcaccion2=ucwords($_REQUEST['rfcaccion2']);
	$objPHPExcel->getActiveSheet()->setCellValue('z90', strtoupper($_REQUEST['rfcaccion2']));
	$rfcaccion3=ucwords($_REQUEST['rfcaccion3']);
	$objPHPExcel->getActiveSheet()->setCellValue('z92', strtoupper($_REQUEST['rfcaccion3']));
	$rfcaccion4=ucwords($_REQUEST['rfcaccion4']);
	$objPHPExcel->getActiveSheet()->setCellValue('z94', strtoupper($_REQUEST['rfcaccion4']));
	
	$uno=$_REQUEST['%1'];
	$objPHPExcel->getActiveSheet()->setCellValue('ak88', $_REQUEST['%1']);
	$dos=$_REQUEST['%2'];
	$objPHPExcel->getActiveSheet()->setCellValue('ak90', $_REQUEST['%2']);
	$tres=$_REQUEST['%3'];
	$objPHPExcel->getActiveSheet()->setCellValue('ak92', $_REQUEST['%3']);
	$cuatro=$_REQUEST['%4'];
	$objPHPExcel->getActiveSheet()->setCellValue('ak94', $_REQUEST['%4']);
	
	$accpermor1=ucwords($_REQUEST['accpermor1']);
	$objPHPExcel->getActiveSheet()->setCellValue('e97', ucwords($_REQUEST['accpermor1']));
	$accpermor2=ucwords($_REQUEST['accpermor2']);
	$objPHPExcel->getActiveSheet()->setCellValue('e99', ucwords($_REQUEST['accpermor2']));
	
	$rfcaccpermor1=strtoupper($_REQUEST['rfcaccpermor1']);
	$objPHPExcel->getActiveSheet()->setCellValue('z97', strtoupper($_REQUEST['rfcaccpermor1']));
	$rfcaccpermor2=strtoupper($_REQUEST['rfcaccpermor2']);
	$objPHPExcel->getActiveSheet()->setCellValue('z99', strtoupper($_REQUEST['rfcaccpermor2']));
	$permoracc1=$_REQUEST['%permoracc1'];
	$objPHPExcel->getActiveSheet()->setCellValue('ak97', $_REQUEST['%permoracc1']);
	$permoracc2=$_REQUEST['%permoracc2'];
	$objPHPExcel->getActiveSheet()->setCellValue('ak99', $_REQUEST['%permoracc2']);
	
	$NomObSol="";
	$NomObSol.=ucwords($_REQUEST['datobnom1'].' '.$_REQUEST['datobappat1'].' '.$_REQUEST['datobapmat1']);
	$objPHPExcel->getActiveSheet()->setCellValue('b104', ucwords($_REQUEST['datobnom1']));
	$objPHPExcel->getActiveSheet()->setCellValue('k104', ucwords($_REQUEST['datobappat1']));
	$objPHPExcel->getActiveSheet()->setCellValue('q104', ucwords($_REQUEST['datobapmat1']));
	$datobdir1=$_REQUEST['datobdir1'];
	$objPHPExcel->getActiveSheet()->setCellValue('b108', $_REQUEST['datobdir1']);
	$datobcol1=$_REQUEST['datobcol1'];
	$objPHPExcel->getActiveSheet()->setCellValue('b112', $_REQUEST['datobcol1']);
	$datobcd1=$_REQUEST['datobcd1'];
	$objPHPExcel->getActiveSheet()->setCellValue('z112', $_REQUEST['datobcd1']);
	$datoblugnac1=$_REQUEST['datoblugnac1'];
	$objPHPExcel->getActiveSheet()->setCellValue('af112', $_REQUEST['datoblugnac1']);
	$PropObSol="";
	if($_REQUEST['datobprop1']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('ap112', "X");
	$PropObSol="Si";
	}
	if($_REQUEST['datobprop1']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('as112', "X");
	$PropObSol="No";
	}
	
	$datobedo1=$_REQUEST['datobedo1'];
	$objPHPExcel->getActiveSheet()->setCellValue('b117', $_REQUEST['datobedo1']);
	$datobcp1=$_REQUEST['datobcp1'];
	$objPHPExcel->getActiveSheet()->setCellValue('k117', $_REQUEST['datobcp1']);
	$datobmail1=$_REQUEST['datobmail1'];
	$objPHPExcel->getActiveSheet()->setCellValue('ac117', $_REQUEST['datobmail1']);
	
	$SexoObSol="";
	if($_REQUEST['datobsex1']=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('v117', "X");
	$SexoObSol="Masculino";
	}
	if($_REQUEST['datobsex1']=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('z117', "X");
	$SexoObSol="Femenino";
	}
	
	$FeNacObSol="";
	$FeNacObSol.=$_REQUEST['datobfechnac1a'].$_REQUEST['datobfechnac1m'].$_REQUEST['datobfechnac1d'];
	$objPHPExcel->getActiveSheet()->setCellValue('am117', $_REQUEST['datobfechnac1d']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao117', $_REQUEST['datobfechnac1m']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq117', $_REQUEST['datobfechnac1a']);
	
	$datobed1=$_REQUEST['datobed1'];
	$objPHPExcel->getActiveSheet()->setCellValue('au117', $_REQUEST['datobed1']);
	
	$datobcurp1=strtoupper($_REQUEST['datobcurp1']);
	$objPHPExcel->getActiveSheet()->setCellValue('z108', strtoupper($_REQUEST['datobcurp1']));
	
	
	$RFCObSol="";
	$RFCObSol.=strtoupper($_REQUEST['datobrfc11'].$_REQUEST['datobrfc12'].$_REQUEST['datobrfc13'].$_REQUEST['datobrfc14'].$_REQUEST['datobrfc15'].$_REQUEST['datobrfc16'].$_REQUEST['datobrfc17'].$_REQUEST['datobrfc18'].$_REQUEST['datobrfc19'].$_REQUEST['datobrfc110'].$_REQUEST['datobrfc111'].$_REQUEST['datobrfc112'].$_REQUEST['datobrfc113']);
	$objPHPExcel->getActiveSheet()->setCellValue('z104', strtoupper($_REQUEST['datobrfc11']));
	$objPHPExcel->getActiveSheet()->setCellValue('aa104', strtoupper($_REQUEST['datobrfc12']));
	$objPHPExcel->getActiveSheet()->setCellValue('ab104', strtoupper($_REQUEST['datobrfc13']));
	$objPHPExcel->getActiveSheet()->setCellValue('ac104', strtoupper($_REQUEST['datobrfc14']));
	$objPHPExcel->getActiveSheet()->setCellValue('ad104', strtoupper($_REQUEST['datobrfc15']));
	$objPHPExcel->getActiveSheet()->setCellValue('ae104', strtoupper($_REQUEST['datobrfc16']));
	$objPHPExcel->getActiveSheet()->setCellValue('af104', strtoupper($_REQUEST['datobrfc17']));
	$objPHPExcel->getActiveSheet()->setCellValue('ag104', strtoupper($_REQUEST['datobrfc18']));
	$objPHPExcel->getActiveSheet()->setCellValue('ah104', strtoupper($_REQUEST['datobrfc19']));
	$objPHPExcel->getActiveSheet()->setCellValue('ai104', strtoupper($_REQUEST['datobrfc110']));
	$objPHPExcel->getActiveSheet()->setCellValue('aj104', strtoupper($_REQUEST['datobrfc111']));
	$objPHPExcel->getActiveSheet()->setCellValue('ak104', strtoupper($_REQUEST['datobrfc112']));
	$objPHPExcel->getActiveSheet()->setCellValue('al104', strtoupper($_REQUEST['datobrfc113']));
	
	$TelObSol="";
	$TelObSol.=$_REQUEST['datobtel11'].$_REQUEST['datobtel12'].$_REQUEST['datobtel13'].$_REQUEST['datobtel14'].$_REQUEST['datobtel15'].$_REQUEST['datobtel16'].$_REQUEST['datobtel17'].$_REQUEST['datobtel18'].$_REQUEST['datobtel19'].$_REQUEST['datobtel110'];
	$objPHPExcel->getActiveSheet()->setCellValue('an104', $_REQUEST['datobtel11']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao104', $_REQUEST['datobtel12']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap104', $_REQUEST['datobtel13']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq104', $_REQUEST['datobtel14']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar104', $_REQUEST['datobtel15']);
	$objPHPExcel->getActiveSheet()->setCellValue('as104', $_REQUEST['datobtel16']);
	$objPHPExcel->getActiveSheet()->setCellValue('at104', $_REQUEST['datobtel17']);
	$objPHPExcel->getActiveSheet()->setCellValue('au104', $_REQUEST['datobtel18']);
	$objPHPExcel->getActiveSheet()->setCellValue('av104', $_REQUEST['datobtel19']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw104', $_REQUEST['datobtel110']);
	$MovObSol="";
	$MovObSol.=$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102'];
	$objPHPExcel->getActiveSheet()->setCellValue('an108', $_REQUEST['datobtel112']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao108', $_REQUEST['datobtel122']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap108', $_REQUEST['datobtel132']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq108', $_REQUEST['datobtel142']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar108', $_REQUEST['datobtel152']);
	$objPHPExcel->getActiveSheet()->setCellValue('as108', $_REQUEST['datobtel162']);
	$objPHPExcel->getActiveSheet()->setCellValue('at108', $_REQUEST['datobtel172']);
	$objPHPExcel->getActiveSheet()->setCellValue('au108', $_REQUEST['datobtel182']);
	$objPHPExcel->getActiveSheet()->setCellValue('av108', $_REQUEST['datobtel192']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw108', $_REQUEST['datobtel1102']);
	$obsol1=ucwords($_REQUEST['obsol1']);
	$objPHPExcel->getActiveSheet()->setCellValue('b121', ucwords($_REQUEST['obsol1']));
	
	$SexoObSolPF="";
	if($_REQUEST['datobsex11']=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ad121', "X");
	$SexoObSolPF="Masculino";
	}
	if($_REQUEST['datobsex11']=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('aj121', "X");
	$SexoObSolPF="Femenino";
	}
	
	$FeNacObSolPF="";
	$FeNacObSolPF.=$_REQUEST['datobfechnac1a2'].$_REQUEST['datobfechnac1m2'].$_REQUEST['datobfechnac1d2'];
	$objPHPExcel->getActiveSheet()->setCellValue('an121', $_REQUEST['datobfechnac1d2']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq121', $_REQUEST['datobfechnac1m2']);
	$objPHPExcel->getActiveSheet()->setCellValue('at121', $_REQUEST['datobfechnac1a2']);
	
	$RFCObSolPF=strtoupper($_REQUEST['datobnom22']);
	$objPHPExcel->getActiveSheet()->setCellValue('b125', strtoupper($_REQUEST['datobnom22']));
	
	$CURPObSolPF=strtoupper($_REQUEST['datobappat22']);
	$objPHPExcel->getActiveSheet()->setCellValue('z125', strtoupper($_REQUEST['datobappat22']));
	$EdObSolPF=$_REQUEST['datobapmat22'];
	$objPHPExcel->getActiveSheet()->setCellValue('an125', $_REQUEST['datobapmat22']);
	//////////////////////////////////
	
	$NomObSol2="";
	$NomObSol2.=ucwords($_REQUEST['datobnom2'].' '.$_REQUEST['datobappat2'].' '.$_REQUEST['datobapmat2']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('b130', ucwords($_REQUEST['datobnom2']));
	$objPHPExcel->getActiveSheet()->setCellValue('k130', ucwords($_REQUEST['datobappat2']));
	$objPHPExcel->getActiveSheet()->setCellValue('q130', ucwords($_REQUEST['datobapmat2']));
	
	$datobdir2=$_REQUEST['datobdir2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b134', $_REQUEST['datobdir2']);
	$datobcol2=$_REQUEST['datobcol2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b138', $_REQUEST['datobcol2']);
	$datobcd2=$_REQUEST['datobcd2'];
	$objPHPExcel->getActiveSheet()->setCellValue('z138', $_REQUEST['datobcd2']);
	$datoblugnac2=$_REQUEST['datoblugnac2'];
	$objPHPExcel->getActiveSheet()->setCellValue('af138', $_REQUEST['datoblugnac2']);
	
	$PropObSol2="";
	if($_REQUEST['datobprop2']=="Si"){
	$objPHPExcel->getActiveSheet()->setCellValue('ap138', "X");
	$PropObSol2="Si";
	}
	if($_REQUEST['datobprop2']=="No"){
	$objPHPExcel->getActiveSheet()->setCellValue('as138', "X");
	$PropObSol2="No";
	}
	
	$datobedo2=$_REQUEST['datobedo2'];
	$objPHPExcel->getActiveSheet()->setCellValue('b143', $_REQUEST['datobedo2']);
	$datobcp2=$_REQUEST['datobcp2'];
	$objPHPExcel->getActiveSheet()->setCellValue('k143', $_REQUEST['datobcp2']);
	$datobmail2=$_REQUEST['datobmail2'];
	$objPHPExcel->getActiveSheet()->setCellValue('ac143', $_REQUEST['datobmail2']);
	
	$SexoObSol2="";
	if($_REQUEST['datobsex2']=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('v143', "X");
	$SexoObSol2="Masculino";
	}
	if($_REQUEST['datobsex2']=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('z143', "X");
	$SexoObSol2="Femenino";
	}
	
	$FeNacObSol2="";
	$FeNacObSol2.=$_REQUEST['datobfechnac2a'].'-'.$_REQUEST['datobfechnac2m'].'-'.$_REQUEST['datobfechnac2d'];
	
	$objPHPExcel->getActiveSheet()->setCellValue('am143', $_REQUEST['datobfechnac2d']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao143', $_REQUEST['datobfechnac2m']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq143', $_REQUEST['datobfechnac2a']);
	
	$datobed2=$_REQUEST['datobed2'];
	$objPHPExcel->getActiveSheet()->setCellValue('au143', $_REQUEST['datobed2']);
	
	$datobcurp2=strtoupper($_REQUEST['datobcurp2']);
	$objPHPExcel->getActiveSheet()->setCellValue('z134', strtoupper($_REQUEST['datobcurp2']));
	
	
	$RFCObSol2="";
	$RFCObSol2.=strtoupper($_REQUEST['datobrfc21'].$_REQUEST['datobrfc22'].$_REQUEST['datobrfc23'].$_REQUEST['datobrfc24'].$_REQUEST['datobrfc25'].$_REQUEST['datobrfc26'].$_REQUEST['datobrfc27'].$_REQUEST['datobrfc28'].$_REQUEST['datobrfc29'].$_REQUEST['datobrfc210'].$_REQUEST['datobrfc211'].$_REQUEST['datobrfc212'].$_REQUEST['datobrfc213']);
	$objPHPExcel->getActiveSheet()->setCellValue('z130', strtoupper($_REQUEST['datobrfc21']));
	$objPHPExcel->getActiveSheet()->setCellValue('aa130', strtoupper($_REQUEST['datobrfc22']));
	$objPHPExcel->getActiveSheet()->setCellValue('ab130', strtoupper($_REQUEST['datobrfc23']));
	$objPHPExcel->getActiveSheet()->setCellValue('ac130', strtoupper($_REQUEST['datobrfc24']));
	$objPHPExcel->getActiveSheet()->setCellValue('ad130', strtoupper($_REQUEST['datobrfc25']));
	$objPHPExcel->getActiveSheet()->setCellValue('ae130', strtoupper($_REQUEST['datobrfc26']));
	$objPHPExcel->getActiveSheet()->setCellValue('af130', strtoupper($_REQUEST['datobrfc27']));
	$objPHPExcel->getActiveSheet()->setCellValue('ag130', strtoupper($_REQUEST['datobrfc28']));
	$objPHPExcel->getActiveSheet()->setCellValue('ah130', strtoupper($_REQUEST['datobrfc29']));
	$objPHPExcel->getActiveSheet()->setCellValue('ai130', strtoupper($_REQUEST['datobrfc210']));
	$objPHPExcel->getActiveSheet()->setCellValue('aj130', strtoupper($_REQUEST['datobrfc211']));
	$objPHPExcel->getActiveSheet()->setCellValue('ak130', strtoupper($_REQUEST['datobrfc212']));
	$objPHPExcel->getActiveSheet()->setCellValue('al130', strtoupper($_REQUEST['datobrfc213']));
	
	
	$TelObSol2="";
	$TelObSol2.=$_REQUEST['datobtel21'].$_REQUEST['datobtel22'].$_REQUEST['datobtel23'].$_REQUEST['datobtel24'].$_REQUEST['datobtel25'].$_REQUEST['datobtel26'].$_REQUEST['datobtel27'].$_REQUEST['datobtel28'].$_REQUEST['datobtel29'].$_REQUEST['datobtel210'];
	
	$objPHPExcel->getActiveSheet()->setCellValue('an130', $_REQUEST['datobtel21']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao130', $_REQUEST['datobtel22']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap130', $_REQUEST['datobtel23']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq130', $_REQUEST['datobtel24']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar130', $_REQUEST['datobtel25']);
	$objPHPExcel->getActiveSheet()->setCellValue('as130', $_REQUEST['datobtel26']);
	$objPHPExcel->getActiveSheet()->setCellValue('at130', $_REQUEST['datobtel27']);
	$objPHPExcel->getActiveSheet()->setCellValue('au130', $_REQUEST['datobtel28']);
	$objPHPExcel->getActiveSheet()->setCellValue('av130', $_REQUEST['datobtel29']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw130', $_REQUEST['datobtel210']);
	
	$MovObSol2="";
	$MovObSol2.=$_REQUEST['datobtel1122'].$_REQUEST['datobtel1222'].$_REQUEST['datobtel1322'].$_REQUEST['datobtel1422'].$_REQUEST['datobtel1522'].$_REQUEST['datobtel1622'].$_REQUEST['datobtel1722'].$_REQUEST['datobtel1822'].$_REQUEST['datobtel1922'].$_REQUEST['datobtel11022'];
	
	$objPHPExcel->getActiveSheet()->setCellValue('an134', $_REQUEST['datobtel1122']);
	$objPHPExcel->getActiveSheet()->setCellValue('ao134', $_REQUEST['datobtel1222']);
	$objPHPExcel->getActiveSheet()->setCellValue('ap134', $_REQUEST['datobtel1322']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq134', $_REQUEST['datobtel1422']);
	$objPHPExcel->getActiveSheet()->setCellValue('ar134', $_REQUEST['datobtel1522']);
	$objPHPExcel->getActiveSheet()->setCellValue('as134', $_REQUEST['datobtel1622']);
	$objPHPExcel->getActiveSheet()->setCellValue('at134', $_REQUEST['datobtel1722']);
	$objPHPExcel->getActiveSheet()->setCellValue('au134', $_REQUEST['datobtel1822']);
	$objPHPExcel->getActiveSheet()->setCellValue('av134', $_REQUEST['datobtel1922']);
	$objPHPExcel->getActiveSheet()->setCellValue('aw134', $_REQUEST['datobtel11022']);
	
	$obsol2=ucwords($_REQUEST['obsol2']);
	$objPHPExcel->getActiveSheet()->setCellValue('b147', ucwords($_REQUEST['obsol2']));
	
	$SexoObSolPF2="";
	if($_REQUEST['datobsex22']=="M"){
	$objPHPExcel->getActiveSheet()->setCellValue('ad147', "X");
	$SexoObSolPF2="Masculino";
	}
	if($_REQUEST['datobsex22']=="F"){
	$objPHPExcel->getActiveSheet()->setCellValue('aj147', "X");
	$SexoObSolPF2="Femenino";
	}
	
	$FeNacObSolPF2="";
	$FeNacObSolPF2.=$_REQUEST['datobfechnac1a22'].'-'.$_REQUEST['datobfechnac1m22'].'-'.$_REQUEST['datobfechnac1d22'];
	$objPHPExcel->getActiveSheet()->setCellValue('an147', $_REQUEST['datobfechnac1d22']);
	$objPHPExcel->getActiveSheet()->setCellValue('aq147', $_REQUEST['datobfechnac1m22']);
	$objPHPExcel->getActiveSheet()->setCellValue('at147', $_REQUEST['datobfechnac1a22']);
	
	$RFCObSolPF2=strtoupper($_REQUEST['datobnom222']);
	$objPHPExcel->getActiveSheet()->setCellValue('b151', strtoupper($_REQUEST['datobnom222']));
	
	$CURPObSolPF2=strtoupper($_REQUEST['datobappat222']);
	$objPHPExcel->getActiveSheet()->setCellValue('z151', strtoupper($_REQUEST['datobappat222']));
	
	$EdObSolPF2=$_REQUEST['datobapmat222'];
	$objPHPExcel->getActiveSheet()->setCellValue('an151', $_REQUEST['datobapmat222']);
	$NomRepLegInvHist=ucwords($_REQUEST['datobnom2222']);
	$objPHPExcel->getActiveSheet()->setCellValue('c178', ucwords($_REQUEST['datobnom2222']));
	
	$RFCRepLegInvHist=strtoupper($_REQUEST['datobappat2222']);
	$objPHPExcel->getActiveSheet()->setCellValue('u178', strtoupper($_REQUEST['datobappat2222']));
	
	$DirRepLegInvHist=$_REQUEST['datobdir22'];
	$objPHPExcel->getActiveSheet()->setCellValue('c181', $_REQUEST['datobdir22']);
	
	$ColRepLegInvHist=$_REQUEST['datobcol23'];
	$objPHPExcel->getActiveSheet()->setCellValue('ad181', $_REQUEST['datobcol23']);
	
	$CdRepLegInvHist=$_REQUEST['colsol22'];
	$objPHPExcel->getActiveSheet()->setCellValue('c184', $_REQUEST['colsol22']);
	
	$EdoRepLegInvHist=$_REQUEST['cdsol22'];
	$objPHPExcel->getActiveSheet()->setCellValue('s184', $_REQUEST['cdsol22']);
	
	$CPRepLegInvHist=$_REQUEST['lugnacsol22'];
	$objPHPExcel->getActiveSheet()->setCellValue('ae184', $_REQUEST['lugnacsol22']);
	$TelRepLegInHist=$_REQUEST['cpsol22'];
	$objPHPExcel->getActiveSheet()->setCellValue('al184', $_REQUEST['cpsol22']);
	
	$NomObSolPFInvHist=ucwords($_REQUEST['datobnom22222']);
	$objPHPExcel->getActiveSheet()->setCellValue('c187', ucwords($_REQUEST['datobnom22222']));
	$RFCObSolPFInvHist=strtoupper($_REQUEST['datobappat22222']);
	$objPHPExcel->getActiveSheet()->setCellValue('u187', strtoupper($_REQUEST['datobappat22222']));
	
	$DirObSolPFInvHist=$_REQUEST['datobdir222'];
	$objPHPExcel->getActiveSheet()->setCellValue('c190', $_REQUEST['datobdir222']);
	
	$ColObSolPFInvHist=$_REQUEST['datobcol232'];
	$objPHPExcel->getActiveSheet()->setCellValue('ad190', $_REQUEST['datobcol232']);
	$CdObSolPFInvHist=$_REQUEST['colsol222'];
	$objPHPExcel->getActiveSheet()->setCellValue('d192', $_REQUEST['colsol222']);
	
	$EdoObSolPFInvHist=$_REQUEST['cdsol222'];
	$objPHPExcel->getActiveSheet()->setCellValue('u192', $_REQUEST['cdsol222']);
	
	$CPObSolPFInvHist=$_REQUEST['lugnacsol222'];
	$objPHPExcel->getActiveSheet()->setCellValue('ah192', $_REQUEST['lugnacsol222']);
	
	$TelObSolPFInHist=$_REQUEST['cpsol222'];
	$objPHPExcel->getActiveSheet()->setCellValue('ao192', $_REQUEST['cpsol222']);
	
	$clavcon=$_REQUEST['clavcon'];
	$objPHPExcel->getActiveSheet()->setCellValue('b214', $_REQUEST['clavcon']);
	
	$nomcons=$_REQUEST['nomcons'];
	$objPHPExcel->getActiveSheet()->setCellValue('n214', $_REQUEST['nomcons']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('al214', $_REQUEST['fecha']);
	
	$nomvend=$_REQUEST['nomvend'];
	$objPHPExcel->getActiveSheet()->setCellValue('b217', $_REQUEST['nomvend']);
	
	$gerentegral=$_REQUEST['gerentegral'];
	$objPHPExcel->getActiveSheet()->setCellValue('w217', $_REQUEST['gerentegral']);
	
	///////////////////////////////////////////////////////////////////////////////////
	
	$objPHPExcel->getActiveSheet()->setCellValue('E227', $_REQUEST['fecha']);
	
	if($_REQUEST['escliente']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AM227', "ü");
	}
	if($_REQUEST['escliente']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AV227', "ü");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('J231', $_REQUEST['nomrazsoc2']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J232', $_REQUEST['cliente']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J233', $_REQUEST['dirsol']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J234', $_REQUEST['colsol']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J235', $_REQUEST['textfield5']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J236', $_REQUEST['edosol']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('J237', $_REQUEST['inicoper33'].'-'.$_REQUEST['inicoper23'].'-'.$_REQUEST['inicoper13']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN234', $_REQUEST['cpsol']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN235', $_REQUEST['cdsol']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN236', $_REQUEST['textfield10']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN237', strtoupper($_REQUEST['rfcsol1'].$_REQUEST['rfcsol2'].$_REQUEST['rfcsol3'].$_REQUEST['rfcsol4'].$_REQUEST['rfcsol5'].$_REQUEST['rfcsol6'].$_REQUEST['rfcsol7'].$_REQUEST['rfcsol8'].$_REQUEST['rfcsol9'].$_REQUEST['rfcsol10'].$_REQUEST['rfcsol11'].$_REQUEST['rfcsol12'].$_REQUEST['rfcsol13']));
	
	
	

	if($_REQUEST['select']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m244', "Otra");
	$objPHPExcel->getActiveSheet()->setCellValue('x244', "1");
	}
	if($_REQUEST['select']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m244', "Informal");
	$objPHPExcel->getActiveSheet()->setCellValue('x244', "2");
	}
	if($_REQUEST['select']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m244', "Vulnerable");
	$objPHPExcel->getActiveSheet()->setCellValue('x244', "3");
	}
	
	
	if($_REQUEST['select2']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('m245', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('x245', "0");
	}
	if($_REQUEST['select2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m245', "7-10 años");
	$objPHPExcel->getActiveSheet()->setCellValue('x245', "1");
	}
	if($_REQUEST['select2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m245', "4-6 años");
	$objPHPExcel->getActiveSheet()->setCellValue('x245', "2");
	}
	if($_REQUEST['select2']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m245', "1-3 años");
	$objPHPExcel->getActiveSheet()->setCellValue('x245', "3");
	}
	
	
	
	if($_REQUEST['select3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m246', "Prestamo");
	$objPHPExcel->getActiveSheet()->setCellValue('x246', "1");
	}
	if($_REQUEST['select3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m246', "Arrendamiento");
	$objPHPExcel->getActiveSheet()->setCellValue('x246', "2");
	}
	if($_REQUEST['select3']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m246', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('x246', "3");
	}
	
	
	if($_REQUEST['select4']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('m247', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('x247', "0");
	}
	if($_REQUEST['select4']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m247', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('x247', "1");
	}
	if($_REQUEST['select4']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m247', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('x247', "2");
	}
	if($_REQUEST['select4']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m247', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('x247', "3");
	}
	
	
	if($_REQUEST['select5']=="0"){
	$objPHPExcel->getActiveSheet()->setCellValue('m248', "N/A");
	$objPHPExcel->getActiveSheet()->setCellValue('x248', "0");
	}
	if($_REQUEST['select5']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m248', "1 a 2");
	$objPHPExcel->getActiveSheet()->setCellValue('x248', "1");
	}
	if($_REQUEST['select5']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m248', "3 a 4");
	$objPHPExcel->getActiveSheet()->setCellValue('x248', "2");
	}
	if($_REQUEST['select5']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m248', "5 o mas");
	$objPHPExcel->getActiveSheet()->setCellValue('x248', "3");
	}
	
	
	if($_REQUEST['select6']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m249', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('x249', "1");
	}
	if($_REQUEST['select6']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m249', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('x249', "2");
	}
	if($_REQUEST['select6']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m249', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('x249', "3");
	}
	
	
	if($_REQUEST['select7']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m250', "1% - 49%");
	$objPHPExcel->getActiveSheet()->setCellValue('x250', "1");
	}
	if($_REQUEST['select7']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m250', "50% - 74%");
	$objPHPExcel->getActiveSheet()->setCellValue('x250', "2");
	}
	if($_REQUEST['select7']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m250', "75% - 100%");
	$objPHPExcel->getActiveSheet()->setCellValue('x250', "3");
	}
	
	
	if($_REQUEST['select8']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m251', "$18000 - $20000");
	$objPHPExcel->getActiveSheet()->setCellValue('x251', "1");
	}
	if($_REQUEST['select8']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m251', "$21000 - $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('x251', "2");
	}
	if($_REQUEST['select8']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m251', "mas de $25000");
	$objPHPExcel->getActiveSheet()->setCellValue('x251', "3");
	}
	
	
	if($_REQUEST['select9']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m252', "1 a 3");
	$objPHPExcel->getActiveSheet()->setCellValue('x252', "1");
	}
	if($_REQUEST['select9']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m252', "4 a 6");
	$objPHPExcel->getActiveSheet()->setCellValue('x252', "2");
	}
	if($_REQUEST['select9']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m252', "7 a 10");
	$objPHPExcel->getActiveSheet()->setCellValue('x252', "3");
	}
	
	
	if($_REQUEST['select10']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m253', "Transferencia");
	$objPHPExcel->getActiveSheet()->setCellValue('x253', "1");
	}
	if($_REQUEST['select10']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m253', "Cheque");
	$objPHPExcel->getActiveSheet()->setCellValue('x253', "2");
	}
	if($_REQUEST['select10']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m253', "Efectivo");
	$objPHPExcel->getActiveSheet()->setCellValue('x253', "3");
	}
	
	
	
	if($_REQUEST['select11']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m254', "Agencia");
	$objPHPExcel->getActiveSheet()->setCellValue('x254', "1");
	}
	if($_REQUEST['select11']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m254', "Internet");
	$objPHPExcel->getActiveSheet()->setCellValue('x254', "2");
	}
	if($_REQUEST['select11']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m254', "Otro");
	$objPHPExcel->getActiveSheet()->setCellValue('x254', "3");
	}
	
	
	if($_REQUEST['select12']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m255', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('x255', "1");
	}
	if($_REQUEST['select12']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m255', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('x255', "2");
	}
	if($_REQUEST['select12']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m255', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('x255', "3");
	}
	
	
	if($_REQUEST['select13']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m256', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('x256', "1");
	}
	if($_REQUEST['select13']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m256', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('x256', "2");
	}
	if($_REQUEST['select13']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m256', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('x256', "3");
	}
	
	if($_REQUEST['select14']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m257', "Puebla-Coahuila-Zcatecas-Hidalgo-Durango");
	$objPHPExcel->getActiveSheet()->setCellValue('x257', "1");
	}
	if($_REQUEST['select14']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m257', "Durango-Chihuhua-Jalisco-México-CD México-Sonora");
	$objPHPExcel->getActiveSheet()->setCellValue('x257', "2");
	}
	if($_REQUEST['select14']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m257', "Guerrero-Michoacan-Tamaulipas-Morelos");
	$objPHPExcel->getActiveSheet()->setCellValue('x257', "3");
	}
	
	
	if($_REQUEST['select15']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m258', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('x258', "1");
	}
	if($_REQUEST['select15']=="2"){

	$objPHPExcel->getActiveSheet()->setCellValue('m258', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('x258', "2");
	}
	if($_REQUEST['select15']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m258', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('x258', "3");
	}
	
	
	if($_REQUEST['select16']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m259', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('x259', "1");
	}
	if($_REQUEST['select16']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m259', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('x259', "2");
	}
	if($_REQUEST['select16']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m259', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('x259', "3");
	}
	
	
	if($_REQUEST['select17']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('m260', "México");
	$objPHPExcel->getActiveSheet()->setCellValue('x260', "1");
	}
	if($_REQUEST['select17']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('m260', "Otros");
	$objPHPExcel->getActiveSheet()->setCellValue('x260', "2");
	}
	if($_REQUEST['select17']=="3"){
	$objPHPExcel->getActiveSheet()->setCellValue('m260', "Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar");
	$objPHPExcel->getActiveSheet()->setCellValue('x260', "3");
	}
	
	
	$suma=$_REQUEST['select']+$_REQUEST['select2']+$_REQUEST['select3']+$_REQUEST['select4']+$_REQUEST['select5']+$_REQUEST['select6']+$_REQUEST['select7']+$_REQUEST['select8']+$_REQUEST['select9']+$_REQUEST['select10']+$_REQUEST['select11']+$_REQUEST['select12']+$_REQUEST['select13']+$_REQUEST['select14']+$_REQUEST['select15']+$_REQUEST['select16']+$_REQUEST['select17'];

	$objPHPExcel->getActiveSheet()->setCellValue('X261', $suma);
	
	if(21<=$suma && $suma<=29){
	$objPHPExcel->getActiveSheet()->setCellValue('AA266', "Bajo");
	$objPHPExcel->getActiveSheet()->setCellValue('V241', "P");
	}
	if(30<=$suma && $suma<=45){
	$objPHPExcel->getActiveSheet()->setCellValue('AA266', "Medio");
	$objPHPExcel->getActiveSheet()->setCellValue('AA241', "P");
	}
	if(45<$suma){
	$objPHPExcel->getActiveSheet()->setCellValue('AA266', "Alto");
	$objPHPExcel->getActiveSheet()->setCellValue('AG241', "P");
	}
	
	//////////////////////////////////////////////////////////
	
	$objPHPExcel->getActiveSheet()->setCellValue('G325', $_REQUEST['fecha']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AG325', $_REQUEST['cliente']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B328', $_REQUEST['textfield12']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V328', $_REQUEST['textfield13']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AM328', $_REQUEST['textfield14']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B333', $_REQUEST['textfield15']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V333', $_REQUEST['textfield16']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN333', $_REQUEST['textfield17']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B338', $_REQUEST['textfield18']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN338', $_REQUEST['textfield20']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B343', $_REQUEST['textfield21']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Q343', $_REQUEST['textfield22']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('Z343', $_REQUEST['textfield23']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AH343', $_REQUEST['textfield24']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AO343', $_REQUEST['textfield25']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B348', $_REQUEST['textfield26']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('U348', $_REQUEST['textfield27']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AO348', $_REQUEST['textfield28']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B353', $_REQUEST['textfield29'].' / '.$_REQUEST['textfield30']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('W353', $_REQUEST['textfield31']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AM353', $_REQUEST['textfield32']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B358', $_REQUEST['textfield33']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V358', $_REQUEST['textfield34']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN358', $_REQUEST['textfield35']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B363', $_REQUEST['textfield36']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('T363', $_REQUEST['textfield37']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AK363', $_REQUEST['textfield38']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('M412', $_REQUEST['textfield39']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('M413', $_REQUEST['textfield40']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('M414', $_REQUEST['textfield41']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('M415', $_REQUEST['textfield42']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('M416', $_REQUEST['textfield43']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('M417', $_REQUEST['textfield44']);
	
	if($_REQUEST['copias']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AD413', "P");
	}
	if($_REQUEST['copias']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AH413', "P");
	}
	
	if($_REQUEST['cotejo']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('AD416', "P");
	}
	if($_REQUEST['cotejo']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AH416', "P");
	}
	
	if($_REQUEST['adjuntos1']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W422', "P");
	}
	if($_REQUEST['adjuntos1']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA422', "P");
	}
	
	if($_REQUEST['adjuntos2']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W423', "P");
	}
	if($_REQUEST['adjuntos2']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA423', "P");
	}
	
	if($_REQUEST['adjuntos3']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W425', "P");
	}
	if($_REQUEST['adjuntos3']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AA425', "P");
	}
	
	$objPHPExcel->getActiveSheet()->setCellValue('B433', $_REQUEST['textfield45']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V433', $_REQUEST['textfield46']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AL433', $_REQUEST['textfield47']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B438', $_REQUEST['textfield48']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('R438', $_REQUEST['textfield49']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AF438', $_REQUEST['textfield50']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AP438', $_REQUEST['textfield51']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B444', $_REQUEST['textfield52']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('U444', $_REQUEST['textfield53']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN444', $_REQUEST['textfield54']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B449', $_REQUEST['textfield55']. ' - '.$_REQUEST['textfield56']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('W449', $_REQUEST['textfield57']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AP449', $_REQUEST['textfield58']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B454', $_REQUEST['textfield59']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('W454', $_REQUEST['textfield60']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AN454', $_REQUEST['textfield61']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B459', $_REQUEST['textfield62']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('V459', $_REQUEST['textfield63']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('AK459', $_REQUEST['textfield64']);

	$objPHPExcel->getActiveSheet()->setCellValue('AM506', $_REQUEST['fecha']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I508', $_REQUEST['textfield65']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB508', $_REQUEST['textfield66']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I510', $_REQUEST['textfield67']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB510', $_REQUEST['textfield68']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I512', $_REQUEST['textfield69']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB512', $_REQUEST['textfield70']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I514', $_REQUEST['textfield71']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB514', $_REQUEST['textfield72']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I516', $_REQUEST['textfield73']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB516', $_REQUEST['textfield74']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I518', $_REQUEST['textfield75']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB518', $_REQUEST['textfield76']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I520', $_REQUEST['textfield77']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB520', $_REQUEST['textfield78']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I522', $_REQUEST['textfield79']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB522', $_REQUEST['textfield80']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I524', $_REQUEST['textfield81']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB524', $_REQUEST['textfield82']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('I526', $_REQUEST['textfield83']);
	$objPHPExcel->getActiveSheet()->setCellValue('AB526', $_REQUEST['textfield84']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K528', $_REQUEST['textfield85']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K530', $_REQUEST['textfield86']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K531', $_REQUEST['textfield87']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K532', $_REQUEST['textfield88']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K533', $_REQUEST['textfield89']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K534', $_REQUEST['textfield90']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K535', $_REQUEST['textfield91']);
	
	$objPHPExcel->getActiveSheet()->setCellValue('K536', $_REQUEST['textfield92']);
	
	
	if($_REQUEST['PEPS']=="1"){
	$objPHPExcel->getActiveSheet()->setCellValue('W606', "P");
	$objPHPExcel->getActiveSheet()->setCellValue('H610', $_REQUEST['textfield93']);
	$objPHPExcel->getActiveSheet()->setCellValue('AF610', $_REQUEST['textfield94']);
	$objPHPExcel->getActiveSheet()->setCellValue('H612', $_REQUEST['textfield95']);
	}
	if($_REQUEST['PEPS']=="2"){
	$objPHPExcel->getActiveSheet()->setCellValue('AB606', "P");
	}
	
	
	
	
	
	
	
	include("Conexion2.php");
	
	$row=mysqli_fetch_Array(mysqli_query($cnx,"select max(id)+1 from solicitudes"));
	
	$objPHPExcel->getActiveSheet()->setCellValue('As3', $row['max(id)+1']);
	
	mysqli_query($cnx,"insert into solicitudes (
	Cliente,
TipoCredito,
NomSolicitante,
RFCSolicitante,
TelSolicitante,
DirSolicitante,
ColSolicitante,
CdSolicitante,
EdoSolicitante,
CPSolicitante,
EmailSolicitante,
FaxSolicitante,
NomDatConEmp,
TelDatConEmp,
EmailDatConEmp,
RFCDatConEmp,
FaxDatConEmp,
PuestDatConEmp,
ActPrinDatGenPM,
IniOpDatGenPM,
CantPerDatGenPM,
AntConsEmp,
ApoConsEmp,
BancRefBan,
NoTarRefBan,
BancRefBan2,
NoTarRefBan2,
SucRefBan,
SucRefBan2,
FecApRefBan,
FecApRefBan2,
EmpRefCom,
AntRefCom,
TelRefCom,
EmpRefCom2,
AntRefCom2,
TelRefCom2,
BancCarDir,
NoTarCarDir,
NomObPerMor,
DirObPerMor,
ColObPerMor,
CdObPerMor,
EdoObPerMor,
CPObPerMor,
RFCObPerMor,
TelObPerMor,
FaxObPerMor,
AntConsEmpPM,
ApoConsEmpPM,
ActPrinDatGen,
IniOpDatGen,
CantPerDatGen,
NomAccionista1,
RFCAccionista1,
PorcentAccionista1,
NomAccionista2,
RFCAccionista2,
PorcentAccionista2,
NomAccionista3,
RFCAccionista3,
PorcentAccionista3,
NomAccionista4,
RFCAccionista4,
PorcentAccionista4,
NomAccionistaPM1,
RFCAccionistaPM1,
PorcentAccionistaPM1,
NomAccionistaPM2,
RFCAccionistaPM2,
PorcentAccionistaPM2,
NomObSol,
RFCObSol,
TelObSol,
MovObSol,
DirObSol,
ColObSol,
CdObSol,
LugNacObSol,
PropObSol,
EdoObSol,
CPObSol,
EmailObSol,
SexoObSol,
FeNacObSol,
EdObSol,
CURPObSol,
NomObSolPF,
SexoObSolPF,
FeNacObSolPF,
RFCObSolPF,
CURPObSolPF,
EdObSolPF,
NomObSol2,
RFCObSol2,
TelObSol2,
MovObSol2,
DirObSol2,
ColObSol2,
CdObSol2,
LugNacObSol2,
PropObSol2,
EdoObSol2,
CPObSol2,
EmailObSol2,
SexoObSol2,
FeNacObSol2,
EdObSol2,
CURPObSol2,
NomObSolPF2,
SexoObSolPF2,
FeNacObSolPF2,
RFCObSolPF2,
CURPObSolPF2,
EdObSolPF2,
NomRepLegInvHist,
RFCRepLegInvHist,
DirRepLegInvHist,
ColRepLegInvHist,
CdRepLegInvHist,
EdoRepLegInvHist,
CPRepLegInvHist,
TelRepLegInHist,
NomObSolPFInvHist,
RFCObSolPFInvHist,
DirObSolPFInvHist,
ColObSolPFInvHist,
CdObSolPFInvHist,
EdoObSolPFInvHist,
CPObSolPFInvHist,
TelObSolPFInHist,
Fecha,
ClavConcesionario,
NomConcesionario,
NomVendedor,
NomGerenteGral,
StatusSolicitud
	) 
	
	values(
	'$cliente',
'$TipoCredito',
'$nomrazsoc2',
'$RFCSolicitante',
'$TelSolicitante',
'$dirsol',
'$colsol',
'$cdsol',
'$edosol',
'$cpsol',
'$mailsol2',
'$FaxSolicitante',
'$NomDatConEmp',
'$TelDatConEmp',
'$mailconemp',
'$RFCDatConEmp',
'$FaxDatConEmp',
'$puesconemp',
'$actprinc',
'$IniOpDatGenPM',
'$cantperson',
'$antemp',
'$apodsusc',
'$refbanc',
'$numcuebanc',
'$refbanc2',
'$tarjrefbanc',
'$sucbanc1',
'$sucbanc2',
'$FecApRefBan',
'$FecApRefBan2',
'$refcomemp1',
'$antirefcom1',
'$TelRefCom',
'$refcomemp2',
'$antirefcom2',
'$TelRefCom2',
'$cargdir',
'$nocuentcd',
'$nomrazsoc',
'$dirpermor',
'$colpermor',
'$cdpermor',
'$edopermor',
'$cppremor',
'$RFCObPerMor',
'$TelObPerMor',
'$FaxObPerMor',
'$antemp2',
'$apodsusc2',
'$actprinc2',
'$IniOpDatGen',
'$cantperson2',
'$accionista1',
'$rfcaccion1',
'$uno',
'$accionista2',
'$rfcaccion2',
'$dos',
'$accionista3',
'$rfcaccion3',
'$tres',
'$accionista4',
'$rfcaccion4',
'$cuatro',
'$accpermor1',
'$rfcaccpermor1',
'$permoracc1',
'$accpermor2',
'$rfcaccpermor2',
'$permoracc2',
'$NomObSol',
'$RFCObSol',
'$TelObSol',
'$MovObSol',
'$datobdir1',
'$datobcol1',
'$datobcd1',
'$datoblugnac1',
'$PropObSol',
'$datobedo1',
'$datobcp1',
'$datobmail1',
'$SexoObSol',
'$FeNacObSol',
'$datobed1',
'$datobcurp1',
'$obsol1',
'$SexoObSolPF',
'$FeNacObSolPF',
'$RFCObSolPF',
'$CURPObSolPF',
'$EdObSolPF',
'$NomObSol2',
'$RFCObSol2',
'$TelObSol2',
'$MovObSol2',
'$datobdir2',
'$datobcol2',
'$datobcd2',
'$datoblugnac2',
'$PropObSol2',
'$datobedo2',
'$datobcp2',
'$datobmail2',
'$SexoObSol2',
'$FeNacObSol2',
'$datobed2',
'$datobcurp2',
'$obsol2',
'$SexoObSolPF2',
'$FeNacObSolPF2',
'$RFCObSolPF2',
'$CURPObSolPF2',
'$EdObSolPF2',
'$NomRepLegInvHist',
'$RFCRepLegInvHist',
'$DirRepLegInvHist',
'$ColRepLegInvHist',
'$CdRepLegInvHist',
'$EdoRepLegInvHist',
'$CPRepLegInvHist',
'$TelRepLegInHist',
'$NomObSolPFInvHist',
'$RFCObSolPFInvHist',
'$DirObSolPFInvHist',
'$ColObSolPFInvHist',
'$CdObSolPFInvHist',
'$EdoObSolPFInvHist',
'$CPObSolPFInvHist',
'$TelObSolPFInHist',
now(),
'$clavcon',
'$nomcons',
'$nomvend',
'$gerentegral',
'Pendiente'
	)");
	
	
	
	
	
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Solicitud PM.xls"');
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