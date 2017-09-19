                       <?php


switch ($_REQUEST['function']) {
	case 'subir':
	$status="Incompleto";
	if(
		($_REQUEST['textfield39']!='' || $_REQUEST['textfield40']!='' || $_REQUEST['textfield41']!='' || $_REQUEST['textfield42']!='' || $_REQUEST['textfield44']!='')

		&&

		$_REQUEST['cot']!=''

		&&

		$_REQUEST['fechaComprobante']!=''

		&&

		$_REQUEST['seldom']!=''

		){
		$status="Finalizado";
	}

include("Conexion2.php");
	$add1 = array();
for ($con=1; $con < 11 ; $con++) { 
	if ($_FILES['file'.$con]['name']!='') {
		# code...
	# code...
	$uploadedfileload="true";
$uploadedfile_size=$_FILES['file'.$con]['size'];
$msg='';

if ($_FILES['file'.$con]['size']>2000000)
{$msg=$msg."Error -- El archivo es mayor que 2MB, debes reduzcirlo antes de subirlo";
$uploadedfileload="false";}

if (!($_FILES['file'.$con]['type'] =="image/jpeg" OR $_FILES['file'.$con]['type'] =="application/pdf" OR $_FILES['file'.$con]['type'] =="image/png"))
{$msg=$msg." Error -- Tu archivo tiene que ser JPG o PDF. Otros archivos no son permitidos";
$uploadedfileload="false";}

$file_name=htmlentities($_FILES['file'.$con]['name']);
$add="Carga documentacion/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES['file'.$con]['tmp_name'], $add)){
$add1[$con]=$add;


}else{echo "Error -- al subir el archivo";
break;
}

}
else{echo $msg; break;}
	}else{
		$add1[$con]='';
	}
}
/*
*/


$string1="";
if ($add1[1]!="") {	$string1="INEurl='".$add1[1]."',";}
$string2="";
if ($add1[2]!="") {	$string2="pasaporteurl='".$add1[2]."',";}
$string3="";
if ($add1[3]!="") {	$string3="cartillaurl='".$add1[3]."',";}
$string4="";
if ($add1[4]!="") {	$string4="licenciaurl='".$add1[4]."',";}
$string5="";
if ($add1[5]!="") {	$string5="otraurl='".$add1[5]."',";}
$string6="";
if ($add1[6]!="") {	$string6="addcurpurl='".$add1[6]."',";}
$string7="";
if ($add1[7]!="") {	$string7="adddomiciliourl='".$add1[7]."',";}
$string8="";
if ($add1[8]!="") {	$string8="acta='".$add1[8]."',";}
$string9="";
if ($add1[9]!="") {	$string9="cedula='".$add1[9]."',";}
$string10="";
if ($add1[10]!="") {	$string10="poderes='".$add1[10]."',";}

//echo $_REQUEST['visor1'];

		mysqli_query($cnx," update docu SET 

INE= '".$_REQUEST['textfield39']."',
$string1
pasaporte='".$_REQUEST['textfield40']."',
$string2
cartilla='".$_REQUEST['textfield41']."',
$string3
licencia='".$_REQUEST['textfield42']."',
$string4
otra='".$_REQUEST['textfield44']."',
inotra='".$_REQUEST['textfield43']."',
$string5
secotejo='".$_REQUEST['cot']."',
$string6
$string7
fechadom='".$_REQUEST['fechaComprobante']."',
domId='".$_REQUEST['seldom']."',
$string8
	$string9
		$string10
Status='$status'
 WHERE id='".$_REQUEST['id']."'


");


$result=mysqli_query($cnx,"select INEurl,pasaporteurl,cartillaurl,licenciaurl,otraurl,addcurpurl,adddomiciliourl,acta,cedula,poderes from docu  WHERE id='".$_REQUEST['id']."'");


echo json_encode(mysqli_fetch_array($result));



		break;

		case 'nuevadocumentacion':
				include("Conexion2.php");
   try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id 
                 where solicitudes.Documentacion is null and Timestampdiff(day, solicitudes.Fecha, Now())<31 and solicitudes.Status='Finalizado'");
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo json_encode($rawdata);
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
			break;
	case 'iniciodoc':
	include("Conexion2.php");
	        mysqli_query($cnx,"insert into docu (Status) values('Incompleto')");
        $id=mysqli_fetch_array(mysqli_query($cnx,"select LAST_INSERT_ID()"));                            
        $id_cliente=$id['LAST_INSERT_ID()'];

        mysqli_query($cnx,"update solicitudes SET Documentacion='$id_cliente' where id='".$_REQUEST['cliente']."'");
        echo json_encode($id);

		break;
case 'requestmodificardocu':
	include("Conexion2.php");
	$result=mysqli_query($cnx,"select * from docu where id = (select Documentacion from solicitudes where Id = '".$_REQUEST['registro']."')");
	if ($result === false) {
		echo "Error Consulta";
		break;
	}
	if (!mysqli_num_rows($result)>0) {
		# code...
		echo "Error -- ¡¡No existe la solicitud o no tiene asignada su documentación!!";
		break;
	}

	echo json_encode(mysqli_fetch_array($result));
	break;
	case 'continuar':
					include("Conexion2.php");
   try {
            $rawdata = array();
            $i=0;
            $result=mysqli_query($cnx,"select solicitudes.Id,TipoCredito,clientes.NombrePF,clientes.SegNombrePF,clientes.ApPatPF,clientes.ApMatPF,clientes.RazonSocial from solicitudes INNER JOIN clientes on solicitudes.FolioCliente=clientes.id inner join docu on docu.id=solicitudes.Documentacion where docu.Status='Incompleto'");
            while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

            echo json_encode($rawdata);
            


        } catch (Exception $e) {
            echo "Error Al Obtener listado";
        }
		break;

	case 'generaciondocument':
		include('Conexion2.php');
		
		$result=mysqli_query($cnx,"select * from clientes inner join solicitudes on clientes.Id=solicitudes.FolioCliente inner join gradoriesgo on gradoriesgo.Id=solicitudes.GradoRiesgo inner join docu on docu.id=solicitudes.Documentacion where docu.id='".$_REQUEST['id']."'");
		if($result===false){
			echo "Error -- ¡¡Query no realizado!!";
			break;
		}
		if(!mysqli_num_rows($result)>0){
			echo "Error -- ¡¡Información incompleta, favor de ingresar toda la información correspondiente!!";
		}

		$row=mysqli_fetch_array($result);
		//echo json_encode($row);
		//break;
		//echo $row['TipoCliente'];
		//echo $row['ActividadEmpresarial'];
		if($row['TipoCliente']=="Persona Fisica" && $row['ActividadEmpresarial']=="No"){
			//echo "PFA";
						require_once('tcpdf/tcpdf.php'); ob_end_clean();    header("Content-Encoding: None", true);
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

						$viv  = array(1 => array('Casa Propia' => "X", 'Rentada' => " ",'Hipotecada' => " ",'Casa propiedad de sus familiares' => " ",'Otros especificar' => " ",''=>' '),
						 			  2 => array('Casa Propia' => " ", 'Rentada' => "X",'Hipotecada' => " ",'Casa propiedad de sus familiares' => " ",'Otros especificar' => " ",''=>' '),
						 			  3 => array('Casa Propia' => " ", 'Rentada' => " ",'Hipotecada' => "X",'Casa propiedad de sus familiares' => " ",'Otros especificar' => " ",''=>' '),
						 			  4 => array('Casa Propia' => " ", 'Rentada' => " ",'Hipotecada' => " ",'Casa propiedad de sus familiares' => "X",'Otros especificar' => " ",''=>' '),
						 			  5 => array('Casa Propia' => " ", 'Rentada' => " ",'Hipotecada' => " ",'Casa propiedad de sus familiares' => " ",'Otros especificar' => "X",''=>' '),
						 			  6 => array('Si' => "X", 'No' => " ",''=>' '),
						 			  7 => array('Si' => " ", 'No' => "X",''=>' '));

						$civ = array( 1 => array("Casado Bienes Mancomunados" => "X", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => " ","Soltero" => " ",""=>' '),
						 			  2 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => "X","Viudo" => " ","Divorciado" => " ","Soltero" => " ",""=>' '),
						 			  3 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => "X","Divorciado" => " ","Soltero" => " ",""=>' '),
						 			  4 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => "X","Soltero" => " ",""=>' '),
						 			  5 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => " ","Soltero" => "X",""=>' '));

						$datoviv = array( 1 => array( "Si" => "X" , "No" => " ",""=>" "),
										  2 => array( "Si" => " " , "No" => "X",""=>" "));

						$pdf->MultiCell(30,0, "Datos del solicitante
						 ", 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0,'Folio del cliente 
							'.$row[0], 1, 'J', 0, 0, '', '', true,1,false,true);
						//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, '' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['TipoCredito'], 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, "Solicitud N°: ".$row[191] .'
							', 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						//
						$pdf->MultiCell(50,0, 'Primer Nombre 
							' .$row['NombrePF'].'  ', 1, 'C', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Segundo Nombre 
							'.$row['SegNombrePF'].'  ' , 1, 'C', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Apellido Paterno
							'.$row['ApPatPF'].'  ' , 1, 'C', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Apellido Materno
							'.$row['ApMatPF'].'  ', 1, 'C', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(50,0, 'R.F.C
							' .$row['RFCPF'], 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Telefono
							'.$row['TelefonoPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono celular
							'.$row['MovilPF'], 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Direccion/calle y numero
							'.$row['DireccionPF'].' '.$row['NumDireccionPF'], 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'E-mail
							'.$row['EmailPF'], 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						//
						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColoniaPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Ciudad
							'.$row['CiudadPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Lugar de nacimiento
							'.$row['LugNacimientoPF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Estado
							'.$row['EstadoPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Codigo Postal 
							'.$row['CPPF'].'          ' , 1, 'L', 0, 0, '', '', true,1,false,true); 
						$pdf->MultiCell(0,0, 'CURP
							'.$row['CURPPF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Sexo
						M ('.$sexosel[1][$row['SexoPF']].')   F ('.$sexosel[2][$row['SexoPF']].')	  ' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Fecha de nacimiento
							'.$row['FechNacimientoPF'], 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'Edad
							'.$row['Edad'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Nacionalidad
							'.$row['NacionalidadPF'] , 1, 'L', 0, 0, '', '', true,1,false,true); 
						$pdf->MultiCell(30,0, 'Num. dependientes.
							 '.$row['NumDependientesPF'].'   ' , 1, 'J', 0, 0, '', '', true,1,false,true); 
						$pdf->MultiCell(0,0, 'Acredita domicilio con 
							'.$row['AcreditaDomPF'] , 1, 'L', 0, 1, '', '', true,1,false,true); 
						$pdf->Ln(1);
						$pdf->MultiCell(150,0, 'Vive en:
						Casa propia ('.$viv[1][$row['ViviendaPF']].')   Renta('.$viv[2][$row['ViviendaPF']].')   Hipotecada	('.$viv[3][$row['ViviendaPF']].')  Con familiares ('.$viv[4][$row['ViviendaPF']].')  Otro ('.$viv[5][$row['ViviendaPF']].')  Especificar:('.$row['EspViviendaPF'].') Tiene una propiedad a su nombre? Si('.$viv[6][$row['InmueblePF']].')   No('.$viv[7][$row['InmueblePF']].')' , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Arraigo en el domicilio desde el año
							'.$row['ArraigoDomPF'], 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(30,0, 'Años de residir en la Ciudad
							'.$row['RecidirCiudadPF'].' Años' , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Beneficiario en caso de fallecimiento
							'.$row['BeneficiarioNom'].' '.$row['BeneficiarioApPat'].' '.$row['BeneficiarioApMat'] , 1, 'L', 0, 1, '', '', true,1,false,true); 
						$pdf->Ln(1);


						$pdf->MultiCell(150,0, 'Estado civil:
						Casado bienenes mancomunados ('.$civ[1][$row['EstCivilPF']].')   Casado bienes separados ('.$civ[2][$row['EstCivilPF']].')   Viudo('.$civ[3][$row['EstCivilPF']].')     Divorciado('.$civ[4][$row['EstCivilPF']].' )  Soltero( '.$civ[5][$row['EstCivilPF']].' )   ' , 1, 'J', 0, 1, '', '', true,1,false,true);
							$pdf->Ln(1);
							$pdf->MultiCell(150,0, 'Auto propio:            
						Si ('.$datoviv[1][$row['AutoPropioPF']].' )  No('.$datoviv[2][$row['AutoPropioPF']].') Especifique Marca y Tipo: '.$row['EspAuto'] , 1, 'L', 0, 1, '', '', true,1,false,true);
							$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'DATOS DE SU EMPLEO O PROFESION' , 0, 'L', 0, 1, '', '', true,1,false,true);


						$pdf->MultiCell(60,0, 'Puesto
							'.$row['PuestoPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Departamento o area
							'.$row['DepartamentoPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Antiguedad desde
							'.$row['DesdeEmpPF'] , 1, 'J', 0, 1, '', '', true,1,false,true); 
						$pdf->Ln(1);

						$pdf->MultiCell(30,0, 'Compañia 
							'.$row['CompaniaPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);


						$pdf->MultiCell(40,0, 'Telefono
							'.$row['TelefonoEmpPF']  , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(40,0, 'REFERENCIAS PERSONALES' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(70,0, 'Nombre
							'.$row['RefPerNom1PF'].' '.$row['RefPerApPat1PF'].' '.$row['RefPerApMat1PF'] , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Parentesco o relacion
							'.$row['RefPerParentesco1PF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(00,0, 'Telefono
							' .$row['RefPerTelefono1PF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Nombre
							'.$row['RefPerNom2PF'].' '.$row['RefPerApPat2PF'].' '.$row['RefPerApMat2PF']  , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Parentesco o relacion
							'.$row['RefPerParentesco2PF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(00,0, 'Telefono
							'.$row['RefPerTelefono2PF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(00,0, 'REFERENCIAS BANCARIAS' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Banco
							'.$row['Banco1'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Numero de tarjeta de credito
							'.$row['CuentaBanc1'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(00,0, 'CARGO DIRECTO (para contratos en M.N.)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Banco
							'.$row['CarDirBanco'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Numero de cuenta 
							'.$row['CLABE'] , 1, 'J', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(1);


						$pdf->MultiCell(70,0, 'DATOS DEL CONYUGE(en caso de unir  Ingresos)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre(s) 
							'.$row['ConyugeNom'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Apellido paterno
							'.$row['ConyugeApPat'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Apellido materno
							'.$row['ConyugeApMat'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'Compañia 
							'.$row['ConyugeCompania'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Puesto
							'.$row['ConyugePuesto'] , 1, 'L', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(1);
						$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre
							'.$row['NomObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'apellido paterno
							'.$row['ApPatObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Apellido materno
							'.$row['ApMatObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'CURP
							'.$row['CURPObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'. $row['TelObSol'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(40,0, 'Direccion / calle
							'.$row['DirObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono Movil
							'.$row['MovObSol'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSol'] , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Lugar de nacimiento
							'.$row['LugNacObSol'] , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
						Si ('.$datoviv[1][$row['PropObSol']].')   No	('.$datoviv[2][$row['PropObSol']].')' , 1, 'A', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'C.P.
							'.$row['CPObSol'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'E-mail
							'.$row['EmailObSol'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Sexo
						  M('.$sexosel[1][$row['SexoObSol']].')   F('.$sexosel[2][$row['SexoObSol']].') 	' , 1, 'A', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, 'Fecha nacimiento
							'.$row['FechNacObSol'] , 1, 'J', 0, 0, '', '', true,1,false,true);
							$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdadObSol'].' Años' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						$pdf->Ln(1);

						$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre
							'.$row['NomObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'apellido paterno
							'.$row['ApPatObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Apellido materno
							'.$row['ApMatObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'CURP
							'.$row['CURPObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['TelObSol2'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(40,0, 'Direccion / calle
							'.$row['DirObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono Movil
							'.$row['MovObSol2'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Lugar de nacimiento
							'.$row['LugNacObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
						Si ('.$datoviv[1][$row['PropObSol2']].')   No('.$datoviv[2][$row['PropObSol2']].')	' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol2']  , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'C.P.
							'.$row['CPObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'E-mail
							'. $row['EmailObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Sexo
						  M('.$sexosel[1][$row['SexoObSol2']].')  F('.$sexosel[2][$row['SexoObSol2']].') 	' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, 'Fecha nacimiento
							'. $row['FechNacObSol2']  , 1, 'L', 0, 0, '', '', true,1,false,true);
							$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdadObSol2'].' Años', 1, 'J', 0, 1, '', '', true,1,false,true);
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
						$pdf->MultiCell(25,0, 'Folio de consulta BC
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
							'.$row['ClaveCon'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Nombre consecionario o distribuidor
							'.$row['NomCon'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha
							'.$row['Fecha'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Nombre del vendedor
							'.$row{'NomVend'} , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Nombre y firma del gerente general
							'.$row['GerenteGral'] , 1, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Datos de inscripcion en el registro publico de contratos de adhesion de la procuradoria federal del consumidor:2999-2012 del 30 de abril del 2012
							' , 0, 'J', 0, 1, '', '', true,1,false,true);


						//$pdf->SetAlpha(0.2);
						//$pdf->RoundedRect(15, 29, 186, 193, 6.5, '0000','DF',null ,array(255, 255, 200) );

						//$pdf->AddPage();
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
						$pdf->MultiCell(5,0, ' ' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, '   Actualizacion cliente' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, ' ', 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(4);
						$style2 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


						$pdf->MultiCell(70,0, 'Datos generales del cliente
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						//-------------------------------------------------
						$pdf->MultiCell(0,0, 'Nombre o razon social:          '.$row['NombrePF'].' '.$row['SegNombrePF'].' '.$row['ApPatPF'].' '.$row['ApMatPF'].'      
							', 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 53, 200, 53, $style2);
						$pdf->MultiCell(0,0, 'Numero de cliente:        '.$row[0].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 58, 200, 58, $style2);
						$pdf->MultiCell(0,0, 'Domicilio particular:     '.$row['DireccionPF'].' '.$row['NumDireccionPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 63, 200, 63, $style2);
						//------------------------------------
						$pdf->MultiCell(100,0, 'Colonia:                '.$row['ColoniaPF'].'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->Line(15, 68, 100, 68, $style2);
						$pdf->MultiCell(0,0, 'Codigo postal:             '.$row['CPPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 68, 200, 68, $style2);
						//---------------------------------------
						$pdf->MultiCell(100,0, 'Delegacion o municipio: '.$row['MunicipioPF'].'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->Line(15, 74, 100, 74, $style2);-
						$pdf->MultiCell(0,0, 'Ciudad o poblacion:        '.$row['CiudadPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 74, 200, 74, $style2);
						//--------------------------------------
						$pdf->MultiCell(100,0, 'Estado o provincia:      '.$row['EstadoPF'] .'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->Line(15, 79, 100, 79, $style2);
						$pdf->MultiCell(0,0, 'Pais:                   '.$row['LugNacimientoPF'] .'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(115, 79, 200, 79, $style2);
						//--------------------------------------
						$pdf->MultiCell(100,0, 'Fecha de nacimiento:  '.$row['FechNacimientoPF'].'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->Line(15, 84, 100, 84, $style2);
						$pdf->MultiCell(0,0, 'RFC: '.$row['RFCPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 84, 200, 84, $style2);

						$pdf->MultiCell(70,0, 'Calificacion de grado de riesgo
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Cell(25, 0, 'Segmento del cliente', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(3);
						$pdf->MultiCell(60,0, 'Resultado de la calificacion de grado de riesgo*:
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$gradries=array(1=>array('Bajo'=>'X','Medio'=>' ','Alto'=>' ',''=>' '),
										2=>array('Bajo'=>' ','Medio'=>'X','Alto'=>' ',''=>' '),
										3=>array('Bajo'=>' ','Medio'=>' ','Alto'=>'X',''=>' '));

						$pdf->MultiCell(40,0, 'Bajo ('.$gradries[1][$row['GradoRiesgo']].')' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Medio ('.$gradries[2][$row['GradoRiesgo']].')' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Alto(Requisitar reporte y aprobacion) ('.$gradries[3][$row['GradoRiesgo']].')' , 0, 'L', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(4);

						             
						$matrizgradreisgo=array(
            1=> array('Vulnerable' => 3, 'Informal' =>2, 'Otra'=>1,''=>''),
            2=> array('1-3 años' =>3 ,'4-6 años'=>2, '7-10 años'=>1, 'N/A'=>0,''=>'' ),
            3=> array('Prestamo'=>1,'Arrendamiento'=>2,'Otros'=>3,''=>''),
            4=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            5=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            6=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            7=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            8=> array('$18000 - $20000'=>1,'$21000 - $25000'=>2,'mas de $25000'=>3,''=>''),
            9=> array('1 a 3'=>1,'4 a 6'=>2,'7 a 10'=>3,''=>''),
            10=>array('Transferencia'=>1,'Cheque'=>2,'Efectivo'=>3,''=>''),
            11=>array('Agencia'=>1,'Internet'=>2,'Otro'=>3,''=>''),
            12=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            13=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            14=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            15=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            16=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            17=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            18=>array('18 - 26'=>3,'27 - 36'=>2,'37 - 56'=>1,'56 en adelante'=>3,''=>''),
            19=>array('0 - 3'=>3,'4 - 7'=>2,'8 en adelante'=>1,''=>''),
            20=>array('Regimen agape'=>3,'Regimen general de ley'=>1,'Regimen Donatarios'=>2,'Regimen Coordinados'=>3,''=>''),
            21=>array('Incorporacion Fiscal'=>3,'Servicios Profesionales'=>3,'Intereses'=>3,'Asalariado'=>1,'Arrendamiento'=>2,'Actividad empresarial'=>2,'Regimen Agape'=>3,''=>'')
            );

        $sumagradoriesgo=
        $matrizgradreisgo[1][$row['Antiguedad_ObjetoSocial']]
        +$matrizgradreisgo[2][$row['Antiguedad_Cliente']]
        +$matrizgradreisgo[3][$row['Naturaleza_Operaciones']]
        +$matrizgradreisgo[4][$row['Numero_Beneficiarios']]
        +$matrizgradreisgo[5][$row['Numero_TercerosRelacionados']]
        +$matrizgradreisgo[6][$row['PEPs_Relacionados']]
        +$matrizgradreisgo[7][$row['Alerta_Reputacional']]
        +$matrizgradreisgo[8][$row['Volumen_Esperado']]
        +$matrizgradreisgo[9][$row['Frecuencia_Esperada']]
        +$matrizgradreisgo[10][$row['Instrumento_Monetario']]
        +$matrizgradreisgo[11][$row['Canales_MediosUtilizados']]
        +$matrizgradreisgo[12][$row['Pais_EstadoOficial']]
        +$matrizgradreisgo[13][$row['Pais_EstadoResidencia']]
        +$matrizgradreisgo[14][$row['Pais_EstadoOperacion']]
        +$matrizgradreisgo[15][$row['Origen_Recursos']]
        +$matrizgradreisgo[16][$row['Destino_Recursos']]
        +$matrizgradreisgo[17][$row['Pais_EstadoResidenciaTerceros']]
        +$matrizgradreisgo[18][$row['Edad_Cliente']]
        +$matrizgradreisgo[19][$row['An_Construccion']]
        +$matrizgradreisgo[20][$row['Reg_TributacionPM']]
        +$matrizgradreisgo[21][$row['Reg_TributacionPF']];
        
						$tbl = '

						<table border="0" cellpadding="2" cellspacing="2" nobr="true">
						 <tr>
						  <th width="360" colspan="3" align="center">Variables de riesgo</th>
						 </tr>
						 <tr>
						  <td>Actividad objeto social</td>
						  <td >'.$row['Antiguedad_ObjetoSocial'] .' </td>
						  <td >'. $matrizgradreisgo[1][$row['Antiguedad_ObjetoSocial']].'</td>
						 </tr>
						 <tr>
						  <td>Antiguedad del cliente</td>
						  <td>'.$row['Antiguedad_Cliente']  .'</td>
						  <td>'.$matrizgradreisgo[2][$row['Antiguedad_Cliente']].'</td>
						 </tr>
						 <tr>
						  <td> Naturaleza de las operaciones</td>
						  <td> '.$row['Naturaleza_Operaciones'] .'</td>
						  <td>'.$matrizgradreisgo[3][$row['Naturaleza_Operaciones']].'</td>
						 </tr>
						 <tr>
						  <td> Q de beneficios</td>
						  <td> '.$row['Numero_Beneficiarios'] .'</td>
						  <td> '.$matrizgradreisgo[4][$row['Numero_Beneficiarios']].' </td>
						 </tr>
						  <tr>
						  <td> Q de terceros relacionados (apoderados y cotitulares)</td>
						  <td>'. $row['Numero_TercerosRelacionados'] .'</td>
						  <td> '.$matrizgradreisgo[5][$row['Numero_TercerosRelacionados']].'  </td>
						 </tr>
						  <tr>
						  <td> Peps relacionados</td>
						  <td> '.$row['PEPs_Relacionados'] .'</td>
						  <td> '.$matrizgradreisgo[6][$row['PEPs_Relacionados']].' </td>
						 </tr>
						  <tr>
						  <td> Alerta reputacional</td>
						  <td> '.$row['Alerta_Reputacional'] .'</td>
						  <td> '.$matrizgradreisgo[7][$row['Alerta_Reputacional']].' </td>
						 </tr>
						  <tr>
						  <td> Volumen esperado(Monto)</td>
						  <td> '.$row['Volumen_Esperado'] .'</td>
						  <td> '.$matrizgradreisgo[8][$row['Volumen_Esperado']].'  </td>
						 </tr>
						  <tr>
						  <td> Frecuencia esperada (No. de veces)</td>
						  <td> '.$row['Frecuencia_Esperada'] .' </td>
						  <td> '.$matrizgradreisgo[9][$row['Frecuencia_Esperada']].'  </td>
						 </tr>
						  <tr>
						  <td> Instrumento monetario utilizado</td>
						  <td> '.$row['Instrumento_Monetario'] .' </td>
						  <td> '.$matrizgradreisgo[10][$row['Instrumento_Monetario']].' </td>
						 </tr>
						  <tr>
						  <td> Canales o medios utilizados</td>
						  <td> '.$row['Canales_MediosUtilizados'] .' </td>
						  <td> '.$matrizgradreisgo[11][$row['Canales_MediosUtilizados']].' </td>
						 </tr>
						  <tr>
						  <td> Pais| estado oficial</td>
						  <td> '.$row['Pais_EstadoOficial'] .'</td>
						  <td> '.$matrizgradreisgo[12][$row['Pais_EstadoOficial']].' </td>
						 </tr>
						  <tr>
						  <td> Pais|Estado de residencia</td>
						  <td> '.$row['Pais_EstadoResidencia'] .'</td>
						  <td>'.$matrizgradreisgo[13][$row['Pais_EstadoResidencia']].'  </td>
						 </tr>
						  <tr>
						  <td> Pais|Estado de operacion frecuencia</td>
						  <td> '.$row['Pais_EstadoOperacion'] .'</td>
						  <td> '.$matrizgradreisgo[14][$row['Pais_EstadoOperacion']].'  </td>
						 </tr>
						  <tr>
						  <td> Origen de los recursos</td>
						  <td> '.$row['Origen_Recursos'] .'</td>
						  <td>'.$matrizgradreisgo[15][$row['Origen_Recursos']].'  </td>
						 </tr>
						 <tr>
						  <td> Destino de recursos</td>
						  <td> '.$row['Destino_Recursos'] .' </td>
						  <td> '.$matrizgradreisgo[16][$row['Destino_Recursos']].' </td>
						 </tr>
						 <tr>
						  <td> Pais|Estado residencia de terceros relacionados</td>
						  <td> '.$row['Pais_EstadoResidenciaTerceros'] .' </td>
						  <td> '.$matrizgradreisgo[17][$row['Pais_EstadoResidenciaTerceros']].'  </td>
						 </tr>';

						 if($row['TipoCliente']=="Persona Fisica"){
						 	$tbl.='<tr>
						  <td> Edad del Cliente</td>
						  <td> '.$row['Edad_Cliente'] .' </td>
						  <td> '.$matrizgradreisgo[18][$row['Edad_Cliente']].' </td>
						 </tr>
						 <tr>
						  <td> Regimen de Tributación</td>
						  <td> '.$row['Reg_TributacionPF'] .' </td>
						  <td> '.$matrizgradreisgo[21][$row['Reg_TributacionPF']].'  </td>
						 </tr>';
						 }
						 if($row['TipoCliente']=="Persona Moral"){
						 	$tbl.='<tr>
						  <td> Años de Constitución</td>
						  <td> '.$row['An_Construccion'] .' </td>
						  <td> '.$matrizgradreisgo[19][$row['An_Construccion']].' </td>
						 </tr>
						 <tr>
						  <td> Regimen de Tributación</td>
						  <td> '.$row['Reg_TributacionPM'] .' </td>
						  <td> '.$matrizgradreisgo[20][$row['Reg_TributacionPM']].'  </td>
						 </tr>';
						 }

				$tbl.=' <tr>
						  <td>Suma total</td>
						  <td> </td>
						  <td> '.$sumagradoriesgo.' </td>
						 </tr></table>';

						

						$pdf->writeHTMLCell(160,0,15,110,$tbl,0,0,false, false, '');
						$pdf->MultiCell(0,0, 'Grado de riesgo' , 0, 'C', 0, 1, '', '', true,1,false,true);

						$pdf->MultiCell(0,0, 'Alto mas de 45 ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Medio  30-45  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Bajo menor a 29  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(100);
						$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo:     '.$row['GradoRiesgo'] , 0, 'L', 0, 1, '', '', true,1,false,true);
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
						$pdf->Cell(95, 0, 'Numero de cliente: '.$row[0], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['ApPatPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['ApMatPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['NombrePF'].' '.$row['SegNombrePF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Nombre', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['SexoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['LugNacimientoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['FechNacimientoPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Genero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Lugar de nacimiento (pais)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Fecha de nacimiento', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['DireccionPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['NumDireccionPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['CPPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Numero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Codigo postal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(65, 0, $row['ColoniaPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, $row['MunicipioPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['EstadoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['CiudadPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['TelefonoPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(65, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, 'Municipio', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Ciudad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Telefono', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						

						$pdf->Cell(75, 0, $row['EstCivilPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['EmailPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['CURPPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Correo electrónico', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'CURP', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['RFCPF'] , '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['NacionalidadPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['GiroPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'RFC ', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Nacionalidad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Ocupación / Giro', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['CompaniaPF'] , '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['DomicilioNegPF'].' '.$row['NumDomicilioNegPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['ingrcomp1']+$row['ingrnocomp1'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Nombre de la empresa', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Domicilio donde labora', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Sueldo o ingreso mensual', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['PuestoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['fuenteingrcomp2'].' '.$row['fuenteingrcomp3'].' '.$row['fuenteingrnocomp2'].' '.$row['fuenteingrnocomp3'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['ingrcomp2']+$row['ingrcomp3']+$row['ingrcomp4']+$row['ingrcomp5']+$row['ingrnocomp2']+$row['ingrnocomp3']+$row['ingrnocomp4']+$row['ingrnocomp5'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Puesto', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Actividad economica adicional', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Ingresos adicionales mensuales aprox', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');




						$pdf->AddPage();


						$pdf->Cell(195, 0, 'DOCUMENTACION DE IDENTIFICACION', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(35, 0, 'Credencial para votar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['INE'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['INEurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Pasaporte cedula profecional', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['pasaporte'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['pasaporteurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Cartilla de servicio militar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['cartilla'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['cartillaurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Licencia para conducir', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['licencia'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['licenciaurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(35, 0, 'Otra', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['otra'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['otraurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia  :'.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Especificar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['inotra'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Se cotejo vs original:  '.$row['secotejo'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						$pdf->Cell(45, 0, 'Otros documentos que se adjuntan:   ', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						if($row['addcurpurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta CURP  y/o cedula RFC:               '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						if($row['adddomiciliourl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta comprobante de domicilio:           '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fecha del comprobante de domicilio:            '.$row['fechadom'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Domicilio manifestado coincide con la ID:   '.$row['domId'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
						//agregar si o no desde base de datos
						$pdf->Ln(10);
						$pdf->Cell(195, 0, 'BENEFICIARIO', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioApPat'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioApMat'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioNom'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Nombre(s)', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['BeneficiarioDom'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioCol'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioCP'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioPais'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Codigo postal', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Pais', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['BeneficiarioTel'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, $row['BeneficiarioCURP'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioRFC'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Telefono', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'CURP', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'RFC', 'T', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioParent'].'  '.$row['BeneficiarioPorciento'].'%', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, $row['BeneficiarioFechNac'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioMun'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Parentesco/porciento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'Fecha de nacimiento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Municipio', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioEstado'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['BeneficiarioEstCivil'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioSocConyugal'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, 'Sociedad conyugal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioOcupacion'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Ocupacion o profecion', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, '', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->AddPage();


						$pdf->Cell(195, 0, 'PERFIL TRANSACCIONAL INICIAL', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(35, 0, 'Ingresos comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp1'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp2'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp2'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['ingrcomp3'] , 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp3'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['ingrcomp4'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp4'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(35, 0, 'Ingresos comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp5'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp5'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp1'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'Ingresos no comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp2'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp2'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp3'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp3'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp4'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp4'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp5'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp5'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						$pdf->Cell(35, 0, 'Total Ingresos', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp5']+$row['ingrnocomp4']+$row['ingrnocomp3']+$row['ingrnocomp2']+$row['ingrnocomp1']+$row['ingrcomp5']+$row['ingrcomp4']+$row['ingrcomp3']+$row['ingrcomp2']+$row['ingrcomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						if($row['TipoCredito']=="Auto Nuevo" || $row['TipoCredito']=="Auto Usado"){
							$contieneselec="Valor del Auto";
							$contieneselec2="Enganche";
							$pdf->Cell(45, 0, $contieneselec2, '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['MontoSolicitado'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Porcentaje de enganche', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['PorEnganche'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Porcentaje de financiamineto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['PorFinanciamiento'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Seguro de auto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['SeguroAuto'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Monto financiado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['MontoFinanciado'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						}else{
							$contieneselec="Monto a Financiar";
							
						}

						$pdf->Cell(45, 0, $contieneselec, '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['MontoSolicitado'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(45, 0, 'Plazo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['Plazo'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Pago mensual esperado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['PagoMenEsp'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Comision por apertura', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['PorComApertura'].'%', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(45, 0, 'Seguro de vida', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['SeguroVida'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Seguro de desempleo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['SeguroDesempleo'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
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
						$pdf->Cell(45, 0, 'Si('.$Peps["Si"][$row['tienepeprel']].' )', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'No( '.$Peps["No"][$row['tienepeprel']].' )', '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'En caso de si', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(7);
						$pdf->Cell(45, 0, '¿Quien?(Nombre)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['quienpep'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Parentesco', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['parentescopep'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(45, 0, 'Puesto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['puestorelpep'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
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
			/*
						*/
						//Close and output PDF document
						$pdf->Output('example_004.pdf', 'I');

		}else if ($row['TipoCliente']=="Persona Fisica" && $row['ActividadEmpresarial']=="Si") {
			# code...
			//echo "PFNA";

						/**
						 * Creates an example PDF TEST document using TCPDF
						 * @package com.tecnick.tcpdf
						 * @abstract TCPDF - Example: Cell stretching
						 * @author Nicola Asuni
						 * @since 2008-03-04
						 */

						// Include the main TCPDF library (search for installation path).
						require_once('tcpdf/tcpdf.php'); ob_end_clean();    header("Content-Encoding: None", true);

						// create new PDF document
						$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LETTER', true, 'UTF-8', false);

						// set document information
						$pdf->SetCreator(PDF_CREATOR);
						$pdf->SetAuthor('SFG');
						$pdf->SetTitle('Solicitud');
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

						$sexosel = array( 1 => array( "Masculino" => "X" , "Femenino" => " " ,""=> " "),
										  2 => array( "Masculino" => " " , "Femenino" => "X",""=> " " )	 );

						$viv  = array(1 => array('Casa Propia' => "X", 'Rentada' => " ",'Hipotecada' => " ",'Casa propiedad de sus familiares' => " ",'Otros especificar' => " ",''=>' '),
						 			  2 => array('Casa Propia' => " ", 'Rentada' => "X",'Hipotecada' => " ",'Casa propiedad de sus familiares' => " ",'Otros especificar' => " ",''=>' '),
						 			  3 => array('Casa Propia' => " ", 'Rentada' => " ",'Hipotecada' => "X",'Casa propiedad de sus familiares' => " ",'Otros especificar' => " ",''=>' '),
						 			  4 => array('Casa Propia' => " ", 'Rentada' => " ",'Hipotecada' => " ",'Casa propiedad de sus familiares' => "X",'Otros especificar' => " ",''=>' '),
						 			  5 => array('Casa Propia' => " ", 'Rentada' => " ",'Hipotecada' => " ",'Casa propiedad de sus familiares' => " ",'Otros especificar' => "X",''=>' '),
						 			  6 => array('Si' => "X", 'No' => " ",''=>' '),
						 			  7 => array('Si' => " ", 'No' => "X",''=>' '));

						$civ = array( 1 => array("Casado Bienes Mancomunados" => "X", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => " ","Soltero" => " ",""=>' '),
						 			  2 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => "X","Viudo" => " ","Divorciado" => " ","Soltero" => " ",""=>' '),
						 			  3 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => "X","Divorciado" => " ","Soltero" => " ",""=>' '),
						 			  4 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => "X","Soltero" => " ",""=>' '),
						 			  5 => array("Casado Bienes Mancomunados" => " ", "Casado Bienes Separados" => " ","Viudo" => " ","Divorciado" => " ","Soltero" => "X",""=>' '));

						$datoviv = array( 1 => array( "Si" => "X" , "No" => " ",""=>" "),
										  2 => array( "Si" => " " , "No" => "X",""=>" "));



						$pdf->MultiCell(30,0, "Datos del solicitante
						", 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0,'Folio del cliente
						'.$row[0], 1, 'J', 0, 0, '', '', true,1,false,true);
						//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);



						$pdf->MultiCell(30,0, '' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['TipoCredito'], 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, "Solicitud N°: ".$row[191] .'
							', 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						//
						$nomsol=ucwords($row['NombrePF']);
						$segnomsol=ucwords($row['SegNombrePF']);
						$apepasol=ucwords($row['ApPatPF']);
						$apemasol=ucwords($row['ApMatPF']);


						$pdf->MultiCell(60,0, 'Primer Nombre 
						'.$nomsol , 1, 'C', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Segundo Nombre 
						'.$segnomsol , 1, 'C', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Apellido Paterno
						'.$apepasol , 1, 'C', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Apellido materno
						'.$apemasol , 1, 'C', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(50,0, 'R.F.C
							' .$row['RFCPF'], 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Telefono
							'.$row['TelefonoPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono celular
							'.$row['MovilPF'], 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						
						$pdf->MultiCell(60,0, 'Direccion/calle y numero
							'.$row['DireccionPF'].' '.$row['NumDireccionPF'], 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'E-mail
							'.$row['EmailPF'], 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColoniaPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Ciudad
							'.$row['CiudadPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Lugar de nacimiento
							'.$row['LugNacimientoPF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Estado
							'.$row['EstadoPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Codigo Postal 
							'.$row['CPPF'].'          ' , 1, 'L', 0, 0, '', '', true,1,false,true); 
						$pdf->MultiCell(0,0, 'CURP
							'.$row['CURPPF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,1,false,true);

						$pdf->MultiCell(30,0, 'Sexo
						M ('.$sexosel[1][$row['SexoPF']].')   F ('.$sexosel[2][$row['SexoPF']].')	  ' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Fecha de nacimiento
							'.$row['FechNacimientoPF'], 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'Edad
							'.$row['Edad'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Nacionalidad
							'.$row['NacionalidadPF'] , 1, 'L', 0, 0, '', '', true,1,false,true); 
						$pdf->MultiCell(30,0, 'Num. dependientes.
							 '.$row['NumDependientesPF'].'   ' , 1, 'J', 0, 0, '', '', true,1,false,true); 
						$pdf->MultiCell(0,0, 'Acredita domicilio con 
							'.$row['AcreditaDomPF'] , 1, 'L', 0, 1, '', '', true,1,false,true); 
						$pdf->Ln(1);

						$pdf->MultiCell(150,0, 'Vive en:
						Casa propia ('.$viv[1][$row['ViviendaPF']].')   Renta('.$viv[2][$row['ViviendaPF']].')   Hipotecada	('.$viv[3][$row['ViviendaPF']].')  Con familiares ('.$viv[4][$row['ViviendaPF']].')  Otro ('.$viv[5][$row['ViviendaPF']].')  Especificar:('.$row['EspViviendaPF'].') Tiene una propiedad a su nombre? Si('.$viv[6][$row['InmueblePF']].')   No('.$viv[7][$row['InmueblePF']].')' , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Arraigo en el domicilio desde el año
							'.$row['ArraigoDomPF'], 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(30,0, 'Años de residir en la Ciudad
							'.$row['RecidirCiudadPF'].' Años' , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Beneficiario en caso de fallecimiento
							'.$row['BeneficiarioNom'].' '.$row['BeneficiarioApPat'].' '.$row['BeneficiarioApMat'] , 1, 'L', 0, 1, '', '', true,1,false,true); 
						$pdf->Ln(1);

						$pdf->MultiCell(150,0, 'Estado civil:
						Casado bienenes mancomunados ('.$civ[1][$row['EstCivilPF']].')   Casado bienes separados ('.$civ[2][$row['EstCivilPF']].')   Viudo('.$civ[3][$row['EstCivilPF']].')     Divorciado('.$civ[4][$row['EstCivilPF']].' )  Soltero( '.$civ[5][$row['EstCivilPF']].' )   ' , 1, 'J', 0, 1, '', '', true,1,false,true);
							$pdf->Ln(1);
							$pdf->MultiCell(150,0, 'Auto propio:            
						Si ('.$datoviv[1][$row['AutoPropioPF']].' )  No('.$datoviv[2][$row['AutoPropioPF']].') Especifique Marca y Tipo: '.$row['EspAuto'] , 1, 'L', 0, 1, '', '', true,1,false,true);
							$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'DATOS DE SU EMPLEO,PROFESION O NEGOCIO' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(70,0, 'Ocupacion segun alta o ultimo cambio ante SHCP
							'.$row['GiroPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Puesto
							'.$row['PuestoPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Antiguedad desde
							'.$row['DesdeEmpPF'] , 1, 'J', 0, 1, '', '', true,1,false,true); 
						$pdf->Ln(1);

						$pdf->MultiCell(30,0, 'Compañia 
							'.$row['CompaniaPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);

						$pdf->MultiCell(60,0, 'Num. de empleados
							'.$row['NumEmpleadosPF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
//echo json_encode($row);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Telefono
							'.$row['TelefonoEmpPF']  , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Ext
							'.$row['ExtensionEmpPF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Giro del negocio:actividad que realiza 
							'.$row['GiroPF'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Domicilio del negocio
							'.$row['DomicilioNegPF'] , 1, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'REFERENCIAS PERSONALES' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(70,0, 'Nombre
							'.$row['RefPerNom1PF'].' '.$row['RefPerApPat1PF'].' '.$row['RefPerApMat1PF'] , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Parentesco o relacion
							'.$row['RefPerParentesco1PF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(00,0, 'Telefono
							' .$row['RefPerTelefono1PF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Nombre
							'.$row['RefPerNom2PF'].' '.$row['RefPerApPat2PF'].' '.$row['RefPerApMat2PF']  , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Parentesco o relacion
							'.$row['RefPerParentesco2PF'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(00,0, 'Telefono
							'.$row['RefPerTelefono2PF'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(00,0, 'REFERENCIAS BANCARIAS' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Banco
							'.$row['Banco1'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Sucursal
							'.$row['SucursalBanc1'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Numero de cuenta 
							'.$row['CuentaBanc1'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha de apertura 
							'.$row['FechaApertura1'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(40,0, 'Banco
							'.$row['Banco2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Sucursal
							'.$row['SucursalBanc2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Numero de cuenta 
							'.$row['CuentaBanc2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha de apertura 
							'.$row['FechaApertura2'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);



						$pdf->MultiCell(50,0, 'REFERENCIAS COMERCIALES' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(70,0, 'Empresa
							'.$row['RefComEmp1'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Antiguedad
						desde el año:	'.$row['RefComAnt1'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['RefComTel1'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);


						$pdf->MultiCell(70,0, 'Empresa
							'.$row['RefComEmp2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Antiguedad
						desde el año:	'.$row['RefComAnt2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['RefComTel2'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);

						$pdf->MultiCell(00,0, 'CARGO DIRECTO (para contratos en M.N.)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Banco
							'.$row['CarDirBanco'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Numero de cuenta 
							'.$row['CLABE'] , 1, 'J', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(1);



						$pdf->MultiCell(70,0, 'DATOS DEL CONYUGE(en caso de unir  Ingresos)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre(s) 
							'.$row['ConyugeNom'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Apellido paterno
							'.$row['ConyugeApPat'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Apellido materno
							'.$row['ConyugeApMat'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'Compañia 
							'.$row['ConyugeCompania'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Puesto
							'.$row['ConyugePuesto'] , 1, 'L', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'DATOS OBLIGADO PERSONA MORAL' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre, razon social
							'.$row['NomObSolPM'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSolPM'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['TelObSolPM'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(40,0, 'Direccion / calle y numero
							'.$row['DirObSolPM'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Fax
							' , 1, 'L', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSolPM'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSolPM'] , 1, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
//$pdf->MultiCell(40,0, 'Lugar de nacimiento							' , 1, 'L', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Estado
							'.$row['EstObSolPM'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'C.P.
							'.$row['CPObSolPM'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(40,0, 'CONSTITUCIÓN DE LA EMPRESA' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(70,0, 'Antiguedad
							'.$row['AntObSolPM'].' Años' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
							'.$row['ApoObSolPM'] , 1, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(30,0, 'DATOS GENERALES' , 0, 'L', 0, 1, '', '', true,1,false,true);

						$pdf->MultiCell(70,0, 'Actividad principal
							'.$row['ActPrinObSolPM'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Fecha de inicio operaciones
							'.$row['FeIniOpObSolPM'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Cantidad de personal
							'.$row['CantPerObSolPM'] , 1, 'J', 0, 1, '', '', true,1,false,true);
							$pdf->Ln(1);






						//$pdf->Ln(1);







						$pdf->SetAlpha(0.2);

										
									$pdf->AddPage();


					
						$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre
							'.$row['NomObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'apellido paterno
							'.$row['ApPatObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Apellido materno
							'.$row['ApMatObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'CURP
							'.$row['CURPObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'. $row['TelObSol'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);



						$pdf->MultiCell(40,0, 'Direccion / calle
							'.$row['DirObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono Movil
							'.$row['MovObSol'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSol'] , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Lugar de nacimiento
							'.$row['LugNacObSol'] , 1, 'l', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
						Si ('.$datoviv[1][$row['PropObSol']].')   No	('.$datoviv[2][$row['PropObSol']].')' , 1, 'A', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'C.P.
							'.$row['CPObSol'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'E-mail
							'.$row['EmailObSol'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Sexo
						  M('.$sexosel[1][$row['SexoObSol']].')   F('.$sexosel[2][$row['SexoObSol']].') 	' , 1, 'A', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, 'Fecha nacimiento
							'.$row['FechNacObSol'] , 1, 'J', 0, 0, '', '', true,1,false,true);
							$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdadObSol'].' Años' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(80,0, 'Datos obligado solidario persona fisica(propietario de bien inmueble)' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre
							'.$row['NomObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'apellido paterno
							'.$row['ApPatObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Apellido materno
							'.$row['ApMatObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'CURP
							'.$row['CURPObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['TelObSol2'] , 1, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(40,0, 'Direccion / calle
							'.$row['DirObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono Movil
							'.$row['MovObSol2'] , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Lugar de nacimiento
							'.$row['LugNacObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSol2'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
						Si ('.$datoviv[1][$row['PropObSol2']].')   No('.$datoviv[2][$row['PropObSol2']].')	' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol2']  , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'C.P.
							'.$row['CPObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'E-mail
							'. $row['EmailObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Sexo
						  M('.$sexosel[1][$row['SexoObSol2']].')  F('.$sexosel[2][$row['SexoObSol2']].') 	' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, 'Fecha nacimiento
							'. $row['FechNacObSol2']  , 1, 'L', 0, 0, '', '', true,1,false,true);
							$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdadObSol2'].' Años', 1, 'J', 0, 1, '', '', true,1,false,true);
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
							'.$row['ClaveCon'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Nombre consecionario o distribuidor
							'.$row['NomCon'] , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha
							'.$row['Fecha'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Nombre del vendedor
							'.$row{'NomVend'} , 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Nombre y firma del gerente general
							'.$row['GerenteGral'] , 1, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Datos de inscripcion en el registro publico de contratos de adhesion de la procuradoria federal del consumidor:2999-2012 del 30 de abril del 2012
							' , 0, 'J', 0, 1, '', '', true,1,false,true);


						$pdf->SetAlpha(0.2);
						$pdf->RoundedRect(15, 84, 186, 126, 6.5, '0000','DF',null ,array(255, 255, 200) );

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
						$pdf->MultiCell(5,0, ' ' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, '   Actualizacion cliente' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, ' ', 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(4);
						$style2 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


						$pdf->MultiCell(70,0, 'Datos generales del cliente
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						//-------------------------------------------------
						$pdf->MultiCell(0,0, 'Nombre o razon social:          '.$row['NombrePF'].' '.$row['SegNombrePF'].' '.$row['ApPatPF'].' '.$row['ApMatPF'].'      
							', 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 53, 200, 53, $style2);
						$pdf->MultiCell(0,0, 'Numero de cliente:        '.$row[0].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 58, 200, 58, $style2);
						$pdf->MultiCell(0,0, 'Domicilio particular:     '.$row['DireccionPF'].' '.$row['NumDireccionPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 63, 200, 63, $style2);
						//------------------------------------
						$pdf->MultiCell(100,0, 'Colonia:                '.$row['ColoniaPF'].'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->Line(15, 68, 100, 68, $style2);
						$pdf->MultiCell(0,0, 'Codigo postal:             '.$row['CPPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 68, 200, 68, $style2);
						//---------------------------------------
						$pdf->MultiCell(100,0, 'Delegacion o municipio: '.$row['MunicipioPF'].'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->Line(15, 74, 100, 74, $style2);-
						$pdf->MultiCell(0,0, 'Ciudad o poblacion:        '.$row['CiudadPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 74, 200, 74, $style2);
						//--------------------------------------
						$pdf->MultiCell(100,0, 'Estado o provincia:      '.$row['EstadoPF'] .'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->Line(15, 79, 100, 79, $style2);
						$pdf->MultiCell(0,0, 'Pais:                   '.$row['LugNacimientoPF'] .'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(115, 79, 200, 79, $style2);
						//--------------------------------------
						$pdf->MultiCell(100,0, 'Fecha de nacimiento:  '.$row['FechNacimientoPF'].'
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->Line(15, 84, 100, 84, $style2);
						$pdf->MultiCell(0,0, 'RFC: '.$row['RFCPF'].'
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 84, 200, 84, $style2);

						$pdf->MultiCell(70,0, 'Calificacion de grado de riesgo
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Cell(25, 0, 'Segmento del cliente', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(3);
						$pdf->MultiCell(60,0, 'Resultado de la calificacion de grado de riesgo*:
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$gradries=array(1=>array('Bajo'=>'X','Medio'=>' ','Alto'=>' ',''=>' '),
										2=>array('Bajo'=>' ','Medio'=>'X','Alto'=>' ',''=>' '),
										3=>array('Bajo'=>' ','Medio'=>' ','Alto'=>'X',''=>' '));

						$pdf->MultiCell(40,0, 'Bajo ('.$gradries[1][$row['GradoRiesgo']].')' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Medio ('.$gradries[2][$row['GradoRiesgo']].')' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Alto(Requisitar reporte y aprobacion) ('.$gradries[3][$row['GradoRiesgo']].')' , 0, 'L', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(4);

						             
						$matrizgradreisgo=array(
            1=> array('Vulnerable' => 3, 'Informal' =>2, 'Otra'=>1,''=>''),
            2=> array('1-3 años' =>3 ,'4-6 años'=>2, '7-10 años'=>1, 'N/A'=>0,''=>'' ),
            3=> array('Prestamo'=>1,'Arrendamiento'=>2,'Otros'=>3,''=>''),
            4=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            5=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            6=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            7=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            8=> array('$18000 - $20000'=>1,'$21000 - $25000'=>2,'mas de $25000'=>3,''=>''),
            9=> array('1 a 3'=>1,'4 a 6'=>2,'7 a 10'=>3,''=>''),
            10=>array('Transferencia'=>1,'Cheque'=>2,'Efectivo'=>3,''=>''),
            11=>array('Agencia'=>1,'Internet'=>2,'Otro'=>3,''=>''),
            12=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            13=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            14=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            15=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            16=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            17=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            18=>array('18 - 26'=>3,'27 - 36'=>2,'37 - 56'=>1,'56 en adelante'=>3,''=>''),
            19=>array('0 - 3'=>3,'4 - 7'=>2,'8 en adelante'=>1,''=>''),
            20=>array('Regimen agape'=>3,'Regimen general de ley'=>1,'Regimen Donatarios'=>2,'Regimen Coordinados'=>3,''=>''),
            21=>array('Incorporacion Fiscal'=>3,'Servicios Profesionales'=>3,'Intereses'=>3,'Asalariado'=>1,'Arrendamiento'=>2,'Actividad empresarial'=>2,'Regimen Agape'=>3,''=>'')
            );

        $sumagradoriesgo=
        $matrizgradreisgo[1][$row['Antiguedad_ObjetoSocial']]
        +$matrizgradreisgo[2][$row['Antiguedad_Cliente']]
        +$matrizgradreisgo[3][$row['Naturaleza_Operaciones']]
        +$matrizgradreisgo[4][$row['Numero_Beneficiarios']]
        +$matrizgradreisgo[5][$row['Numero_TercerosRelacionados']]
        +$matrizgradreisgo[6][$row['PEPs_Relacionados']]
        +$matrizgradreisgo[7][$row['Alerta_Reputacional']]
        +$matrizgradreisgo[8][$row['Volumen_Esperado']]
        +$matrizgradreisgo[9][$row['Frecuencia_Esperada']]
        +$matrizgradreisgo[10][$row['Instrumento_Monetario']]
        +$matrizgradreisgo[11][$row['Canales_MediosUtilizados']]
        +$matrizgradreisgo[12][$row['Pais_EstadoOficial']]
        +$matrizgradreisgo[13][$row['Pais_EstadoResidencia']]
        +$matrizgradreisgo[14][$row['Pais_EstadoOperacion']]
        +$matrizgradreisgo[15][$row['Origen_Recursos']]
        +$matrizgradreisgo[16][$row['Destino_Recursos']]
        +$matrizgradreisgo[17][$row['Pais_EstadoResidenciaTerceros']]
        +$matrizgradreisgo[18][$row['Edad_Cliente']]
        +$matrizgradreisgo[19][$row['An_Construccion']]
        +$matrizgradreisgo[20][$row['Reg_TributacionPM']]
        +$matrizgradreisgo[21][$row['Reg_TributacionPF']];

						$tbl = '

						<table border="0" cellpadding="2" cellspacing="2" nobr="true">
						 <tr>
						  <th width="360" colspan="3" align="center">Variables de riesgo</th>
						 </tr>
						 <tr>
						  <td>Actividad objeto social</td>
						  <td >'.$row['Antiguedad_ObjetoSocial'] .' </td>
						  <td >'. $matrizgradreisgo[1][$row['Antiguedad_ObjetoSocial']].'</td>
						 </tr>
						 <tr>
						  <td>Antiguedad del cliente</td>
						  <td>'.$row['Antiguedad_Cliente']  .'</td>
						  <td>'.$matrizgradreisgo[2][$row['Antiguedad_Cliente']].'</td>
						 </tr>
						 <tr>
						  <td> Naturaleza de las operaciones</td>
						  <td> '.$row['Naturaleza_Operaciones'] .'</td>
						  <td>'.$matrizgradreisgo[3][$row['Naturaleza_Operaciones']].'</td>
						 </tr>
						 <tr>
						  <td> Q de beneficios</td>
						  <td> '.$row['Numero_Beneficiarios'] .'</td>
						  <td> '.$matrizgradreisgo[4][$row['Numero_Beneficiarios']].' </td>
						 </tr>
						  <tr>
						  <td> Q de terceros relacionados (apoderados y cotitulares)</td>
						  <td>'. $row['Numero_TercerosRelacionados'] .'</td>
						  <td> '.$matrizgradreisgo[5][$row['Numero_TercerosRelacionados']].'  </td>
						 </tr>
						  <tr>
						  <td> Peps relacionados</td>
						  <td> '.$row['PEPs_Relacionados'] .'</td>
						  <td> '.$matrizgradreisgo[6][$row['PEPs_Relacionados']].' </td>
						 </tr>
						  <tr>
						  <td> Alerta reputacional</td>
						  <td> '.$row['Alerta_Reputacional'] .'</td>
						  <td> '.$matrizgradreisgo[7][$row['Alerta_Reputacional']].' </td>
						 </tr>
						  <tr>
						  <td> Volumen esperado(Monto)</td>
						  <td> '.$row['Volumen_Esperado'] .'</td>
						  <td> '.$matrizgradreisgo[8][$row['Volumen_Esperado']].'  </td>
						 </tr>
						  <tr>
						  <td> Frecuencia esperada (No. de veces)</td>
						  <td> '.$row['Frecuencia_Esperada'] .' </td>
						  <td> '.$matrizgradreisgo[9][$row['Frecuencia_Esperada']].'  </td>
						 </tr>
						  <tr>
						  <td> Instrumento monetario utilizado</td>
						  <td> '.$row['Instrumento_Monetario'] .' </td>
						  <td> '.$matrizgradreisgo[10][$row['Instrumento_Monetario']].' </td>
						 </tr>
						  <tr>
						  <td> Canales o medios utilizados</td>
						  <td> '.$row['Canales_MediosUtilizados'] .' </td>
						  <td> '.$matrizgradreisgo[11][$row['Canales_MediosUtilizados']].' </td>
						 </tr>
						  <tr>
						  <td> Pais| estado oficial</td>
						  <td> '.$row['Pais_EstadoOficial'] .'</td>
						  <td> '.$matrizgradreisgo[12][$row['Pais_EstadoOficial']].' </td>
						 </tr>
						  <tr>
						  <td> Pais|Estado de residencia</td>
						  <td> '.$row['Pais_EstadoResidencia'] .'</td>
						  <td>'.$matrizgradreisgo[13][$row['Pais_EstadoResidencia']].'  </td>
						 </tr>
						  <tr>
						  <td> Pais|Estado de operacion frecuencia</td>
						  <td> '.$row['Pais_EstadoOperacion'] .'</td>
						  <td> '.$matrizgradreisgo[14][$row['Pais_EstadoOperacion']].'  </td>
						 </tr>
						  <tr>
						  <td> Origen de los recursos</td>
						  <td> '.$row['Origen_Recursos'] .'</td>
						  <td>'.$matrizgradreisgo[15][$row['Origen_Recursos']].'  </td>
						 </tr>
						 <tr>
						  <td> Destino de recursos</td>
						  <td> '.$row['Destino_Recursos'] .' </td>
						  <td> '.$matrizgradreisgo[16][$row['Destino_Recursos']].' </td>
						 </tr>
						 <tr>
						  <td> Pais|Estado residencia de terceros relacionados</td>
						  <td> '.$row['Pais_EstadoResidenciaTerceros'] .' </td>
						  <td> '.$matrizgradreisgo[17][$row['Pais_EstadoResidenciaTerceros']].'  </td>
						 </tr>';

						 if($row['TipoCliente']=="Persona Fisica"){
						 	$tbl.='<tr>
						  <td> Edad del Cliente</td>
						  <td> '.$row['Edad_Cliente'] .' </td>
						  <td> '.$matrizgradreisgo[18][$row['Edad_Cliente']].' </td>
						 </tr>
						 <tr>
						  <td> Regimen de Tributación</td>
						  <td> '.$row['Reg_TributacionPF'] .' </td>
						  <td> '.$matrizgradreisgo[21][$row['Reg_TributacionPF']].'  </td>
						 </tr>';
						 }
						 if($row['TipoCliente']=="Persona Moral"){
						 	$tbl.='<tr>
						  <td> Años de Constitución</td>
						  <td> '.$row['An_Construccion'] .' </td>
						  <td> '.$matrizgradreisgo[19][$row['An_Construccion']].' </td>
						 </tr>
						 <tr>
						  <td> Regimen de Tributación</td>
						  <td> '.$row['Reg_TributacionPM'] .' </td>
						  <td> '.$matrizgradreisgo[20][$row['Reg_TributacionPM']].'  </td>
						 </tr>';
						 }

				$tbl.=' <tr>
						  <td>Suma total</td>
						  <td> </td>
						  <td> '.$sumagradoriesgo.' </td>
						 </tr></table>';


						$pdf->writeHTMLCell(160,0,15,110,$tbl,0,0,false, false, '');
						$pdf->MultiCell(0,0, 'Grado de riesgo' , 0, 'C', 0, 1, '', '', true,1,false,true);

						$pdf->MultiCell(0,0, 'Alto mas de 45 ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Medio  30-45  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Bajo 21-29  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(100);
						$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo:     '.$row['GradoRiesgo'] , 0, 'L', 0, 1, '', '', true,1,false,true);
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
						$pdf->Cell(95, 0, 'Numero de cliente: '.$row[0], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['ApPatPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['ApMatPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['NombrePF'].' '.$row['SegNombrePF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Nombre', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['SexoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['LugNacimientoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['FechNacimientoPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Genero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Lugar de nacimiento (pais)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Fecha de nacimiento', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['DireccionPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['NumDireccionPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['CPPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Numero', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Codigo postal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(65, 0, $row['ColoniaPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, $row['MunicipioPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['EstadoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['CiudadPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['TelefonoPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(65, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, 'Municipio', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Ciudad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Telefono', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						

						$pdf->Cell(75, 0, $row['EstCivilPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['EmailPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['CURPPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Correo electrónico', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'CURP', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['RFCPF'] , '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['NacionalidadPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['GiroPF'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'RFC ', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Nacionalidad', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Ocupación / Giro', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['CompaniaPF'] , '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['DomicilioNegPF'].' '.$row['NumDomicilioNegPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['ingrcomp1']+$row['ingrnocomp1'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Nombre de la empresa', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Domicilio donde labora', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Sueldo o ingreso mensual', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['PuestoPF'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['fuenteingrcomp2'].' '.$row['fuenteingrcomp3'].' '.$row['fuenteingrnocomp2'].' '.$row['fuenteingrnocomp3'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['ingrcomp2']+$row['ingrcomp3']+$row['ingrcomp4']+$row['ingrcomp5']+$row['ingrnocomp2']+$row['ingrnocomp3']+$row['ingrnocomp4']+$row['ingrnocomp5'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Puesto', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Actividad economica adicional', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Ingresos adicionales mensuales aprox', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');





						$pdf->AddPage();


						$pdf->Cell(195, 0, 'DOCUMENTACION DE IDENTIFICACION', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(35, 0, 'Credencial para votar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['INE'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['INEurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Pasaporte cedula profecional', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['pasaporte'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['pasaporteurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Cartilla de servicio militar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['cartilla'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['cartillaurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Licencia para conducir', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['licencia'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['licenciaurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(35, 0, 'Otra', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['otra'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['otraurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia  :'.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Especificar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['inotra'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Se cotejo vs original:  '.$row['secotejo'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						$pdf->Cell(45, 0, 'Otros documentos que se adjuntan:   ', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						if($row['addcurpurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta CURP  y/o cedula RFC:               '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						if($row['adddomiciliourl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta comprobante de domicilio:           '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fecha del comprobante de domicilio:            '.$row['fechadom'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Domicilio manifestado coincide con la ID:   '.$row['domId'], '', 1, 'L', 0, '', 0, false, 'T', 'C');
						//agregar si o no desde base de datos
						$pdf->Ln(10);
						
						$pdf->Cell(195, 0, 'BENEFICIARIO', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioApPat'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioApMat'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioNom'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Nombre(s)', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['BeneficiarioDom'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioCol'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioCP'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioPais'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Codigo postal', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Pais', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['BeneficiarioTel'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, $row['BeneficiarioCURP'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioRFC'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Telefono', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'CURP', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'RFC', 'T', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioParent'].'  '.$row['BeneficiarioPorciento'].'%', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, $row['BeneficiarioFechNac'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioMun'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Parentesco/porciento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'Fecha de nacimiento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Municipio', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioEstado'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['BeneficiarioEstCivil'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioSocConyugal'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, 'Sociedad conyugal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioOcupacion'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Ocupacion o profecion', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, '', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->AddPage();


						$pdf->Cell(195, 0, 'PERFIL TRANSACCIONAL INICIAL', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(35, 0, 'Ingresos comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp1'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp2'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp2'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['ingrcomp3'] , 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp3'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['ingrcomp4'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp4'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(35, 0, 'Ingresos comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp5'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp5'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp1'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'Ingresos no comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp2'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp2'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp3'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp3'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp4'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp4'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp5'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp5'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						$pdf->Cell(35, 0, 'Total Ingresos', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp5']+$row['ingrnocomp4']+$row['ingrnocomp3']+$row['ingrnocomp2']+$row['ingrnocomp1']+$row['ingrcomp5']+$row['ingrcomp4']+$row['ingrcomp3']+$row['ingrcomp2']+$row['ingrcomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						if($row['TipoCredito']=="Auto Nuevo" || $row['TipoCredito']=="Auto Usado"){
							$contieneselec="Valor del Auto";
							$contieneselec2="Enganche";
							$pdf->Cell(45, 0, $contieneselec2, '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['MontoSolicitado'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Porcentaje de enganche', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['PorEnganche'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Porcentaje de financiamineto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['PorFinanciamiento'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Seguro de auto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['SeguroAuto'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Monto financiado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['MontoFinanciado'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						}else{
							$contieneselec="Monto a Financiar";
							
						}

						$pdf->Cell(45, 0, $contieneselec, '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['MontoSolicitado'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(45, 0, 'Plazo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['Plazo'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Pago mensual esperado', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['PagoMenEsp'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Comision por apertura', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['PorComApertura'].'%', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(45, 0, 'Seguro de vida', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['SeguroVida'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'Seguro de desempleo', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['SeguroDesempleo'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
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
						$pdf->Cell(45, 0, 'Si('.$Peps["Si"][$row['tienepeprel']].' )', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'No( '.$Peps["No"][$row['tienepeprel']].' )', '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'En caso de si', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(7);
						$pdf->Cell(45, 0, '¿Quien?(Nombre)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['quienpep'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Parentesco', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['parentescopep'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(45, 0, 'Puesto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['puestorelpep'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
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
						/*
						*/
						//Close and output PDF document
						$pdf->Output('example_004.pdf', 'I');

						//============================================================+
						// END OF FILE
						//========================================
		}else if ($row['TipoCliente']=="Persona Moral") {
			# code...
			//echo "PM";
									/**
						 * Creates an example PDF TEST document using TCPDF
						 * @package com.tecnick.tcpdf
						 * @abstract TCPDF - Example: Cell stretching
						 * @author Nicola Asuni
						 * @since 2008-03-04
						 */

						// Include the main TCPDF library (search for installation path).
						require_once('tcpdf/tcpdf.php'); ob_end_clean();    header("Content-Encoding: None", true);

						// create new PDF document
						$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LETTER', true, 'UTF-8', false);

						// set document information
						$pdf->SetCreator(PDF_CREATOR);
						$pdf->SetAuthor('SERVICIOS FINANCIEROS DEL GUADIANA');
						$pdf->SetTitle('Solicitud');
						$pdf->SetSubject('Solicitud');
						$pdf->SetKeywords('Solicitud');

						// set default header data
						$pdf->SetHeaderData('tcpdf_logo.jpg', PDF_HEADER_LOGO_WIDTH, '', 'Servicios financieros del 
							guadiana, S.A de C.V 
							SOFOM, E.N.R '
							
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



						$pdf->MultiCell(30,0, "Datos del solicitante
						 ", 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(30,0,'Folio del cliente
						 '.$row[0], 1, 'L', 0, 0, '', '', true,0,false,true);
						//$pdf->MultiCell(30,0, '' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, '' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['TipoCredito'], 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, "Solicitud N°: ".$row[191] .'
							', 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);


						//
						$pdf->MultiCell(60,0, 'Nombre Razon social
						 '.$row['RazonSocial'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, 'R.F.C
						 '.$row['RFCPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Telefono
						 '.$row['TelPM'], 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Direccion/calle y numero
						 '.$row['DireccionPM'].'   #'.$row['NumDireccionPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, 'E-mail
						 '.$row['EmailPM'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Fax
						 ' , 1, 'L', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);
						//
						$pdf->MultiCell(30,0, 'Colonia
						 '.$row['ColoniaPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, 'Ciudad
						 '.$row['CiudadPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(60,0, 'Estado
						 '.$row['EstadoPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Codigo Postal
						 '.$row['CPPM'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
						$pdf->Ln(1);

						$pdf->MultiCell(50,0, 'Datos del contacto de la empresa' , 0, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(40,0, 'Primer nombre 
						 '.$row['ContEmpNombre'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, 'Segundo nombre
						 '.$row['ContEmpSegNombre'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(40,0, 'Apellido paterno
						 '.$row['ContEmpApPat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Apellido materno
						 '.$row['ContEmpApMat'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
						$pdf->Ln(1);


						$pdf->MultiCell(30,0, 'Telefono
						 '.$row['ContEmpTel'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(60,0, 'E-mail
						 '.$row['ContEmpEmail'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, 'RFC
						 '.$row['ContEmpRFC'], 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Fax
						 ', 1, 'L', 0, 1, '', '', true,0,false,true); 
						$pdf->Ln(1);


						$pdf->MultiCell(70,0, 'Puesto que desempeña
						 '.$row['ContEmpPuesto'] , 1, 'L', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);

						$pdf->MultiCell(30,0, 'Datos generales de la empresa' , 0, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(70,0, 'Actividad principal
						 '.$row['ActPrinPM'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
						 ' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(60,0, 'Fecha de inicio de operaciones
						 '.$row['InOperacionesPM'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
						 ' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Cantidad de personal
						 '.$row['CantPersonalPM'] , 1, 'L', 0, 1, '', '', true,0,false,true); 
						$pdf->Ln(1);

						$pdf->MultiCell(30,0, 'Constitucion empresa' , 0, 'L', 0, 1, '', '', true,0,false,true);

						$pdf->MultiCell(60,0, 'Antiguedad
							'.$row['AntiguedadPM'].' Años' , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
							'.$row['ApoderadoPM'] , 1, 'L', 0, 1, '', '', true,0,false,true);                                                                                                                                                                                                                                                                   
						$pdf->Ln(1);

						$pdf->MultiCell(30,0, 'Referencias bancarias' , 0, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(40,0, 'Banco
							'.$row['Banco1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(40,0, 'Sucursal
							'.$row['SucursalBanc1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(30,0, 'Numero de cuenta
							'.$row['CuentaBanc1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Feach de apertura
							'.$row['FechaApertura1'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Banco
							'.$row['Banco2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(40,0, 'Sucursal
							'.$row['SucursalBanc2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(30,0, 'Numero de cuenta
							'.$row['CuentaBanc2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(00,0, 'Feach de apertura
							'.$row['FechaApertura2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(00,0, 'CARGO DIRECTO CUENTA DE CHEQUES (para contratos en M.N. BBVA Bancomer, HSBC, Banamex, BANORTE, Scotiabank Inverlat, Santander o Inbursa)
						(para contratos en USD únicamente BBVA Bancomer y HSBC)' , 0, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, 'Banco
							'.$row['CarDirBanco'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Numero de cuenta (CLABE)
							'.$row['CLABE'] , 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(30,0, 'Referencias comerciales' , 0, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(70,0, 'Empresa
							'.$row['RefComEmp1'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Antiguedad
						desde el año:	'.$row['RefComAnt1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['RefComTel1'], 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);


						$pdf->MultiCell(70,0, 'Empresa
							'.$row['RefComEmp2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Antiguedad
						desde el año:	'.$row['RefComAnt2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['RefComTel2'] , 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Datos obligado solidario persona moral' , 0, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(70,0, 'Nombre/Razon social
							'.$row['NomObSolPM'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'RFC
							'.$row['RFCObSolPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['TelObSolPM'], 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);


						$pdf->MultiCell(70,0, 'Direccion
							'.$row['DirObSolPM'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Fax
							' , 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(50,0, 'Colonia
							'.$row['ColObSolPM'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSolPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Estado
							'.$row['EstObSolPM'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Codigo Postal
							'.$row['CPObSolPM'] , 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);

						$pdf->MultiCell(30,0, 'Constitucion de la empresa' , 0, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(70,0, 'Antiguedad
							'.$row['AntObSolPM'].' Años' , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Apoderado para suscribir titulos de credito
							'.$row['ApoObSolPM'] , 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);


						$pdf->MultiCell(30,0, 'Datos generales' , 0, 'L', 0, 1, '', '', true,0,false,true);

						$pdf->MultiCell(70,0, 'Actividad principal
							'.$row['ActPrinObSolPM'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(50,0, 'Fecha de inicio operaciones
							'.$row['FeIniOpObSolPM'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Cantidad de personal
							'.$row['CantPerObSolPM'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);

						$pdf->MultiCell(0,0, 'De acuerdo al articulo 20 de la Ley para Regular Sociedades de Información Crediticia, en caso de que la información proporcionada por el Cliente sea relativa a una persona moral, deberá incluir a los accionistas o titulares de las partes sociales, según corresponda, que sean propietarios del 10% o más del capital social. *' , 0, 'A', 0, 1, '', '', true,1,false,true);

						$pdf->MultiCell(10,0, 'Nombre: ' , 0, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc1Nombre'].' '.$row['Acc1ApPat'].' '.$row['Acc1ApMat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, ' ' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(7,0, 'RFC:' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc1RFC'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['Acc1Porcentaje'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);

						$pdf->MultiCell(10,0, 'Nombre: ' , 0, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc2Nombre'].' '.$row['Acc2ApPat'].' '.$row['Acc2ApMat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, ' ' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(7,0, 'RFC:' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc2RFC'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['Acc2Porcentaje'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);

							$pdf->MultiCell(10,0, 'Nombre: ' , 0, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc3Nombre'].' '.$row['Acc3ApPat'].' '.$row['Acc3ApMat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, ' ' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(7,0, 'RFC:' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc3RFC'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['Acc3Porcentaje'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);

							$pdf->MultiCell(10,0, 'Nombre: ' , 0, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc4Nombre'].' '.$row['Acc4ApPat'].' '.$row['Acc4ApMat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, ' ' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(7,0, 'RFC:' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc4RFC'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['Acc4Porcentaje'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);	

							$pdf->MultiCell(0,0, '* En el caso de que alguno(s) de los accionistas del cliente (persona moral) sea(n) otra(s) persona(s) moral(es), se deberan identificar a los accionistas de ésta(s) última(s) que sean propietarios del 25% o más del capital social:' , 0, 'A', 0, 1, '', '', true,1,false,true);
							
							$pdf->MultiCell(10,0, 'Nombre: ' , 0, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc5Nombre'].' '.$row['Acc5ApPat'].' '.$row['Acc5ApMat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, ' ' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(7,0, 'RFC:' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc5RFC'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['Acc5Porcentaje'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);
							
								$pdf->MultiCell(10,0, 'Nombre: ' , 0, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc6Nombre'].' '.$row['Acc6ApPat'].' '.$row['Acc6ApMat'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, ' ' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(7,0, 'RFC:' , 0, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(50,0, $row['Acc6RFC'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(7,0, ' ' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '%' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, $row['Acc6Porcentaje'] , 1, 'J', 0, 1, '', '', true,0,false,true);
							$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Datos obligado solidario persona fisica' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre
							'.$row['NomObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'apellido paterno
							'.$row['ApPatObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Apellido materno
							'.$row['ApMatObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSol'], 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono Particular
							'.$row['TelObSol'] , 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(75,0, 'Direccion / calle
							'.$row['DirObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(65,0, 'Curp
							'.$row['CURPObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);


						$pdf->MultiCell(0,0, 'Telefono Movil
							'.$row['MovObSol'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSol'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Lugar de nacimiento
							'.$row['LugNacObSol'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$datobprop1a=array(1=>array('Si'=>'X','No'=>' ',''=>' '),
										   2=>array('Si'=>' ','No'=>'X',''=>' '));
						
						$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
						Si  ('.$datobprop1a[1][$row['PropObSol']].')   No	('.$datobprop1a[2][$row['PropObSol']].')' , 1, 'A', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'C.P.
							'.$row['CPObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$datobsex=array(1=>array('Masculino'=>'X','Femenino'=>' ',''=>' '),
										2=>array('Masculino'=>' ','Femenino'=>'X',''=>' '));
						$pdf->MultiCell(30,0, 'Sexo
						M  ('.$datobsex[1][$row['SexoObSol']].')  F  ('.$datobsex[2][$row['SexoObSol']].')' , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'E-mail 
						 '.$row['EmailObSol'] , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, 'Fecha nacimiento
							'.$row['FechNacObSol'], 1, 'L', 0, 0, '', '', true,0,false,true);
							$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdadObSol'] , 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);



						/*
						$pdf->MultiCell(90,0, 'Obligado solidario (Nombre(s). apellido paterno. apellido materno)
							'.$row['obsol1'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);


						$datobsex11a=" ";$datobsex11b=" ";
						if($row['datobsex11']=="Masculino"){
						$datobsex11a="X";
						}elseif($row['datobsex11']=="Femenino"){
						$datobsex11b="X";
						}else{
						$datobsex11a="";$datobsex11b="";
						}
						$pdf->MultiCell(30,0, 'Sexo
						F  ('.$datobsex11a.')   M   ('.$datobsex11b.')' , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha de Nacimiento
							'.$row['datobfechnac1d2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(90,0, 'RFC con homoclave
							'.$row['datobnom22'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'CURP
							'.$row['CURPObSolPF'] , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdObSolPF'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						*/


						$pdf->SetAlpha(0.2);
						$pdf->RoundedRect(15, 177, 186, 33, 6.5, '0000','DF',null ,array(255, 255, 200) );
										
									$pdf->AddPage();


						$pdf->MultiCell(40,0, 'Datos obligado solidario(2) persona fisica' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Nombre
							'.$row['NomObSol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'apellido paterno
							'.$row['ApPatObSol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'Apellido materno
							'.$row['ApMatObSol2'] , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'RFC
							'.$row['RFCObSol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono
							'.$row['TelObSol2'] , 1, 'J', 0, 1, '', '', true,0,false,true);

						$pdf->Ln(1);
						$pdf->MultiCell(75,0, 'Direccion / calle
							'.$row['DirObSol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(65,0, 'Curp
							'.$row['CURPObSol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);


						$pdf->MultiCell(0,0, 'Telefono Movil
							'.$row['MovObSol2'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ColObSol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Ciudad
							'.$row['CdObSol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Lugar de nacimiento
							'.$row['LugNacObSol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->MultiCell(0,0, 'Tiene propiedad a su nombre
						Si ('.$datobprop1a[1][$row['PropObSol2']].')   No	('.$datobprop1a[2][$row['PropObSol2']].')' , 1, 'A', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol2'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'C.P.
							'.$row['CPObSol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->MultiCell(30,0, 'Sexo
						M  ('.$datobsex[1][$row['SexoObSol2']].')  F  ('.$datobsex[2][$row['SexoObSol2']].')   	' , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'E-mail 
						 '.$row['EmailObSol2'] , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(25,0, 'Fecha nacimiento
							'.$row['FechNacObSol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
							$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['EdadObSol2'] , 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);



						/*
						$pdf->MultiCell(90,0, 'Obligado solidario (Nombre(s). apellido paterno. apellido materno)
							'.$row['obsol2'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);


						$datobsex22a=" ";$datobsex22b=" ";
						if($row['datobsex22']=="Masculino"){
						$datobsex22a="X";
						}elseif($row['datobsex22']=="Femenino"){
						$datobsex22b="X";
						}else{
						$datobsex22a="";$datobsex22b="";
						}
						$pdf->MultiCell(30,0, 'Sexo
						F  ('.$datobsex22a.')   M   ('.$datobsex22b.')' , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha de Nacimiento
							'.$row['datobfechnac1d22'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(90,0, 'RFC con homoclave
							'.$row['datobnom222'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(30,0, 'CURP
							'.$row['datobappat222'] , 1, 'A', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Edad
							'.$row['datobapmat222'] , 1, 'J', 0, 1, '', '', true,0,false,true);
						*/
						




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
							'.$row['RazonSocial'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(100,0, '1)Nombre y firma del(los) representante(s) legal(es) de la persona moral solicitante:
							', 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(100,0, '2)Nombre o razon social de la persona fisica o moral que actua comoobligado solidario:
							' , 1, 'l', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(0,0, '2) Firma de la persona física que actúa como obligado solidario o nombre y firma del(los) representante(s) legal(es) de la(s) persona(s) moral(es) que actua(n) como obligado(s) solidario(s):																																													
								' , 1, 'J', 0, 1, '', '', true,1,false,true);





						$pdf->MultiCell(0,0, 'AUTORIZACIÓN RELATIVA A LA INVESTIGACION DEL HISTORIAL CREDITICIO DEL REPRESENTANTE LEGAL Y/U OBLIGADO SOLIDARIO Y/O PRINCIPAL INVERSIONISTA, PERSONA FISICA																																															
						Por este conducto solicito(amos) y autorizo(amos) expresamente a SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R para que a través de sus funcionarios facultados lleve a cabo investigaciones sobre mi(nuestro) comportamiento crediticio en las sociedades de información crediticia que estimen convenientes. Asimismo, declaro(amos) que conozco(emos) la naturaleza y alcance de la información que se solicitará, del uso que SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R. hará de tal información y de que ésta podrá realizar consultas periódicas de mi(nuestro) historial crediticio, consintiendo que esta autorización se encuentre vigente por un período de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos una relación jurídica. Estoy(amos) consciente(s) y acepto(amos) que este documento quede bajo la propiedad de SERVICIOS FINANCIEROS DEL GUADIANA S.A. DE C.V. SOFOM E.N.R  y/o de la sociedad de información crediticia consultada para efectos de control y cumplimiento del artículo 28 de la Ley para Regular a las Sociedades de Información Crediticia.																			
						' , 0, 'L', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(70,0, 'Nombre del representante legal
							'.$row['ContEmpNombre'].' '.$row['ContEmpSegNombre'].' '.$row['ContEmpApPat'].' '.$row['ContEmpApMat'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'RFC del representante legal
							'.$row['ContEmpRFC'], 1, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Firma del representante legal
							' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Calle y No.
							'.$row['ContEmpDireccion'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Colonia
							'.$row['ContEmpColonia'] , 1, 'L', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Nombre del obligado solidario  persona fisica
							'.$row['NomObSol'].' '.$row['ApPatObSol'].' '.$row['ApMatObSol'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'RFC del obligado solidario persona fisica
							'.$row['RFCObSol'], 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Firma del obligado solidario
							' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Calle y No.
							'.$row['DirObSol'] , 1, 'J', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Colonia
							'.$row['ColObSol'] , 1, 'l', 0, 1, '', '', true,0,false,true);
						$pdf->Ln(1);
						$pdf->MultiCell(60,0, 'Ciudad
							'.$row['CdObSol'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Estado
							'.$row['EdoObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Codigo Postal
							'.$row['CPObSol'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Telefono(s)
							'.$row['TelObSol'].' - '.$row['MovObSol'], 1, 'l', 0, 1, '', '', true,0,false,true);
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
							'.$row['ClaveCon'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(60,0, 'Nombre consecionario o distribuidor
							'.$row['NomCon'] , 1, 'L', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Fecha
							'.$row['Fecha'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(1);

						$pdf->MultiCell(70,0, 'Nombre del vendedor
							'.$row['NomVend'] , 1, 'l', 0, 0, '', '', true,0,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Nombre y firma del gerente general
							'.$row['GerenteGral'] , 1, 'l', 0, 1, '', '', true,0,false,true);
						$pdf->MultiCell(0,0, 'Datos de inscripcion en el registro publico de contratos de adhesion de la procuradoria federal del consumidor:2999-2012 del 30 de abril del 2012
							' , 0, 'J', 0, 1, '', '', true,1,false,true);


						$pdf->SetAlpha(0.2);
						$pdf->RoundedRect(15, 56, 186, 164, 6.5, '0000','DF',null ,array(255, 255, 200) );

						$pdf->AddPage();

						$pdf->MultiCell(70,0, 'SERVICIOS FINANCIEROS DEL GUADIANA S.A DE C.V SOFOM E.N.R
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, '
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'FORMATO DE IDENTIFICACION DEL CLIENTE POR CLASIFICACION DE RIESGO
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(80,0, 'Fecha: '.$row['Fecha'] , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(20,0, 'Tipo de cliente:' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(10,0, 'Nuevo' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, ' ' , 1, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, '   Actualizacion cliente' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(5,0, ' ' , 1, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(4);
						$style2 = array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));


						$pdf->MultiCell(70,0, 'Datos generales del cliente
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						//-------------------------------------------------
						$pdf->MultiCell(0,0, 'Nombre o razon social       '.$row['RazonSocial'].' 
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 53, 200, 53, $style2);
						$pdf->MultiCell(0,0, 'Numero de cliente     '.$row[0].' 
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 58, 200, 58, $style2);
						$pdf->MultiCell(0,0, 'Domicilio particular      '.$row['DireccionPM'].' 
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(15, 63, 200, 63, $style2);
						//------------------------------------
						$pdf->MultiCell(100,0, 'Colonia   '.$row['ColoniaPM'].' 
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->Line(15, 68, 100, 68, $style2);
						$pdf->MultiCell(0,0, 'Codigo postal:    '.$row['CPPM'].' 
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 68, 200, 68, $style2);
						//---------------------------------------
						$pdf->MultiCell(100,0, 'Delegacion o municipio     
							' , 0, 'J', 0, 0, '', '', true,1,false,true);
						$pdf->Line(15, 74, 100, 74, $style2);
						$pdf->MultiCell(0,0, 'Ciudad o poblacion:     '.$row['CiudadPM'].' 
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 74, 200, 74, $style2);
						//--------------------------------------
						$pdf->MultiCell(100,0, 'Estado o provincia      '.$row['EstadoPM'].' 
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->Line(15, 79, 100, 79, $style2);
						$pdf->MultiCell(0,0, 'Pais:          
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Line(115, 79, 200, 79, $style2);
						//--------------------------------------
						$pdf->MultiCell(100,0, 'Inicio de operaciones     '.$row['InOperacionesPM'].' 
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$pdf->Line(15, 84, 100, 84, $style2);
						$pdf->MultiCell(0,0, 'RFC:      '.$row['RFCPM'].' 
							' , 0, 'J', 0, 1, '', '', true,1,false,true);
						$pdf->Line(115, 84, 200, 84, $style2);

						$pdf->MultiCell(70,0, 'Calificacion de grado de riesgo
							' , 0, 'J', 0, 1, '', '', true,1,false,true);

						$pdf->Cell(25, 0, 'Segmento del cliente', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(3);
						$pdf->MultiCell(60,0, 'Resultado de la calificacion de grado de riesgo*:
							' , 0, 'J', 0, 0, '', '', true,1,false,true);

						$gradries=array(1=>array('Bajo'=>'X','Medio'=>' ','Alto'=>' ',''=>' '),
										2=>array('Bajo'=>' ','Medio'=>'X','Alto'=>' ',''=>' '),
										3=>array('Bajo'=>' ','Medio'=>' ','Alto'=>'X',''=>' '));
						
						$pdf->MultiCell(40,0, 'Bajo('.$gradries[1][$row['GradoRiesgo']].')' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(40,0, 'Medio('.$gradries[2][$row['GradoRiesgo']].')' , 0, 'L', 0, 0, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Alto(Requisitar el formato de reporte y aprobacion)('.$gradries[3][$row['GradoRiesgo']].')' , 0, 'L', 0, 1, '', '', true,1,false,true);


						$pdf->Ln(4);

						$matrizgradreisgo=array(
            1=> array('Vulnerable' => 3, 'Informal' =>2, 'Otra'=>1,''=>''),
            2=> array('1-3 años' =>3 ,'4-6 años'=>2, '7-10 años'=>1, 'N/A'=>0,''=>'' ),
            3=> array('Prestamo'=>1,'Arrendamiento'=>2,'Otros'=>3,''=>''),
            4=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            5=> array('1 a 2'=>1,'3 a 4'=>2,'5 o mas'=>3,'N/A'=>0,''=>''),
            6=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            7=> array('1% - 49%'=>1,'50% - 74%'=>2,'75% - 100%'=>3,''=>''),
            8=> array('$18000 - $20000'=>1,'$21000 - $25000'=>2,'mas de $25000'=>3,''=>''),
            9=> array('1 a 3'=>1,'4 a 6'=>2,'7 a 10'=>3,''=>''),
            10=>array('Transferencia'=>1,'Cheque'=>2,'Efectivo'=>3,''=>''),
            11=>array('Agencia'=>1,'Internet'=>2,'Otro'=>3,''=>''),
            12=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            13=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            14=>array('Guerrero-Michoacan-Tamaulipas-Morelos'=>3,'Durango-Chihuhua-Jalisco-México-CD México-Sonora'=>2,'Puebla-Coahuila-Zcatecas-Hidalgo-Durango'=>1,''=>''),
            15=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            16=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            17=>array('México'=>1,'Otros'=>2,'Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar'=>3,''=>''),
            18=>array('18 - 26'=>3,'27 - 36'=>2,'37 - 56'=>1,'56 en adelante'=>3,''=>''),
            19=>array('0 - 3'=>3,'4 - 7'=>2,'8 en adelante'=>1,''=>''),
            20=>array('Regimen agape'=>3,'Regimen general de ley'=>1,'Regimen Donatarios'=>2,'Regimen Coordinados'=>3,''=>''),
            21=>array('Incorporacion Fiscal'=>3,'Servicios Profesionales'=>3,'Intereses'=>3,'Asalariado'=>1,'Arrendamiento'=>2,'Actividad empresarial'=>2,'Regimen Agape'=>3,''=>'')
            );

        $sumagradoriesgo=
        $matrizgradreisgo[1][$row['Antiguedad_ObjetoSocial']]
        +$matrizgradreisgo[2][$row['Antiguedad_Cliente']]
        +$matrizgradreisgo[3][$row['Naturaleza_Operaciones']]
        +$matrizgradreisgo[4][$row['Numero_Beneficiarios']]
        +$matrizgradreisgo[5][$row['Numero_TercerosRelacionados']]
        +$matrizgradreisgo[6][$row['PEPs_Relacionados']]
        +$matrizgradreisgo[7][$row['Alerta_Reputacional']]
        +$matrizgradreisgo[8][$row['Volumen_Esperado']]
        +$matrizgradreisgo[9][$row['Frecuencia_Esperada']]
        +$matrizgradreisgo[10][$row['Instrumento_Monetario']]
        +$matrizgradreisgo[11][$row['Canales_MediosUtilizados']]
        +$matrizgradreisgo[12][$row['Pais_EstadoOficial']]
        +$matrizgradreisgo[13][$row['Pais_EstadoResidencia']]
        +$matrizgradreisgo[14][$row['Pais_EstadoOperacion']]
        +$matrizgradreisgo[15][$row['Origen_Recursos']]
        +$matrizgradreisgo[16][$row['Destino_Recursos']]
        +$matrizgradreisgo[17][$row['Pais_EstadoResidenciaTerceros']]
        +$matrizgradreisgo[18][$row['Edad_Cliente']]
        +$matrizgradreisgo[19][$row['An_Construccion']]
        +$matrizgradreisgo[20][$row['Reg_TributacionPM']]
        +$matrizgradreisgo[21][$row['Reg_TributacionPF']];

						$tbl = '

						<table border="0" cellpadding="2" cellspacing="2" nobr="true">
						 <tr>
						  <th width="360" colspan="3" align="center">Variables de riesgo</th>
						 </tr>
						 <tr>
						  <td>Actividad objeto social</td>
						  <td >'.$row['Antiguedad_ObjetoSocial'] .' </td>
						  <td >'. $matrizgradreisgo[1][$row['Antiguedad_ObjetoSocial']].'</td>
						 </tr>
						 <tr>
						  <td>Antiguedad del cliente</td>
						  <td>'.$row['Antiguedad_Cliente']  .'</td>
						  <td>'.$matrizgradreisgo[2][$row['Antiguedad_Cliente']].'</td>
						 </tr>
						 <tr>
						  <td> Naturaleza de las operaciones</td>
						  <td> '.$row['Naturaleza_Operaciones'] .'</td>
						  <td>'.$matrizgradreisgo[3][$row['Naturaleza_Operaciones']].'</td>
						 </tr>
						 <tr>
						  <td> Q de beneficios</td>
						  <td> '.$row['Numero_Beneficiarios'] .'</td>
						  <td> '.$matrizgradreisgo[4][$row['Numero_Beneficiarios']].' </td>
						 </tr>
						  <tr>
						  <td> Q de terceros relacionados (apoderados y cotitulares)</td>
						  <td>'. $row['Numero_TercerosRelacionados'] .'</td>
						  <td> '.$matrizgradreisgo[5][$row['Numero_TercerosRelacionados']].'  </td>
						 </tr>
						  <tr>
						  <td> Peps relacionados</td>
						  <td> '.$row['PEPs_Relacionados'] .'</td>
						  <td> '.$matrizgradreisgo[6][$row['PEPs_Relacionados']].' </td>
						 </tr>
						  <tr>
						  <td> Alerta reputacional</td>
						  <td> '.$row['Alerta_Reputacional'] .'</td>
						  <td> '.$matrizgradreisgo[7][$row['Alerta_Reputacional']].' </td>
						 </tr>
						  <tr>
						  <td> Volumen esperado(Monto)</td>
						  <td> '.$row['Volumen_Esperado'] .'</td>
						  <td> '.$matrizgradreisgo[8][$row['Volumen_Esperado']].'  </td>
						 </tr>
						  <tr>
						  <td> Frecuencia esperada (No. de veces)</td>
						  <td> '.$row['Frecuencia_Esperada'] .' </td>
						  <td> '.$matrizgradreisgo[9][$row['Frecuencia_Esperada']].'  </td>
						 </tr>
						  <tr>
						  <td> Instrumento monetario utilizado</td>
						  <td> '.$row['Instrumento_Monetario'] .' </td>
						  <td> '.$matrizgradreisgo[10][$row['Instrumento_Monetario']].' </td>
						 </tr>
						  <tr>
						  <td> Canales o medios utilizados</td>
						  <td> '.$row['Canales_MediosUtilizados'] .' </td>
						  <td> '.$matrizgradreisgo[11][$row['Canales_MediosUtilizados']].' </td>
						 </tr>
						  <tr>
						  <td> Pais| estado oficial</td>
						  <td> '.$row['Pais_EstadoOficial'] .'</td>
						  <td> '.$matrizgradreisgo[12][$row['Pais_EstadoOficial']].' </td>
						 </tr>
						  <tr>
						  <td> Pais|Estado de residencia</td>
						  <td> '.$row['Pais_EstadoResidencia'] .'</td>
						  <td>'.$matrizgradreisgo[13][$row['Pais_EstadoResidencia']].'  </td>
						 </tr>
						  <tr>
						  <td> Pais|Estado de operacion frecuencia</td>
						  <td> '.$row['Pais_EstadoOperacion'] .'</td>
						  <td> '.$matrizgradreisgo[14][$row['Pais_EstadoOperacion']].'  </td>
						 </tr>
						  <tr>
						  <td> Origen de los recursos</td>
						  <td> '.$row['Origen_Recursos'] .'</td>
						  <td>'.$matrizgradreisgo[15][$row['Origen_Recursos']].'  </td>
						 </tr>
						 <tr>
						  <td> Destino de recursos</td>
						  <td> '.$row['Destino_Recursos'] .' </td>
						  <td> '.$matrizgradreisgo[16][$row['Destino_Recursos']].' </td>
						 </tr>
						 <tr>
						  <td> Pais|Estado residencia de terceros relacionados</td>
						  <td> '.$row['Pais_EstadoResidenciaTerceros'] .' </td>
						  <td> '.$matrizgradreisgo[17][$row['Pais_EstadoResidenciaTerceros']].'  </td>
						 </tr>';

						 if($row['TipoCliente']=="Persona Fisica"){
						 	$tbl.='<tr>
						  <td> Edad del Cliente</td>
						  <td> '.$row['Edad_Cliente'] .' </td>
						  <td> '.$matrizgradreisgo[18][$row['Edad_Cliente']].' </td>
						 </tr>
						 <tr>
						  <td> Regimen de Tributación</td>
						  <td> '.$row['Reg_TributacionPF'] .' </td>
						  <td> '.$matrizgradreisgo[21][$row['Reg_TributacionPF']].'  </td>
						 </tr>';
						 }
						 if($row['TipoCliente']=="Persona Moral"){
						 	$tbl.='<tr>
						  <td> Años de Constitución</td>
						  <td> '.$row['An_Construccion'] .' </td>
						  <td> '.$matrizgradreisgo[19][$row['An_Construccion']].' </td>
						 </tr>
						 <tr>
						  <td> Regimen de Tributación</td>
						  <td> '.$row['Reg_TributacionPM'] .' </td>
						  <td> '.$matrizgradreisgo[20][$row['Reg_TributacionPM']].'  </td>
						 </tr>';
						 }

				$tbl.=' <tr>
						  <td>Suma total</td>
						  <td> </td>
						  <td> '.$sumagradoriesgo.' </td>
						 </tr></table>';


						$pdf->writeHTMLCell(160,0,15,110,$tbl,0,0,false, false, '');
						$pdf->MultiCell(0,0, 'Grado de riesgo' , 0, 'C', 0, 1, '', '', true,1,false,true);

						$pdf->MultiCell(0,0, 'Alto mas de 45 ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Medio  30-45  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->MultiCell(0,0, 'Menor a 29  ' , 0, 'R', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(100);
						$pdf->MultiCell(0,0, 'Resultado de calificacion de grado de riesgo:    '.$row['GradoRiesgo'] , 0, 'L', 0, 1, '', '', true,1,false,true);
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

						$pdf->Cell(0, 0, 'FORMATO DE IDENTIFICACION Y CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->SetFont('times', 'B', 6);
						$pdf->Cell(195, 0, 'PERSONA MORAL', '', 1, 'l', 0, '', 0, false, 'T', 'C');
						$pdf->SetFont('times', '', 6);
						$pdf->Ln(5);

						$pdf->Cell(95, 0, 'Fecha de ingreso: '.$row['FechaRegistro'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(95, 0, 'Numero de cliente:  '.$row[0], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						//$pdf->Line(15, 54, 200, 54, $style2);

						$pdf->Cell(55, 0, 'DENOMINACIÓN O RAZÓN SOCIAL', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, $row['RazonSocial'], 'B', 1, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(2);
						$pdf->Cell(55, 0, 'GIRO MERCANTIL, ACTIVIDAD U OBJETO SOCIAL', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, $row['ActPrinPM'], 'B', 1, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'NACIONALIDAD', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, '', 'B', 1, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'RFC CON HOMO-CLAVE', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, $row['RFCPM'], 'B', 1, 'L', 0, '', 0, false, 'T', 'C'); 

						$pdf->Ln(2);
						$pdf->Cell(21, 0, 'DOMICILIO (CALLE)', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(50, 0, $row['DireccionPM'], 'B', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(10, 0, 'NUMERO', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, $row['NumDireccionPM'], 'B', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(18, 0, 'CÓDIGO POSTAL', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(20, 0, $row['CPPM'], 'B', 1, 'L', 0, '', 0, false, 'T', 'C'); 

						$pdf->Ln(2);
						$pdf->Cell(11, 0, 'COLONIA', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(40, 0, $row['ColoniaPM'], 'B', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(10, 0, 'ESTADO', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, $row['EstadoPM'], 'B', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(12, 0, 'TELÉFONO', '', 0, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(30, 0, $row['TelPM'], 'B', 1, 'L', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(2);

						$pdf->Cell(5, 0, '', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(60, 0, $row['ConstEmpresaPM'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, $row['EmailPM'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(5, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(60, 0, 'FECHA DE CONSTITUCIÓN', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, 'CORREO ELECTRÓNICO', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, 'NÚMERO DE SERIE DE LA FIEL', '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(2);

						$pdf->Cell(5, 0, '', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(80, 0, $row['ContEmpNombre'].' '.$row['ContEmpSegNombre'].' '.$row['ContEmpApPat'].' '.$row['ContEmpApMat'] , 'B', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(5, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(60, 0, $row['ContEmpPuesto'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(5 , 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(80, 0, 'NOMBRE DEL ADMINISTRADOR ,DIRECTOR,GERENTE GENERAL O APODERADO LEGAL', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(5, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, 'PUESTO', '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(2);

						$pdf->Cell(5, 0, '', 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(60, 0, $row['ingrcomp1']+$row['ingrcomp2']+$row['ingrcomp3']+$row['ingrcomp4']+$row['ingrcomp5']+$row['ingrnocomp1']+$row['ingrnocomp2']+$row['ingrnocomp3']+$row['ingrnocomp4']+$row['ingrnocomp5'] , 'B', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, '', 'B', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(5, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(60, 0, 'INGRESOS  APROXIMADOS', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, 'GASTOS MENSUALES APROXIMADOS', '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(60, 0, 'UTILIDAD MENSUAL APROX', '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(5);


						



						$pdf->SetFont('times', 'B', 6);
						$pdf->Cell(195, 0, 'DOCUMENTACION DE IDENTIFICACION', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->SetFont('times', '', 6);
						$pdf->Cell(35, 0, 'Credencial para votar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['INE'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['INEurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Pasaporte cedula profecional', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['pasaporte'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['pasaporteurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Cartilla de servicio militar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['cartilla'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['cartillaurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Licencia para conducir', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['licencia'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['licenciaurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(35, 0, 'Otra', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['otra'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						if($row['otraurl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia  :'.$adjuntacion, '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Especificar', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['inotra'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Se cotejo vs original:  '.$row['secotejo'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						
						$pdf->Ln(5);
						$pdf->SetFont('times', 'B', 6);
						$pdf->Cell(60, 0, 'OTROS DOCUMENTOS QUE SE ADJUNTAN', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						$pdf->SetFont('times', '', 6);
						$pdf->Cell(50, 0, 'SE ADJUNTA ACTA CONSTITUTIVA.', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						if($row['acta']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');

						$pdf->Ln(2);
						$pdf->Cell(50, 0, 'SE ADJUNTA CÉDULA DE ID FISCAL.', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						if($row['cedula']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);
						if($row['poderes']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}

						$pdf->Cell(50, 0, 'SE ADJUNTAN PODERES.', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);
						if($row['adddomiciliourl']!=''){
							$adjuntacion='Si';
						}else{
							$adjuntacion='No';
						}

						$pdf->Cell(50, 0, 'SE ADJUNTA COMPROBANTE DE DOMICILIO.', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Se adjunta copia:  '.$adjuntacion, '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(50, 0, 'FECHA DE COMPROBANTE DE DOMICILIO', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fechadom'] , '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(50, 0, 'DOMICILIO MANIFESTADO COINCIDE CON LA ID', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['domId'] , '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						//agregar si o no desde base de datos
						
						

						//$pdf->AddPage();

						$pdf->SetFont('times', 'B', 6);
						$pdf->Cell(195, 0, 'BENEFICIARIO', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->SetFont('times', '', 6);
						$pdf->Ln(5);
						$pdf->Cell(75, 0, $row['BeneficiarioApPat'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioApMat'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioNom'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Apellido paterno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Apellido materno', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Nombre(s)', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['BeneficiarioDom'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioCol'], '', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, $row['BeneficiarioCP'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioPais'], '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(75, 0, 'Domicilio (calle)', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Colonia', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, 'Codigo postal', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Pais', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(75, 0, $row['BeneficiarioTel'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, $row['BeneficiarioCURP'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioRFC'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Telefono', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'CURP', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'RFC', 'T', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioParent'].'  '.$row['BeneficiarioPorciento'].'%', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, $row['BeneficiarioFechNac'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioMun'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Parentesco/porciento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'Fecha de nacimiento', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'Municipio', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioEstado'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, $row['BeneficiarioEstCivil'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, $row['BeneficiarioSocConyugal'], '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Estado', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(30, 0, 'Estado civil', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(0, 0, 'Sociedad conyugal', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);
						$pdf->Cell(75, 0, $row['BeneficiarioOcupacion'], '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, '', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', '', 1, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(75, 0, 'Ocupacion o profecion', 'T', 0, 'C', 0, '', 0, false, 'T', 'C'); 
						$pdf->Cell(35, 0, '', 'T', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', 'T', 1, 'C', 0, '', 0, false, 'T', 'C');






						$pdf->AddPage();

						$pdf->SetFont('times', 'B', 6);
						$pdf->Cell(0, 0, 'PERFIL TRANSSACCIONAL INICIAL', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->SetFont('times', '', 6);
						$pdf->Ln(5);
						$pdf->Cell(0, 0, 'LOS SERVICIOS QUE SE PRETENDEN REALIZAR EN LA SOFOM SON:', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);


						$pdf->Cell(12, 0, 'CRÉDITO', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(90, 0, '', 'B', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(10, 0, '', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', 'B', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(80, 0, 'IMPORTE ESTIMADO DE OPERACIONES DISTINTAS A CRÉDITOS MENSUAL:', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(32, 0, '', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'FIRMA DEL CLIENTE (O PROSPECTO)', '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Ln(2);

						$pdf->Cell(25, 0, 'IMPORTE DEL CRÉDITO', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(77, 0, '', 'B', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(10, 0, '', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, '', 'B', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);


						$pdf->Cell(25, 0, 'DESTINO DEL CRÉDITO', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(77, 0, '', 'B', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(10, 0, '', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(0, 0, 'FIRMA DEL FUNCIONARIO DE LA SOFOM', '', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(0, 0, '', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->SetFont('times', 'B', 6);
						$pdf->Cell(25, 0, 'OTROS DATOS', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->SetFont('times', '', 6);
						$pdf->Cell(77, 0, '', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(10, 0, 'Fecha: '.$row['Fecha'] , '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'NÚMERO DE BIENES INMUEBLES DE SU PROPIEDAD: ', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(25, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'VALOR ESTIMADO: ', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(25, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'CUENTA CON AUTO  ', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(25, 0, 'Si( ) No( )', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'MARCA ', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(25, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'MODELO ', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(25, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(2);

						$pdf->Cell(55, 0, 'VALOR APROXIMADO ', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(25, 0, '', 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);

						$pdf->Cell(35, 0, 'Ingresos comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp1'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp2'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp2'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['ingrcomp3'] , 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp3'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0,$row['ingrcomp4'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp4'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');


						$pdf->Cell(35, 0, 'Ingresos comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrcomp5'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrcomp5'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(1)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp1'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(35, 0, 'Ingresos no comprobables(2)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp2'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp2'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(3)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp3'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp3'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(4)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp4'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp4'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(35, 0, 'Ingresos no comprobables(5)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp5'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Fuente', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['fuenteingrnocomp5'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);

						$pdf->Cell(35, 0, 'Total Ingresos', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['ingrnocomp5']+$row['ingrnocomp4']+$row['ingrnocomp3']+$row['ingrnocomp2']+$row['ingrnocomp1']+$row['ingrcomp5']+$row['ingrcomp4']+$row['ingrcomp3']+$row['ingrcomp2']+$row['ingrcomp1'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(10);



						

						//$pdf->AddPage();



						$pdf->MultiCell(0,0, ' ¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?
						' , 0, 'A', 0, 1, '', '', true,1,false,true);
						$pdf->Ln(8);
						$Peps = array("Si"=>  array( "Si"=> "X","No"=>"  " ) ,
										"No"=>  array( "Si"=> " ","No"=>"X" )
						 );
						$pdf->Cell(45, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Si('.$Peps["Si"][$row['tienepeprel']].' )', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(15, 0, '    ', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'No( '.$Peps["No"][$row['tienepeprel']].' )', '', 1, 'C', 0, '', 0, false, 'T', 'C');

						$pdf->Cell(45, 0, 'En caso de si', '', 1, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(7);
						$pdf->Cell(45, 0, '¿Quien?(Nombre)', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['quienpep'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, 'Parentesco', '', 0, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['parentescopep'], 'B', 1, 'C', 0, '', 0, false, 'T', 'C');
						$pdf->Ln(5);
						$pdf->Cell(45, 0, 'Puesto', '', 0, 'L', 0, '', 0, false, 'T', 'C');
						$pdf->Cell(45, 0, $row['puestorelpep'], 'B', 0, 'C', 0, '', 0, false, 'T', 'C');
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

						/*
						// write some JavaScript code


						// force print dialog


						// set javascript
						$pdf->IncludeJS('print(true);');

						*/


						//Close and output PDF document
						$pdf->Output('example_004.pdf', 'I');

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
						//============================================================+
						// END OF FILE
						//============================================================
		}else{
			echo "Error -- ¡¡Tipo de Cliente Contiene errores!!";
		}


		break;









	default:
echo "Error Up";
		break;
}


   
    
  

 /*                  

                         */
?>