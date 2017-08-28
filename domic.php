<?php 

switch ($_REQUEST['function']) {
	case 'carga':
				include('conexion2.php');

				$result= mysqli_query($cnx,"select * from domi");
				$regi = array();
				while (
				$row=mysqli_fetch_array($result)
					) {
					# code...
				$regi[]=$row;
				}
				echo json_encode($regi);
		break;
	case 'guardar':

include('conexion2.php');
	$banco = $_REQUEST['tags'];
	$Referencia = $_REQUEST['Referencia'];
	$Numerica = $_REQUEST['RefNumerica'];
	$titular = $_REQUEST['titular'];
	$clabe = $_REQUEST['clabe'];
	$cuenta = $_REQUEST['titularCuenta'];

			 mysqli_query($cnx,"insert into domi( Referencia, RefNumerica, Titular_servicio, Banco, CLABE, Titular_cuenta) VALUES ('$Referencia','$Numerica','$titular','$banco ','$clabe',	'$cuenta')");
		break;
	default:
		# code...
		break;
}






























 ?>