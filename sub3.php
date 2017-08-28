<?php
					$id=$_GET['id'];
					$com=$_GET['comentario'];
				 	$stat=$_GET['status'];
					include('Conexion2.php');
					if (stristr($id, 'SA')== TRUE) {
 $dato=mysqli_fetch_array(mysqli_query($cnx,"select Status from solicitudpfa where Folio_Sol='$id'"));
 	 if($dato['Status']!="Aceptada" && $dato['Status']!="Rechazada"){
     mysqli_query($cnx,"update solicitudpfa set Status='$stat',Comentarios='$com' where Folio_Sol='$id'");
		//echo "<script>window.location='solicitudesPendientes.php';</script>"
    echo "realizado";
		 }else{
		 //echo "<script>alert('La Solicitud Ya Fue Validada');//window.location='indexmenu.php';</script>";
		 echo "Solicitud ya validada";
		 }
  }
  elseif (stristr($id, 'SN')== TRUE) {
    $dato=mysqli_fetch_array(mysqli_query($cnx,"select Status from solicitudpfna where Folio_Sol='$id'"));
    	 if($dato['Status']!="Aceptada" && $dato['Status']!="Rechazada"){
     mysqli_query($cnx,"update solicitudpfna set Status='$stat',Comentarios='$com' where Folio_Sol='$id'");
		//echo "<script>window.location='solicitudesPendientes.php';</script>"
    echo "realizado";
		 }else{
		 //echo "<script>alert('La Solicitud Ya Fue Validada');//window.location='indexmenu.php';</script>";
		 echo "Solicitud ya validada";
		 }
  }
    elseif (stristr($id, 'SM')== TRUE) {
 $dato=mysqli_fetch_array(mysqli_query($cnx,"select Status from solicitudpm where Folio_Sol='$id'"));
 	 if($dato['Status']!="Aceptada" && $dato['Status']!="Rechazada"){
     mysqli_query($cnx,"update solicitudpm set Status='$stat',Comentarios='$com' where Folio_Sol='$id'");
		//echo "<script>window.location='solicitudesPendientes.php';</script>"
    echo "realizado";
		 }else{
		 //echo "<script>alert('La Solicitud Ya Fue Validada');//window.location='indexmenu.php';</script>";
		 echo "Solicitud ya validada";
		 }
  }
		
	
		
		 ?>