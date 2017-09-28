<?php
switch ($_REQUEST['function']) {
	case 'solicitudesdelcliente':
		include('Conexion2.php');
		$rawdata = array();
            $i=0;
			$result=mysqli_query($cnx,"select solicitudes.Id,solicitudes.TipoCredito,solicitudes.Status,solicitudes.StatusValidacion from solicitudes inner join clientes on solicitudes.FolioCliente=clientes.id WHERE clientes.id='".$_REQUEST['cliente']."' order by solicitudes.Id DESC ");
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


		break;
	case 'obtenclienteporrfc':
		include 'Conexion2.php';
		$result=mysqli_query($cnx,"select * from clientes where RFCPM='".$_REQUEST['rfc']."' and TipoCliente='Persona Moral'");
		if($result===false){
			echo "Error -- ¡¡Consulta no realizada!!";
		}
		$row=mysqli_fetch_array($result);
		echo json_encode($row);



		break;
	case 'obtenclienteporrazsoc':
		include('Conexion2.php');
		$rawdata = array();
            $i=0;
			$result=mysqli_query($cnx,"select * from clientes where RazonSocial like '".$_REQUEST['razsoc']."%'");
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


		break;
	case 'obtenclienteporcurp':
		include('Conexion2.php');
		$result=mysqli_query($cnx,"select * from clientes where CURPPF='".$_REQUEST['curp']."' and TipoCliente='Persona Fisica'");
		if($result===false){
			echo "Error -- ¡¡Consulta no realizada!!";
		}
		$row=mysqli_fetch_array($result);
		echo json_encode($row);
		break;
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
