<?php 
	include("Conexion2.php");
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
$numeroDirSol =$_REQUEST['dirnumsol'];
$mailsol=$_REQUEST['mailsol'];

$colsol=$_REQUEST['colsol'];

$cdsol=$_REQUEST['cdsol'];

$lugnacsol=$_REQUEST['lugnacsol'];

$edosol=$_REQUEST['edosol'];

$cpsol=$_REQUEST['cpsol'];

$curpsol=strtoupper($_REQUEST['curpsol']);

$SexoDatGen= $sexsol=$_REQUEST['sexsol'];

$fechnacsol3=substr($_REQUEST['fechnacsol'], 0,4);

$fechnacsol2=substr($_REQUEST['fechnacsol'], 5,2);

$fechnacsol1=substr($_REQUEST['fechnacsol'], 8,2);
$FeNacDatGen=$_REQUEST['fechnacsol'];
$edsol=$_REQUEST['edsol'];

$nacsol=$_REQUEST['nacsol'];

$depensol=$_REQUEST['depensol'];

$acdomsol=$_REQUEST['acdomsol'];

$VivDatGen=$vivsol=$_REQUEST['vivsol'];

$OtrvivDatGen=$vivsolesp=$_REQUEST['vivsolesp'];

$PropInmuDatGen=$inmusol=$_REQUEST['inmusol'];

$anosol=$_REQUEST['anosol'];

$arraisol=$_REQUEST['arraisol'];

$acdomsol2=$_REQUEST['acdomsol2'];

$anosol2=$_REQUEST['anosol2'];

$benesol=ucwords($_REQUEST['benesol3']);
$benesol2=ucwords($_REQUEST['benesol1']);
$benesol3=ucwords($_REQUEST['benesol2']);
$benesolC=$benesol.' '.$benesol2.' '.$benesol3;

$EstCivDatGen=$civilsol=$_REQUEST['civilsol'];

$AuPropDatGen=$autosol=$_REQUEST['autosol'];

$MarDatGen=$marcasol=$_REQUEST['marcasol'];

$Ocupacion_Profesion=$puestosol=$_REQUEST['puestosol'];

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

$TelDatEmp=$compatelsol1.$compatelsol2.$compatelsol3.$compatelsol4.$compatelsol5.$compatelsol6.$compatelsol7.$compatelsol8.$compatelsol9.$compatelsol10;
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
$TelRefPer="";
	$TelRefPer.=$telref11.$telref12.$telref13.$telref14.$telref15.$telref16.$telref17.$telref18.$telref19.$telref110;

		$TelRefPer2="";
	$TelRefPer2.=$telref21.$telref22.$telref23.$telref24.$telref25.$telref26.$telref27.$telref28.$telref29.$telref210;
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
$Mg1 = array( 	1 => array( 3 =>"Vulnerable",2 =>"Informal", 1 =>"Otra"), 
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
$municipioSol=$_REQUEST['textfield5'];
	$numSerieFiel=$_REQUEST['textfield30'];
	$domicilioLaboral=$_REQUEST['textfield34'];
	$SueldoSolicitante=$_REQUEST['textfield35'];
	$ActividadAdicional=$_REQUEST['textfield37'];
	$IngAdMensualAprox=$_REQUEST['textfield38'];
	$INESolicitante=$_REQUEST['textfield39'];
$Pasaporte_o_CedulaProfSolicitante=$_REQUEST['textfield40'];
$CartillaMilitarSolicitante=$_REQUEST['textfield41'];
$LicenciaConducirSolicitante=$_REQUEST['textfield42'];
$OtraIdentSolicitante=$_REQUEST['textfield43'];
$EspIdentSolicitante=$_REQUEST['textfield44'];

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
	$NombrePEPS=$_REQUEST['textfield93'];
		$ParentescoPEPS=$_REQUEST['textfield94'];
		$PuestoPEPS=$_REQUEST['textfield95'];
		$fechaComprobante=$_REQUEST['fechaComprobante'];

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

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom)
		        values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','".$_REQUEST['copias']."','$Pasaporte_o_CedulaProfSolicitante','".$_REQUEST['copias2']."','$CartillaMilitarSolicitante','".$_REQUEST['copias3']."','$LicenciaConducirSolicitante','".$_REQUEST['copias4']."','$OtraIdentSolicitante','".$_REQUEST['copias5']."','$EspIdentSolicitante','".$_REQUEST['cotejo']."','".$_REQUEST['adjuntos1']."','".$_REQUEST['adjuntos2']."','".$_REQUEST['adjuntos3']."','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','".$_REQUEST['PEPS']."','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");

		mysqli_query($cnx,"insert into comisionesyseguros (
	Folio_Solicitud,
	Comision_Apertura,
	Seguro_Auto,
	Seguro_Vida,
	Seguro_Desempleo,
	Enganche,
	Plazo,
	Interes_Anual,
	CAT,
	ValorAuto_Mont_a_Fin,
	PagMenEsp,
	MontFin,
	PorEnganche,
	PorFinanciado) values(
	'$Folio_Sol',
	'".$_REQUEST['textfield96']."',
	'".$_REQUEST['textfield97']."',
	'".$_REQUEST['textfield98']."',
	'".$_REQUEST['textfield99']."',
	'".$_REQUEST['textfield87']."',
	'".$_REQUEST['textfield91']."',
	'".$_REQUEST['textfield100']."',
	'%',
	'".$_REQUEST['textfield86']."',
	'".$_REQUEST['textfield92']."',
	'".$_REQUEST['textfield90']."',
	'".$_REQUEST['textfield88']."',
	'".$_REQUEST['textfield89']."')");


	}else {
		
		
		mysqli_query($cnx,"insert into solicitudpfa (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$cliente','$tipocredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$tarjrefbanc','$cargdir','$nocuentcd','$conyunom','$ApPatDatCon','$ApMatDatCon','$compaconyu','$puestconyu','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");

	
		$id_solicitudpfaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_solicitudpfa=$id_solicitudpfaRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpfa where Id='$id_solicitudpfa'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];
$folio_clirequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from solicitudpfa where Id='$id_solicitudpfa'"));
$Folio_Cliente=$folio_clirequest['Folio_Cliente'];

	mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom)
		        values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','".$_REQUEST['copias']."','$Pasaporte_o_CedulaProfSolicitante','".$_REQUEST['copias2']."','$CartillaMilitarSolicitante','".$_REQUEST['copias3']."','$LicenciaConducirSolicitante','".$_REQUEST['copias4']."','$OtraIdentSolicitante','".$_REQUEST['copias5']."','$EspIdentSolicitante','".$_REQUEST['cotejo']."','".$_REQUEST['adjuntos1']."','".$_REQUEST['adjuntos2']."','".$_REQUEST['adjuntos3']."','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','".$_REQUEST['PEPS']."','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");

mysqli_query($cnx,"insert into comisionesyseguros (
	Folio_Solicitud,
	Comision_Apertura,
	Seguro_Auto,
	Seguro_Vida,
	Seguro_Desempleo,
	Enganche,
	Plazo,
	Interes_Anual,
	CAT,
	ValorAuto_Mont_a_Fin,
	PagMenEsp,
	MontFin,
	PorEnganche,
	PorFinanciado) values(
	'$Folio_Sol',
	'".$_REQUEST['textfield96']."',
	'".$_REQUEST['textfield97']."',
	'".$_REQUEST['textfield98']."',
	'".$_REQUEST['textfield99']."',
	'".$_REQUEST['textfield87']."',
	'".$_REQUEST['textfield91']."',
	'".$_REQUEST['textfield100']."',
	'%',
	'".$_REQUEST['textfield86']."',
	'".$_REQUEST['textfield92']."',
	'".$_REQUEST['textfield90']."',
	'".$_REQUEST['textfield88']."',
	'".$_REQUEST['textfield89']."')");




	}

require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LETTER', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('SERVICIOS FINANCIEROS DEL GUADIANA');
$pdf->SetTitle('Solicitud 004 ');
$pdf->SetSubject('Solicitud 004');
$pdf->SetKeywords('Solicitud 004');

// set default header data
$pdf->SetHeaderData('tcpdf_logo.jpg', PDF_HEADER_LOGO_WIDTH, '', 'Servicios financieros del 
	guadiana, S.A de C.V 
	SOFOM, E.N.R 
	'
	
);

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
$sexosel = array( 1 => array( "Masculino" => "X" , "Femenino" => " " ,""=> " "),
				  2 => array( "Masculino" => " " , "Femenino" => "X",""=> " " )	 );

$viv  = array(1 => array(1 => "X", 2 => " ",3 => " ",4 => " ",5 => " "),
 			  2 => array(1 => " ", 2 => "X",3 => " ",4 => " ",5 => " "),
 			  3 => array(1 => " ", 2 => " ",3 => "X",4 => " ",5 => " "),
 			  4 => array(1 => " ", 2 => " ",3 => " ",4 => "X",5 => " "),
 			  5 => array(1 => " ", 2 => " ",3 => " ",4 => " ",5 => "X"),
 			  6 => array(1 => "X", 2 => " "),
 			  7 => array(1 => " ", 2 => "X",));

$civ = array(1 => array("Casado Bienes Mancomunados" => "X", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => " ","Soltero" => " "),
 			  2 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => "X","Viudo" => " ","Divorciado" => " ","Soltero" => " "),
 			  3 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => "X","Divorciado" => " ","Soltero" => " "),
 			  4 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => "X","Soltero" => " "),
 			  5 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => " ","Soltero" => "X"));

$datoviv = array( 1 => array( "Si" => "X" , "No" => " ","" => " " ),
				  2 => array( "Si" => " " , "No" => "X" ,""=>" ")	 );


$pdf->MultiCell(30,0, "Datos del solicitante
 ", 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0,'Folio del cliente 
	'.$Folio_Cliente, 1, 'J', 0, 0, '', '', true,1,false,true);
//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $tipocredito, 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, '    '.$Folio_Sol .'
	', 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

//
$pdf->MultiCell(60,0, 'Primer Nombre 
	' .$nomsol.'  ', 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Segundo Nombre 
	'.$segnomsol.'  ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido Paterno
	'.$apepasol.'  ' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apellido materno
	'.$apemasol.'  ', 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(50,0, 'R.F.C
	' .$rfc1.$rfc2.$rfc3.$rfc4.$rfc5.$rfc6.$rfc7.$rfc8.$rfc9.$rfc10.$rfc11.$rfc12.$rfc13, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Telefono
	'.$telsol1.$telsol2.$telsol3.$telsol4.$telsol5.$telsol6.$telsol7.$telsol8.$telsol9.$telsol10 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono celular
	'.$movsol1.$movsol2.$movsol3.$movsol4.$movsol5.$movsol6.$movsol7.$movsol8.$movsol9.$movsol10 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Direccion/calle y numero
	'.$dirsol, 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'E-mail
	'.$mailsol, 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
//
$pdf->MultiCell(60,0, 'Colonia
	'.$colsol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Ciudad
	'.$cdsol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Lugar de nacimiento
	'.$lugnacsol , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Estado
	'.$edosol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Codigo Postal 
	'.$cpsol.'          ' , 1, 'L', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(0,0, 'CURP
	'.$curpsol , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
M ('.$sexosel[1][$sexsol].')   F ('.$sexosel[2][$sexsol].')	  ' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Fecha de nacimiento
	'.$_REQUEST['fechnacsol'], 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Edad
	'.$edsol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Nacionalidad
	'.$nacsol , 1, 'L', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(30,0, 'Num. dependientes.
	 '.$depensol.'   ' , 1, 'J', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(0,0, 'Acredita domicilio con 
	'.$acdomsol , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);
$pdf->MultiCell(150,0, 'Vive en:
Casa propia ('.$viv[1][$vivsol].')   Renta('.$viv[2][$vivsol].')   Hipotecada	('.$viv[3][$vivsol].')  Con familiares ('.$viv[4][$vivsol].')     Tiene una propiedad a su nombre? Si('.$viv[6][$inmusol].')   No('.$viv[7][$inmusol].')' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Arraigo en el domicilio desde el año
	'.$anosol, 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Años de residir en la Ciudad
	'.$arraisol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Beneficiario en caso de fallecimiento
	'.$benesolC , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);


$pdf->MultiCell(150,0, 'Estado civil:
Casado bienenes mancomunados ('.$civ[1][$civilsol].')   Casado bienes separados ('.$civ[2][$civilsol].')   Viudo('.$civ[3][$civilsol].')     Divorciado('.$civ[4][$civilsol].' )  Soltero( '.$civ[5][$civilsol].' )   ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);
	$pdf->MultiCell(150,0, 'Auto propio:            
					 Especifique Marca y Tipo
Si ('.$datoviv[1][$autosol].' )  No('.$datoviv[2][$autosol].')   ' , 1, 'L', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(60,0, 'DATOS DE SU EMPLEO O PROFESION' , 0, 'L', 0, 1, '', '', true,1,false,true);


$pdf->MultiCell(60,0, 'Puesto
	'.$puestosol , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Departamento o area
	'.$depasol , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Antiguedad desde
	'.$desdesol , 1, 'J', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Compañia 
	'.$compasol , 1, 'L', 0, 0, '', '', true,1,false,true);


$pdf->MultiCell(40,0, 'Telefono
	'.$compatelsol1.$compatelsol2.$compatelsol3.$compatelsol4.$compatelsol5.$compatelsol6.$compatelsol7.$compatelsol8.$compatelsol9.$compatelsol10  , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(40,0, 'REFERENCIAS PERSONALES' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Nombre
	'.$nomref1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Parentesco o relacion
	'.$parenref1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Telefono
	' .$telref11.$telref12.$telref13.$telref14.$telref15.$telref16.$telref17.$telref18.$telref19.$telref110, 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre
	'.$nomref2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Parentesco o relacion
	'.$parenref2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Telefono
	'.$telref21.$telref22.$telref23.$telref24.$telref25.$telref26.$telref27.$telref28.$telref29.$telref210 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(00,0, 'REFERENCIAS BANCARIAS' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Banco
	'.$refbanc , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Numero de tarjeta de credito
	'.$tarjrefbanc , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(00,0, 'CARGO DIRECTO (para contratos en M.N.)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Banco
	'.$cargdir , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Numero de cuenta 
	'.$nocuentcd , 1, 'J', 0, 1, '', '', true,1,false,true);


$pdf->Ln(1);


$pdf->MultiCell(70,0, 'DATOS DEL CONYUGE(en caso de unir  Ingresos)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre(s) 
	'.$conyunom , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido paterno
	'.$ApPatDatCon , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido materno
	'.$ApMatDatCon , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Compañia 
	'.$compaconyu , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Puesto
	'.$puestconyu , 1, 'L', 0, 1, '', '', true,1,false,true);


$pdf->Ln(1);
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
	'. $_REQUEST['datobtel112']. $_REQUEST['datobtel122']. $_REQUEST['datobtel132']. $_REQUEST['datobtel142']. $_REQUEST['datobtel152']. $_REQUEST['datobtel162']. $_REQUEST['datobtel172']. $_REQUEST['datobtel182']. $_REQUEST['datobtel192']. $_REQUEST['datobtel1102'] , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	'.$datobdir1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$datobrfc11.$datobrfc12.$datobrfc13.$datobrfc14.$datobrfc15.$datobrfc16.$datobrfc17.$datobrfc18.$datobrfc19.$datobrfc110.$datobrfc111.$datobrfc112.$datobrfc113 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$datobtel11.$datobtel12.$datobtel13.$datobtel14.$datobtel15.$datobtel16.$datobtel17.$datobtel18.$datobtel19.$datobtel110 , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	'.$datobcol1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	'.$datoblugnac1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$datobcd1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si ('.$datoviv[1][$datobprop1].')   No	('.$datoviv[2][$datobprop1].')' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	'.$datobedo1 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	'.$datobcp1 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 '.$datobmail1 , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
  M('.$sexosel[1][$datobsex1].')   F('.$sexosel[2][$datobsex1].') 	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	'.$datobfechnac1d.'/'.$datobfechnac1m.'/'.$datobfechnac1a , 1, 'L', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$datobed1.'                  ' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->Ln(1);

$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	'.$datobnom2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	'.$datobappat2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	'.$datobapmat2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	'.$datobcurp2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	'.$datobdir2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$datobrfc21.$datobrfc22.$datobrfc23.$datobrfc24.$datobrfc25.$datobrfc26.$datobrfc27.$datobrfc28.$datobrfc29.$datobrfc210.$datobrfc211.$datobrfc212.$datobrfc213 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$datobtel21.$datobtel22.$datobtel23.$datobtel24.$datobtel25.$datobtel26.$datobtel27.$datobtel28.$datobtel29.$datobtel210 , 1, 'J', 0, 1, '', '', true,1,false,true);
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
	'.$datobcd2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si ('.$datoviv[1][$datobprop2].')   No('.$datoviv[2][$datobprop2].')	' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	'.$datobedo2 , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	'.$datobcp2 , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 '. $datobmail2 , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
  M('.$sexosel[1][$datobsex2].')  F('.$sexosel[2][$datobsex2].') 	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	'. $datobfechnac2d.'/'. $datobfechnac2m.'/'.$datobfechnac2a  , 1, 'L', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$datobed2, 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);





$pdf->SetAlpha(0.2);

				
			$pdf->AddPage();




$pdf->Ln(1);
$pdf->Ln(1);

$pdf->SetFontSize(7,true);	


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
	'.$nomcons , 1, 'L', 0, 0, '', '', true,1,false,true);
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
	'.$gerentegral , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Datos de inscripcion en el registro publico de contratos de adhesion de la procuradoria federal del consumidor:2999-2012 del 30 de abril del 2012
	' , 0, 'J', 0, 1, '', '', true,1,false,true);


$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 29, 186, 193, 6.5, '0000','DF',null ,array(255, 255, 200) );

$pdf->AddPage();
$clienteEst = array( 1 => array( 1 => "X" , 2 => " ","" => " " ),
				  2 => array( 1 => " " , 2 => "X" ,""=>" ")	 );


$pdf->MultiCell(70,0, 'SERVICIOS FINANCIEROS DEL GUADIANA S.A DE C.V SOFOM E.N.R
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'FORMATO DE IDENTIFICACION DEL CLIENTE POR CLASIFICACION DE RIESGO
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(80,0, 'Fecha:' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Tipo de cliente:' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(10,0, 'Nuevo', 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, ' '.$clienteEst[1][$_REQUEST['escliente']] , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, '   Actualizacion cliente' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, ' '.$clienteEst[2][$_REQUEST['escliente']] , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(4);
$style2 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


$pdf->MultiCell(70,0, 'Datos generales del cliente
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
//-------------------------------------------------
$pdf->MultiCell(0,0, 'Nombre o razon social:          '.$nomsol.' '.$segnomsol.' '.$apepasol.' '.$apepasol.'      
	', 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 53, 200, 53, $style2);
$pdf->MultiCell(0,0, 'Numero de cliente:        '.$Folio_Cliente.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 58, 200, 58, $style2);
$pdf->MultiCell(0,0, 'Domicilio particular:     '.$dirsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 63, 200, 63, $style2);
//------------------------------------
$pdf->MultiCell(100,0, 'Colonia:                '.$colsol.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 68, 100, 68, $style2);
$pdf->MultiCell(0,0, 'Codigo postal:             '.$cpsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 68, 200, 68, $style2);
//---------------------------------------
$pdf->MultiCell(100,0, 'Delegacion o municipio: '.$_REQUEST['textfield22'].'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 74, 100, 74, $style2);
$pdf->MultiCell(0,0, 'Ciudad o poblacion:        '.$cdsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 74, 200, 74, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Estado o provincia:      '.$edosol.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 79, 100, 79, $style2);
$pdf->MultiCell(0,0, 'Pais:                   '.$lugnacsol.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(115, 79, 200, 79, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Fecha de nacimiento:  '.$fechnacsol3.'/'.$fechnacsol2.'/'.$fechnacsol1.'
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 84, 100, 84, $style2);
$pdf->MultiCell(0,0, 'RFC: '.$rfc1.$rfc2.$rfc3.$rfc4.$rfc5.$rfc6.$rfc7.$rfc8.$rfc9.$rfc10.$rfc11.$rfc12.$rfc13.'
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 84, 200, 84, $style2);

$pdf->MultiCell(70,0, 'Calificacion de grado de riesgo
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Cell(25, 0, 'Segmento del cliente', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(3);
$pdf->MultiCell(60,0, 'Resultado de la calificacion de grado de riesgo*:
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Bajo' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Medio' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Alto(Requisitar el formato de reporte y aprobacion)' , 0, 'J', 0, 1, '', '', true,1,false,true);


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

$gradoT="";
if ($total>=45) {
	$gradoT="Alto";
}
elseif ($total<45 && $total>30) {
	$gradoT="Medio";
}
elseif ($total<=29) {
	$gradoT="Bajo";
}

$pdf->writeHTMLCell(160,0,15,110,$tbl,0,0,false, false, '');
$pdf->MultiCell(0,0, 'Grado de riesgo' , 0, 'C', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'Alto mas de 45 ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Medio  30-45  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Bajo menor a 29  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->Ln(90);
$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo:     '.$gradoT , 0, 'L', 0, 1, '', '', true,1,false,true);
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

$civil = array( 1=> array(1 =>"Casado Bienes Mancomunados" , 2=>"Casado Bienes Separados",3=>"Viudo" ,4=>"Divorciado",5=>"Soltero")  );

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
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['copias'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Pasaporte cedula profecional', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield40'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['copias2'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Cartilla de servicio militar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield41'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['copias3'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Licencia para conducir', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield42'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['copias4'], '', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(35, 0, 'Otra', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield43'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['copias4'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Especificar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield44'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se cotejo vs original  :'.$_REQUEST['cotejo'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(45, 0, 'Otros documentos que se adjuntan:   '.$_REQUEST['cotejo'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta CURP  y/o cedula RFC:    '.$_REQUEST['adjuntos1'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta comprobante de domicilio:'.$_REQUEST['adjuntos2'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fecha del comprobante de domicilio: '.$_REQUEST['fechaComprobante'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Domicilio manifestado coincide con la id:'.$_REQUEST['adjuntos3'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
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


$pdf->Cell(195, 0, 'PERFIL TRANSACCIONAL INICIAL', '', 1, 'C', 0, '', 0, false, 'T', 'C');
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

if($tipocredito=="Auto Nuevo" || $tipocredito=="Auto Usado"){
	$contieneselec="Valor del Auto";
	$contieneselec2="Enganche";
	$pdf->Cell(45, 0, $contieneselec2, '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield87'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Porcentaje de enganche', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0,$_REQUEST['textfield88'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Porcentaje de financiamineto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0,$_REQUEST['textfield89'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Seguro de auto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield97'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Monto financiado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield90'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
}else{
	$contieneselec="Monto a Financiar";
	
}

$pdf->Cell(45, 0, $contieneselec, '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield86'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(45, 0, 'Plazo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield91'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Pago mensual esperado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield92'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Comision por apertura', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield96'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(45, 0, 'Seguro de vida', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield98'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Seguro de desempleo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, $_REQUEST['textfield99'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
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




	


