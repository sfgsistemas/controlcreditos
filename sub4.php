 <?php 
		 
		  include('Conexion2.php');
  $result=mysqli_query($cnx,"select * from solicitudpfa where Status='Pendiente' order by Id desc");

  $result3=mysqli_query($cnx,"select * from solicitudpfna where Status='Pendiente' order by Id desc");
  if(mysqli_num_rows($result) == 0){
  echo "<h4>No Hay Solicitudes Pendientes</h4>";
  }else{
   
   
			
	echo 	"	<h4>Solicitudes Pendientes</h4>
			<table width='100%' border='0' class='table table-inverse'>
  <tr>
    <td>No Solicitud</td>
    <td>Solicitante</td>
  </tr>";
   
   while($row=mysqli_fetch_array($result)){
  
  echo "<tr>
   <td class='bg-warning' id=".$row['Folio_Cliente'].">".  $row['Folio_Cliente'] ."</td>
    <td class='bg-primary'>".  $row['Folio_Sol'] ."</td>
  </tr>";


			
			
			}
					
 		  }
  $result2=mysqli_query($cnx,"select * from solicitudpm where Status='Pendiente' order by Id desc");
       if(mysqli_num_rows($result2) == 0){
  echo "<h4>No Hay Solicitudes Pendientes</h4>";
  }else{
   
   
      
  echo  " <h4>Solicitudes Pendientes</h4>
      <table width='100%' border='0' class='table table-inverse'>
  <tr>
    <td>No Solicitud</td>
    <td>Solicitante</td>
  </tr>";
   
   while($row2=mysqli_fetch_array($result2)){
  
  echo "<tr>
   <td class='bg-warning' id=".$row2['Folio_Cliente'].">".  $row2['Folio_Cliente'] ."</td>
    <td class='bg-primary'>".  $row2['Folio_Sol'] ."</td>
  </tr>";


      
      
      }
          
      }
		 
		 
     ?>