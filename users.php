<?php

switch ($_REQUEST['function']) {
	case 'subir':
		# code...
		
		include('Conexion2.php');
		mysqli_query($cnx,"insert into acceso (user,pass,nombre) values ('".$_REQUEST['usernick']."','".md5($_REQUEST['userpass'])."','".$_REQUEST['usernombre']."')");

		echo "Registrado";
		break;
	case 'eliminar':
		include('Conexion2.php');
		mysqli_query($cnx,"delete FROM acceso WHERE id='".$_REQUEST['id']."'");
		echo "Eliminado";
		break;

	case 'obtienelosusers':
		include('Conexion2.php');
		$rawdata = array();
            $i=0;
		$result=mysqli_query($cnx,"select id,user,nombre from acceso");
		while($row=mysqli_fetch_array($result)){
                $rawdata[$i] = $row;
                $i++;
                
            }

           echo json_encode($rawdata);
		break;

	case 'modificaruser':
		include('Conexion2.php');
		if ($_REQUEST['responsable']=='' && $_REQUEST['pass']!='') {
			# code...
			mysqli_query($cnx,"update acceso set pass='".md5($_REQUEST['pass'])."' where id='".$_REQUEST['id']."'");
			echo "¡¡Contraseña Modificada!!";
			break;
		} 
		if ($_REQUEST['responsable']=='' && $_REQUEST['pass']=='') {
			# code...
			echo "Error -- ¡¡Favor de ingresar responsable o contraseña para modificar!!";
			break;
		} 
		if ($_REQUEST['responsable']!='' && $_REQUEST['pass']=='') {
			# code...
			mysqli_query($cnx,"update acceso set nombre='".$_REQUEST['responsable']."' where id='".$_REQUEST['id']."'");
			echo "¡¡Nombre del responsable modificado!!";
			break;
		} 
		if ($_REQUEST['responsable']!='' && $_REQUEST['pass']!='') {
			# code...
			mysqli_query($cnx,"update acceso set pass='".md5($_REQUEST['pass'])."', nombre='".$_REQUEST['responsable']."' where id='".$_REQUEST['id']."'");
			echo "¡¡Registro Modificado!!";
			break;
		} 

		echo "Error -- ¡¡Registro no modificado!!";
		break;

	case 'cambiapermisos':
		include('Conexion2.php');
		mysqli_query($cnx,"update acceso set ".$_REQUEST['permiso']."='".$_REQUEST['permite']."' where id='".$_REQUEST['id']."'");
		
		break;
	default:
		# code...
	echo 'Error -- Funcion no encontrada';
		break;
}

?>