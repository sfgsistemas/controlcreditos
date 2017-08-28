<?php
include("Conexion2.php");

$result=mysqli_query($cnx,"select * from tiposcreditos where descripcion='".$_REQUEST['credito']."'");

$row=mysqli_fetch_array($result);

echo json_encode($row);

?>