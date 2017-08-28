<?php
session_start();
include('Conexion2.php');

$result=mysqli_query($cnx,"select llave_autorizacion from acceso where user='".$_SESSION['usser']."' and llave_autorizacion='".$_REQUEST['key']."'");



if (mysqli_num_rows($result) != 0){
	echo "200";
}else{
	echo "404";
}

$code=generar_clave();


mysqli_query($cnx,"update acceso set llave_autorizacion='".$code."' where user='".$_SESSION['usser']."'");




function generar_clave($longitud=6){ 
       $cadena="[^A-Z0-9]"; 
       return substr(eregi_replace($cadena, "", md5(rand())) . 
       eregi_replace($cadena, "", md5(rand())) . 
       eregi_replace($cadena, "", md5(rand())), 
       0, $longitud); 
} 

?>