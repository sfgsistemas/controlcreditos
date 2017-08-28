<?php 
$cnx=mysqli_connect("localhost","root","","plan piso")or die(mysql_ERROR().'Error de conexion');
mysqli_query($cnx,"SET NAMES 'utf8'");


$monto=$_REQUEST['monto'];
$chasis=$_REQUEST["chasis"];

if ($monto=="" && $chasis=="") {
echo "no hay nada";
}
else{
mysqli_query($cnx," update ficha SET fecha_pago = CURDATE(), monto_pago = '$monto' WHERE ficha.No_chasis = '$chasis';");

echo "OPERACION REALIZADA";
}




?>