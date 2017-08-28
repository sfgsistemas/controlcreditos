  <?php
	
		 
		 	$solicitudNo=$_GET['textfield'];
		 	
  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudes where id='$solicitudNo'");
 
  if(mysqli_num_rows($result) == 0){
  echo "<h4>No Se Encontro El Registro</h4>";
  }else{
   echo'Encontrado';
   $ur="validasolicitud.php?id=";
			
		echo	"
    <table width='20%' border='0' class='table table-sm table-inverse'>
  <tr>
    <td>No Solicitud</td>
    <td>Solicitante</td>
	<td>Status</td>
  </tr>";

   while($row=mysqli_fetch_array($result)){

 echo "<tr class='bg-primary' >
    <td  id='".$row['Id']."' onClick= 'su(this.id)'><input name='textfield2' type='button' id='467' class='btn btn-warning' value='".$row['Id']."'></td>
    <td >". $row['NomSolicitante']."</td>
	<td >". $row['StatusSolicitud'] ."</td>
  </tr>
</table>
<p>&nbsp;</p>";
			
		
			}
 		  }
  
		 ?>

		 