<?php 
if (isset($_REQUEST['folio_request'])){
    $folio_solicitud=$_REQUEST['folio_request'];
    
    if(strpos($folio_solicitud, 'SA')!==false && strpos($folio_solicitud, 'SA')==0){
        include('Conexion2.php');
        $result=mysqli_query($cnx,"select * from solicitudpfa inner join pfa on solicitudpfa.Folio_Cliente=pfa.Folio_Cliente inner join gradoriesgo on gradoriesgo.Folio_sol=solicitudpfa.Folio_Sol where solicitudpfa.Folio_Sol='$folio_solicitud'");
        $row=mysqli_fetch_array($result);
        echo "<h1>Proceso de seleccion de datos para solicitud PFA</h1><h3>XML Solicitante</h3>";


            $arraytipocontrato= array(
                'Aparatos/Muebles'=>'AF',
                'Agropecuario'=>'AG',
                'Arrendamiento Automotriz'=>'AL',
                'Aviación'=>'AP',
                'Compra de Automovil'=>'AU',
                'Fianza'=>'BD',
                'Bote/Lancha'=>'BT',
                'Tarjeta de Crédito'=>'CC',
                'Cartas de Crédito'=>'CE',
                'Crédito Fiscal'=>'CF',
                'Línea de Crédito'=>'CL',
                'Consolidación'=>'CO',
                'Crédito Simple'=>'CS',
                'Con Colateral'=>'CT',
                'Descuentos'=>'DE',
                'Equipo'=>'EQ',
                'Fideicomiso'=>'FI',
                'Factoraje'=>'FT',
                'Habilitación o Avio'=>'HA',
                'Prestamo tipo Home Equity'=>'HE',
                'Mejoras a la casa'=>'HI',
                'Arrendamiento'=>'LS',
                'Línea de Crédito Reinstalable'=>'LR',
                'Otros'=>'MI',
                'Otros adeudos vencidos'=>'OA',
                'Préstamo para personas Físicas con Actividad Empresarial'=>'PA',
                'Editorial'=>'PB',
                'PGUE - Préstamo como garantía de unidades industriales para PFAE'=>'PG',
                'Préstamo Personal'=>'PL',
                'Préstamo de Nómina'=>'PN',
                'Quirografario'=>'PQ',
                'Prendario'=>'PR',
                'Pago de Servicios'=>'PS',
                'Reestructurado'=>'RC',
                'Redescuento'=>'RD',
                'Bienes Raíces'=>'RE',
                'Refaccionario'=>'RF',
                'Renovado'=>'RN',
                'Vehículo Recreativo'=>'RV',
                'Tarjeta Garantizada'=>'SC',
                'Préstamo Garantizado'=>'SE',
                'Seguros'=>'SG',
                'Segunda Hipoteca'=>'SM',
                'Préstamo para Estudiante'=>'ST',
                'Tarjeta de Crédito Empresarial'=>'',
                'Desconocido'=>'UK',
                'Préstamo no Garantizado'=>'US');

                $arraynacionalidad=array('Mexicana'=>'MX',
                ''=>'');
                $arrayresidencia=array('Casa Propia'=>'1',
                'Rentada'=>'2',
                'Hipotecada'=>'',
                'Casa propiedad de sus familiares'=>'3',
                'Otros'=>'');

                $arrayestadocivil=array('Casado Bienes Mancomunados'=>'M',
                'Casado Bienes Separados'=>'M',
                'Viudo'=>'W',
                'Divorciado'=>'D',
                'Soltero'=>'S');

                $arraysexo=array('Masculino'=>'M','Femenino'=>'F');



        xmlCreator($arraytipocontrato['Quirografario'],$row['MontoFinanciado'],$row['ApPatSolicitante'],$row['ApMatSolicitante'],'',$row['NomSolicitante'],$row['SegNomSolicitante'],str_replace('-','',$row['FeNacDatGen']),$row['RFCSolicitante'],'','',$arraynacionalidad[$row['NaDatGen']],$arrayresidencia[$row['VivDatGen']],$row['LicenciaConducirSolicitante'],$arrayestadocivil[$row['EstCivDatGen']],$arraysexo[$row['SexoDatGen']],'','');
        echo "<h3>XML Conyuge</h3>";
        //xmlCreator();
        echo "<h3>XML Obligado Solidario(1)</h3>";
        //xmlCreator();
        echo "<h3>XML Obligado Solidario(2)</h3>";
        //xmlCreator();
    }else if(strpos($folio_solicitud, 'SN')===true){
        echo "error";
    }else if(strpos($folio_solicitud, 'SM')===true){
        echo "error";
    }else{
        echo "<h1 ALIGN=center>Error - Violación de seguridad</h1><div ALIGN='center'><IMG  SRC='http://files.viewranger.com/image/c7f1e57127751d593f9619526ea2d0b1.jpg'></div>";
        exit();
    }




}else{
    echo "<h1 ALIGN=center>Error - Violación de seguridad</h1><div ALIGN='center'><IMG  SRC='http://files.viewranger.com/image/c7f1e57127751d593f9619526ea2d0b1.jpg'></div>";
    exit();
}





function xmlCreator($tipocontrato,$importecontrato,$apellidopaterno,$apellidomaterno,$apellidoadicional,$primernombre,$segundonombre,$fechanacimiento,$rfc,$prefijo,$sufijo,$nacionalidad,$residencia,$numerolicenciaconducir,$estadocivil,$sexo,$NumeroCedulaProfesional,$NumeroRegistroElectoral){


$xml = new DomDocument('1.0', 'ISO-8859-1');

$raiz = $xml->createElement('Consulta');
$raiz = $xml->appendChild($raiz);

//xmlns:xsi=http://www.w3.org/2001/XMLSchema-instance xsi:noNamespaceSchemaLocation=ConsultaBC.xsd

$raiz->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
$raiz->setAttribute('xsi:noNamespaceSchemaLocation', 'ConsultaBC.xsd');

$nodo = $xml->createElement('Personas');
$nodo = $raiz->appendChild($nodo);

$subnodo = $xml->createElement('Persona');
$subnodo = $nodo->appendChild($subnodo);

$subnodo2 = $xml->createElement('Encabezado');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Version',11);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroReferenciaOperador');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ProductoRequerido','507');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClavePais','MX');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveUsuario','XXXXXXXXXX');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Password','XXXXXXXX');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoConsulta','I');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoContrato',$tipocontrato);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveUnidadMonetaria','MX');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ImporteContrato',$importecontrato);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Idioma','SP');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoSalida','03');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo2 = $xml->createElement('Nombre');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('ApellidoPaterno',$apellidopaterno);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ApellidoMaterno',$apellidomaterno);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ApellidoAdicional',$apellidoadicional);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('PrimerNombre',$primernombre);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('SegundoNombre',$segundonombre);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('FechaNacimiento',$fechanacimiento);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('RFC',$rfc);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Prefijo',$prefijo);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Sufijo',$sufijo);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Nacionalidad',$nacionalidad);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Residencia',$residencia);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroLicenciaConducir',$numerolicenciaconducir);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EstadoCivil',$estadocivil);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('Sexo',$sexo);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroCedulaProfesional',$NumeroCedulaProfesional);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroRegistroElectoral',$NumeroRegistroElectoral);
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveImpuestosOtroPais');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveOtroPais');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroDependientes');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EdadesDependientes');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo2 = $xml->createElement('Domicilios');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Domicilio');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo4 = $xml->createElement('Direccion1');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Direccion2');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('ColoniaPoblacion');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('DelegacionMunicipio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Ciudad');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Estado');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CP');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('FechaResidencia');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('NumeroTelefono');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Extension');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Fax');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('TipoDomicilio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('IndicadorEspecialDomicilio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CodPais');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo2 = $xml->createElement('Empleos');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Empleo');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo4 = $xml->createElement('NombreEmpresa');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Direccion1');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Direccion2');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('ColoniaPoblacion');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('DelegacionMunicipio');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Ciudad');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Estado');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CP');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('NumeroTelefono');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Extension');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Fax');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Cargo');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('FechaContratacion');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('ClaveMonedaSalario');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('Salario');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('BaseSalarial');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('NumeroEmpleado');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('FechaUltimoDiaEmpleo');
$subnodo4 = $subnodo3->appendChild($subnodo4);

$subnodo4 = $xml->createElement('CodPais');
$subnodo4 = $subnodo3->appendChild($subnodo4);


$subnodo2 = $xml->createElement('Cuentas');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('Cuenta');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NumeroCuenta');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ClaveOtorgante');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('NombreOtorgante');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo2 = $xml->createElement('Autenticacion');
$subnodo2 = $subnodo->appendChild($subnodo2);

$subnodo3 = $xml->createElement('TipoReporte');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TipoSalida');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('ReferenciaOperador');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('TarjetaCredito');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('UltimosCuatroDigitos');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EjercidoCreditoHipotecario');
$subnodo3 = $subnodo2->appendChild($subnodo3);

$subnodo3 = $xml->createElement('EjercidoCreditoAutomotriz');
$subnodo3 = $subnodo2->appendChild($subnodo3);
/*
$nodo = $xml->createElement('Personas');
$nodo = $raiz->appendChild($nodo);

$subnodo = $xml->createElement('item');
$subnodo = $nodo->appendChild($subnodo);
*/
$xml->formatOutput = true;
$el_xml = $xml->saveXML();
$xml->save('archivo.xml');
echo htmlentities($el_xml);


}




?>