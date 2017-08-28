<?php
    require_once "lib/nusoap.php";
    //$cliente = new nusoap_client("http://localhost/producto.php");
  
      $cliente = new nusoap_client("libros.wsdl", true);
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
      
    $result = $cliente->call("getProd", array("categoria" => "libros"));
      $result='<?xml version="1.0" encoding="ISO-8859-1"?>
<Consulta xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="ConsultaBC.xsd">
  <Personas>
    <Persona>
      <Encabezado>
        <Version/>
        <NumeroReferenciaOperador/>
        <ProductoRequerido>508</ProductoRequerido>
        <ClavePais/>
        <ClaveUsuario/>
        <Password/>
        <TipoConsulta/>
        <TipoContrato/>
        <ClaveUnidadMonetaria/>
        <ImporteContrato/>
        <Idioma/>
        <TipoSalida/>
      </Encabezado>
      <Nombre>
        <ApellidoPaterno/>
        <ApellidoMaterno/>
        <ApellidoAdicional/>
        <PrimerNombre/>
        <SegundoNombre/>
        <FechaNacimiento/>
        <RFC/>
        <Prefijo/>
        <Sufijo/>
        <Nacionalidad/>
        <Residencia/>
        <NumeroLicenciaConducir/>
        <EstadoCivil/>
        <Sexo/>
        <NumeroCedulaProfesional/>
        <NumeroRegistroElectoral/>
        <ClaveImpuestosOtroPais/>
        <ClaveOtroPais/>
        <NumeroDependientes/>
        <EdadesDependientes/>
      </Nombre>
      <Domicilios>
        <Domicilio>
          <Direccion1/>
          <Direccion2/>
          <ColoniaPoblacion/>
          <DelegacionMunicipio/>
          <Ciudad/>
          <Estado/>
          <CP/>
          <FechaResidencia/>
          <NumeroTelefono/>
          <Extension/>
          <Fax/>
          <TipoDomicilio/>
          <IndicadorEspecialDomicilio/>
          <CodPais/>
        </Domicilio>
      </Domicilios>
      <Empleos>
        <Empleo>
          <NombreEmpresa/>
          <Direccion1/>
          <Direccion2/>
          <ColoniaPoblacion/>
          <DelegacionMunicipio/>
          <Ciudad/>
          <Estado/>
          <CP/>
          <NumeroTelefono/>
          <Extension/>
          <Fax/>
          <Cargo/>
          <FechaContratacion/>
          <ClaveMonedaSalario/>
          <Salario/>
          <BaseSalarial/>
          <NumeroEmpleado/>
          <FechaUltimoDiaEmpleo/>
          <CodPais/>
        </Empleo>
      </Empleos>
      <Cuentas>
        <Cuenta/>
        <NumeroCuenta/>
        <ClaveOtorgante/>
        <NombreOtorgante/>
      </Cuentas>
      <Autenticacion>
        <TipoReporte/>
        <TipoSalida/>
        <ReferenciaOperador/>
        <TarjetaCredito/>
        <UltimosCuatroDigitos/>
        <EjercidoCreditoHipotecario/>
        <EjercidoCreditoAutomotriz/>
      </Autenticacion>
    </Persona>
  </Personas>
</Consulta>';
    if ($cliente->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "<h2>Libros</h2><pre>";
           
            //echo htmlentities($result);
            //$xml = new SimpleXMLElement($result);
             //$xml->formatOutput = true;
            $xml = new SimpleXMLElement($result);
            
            




            $el_xml = $xml->saveXML();
            $xml->asXML("mydoc.xml"); 
            //$el_xml->save('respuesta.xml');
            echo htmlentities($el_xml);
            echo "</pre>";
        }
    }




?>