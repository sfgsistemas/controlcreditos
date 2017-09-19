<?php
switch ($_REQUEST['function']) {
	case 'obtenclientepornombre':
	include('Conexion2.php');
		if($_REQUEST['nombre']!="" && $_REQUEST['ape1']!="" ){
			$rawdata = array();
            $i=0;
			$result=mysqli_query($cnx,"select * from clientes where NombrePF like '".trim($_REQUEST['nombre'])."%' and ApPatPF like '".trim($_REQUEST['ape1'])."%' and ApMatPF like '".trim($_REQUEST['ape2'])."%'");
		if($result===false){
			echo "Error -- ¡¡Consulta no realizada!!";
			break;
		}
		/*if(!mysqli_num_rows($result)>0){
			echo "Error -- ¡¡No hay Registros!!";
			break;
		}*/
		while($row=mysqli_fetch_array($result)){
            $rawdata[$i] = $row;
                $i++;
        }

        echo json_encode($rawdata);

		}else{
			echo "null";
		}
		
		break;
	case 'clientebusca':
		include('Conexion2.php');
		$result=mysqli_query($cnx,"select * from clientes where Id='".$_REQUEST['id']."'");
		if($result===false){
			echo "Error -- ¡¡Consulta no realizada!!";
			break;
		}
		/*if(!mysqli_num_rows($result)>0){
			echo "Error -- ¡¡No hay Registros!!";
			break;
		}*/
		$row=mysqli_fetch_array($result);
		echo json_encode($row);
		# code...
		break;
	
	default:
	echo "Error -- ¡¡Funcion no encontrada!!";
		# code...
		break;
}



?>
