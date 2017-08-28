
  <style>
.loader {
  color: #000;
  font-size: 15px;
  text-indent: -9999em;
  overflow: hidden;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  margin: 2px;
  position: relative;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  }
@-webkit-keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  }
@keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  }
@-webkit-keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  }
@keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
  }
  </style>
  
<?php
  
     
      $solicitudNo=strtoupper($_GET['textfield']);

      
  include('Conexion2.php');
  if (stristr($solicitudNo, 'SA-')== TRUE) {
  $result=mysqli_query($cnx,"select * from solicitudpfa where Folio_Sol='$solicitudNo'");
  $ob=mysqli_fetch_array($result,MYSQL_NUM);
  $cliente=$ob[2];
    $tab=mysqli_query($cnx,"select * from pfa where Folio_cliente='$cliente'");
    $rw=mysqli_num_rows(mysqli_query($cnx,"select * from registroxml where Folio_Sol='$solicitudNo'"));
    if($rw>0){
        $resqeq=true;
    }else{
        $resqeq=false;
    }
    
    
  }
  elseif (stristr($solicitudNo, 'SN-')== TRUE) {
  $result1=mysqli_query($cnx,"select * from solicitudpfna where Folio_Sol='$solicitudNo'");
     $ob=mysqli_fetch_array($result1,MYSQL_NUM);
     $cliente=$ob[2];
       $tab=mysqli_query($cnx,"select * from pfna where Folio_cliente='$cliente'");
  }
    elseif (stristr($solicitudNo, 'SM-')== TRUE) {
  $result2=mysqli_query($cnx,"select * from solicitudpm where Folio_Sol='$solicitudNo'");
     $ob=mysqli_fetch_array($result2,MYSQL_NUM);
$cliente=$ob[2];
       $tab=mysqli_query($cnx,"select * from pm where Folio_cliente='$cliente'");
       $rw=mysqli_num_rows(mysqli_query($cnx,"select * from registroxml where Folio_Sol='$solicitudNo'"));
    if($rw>0){
        $resqeq=true;
    }else{
        $resqeq=false;
    }
  }
  elseif (stristr($solicitudNo, 'PFA-')== TRUE) {
   
      $result=mysqli_query($cnx,"select NomSolicitante,Folio_Sol,Status from solicitudpfa inner join pfa on pfa.Folio_cliente=solicitudpfa.Folio_Cliente where pfa.Folio_Cliente='$solicitudNo' order by solicitudpfa.Id desc");
echo "<table>
  <tr><td>Folio de la solicitud</td> <td>Nombre</td> <td>Estatus</td> </tr>

";
while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
?>
   <tr onclick="$('#htmlext').load('contenedor.php?textfield='+this.id);" id="<?php echo $row['Folio_Sol']; ?>" ><td> <?php echo $row['Folio_Sol']; ?> </td> 
 <td> <?php echo $row['NomSolicitante']; ?> </td>
 <td class="<?php if($row['Status']=='Aceptada') {echo 'callout success'; } elseif($row['Status']=='Rechazada') {echo 'callout alert'; } elseif($row['Status']=='Pendiente') {echo 'callout warning'; }  ?>" > <?php echo $row['Status']; ?> </td> <?php
}
echo "</table>";
  }elseif(stristr($solicitudNo, 'PFNA-')== TRUE){

  }elseif(stristr($solicitudNo, 'PM-')== TRUE){
    
    $result=mysqli_query($cnx,"select NomSolicitante,Folio_Sol,Status from solicitudpm inner join pm on pm.Folio_cliente=solicitudpm.Folio_Cliente where pm.Folio_Cliente='$solicitudNo' order by solicitudpm.Id desc");
echo "<table>
  <tr><td>Folio de la solicitud</td> <td>Nombre</td> <td>Estatus</td> </tr>

";
while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
?>
   <tr onclick="$('#htmlext').load('contenedor.php?textfield='+this.id);" id="<?php echo $row['Folio_Sol']; ?>" ><td> <?php echo $row['Folio_Sol']; ?> </td> 
 <td> <?php echo $row['NomSolicitante']; ?> </td>
 <td class="<?php if($row['Status']=='Aceptada') {echo 'callout success'; } elseif($row['Status']=='Rechazada') {echo 'callout alert'; } elseif($row['Status']=='Pendiente') {echo 'callout warning'; }  ?>" > <?php echo $row['Status']; ?> </td> <?php
}
echo "</table>";
  }
  $gra=mysqli_query($cnx,"select * from gradoriesgo where Folio_Sol='$solicitudNo'");


  


  
if (stristr($solicitudNo, 'SA-')== TRUE || stristr($solicitudNo, 'SM-')== TRUE || stristr($solicitudNo, 'SN-')== TRUE) {
  
  if(mysqli_num_rows($tab) == 0){
  echo "<h4>No Se Encontro El Registro</h4>";
  }else{
    $con= array(  " Id  " ,
  " Folio " ,
  " Nombre  " ,
  " Segundo nombre  " ,
  " Apellido parteno  " ,
  " Apellido materno  " ,
  " RFC   " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  "   NO. de domicilio",
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Estado  " ,
  "   Municipio ",
  " Codigo Postal " ,
  " CURP  " ,
  " Email " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " Nacionalidad  " ,
  " No. de dependientes " ,
  " Acredita domicilio  " ,
  " Vive en " ,
  " Otro  " ,
  " Propiedad inmueble  " ,
  " Arraigo del domicilio " ,
  " Años de residir " ,
  " Nombre Beneficiario " ,
  " Apellido Paterno  " ,
  " Apellido materno  " ,
  " Estado civil  " ,
  " Auto propio " ,
  " Marca/Tipo  " ,
  "Ocupacion ",
  " Puesto  " ,
  " Departamento  " ,
  " Desde el año  " ,
  " Compañía  " ,
  " Telefono  " ,
  " Extencion ",
  "  Domicilio laboral",
  " FIEL",
  " Sueldo ",
  " Actividad Adicional",
  "Ingreso mensual"
   );

  $sol = array( 
    "ID ",
    " Folio solicitud " ,
  " Folio Cliente " ,
  "Tipo Credito",
  " Nombre Referencia " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Nombre Referencia 2 " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Banco " ,
  " No Tarjeta  " ,
  " Bannco cargo directo  " ,
  " No Tarjeta  " ,
  " Nombre conyuge  " ,
  " apellido paterno  " ,
  " apellido materno  " ,
  " Compañía  " ,
  " Puesto  " ,
  " Nombre obligado " ,
  " apellido paterno  " ,
  " apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " CURP  " ,
  " Nombre obligado 2 " ,
  " apellido paterno  " ,
  " apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email " ,
  " sexo  " ,
  " Fecha nacimiento  " ,
  " edad  " ,
  " CURP  " ,
  " Fecha " ,
  " Clave consecionario " ,
  " Nombre consecionario  " ,
  " Nombre vendedor   " ,
  " Nombre gerente grl. ",
  "Comentarios",
  "Estatus"
   );
$gr = array(  " Folio solicitud " ,
  " Folio Cliente " ,
  " Actividad objeto social " ,
  " Antigüedad Cliente  " ,
  " Naturaleza Operaciones  " ,
  " Numero de Beneficiarios " ,
  " Numero de Terceros Relacionados " ,
  " PEPs Relacionados " ,
  " Alerta Reputacional " ,
  " Volumen Esperado  " ,
  " Frecuencia Esperada " ,
  " Instrumento Monetario " ,
  " Canales Medios Utilizados " ,
  " Pais Estado Oficial " ,
  " Pais Estado Residencia  " ,
  " Pais Estado Operacion " ,
  " Origen Recursos " ,
  " Destino Recursos  " ,
  " Pais Estado Residencia Terceros " ,
  " Grado de Riesgo " ,
  " INE Solicitante " ,
  " Adjunta INE Solicitante " ,
  " Pasaporte o Cedula Profecional Solicitante  " ,
  " Adjunta Pasaporte o Cedula Profecional Solicitante  " ,
  " Cartilla Militar  " ,
  " Adjunta Cartilla Militar  " ,
  " Licencia Conducir   " ,
  " Adjunta Licencia Conducir   " ,
  " Otra Identificacion " ,
  " Adjunta Otra Identificacion " ,
  " Especifacacion Identificacion   " ,
  " Cotejo Vs Original  " ,
  " Adjunta CURP  RFC FEA " ,
  " Adjunta Comprobante Domicilio " ,
  "Fecha del comprobante",
  " Domicilio Coincide Id " ,
  " Domicilio Beneficiario  " ,
  " Colonia " ,
  " Codigo Postal " ,
  " Pais  " ,
  " Telefono  " ,
  " CURP  " ,
  " RFC " ,
  " Parentesco  " ,
  " Porciento " ,
  " Fecha nacimiento  " ,
  " Municipio " ,
  " Estado  " ,
  " Estado civil  " ,
  " Sociedad conyugal " ,
  " Ocupacion/Profecion " ,
  " PEPS  " ,
  " Origen de los recursos  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Ingreso comprobables  " ,
  " Fuente  " ,
  " Total ingresos  " ,
  " Valor auto  " ,
  " Engache " ,
  " Porcentaje de enganche  " ,
  " Porcentaje financiado " ,
  " Monto Financiado  " ,
  " Plazo " ,
  " Pago mensual esperado " ,
  " PEPS  " ,
  " NombrePEPS  " ,
  " ParentescoPEPS  " ,
  " PuestoPEPS  " );
$CPFNA = array( 
  " Id   ",
  " Folio Cliente " ,
  " Tipo Credito  " ,
  " Nombre  " ,
  " Segundo Nombre  " ,
  " Apellido paterno  " ,
  " Apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono Movil  " ,
  " Dirreccion  " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Lugar nacimiento  " ,
  " Estado  " ,
  " Codigo Postal " ,
  " CURP  " ,
  " Email " ,
  " Fax " ,
  " Sexo  " ,
  " Fecha Nacimiento  " ,
  " Edad  " ,
  " Nacionalidad  " ,
  " No. De dependientes   " ,
  " Acredita domicilio  " ,
  " Vive en   " ,
  " Otro  " ,
  " Importe mensual   " ,
  " Propiedad inmueble  " ,
  " Arraigo domicilio   " ,
  " Años de residir   " ,
  " Nombre beneficiario   " ,
  " Apellido paterno  " ,
  " Apellido materno  " ,
  " Estado civil  " ,
  " Auto propio " ,
  " Marca / tipo  " ,
  " Ocupacion " ,
  " Puesto  " ,
  " Desde el año  " ,
  " Compañía  " ,
  " Telefono  " ,
  " Nombre empresa  " ,
  " Extencion   " ,
  " Giro  " ,
  " Domicilio empresa   " );
$CPM = array( " id  " ,
  " Folio cliente " ,
  " Tipo Credito  " ,
  " Nombre  " ,
  " RFC " ,
  " Telefono  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Estado  " ,
  " Municipio ",
  " Codigo Postal " ,
  " Email " ,
  " Fax " ,
  " Pais ",
  " Nombre " ,
  " Segundo nombre",
  " Apellido Paterno",
  " Apellido Materno",
  " Direccion",
  " Colonia ",
  " Codigo Postal",
  " Ciudad ",
  " Estado ",
  " Sexo ",
  " Lugar de Nacimiento ",
  " Fecha de Nacimiento",
  " Estado Civil",
  " Telefono  " ,
  " Email " ,
  " Curp ",
  " RFC " ,
  " Numero de serie FIEL",
  " Nacionalidad ",
  " Ocupacion ",
  " Sueldo ",
  " Fax " ,
  " Puesto  " ,
  " Actividad Economica Adicional",
  " Ingreso Mensual Adicional ",
  " Actividad Principal   " ,
  " Inicio de operaciones " ,
  " Cantidad de personal  ",
  " Fecha de constitucion de la empresa",
  " Antiguedad ",
  " Apoderado ",
  " Nombre Accionista  1",
  " RFC",
  " Porcentaje",
  " Nombre Accionista 2",
  " RFC ",
  " Porcentaje ",
  " Nombre Accionista 3",
  " RFC ",
  " Porcentaje ",
  " Nombre Accionista 4",
  " RFC ",
  " Porcentaje ",
  " Nombre Accionista PM1",
  " RFC ",
  " Porcentaje ",
  " Nombre Accionista PM2",
  " RFC",
  " Porcentaje" );
$SPFNA = array( " Folio Solicitud " ,
  " Folio Cliente " ,
  " Nombre referencia " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Nombre referencia2  " ,
  " Parentesco  " ,
  " Telefono  " ,
  " Referencia bancaria " ,
  " No. De cuenta " ,
  " Referencia bancaria2  " ,
  " No. De cuenta " ,
  " Sucursal referencia 1 " ,
  " Sucursal referencia 2 " ,
  " Fecha de apertura " ,
  " Fecha de apertura 2 " ,
  " Empresa " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Empresa 2 " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Banco cargo directo " ,
  " No. De cuenta " ,
  " Nombre Conyuge  " ,
  " Compañía  " ,
  " Puesto  " ,
  " Nombre Obligado solidario " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " Luar de nacimiento  " ,
  " Estado  " ,
  " Codigo Postal " ,
  " RFC " ,
  " Telefono  " ,
  " Fax " ,
  " Antigüedad  " ,
  " Apoderado " ,
  " Actividad principal " ,
  " Inicio de operaciones " ,
  " Cantidad de personal  " ,
  " Nombre obligado solidario " ,
  " Apellido paterno  " ,
  " Apellido materno  " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " estado  " ,
  " Codigo Postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " CURP  " ,
  " Nombre obligado solidario " ,
  " RFC " ,
  " Telefono  " ,
  " Telefono movil  " ,
  " Direccion " ,
  " Colonia/Fraccionamiento " ,
  " Ciudad  " ,
  " lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo Postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha nacimiento  " ,
  " Edad  " ,
  " CURP  " ,
  " Fecha " ,
  " Clave consecionario " ,
  " Nombre  " ,
  " Nombre vendedor " ,
  " Nombre gerente grl. " );
$SPM = array( 
  " Folio solicitante " ,
  " Folio Solicitud",
  " Folio Cliente " ,
  " Credito ",
  " Referencia Bancaria   " ,
  " No. De cuenta " ,
  " Sucursal referencia 1 " ,
  " Fecha de apertura   " ,
  " Referencia Bancaria",
  " No. de Cuenta ",
  " Sucursal referencia 2 " ,
  " Fecha de apertura   " ,
  " Empresa " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Empresa " ,
  " Antigüedad  " ,
  " Telefono  " ,
  " Banco cargo directo " ,
  " No. de cuenta " ,
  " Nombre obligado solidario " ,
  " Direccion " ,
  " Colonia " ,
  " Ciudad  " ,
  " Lugar de Nacimiento ",
  " Estado  " ,
  " Codigo postal " ,
  " RFC " ,
  " Telefono  " ,
  " Fax " ,
  " Antigüedad de constitucion  " ,
  " Apoderado " ,
  " Actividad principal " ,
  " Inicio operaciones  " ,
  " Cantidad de personal  " ,
  " Nombre accionista " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista " ,
  " RFC   " ,
  " Porcentaje  " ,
  " Nombre accionista PM  " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre accionista PM  " ,
  " RFC " ,
  " Porcentaje  " ,
  " Nombre obligado solidario " ,
  " Apellido Paterno",
  " Apellido Materno",
  " RFC   " ,
  " Telefono  " ,
  " Telefono Movil  " ,
  " Direccion " ,
  " Colonia " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " Edad  " ,
  " CURP  " ,
  " Nombre Obligado solidario " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " RFC   " ,
  " CURP  " ,
  " Edad  " ,
  " Nombre obligado solidario " ,
  " Apellido Paterno",
  " Apellido Materno",
  " RFC   " ,
  " Telefono  " ,
  " Telefono Movil  " ,
  " Direccion " ,
  " Colonia " ,
  " Ciudad  " ,
  " Lugar de nacimiento " ,
  " Propiedad a su nombre " ,
  " Estado  " ,
  " Codigo postal " ,
  " Email   " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " Estado  " ,
  " CURP  " ,
  " Nombre obligado solidario " ,
  " Sexo  " ,
  " Fecha de nacimiento " ,
  " RFC " ,
  " CURP  " ,
  " Edad  " ,
  " Fecha " ,
  " ClavConcesionario " ,
  " Nombre concesionario  " ,
  " Nombre vendedor " ,
  " Nombre gerente Grl. " );

   echo'Encontrado';    
  ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
      <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="js/js/css/foundation.css">
    <link rel="stylesheet" href="js/js/css/foundation.min.css">
    <link rel="stylesheet" href="js/js/css/app.css">
    <link rel="stylesheet" href="js/js/css/foundation-icons/foundation-icons.css">
     <link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">
  </head>
  <body>
    


   <ul class='tabs' data-tabs id='example-tabs'>
  <li class='tabs-title is-active'><a href='#panel1' aria-selected='true'>Cliente</a></li>
  <li class='tabs-title'><a href='#panel2'>Solicitud</a></li>
  <li class='tabs-title'><a href='#panel3'>Grado de riesgo</a></li>

</ul>




   <div class='tabs-content' data-tabs-content='example-tabs'>


<div class="tabs-panel" id="panel1">
    <table width='20%' border='0' class='table table-sm table-inverse'>

   <?php
   while($row=mysqli_fetch_array($tab,MYSQL_NUM)){

for ($i=1; $i < count($row); $i++) { 
  for ($j=$i; $j < $i+1; $j++) { 
    
if ($row[$j]=="") {
  # code...
  break;
}
    else{
?>
<tr>
    <td > <?php if (stristr($solicitudNo, 'SA')== TRUE) { echo $con[$i]; }  
                elseif (stristr($solicitudNo, 'SN')== TRUE) { echo $CPFNA[$i]; }
                  elseif (stristr($solicitudNo, 'SM')== TRUE) { echo $CPM[$i]; }
    ?>
     </td>


      <td > <?php echo  $row[$j] ?> </td>
  </tr>
    <?php
      }
    }
  }
}
?>
  </table> 
 </div>

<div class="tabs-panel" id="panel2">
 <table width='20%' border='0' class='table table-sm table-inverse'>
  <?php
  
for ($k=1; $k < count($ob); $k++) { 
  for ($l=$k; $l < $k+1; $l++) { 
    
if ($ob[$l]=="") {
  # code...
  break;
}
    else{

?> <tr class='bg-primary' >
    <td > <?php 

          if (stristr($solicitudNo, 'SA')== TRUE) { echo $sol[$k]; }  
                elseif (stristr($solicitudNo, 'SN')== TRUE) { echo $SPFNA[$k]; }
                  elseif (stristr($solicitudNo, 'SM')== TRUE) { echo $SPM[$k]; }
    ?> </td>
    <td > <?php echo $ob[$l] ?></td>
  </tr>
  <?php
      }
    }
  }

?>

  </table> 
</div>

<div class="tabs-panel" id="panel3" >
    <table width='20%' border='0' class='table table-sm table-inverse'>

   <?php
   while($row1=mysqli_fetch_array($gra,MYSQL_NUM)){

for ($i=0; $i < count($row1); $i++) { 
  for ($j=$i; $j < $i+1; $j++) { 
    
if ($row1[$j]=="") {
  # code...
  break;
}
    else{
?>
<tr>
    <td > <?php echo $gr[$i]; ?> </td>


      <td class="<?php if($row1[$j]=='Bajo') {echo 'callout success'; } elseif($row1[$j]=='Alto') {echo 'callout alert'; } elseif($row1[$j]=='Medio') {echo 'callout warning'; }  ?>" > <?php echo  $row1[$j] ?> </td>
  </tr>
    <?php
      }
    }
  }
}
?>
<tr>
<td>Consulta Buró de Crédito</td>
<td class="callout warning">Pendiente <input type="button" value="Consultar" id="consultaburo" name="consultaburo" <input type="button" value="Nueva ventana" onclick="javascript:window.open('ejemploxml.php?folio_request=<?php echo $solicitudNo ?>','','width=auto,height=auto,toolbar=No');"></td>

</tr>
<tr>
<td>Consulta Quién es Quién </td>
<?php ?>
<td id="tdqeq" <?php if($resqeq==true){ echo "class='callout success'";}else{echo "class='callout warning'";} ?> > <?php if($resqeq==true){ echo 'Consultado';}else{echo 'Pendiente  <input type="button" value="Consultar" id="consultaqeq" name="consultaqeq" >';} ?> <input  <?php if($resqeq==true){echo 'style="display:block"';}else{echo 'style="display:none"';}?>type="button" value="Ver Información" id="verqeq" name="verqeq"  >  <div style="display:none"  id="loadingqeq" class="loader"></div></td>

</tr>
  </table> 

  <h3>Comentarios</h3>
<input id="comentario" name="comentario"class="form-control"  >
<div class="container">
      <p>&nbsp;</p>
      <p>
        <input name="cancelar" class="button" type="button" id="cancelar" onclick="window.location.href='indexmenu.php'" value="Atras">
        <input name="rechazada"  class="alert button" type="button" id="rechazada" value="Rechazar">
        <input name="aceptada" class="success button" type="button" id="aceptada" data-toggle="modal" data-target="#exampleModal" value="Aceptar">
      </p>
      <input style="display:none" id="res" value="<?php echo $solicitudNo ;?>">
 </div>
</div>


<?php


      }
}
else{

echo "";

}
echo "";
  
     ?>










    <script  scr="js/validasolicitud.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
     <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/vendor/app.js"></script>
    <script>
      $(document).foundation();

$("#verqeq").click(function(event) {
 
 window.open("qeq3.php?solicitud="+document.getElementById("res").value,'_blank');
   
                                });




$("#consultaqeq").click(function(event) {
  document.getElementById("loadingqeq").style.display='block';
 var sub="qeq2.php?foliosol="+document.getElementById("res").value;
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        if(xmlhttp.responseText.indexOf("Fatal error") !== -1){
               document.getElementById("loadingqeq").style.display='none';
               //alert(xmlhttp.responseText);
               alert('¡¡¡Error De Servidor Intente De Nuevo!!!');
               
        }else{
               document.getElementById("loadingqeq").style.display='none';
               document.getElementById("consultaqeq").style.display='none';
               document.getElementById("verqeq").style.display='block';
              $( "#tdqeq" ).removeClass( "warning" )
               $('#tdqeq').addClass('success');
               alert(xmlhttp.responseText);
        }
        
      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
                //$("#htmlext").load('solicitudesPendientes.php');
                                });





 $("#aceptada").click(function(event) {
 
var sub= "sub3.php?comentario="+document.getElementById("comentario").value+"&id="+ document.getElementById("res").value+"&status=Aceptada" ;
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      alert(xmlhttp.responseText);
      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
                $("#htmlext").load('solicitudesPendientes.php');
                                });

    $("#rechazada").click(function(event) {

   if(document.getElementById('comentario').value==""){
 alert("SE REQUIERE MOTIVO DE RECHAZO EN COMENTARIOS");
 return false;
    }
 var sub= "sub3.php?comentario="+document.getElementById("comentario").value+"&id="+ document.getElementById("res").value+"&status=Rechazada" ;
      if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {

     alert(xmlhttp.responseText);
      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);

               $("#htmlext").load('solicitudesPendientes.php');
                                });

    </script>
  </body>
</html>


    