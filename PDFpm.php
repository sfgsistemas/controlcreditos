<?php
include("Conexion2.php");
$entro="";
if($_REQUEST['cliente']==""){

  
mysqli_query($cnx,"insert into pm(NomSolicitante,RFCSolicitante,TelSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,EmailSolicitante,FaxSolicitante,PaisSolicitante,NomDatContEmp,SegNomDatContEmp,ApPatDatContEmp,ApMatDatContEmp,DirConEmp,ColConEmp,CPConEmp,CdConEmp,EdoConEmp,SexoContEmp,LugNacContEmp,FechNacContEmp,EstCivContEmp,TelDatConEmp,EmailDatConEmp,CURPDatConEmp,RFCDatConEmp,NumSerieFIELContEmp,NacionalidadContEmp,OcupacionContEmp,SueldoContEmp,FaxDatConEmp,PuestDatConEmp,ActEcoAdicionalContEmp,IngAdMensualAproxContEmp,ActPrinDatGenPM,IniOpDatGenPM,CantPerDatGenPM,FechaConsEmp,AntConsEmp,ApoConsEmp,NomAcc1,RFCAcc1,PorAcc1,NomAcc2,RFCAcc2,PorAcc2,NomAcc3,RFCAcc3,PorAcc3,NomAcc4,RFCAcc4,PorAcc4,NomAccPM1,RFCAccPM1,PorAccPM1,NomAccPM2,RFCAccPM2,PorAccPM2) values('".$_REQUEST['nomrazsoc2'] ."','".$_REQUEST['rfcsol1'].$_REQUEST['rfcsol2'].$_REQUEST['rfcsol3'].$_REQUEST['rfcsol4'].$_REQUEST['rfcsol5'].$_REQUEST['rfcsol6'].$_REQUEST['rfcsol7'].$_REQUEST['rfcsol8'].$_REQUEST['rfcsol9'].$_REQUEST['rfcsol10'].$_REQUEST['rfcsol11'].$_REQUEST['rfcsol12'].$_REQUEST['rfcsol13']."','". $_REQUEST['telsol1'].$_REQUEST['telsol2'].$_REQUEST['telsol3'].$_REQUEST['telsol4'].$_REQUEST['telsol5'].$_REQUEST['telsol6'].$_REQUEST['telsol7'].$_REQUEST['telsol8'].$_REQUEST['telsol9'].$_REQUEST['telsol10']."','". $_REQUEST['dirsol']."','". $_REQUEST['dirnumsol']."','". $_REQUEST['colsol']."','".$_REQUEST['edosol']."','".$_REQUEST['textfield5']."','".$_REQUEST['cpsol']."','".$_REQUEST['mailsol2']."','".$_REQUEST['faxsol1'].$_REQUEST['faxsol2'].$_REQUEST['faxsol3'].$_REQUEST['faxsol4'].$_REQUEST['faxsol5'].$_REQUEST['faxsol6'].$_REQUEST['faxsol7'].$_REQUEST['faxsol8'].$_REQUEST['faxsol9'].$_REQUEST['faxsol10']."','".$_REQUEST['textfield10']."','".$_REQUEST['nomconemp']."','".$_REQUEST['segnomconemp']."','".$_REQUEST['apepaconemp']."','".$_REQUEST['apemaconemp']."','".$_REQUEST['apemaconemp']."','".$_REQUEST['datobdir22']."','".$_REQUEST['datobcol23']."','".$_REQUEST['lugnacsol22']."','".$_REQUEST['colsol22']."','".$_REQUEST['cdsol22']."','".$_REQUEST['sexsol']."','".$_REQUEST['textfield16']."','".$_REQUEST['textfield17']."','".$_REQUEST['civilsol']."','".$_REQUEST['telconemp1'].$_REQUEST['telconemp2'].$_REQUEST['telconemp3'].$_REQUEST['telconemp4'].$_REQUEST['telconemp5'].$_REQUEST['telconemp6'].$_REQUEST['telconemp7'].$_REQUEST['telconemp8'].$_REQUEST['telconemp9'].$_REQUEST['telconemp10']."','".$_REQUEST['textfield27']."','".$_REQUEST['textfield28']."','".$_REQUEST['rfcconemp1'].$_REQUEST['rfcconemp2'].$_REQUEST['rfcconemp3'].$_REQUEST['rfcconemp4'].$_REQUEST['rfcconemp5'].$_REQUEST['rfcconemp6'].$_REQUEST['rfcconemp7'].$_REQUEST['rfcconemp8'].$_REQUEST['rfcconemp9'].$_REQUEST['rfcconemp10'].$_REQUEST['rfcconemp11'].$_REQUEST['rfcconemp12'].$_REQUEST['rfcconemp13'] ."','".$_REQUEST['textfield30']."','".$_REQUEST['textfield31']."','".$_REQUEST['textfield32']."','".$_REQUEST['textfield35']."','".$_REQUEST['faxconemp1'].$_REQUEST['faxconemp2'].$_REQUEST['faxconemp3'].$_REQUEST['faxconemp4'].$_REQUEST['faxconemp5'].$_REQUEST['faxconemp6'].$_REQUEST['faxconemp7'].$_REQUEST['faxconemp8'].$_REQUEST['faxconemp9'].$_REQUEST['faxconemp10']."','".$_REQUEST['puesconemp']."','".$_REQUEST['textfield37']."','".$_REQUEST['textfield38']."','".$_REQUEST['actprinc']."','".$_REQUEST['inicoper1']."','".$_REQUEST['cantperson']."','".$_REQUEST['inicoper13']."','".$_REQUEST['antemp']."','".$_REQUEST['apodsusc']."','".$_REQUEST['accionista1']."','".$_REQUEST['rfcaccion1']."','".$_REQUEST['%1']."','".$_REQUEST['accionista2']."','".$_REQUEST['rfcaccion2']."','".$_REQUEST['%2']."','".$_REQUEST['accionista3']."','".$_REQUEST['rfcaccion3']."','".$_REQUEST['%3']."','".$_REQUEST['accionista4']."','".$_REQUEST['rfcaccion4']."','".$_REQUEST['%4']."','".$_REQUEST['accpermor1']."','".$_REQUEST['rfcaccpermor1']."','".$_REQUEST['%permoracc1']."','".$_REQUEST['accpermor2']."','".$_REQUEST['rfcaccpermor2']."','".$_REQUEST['%permoracc2']."');");
$id_pmRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
$id_pm=$id_pmRequest['LAST_INSERT_ID()'];
$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pm where Id='$id_pm'"));
$Folio_Cliente=$folio_request['Folio_Cliente'];



			
			mysqli_query($cnx,"insert into solicitudpm (Folio_Cliente,
TipoCredito,
BancRefBan,
NoTarRefBan,
SucRefBan,
FecApRefBan,
BancRefBan2,
NoTarRefBan2,
SucRefBan2,
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
LugNacObPerMor,
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
ApPatObSol,
ApMatObSol,
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
ApPatObSol2,
ApMatObSol2,
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
Fecha,
ClavConcesionario,
NomConcesionario,
NomVendedor,
NomGerenteGral) values (

'".$Folio_Cliente."',
 '".$_REQUEST['tipocredito']."',
 '".$_REQUEST['refbanc']."',
 '".$_REQUEST['numcuebanc']."',
 '".$_REQUEST['sucbanc1']."',
 '".$_REQUEST['aperbanc1d']."',
 '".$_REQUEST['refbanc2']."',
 '".$_REQUEST['tarjrefbanc']."',
 '".$_REQUEST['sucbanc2']."',
 '".$_REQUEST['aperbanc1d2']."',
 '".$_REQUEST['refcomemp1']."',
 '".$_REQUEST['antirefcom1']."',
 '".$_REQUEST['telrefcom11'].$_REQUEST['telrefcom12'].$_REQUEST['telrefcom13'].$_REQUEST['telrefcom14'].$_REQUEST['telrefcom15'].$_REQUEST['telrefcom16'].$_REQUEST['telrefcom17'].$_REQUEST['telrefcom18'].$_REQUEST['telrefcom19'].$_REQUEST['telrefcom110']."',
 '".$_REQUEST['refcomemp2']."',
 '".$_REQUEST['antirefcom2']."',
 '".$_REQUEST['telrefcom21'].$_REQUEST['telrefcom22'].$_REQUEST['telrefcom23'].$_REQUEST['telrefcom24'].$_REQUEST['telrefcom25'].$_REQUEST['telrefcom26'].$_REQUEST['telrefcom27'].$_REQUEST['telrefcom28'].$_REQUEST['telrefcom29'].$_REQUEST['telrefcom210']."',
 '".$_REQUEST['cargdir']."',
 '".$_REQUEST['nocuentcd']."',
 '".$_REQUEST['nomrazsoc']."',
 '".$_REQUEST['dirpermor']."',
 '".$_REQUEST['colpermor']."',
 '".$_REQUEST['cdpermor']."',
 '".$_REQUEST['datoblugnac1']."',
 '".$_REQUEST['edopermor']."',
 '".$_REQUEST['cppremor']."',
 '".$_REQUEST['permorrfc1'].$_REQUEST['permorrfc2'].$_REQUEST['permorrfc3'].$_REQUEST['permorrfc4'].$_REQUEST['permorrfc5'].$_REQUEST['permorrfc6'].$_REQUEST['permorrfc7'].$_REQUEST['permorrfc8'].$_REQUEST['permorrfc9'].$_REQUEST['permorrfc10']."',
 '".$_REQUEST['telpermor1'].$_REQUEST['telpermor2'].$_REQUEST['telpermor3'].$_REQUEST['telpermor4'].$_REQUEST['telpermor5'].$_REQUEST['telpermor6'].$_REQUEST['telpermor7'].$_REQUEST['telpermor8'].$_REQUEST['telpermor9'].$_REQUEST['telpermor10']."',
 '".$_REQUEST['faxpermor1'].$_REQUEST['faxpermor2'].$_REQUEST['faxpermor3'].$_REQUEST['faxpermor4'].$_REQUEST['faxpermor5'].$_REQUEST['faxpermor6'].$_REQUEST['faxpermor7'].$_REQUEST['faxpermor8'].$_REQUEST['faxpermor9'].$_REQUEST['faxpermor10']."',
 '".$_REQUEST['apodsusc2']."',
 '".$_REQUEST['actprinc2']."',
 '".$_REQUEST['actprinc2']."',
 '".$_REQUEST['inicoper12']."',
 '".$_REQUEST['cantperson2']."',
 '".$_REQUEST['accionista1']."',
 '".$_REQUEST['rfcaccion1']."',
 '".$_REQUEST['%1']."',
 '".$_REQUEST['accionista2']."',
  '".$_REQUEST['rfcaccion2']."',
  '".$_REQUEST['%2']."',
   '".$_REQUEST['accionista3']."',
    '".$_REQUEST['rfcaccion3']."',
	'".$_REQUEST['%3']."',
    '".$_REQUEST['accionista4']."',
    '".$_REQUEST['rfcaccion4']."',
	'".$_REQUEST['%4']."',
     '".$_REQUEST['accpermor1']."',
    '".$_REQUEST['rfcaccpermor1']."',
     '".$_REQUEST['%permoracc1']."',
    '".$_REQUEST['accpermor2']."',
     '".$_REQUEST['rfcaccpermor2']."',
    '".$_REQUEST['%permoracc2']."',
	'".$_REQUEST['datobnom1']."',
	'".$_REQUEST['datobappat1']."',
	'".$_REQUEST['datobapmat1']."',		
	'".$_REQUEST['datobrfc11'].$_REQUEST['datobrfc12'].$_REQUEST['datobrfc13'].$_REQUEST['datobrfc14'].$_REQUEST['datobrfc15'].$_REQUEST['datobrfc16'].$_REQUEST['datobrfc17'].$_REQUEST['datobrfc18'].$_REQUEST['datobrfc19'].$_REQUEST['datobrfc110'].$_REQUEST['datobrfc111'].$_REQUEST['datobrfc112'].$_REQUEST['datobrfc113']."',
	'".$_REQUEST['datobtel11'].$_REQUEST['datobtel12'].$_REQUEST['datobtel13'].$_REQUEST['datobtel14'].$_REQUEST['datobtel15'].$_REQUEST['datobtel16'].$_REQUEST['datobtel17'].$_REQUEST['datobtel18'].$_REQUEST['datobtel19'].$_REQUEST['datobtel110']."',
	'".$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102']."',
	'".$_REQUEST['datobdir1']."',
	'".$_REQUEST['datobcol1']."',
	'".$_REQUEST['datobcd1']."',
	'".$_REQUEST['datoblugnac1']."',
	'".$_REQUEST['datobprop1']."',
	'".$_REQUEST['datobedo1']."',
	'".$_REQUEST['datobcp1']."',
	'".$_REQUEST['datobmail1']."',
	'".$_REQUEST['datobsex1']."',
	'".$_REQUEST['datobfechnac1d']."',
	'".$_REQUEST['datobed1']."',
	'".$_REQUEST['datobcurp1']."',
	'".$_REQUEST['obsol1']."',
	'".$_REQUEST['datobsex11']."',
	'".$_REQUEST['datobfechnac1d2']."',
	'".$_REQUEST['datobnom22']."',
	'".$_REQUEST['CURPObSolPF']."',
	'".$_REQUEST['EdObSolPF']."',
	'".$_REQUEST['datobnom2']."',
	'".$_REQUEST['datobappat2']."',
	'".$_REQUEST['datobapmat2']."',
	'".$_REQUEST['datobrfc21'].$_REQUEST['datobrfc22'].$_REQUEST['datobrfc23'].$_REQUEST['datobrfc24'].$_REQUEST['datobrfc25'].$_REQUEST['datobrfc26'].$_REQUEST['datobrfc27'].$_REQUEST['datobrfc28'].$_REQUEST['datobrfc29'].$_REQUEST['datobrfc210'].$_REQUEST['datobrfc211'].$_REQUEST['datobrfc212']."',
	'".$_REQUEST['datobtel21'].$_REQUEST['datobtel22'].$_REQUEST['datobtel23'].$_REQUEST['datobtel24'].$_REQUEST['datobtel25'].$_REQUEST['datobtel26'].$_REQUEST['datobtel27'].$_REQUEST['datobtel28'].$_REQUEST['datobtel29'].$_REQUEST['datobtel210']."',
	'".$_REQUEST['datobtel1122'].$_REQUEST['datobtel1222'].$_REQUEST['datobtel1322'].$_REQUEST['datobtel1422'].$_REQUEST['datobtel1522'].$_REQUEST['datobtel1622'].$_REQUEST['datobtel1722'].$_REQUEST['datobtel1822'].$_REQUEST['datobtel1922'].$_REQUEST['datobtel11022']."',
	'".$_REQUEST['datobdir2']."',
	'".$_REQUEST['datobcol2']."',
	'".$_REQUEST['datobcd2']."',
	'".$_REQUEST['datoblugnac2']."',
	'".$_REQUEST['datobprop2']."',
	'".$_REQUEST['datobedo2']."',
	'".$_REQUEST['datobcp2']."',
	'".$_REQUEST['datobmail2']."',
	'".$_REQUEST['datobsex2']."',
	'".$_REQUEST['datobfechnac2d']."',
	'".$_REQUEST['datobed2']."',
	'".$_REQUEST['datobcurp2']."',
	'".$_REQUEST['obsol2']."',
	'".$_REQUEST['datobsex22']."',
	'".$_REQUEST['datobfechnac1d22']."',
	'".$_REQUEST['datobnom222']."',
	'".$_REQUEST['datobappat222']."',
	'".$_REQUEST['datobapmat222']."',
	'".$_REQUEST['fecha']."',
	'".$_REQUEST['clavcon']."',
	'".$_REQUEST['nomcons']."',
	'".$_REQUEST['nomvend']."',
	'".$_REQUEST['gerentegral']."');");


/*

		mysqli_query($cnx,"insert into pfna (NomSolicitante,SegNomSolicitante,ApPatSolicitante,ApMatSolicitante,RFCSolicitante,TelSolicitante,MovSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,LugNacSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,CURPSolicitante,EmailSolicitante,SexoDatGen,FeNacDatGen,EdDatGen,NaDatGen,NoDepDatGen,AcDomDatGen,VivDatGen,ImpMenDatGen,PropInmuDatGen,ArDomDatGen,AnResDatGen,NomBenDatGen,ApPatBenDatGen,ApMatBenDatGen,EstCivDatGen,AuPropDatGen,MarDatGen,PuestDatEmp,DesAnDatEmp,CompDatEmp,TelDatEmp,ExtDatEmp,DomicilioLaboral,NumSerieFIEL,SueldoSolicitante,ActEcoAdicional,IngAdMensualAprox,Ocupacion_Profesion,FaxSolicitante,GiroDatEmp) values('$nomsol','$segnomsol','$apepasol','$apemasol','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$colsol','$cdsol','$lugnacsol','$edosol','$municipioSol','$cpsol','$curpsol','$mailsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$impmenpag','$PropInmuDatGen','$arraisol','$anosol2','$benesol3','$benesol1','$benesol2','$EstCivDatGen','$AuPropDatGen','$MarDatGen','$depasol','$DesAnDatEmp','$compasol','$TelDatEmp','$compatelsolext','$domicilioLaboral','$numSerieFiel','$SueldoSolicitante','$ActividadAdicional','$IngAdMensualAprox','$giroprof','$MovSolicitante','$giroactreal');");
		
		$id_pfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pfna=$id_pfnaRequest['LAST_INSERT_ID()'];
		$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pfna where Id='$id_pfna'"));
		$Folio_Cliente=$folio_request['Folio_Cliente'];
		mysqli_query($cnx,"insert into registro (Folio_Cliente,Fecha_apertura) values('$Folio_Cliente',CURDATE());");
		mysqli_query($cnx,"insert into solicitudpfna (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,SucRefBan,FecApRefBan,BancRefBan2,NoTarRefBan2,SucRefBan2,FecApRefBan2,EmpRefCom,AntRefCom,TelRefCom,EmpRefCom2,AntRefCom2,TelRefCom2,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObPerMor,DirObPerMor,ColObPerMor,CdObPerMor,LugNacObPerMor,EdoObPerMor,CPObPerMor,RFCObPerMor,TelObPerMor,FaxObPerMor,AntConsEmpPM,ApoConsEmpPM,ActPrinDatGen,IniOpDatGen,CantPerDatGen,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$Folio_Cliente','$TipoCredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$numcuebanc','$sucbanc1','$FecApRefBan','$refbanc2','$tarjrefbanc','$sucbanc2','$FecApRefBan2','$refcomemp1','$antirefcom1','$TelRefCom','$refcomemp2','$antirefcom2','$TelRefCom2','$cargdir','$nocuentcd','$conyunom','$conyuape1','$conyuape2','$compaconyu','$puestconyu','$nomrazsoc','$dirpermor','$colpermor','$cdpermor','$lugnacpermor','$edopermor','$cppremor','$RFCObPerMor','$TelObPerMor','$FaxObPerMor','$antemp','$apodsusc','$actprinc','$IniOpDatGen','$cantperson','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");


  */
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
		$NombrePEPS=$_REQUEST['textfield93'];
		$ParentescoPEPS=$_REQUEST['textfield94'];
		$PuestoPEPS=$_REQUEST['textfield95'];
	} else {
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
		
$fechaComprobante=$_REQUEST['fechaComprobante'];
		$id_solicitudpmRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pm=$id_solicitudpmRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpm where Id='$id_pm'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom)
		        values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','".$_REQUEST['copias']."','$Pasaporte_o_CedulaProfSolicitante','".$_REQUEST['copias2']."','$CartillaMilitarSolicitante','".$_REQUEST['copias3']."','$LicenciaConducirSolicitante','".$_REQUEST['copias4']."','$OtraIdentSolicitante','".$_REQUEST['copias5']."','$EspIdentSolicitante','".$_REQUEST['cotejo']."','".$_REQUEST['adjuntos1']."','".$_REQUEST['adjuntos2']."','".$_REQUEST['adjuntos3']."','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','".$_REQUEST['PEPS']."','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");
	

	}else {
		
		 $Folio_Cliente=$_REQUEST['cliente'];
			
			mysqli_query($cnx,"insert into solicitudpm (Folio_Cliente,
TipoCredito,
BancRefBan,
NoTarRefBan,
SucRefBan,
FecApRefBan,
BancRefBan2,
NoTarRefBan2,
SucRefBan2,
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
LugNacObPerMor,
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
ApPatObSol,
ApMatObSol,
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
ApPatObSol2,
ApMatObSol2,
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
Fecha,
ClavConcesionario,
NomConcesionario,
NomVendedor,
NomGerenteGral) values (

'".$Folio_Cliente."',
 '".$_REQUEST['tipocredito']."',
 '".$_REQUEST['refbanc']."',
 '".$_REQUEST['numcuebanc']."',
 '".$_REQUEST['sucbanc1']."',
 '".$_REQUEST['aperbanc1d']."',
 '".$_REQUEST['refbanc2']."',
 '".$_REQUEST['tarjrefbanc']."',
 '".$_REQUEST['sucbanc2']."',
 '".$_REQUEST['aperbanc1d2']."',
 '".$_REQUEST['refcomemp1']."',
 '".$_REQUEST['antirefcom1']."',
 '".$_REQUEST['telrefcom11'].$_REQUEST['telrefcom12'].$_REQUEST['telrefcom13'].$_REQUEST['telrefcom14'].$_REQUEST['telrefcom15'].$_REQUEST['telrefcom16'].$_REQUEST['telrefcom17'].$_REQUEST['telrefcom18'].$_REQUEST['telrefcom19'].$_REQUEST['telrefcom110']."',
 '".$_REQUEST['refcomemp2']."',
 '".$_REQUEST['antirefcom2']."',
 '".$_REQUEST['telrefcom21'].$_REQUEST['telrefcom22'].$_REQUEST['telrefcom23'].$_REQUEST['telrefcom24'].$_REQUEST['telrefcom25'].$_REQUEST['telrefcom26'].$_REQUEST['telrefcom27'].$_REQUEST['telrefcom28'].$_REQUEST['telrefcom29'].$_REQUEST['telrefcom210']."',
 '".$_REQUEST['cargdir']."',
 '".$_REQUEST['nocuentcd']."',
 '".$_REQUEST['nomrazsoc']."',
 '".$_REQUEST['dirpermor']."',
 '".$_REQUEST['colpermor']."',
 '".$_REQUEST['cdpermor']."',
 '".$_REQUEST['datoblugnac1']."',
 '".$_REQUEST['edopermor']."',
 '".$_REQUEST['cppremor']."',
 '".$_REQUEST['permorrfc1']."',
 '".$_REQUEST['telpermor1'].$_REQUEST['telpermor2'].$_REQUEST['telpermor3'].$_REQUEST['telpermor4'].$_REQUEST['telpermor5'].$_REQUEST['telpermor6'].$_REQUEST['telpermor7'].$_REQUEST['telpermor8'].$_REQUEST['telpermor9'].$_REQUEST['telpermor10']."',
 '".$_REQUEST['faxpermor1'].$_REQUEST['faxpermor2'].$_REQUEST['faxpermor3'].$_REQUEST['faxpermor4'].$_REQUEST['faxpermor5'].$_REQUEST['faxpermor6'].$_REQUEST['faxpermor7'].$_REQUEST['faxpermor8'].$_REQUEST['faxpermor9'].$_REQUEST['faxpermor10']."',
 '".$_REQUEST['apodsusc2']."',
 '".$_REQUEST['actprinc2']."',
 '".$_REQUEST['actprinc2']."',
 '".$_REQUEST['inicoper12']."',
 '".$_REQUEST['cantperson2']."',
 '".$_REQUEST['accionista1']."',
 '".$_REQUEST['rfcaccion1']."',
 '".$_REQUEST['%1']."',
 '".$_REQUEST['accionista2']."',
  '".$_REQUEST['rfcaccion2']."',
  '".$_REQUEST['%2']."',
   '".$_REQUEST['accionista3']."',
    '".$_REQUEST['rfcaccion3']."',
	'".$_REQUEST['%3']."',
    '".$_REQUEST['accionista4']."',
    '".$_REQUEST['rfcaccion4']."',
	'".$_REQUEST['%4']."',
     '".$_REQUEST['accpermor1']."',
    '".$_REQUEST['rfcaccpermor1']."',
     '".$_REQUEST['%permoracc1']."',
    '".$_REQUEST['accpermor2']."',
     '".$_REQUEST['rfcaccpermor2']."',
    '".$_REQUEST['%permoracc2']."',
	'".$_REQUEST['datobnom1']."',
	'".$_REQUEST['datobappat1']."',
	'".$_REQUEST['datobapmat1']."',		
	'".$_REQUEST['datobrfc11']."',
	'".$_REQUEST['datobtel11'].$_REQUEST['datobtel12'].$_REQUEST['datobtel13'].$_REQUEST['datobtel14'].$_REQUEST['datobtel15'].$_REQUEST['datobtel16'].$_REQUEST['datobtel17'].$_REQUEST['datobtel18'].$_REQUEST['datobtel19'].$_REQUEST['datobtel110']."',
	'".$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102']."',
	'".$_REQUEST['datobdir1']."',
	'".$_REQUEST['datobcol1']."',
	'".$_REQUEST['datobcd1']."',
	'".$_REQUEST['datoblugnac1']."',
	'".$_REQUEST['datobprop1']."',
	'".$_REQUEST['datobedo1']."',
	'".$_REQUEST['datobcp1']."',
	'".$_REQUEST['datobmail1']."',
	'".$_REQUEST['datobsex1']."',
	'".$_REQUEST['datobfechnac1d']."',
	'".$_REQUEST['datobed1']."',
	'".$_REQUEST['datobcurp1']."',
	'".$_REQUEST['obsol1']."',
	'".$_REQUEST['datobsex11']."',
	'".$_REQUEST['datobfechnac1d2']."',
	'".$_REQUEST['datobnom22']."',
	'".$_REQUEST['CURPObSolPF']."',
	'".$_REQUEST['EdObSolPF']."',
	'".$_REQUEST['datobnom2']."',
	'".$_REQUEST['datobappat2']."',
	'".$_REQUEST['datobapmat2']."',
	'".$_REQUEST['datobrfc21'].$_REQUEST['datobrfc22'].$_REQUEST['datobrfc23'].$_REQUEST['datobrfc24'].$_REQUEST['datobrfc25'].$_REQUEST['datobrfc26'].$_REQUEST['datobrfc27'].$_REQUEST['datobrfc28'].$_REQUEST['datobrfc29'].$_REQUEST['datobrfc210'].$_REQUEST['datobrfc211'].$_REQUEST['datobrfc212']."',
	'".$_REQUEST['datobtel21'].$_REQUEST['datobtel22'].$_REQUEST['datobtel23'].$_REQUEST['datobtel24'].$_REQUEST['datobtel25'].$_REQUEST['datobtel26'].$_REQUEST['datobtel27'].$_REQUEST['datobtel28'].$_REQUEST['datobtel29'].$_REQUEST['datobtel210']."',
	'".$_REQUEST['datobtel1122'].$_REQUEST['datobtel1222'].$_REQUEST['datobtel1322'].$_REQUEST['datobtel1422'].$_REQUEST['datobtel1522'].$_REQUEST['datobtel1622'].$_REQUEST['datobtel1722'].$_REQUEST['datobtel1822'].$_REQUEST['datobtel1922'].$_REQUEST['datobtel11022']."',
	'".$_REQUEST['datobdir2']."',
	'".$_REQUEST['datobcol2']."',
	'".$_REQUEST['datobcd2']."',
	'".$_REQUEST['datoblugnac2']."',
	'".$_REQUEST['datobprop2']."',
	'".$_REQUEST['datobedo2']."',
	'".$_REQUEST['datobcp2']."',
	'".$_REQUEST['datobmail2']."',
	'".$_REQUEST['datobsex2']."',
	'".$_REQUEST['datobfechnac2d']."',
	'".$_REQUEST['datobed2']."',
	'".$_REQUEST['datobcurp2']."',
	'".$_REQUEST['obsol2']."',
	'".$_REQUEST['datobsex22']."',
	'".$_REQUEST['datobfechnac1d22']."',
	'".$_REQUEST['datobnom222']."',
	'".$_REQUEST['datobappat222']."',
	'".$_REQUEST['datobapmat222']."',
	'".$_REQUEST['fecha']."',
	'".$_REQUEST['clavcon']."',
	'".$_REQUEST['nomcons']."',
	'".$_REQUEST['nomvend']."',
	'".$_REQUEST['gerentegral']."');");


/*

		mysqli_query($cnx,"insert into pfna (NomSolicitante,SegNomSolicitante,ApPatSolicitante,ApMatSolicitante,RFCSolicitante,TelSolicitante,MovSolicitante,DirSolicitante,NumDirSol,ColSolicitante,CdSolicitante,LugNacSolicitante,EdoSolicitante,MunicipioSolicitante,CPSolicitante,CURPSolicitante,EmailSolicitante,SexoDatGen,FeNacDatGen,EdDatGen,NaDatGen,NoDepDatGen,AcDomDatGen,VivDatGen,ImpMenDatGen,PropInmuDatGen,ArDomDatGen,AnResDatGen,NomBenDatGen,ApPatBenDatGen,ApMatBenDatGen,EstCivDatGen,AuPropDatGen,MarDatGen,PuestDatEmp,DesAnDatEmp,CompDatEmp,TelDatEmp,ExtDatEmp,DomicilioLaboral,NumSerieFIEL,SueldoSolicitante,ActEcoAdicional,IngAdMensualAprox,Ocupacion_Profesion,FaxSolicitante,GiroDatEmp) values('$nomsol','$segnomsol','$apepasol','$apemasol','$RFCSolicitante','$TelSolicitante','$MovSolicitante','$dirsol','$numeroDirSol','$colsol','$cdsol','$lugnacsol','$edosol','$municipioSol','$cpsol','$curpsol','$mailsol','$SexoDatGen','$FeNacDatGen','$edsol','$nacsol','$depensol','$acdomsol','$VivDatGen','$impmenpag','$PropInmuDatGen','$arraisol','$anosol2','$benesol3','$benesol1','$benesol2','$EstCivDatGen','$AuPropDatGen','$MarDatGen','$depasol','$DesAnDatEmp','$compasol','$TelDatEmp','$compatelsolext','$domicilioLaboral','$numSerieFiel','$SueldoSolicitante','$ActividadAdicional','$IngAdMensualAprox','$giroprof','$MovSolicitante','$giroactreal');");
		
		$id_pfnaRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pfna=$id_pfnaRequest['LAST_INSERT_ID()'];
		$folio_request=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Cliente from pfna where Id='$id_pfna'"));
		$Folio_Cliente=$folio_request['Folio_Cliente'];
		mysqli_query($cnx,"insert into registro (Folio_Cliente,Fecha_apertura) values('$Folio_Cliente',CURDATE());");
		mysqli_query($cnx,"insert into solicitudpfna (Folio_Cliente,TipoCredito,NomRefPer,ParenRefPer,TelRefPer,NomRefPer2,ParenRefPer2,TelRefPer2,BancRefBan,NoTarRefBan,SucRefBan,FecApRefBan,BancRefBan2,NoTarRefBan2,SucRefBan2,FecApRefBan2,EmpRefCom,AntRefCom,TelRefCom,EmpRefCom2,AntRefCom2,TelRefCom2,BancCarDir,NoTarCarDir,NomDatCon,ApPatDatCon,ApMatDatCon,CompDatCon,PuestDatCon,NomObPerMor,DirObPerMor,ColObPerMor,CdObPerMor,LugNacObPerMor,EdoObPerMor,CPObPerMor,RFCObPerMor,TelObPerMor,FaxObPerMor,AntConsEmpPM,ApoConsEmpPM,ActPrinDatGen,IniOpDatGen,CantPerDatGen,NomObSol,ApPatObSol,ApMatObSol,RFCObSol,TelObSol,MovObSol,DirObSol,ColObSol,CdObSol,LugNacObSol,PropObSol,EdoObSol,CPObSol,EmailObSol,SexoObSol,FeNacObSol,EdObSol,CURPObSol,NomObSol2,ApPatObSol2,ApMatObSol2,RFCObSol2,TelObSol2,MovObSol2,DirObSol2,ColObSol2,CdObSol2,LugNacObSol2,PropObSol2,EdoObSol2,CPObSol2,EmailObSol2,SexoObSol2,FeNacObSol2,EdObSol2,CURPObSol2,Fecha,ClavConcesionario,NomConcesionario,NomVendedor,NomGerenteGral,Status) values ('$Folio_Cliente','$TipoCredito','$nomref1','$parenref1','$TelRefPer','$nomref2','$parenref2','$TelRefPer2','$refbanc','$numcuebanc','$sucbanc1','$FecApRefBan','$refbanc2','$tarjrefbanc','$sucbanc2','$FecApRefBan2','$refcomemp1','$antirefcom1','$TelRefCom','$refcomemp2','$antirefcom2','$TelRefCom2','$cargdir','$nocuentcd','$conyunom','$conyuape1','$conyuape2','$compaconyu','$puestconyu','$nomrazsoc','$dirpermor','$colpermor','$cdpermor','$lugnacpermor','$edopermor','$cppremor','$RFCObPerMor','$TelObPerMor','$FaxObPerMor','$antemp','$apodsusc','$actprinc','$IniOpDatGen','$cantperson','$datobnom1','$datobappat1','$datobapmat1','$RFCObSol','$TelObSol','$MovObSol','$datobdir1','$datobcol1','$datobcd1','$datoblugnac1','$PropObSol','$datobedo1','$datobcp1','$datobmail1','$SexoObSol','$FeNacObSol','$datobed1','$datobcurp1','$datobnom2','$datobappat2','$datobapmat2','$RFCObSol2','$TelObSol2','$MovObSol2','$datobdir2','$datobcol2','$datobcd2','$datoblugnac2','$PropObSol2','$datobedo2','$datobcp2','$datobmail2','$SexoObSol2','$FeNacObSol2','$datobed2','$datobcurp2','$fecha','$clavcon','$nomcons','$nomvend','$gerentegral','Pendiente');");


  */
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
		$NombrePEPS=$_REQUEST['textfield93'];
		$ParentescoPEPS=$_REQUEST['textfield94'];
		$PuestoPEPS=$_REQUEST['textfield95'];
	} else {
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
		
$fechaComprobante=$_REQUEST['fechaComprobante'];
		$id_solicitudpmRequest=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));							 
		$id_pm=$id_solicitudpmRequest['LAST_INSERT_ID()'];
		$folio_solrequest=mysqli_fetch_array(mysqli_query($cnx,"select Folio_Sol from solicitudpm where Id='$id_pm'"));
		$Folio_Sol=$folio_solrequest['Folio_Sol'];

		mysqli_query($cnx,"insert into gradoriesgo (Folio_sol,Folio_Cliente,Antiguedad_ObjetoSocial,Antiguedad_Cliente,Naturaleza_Operaciones,Numero_Beneficiarios,Numero_TercerosRelacionados,PEPs_Relacionados,Alerta_Reputacional,Volumen_Esperado,Frecuencia_Esperada,Instrumento_Monetario,Canales_MediosUtilizados,Pais_EstadoOficial,Pais_EstadoResidencia,Pais_EstadoOperacion,Origen_Recursos,Destino_Recursos,Pais_EstadoResidenciaTerceros,GradoRiesgo,INESolicitante,Adjunta_INESolicitante,Pasaporte_o_CedulaProfSolicitante,Adjunta_Pasaporte_o_CedulaProfSolicitante,CartillaMilitarSolicitante,Adjunta_CartillaMilitarSolicitante,LicenciaConducirSolicitante,Adjunta_LicenciaConducirSolicitante,OtraIdentSolicitante,Adjunta_OtraIdentSolicitante,EspIdentSolicitante,CotejoVsOriginal,Adjunta_CURP_RFC_FEA,Adjunta_ComprobanteDom,DomicilioCoincideId,DomBeneficiario,ColBeneficiario,CPBeneficiario,PaisBeneficiario,TelBeneficiario,CURPBeneficiario,RFCBeneficiario,ParentescoBeneficiario,PorcientoBeneficiario,FeNacBeneficiario,MunBeneficiario,EdoBeneficiario,EdoCivilBeneficiario,SoConBeneficiario,OcuProfBeneficiario,PEPSBeneficiario,OrigenRecBeneficiario,PerTrans1,FuentePerTrans1,PerTrans2,FuentePerTrans2,PerTrans3,FuentePerTrans3,PerTrans4,FuentePerTrans4,PerTrans5,FuentePerTrans5,PerTrans6,FuentePerTrans6,PerTrans7,FuentePerTrans7,PerTrans8,FuentePerTrans8,PerTrans9,FuentePerTrans9,PerTrans10,FuentePerTrans10,TotalIngreso,ValorAuto,EngAutomovil,PorEnganche,PorFinanciamiento,MontoFinanciado,Plazo,PagoMensEsp,PEPS,NombrePEPS,ParentescoPEPS,PuestoPEPS,FechaComprobanteDom)
		        values ('$Folio_Sol','$Folio_Cliente','$select','$select2','$select3','$select4','$select5','$select6','$select7','$select8','$select9','$select10','$select11','$select12','$select13','$select14','$select15','$select16','$select17','$GradoRiesgo','$INESolicitante','".$_REQUEST['copias']."','$Pasaporte_o_CedulaProfSolicitante','".$_REQUEST['copias2']."','$CartillaMilitarSolicitante','".$_REQUEST['copias3']."','$LicenciaConducirSolicitante','".$_REQUEST['copias4']."','$OtraIdentSolicitante','".$_REQUEST['copias5']."','$EspIdentSolicitante','".$_REQUEST['cotejo']."','".$_REQUEST['adjuntos1']."','".$_REQUEST['adjuntos2']."','".$_REQUEST['adjuntos3']."','$DomBeneficiario','$ColBeneficiario','$CPBeneficiario','$PaisBeneficiario','$TelBeneficiario','$CURPBeneficiario','$RFCBeneficiario','$ParentescoBeneficiario','$PorcientoBeneficiario','$FeNacBeneficiario','$MunBeneficiario','$EdoBeneficiario','$EdoCivilBeneficiario','$SoConBeneficiario','$OcuProfBeneficiario','$PEPSBeneficiario','$OrigenRecBeneficiario','$PerTrans1','$FuentePerTrans1','$PerTrans2','$FuentePerTrans2','$PerTrans3','$FuentePerTrans3','$PerTrans4','$FuentePerTrans4','$PerTrans5','$FuentePerTrans5','$PerTrans6','$FuentePerTrans6','$PerTrans7','$FuentePerTrans7','$PerTrans8','$FuentePerTrans8','$PerTrans9','$FuentePerTrans9','$PerTrans10','$FuentePerTrans10','$totalIngreso','$ValorAuto','$EngAutomovil','$PorEnganche','$PorFinanciamiento','$MontoFinanciado','$Plazo','$PagoMensEsp','".$_REQUEST['PEPS']."','$NombrePEPS','$ParentescoPEPS','$PuestoPEPS','$fechaComprobante');");
	
	}
/* 




///// GENERACIÓN DEL PDF

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







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
$pdf->SetAuthor('SERVICIOS FINANCIEROS DEL GUADIANA');
$pdf->SetTitle('Solicitud 004 '.$entro);
$pdf->SetSubject('Solicitud 004');
$pdf->SetKeywords('Solicitud 004');

// set default header data
$pdf->SetHeaderData('logosfg.png', PDF_HEADER_LOGO_WIDTH, '', 'Servicios financieros del 
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
 ", 0, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(30,0,'Folio del cliente
 '.$_REQUEST['cliente'], 1, 'J', 0, 0, '', '', true,0,false,true);
//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);
$tipocredito1="";$tipocredito2="";$tipocredito3="";
if($_REQUEST['tipocredito']=="1"){
$tipocredito1="X";
}elseif($_REQUEST['tipocredito']=="2"){
$tipocredito2="X";
}elseif($_REQUEST['tipocredito']=="3"){
$tipocredito3="X";
}else{
$tipocredito1="";$tipocredito2="";$tipocredito3="";
}
$pdf->MultiCell(30,0, 'Leasing  ('.$tipocredito1.')' , 0, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(30,0, 'Credit  ('.$tipocredito2.')' , 0, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Premium ('.$tipocredito3.')
	' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

//
$pdf->MultiCell(60,0, 'Nombre Razon social
 '.$_REQUEST['nomrazsoc2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(50,0, 'R.F.C
 '.$_REQUEST['rfcsol1'].$_REQUEST['rfcsol2'].$_REQUEST['rfcsol3'].$_REQUEST['rfcsol4'].$_REQUEST['rfcsol5'].$_REQUEST['rfcsol6'].$_REQUEST['rfcsol7'].$_REQUEST['rfcsol8'].$_REQUEST['rfcsol9'].$_REQUEST['rfcsol10'].$_REQUEST['rfcsol11'].$_REQUEST['rfcsol12'].$_REQUEST['rfcsol13'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Telefono
 '.$_REQUEST['telsol1'].$_REQUEST['telsol2'].$_REQUEST['telsol3'].$_REQUEST['telsol4'].$_REQUEST['telsol5'].$_REQUEST['telsol6'].$_REQUEST['telsol7'].$_REQUEST['telsol8'].$_REQUEST['telsol9'].$_REQUEST['telsol10'], 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Direccion/calle y numero
 '.$_REQUEST['dirsol'].'   #'.$_REQUEST['dirnumsol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(50,0, 'E-mail
 '.$_REQUEST['mailsol2'], 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Fax
 '.$_REQUEST['faxsol1'].$_REQUEST['faxsol2'].$_REQUEST['faxsol3'].$_REQUEST['faxsol4'].$_REQUEST['faxsol5'].$_REQUEST['faxsol6'].$_REQUEST['faxsol7'].$_REQUEST['faxsol8'].$_REQUEST['faxsol9'].$_REQUEST['faxsol10'] , 1, 'L', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);
//
$pdf->MultiCell(30,0, 'Colonia
 '.$_REQUEST['colsol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(50,0, 'Ciudad
 '.$_REQUEST['cdsol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(60,0, 'Estado
 '.$_REQUEST['edosol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Codigo Postal
 '.$_REQUEST['cpsol'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(50,0, 'Datos del contacto de la empresa' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Primer nombre 
 '.$_REQUEST['nomconemp'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(50,0, 'Segundo nombre
 '.$_REQUEST['segnomconemp'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Apellido paterno
 '.$_REQUEST['apepaconemp'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Apellido materno
 '.$_REQUEST['apemaconemp'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
$pdf->Ln(1);


$pdf->MultiCell(30,0, 'Telefono
 '.$_REQUEST['telconemp1'].$_REQUEST['telconemp2'].$_REQUEST['telconemp3'].$_REQUEST['telconemp4'].$_REQUEST['telconemp5'].$_REQUEST['telconemp6'].$_REQUEST['telconemp7'].$_REQUEST['telconemp8'].$_REQUEST['telconemp9'].$_REQUEST['telconemp10'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(60,0, 'E-mail
 '.$_REQUEST['mailconemp'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(50,0, 'RFC
 '.$_REQUEST['rfcconemp1'].$_REQUEST['rfcconemp2'].$_REQUEST['rfcconemp3'].$_REQUEST['rfcconemp4'].$_REQUEST['rfcconemp5'].$_REQUEST['rfcconemp6'].$_REQUEST['rfcconemp7'].$_REQUEST['rfcconemp8'].$_REQUEST['rfcconemp9'].$_REQUEST['rfcconemp10'].$_REQUEST['rfcconemp11'].$_REQUEST['rfcconemp12'].$_REQUEST['rfcconemp13'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Fax
 '.$_REQUEST['faxconemp1'].$_REQUEST['faxconemp2'].$_REQUEST['faxconemp3'].$_REQUEST['faxconemp4'].$_REQUEST['faxconemp5'].$_REQUEST['faxconemp6'].$_REQUEST['faxconemp7'].$_REQUEST['faxconemp8'].$_REQUEST['faxconemp9'].$_REQUEST['faxconemp10'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Puesto que desempeña
 '.$_REQUEST['puesconemp'] , 1, 'L', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Datos generales de la empresa' , 0, 'J', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(70,0, 'Actividad principal
 '.$_REQUEST['actprinc'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
 ' , 0, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(60,0, 'Fecha de inicio de operaciones
 '.$_REQUEST['inicoper1'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
 ' , 0, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Cantidad de personal
 '.$_REQUEST['cantperson'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Constitucion empresa' , 0, 'L', 0, 1, '', '', true,0,false,true);

$pdf->MultiCell(60,0, 'Antiguedad
	'.$_REQUEST['inicoper13'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
	'.$_REQUEST['apodsusc'] , 1, 'J', 0, 1, '', '', true,0,false,true);                                                                                                                                                                                                                                                                   
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Referencias bancarias' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Banco
	'.$_REQUEST['refbanc'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Sucursal
	'.$_REQUEST['sucbanc1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(30,0, 'Numero de cuenta
	'.$_REQUEST['numcuebanc'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Feach de apertura
	'.$_REQUEST['aperbanc1d'] , 1, 'J', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Banco
	'.$_REQUEST['refbanc2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Sucursal
	'.$_REQUEST['sucbanc2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(30,0, 'Numero de cuenta
	'.$_REQUEST['tarjrefbanc'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(00,0, 'Feach de apertura
	'.$_REQUEST['aperbanc1d2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);


$pdf->MultiCell(00,0, 'CARGO DIRECTO CUENTA DE CHEQUES (para contratos en M.N. BBVA Bancomer, HSBC, Banamex, BANORTE, Scotiabank Inverlat, Santander o Inbursa)
(para contratos en USD únicamente BBVA Bancomer y HSBC)' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(50,0, 'Banco
	'.$_REQUEST['cargdir'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Numero de cuenta (CLABE)
	'.$_REQUEST['nocuentcd'] , 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Referencias comerciales' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(70,0, 'Empresa
	'.$_REQUEST['refcomemp1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	'.$_REQUEST['antirefcom1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$_REQUEST['telrefcom11'].$_REQUEST['telrefcom12'] .$_REQUEST['telrefcom13'].$_REQUEST['telrefcom14'].$_REQUEST['telrefcom15'].$_REQUEST['telrefcom16'].$_REQUEST['telrefcom17'].$_REQUEST['telrefcom18'].$_REQUEST['telrefcom19'].$_REQUEST['telrefcom110'], 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Empresa
	'.$_REQUEST['refcomemp2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	'.$_REQUEST['antirefcom2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$_REQUEST['telrefcom21'].$_REQUEST['telrefcom22'].$_REQUEST['telrefcom23'].$_REQUEST['telrefcom24'].$_REQUEST['telrefcom25'].$_REQUEST['telrefcom26'].$_REQUEST['telrefcom27'].$_REQUEST['telrefcom28'].$_REQUEST['telrefcom29'].$_REQUEST['telrefcom210'] , 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Datos obligado solidario' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(70,0, 'Nombre/Razon social
	'.$_REQUEST['nomrazsoc'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'RFC
	'.$_REQUEST['permorrfc1'].$_REQUEST['permorrfc2'].$_REQUEST['permorrfc3'].$_REQUEST['permorrfc4'].$_REQUEST['permorrfc5'].$_REQUEST['permorrfc6'].$_REQUEST['permorrfc7'].$_REQUEST['permorrfc8'].$_REQUEST['permorrfc9'].$_REQUEST['permorrfc10'].$_REQUEST['permorrfc11'].$_REQUEST['permorrfc12'].$_REQUEST['permorrfc13'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$_REQUEST['telpermor1'].$_REQUEST['telpermor2'].$_REQUEST['telpermor3'].$_REQUEST['telpermor4'].$_REQUEST['telpermor5'].$_REQUEST['telpermor6'].$_REQUEST['telpermor7'].$_REQUEST['telpermor8'].$_REQUEST['telpermor9'].$_REQUEST['telpermor10'] , 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Direccion
	'.$_REQUEST['dirpermor'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fax
	'.$_REQUEST['faxpermor1'].$_REQUEST['faxpermor2'].$_REQUEST['faxpermor3'].$_REQUEST['faxpermor4'].$_REQUEST['faxpermor5'].$_REQUEST['faxpermor6'].$_REQUEST['faxpermor7'].$_REQUEST['faxpermor8'].$_REQUEST['faxpermor9'].$_REQUEST['faxpermor10'] , 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);


$pdf->MultiCell(50,0, 'Colonia
	'.$_REQUEST['colpermor'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$_REQUEST['cdpermor'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Estado
	'.$_REQUEST['edopermor'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Codigo Postal
	'.$_REQUEST['cppremor'] , 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Constitucion de la empresa' , 0, 'L', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(70,0, 'Antiguedad
	'.$_REQUEST['antemp2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
	'.$_REQUEST['apodsusc2'] , 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);


$pdf->MultiCell(30,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,0,false,true);

$pdf->MultiCell(70,0, 'Actividad principal
	'.$_REQUEST['actprinc2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fecha de inicio operaciones
	'.$_REQUEST['inicoper12'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Cantidad de personal
	'.$_REQUEST['cantperson2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(0,0, 'De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. *' , 0, 'A', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(70,0, 'Nombre '.$_REQUEST['accionista1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(50,0, $_REQUEST['rfcaccion1'], 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $_REQUEST['%1'] , 1, 'J', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre '.$_REQUEST['accionista2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, $_REQUEST['rfcaccion2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $_REQUEST['%2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);

	$pdf->MultiCell(70,0, 'Nombre '.$_REQUEST['accionista3'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, $_REQUEST['rfcaccion3'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $_REQUEST['%3'] , 1, 'J', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);

	$pdf->MultiCell(70,0, 'Nombre '.$_REQUEST['accionista4'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, $_REQUEST['rfcaccion4'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $_REQUEST['%4'] , 1, 'J', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);	

	$pdf->MultiCell(0,0, '* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:' , 0, 'A', 0, 1, '', '', true,1,false,true);
	
	$pdf->MultiCell(70,0, 'Nombre '.$_REQUEST['accpermor1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, $_REQUEST['rfcaccpermor1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $_REQUEST['%permoracc1'] , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);
		$pdf->MultiCell(70,0, 'Nombre '.$_REQUEST['accpermor2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(7,0, 'RFC' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, $_REQUEST['rfcaccpermor2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, $_REQUEST['%permoracc2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos obligado solidario persona fisica' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	'.$_REQUEST['datobnom1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	'.$_REQUEST['datobappat1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	'.$_REQUEST['datobapmat1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$_REQUEST['datobrfc11'].$_REQUEST['datobrfc12'].$_REQUEST['datobrfc13'].$_REQUEST['datobrfc14'].$_REQUEST['datobrfc15'].$_REQUEST['datobrfc16'].$_REQUEST['datobrfc17'].$_REQUEST['datobrfc18'].$_REQUEST['datobrfc19'].$_REQUEST['datobrfc110'].$_REQUEST['datobrfc111'].$_REQUEST['datobrfc112'].$_REQUEST['datobrfc113'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono Particular
	'.$_REQUEST['datobtel11'].$_REQUEST['datobtel12'].$_REQUEST['datobtel13'].$_REQUEST['datobtel14'].$_REQUEST['datobtel15'].$_REQUEST['datobtel16'].$_REQUEST['datobtel17'].$_REQUEST['datobtel18'].$_REQUEST['datobtel19'].$_REQUEST['datobtel110'] , 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);
$pdf->MultiCell(75,0, 'Direccion / calle
	'.$_REQUEST['datobdir1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(65,0, 'Curp
	'.$_REQUEST['datobcurp1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);


$pdf->MultiCell(0,0, 'Telefono Movil
	'.$_REQUEST['datobtel112'].$_REQUEST['datobtel122'].$_REQUEST['datobtel132'].$_REQUEST['datobtel142'].$_REQUEST['datobtel152'].$_REQUEST['datobtel162'].$_REQUEST['datobtel172'].$_REQUEST['datobtel182'].$_REQUEST['datobtel192'].$_REQUEST['datobtel1102'] , 1, 'J', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	'.$_REQUEST['datobcol1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$_REQUEST['datobcd1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	'.$_REQUEST['datoblugnac1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$datobprop1a="";$datobprop1b="";
if($_REQUEST['datobprop1']=="Si"){
$datobprop1a="X";
}elseif($_REQUEST['datobprop1']=="No"){
$datobprop1b="X";
}else{
$datobprop1a="";$datobprop1b="";
}
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si  ('.$datobprop1a.')   No	('.$datobprop1b.')' , 1, 'A', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	'.$_REQUEST['datobedo1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	'.$_REQUEST['datobcp1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$datobsex1a=" ";$datobsex1b=" ";
if($_REQUEST['datobsex1']=="Masculino"){
$datobsex1a="X";
}elseif($_REQUEST['datobsex1']=="Femenino"){
$datobsex1b="X";
}else{
$datobsex1a="";$datobsex1b="";
}
$pdf->MultiCell(30,0, 'Sexo
M  ('.$datobsex1a.')  F  ('.$datobsex1b.')' , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 '.$_REQUEST['datobmail1'] , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	'.$_REQUEST['datobfechnac1d'], 1, 'L', 0, 0, '', '', true,0,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$_REQUEST['datobed1'] , 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);



$pdf->MultiCell(90,0, 'Obligado solidario (Nombre(s). apellido paterno. apellido materno)
	'.$_REQUEST['obsol1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);


$datobsex11a=" ";$datobsex11b=" ";
if($_REQUEST['datobsex11']=="Masculino"){
$datobsex11a="X";
}elseif($_REQUEST['datobsex11']=="Femenino"){
$datobsex11b="X";
}else{
$datobsex11a="";$datobsex11b="";
}
$pdf->MultiCell(30,0, 'Sexo
F  ('.$datobsex11a.')   M   ('.$datobsex11b.')' , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha de Nacimiento
	'.$_REQUEST['datobfechnac1d2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(90,0, 'RFC con homoclave
	'.$_REQUEST['datobnom22'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	'.$_REQUEST['CURPObSolPF'] , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$_REQUEST['EdObSolPF'] , 1, 'J', 0, 1, '', '', true,0,false,true);



$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 177, 186, 33, 6.5, '0000','DF',null ,array(255, 255, 200) );
				
			$pdf->AddPage();


$pdf->MultiCell(40,0, 'Datos obligado solidario(2) persona fisica' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	'.$_REQUEST['datobnom2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	'.$_REQUEST['datobappat2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	'.$_REQUEST['datobapmat2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	'.$_REQUEST['datobrfc21'].$_REQUEST['datobrfc22'].$_REQUEST['datobrfc23'].$_REQUEST['datobrfc24'].$_REQUEST['datobrfc25'].$_REQUEST['datobrfc26'].$_REQUEST['datobrfc27'].$_REQUEST['datobrfc28'].$_REQUEST['datobrfc29'].$_REQUEST['datobrfc210'].$_REQUEST['datobrfc211'].$_REQUEST['datobrfc212'].$_REQUEST['datobrfc213'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	'.$_REQUEST['datobtel21'].$_REQUEST['datobtel22'].$_REQUEST['datobtel23'].$_REQUEST['datobtel24'].$_REQUEST['datobtel25'].$_REQUEST['datobtel26'].$_REQUEST['datobtel27'].$_REQUEST['datobtel28'].$_REQUEST['datobtel29'].$_REQUEST['datobtel210'] , 1, 'J', 0, 1, '', '', true,0,false,true);

$pdf->Ln(1);
$pdf->MultiCell(75,0, 'Direccion / calle
	'.$_REQUEST['datobdir2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(65,0, 'Curp
	'.$_REQUEST['datobcurp2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);


$pdf->MultiCell(0,0, 'Telefono Movil
	'.$_REQUEST['EdObSolPF'] , 1, 'J', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	'.$_REQUEST['datobcol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	'.$_REQUEST['datobcd2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	'.$_REQUEST['datoblugnac2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$datobprop2a=" ";$datobprop2b=" ";
if($_REQUEST['datobprop2']=="Si"){
$datobprop2a="X";
}elseif($_REQUEST['datobprop2']=="No"){
$datobprop2b="X";
}else{
$datobprop2a=" ";$datobprop2b=" ";
}
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si ('.$datobprop2a.')   No	('.$datobprop2b.')' , 1, 'A', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	'.$_REQUEST['datobedo2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	'.$_REQUEST['datobcp2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$datobsex2a=" ";$datobsex2b=" ";
if($_REQUEST['datobsex11']=="Masculino"){
$datobsex2a="X";
}elseif($_REQUEST['datobsex11']=="Femenino"){
$datobsex2b="X";
}else{
$datobsex2a="";$datobsex2b="";
}	
$pdf->MultiCell(30,0, 'Sexo
M  ('.$datobsex2a.')  F  ('.$datobsex2b.')   	' , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 '.$_REQUEST['datobmail2'] , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	'.$_REQUEST['datobfechnac2d'] , 1, 'L', 0, 0, '', '', true,0,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$_REQUEST['datobed2'] , 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);



$pdf->MultiCell(90,0, 'Obligado solidario (Nombre(s). apellido paterno. apellido materno)
	'.$_REQUEST['obsol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);


$datobsex22a=" ";$datobsex22b=" ";
if($_REQUEST['datobsex22']=="Masculino"){
$datobsex22a="X";
}elseif($_REQUEST['datobsex22']=="Femenino"){
$datobsex22b="X";
}else{
$datobsex22a="";$datobsex22b="";
}
$pdf->MultiCell(30,0, 'Sexo
F  ('.$datobsex22a.')   M   ('.$datobsex22b.')' , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha de Nacimiento
	'.$_REQUEST['datobfechnac1d22'] , 1, 'J', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(90,0, 'RFC con homoclave
	'.$_REQUEST['datobnom222'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	'.$_REQUEST['datobappat222'] , 1, 'A', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	'.$_REQUEST['datobapmat222'] , 1, 'J', 0, 1, '', '', true,0,false,true);







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
$pdf->MultiCell(100,0, '1)Razon social de la persona moral solicitante
	'.$_REQUEST['nomrazsoc2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->Ln(1);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(100,0, '1)Nombre y firma del(los) representante(s) legal(es) de la persona moral solicitante:
	'.$_REQUEST['nomconemp'].' '.$_REQUEST['segnomconemp'].' '.$_REQUEST['apepaconemp'].' '.$_REQUEST['apemaconemp'] , 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);
$pdf->MultiCell(100,0, '2)Nombre o razon social de la persona fisica o moral que actua comoobligado solidario:
	'.$_REQUEST['datobnom1'].' '.$_REQUEST['datobappat1'].' '.$_REQUEST['datobapmat1'] , 1, 'l', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);
$pdf->MultiCell(0,0, '2) Firma de la persona física que actúa como obligado solidario o nombre y firma del(los) representante(s) legal(es) de la(s) persona(s) moral(es) que actua(n) como obligado(s) solidario(s):																																													
		' , 1, 'J', 0, 1, '', '', true,1,false,true);





$pdf->MultiCell(0,0, 'AUTORIZACIÓN RELATIVA A LA INVESTIGACION DEL HISTORIAL CREDITICIO DEL REPRESENTANTE LEGAL Y/U OBLIGADO SOLIDARIO Y/O PRINCIPAL INVERSIONISTA, PERSONA FISICA																																															
Por este conducto solicito(amos) y autorizo(amos) expresamente a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R para que a través de sus funcionarios facultados lleve a cabo investigaciones sobre mi(nuestro) comportamiento crediticio en las sociedades de información crediticia que estimen convenientes. Asimismo, declaro(amos) que conozco(emos) la naturaleza y alcance de la información que se solicitará, del uso que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R. hará de tal información y de que ésta podrá realizar consultas periódicas de mi(nuestro) historial crediticio, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos una relación jurídica. Estoy(amos) consciente(s) y acepto(amos) que este documento quede bajo la propiedad de SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R  y/o de la sociedad de información crediticia consultada para efectos de control y cumplimiento del artículo 28 de la Ley para Regular a las Sociedades de Información Crediticia.																			
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(70,0, 'Nombre del representante legal
	'.$_REQUEST['nomconemp'].' '.$_REQUEST['segnomconemp'].' '.$_REQUEST['apepaconemp'].' '.$_REQUEST['apemaconemp'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'RFC del representante legal
	'.$_REQUEST['rfcconemp1'].$_REQUEST['rfcconemp2'].$_REQUEST['rfcconemp3'].$_REQUEST['rfcconemp4'].$_REQUEST['rfcconemp5'].$_REQUEST['rfcconemp6'].$_REQUEST['rfcconemp7'].$_REQUEST['rfcconemp8'].$_REQUEST['rfcconemp9'].$_REQUEST['rfcconemp10'].$_REQUEST['rfcconemp11'].$_REQUEST['rfcconemp12'].$_REQUEST['rfcconemp13'] , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Firma del representante legal
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Calle y No.
	'.$_REQUEST['datobdir22'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Colonia
	'.$_REQUEST['colsol22'] , 1, 'L', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre del obligado solidario  persona fisica
	'.$_REQUEST['datobnom1'].' '.$_REQUEST['datobappat1'].' '.$_REQUEST['datobapmat1'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'RFC del obligado solidario persona fisica
	'.$_REQUEST['datobrfc11'].$_REQUEST['datobrfc12'].$_REQUEST['datobrfc13'].$_REQUEST['datobrfc14'].$_REQUEST['datobrfc15'].$_REQUEST['datobrfc16'].$_REQUEST['datobrfc17'].$_REQUEST['datobrfc18'].$_REQUEST['datobrfc19'].$_REQUEST['datobrfc110'].$_REQUEST['datobrfc111'].$_REQUEST['datobrfc112'].$_REQUEST['datobrfc113'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Firma del obligado solidario
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Calle y No.
	'.$_REQUEST['datobdir1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Colonia
	'.$_REQUEST['datobcol1'] , 1, 'l', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);
$pdf->MultiCell(60,0, 'Ciudad
	'.$_REQUEST['datobcd1'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Estado
	'.$_REQUEST['datobedo1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Codigo Postal
	'.$_REQUEST['datobcp1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono(s)
	'.$_REQUEST['datobtel11'].$_REQUEST['datobtel12'].$_REQUEST['datobtel13'].$_REQUEST['datobtel14'].$_REQUEST['datobtel15'].$_REQUEST['datobtel16'].$_REQUEST['datobtel17'].$_REQUEST['datobtel18'].$_REQUEST['datobtel19'].$_REQUEST['datobtel110'] , 1, 'l', 0, 1, '', '', true,0,false,true);
$pdf->Ln(1);

$pdf->MultiCell(0,0, 'CONSENTIMIENTO PARA EL TRATAMIENTO DE LOS DATOS PERSONALES (APLICABLE A PERSONAS FISICAS)																																															
El (Los) apoderado (s) legal (es) y en su caso el(los) obligado(s) solidario(s), (titulares de los datos) expresamente reconocen y aceptan mediante su firma que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R (“SFG”) con domicilio en Autopista México-Puebla Km. 116 más 900, San Lorenzo Almecatla, Cuautlancingo, Puebla, les facilitó en el momento de llenar esta solicitud el “Aviso de Privacidad”. En tal virtud, los titulares de los datos otorgan su consentimiento de forma expresa para que SFG:																																															
1) Recabe y trate todos los datos e información personal, incluyendo los de carácter financiero y/o patrimonial y/o sensibles, para las finalidades que dan origen y son necesarias para esta solicitud, mismas que se encuentran establecidas en el mencionado Aviso de Privacidad y entre las que de manera enunciativa y no limitativa se incluyen: el ofrecimiento de créditos para la adquisición de vehículos, la cotización y/o contratación de seguros relacionados con los créditos antes mencionados, la ejecución de las operaciones que en su caso se deriven de la autorización de esta solicitud, informar sobre nuevos productos y servicios así como aquellas que resulten compatibles o análogas con los productos y/o servicios ofrecidos por SFG.																																															
2) Como finalidades distintas a esta solicitud, pueda tratar la información para fines mercadológicos, publicitarios y de prospección comercial, evaluación en la calidad de los servicios o la realización de estudios internos sobre tendencias de compra de vehículos, entre otras finalidades señaladas en el Aviso de Privacidad.																																															
Para los casos en los que: (i) no se hubiese celebrado contrato de crédito alguno o (ii) una vez celebrado, el mismo hubiese terminado, el tratamiento a que hace referencia el presente numeral tendrá una vigencia de hasta 5 años contados a partir de la fecha del otorgamiento de este consentimiento.																																															
En caso de no aceptar el tratamiento de sus datos para las finalidades indicadas en este numeral 2 marcar la casilla, de lo contrario se entenderá que ha otorgado su consentimiento.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, '    Representante legal 1' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '    Representante legal 2' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '    Obligado solidario 1' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '    Obligado solidario 2' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'Los titulares de los datos recabados podrán en cualquier momento limitar el uso o divulgación, así como a tener acceso, rectificar, cancelar u oponerse al uso, tratamiento o transferencia de sus datos personales financieros y/o patrimoniales y/o sensibles, salvo en los casos en que SFG no esté obligado y conforme al procedimiento establecido en el Aviso de Privacidad. Cualquier cambio a lo previsto en el Aviso de Privacidad podrá consultarse en la página www.sfgmexico.mx.. Este consentimiento se otorga de conformidad con lo señalado por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su Reglamento y cualquier otra normatividad aplicable.																																															
' , 0, 'L', 0, 1, '', '', true,1,false,true);


$pdf->MultiCell(40,0, '
	Firma representante legal 1' , 1, 'C', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '
	Firma representante legal 2' , 1, 'C', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '
	Firma obligado solidario 1' , 1, 'C', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, '
	Firma obligado solidario 2' , 1, 'C', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(0,0, 'En calidad de apoderado de la empresa que represento, acepto que en caso de que sea autorizado el arrendamiento puro o financiamiento de los vehículos, autorizaré a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R, a cargar directamente en la cuenta bancaria de la compañía que represento, las cantidades que resulten a cargo de mi representada por el contrato de arrendamiento puro o financiamiento que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R otorgue a mi representada.																																																																																													
"Bajo protesta de decir verdad, los firmantes manifiestan que los datos son verídicos y que sus firmas son las que usan en todos sus documentos públicos y privados y que fueron estampadas en presencia del concesionario.
Manifiesta el obligado solidario bajo protesta de decir verdad, que el bien inmueble que ofrece en garantía se encuentra libre de gravamen y al corriente en el pago de sus contribuciones, obligándose a no gravarlo, enajenarlo, cederlo o transmitirlo total o parcialmente, durante la vigencia del presente contrato, hasta la fecha en que se le restituyan a SFG los vehículos materia del presente contrato (sólo en caso de arrendamiento puro) y le sea pagada íntegramente cualquier cantidad que llegase a adeudar el solicitante. Asímismo manifiesta su consentimiento expreso para ser obligado solidario en dicho contrato."
Adicionalmente la concesionaria manifiesta que se cotejaron y revisaron, a través del Gerente de Servicios Financieros, los documentos originales de la solicitante, no quedando ninguna duda en cuanto a su veracidad y que los documentos enviados a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R  son copias fieles de dichos originales.																																															
' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->SetFontSize(6,true);	
$pdf->MultiCell(60,0, 'Clave consecionario o distribuidor
	'.$_REQUEST['clavcon'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Nombre consecionario o distribuidor
	'.$_REQUEST['nomcons'] , 1, 'L', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha
	'.$_REQUEST['fecha'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre del vendedor
	'.$_REQUEST['nomvend'] , 1, 'l', 0, 0, '', '', true,0,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Nombre y firma del gerente general
	'.$_REQUEST['gerentegral'] , 1, 'l', 0, 1, '', '', true,0,false,true);
$pdf->MultiCell(0,0, 'Datos de inscripcion en el registro publico de contratos de adhesion de la procuradoria federal del consumidor:2999-2012 del 30 de abril del 2012
	' , 0, 'J', 0, 1, '', '', true,1,false,true);


$pdf->SetAlpha(0.2);
$pdf->RoundedRect(15, 68, 186, 134, 6.5, '0000','DF',null ,array(255, 255, 200) );

$pdf->AddPage();

$pdf->MultiCell(70,0, 'SERVICIOS FINANCIEROS DEL GUADIANA S.A DE C.V SOFOM E.N.R
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'FORMATO DE IDENTIFICACION DEL CLIENTE POR CLASIFICACION DE RIESGO
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(80,0, 'Fecha:' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Tipo de cliente:' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(10,0, 'Nuevo' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, ' ' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, '   Actualizacion cliente' , 0, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(4);
$style2 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


$pdf->MultiCell(70,0, 'Datos generales del cliente
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
//-------------------------------------------------
$pdf->MultiCell(0,0, 'Nombre o razon social       '.$_REQUEST['textfield'].' 
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 53, 200, 53, $style2);
$pdf->MultiCell(0,0, 'Numero de cliente     '.$_REQUEST['textfield2'].' 
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 58, 200, 58, $style2);
$pdf->MultiCell(0,0, 'Domicilio particular      '.$_REQUEST['textfield3'].' 
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 63, 200, 63, $style2);
//------------------------------------
$pdf->MultiCell(100,0, 'Colonia   '.$_REQUEST['textfield4'].' 
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 68, 100, 68, $style2);
$pdf->MultiCell(0,0, 'Codigo postal:    '.$_REQUEST['textfield8'].' 
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 68, 200, 68, $style2);
//---------------------------------------
$pdf->MultiCell(100,0, 'Delegacion o municipio     '.$_REQUEST['textfield5'].' 
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 74, 100, 74, $style2);
$pdf->MultiCell(0,0, 'Ciudad o poblacion:     '.$_REQUEST['textfield9'].' 
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 74, 200, 74, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Estado o provincia      '.$_REQUEST['textfield6'].' 
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 79, 100, 79, $style2);
$pdf->MultiCell(0,0, 'Pais:         '.$_REQUEST['textfield10'].' 
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(115, 79, 200, 79, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Fecha de nacimiento     '.$_REQUEST['textfield7'].' 
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 84, 100, 84, $style2);
$pdf->MultiCell(0,0, 'RFC:      '.$_REQUEST['textfield11'].' 
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
$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo:' , 0, 'L', 0, 1, '', '', true,1,false,true);
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

$pdf->Cell(75, 0, $civil[1][$_REQUEST['civilsol']], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
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
$pdf->Cell(45, 0, 'Se adjunta copia  :'.$_REQUEST['cotejo'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(45, 0, 'Otros documentos que se adjuntan', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta CURP  y/o cedula RFC', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta comprobante de domicilio', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fecha del comprobante de domicilio', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Domicilio manifestado coincide con la id', '', 1, 'L', 0, '', 0, false, 'T', 'C');
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


// write some JavaScript code

/* <<<EOD
app.alert('JavaScript Popup Example', 3, 0, 'Welcome');
var cResponse = app.response({
    cQuestion: 'How are you today?',
    cTitle: 'Your Health Status',
    cDefault: 'Fine',
    cLabel: 'Response:'
});
if (cResponse == null) {
    app.alert('Thanks for trying anyway.', 3, 0, 'Result');
} else {
    app.alert('You responded, "'+cResponse+'", to the health question.', 3, 0, 'Result');
}
EOD;*/

// force print dialog


// set javascript
$pdf->IncludeJS('print(true);');




//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
