<?php
$valor="";
$nombre="";
$segundonom="";
$paterno="";
$materno="";
if (isset($_GET['dato'])){
$valor=$_GET['dato'];
}
if (isset($_GET['nombre']) || isset($_GET['segundo']) || isset($_GET['paterno']) || isset($_GET['materno'])){
$nombre=$_GET['nombre'];
$segundonom=$_GET['segundo'];
$paterno=$_GET['paterno'];
$materno=$_GET['materno'];
}

//echo "nombre: ".$nombre." segundo: ".$segundonom." paterno: ".$paterno." materno: ".$materno;
//$tipocliente=$_GET['tipocliente'];
include("Conexion2.php");
//include("carpetaraiz.php");

$result=mysqli_query($cnx,"select * from pm where Folio_Cliente='$valor'");



if(mysqli_num_rows($result)>0){
 echo $valor; 
}elseif (mysqli_num_rows($result_cliente=mysqli_query($cnx,"select * from pm where NomSolicitante='$nombre'"))>0) {
     ?>  <table>
   <tr><td>Folio del Cliente</td><td>RFC</td></tr>
   <?php
    while($folio_cliente=mysqli_fetch_array($result_cliente)){
        ?>
  
        <tr id="<?php echo $folio_cliente['Folio_Cliente'];?>" onClick="$('#htmlext').load('solicitudPM.php?cliente='+this.id);"  data-close aria-label="Close reveal"><td><?php echo $folio_cliente['Folio_Cliente'];?></td><td><?php echo $folio_cliente['RFCSolicitante'];?></td></tr>
        <?php 
    }
    ?>  </table>
    <a class="button" data-close aria-label="Close reveal" onClick="document.getElementById('cliente').readOnly = true;">Cliente Nuevo</a>
    <button class="close-button" data-close aria-label="Close reveal" type="button" onClick="$('#htmlext').load('solicitudPM.php');">
    <span aria-hidden="true">&times;</span>
  </button>
   <?php
    
} else {

    
        
        echo "cliente no encontrado";
   
        
}




?>
