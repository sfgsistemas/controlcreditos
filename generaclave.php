<?php
session_start();
include('Conexion2.php');
$code=generar_clave();
mysqli_query($cnx,"update acceso set llave_autorizacion='".$code."' where id='".$_REQUEST['userid']."'");







function generar_clave($longitud=6){ 
       $cadena="[^A-Z0-9]"; 
       return substr(eregi_replace($cadena, "", md5(rand())) . 
       eregi_replace($cadena, "", md5(rand())) . 
       eregi_replace($cadena, "", md5(rand())), 
       0, $longitud); 
} 
//Ejemplo de utilizaci�n para una clave de 10 caracteres: 
echo 'Clave aleatoria: '.$code.''; 
?>