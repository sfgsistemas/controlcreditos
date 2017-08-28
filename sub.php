 <?php


		 
		  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudpfa where Status='Aceptada' order by Id desc");
 
  if(mysqli_num_rows($result) == 0){
  echo "<h4>No Hay Solicitudes Aceptadas</h4>";
  }else{

			
		echo	"<h4>Solicitudes Aceptadas</h4>
			<table width='20%' border='1' class='table table-hover table-inverse'>
  <tr>
    <td>No Solicitud</td>
    <td>Solicitante</td>
  </tr>";
 
   while($row=mysqli_fetch_array($result)){
 echo 
 " <tr>
    <td>" .$row['Folio_Cliente']."</td>
    <td>".$row['Folio_Sol']."</td>
  </tr>";

			}
		
			echo "</table>";
			
 		  }
		 
		 
	echo "</div>";

		 
		 
		 
		 ?>