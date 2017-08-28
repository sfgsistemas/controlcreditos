<?php
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
require_once('tcpdf_include.php');

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
	hola', 1, 'J', 0, 0, '', '', true,1,false,true);
//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Leasing' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Credit' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Premium
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

//
$pdf->MultiCell(60,0, 'Primer Nombre 
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Segundo Nombre 
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido Paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apellido materno
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(50,0, 'R.F.C
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Telefono
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono celular
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Direccion/calle y numero
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fax
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'E-mail
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
//
$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Ciudad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Codigo Postal
	' , 1, 'L', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(0,0, 'CURP
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
M    F	  ' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Fecha de nacimiento
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Edad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Nacionalidad
	' , 1, 'L', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(30,0, 'Num. dependientes.
	' , 1, 'L', 0, 0, '', '', true,1,false,true); 
$pdf->MultiCell(0,0, 'Acredita domicilio con 
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);
$pdf->MultiCell(150,0, 'Vive en:
Casa propia ( )   Renta( )   Hipotecada	( )  Con familiares ( )   Importe Mensual de pago [   ]   Tiene una propiedad a su nombre? Si()   No()' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Arraigo en el domicilio desde el año
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Años de residir en la Ciudad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Beneficiario en caso de fallecimiento
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(150,0, 'Estado civil:
Casado bienenes mancomunados ( )   Casado bienes separados ( )   Viudo( )  Con familiares ( )   Divorciado( )  Soltero(  )   ' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);
	$pdf->MultiCell(150,0, 'Auto propio:                   Especifique Marca y Tipo
Si ( )  No( )   ' , 1, 'L', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);

$pdf->MultiCell(60,0, 'DATOS DE SU EMPLEO,PROFESION O NEGOCIO' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Ocupacion segun alta o ultimo cambio ante SHCP
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Puesto
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Antiguedad desde
	' , 1, 'L', 0, 1, '', '', true,1,false,true); 
$pdf->Ln(1);

$pdf->MultiCell(30,0, 'Compañia 
	' , 1, 'L', 0, 0, '', '', true,1,false,true);

$pdf->MultiCell(60,0, 'Num. de empleados
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Telefono
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Ext
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Giro del negocio:actividad que realiza 
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Domicilio del negocio
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'REFERENCIAS PERSONALES' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Parentesco o relacion
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Parentesco o relacion
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(00,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(00,0, 'REFERENCIAS BANCARIAS' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Banco
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Sucursal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Numero de cuenta 
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha de apertura 
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Banco
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Sucursal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Numero de cuenta 
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha de apertura 
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(50,0, 'REFERENCIAS COMERCIALES' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Empresa
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'Empresa
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Antiguedad
desde el año:	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(70,0, 'CARGO DIRECTO(para contratos en M.N)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Banco
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Numero de cuenta (CLABE)
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);


$pdf->MultiCell(70,0, 'DATOS DEL CONYUGE(en caso de unir  Ingresos)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre(s) 
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Apellido materno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'Compañia 
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Puesto
	' , 1, 'L', 0, 1, '', '', true,1,false,true);


$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Datos obligado solidario persona moral' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre, razon social
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle y numero
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Fax
	' , 1, 'L', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'C.P.
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);
$pdf->MultiCell(30,0, 'Constitucion de la empresa' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(70,0, 'Antiguedad
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);


$pdf->MultiCell(30,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(70,0, 'Actividad principal
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(50,0, 'Fecha de inicio operaciones
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Cantidad de personal
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
	$pdf->Ln(1);






$pdf->Ln(1);







$pdf->SetAlpha(0.2);

				
			$pdf->AddPage();


$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si    No	' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 ' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
   	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Nombre
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'apellido paterno
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Apellido materno
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'CURP
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Ln(1);
$pdf->MultiCell(40,0, 'Direccion / calle
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'RFC
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Telefono
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(60,0, 'Colonia
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Lugar de nacimiento
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(40,0, 'Ciudad
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
Si    No	' , 1, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(40,0, 'Estado
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(20,0, 'C.P.
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'E-mail 
 ' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(30,0, 'Sexo
   	' , 1, 'A', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(25,0, 'Fecha nacimiento
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
	$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Edad
	' , 1, 'L', 0, 1, '', '', true,1,false,true);
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
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(60,0, 'Nombre consecionario o distribuidor
	' , 1, 'L', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Fecha
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Ln(1);

$pdf->MultiCell(70,0, 'Nombre del vendedor
	' , 1, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(5,0, '
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Nombre y firma del gerente general
	' , 1, 'J', 0, 1, '', '', true,1,false,true);
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
$pdf->MultiCell(0,0, 'Nombre o razon social
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 53, 200, 53, $style2);
$pdf->MultiCell(0,0, 'Numero de cliente
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 58, 200, 58, $style2);
$pdf->MultiCell(0,0, 'Domicilio particular
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(15, 63, 200, 63, $style2);
//------------------------------------
$pdf->MultiCell(100,0, 'Colonia
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 68, 100, 68, $style2);
$pdf->MultiCell(0,0, 'Codigo postal:
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 68, 200, 68, $style2);
//---------------------------------------
$pdf->MultiCell(100,0, 'Delegacion o municipio
	' , 0, 'J', 0, 0, '', '', true,1,false,true);
$pdf->Line(15, 74, 100, 74, $style2);
$pdf->MultiCell(0,0, 'Ciudad o poblacion:
	' , 0, 'J', 0, 1, '', '', true,1,false,true);
$pdf->Line(115, 74, 200, 74, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Estado o provincia
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 79, 100, 79, $style2);
$pdf->MultiCell(0,0, 'Pais:
	' , 0, 'J', 0, 1, '', '', true,1,false,true);

$pdf->Line(115, 79, 200, 79, $style2);
//--------------------------------------
$pdf->MultiCell(100,0, 'Fecha de nacimiento
	' , 0, 'J', 0, 0, '', '', true,1,false,true);

$pdf->Line(15, 84, 100, 84, $style2);
$pdf->MultiCell(0,0, 'RFC:
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


$tbl = <<<EOD
<table border="1" cellpadding="2" cellspacing="2" nobr="true">
 <tr>
  <th width="360" colspan="3" align="center">Variables de riesgo</th>
 </tr>
 <tr>
  <td>Actividad objeto social</td>
  <td >  </td>
  <td >  </td>
 </tr>
 <tr>
  <td>Antiguedad del cliente</td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td> Naturaleza de las operaciones</td>
  <td> </td>
  <td> </td>
 </tr>
 <tr>
  <td> Q de beneficios</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Q de terceros relacionados (apoderados y cotitulares)</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Peps relacionados</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Alerta reputacional</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Volumen esperado(Monto)</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Frecuencia esperada (No. de veces)</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Instrumento monetario utilizado</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Canales o medios utilizados</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Pais| estado oficial</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Pais|Estado de residencia</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Pais|Estado de operacion frecuencia</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Origen de los recursos</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Destino de recursos</td>
  <td> </td>
  <td> </td>
 </tr>
  <tr>
  <td> Pais|Estado residencia de terceros relacionados</td>
  <td> </td>
  <td> </td>
 </tr>
   <tr>
  <td>Suma total</td>
  <td> </td>
  <td>0 </td>
 </tr>

</table>
EOD;

$pdf->writeHTMLCell(160,0,15,110,$tbl,0,0,false, false, '');
$pdf->MultiCell(0,0, 'Grado de riesgo' , 0, 'C', 0, 1, '', '', true,1,false,true);

$pdf->MultiCell(0,0, 'Alto mas de 45 ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Medio  30-45  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->MultiCell(0,0, 'Bajo 21-29  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
$pdf->Ln(90);
$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo*:' , 0, 'L', 0, 1, '', '', true,1,false,true);
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

$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Nombre', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Genero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Lugar de nacimiento (estado y pais)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Fecha de nacimiento', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Numero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Codigo postal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(65, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(30, 0, 'Municipio', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, 'Ciudad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Telefono', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Correo electrónico', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'CURP', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'RFC y numero de serie dela FIEL*', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Domicilio donde labora', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Sueldo o ingreso mensual', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Nombre de la empresa y giro (donde labora)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Domicilio donde labora', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Sueldo o ingreso mensual', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Puesto', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Actividad economica adicional', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Ingresos adicionales mensuales aprox', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');




$pdf->AddPage();


$pdf->Cell(195, 0, 'DOCUMENTACION DE IDENTIFICACION', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);
$pdf->Cell(35, 0, 'Credencial para votar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Pasaporte cedula profecional', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Cartilla de servicio militar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Licencia para conducir', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :', '', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(35, 0, 'Otra', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Especificar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta copia  :', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);

$pdf->Cell(45, 0, 'Otros documentos que se adjuntan', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta CURP  y/o cedula RFC', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Se adjunta comprobante de domicilio', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fecha del comprobante de domicilio', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Domicilio manifestado coincide con la id', '', 1, 'L', 0, '', 0, false, 'T', 'C');
//agregar si o no desde base de datos
$pdf->Ln(10);

$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Nombre', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Codigo postal', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Pais', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Telefono', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'CURP', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'RFC y numero de serie dela FIEL*', 'T', 1, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Parentesco/porciento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Fecha de nacimiento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Municipio', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(30, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(0, 0, 'Sociedad conyugal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(10);
$pdf->Cell(75, 0, 'Ocupacion o profecion', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
$pdf->Cell(35, 0, 'Peps', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(0, 0, 'Origen de los recursos', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->AddPage();


$pdf->Cell(195, 0, 'PERFIL TRANSSACCIONAL INICIAL', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);
$pdf->Cell(35, 0, 'Ingresos comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


$pdf->Cell(35, 0, 'Ingresos comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(35, 0, 'Ingresos no comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(35, 0, 'Ingresos no comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');




$pdf->Ln(5);

$pdf->Cell(45, 0, 'Creditos', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Otros servicios', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(3);
$pdf->Cell(45, 0, 'Importe estimado de operaciones disntintas a creditos mensual', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', '', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(2);
$pdf->Cell(45, 0, 'Importe del credito', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Destino del credito', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Ln(15);

$pdf->Cell(195, 0, 'OTROS DATOS', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Numero de bienes inmuebles de su propiedad', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Valor estimado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Cuenta con auto   Si(  )    No (   )', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Marca', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Modelo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'Valor aproximado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');



$pdf->Ln(15);

$pdf->Cell(45, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Firma del funcionario de la SOFOM', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Firma del cliente(o prospecto)', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->AddPage();



$pdf->MultiCell(0,0, ' ¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?
' , 0, 'A', 0, 1, '', '', true,1,false,true);
$pdf->Ln(8);
$pdf->Cell(45, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Si(   )', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'No(   )', '', 1, 'C', 0, '', 0, false, 'T', 'C');

$pdf->Cell(45, 0, 'En caso de si', '', 1, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Ln(7);
$pdf->Cell(45, 0, '¿Quien?(Nombre)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, 'Parentesco', '', 0, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
$pdf->Ln(5);
$pdf->Cell(45, 0, 'Puesto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
$pdf->Cell(45, 0, ' ', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
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
//Close and output PDF document
$pdf->Output('example_004.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
