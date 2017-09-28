<?php
switch ($_REQUEST['function']) {
	case 'obtensolicitudporid':
		include('Conexion2.php');
		$result=mysqli_query($cnx,"select * from solicitudes where Id='".$_REQUEST['id']."'");
		if($result===false){
			echo "Error -- ¡¡Consulta no realizada!!";
			break;
		}

		echo json_encode(mysqli_fetch_array($result));
		# code...
		break;
	
	default:
		# code...
		break;
}



?>