                       <?php


switch ($_REQUEST['function']) {
	case 'subir':


include("Conexion2.php");
	$add1 = array();
for ($con=1; $con < 11 ; $con++) { 
	if ($_FILES['file'.$con]['name']!='') {
		# code...
	# code...
	$uploadedfileload="true";
$uploadedfile_size=$_FILES['file'.$con]['size'];
$msg='';

if ($_FILES['file'.$con]['size']>200000)
{$msg=$msg."Error -- El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo";
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
if ($add1[5]!="") {	$string1="otraurl='".$add1[5]."',";}
$string6="";
if ($add1[6]!="") {	$string1="addcurpurl='".$add1[6]."',";}
$string7="";
if ($add1[7]!="") {	$string1="adddomiciliourl='".$add1[7]."',";}
$string8="";
if ($add1[8]!="") {	$string1="acta='".$add1[8]."',";}
$string9="";
if ($add1[9]!="") {	$string1="cedula='".$add1[9]."',";}
$string10="";
if ($add1[10]!="") {	$string1="poderes='".$add1[10]."',";}


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
Status='Incompleto'
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
	default:
echo "Error Up";
		break;
}


   
    
  

 /*                  

                         */
?>