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
$RFCSolicitante=$rfc1.$rfc2.$rfc3.$rfc4.$rfc5.$rfc6.$rfc7.$rfc8.$rfc9.$rfc10.$rfc11.$rfc12.$rfc13;

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
$TelSolicitante=$telsol1.$telsol2.$telsol3.$telsol4.$telsol5.$telsol6.$telsol7.$telsol8.$telsol9.$telsol10;

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
$FaxSolicitante=$movsol12.$movsol22.$movsol32.$movsol42.$movsol52.$movsol62.$movsol72.$movsol82.$movsol92.$movsol102;

$numeroDirSol=$_REQUEST['dirnumsol'];
$municipioSol=$_REQUEST['textfield5'];
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
$MovSolicitante=$movsol1.$movsol2.$movsol3.$movsol4.$movsol5.$movsol6.$movsol7.$movsol8.$movsol9.$movsol10;

$dirsol=$_REQUEST['dirsol'];

$mailsol=$_REQUEST['mailsol'];

$colsol=$_REQUEST['colsol'];

$cdsol=$_REQUEST['cdsol'];

$lugnacsol=$_REQUEST['lugnacsol'];

$edosol=$_REQUEST['edosol'];

$cpsol=$_REQUEST['cpsol'];

$curpsol=strtoupper($_REQUEST['curpsol']);

$SexoDatGen = $sexsol=$_REQUEST['sexsol'];

$fechnacsol3=substr($_REQUEST['fechnacsol'], 0,4);

$fechnacsol2=substr($_REQUEST['fechnacsol'], 5,2);

$fechnacsol1=substr($_REQUEST['fechnacsol'], 8,2);

$FeNacDatGen = $_REQUEST['fechnacsol'];

$edsol=$_REQUEST['edsol'];

$nacsol=$_REQUEST['nacsol'];

$depensol=$_REQUEST['depensol'];

$acdomsol=$_REQUEST['acdomsol'];

$VivDatGen = $vivsol=$_REQUEST['vivsol'];



$PropInmuDatGen = $inmusol=$_REQUEST['inmusol'];


$arraisol=$_REQUEST['arraisol'];



$anosol2=$_REQUEST['anosol2'];

$benesol1=ucwords($_REQUEST['benesol1']);
$benesol2=ucwords($_REQUEST['benesol2']);
$benesol3=ucwords($_REQUEST['benesol3']);

$EstCivDatGen=$civilsol=$_REQUEST['civilsol'];

$AuPropDatGen =$autosol=$_REQUEST['autosol'];

$MarDatGen =$marcasol=$_REQUEST['marcasol'];



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

$TelDatEmp =$compatelsol1.$compatelsol2.$compatelsol3.$compatelsol4.$compatelsol5.$compatelsol6.$compatelsol7.$compatelsol8.$compatelsol9.$compatelsol10;

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
$TelRefPer =$telref11.$telref12.$telref13.$telref14.$telref15.$telref16.$telref17.$telref18.$telref19.$telref110;

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
$TelRefPer2 =$telref21.$telref22.$telref23.$telref24.$telref25.$telref26.$telref27.$telref28.$telref29.$telref210;

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
	$PropObSol =$datobprop1=$_REQUEST['datobprop1'];
}else{
	$PropObSol =$datobprop1="";
}


$datobedo1=$_REQUEST['datobedo1'];

$datobcp1=$_REQUEST['datobcp1'];

$datobmail1=$_REQUEST['datobmail1'];

if ($datobnom1 != "" && $datobappat1 !="" && $datobapmat1!="") {
	$SexoObSol =$datobsex1=$_REQUEST['datobsex1'];
}else{
	$SexoObSol =$datobsex1="";
}

$datobfechnac1a=substr($_REQUEST['datobfechnac1d'], 0,4);

$datobfechnac1m=substr($_REQUEST['datobfechnac1d'], 5,2);

$datobfechnac1d=substr($_REQUEST['datobfechnac1d'], 8,2);
$FeNacObSol =$_REQUEST['datobfechnac1d'];


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
$RFCObSol =$datobrfc11.$datobrfc12.$datobrfc13.$datobrfc14.$datobrfc15.$datobrfc16.$datobrfc17.$datobrfc18.$datobrfc19.$datobrfc110.$datobrfc111.$datobrfc112.$datobrfc113;


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
$TelObSol =$datobtel11.$datobtel12.$datobtel13.$datobtel14.$datobtel15.$datobtel16.$datobtel17.$datobtel18.$datobtel19.$datobtel110;

$datobtel112=$_REQUEST['datobtel112'];
$datobtel122=$_REQUEST['datobtel122'];
$datobtel132=$_REQUEST['datobtel132'];
$datobtel142=$_REQUEST['datobtel142'];
$datobtel152=$_REQUEST['datobtel152'];
$datobtel162=$_REQUEST['datobtel162'];
$datobtel172=$_REQUEST['datobtel172'];
$datobtel182=$_REQUEST['datobtel182'];
$datobtel192=$_REQUEST['datobtel192'];
$datobtel1102=$_REQUEST['datobtel1102'];
$MovObSol =$datobtel112.$datobtel122.$datobtel132.$datobtel142.$datobtel152.$datobtel162.$datobtel172.$datobtel182.$datobtel192.$datobtel1102;


////
$datobnom2=ucwords($_REQUEST['datobnom2']);

$datobappat2=ucwords($_REQUEST['datobappat2']);

$datobapmat2=ucwords($_REQUEST['datobapmat2']);

$datobdir2=$_REQUEST['datobdir2'];

$datobcol2=$_REQUEST['datobcol2'];

$datobcd2=$_REQUEST['datobcd2'];

$datoblugnac2=$_REQUEST['datoblugnac2'];

if ($datobnom2 != "" && $datobappat2 !="" && $datobapmat2!="") {
	$PropObSol2 =$datobprop2=$_REQUEST['datobprop2'];
}else{
	$PropObSol2 =$datobprop2="";
}



$datobedo2=$_REQUEST['datobedo2'];

$datobcp2=$_REQUEST['datobcp2'];

$datobmail2=$_REQUEST['datobmail2'];

if ($datobnom2 != "" && $datobappat2 !="" && $datobapmat2!="") {
	$SexoObSol2 =$datobsex2=$_REQUEST['datobsex2'];
}else{
	$SexoObSol2 =$datobsex2="";
}


$datobfechnac2a=substr($_REQUEST['datobfechnac2d'], 0,4);

$datobfechnac2m=substr($_REQUEST['datobfechnac2d'], 5,2);

$datobfechnac2d=substr($_REQUEST['datobfechnac2d'], 8,2);
$FeNacObSol2 =$_REQUEST['datobfechnac2d'];



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
$RFCObSol2 =$datobrfc21.$datobrfc22.$datobrfc23.$datobrfc24.$datobrfc25.$datobrfc26.$datobrfc27.$datobrfc28.$datobrfc29.$datobrfc210.$datobrfc211.$datobrfc212.$datobrfc213;


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
$TelObSol2 =$datobtel21.$datobtel22.$datobtel23.$datobtel24.$datobtel25.$datobtel26.$datobtel27.$datobtel28.$datobtel29.$datobtel210;

$datobtel212=$_REQUEST['datobtel212'];
$datobtel222=$_REQUEST['datobtel222'];
$datobtel232=$_REQUEST['datobtel232'];
$datobtel242=$_REQUEST['datobtel242'];
$datobtel252=$_REQUEST['datobtel252'];
$datobtel262=$_REQUEST['datobtel262'];
$datobtel272=$_REQUEST['datobtel272'];
$datobtel282=$_REQUEST['datobtel282'];
$datobtel292=$_REQUEST['datobtel292'];
$datobtel2102=$_REQUEST['datobtel2102'];
$MovObSol2 =$datobtel212.$datobtel222.$datobtel232.$datobtel242.$datobtel252.$datobtel262.$datobtel272.$datobtel282.$datobtel292.$datobtel2102;

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

$DesAnDatEmp =$_REQUEST['desdesol'];


$noempleados=$_REQUEST['noempleados'];


$giroactreal=$_REQUEST['giroactreal'];

$domicilioLaboral =$domneg=$_REQUEST['domneg'];

$refbanc=$_REQUEST['refbanc'];

$numcuebanc=$_REQUEST['numcuebanc'];

$sucbanc1=$_REQUEST['sucbanc1'];

$refbanc2=$_REQUEST['refbanc2'];

$sucbanc2=$_REQUEST['sucbanc2'];

$aperbanc1a=substr($_REQUEST['aperbanc1d'], 0,4);

$aperbanc1m=substr($_REQUEST['aperbanc1d'], 5,2);

$aperbanc1d=substr($_REQUEST['aperbanc1d'], 8,2);
$FecApRefBan =$_REQUEST['aperbanc1d'];


$aperbanc1a2=substr($_REQUEST['aperbanc1d2'], 0,4);

$aperbanc1m2=substr($_REQUEST['aperbanc1d2'], 5,2);

$aperbanc1d2=substr($_REQUEST['aperbanc1d2'], 8,2);
$FecApRefBan2 =$_REQUEST['aperbanc1d2'];


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
$TelRefCom =$telrefcom11.$telrefcom12.$telrefcom13.$telrefcom14.$telrefcom15.$telrefcom16.$telrefcom17.$telrefcom18.$telrefcom19.$telrefcom110;




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
$TelRefCom2 =$telrefcom21.$telrefcom22.$telrefcom23.$telrefcom24.$telrefcom25.$telrefcom26.$telrefcom27.$telrefcom28.$telrefcom29.$telrefcom210;

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
$TelObPerMor =$telpermor1.$telpermor2.$telpermor3.$telpermor4.$telpermor5.$telpermor6.$telpermor7.$telpermor8.$telpermor9.$telpermor10;

$faxpermor1=$_REQUEST['faxpermor1'];
$faxpermor2=$_REQUEST['faxpermor2'];
$faxpermor3=$_REQUEST['faxpermor3'];
$faxpermor4=$_REQUEST['faxpermor4'];
$faxpermor5=$_REQUEST['faxpermor5'];
$faxpermor6=$_REQUEST['faxpermor6'];
$faxpermor7=$_REQUEST['faxpermor7'];
$faxpermor8=$_REQUEST['faxpermor8'];
$faxpermor9=$_REQUEST['faxpermor9'];
$faxpermor10=$_REQUEST['faxpermor10'];
$FaxObPerMor =$faxpermor1.$faxpermor2.$faxpermor3.$faxpermor4.$faxpermor5.$faxpermor6.$faxpermor7.$faxpermor8.$faxpermor9.$faxpermor10;

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
$RFCObPerMor =$permorrfc1.$permorrfc2.$permorrfc3.$permorrfc4.$permorrfc5.$permorrfc6.$permorrfc7.$permorrfc8.$permorrfc9.$permorrfc10.$permorrfc11.$permorrfc12.$permorrfc13;

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
$IniOpDatGen =$_REQUEST['inicoper1'];

$numSerieFiel =$_REQUEST['textfield30'];

$SueldoSolicitante =$_REQUEST['textfield35'];

$ActividadAdicional =$_REQUEST['textfield37'];

$IngAdMensualAprox =$_REQUEST['textfield38'];

	$varT=$_REQUEST['select'];
$varT2=$_REQUEST['select2'];
$varT3=$_REQUEST['select3'];
$varT4=$_REQUEST['select4'];
$varT5=$_REQUEST['select5'];
$varT6=$_REQUEST['select6'];
$varT7=$_REQUEST['select7'];
$varT8=$_REQUEST['select8'];
$varT9=$_REQUEST['select9'];
$varT10=$_REQUEST['select10'];
$varT11=$_REQUEST['select11'];
$varT12=$_REQUEST['select12'];
$varT13=$_REQUEST['select13'];
$varT14=$_REQUEST['select14'];
$varT15=$_REQUEST['select15'];
$varT16=$_REQUEST['select16'];
$varT17=$_REQUEST['select17'];
$total=$varT +$varT2 + $varT3 + $varT4 + $varT5 + $varT6 + $varT7+ $varT8+$varT9+$varT10+$varT11+$varT12+$varT13+$varT14+$varT15+$varT16+$varT17;
$Mg1 = array( 	1 => array( 3 =>"Vulnerable",2 =>"Informal", 1 =>"Otra"), 
				2 => array( 3 =>"1-3 años",2 =>"4-6 años", 1 =>"1-3 años",0=>"N/A"),
				3 => array( 1 =>"Prestamo",2 =>"Arrendamoento", 3 =>"Otros"),
				4 => array( 1 =>"1 a 2",2 =>"3 a 4", 3 =>"5 o mas",0=>"N/A"),
				5 => array( 1 =>"1 a 2",2 =>"3 a 4", 3 =>"5 o mas",0=>"N/A"),
				6 => array( 1 =>"1% - 49%",2 =>"50% - 74%", 3 =>"75% - 100%"),
				7 => array( 1 =>"1% - 49%",2 =>"50% - 74%", 3 =>"75% - 100%"),
				8 => array( 1 =>"$18000 - $20000",2 =>"$21000 - $25000", 3 =>"mas de $25000"),
				9 => array( 1 =>"1 a 3",2 =>"4 a 6", 3 =>"7 a 10"),
				10 => array( 1 =>"Transferencia",2 =>"Cheque", 3 =>"Efectivo"),
				11 => array( 1 =>"Agencia",2 =>"Internet", 3 =>"Otros"),
				12 => array( 1 =>"México",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"),
				13 => array( 3 =>"Guerrero-Michoacan-Tamaulipas-Morelos",2 =>"Durango-Chihuhua-Jalisco-México-CD México-Sonora", 1 =>"Puebla-Coahuila-Zcatecas-Hidalgo-Durango"),
				14 => array( 3 =>"Guerrero-Michoacan-Tamaulipas-Morelos",2 =>"Durango-Chihuhua-Jalisco-México-CD México-Sonora", 1 =>"Puebla-Coahuila-Zcatecas-Hidalgo-Durango"),
				15 => array(  1 =>"México",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"),
				16 => array(  1 =>"México",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"),
				17 => array(  1 =>"México",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar")
	);
$select=$Mg1[1][$_REQUEST['select']];
$select2=$Mg1[2][$_REQUEST['select2']];
$select3=$Mg1[3][$_REQUEST['select3']];
$select4=$Mg1[4][$_REQUEST['select4']];
$select5=$Mg1[5][$_REQUEST['select5']];
$select6=$Mg1[6][$_REQUEST['select6']];
$select7=$Mg1[7][$_REQUEST['select7']];
$select8=$Mg1[8][$_REQUEST['select8']];
$select9=$Mg1[9][$_REQUEST['select9']];
$select10=$Mg1[10][$_REQUEST['select10']];
$select11=$Mg1[11][$_REQUEST['select11']];
$select12=$Mg1[12][$_REQUEST['select12']];
$select13=$Mg1[13][$_REQUEST['select13']];
$select14=$Mg1[14][$_REQUEST['select14']];
$select15=$Mg1[15][$_REQUEST['select15']];
$select16=$Mg1[16][$_REQUEST['select16']];
$select17=$Mg1[17][$_REQUEST['select17']];
if($total>=21 && $total<=29){
	$GradoRiesgo="Bajo";
}elseif($total>=30 && $total<=45){
	$GradoRiesgo="Medio";
}else{
	$GradoRiesgo="Alto";
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
	$totalIngreso=$PerTrans1+$PerTrans2+$PerTrans3+$PerTrans4+$PerTrans5+$PerTrans6+$PerTrans7+$PerTrans8+$PerTrans9+$PerTrans10;
	$FuentePerTrans10=$_REQUEST['textfield84'];
	$ValorAuto=$_REQUEST['textfield86'];
	$EngAutomovil=$_REQUEST['textfield87'];
	$PorEnganche=$_REQUEST['textfield88'];
	$PorFinanciamiento=$_REQUEST['textfield89'];
	$MontoFinanciado=$_REQUEST['textfield90'];
	$Plazo=$_REQUEST['textfield91'];
	$PagoMensEsp=$_REQUEST['textfield92'];
	$PEPS="";
	
	
	if ($_REQUEST['PEPS']=="Si") {
		$PEPS="Si";
		$NombrePEPS=$_REQUEST['textfield93'];
		$ParentescoPEPS=$_REQUEST['textfield94'];
		$PuestoPEPS=$_REQUEST['textfield95'];
	} else {
		$PEPS="No";
		$NombrePEPS="";
		$ParentescoPEPS="";
		$PuestoPEPS="";
	}
		$INESolicitante=$_REQUEST['textfield39'];
		
		 
	$Pasaporte_o_CedulaProfSolicitante=$_REQUEST['textfield40'];
	$CartillaMilitarSolicitante=$_REQUEST['textfield41'];
	$LicenciaConducirSolicitante=$_REQUEST['textfield42'];
		$OtraIdentSolicitante=$_REQUEST['textfield43'];
		$EspIdentSolicitante=$_REQUEST['textfield44'];
		
		
		if(isset($_REQUEST['copias'])){$copias=$_REQUEST['copias'];}else{$copias="";}
		if(isset($_REQUEST['copias2'])){$copias2=$_REQUEST['copias2'];}else{$copias2="";}
		if(isset($_REQUEST['copias3'])){$copias3=$_REQUEST['copias3'];}else{$copias3="";}
		if(isset($_REQUEST['copias4'])){$copias4=$_REQUEST['copias4'];}else{$copias4="";}
		if(isset($_REQUEST['copias5'])){$copias5=$_REQUEST['copias5'];}else{$copias5="";}
		
		$cotejo=$_REQUEST['cotejo'];
		$adjuntos1=$_REQUEST['adjuntos1'];
		$adjuntos2=$_REQUEST['adjuntos2'];
		$adjuntos3=$_REQUEST['adjuntos3'];
		$fechaComprobante=$_REQUEST['fechaComprobante'];

include("Conexion2.php");
$entro="";

	if($_REQUEST['cliente']==""){
		//mysqli_query($cnx,"insert into clientes (id,Nombre,RFC,Tel,Cel,Direccion,Numero,Email,Colonia,Ciudad,LugNacimiento,Estado,CP,CURP,Sexo,Nacimiento,Edad,Nacionalidad,Dependientes,AcreDom,Vivienda,Inmueble,AnResidirCD,ArraigoDomicilio,Beneficiario,EstadoCivil,AutoPropio,PuestoEmpleo,DepartamentoEmpleo,Desdean,Empresa,TelEmpleo,ExtensionEmpleo,TipoCliente) values ('null','$NomSolicitante','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$mailsol','$colsol','$cdsol','$lugnacsol','$edosol','$cpsol','$curpsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$PropInmuDatGen','$anosol2','$arraisol','$benesol','$EstCivDatGen','$AuPropDatGen','$depasol','','$desdesol3','$compasol','$TelDatEmp','$compatelsolext','PFNA')");

		mysqli_query($cnx,"insert into pfna (NomSolicitante,SegNomSolicitante,ApPatSolicitante,ApMatSolicitante,RFCSolicitante,TelSolicitante,MovSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,LugNacSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,CURPSolicitante,EmailSolicitante,SexoDatGen,FeNacDatGen,EdDatGen,NaDatGen,NoDepDatGen,AcDomDatGen,VivDatGen,ImpMenDatGen,PropInmuDatGen,ArDomDatGen,AnResDatGen,NomBenDatGen,ApPatBenDatGen,ApMatBenDatGen,EstCivDatGen,AuPropDatGen,MarDatGen,PuestDatEmp,DesAnDatEmp,CompDatEmp,TelDatEmp,ExtDatEmp,DomicilioLaboral,NumSerieFIEL,SueldoSolicitante,ActEcoAdicional,IngAdMensualAprox,Ocupacion_Profesion,FaxSolicitante,GiroDatEmp,NoEmDatEmp) values('$nomsol','$segnomsol','$apepasol','$apemasol','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$colsol','$cdsol','$lugnacsol','$edosol','$municipioSol','$cpsol','$curpsol','$mailsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$impmenpag','$PropInmuDatGen','$arraisol','$anosol2','$benesol3','$benesol1','$benesol2','$EstCivDatGen','$AuPropDatGen','$MarDatGen','$depasol','$DesAnDatEmp','$compasol','$TelDatEmp','$compatelsolext','$domicilioLaboral','$numSerieFiel','$SueldoSolicitante','$ActividadAdicional','$IngAdMensualAprox','$giroprof','$FaxSolicitante','$giroactreal','$noempleados');");
		
		$id_pfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pfna=$id_pfnaRequest['LAST_INSERT_ID()'];
		$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pfna where Id='$id_pfna'"));
		$Folio_Cliente=$folio_request['Folio_Cliente'];
		mysqli_query($cnx,"insert into registro (Folio_Cliente,Fecha_apertura) values('$Folio_Cliente',CURDATE());");
		mysqli_query($cnx,"insert into solicitudpfna (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,SucRefBan,FecApRefBan,BancRefBan2,NoTarRefBan2,SucRefBan2,FecApRefBan2,EmpRefCom,AntRefCom,TelRefCom,EmpRefCom2,AntRefCom2,TelRefCom2,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObPerMor,DirObPerMor,ColObPerMor,CdObPerMor,LugNacObPerMor,EdoObPerMor,CPObPerMor,RFCObPerMor,TelObPerMor,FaxObPerMor,AntConsEmpPM,ApoConsEmpPM,ActPrinDatGen,IniOpDatGen,CantPerDatGen,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$Folio_Cliente','$tipocredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$numcuebanc','$sucbanc1','$FecApRefBan','$refbanc2','$tarjrefbanc','$sucbanc2','$FecApRefBan2','$refcomemp1','$antirefcom1','$TelRefCom','$refcomemp2','$antirefcom2','$TelRefCom2','$cargdir','$nocuentcd','$conyunom','$conyuape1','$conyuape2','$compaconyu','$puestconyu','$nomrazsoc','$dirpermor','$colpermor','$cdpermor','$lugnacpermor','$edopermor','$cppremor','$RFCObPerMor','$TelObPerMor','$FaxObPerMor','$antemp','$apodsusc','$actprinc','$IniOpDatGen','$cantperson','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

		$id_solicitudpfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfna=$id_solicitudpfnaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfna where Id='$id_solicitudpfna'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom) values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','$copias','$Pasaporte_o_CedulaProfSolicitante','$copias2','$CartillaMilitarSolicitante','$copias3','$LicenciaConducirSolicitante','$copias4','$OtraIdentSolicitante','$copias5','$EspIdentSolicitante','$cotejo','$adjuntos1','$adjuntos2','$adjuntos3','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','$PEPS','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");



		
		
		


	}else {
//mysqli_query($cnx,"insert into pfna (NomSolicitante,SegNomSolicitante,ApPatSolicitante,ApMatSolicitante,RFCSolicitante,TelSolicitante,MovSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,LugNacSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,CURPSolicitante,EmailSolicitante,SexoDatGen,FeNacDatGen,EdDatGen,NaDatGen,NoDepDatGen,AcDomDatGen,VivDatGen,ImpMenDatGen,PropInmuDatGen,ArDomDatGen,AnResDatGen,NomBenDatGen,ApPatBenDatGen,ApMatBenDatGen,EstCivDatGen,AuPropDatGen,MarDatGen,PuestDatEmp,DesAnDatEmp,CompDatEmp,TelDatEmp,ExtDatEmp,DomicilioLaboral,NumSerieFIEL,SueldoSolicitante,ActEcoAdicional,IngAdMensualAprox,Ocupacion_Profesion,FaxSolicitante,GiroDatEmp,NoEmDatEmp) values('$nomsol','$segnomsol','$apepasol','$apemasol','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$colsol','$cdsol','$lugnacsol','$edosol','$municipioSol','$cpsol','$curpsol','$mailsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$impmenpag','$PropInmuDatGen','$arraisol','$anosol2','$benesol3','$benesol1','$benesol2','$EstCivDatGen','$AuPropDatGen','$MarDatGen','$depasol','$DesAnDatEmp','$compasol','$TelDatEmp','$compatelsolext','$domicilioLaboral','$numSerieFiel','$SueldoSolicitante','$ActividadAdicional','$IngAdMensualAprox','$giroprof','$MovSolicitante','$giroactreal','$noempleados');");
		
		//$id_pfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		//$id_pfna=$id_pfnaRequest['LAST_INSERT_ID()'];
		//$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pfna where Id='$id_pfna'"));
		//$Folio_Cliente=$folio_request['Folio_Cliente'];
		//mysqli_query($cnx,"insert into registro (Folio_Cliente,Fecha_apertura) values('$Folio_Cliente',CURDATE());");
		$Folio_Cliente=$_REQUEST['cliente'];
		mysqli_query($cnx,"insert into solicitudpfna (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,SucRefBan,FecApRefBan,BancRefBan2,NoTarRefBan2,SucRefBan2,FecApRefBan2,EmpRefCom,AntRefCom,TelRefCom,EmpRefCom2,AntRefCom2,TelRefCom2,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObPerMor,DirObPerMor,ColObPerMor,CdObPerMor,LugNacObPerMor,EdoObPerMor,CPObPerMor,RFCObPerMor,TelObPerMor,FaxObPerMor,AntConsEmpPM,ApoConsEmpPM,ActPrinDatGen,IniOpDatGen,CantPerDatGen,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$Folio_Cliente','$tipocredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$numcuebanc','$sucbanc1','$FecApRefBan','$refbanc2','$tarjrefbanc','$sucbanc2','$FecApRefBan2','$refcomemp1','$antirefcom1','$TelRefCom','$refcomemp2','$antirefcom2','$TelRefCom2','$cargdir','$nocuentcd','$conyunom','$conyuape1','$conyuape2','$compaconyu','$puestconyu','$nomrazsoc','$dirpermor','$colpermor','$cdpermor','$lugnacpermor','$edopermor','$cppremor','$RFCObPerMor','$TelObPerMor','$FaxObPerMor','$antemp','$apodsusc','$actprinc','$IniOpDatGen','$cantperson','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

		$id_solicitudpfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfna=$id_solicitudpfnaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfna where Id='$id_solicitudpfna'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom) values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','$copias','$Pasaporte_o_CedulaProfSolicitante','$copias2','$CartillaMilitarSolicitante','$copias3','$LicenciaConducirSolicitante','$copias4','$OtraIdentSolicitante','$copias5','$EspIdentSolicitante','$cotejo','$adjuntos1','$adjuntos2','$adjuntos3','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','$PEPS','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");


	



		
	
	

	}





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

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Cell stretching
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LETTER', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Solicitud 004');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', 'Servicios financieros del 
	guadiana, S.A de C.V 
	SOFOM, E.N.R 
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
$pdf->SetFont('times', '', 6);

// add a page
$pdf->AddPage();

//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

// test Cell stretching
$txt = "Nomre / Razon social
Codigo PHP";
$s = " ";
//



$pdf->MultiCell(30,0, "Datos del solicitante
td", 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0,'Folio del cliente
'.$Folio_Cliente, 1, 'J', 0, 0, '', '', true,1,false,true);
//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);

$tipocredito1="";$tipocredito2="";$tipocredito3="";
if($_REQUEST['tipocredito']=="Leasing"){
$tipocredito1="X";
}elseif($_REQUEST['tipocredito']=="Credit"){
$tipocredito2="X";
}elseif($_REQUEST['tipocredito']=="Premium Credit"){
$tipocredito3="X";
}else{
$tipocredito1="";$tipocredito2="";$tipocredito3="";
}


$pdf->MultiCell(30,0, 'Leasing ('.$tipocredito1.')' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Credit ('.$tipocredito2.')' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Premium ('.$tipocredito3.')
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

//
$nomsol=ucwords($_REQUEST['nomsol']);
$segnomsol=ucwords($_REQUEST['segnomsol']);
$apepasol=ucwords($_REQUEST['apepasol']);
$apemasol=ucwords($_REQUEST['apemasol']);


$pdf->MultiCell(60,0, 'Primer Nombre 
'.$nomsol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Segundo Nombre 
'.$segnomsol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido Paterno
'.$apepasol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apellido materno
'.$apemasol , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(50,0, 'R.F.C
	'.$RFCSolicitante , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Telefono
	'.$TelSolicitante , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono celular
	'.$MovSolicitante , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Direccion/calle y numero
	'.$dirsol.' #'.$numeroDirSol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fax
	'.$FaxSolicitante , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'E-mail
	'.$mailsol , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
//
$pdf->MultiCell(60,0, 'Colonia
	'.$colsol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Ciudad 				
	'.$cdsol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Lugar de nacimiento
	'.$lugnacsol , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Estado
	'.$edosol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Codigo Postal
	'.$cpsol , 1, 'J', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(0,0, 'CURP
	'.$curpsol , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);

if($SexoDatGen=="Masculino"){
	$sexodelsol1="X";
	$sexodelsol2="";
}elseif($SexoDatGen=="Femenino"){
	$sexodelsol2="X";
	$sexodelsol1="";
}else{
$sexodelsol1="";
$sexodelsol12="";
}
$pdf->MultiCell(30,0, 'Sexo
M ('.$sexodelsol1.')   F ('.$sexodelsol2.')	  ' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Fecha de nacimiento
	'.$FeNacDatGen , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Edad
	'.$edsol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Nacionalidad
	'.$nacsol , 1, 'L', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(30,0, 'Num. dependientes.
	'.$depensol , 1, 'J', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(0,0, 'Acredita domicilio con 
	'.$acdomsol , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

if($VivDatGen=="Casa Propia"){$VivDatGen1="X";}else{$VivDatGen1="";}
if($VivDatGen=="Rentada"){$VivDatGen2="X";}else{$VivDatGen2="";}
if($VivDatGen=="Hipotecada"){$VivDatGen3="X";}else{$VivDatGen3="";}
if($VivDatGen="Con familiares"){$VivDatGen4="X";}else{$VivDatGen4="";}

if($PropInmuDatGen=="Si"){$PropInmuDatGen1="X";}else{$PropInmuDatGen1="";}
if($PropInmuDatGen=="No"){$PropInmuDatGen2="X";}else{$PropInmuDatGen2="";}

$pdf->MultiCell(150,0, 'Vive en:
Casa propia ('.$VivDatGen1.')   Renta('.$VivDatGen2.')   Hipotecada	('.$VivDatGen3.')  Con familiares ('.$VivDatGen4.')   Importe Mensual de pago [$'.$impmenpag.']   Tiene una propiedad a su nombre? Si('.$PropInmuDatGen1.')   No('.$PropInmuDatGen2.')' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Arraigo en el domicilio desde el año
	'.$arraisol , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Años de residir en la Ciudad
	'.$anosol2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Beneficiario en caso de fallecimiento
	'.$benesol1.' '.$benesol2.' '.$benesol3 , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

if($EstCivDatGen== "Casado Bienes Mancomunados"){$EstCivDatGen1="X";} else{$EstCivDatGen1="";}
if($EstCivDatGen=='Casado Bienes Separados'){$EstCivDatGen2="X";}else{$EstCivDatGen2="";}
if($EstCivDatGen=='Viudo'){$EstCivDatGen3="X";}else{$EstCivDatGen3="";}
if($EstCivDatGen=='Divorciado'){$EstCivDatGen4="X";}else{$EstCivDatGen4="";}
if($EstCivDatGen=='Soltero'){$EstCivDatGen5="X";}else{$EstCivDatGen5="";}

$pdf->MultiCell(150,0, 'Estado civil:
Casado bienenes mancomunados ('.$EstCivDatGen1.')   Casado bienes separados ('.$EstCivDatGen2.')   Viudo ('.$EstCivDatGen3.')  Divorciado ('.$EstCivDatGen4.')  Soltero ('.$EstCivDatGen5.')   ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);
if($AuPropDatGen=="Si"){$AuPropDatGen1="X";}else{$AuPropDatGen1="";}
if($AuPropDatGen=="No"){$AuPropDatGen2="X";}else{$AuPropDatGen2="";}

	$pdf->MultiCell(150,0, 'Auto propio:                   Especifique Marca y Tipo
Si ('.$AuPropDatGen1.')  No('.$AuPropDatGen2.') 																					  '.$MarDatGen , 1, 'L', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(60,0, 'DATOS DE SU EMPLEO,PROFESION O NEGOCIO' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Ocupacion segun alta o ultimo cambio ante SHCP
	'.$giroprof , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Puesto
	'.$depasol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Antiguedad desde
	'.$DesAnDatEmp , 1, 'J', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Compañia 
	'.$compasol , 1, 'L', 0, 0, '', '', true,1,false,true);

$pdf->MultiCell(60,0, 'Num. de empleados
	'.$noempleados , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Telefono
	'.$TelDatEmp , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Ext
	'.$compatelsolext , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Giro del negocio:actividad que realiza 
	'.$giroactreal , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Domicilio del negocio
	'.$domicilioLaboral , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'REFERENCIAS PERSONALES' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Nombre
	'.$nomref1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Parentesco o relacion
	'.$parenref1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Telefono
	'.$TelRefPer  , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre
	'.$nomref2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Parentesco o relacion
	'.$parenref2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Telefono
	'.$TelRefPer2 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(00,0, 'REFERENCIAS BANCARIAS' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Banco
	'.$refbanc , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Sucursal
	'.$sucbanc1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Numero de cuenta 
	'.$numcuebanc , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha de apertura 
	'.$FecApRefBan , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Banco
	'.$refbanc2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Sucursal
	'.$sucbanc2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Numero de cuenta 
	'.$tarjrefbanc , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha de apertura 
	'.$FecApRefBan2 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(50,0, 'REFERENCIAS COMERCIALES' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Empresa
	'.$refcomemp1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	'.$antirefcom1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$TelRefCom , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Empresa
	'.$refcomemp2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	'.$antirefcom2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$TelRefCom2  , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(70,0, 'CARGO DIRECTO(para contratos en M.N)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Banco
	'.$cargdir , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Numero de cuenta (CLABE)
	'.$nocuentcd , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'DATOS DEL CONYUGE(en caso de unir  Ingresos)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre(s) 
	'.$conyunom , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido paterno
	'.$conyuape1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido materno
	'.$conyuape2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Compañia 
	'.$compaconyu , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Puesto
	'.$puestconyu , 1, 'L', 0, 1, '', '', true,1,false,true);


$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos obligado solidario persona moral' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre, razon social
	'.$nomrazsoc , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$RFCObPerMor , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$TelObPerMor , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle y numero
	'.$dirpermor , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Fax
	'.$FaxObPerMor , 1, 'L', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(60,0, 'Colonia
	'.$colpermor , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$cdpermor , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	'.$lugnacpermor , 1, 'L', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Estado
	'.$edopermor , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'C.P.
	'.$cppremor , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Constitucion de la empresa' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Antiguedad
	'.$antemp , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
	'.$apodsusc , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(30,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(70,0, 'Actividad principal
	'.$actprinc , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fecha de inicio operaciones
	'.$IniOpDatGen , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Cantidad de personal
	'.$cantperson , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);






$pdf->Ln(1);







$pdf->SetAlpha(0.2);

				
			$pdf->AddPage();


$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	'.$datobnom1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	'.$datobappat1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	'.$datobapmat1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	'.$datobcurp1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$TelObSol , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	'.$datobdir1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$RFCObSol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$MovObSol , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	'.$datobcol1 .'																												', 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	'.$datoblugnac1.'																											' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$datobcd1.'																												' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

	if($PropObSol=="Si"){$PropObSola="X";}else{$PropObSola="";}
	if($PropObSol=="No"){$PropObSolb="X";}else{$PropObSolb="";}
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si  ('.$PropObSola.')  No	('.$PropObSolb.')' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	'.$datobedo1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	'.$datobcp1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 '.$datobmail1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

	if($SexoObSol=="Masculino"){$SexoObSola="X";}else{$SexoObSola="";}
	if($SexoObSol=="Femenino"){$SexoObSolb="X";}else{$SexoObSolb="";}
$pdf->MultiCell(30,0, 'Sexo
M ('.$SexoObSola.')       F ('.$SexoObSolb.')' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	'.$FeNacObSol , 1, 'J', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$datobed1 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	'.$datobnom2.'																														' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	'.$datobappat2.'																													' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	'.$datobapmat2.'																													' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	'.$datobcurp2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$TelObSol2 , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	'.$datobdir2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$RFCObSol2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$MovObSol2 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	'.$datobcol2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	'.$datoblugnac2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$datobcd2.'																															' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$Sp = array(1 => array("Si"=>"X","No"=>" "),
			2 => array("Si"=>" ","No"=>"X"));
	
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si ('.$Sp[1][$PropObSol2].')   No	('.$Sp[2][$PropObSol2].')' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(40,0, 'Estado
	'.$datobedo2.'																									' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	'.$datobcp2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail  
'.$datobmail2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$SexM = array(1 => array("Masculino"=>"X","Femenino"=>" "),
			2 => array("Masculino"=>" ","Femenino"=>"X"));

$pdf->MultiCell(30,0, 'Sexo
M ('.$SexM[1][$SexoObSol2].') 		F ('.$SexM[2][$SexoObSol2].')' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	'.$FeNacObSol2 , 1, 'J', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$datobed2 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->SetFontSize(5,true);	


$pdf->MultiCell(0,0, 'Para el caso de que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R. (SFG) ofrezca el servicio de consulta e impresión de estados de cuenta a través de su página de Internet (www.sfgmexico.mx), el apoderado: (i) instruye a SFG para que los estados de cuenta sólo se pongan a disposición a través de dicho medio, (ii) se obliga a consultarlos periódicamente y con toda oportunidad y (iii) releva a SFG de enviar estados de cuenta al domicilio de su representada. En el caso de que el apoderado no esté conforme con lo anterior, deberá marcar cualquiera de los siguientes recuadros:' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(130,0, 'No estoy de acuerdo con esta instrucción y solicito el envío del estado de cuenta al correo electrónico de mi representada' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '  ' , 1, 'L', 0, 1, '', '', true,1,false,true);
				$pdf->Ln(1);																																											
$pdf->MultiCell(130,0, 'No estoy de acuerdo con esta instrucción y solicito el envío del estado de cuenta al domicilio de mi representada' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '  ' , 1, 'L', 0, 1, '', '', true,1,false,true);
				$pdf->Ln(1);

$pdf->MultiCell(0,0, 'AUTORIZACIÓN RELATIVA A LA INVESTIGACION DEL HISTORIAL CREDITICIO DE LA PERSONA MORAL																																															
Por este conducto solicito(amos) y autorizo(amos) expresamente a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R para que por conducto de sus funcionarios facultados lleven a cabo investigaciones sobre el comportamiento crediticio de mi representada en las sociedades de información crediticia que estimen convenientes.  Asimismo, declaro(amos) que conozco(emos) la naturaleza y alcance de la información que se solicitará, del uso que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R hará de tal información y de que ésta podrá realizar consultas periódicas del historial crediticio de mi representada, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos una relación jurídica. Estoy(amos) consciente(s) y acepto(amos) que este documento quede bajo propiedad de SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R y/o de la sociedad de información crediticia consultada, para efectos de control y cumplimiento del artículo 28 de la Ley para Regular a las Sociedades de Información Crediticia.																																															
' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(20,0, 'Fecha de consulta
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Folio de consulta BC
	' , 1, 'L', 0, 1, '', '', true,1,false,true);

$pdf->Cell(55, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Firma solicitante', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(5, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Firma Obligado solidario 1', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(5, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Firma obligado solidario 2', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(1);


$pdf->MultiCell(0,0, 'CONSENTIMIENTO PARA EL TRATAMIENTO DE LOS DATOS PERSONALES (APLICABLE A PERSONAS FISICAS)																																															
El (Los) apoderado (s) legal (es) y en su caso el(los) obligado(s) solidario(s), (titulares de los datos) expresamente reconocen y aceptan mediante su firma que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R (“SFG”) con domicilio en Autopista México-Puebla Km. 116 más 900, San Lorenzo Almecatla, Cuautlancingo, Puebla, les facilitó en el momento de llenar esta solicitud el “Aviso de Privacidad”. En tal virtud, los titulares de los datos otorgan su consentimiento de forma expresa para que SFG:																																															
1) Recabe y trate todos los datos e información personal, incluyendo los de carácter financiero y/o patrimonial y/o sensibles, para las finalidades que dan origen y son necesarias para esta solicitud, mismas que se encuentran establecidas en el mencionado Aviso de Privacidad y entre las que de manera enunciativa y no limitativa se incluyen: el ofrecimiento de créditos para la adquisición de vehículos, la cotización y/o contratación de seguros relacionados con los créditos antes mencionados, la ejecución de las operaciones que en su caso se deriven de la autorización de esta solicitud, informar sobre nuevos productos y servicios así como aquellas que resulten compatibles o análogas con los productos y/o servicios ofrecidos por SFG.																																															
2) Como finalidades distintas a esta solicitud, pueda tratar la información para fines mercadológicos, publicitarios y de prospección comercial, evaluación en la calidad de los servicios o la realización de estudios internos sobre tendencias de compra de vehículos, entre otras finalidades señaladas en el Aviso de Privacidad.																																															
Para los casos en los que: (i) no se hubiese celebrado contrato de crédito alguno o (ii) una vez celebrado, el mismo hubiese terminado, el tratamiento a que hace referencia el presente numeral tendrá una vigencia de hasta 5 años contados a partir de la fecha del otorgamiento de este consentimiento.																																															
En caso de no aceptar el tratamiento de sus datos para las finalidades indicadas en este numeral 2 marcar la casilla, de lo contrario se entenderá que ha otorgado su consentimiento.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(20,0, '   Solicitante' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '   Obligado solidaro 1' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '    Obligado solidario 2' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'Los titulares de los datos recabados podrán en cualquier momento limitar el uso o divulgación, así como a tener acceso, rectificar, cancelar u oponerse al uso, tratamiento o transferencia de sus datos personales financieros y/o patrimoniales y/o sensibles, salvo en los casos en que SFG no esté obligado y conforme al procedimiento establecido en el Aviso de Privacidad. Cualquier cambio a lo previsto en el Aviso de Privacidad podrá consultarse en la página www.sfgmexico.mx.. Este consentimiento se otorga de conformidad con lo señalado por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento y cualquier otra normatividad aplicable.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(8);

$pdf->Cell(55, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Firma solicitante', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(5, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Firma Obligado solidario 1', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(5, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Firma obligado solidario 2', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);


$pdf->MultiCell(50,0, 'Nombre del solicitante
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(15,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Firma del solicitante
	' , 1, 'L', 0, 1, '', '', true,1,false,true);


$pdf->MultiCell(50,0, 'Nombre del obligado solidario 1
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(15,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Firma obligado solidario 1
	' , 1, 'L', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(50,0, 'Nombre obligado solidario 2
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(15,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Firma obligado solidario 2
	' , 1, 'L', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
																																												

$pdf->MultiCell(0,0, 'Bajo protesta de decir verdad, los arriba firmantes manifiestan que los datos son verídicos y que sus firmas son las que usan en todos sus documentos públicos y privados y que fueron estampadas en presencia del concesionario. 
Manifiesta(n) el(los) obligado(s) solidario(s) bajo protesta de decir verdad que el bien inmueble que declara(n) es de su propiedad, se encuentra libre de gravamen y al corriente en el pago de sus contribuciones, obligándose a no gravarlo, enajenarlo, cederlo o transmitir total o parcialmente, durante la vigencia del contrato que se llegara a otorgar por motivo de esta solicitud, hasta la fecha en que sean cubiertas en su totalidad cualesquiera cantidades que llegase a adeudar el solicitante a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R, conforme al contrato de apertura de crédito del cual este documento formará parte integrante como Anexo B y cualesquiera otros anexos del mismo. Asimismo, manifiesta su conocimiento expreso para fungir como obligado solidario en dicho contrato.
Adicionalmente la concesionaria manifiesta que se cotejaron y revisaron, a través del Gerente de Servicios Financieros, los documentos originales del solicitante, no quedando ninguna duda en cuanto a su veracidad y que los documentos enviados a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R  son copias fieles de dichos originales.	'		 , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->SetFontSize(6,true);	
$pdf->MultiCell(60,0, 'Clave consecionario o distribuidor
	'.$clavcon , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Nombre consecionario o distribuidor
	'.$nomcons , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha
	'.$fecha , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre del vendedor
	'.$nomvend , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Nombre y firma del gerente general
	'.$gerentegral , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Datos de inscripcion en el registro publico de contratos de adhesion de la procuradoria federal del consumidor:2999-2012 del 30 de abril del 2012
	' , 0, 'J', 0, 1, '', '', true,1,false,true);


$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 84, 186, 103, 6.5, '0000','DF',null ,array(255, 255, 200) );

$pdf->AddPage();

$pdf->MultiCell(70,0, 'SERVICIOS FINANCIEROS DEL GUADIANA S.A DE C.V SOFOM E.N.R
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'FORMATO DE IDENTIFICACION DEL CLIENTE POR CLASIFICACION DE RIESGO
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(80,0, 'Fecha: '. $fecha, 0, 'L', 0, 0, '', '', true,1,false,true);

$tpcli=array(1=>array("1"=>"X","2"=>""),
			 2=>array("1"=>"","2"=>"X"));

$pdf->MultiCell(20,0, 'Tipo de cliente:' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(10,0, 'Nuevo' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, $tpcli[1][$_REQUEST['escliente']] , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, '   Actualizacion cliente' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, $tpcli[2][$_REQUEST['escliente']]  , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(4);
$style2 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


$pdf->MultiCell(70,0, 'Datos generales del cliente
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
//-------------------------------------------------
$pdf->MultiCell(0,0, 'Nombre o razon social             			'.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apemasol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 53, 200, 53, $style2);
$pdf->MultiCell(0,0, 'Numero de cliente 																						'.$Folio_Cliente.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 58, 200, 58, $style2);
$pdf->MultiCell(0,0, 'Domicilio particular 																			'.$dirsol.' #'.$numeroDirSol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 63, 200, 63, $style2);
//------------------------------------
$pdf->MultiCell(100,0, 'Colonia 																																							'.$colsol.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 68, 100, 68, $style2);
$pdf->MultiCell(0,0, 'Codigo postal: 												'.$cpsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 68, 200, 68, $style2);
//---------------------------------------
$pdf->MultiCell(100,0, 'Delegacion o municipio 												'.$municipioSol.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 74, 100, 74, $style2);
$pdf->MultiCell(0,0, 'Ciudad o poblacion: 				'.$cdsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 74, 200, 74, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Estado o provincia                     	'.$edosol.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 79, 100, 79, $style2);
$pdf->MultiCell(0,0, 'Pais: 																													'.$lugnacsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(115, 79, 200, 79, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Fecha de nacimiento 																	'.$FeNacDatGen.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 84, 100, 84, $style2);
$pdf->MultiCell(0,0, 'RFC: 																												'.$RFCSolicitante.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 84, 200, 84, $style2);

$pdf->MultiCell(70,0, 'Calificacion de grado de riesgo
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Cell(25, 0, 'Segmento del cliente', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(3);
$pdf->MultiCell(60,0, 'Resultado de la calificacion de grado de riesgo*:
	' , 0, 'J', 0, 0, '', '', true,1,false,true);


	$grsol=array(1=>array("Bajo"=>"X","Medio"=>" ","Alto"=>""),
				2=>array("Bajo"=>"","Medio"=>"X","Alto"=>""),
				3=>array("Bajo"=>"","Medio"=>"","Alto"=>"X"));
$pdf->MultiCell(40,0, '('.$grsol[1][$GradoRiesgo].')Bajo' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, '('.$grsol[2][$GradoRiesgo].')Medio' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0,  '('.$grsol[3][$GradoRiesgo].')Alto(Requisitar el formato de reporte y aprobacion)' , 0, 'J', 0, 1, '', '', true,1,false,true);


$pdf->Ln(4);
$varT=$_REQUEST['select2'];
$varT2=$_REQUEST['select2'];
$varT3=$_REQUEST['select3'];
$varT4=$_REQUEST['select4'];
$varT5=$_REQUEST['select5'];
$varT6=$_REQUEST['select6'];
$varT7=$_REQUEST['select7'];
$varT8=$_REQUEST['select8'];
$varT9=$_REQUEST['select9'];
$varT10=$_REQUEST['select10'];
$varT11=$_REQUEST['select11'];
$varT12=$_REQUEST['select12'];
$varT13=$_REQUEST['select13'];
$varT14=$_REQUEST['select14'];
$varT15=$_REQUEST['select15'];
$varT16=$_REQUEST['select16'];
$varT17=$_REQUEST['select17'];
$total=$varT +$varT2 + $varT3 + $varT4 + $varT5 + $varT6 + $varT7+ $varT8+$varT9+$varT10+$varT11+$varT12+$varT13+$varT14+$varT15+$varT16+$varT17;               
$Mg = array( 	1 => array( 3 =>"Vulnerable",2 =>"Informal", 1 =>"Otra"), 
				2 => array( 3 =>"1-3 años",2 =>"4-6 años", 1 =>"1-3 años",0=>"N/A"),
				3 => array( 1 =>"Prestamo",2 =>"Arrendamoento", 3 =>"Otros"),
				4 => array( 1 =>"1 a 2",2 =>"3 a 4", 3 =>"5 o mas",0=>"N/A"),
				5 => array( 1 =>"1 a 2",2 =>"3 a 4", 3 =>"5 o mas",0=>"N/A"),
				6 => array( 1 =>"1% -49%",2 =>"50% - 74%", 3 =>"75% - 100%"),
				7 => array( 1 =>"1% -49%",2 =>"50% - 74%", 3 =>"75% - 100%"),
				8 => array( 1 =>"$18000 - $20000",2 =>"$21000 - $25000", 3 =>"mas de $25000"),
				9 => array( 1 =>"1 a 3",2 =>"4 a 6", 3 =>"7 a 10"),
				10 => array( 1 =>"Transferencia",2 =>"Cheque", 3 =>"Efectivo"),
				11 => array( 1 =>"Agencia",2 =>"Internet", 3 =>"Otros"),
				12 => array( 1 =>"Mexico",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"),
				13 => array( 3 =>"Guerrero-Michoacan-Tamaulipas-Morelos",2 =>"Durango-Chihuhua-Jalisco-México-CD México-Sonora", 1 =>"Puebla-Coahuila-Zcatecas-Hidalgo-Durango"),
				14 => array( 3 =>"Guerrero-Michoacan-Tamaulipas-Morelos",2 =>"Durango-Chihuhua-Jalisco-México-CD México-Sonora", 1 =>"Puebla-Coahuila-Zcatecas-Hidalgo-Durango"),
				15 => array(  1 =>"Mexico",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"),
				16 => array(  1 =>"Mexico",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"),
				17 => array(  1 =>"Mexico",2 =>"Otros", 3 =>"Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar")
	);


$var=
$var2=$Mg[2][$varT2];

$tbl = '

<table border="0" cellpadding="2" cellspacing="2" nobr="true">
 <tr>
  <th width="360" colspan="3" align="center">Variables de riesgo</th>
 </tr>
 <tr>
  <td>Actividad objeto social</td>
  <td >'.$Mg[1][$_REQUEST['select']] .' </td>
  <td >'. $_REQUEST['select'].'</td>
 </tr>
 <tr>
  <td>Antiguedad del cliente</td>
  <td>'. $Mg[2][$_REQUEST['select2']].'</td>
  <td>'.$_REQUEST['select2'].'</td>
 </tr>
 <tr>
  <td> Naturaleza de las operaciones</td>
  <td> '.$Mg[3][$_REQUEST['select3']].'</td>
  <td>'.$varT3.'</td>
 </tr>
 <tr>
  <td> Q de beneficios</td>
  <td> '.$Mg[4][$_REQUEST['select4']].'</td>
  <td> '.$varT4.' </td>
 </tr>
  <tr>
  <td> Q de terceros relacionados (apoderados y cotitulares)</td>
  <td>'. $Mg[5][$_REQUEST['select5']].'</td>
  <td> '.$varT5.'  </td>
 </tr>
  <tr>
  <td> Peps relacionados</td>
  <td> '.$Mg[6][$_REQUEST['select6']].'</td>
  <td> '.$varT6.' </td>
 </tr>
  <tr>
  <td> Alerta reputacional</td>
  <td> '.$Mg[7][$_REQUEST['select7']].'</td>
  <td> '.$varT7.' </td>
 </tr>
  <tr>
  <td> Volumen esperado(Monto)</td>
  <td> '.$Mg[8][$_REQUEST['select8']].'</td>
  <td> '.$varT8.'  </td>
 </tr>
  <tr>
  <td> Frecuencia esperada (No. de veces)</td>
  <td> '.$Mg[9][$_REQUEST['select9']].' </td>
  <td> '.$varT9.'  </td>
 </tr>
  <tr>
  <td> Instrumento monetario utilizado</td>
  <td> '.$Mg[10][$_REQUEST['select10']].' </td>
  <td> '.$varT10.' </td>
 </tr>
  <tr>
  <td> Canales o medios utilizados</td>
  <td> '.$Mg[11][$_REQUEST['select11']].' </td>
  <td> '.$varT11.' </td>
 </tr>
  <tr>
  <td> Pais| estado oficial</td>
  <td> '.$Mg[12][$_REQUEST['select12']].'</td>
  <td> '.$varT12.' </td>
 </tr>
  <tr>
  <td> Pais|Estado de residencia</td>
  <td> '.$Mg[13][$_REQUEST['select13']].'</td>
  <td>'.$varT13.'  </td>
 </tr>
  <tr>
  <td> Pais|Estado de operacion frecuencia</td>
  <td> '.$Mg[14][$_REQUEST['select14']].'</td>
  <td> '.$varT14.'  </td>
 </tr>
  <tr>
  <td> Origen de los recursos</td>
  <td> '.$Mg[15][$_REQUEST['select15']].'</td>
  <td>'.$varT15.'  </td>
 </tr>
  <tr>
  <td> Destino de recursos</td>
  <td> '.$Mg[16][$_REQUEST['select16']].' </td>
  <td> '.$varT16.' </td>
 </tr>
  <tr>
  <td> Pais|Estado residencia de terceros relacionados</td>
  <td> '.$Mg[17][$_REQUEST['select17']].' </td>
  <td> '.$varT17.'  </td>
 </tr>
   <tr>
  <td>Suma total</td>
  <td> </td>
  <td> '.$total.' </td>
 </tr>

</table>';

$pdf->writeHTMLCell(160,0,15,110,$tbl,0,0,false, false, '');
$pdf->MultiCell(0,0, 'Grado de riesgo' , 0, 'C', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'Alto mas de 45 ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Medio  30-45  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Bajo 21-29  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->Ln(90);
$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo: '.$GradoRiesgo , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(10);
$pdf->MultiCell(40,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Cell(35, 0, 'Evaluo:Ejecutivo de relacion', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->MultiCell(40,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Cell(35, 0, 'Valido: Oficial de cumplimiento', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
	$pdf->SetAlpha(0.2);																																														
// ---------------------------------------------------------
$pdf->AddPage();

$pdf->Cell(0, 0, 'MANUAL DE PREVENCION DE LAVADO DE DINERO Y DE FINANCIAMIENTO AL TERRORISMO
	FORMATO DE IDENTIFICACION Y CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(195, 0, 'PERSONA FISICA Y RELACIONADOS', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(95, 0, 'Fecha de ingreso', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(95, 0, 'Numero de cliente', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield12'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield13'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield14'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Nombre', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['sexsol'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield16'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield17'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Genero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Lugar de nacimiento (estado y pais)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Fecha de nacimiento', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield18'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['dirnumsol'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield20'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Numero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Codigo postal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);

$pdf->Cell(65, 0, $_REQUEST['textfield21'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(30, 0, $_REQUEST['textfield22'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, $_REQUEST['textfield23'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, $_REQUEST['textfield24'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield25'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(65, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(30, 0, 'Municipio', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, 'Ciudad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Telefono', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);

$civil = array( 1=> array("Casado Bienes Mancomunados" =>"Casado Bienes Mancomunados" , "Casado Bienes Separados"=>"Casado Bienes Separados",3=>"Viudo" ,4=>"Divorciado",5=>"Soltero")  );

$pdf->Cell(75, 0, $_REQUEST['civilsol'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield27'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield28'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Correo electrónico', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'CURP', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield29'].' / '.$_REQUEST['textfield30'] , '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield31'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield32'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'RFC y numero de serie dela FIEL*', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Nacionalidad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Ocupación o Profesión', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);

$pdf->Cell(75, 0, $_REQUEST['textfield33'] , '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield34'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield35'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Nombre de la empresa y giro (donde labora)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Domicilio donde labora', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Sueldo o ingreso mensual', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield36'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield37'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield38'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Puesto', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Actividad economica adicional', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Ingresos adicionales mensuales aprox', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');




$pdf->AddPage();


$pdf->Cell(195, 0, 'DOCUMENTACION DE IDENTIFICACION', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);
$pdf->Cell(35, 0, 'Credencial para votar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield39'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$copias, '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Pasaporte cedula profecional', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield40'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$copias2, '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Cartilla de servicio militar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield41'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$copias3, '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Licencia para conducir', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield42'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$copias4, '', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(35, 0, 'Otra', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield43'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$copias5, '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Especificar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield44'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['cotejo'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(45, 0, 'Otros documentos que se adjuntan', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta CURP  y/o cedula RFC:  													'.$adjuntos1, '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta comprobante de domicilio:   								'.$adjuntos2, '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fecha del comprobante de domicilio:    								'.$fechaComprobante, '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Domicilio manifestado coincide con la id:    	'.$adjuntos3, '', 1, 'L', 0, '', 0, false, 'T', 'C');
//agregar si o no desde base de datos
$pdf->Ln(10);
$pdf->Cell(195, 0, 'BENEFICIARIO', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield45'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield46'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield47'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Nombre', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);

$pdf->Cell(75, 0, $_REQUEST['textfield48'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield49'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, $_REQUEST['textfield50'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield51'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Codigo postal', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Pais', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);

$pdf->Cell(75, 0, $_REQUEST['textfield52'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, $_REQUEST['textfield53'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield54'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(75, 0, 'Telefono', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'CURP', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'RFC y numero de serie dela FIEL*', 'T', 1, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield55'].'  '.$_REQUEST['textfield56'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, $_REQUEST['textfield57'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield58'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(75, 0, 'Parentesco/porciento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Fecha de nacimiento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Municipio', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield59'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, $_REQUEST['textfield60'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield61'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(75, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(0, 0, 'Sociedad conyugal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, $_REQUEST['textfield62'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, $_REQUEST['textfield63'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, $_REQUEST['textfield64'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(75, 0, 'Ocupacion o profecion', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Peps', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Origen de los recursos', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->AddPage();


$pdf->Cell(195, 0, 'PERFIL TRANSSACCIONAL INICIAL', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);
$pdf->Cell(35, 0, 'Ingresos comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield65'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield66'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield67'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield68'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0,$_REQUEST['textfield69'] , 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield70'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0,$_REQUEST['textfield71'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield72'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(35, 0, 'Ingresos comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield73'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield74'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield75'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield76'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Ingresos no comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield77'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield78'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield79'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield80'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield81'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield82'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield83'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield84'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(35, 0, 'Total Ingresos', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield85'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(45, 0, 'Valor del automovil', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield86'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Enganche del automovil', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield87'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Porcentaje de enganche', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0,$_REQUEST['textfield89'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Monto financiado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield90'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Plazo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield91'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Pago mensual esperado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield92'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(15);

$pdf->Cell(45, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Firma del funcionario de la SOFOM', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Firma del cliente(o prospecto)', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->AddPage();



$pdf->MultiCell(0,0, ' ¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?
' , 0, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(8);
$Peps = array("Si"=>  array( "Si"=> "X","No"=>"  " ) ,
				"No"=>  array( "Si"=> " ","No"=>"X" )
 );
$pdf->Cell(45, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Si('.$Peps["Si"][$_REQUEST['PEPS']].' )', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'No( '.$Peps["No"][$_REQUEST['PEPS']].' )', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'En caso de si', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Ln(7);
$pdf->Cell(45, 0, '¿Quien?(Nombre)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield93'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Parentesco', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield94'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);
$pdf->Cell(45, 0, 'Puesto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield95'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(5, 0, ' ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'En caso de familiar hasta el segundo grado de consanguinidad o afinidad', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);

$pdf->MultiCell(0,0, 'Declaro bajo protesra decir la verdad, que los recursos con los cuales  he de pagar los servicios  o productos recibidos, asi como las obligaciones contraidas, han sido obtenidos o generados a traves de una fuente de origen liticio.
' , 0, 'A', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'El destino de los servicios o productos adquiridos ser dedicado tan solo a fines permitidos por la ley y que  no se encuentran dentro de los puestos establecidos por el articulo 139 y 400 bis del Codigo Penal Federal.
' , 0, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(15);

$pdf->Cell(75, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Firma del cliente o prospecto', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(15);

$pdf->MultiCell(0,0, 'Declaro bajo protesta de decir la verdad , que para  efectos de la realizacion de las operaciones con la SOFOM estoy actuando de la siguiente manera:
' , 0, 'A', 0, 1, '', '', true,1,false,true);

$pdf->Ln(7);
$pdf->Cell(45, 0, 'Por cuenta propia', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Por cuenta de un tercero', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(40);
$pdf->Cell(45, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Firma del cliente(o prospecto)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Nombre tercero', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->IncludeJS('print(true);');
//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
