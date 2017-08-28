<?php

if($_REQUEST['panel']=="panel1"){
	include('Conexion2.php');
	$result=mysqli_query($cnx,"select * from tiposcreditos");
	if($result===false){
		exit();
	}

	echo '<table class="stack">';

		echo '<thead>
				<tr>
					<td>Crédito</td>
					<td>Tasa de Interes</td>
					<td>Comisión por Apertura</td>
				</tr>
			  </thead>';



	while($row=mysqli_fetch_array($result)){
		
			echo '
			  <tr>
			  	<td>'.$row['descripcion'].'</td>
			  	<td><div class="input-group"><span class="input-group-label">%</span><input class="input-group-field" type="text" id="tasa_'.$row['id'].'" name="tasa_'.$row['id'].'" value="'.$row['tasa'].'"></div></td>
			  	<td><div class="input-group"><span class="input-group-label">%</span><input class="input-group-field" type="text" id="comision_'.$row['id'].'" name="comision_'.$row['id'].'" value="'.$row['Comision_Apertura'].'"></div></td>
			  </tr>


			  ';


		
	}

	echo '</table>';


	//echo '<input name="updatecreditos" class="button" type="button" id="updatecreditos"  value="Modificar">';
}


if($_REQUEST['panel']=="updatepanel1"){
	
	include("Conexion2.php");
	
	try {
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_1']."', Comision_Apertura='".$_REQUEST['comision_1']."' where id=1");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_2']."', Comision_Apertura='".$_REQUEST['comision_2']."' where id=2");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_3']."', Comision_Apertura='".$_REQUEST['comision_3']."' where id=3");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_4']."', Comision_Apertura='".$_REQUEST['comision_4']."' where id=4");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_5']."', Comision_Apertura='".$_REQUEST['comision_5']."' where id=5");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_6']."', Comision_Apertura='".$_REQUEST['comision_6']."' where id=6");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_7']."', Comision_Apertura='".$_REQUEST['comision_7']."' where id=7");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_8']."', Comision_Apertura='".$_REQUEST['comision_8']."' where id=8");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_9']."', Comision_Apertura='".$_REQUEST['comision_9']."' where id=9");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_10']."', Comision_Apertura='".$_REQUEST['comision_10']."' where id=10");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_11']."', Comision_Apertura='".$_REQUEST['comision_11']."' where id=11");
	mysqli_query($cnx,"update tiposcreditos set tasa='".$_REQUEST['tasa_12']."', Comision_Apertura='".$_REQUEST['comision_12']."' where id=12");

	echo 'Realizado';
	} catch (Exception $e) {
		echo 'Error';
	}	
}


if($_REQUEST['panel']=="panel2"){
	include('Conexion2.php');
	$result=mysqli_query($cnx,"select * from acceso");
	if($result===false){
		exit();
	}

	echo '<table class="stack">';

		echo '<thead>
				<tr>
					<td>Usuario</td>
					<td>Llave de un solo uso</td>
					<td>Permisos</td>
				</tr>
			  </thead>';

	while($row=mysqli_fetch_array($result)){
		$checkbox1="";
		$checkbox2="";
		$checkbox3="";
		$checkbox4="";
		$checkbox5="";
		
			echo '
			  <tr>
			  	<td>'.$row['nombre'].'</td>
			  	<td>'.$row['llave_autorizacion'].'</td>
			  	 <td> <input class="button" type="button"  data-open="exampleModal2" name="modi" id="'.$row['id'].'" value="Modificar" onclick="obtendatos(this.id)"> </td>';

			  	


		
	}

	echo '</table>';


}


if($_REQUEST['panel']=="obtendata"){

	
	include('Conexion2.php');
	$result=mysqli_query($cnx,"select * from acceso where id='".$_REQUEST['dataid']."'");
	if($result===false){
		exit();
	}
	$row=mysqli_fetch_array($result);
	echo json_encode($row);
}


?>
