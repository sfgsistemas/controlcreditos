<?php
    if(isset($_GET['cliente'])){
        $cliente=$_GET['cliente'];
        
    include("Conexion2.php");
    $result = mysqli_query($cnx,"select * from solicitudpfa where Folio_Cliente='$cliente' order by Id desc");
    if(!mysqli_num_rows($result)>0){

        echo "Error";
        exit;
    }

    $row=mysqli_fetch_array($result);
    $result2 = mysqli_query($cnx,"select * from pfa where Folio_Cliente='$cliente'");
    $row2=mysqli_fetch_array($result2);
    $folio_sol=$row['Folio_Sol'];
    $result3=mysqli_query($cnx,"select * from gradoriesgo where Folio_sol='$folio_sol'");
    $row3=mysqli_fetch_array($result3);

    echo "Solicitud: ".$row['Id'];
    echo "Cliente: ".$row2['Id'];
    echo "grado de riesgo".$row3['Folio_sol'];
    ?><script>document.getElementById("cliente").readOnly = true;</script> <?php
 
    }else{
      include("Conexion2.php");
    }

    





    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="js/jquery-ui/jquery-ui.css">

<script src="js/vendor/jquery-3.1.1.min.js"></script>


</head>
<body  >
<!-- header -->
<header>
<script>

$( document ).ready(function() {
 
$('form#form1').find('input').each(function(){  
if(this.id=="fechnacsol" ||  this.id=="aperbanc1d" || this.id=="aperbanc1d2"  || this.id=="inicoper1" || this.id=="datobfechnac1d"  || this.id=="datobfechnac2d" || this.id=="textfield57" || this.id=="fechaComprobante"){
    $fecha=$(this);
    
    if ($fecha[0].type!="date"){
      $fecha.datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true} );
      }
      console.log( "ready!" );   
  }

  
 });
});


function Validacioncampos(){
 
var requerido=0;
//seccion del solicitante
$('#secSolicitante').find('input').each(function(){  
  
  if(document.getElementById("nomsol").value!="" && document.getElementById("apepasol").value!="" ){


  if(this.id=="segnomsol" || this.id=="apemasol" || this.id=="vivsolesp" || this.id=="compatelsolext"||this.id=="movsol22"||this.id=="movsol32"||this.id=="movsol42"||this.id=="movsol52"||this.id=="movsol62"||this.id=="movsol72"||this.id=="movsol82"||this.id=="movsol92"||this.id=="movsol102"){
    $(this).prop('required',false);
    
  }else{
    $(this).prop('required',true);
    
  }

  }else{
    $(this).prop('required',false);

 }
});
////SECCION DE REFERENCIAS PERSONALES 1 
$('#secRefPersonales1').find('input').each(function(){  
  
  if(document.getElementById("nomref1").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }
});
//SECCION DE REFERENCIAS PERSONALES 2 
$('#secRefPersonales2').find('input').each(function(){  
  
  if(document.getElementById("nomref2").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }
});
///SECCION DE REFERENCIAS BANCARIAS 1
$('#secRefBancarias1').find('input').each(function(){
  
  if(document.getElementById("refbanc").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
///SECCION DE CARGO DIRECTO 
$('#secCarDirecto').find('input').each(function(){
  
  if(document.getElementById("cargdir").value!="" ){
    $(this).prop('required',true);
  }else{
    $(this).prop('required',false);
  }

});
//SECCION DEL CONYUGE 
$('#secDatConyuge').find('input').each(function(){
  
  if(document.getElementById("conyunom").value!="" && document.getElementById("conyuape1").value!=""){
    if(this.id=="conyuape2"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
///SECCION OBLIGADO SOLIDARIO PERSONA MORAL 
$('#secDatObligadoPersonaMoral').find('input').each(function(){
  
  if(document.getElementById("nomrazsoc").value!="" ){
    if(this.id=="faxpermor1" || this.id=="faxpermor2" || this.id=="faxpermor3" || this.id=="faxpermor4" || this.id=="faxpermor5" || this.id=="faxpermor6" || this.id=="faxpermor7" || this.id=="faxpermor8" || this.id=="faxpermor9" || this.id=="faxpermor10"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
///SECCION OBLIGADO SOLIDARIO PERSONA FISICA 1 
$('#secDatObligadoSolidarioPF1').find('input').each(function(){
  
  if(document.getElementById("datobnom1").value!="" && document.getElementById("datobappat1").value!="" ){
    if(this.id=="datobapmat1"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
////SECCION OBLIGADO SOLIDARIO PERSONA FISICA
$('#secDatObligadoSolidarioPF2').find('input').each(function(){
  
  if(document.getElementById("datobnom2").value!="" && document.getElementById("datobappat2").value!="" ){
    if(this.id=="datobapmat2"){
      $(this).prop('required',false);
    }else{
      $(this).prop('required',true);
    }
    
  }else{
    $(this).prop('required',false);
  }

});
///SECCION CREDENCIALES 
///INE
$('#secINE').find('input').each(function(){
 var varvar=document.getElementsByName("copias");
  if(document.getElementsByName("copias")[0].checked || document.getElementById("textfield39").value!=""){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///SECCION PASAPORTE CEDULA PROF
$('#secCedProfesional').find('input').each(function(){
  if(document.getElementsByName("copias2")[0].checked || document.getElementById("textfield40").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///CARTILLA SERV MILITAR    
$('#secCarMilitar').find('input').each(function(){
  if(document.getElementById("textfield41").value!="" || document.getElementsByName("copias3")[0].checked  ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///LICENCIA PARA CONDUCIR 
$('#secLicConducir').find('input').each(function(){
  if(document.getElementById("textfield42").value!="" || document.getElementsByName("copias4")[0].checked ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///OTRA IDENTIFICACION
$('#secOtrIdentificacion').find('input').each(function(){
  if(document.getElementById("textfield43").value!="" || document.getElementsByName("copias5")[0].checked ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
$('#secOtrIdentificacion2').find('input').each(function(){
  if(document.getElementById("textfield43").value!="" || document.getElementsByName("copias5")[0].checked  ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
////SECCION DE BENEFICIARIO 
$('#secBeneficiario').find('input').each(function(){
  if(document.getElementById("textfield45").value!="" && document.getElementById("textfield47").value!="" ){
    $(this).prop('required',true);
    
  }else{
    $(this).prop('required',false);
  }
  
});
///SECCION PERFIL TRANSACCIONAL INICIAL 
$('#secPerTransaccional').find('input').each(function(){
 
  if(this.id=="textfield66" && document.getElementById("textfield65").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield68" && document.getElementById("textfield67").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield70" && document.getElementById("textfield69").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield72" && document.getElementById("textfield71").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield74" && document.getElementById("textfield73").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield76" && document.getElementById("textfield75").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield78" && document.getElementById("textfield77").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield80" && document.getElementById("textfield79").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield82" && document.getElementById("textfield81").value!="" ){ $(this).prop('required',true);}
  if(this.id=="textfield84" && document.getElementById("textfield83").value!="" ){ $(this).prop('required',true);}
  
});
///SECCION PEPS 
$('#secPEPS').find('input').each(function(){
 
  if($('input:radio[name=PEPS]:checked').val()=="1" ){ 
    $(this).prop('required',true);
    }else{
      $(this).prop('required',false);
    }
});




var pagina=1;
///ciclo de seleccion de pagina
$('form#form1').find('input').each(function(){
  

      
      if(this.id=="escliente1"){
        pagina=2;
        $('form#form1').find('select').each(function(){


  
      if(this.id=="select"){
        pagina=2;

      }
     


if(($(this).prop('required') && this.value=="")  ){

      
        console.log("IR");



        if(pagina=="1"){
        $( '#uno' ).click ();
        window.scrollTo(0,0);
        this.focus();
        this.select();
        return false;
      }
      if(pagina=="2"){
        $( '#dos' ).click ();
        window.scrollTo(0,0);
        this.focus();
        this.select();
        return false;
      }
      if(pagina=="3"){
       
        this.focus();
        this.select();
        return false;
      }
        
        
    } else {
      console.log("NR");
    }
    
    return true;
});

      }
      if(this.id=="textfield12"){
        pagina=3;
      }


if(($(this).prop('required') && this.value=="") || ($(this).prop('required') && !$("#form1 input[name='"+this.name+"']:radio").is(':checked') && $(this).get(0).type == 'radio') ){
      
 


      alert("¡¡Por Favor, Verifica Que Todos Los Datos Esten Correctos!!");
    
      
      
      
      
        console.log("IR");



        if(pagina=="1"){
        $( '#uno' ).click ();
        window.scrollTo(0,0);
        this.focus();
        this.select();
        return false;
      }
      if(pagina=="2"){
        $( '#dos' ).click ();
        window.scrollTo(0,0);
        this.focus();
        this.select();
        return false;
      }
      if(pagina=="3"){
       
        this.focus();
        this.select();
        return false;
      }
        
        
    } else {
      console.log("NR");
    }
    
    return true;
});

}



function seleccionvalor(){
  
   var x = document.getElementById("tipocredito").value;
   var tasadeinteres=0;
   var data = new FormData();

   data.append('credito', x);
    
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
        
        obj = JSON.parse(xmlhttp.responseText);
        
        document.getElementById("textfield96").value = obj.Comision_Apertura+'%';
        
        document.getElementById("textfield100").value = obj.tasa+'%';
        

        
      }
  }
xmlhttp.open("POST","veririfatasa.php",true);
xmlhttp.send(data);







   if(x=="Auto Nuevo" || x=="Auto Usado"){


    
    document.getElementById("valorautochange").innerHTML = "Valor del Automóvil ";
    document.getElementById("textfield93").value = tasadeinteres+'%';
    document.getElementById("engautochange").style.display = "block";
    document.getElementById("porengautochange").style.display = "block";
    document.getElementById("porfinautochange").style.display = "block";
    document.getElementById("monfinautochange").style.display = "block";
    document.getElementById("segautochange").style.display = "block";
    document.getElementById("comisionapchange").style.display = "block";
    document.getElementById("segdeschange").style.display = "none";
    





   }else{
     
    document.getElementById("valorautochange").innerHTML = "Monto Requerido ";
    document.getElementById("engautochange").style.display = "none";
    document.getElementById("porengautochange").style.display = "none";
    document.getElementById("porfinautochange").style.display = "none";
    document.getElementById("monfinautochange").style.display = "none";
    document.getElementById("segautochange").style.display = "none";
    document.getElementById("comisionapchange").style.display = "block";
    document.getElementById("segdeschange").style.display = "block";




   }


    
}
</script>
</header>

<!-- content -->
<section>
  <div class="bg" align="center">
    <div class="container_24" align="center">
      <form name="form1" id="form1" action="pdfpfa.php" target="_blank" method="post" data-abide novalidate onsubmit="Validacioncampos()">
        <style>
	 
	  input::-webkit-input-placeholder {
    color:    #c00;
	font-size:8px;
	font-weight: bold;
}
input::-moz-placeholder {
    color:    #c00;
	font-size:8px;
	font-weight: bold;
}

	  </style>

    <ul class="accordion" data-accordion>
  <li class="accordion-item is-active" data-accordion-item>
    <a href="#" class="accordion-title"><h4 align="center" id="uno">Solicitud PFA</h4></a>
    <div class="accordion-content" data-tab-content>



        <div id="solicitud">

          
          <p align="left"><strong>DATOS DEL SOLICITANTE:</strong>
            <div class="row">
              <div class="small-5 columns"><input name="cliente" type="text" id="cliente" value="<?php if(isset($row['Folio_Cliente'])) { echo $row['Folio_Cliente']; } ?>" size="30px" onChange="obten()" placeholder="Si es Cliente, número de cliente/contrato"></div>
             
                <select name="tipocredito" size="1" id="tipocredito" style="width:40%;" onchange="seleccionvalor()" required>
          <option value="" ></option>
          <?php
          $rescreditos=mysqli_query($cnx,"select * from tiposcreditos");
          while($rowcreditos=mysqli_fetch_array($rescreditos)){?> 
             <option value="<?php echo $rowcreditos['descripcion'];?>" ><?php echo $rowcreditos['descripcion'];?></option>

         <?php }
          ?>
        </select>


<!--
            <input id="tipocredito1" name="tipocredito" type="radio" value="1" required <?php /*if(isset($row['Folio_Cliente'])) { if($row['TipoCredito']=='Credit'){echo "checked";} } ?>><label for="tipocredito1">Credit</label>
            
            <input id="tipocredito2" name="tipocredito" type="radio" value="2" required <?php if(isset($row['Folio_Cliente'])) { if($row['TipoCredito']=='Premium Credit'){echo "checked";} }*/ ?>><label for="tipocredito2">Premium Credit</label>
-->            </div>
          </p>
           <div id="secSolicitante">
          <div class="row">
         
          <p align="left">
            <div class="small-5 columns">
            <input name="nomsol" type="text" id="nomsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['NomSolicitante']; } ?>" onkeyup="viewButton()" placeholder="Primer Nombre"  onkeypress="return validaTexto(event)"pattern="alpha"> 
            <input name="segnomsol" type="text" id="segnomsol"   value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['SegNomSolicitante']; } ?>" placeholder="Segundo Nombre" onkeypress="return validaTexto(event)" pattern="alpha">
            </div>
          <div class="small-5 columns">
            <input name="apepasol" type="text" id="apepasol"  value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApPatSolicitante']; } ?>" onkeyup="viewButton()" placeholder="Apellido Parteno"  onkeypress="return validaTexto(event)" pattern="alpha">  
            <input name="apemasol" type="text" id="apemasol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['ApMatSolicitante']; } ?>" placeholder="Apellido Materno"  onkeypress="return validaTexto(event)" pattern="alpha">
          </div>  
          
          </p>
          <input name="botonAceptar" type="button" id="botonAceptar" value="Buscar" onClick="obten2()" style="display:none;">
          <p style="display:none"><a data-open="exampleModal2" id="modal">Click me for a modal</a></p>
            <div class="reveal" id="exampleModal2" data-reveal></div>
          </div>
<div class="row">
          <p align="left">RFC con homoclave:
            <div class="small-5 columns">
            <div class="small-2 columns"><input name="rfc1" type="text" id="rfc1" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][0];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc2)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc2" type="text" id="rfc2" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][1];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc3)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc3" type="text" id="rfc3" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][2];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc4)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc4" type="text" id="rfc4" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][3];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc5)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc5" type="text" id="rfc5" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][4];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc6)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc6" type="text" id="rfc6" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][5];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc7)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc7" type="text" id="rfc7" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][6];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc8)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc8" type="text" id="rfc8" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][7];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc9)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc9" type="text" id="rfc9" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][8];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc10)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc10" type="text" id="rfc10" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][9];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc11)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc11" type="text" id="rfc11" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][10];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc12)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
            <div class="small-2 columns"><input name="rfc12" type="text" id="rfc12" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][11];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,rfc13)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div></div>
            <div class="small-1 columns"><input name="rfc13" type="text" id="rfc13" size="1px" value="<?php if(isset($row2['Folio_Cliente']))  { echo $row2['RFCSolicitante'][12];}?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol1)" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
             
          </p>
</div>
         <div class="row">
         <div class="small-5 columns">
           
          <p align="left">Telefono partiular (Con lada - 10 dígitos) :
            <div class="small-2 columns"><input name="telsol1" type="text" id="telsol1" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol2)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol2" type="text" id="telsol2" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol3)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol3" type="text" id="telsol3" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol4)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol4" type="text" id="telsol4" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol5)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol5" type="text" id="telsol5" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol6)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol6" type="text" id="telsol6" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol7)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol7" type="text" id="telsol7" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol8)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol8" type="text" id="telsol8" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol9)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol9" type="text" id="telsol9" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,telsol10)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="telsol10" type="text" id="telsol10" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['TelSolicitante'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol1)" onkeypress="return validaNumero(event)" pattern="integer"></div>
          </p>
         </div>
         </div>
         <div class="row">
         <div class="small-5 columns">
           
          <p align="left">Telefono movil (Con lada - 10 dígitos):
            <div class="small-2 columns"><input name="movsol1" type="text" id="movsol1" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][0]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol2)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol2" type="text" id="movsol2" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][1]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol3)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol3" type="text" id="movsol3" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][2]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol4)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol4" type="text" id="movsol4" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][3]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol5)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol5" type="text" id="movsol5" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][4]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol6)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol6" type="text" id="movsol6" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][5]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol7)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol7" type="text" id="movsol7" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][6]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol8)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol8" type="text" id="movsol8" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][7]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol9)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-2 columns"><input name="movsol9" type="text" id="movsol9" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][8]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,movsol10)" onkeypress="return validaNumero(event)" pattern="integer"></div>

            <div class="small-2 columns"><input name="movsol10" type="text" id="movsol10" size="1px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['MovSolicitante'][9]; } ?>" maxlength="1" onKeyUp="myFunction(this,this.value,dirsol)" onkeypress="return validaNumero(event)" pattern="integer"></div>
          </p>
         </div>
         </div>
         
         <div class="row">
          <p align="left">
            <div class="small-5 columns"> <input name="dirsol" type="text" id="dirsol" size="74px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['DirSolicitante']; } ?>" placeholder="Dirección / Calle" onkeypress="return validaTexto(event)" pattern="alpha"></div>
            <div class="small-5 columns"> <input name="dirnumsol" type="text" id="dirnumsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['NumDirSol']; } ?>" placeholder="Número" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-5 columns"><input name="mailsol" type="text" id="mailsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EmailSolicitante']; } ?>"placeholder="Email" pattern="email"></div>
            <div class="small-5 columns"><input name="colsol" type="text" id="colsol" size="49px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['ColSolicitante']; } ?>" placeholder="Colonia"></div>
            <div class="small-5 columns"><input name="cdsol" type="text" id="cdsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CdSolicitante']; } ?>" placeholder="Ciudad"></div>
            <div class="small-5 columns"><input name="lugnacsol" type="text" id="lugnacsol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['LugNacSolicitante']; } ?>"placeholder="Lugar de nacimiento (País y Estado)"></div>
            <div class="small-5 columns"><input name="edosol" type="text" id="edosol" size="20px" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['EdoSolicitante']; } ?>"placeholder="Estado"></div>
            <div class="small-5 columns"><input name="cpsol" type="text" id="cpsol" size="20px" placeholder="C.P." value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CPSolicitante']; } ?>"onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-5 columns"><input name="curpsol" type="text" id="curpsol" size="49px" placeholder="CURP" value="<?php if (isset($row2['Folio_Cliente'])) { echo $row2['CURPSolicitante']; } ?>" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
          </p>
         </div>
          <hr>
          <p align="left"><strong>DATOS GENERALES</strong> </p>
          <p align="left">Sexo:
             
            <input id="sexsol1" name="sexsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['SexoDatGen']=='Masculino'){echo "checked";} } ?> value="Masculino"><label for="sexsol1"><i class="step fi-male size-72"></i> M</label>
             
            <input id="sexsol2" name="sexsol" type="radio" <?php if (isset($row2['Folio_Cliente'])) { if($row2['SexoDatGen']=='F' || $row2['SexoDatGen']=='Femenino' ){echo "checked";} } ?> value="Femenino"><label for="sexsol2"><i class="step fi-female size-72"></i> F</label>
           </p>
           <div class="row">
           <p align="left">
            Fecha de nacimiento:
            <div class="small-5 columns"><input name="fechnacsol" type="date" id="fechnacsol" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['FeNacDatGen']; } ?>" placeholder="dd" ></div>
            <div class="small-5 columns"><input name="edsol" type="number" id="edsol" size="2px" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['EdDatGen']; } ?>" placeholder="Edad"maxlength="2" onKeyUp="mayorEdad(this, this.value)" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-5 columns"><input name="nacsol" type="text" id="nacsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NaDatGen']; } ?>" placeholder="Nacionalidad" onkeypress="return validaTexto(event)" pattern="alpha"></div>
            <div class="small-5 columns"><input name="depensol" type="text" id="depensol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NoDepDatGen']; } ?>" placeholder="Num. Dependientes" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-5 columns"><input name="acdomsol" type="text" id="acdomsol" size="10px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" placeholder="Acredita Domicilio con"></div>
          </p>
           </div>

           <div class="row">
          <p align="left">vive en: <br>
             <div class="small-5 columns">
               <input id="vivsol1" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Casa Propia'){echo "checked";} }?> value="1"><label for="vivsol1">Casa Propia</label>
               <input id="vivsol2" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Rentada'){echo "checked";} } ?> value="2"><label for="vivsol2">Rentada</label>
               <input id="vivsol3" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Hipotecada'){echo "checked";} } ?> value="3"><label for="vivsol3">Hipotecada</label>
             </div>
             <div class="small-5 columns">
                <input id="vivsol4" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Casa propiedad de sus familiares'){echo "checked";} } ?> value="4"><label for="vivsol4">Casa propiedad de sus familiares</label>
                <input id="vivsol5" name="vivsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['VivDatGen']=='Otros especificar'){echo "checked";} } ?> value="5"><label for="vivsol5">Otros especificar</label>
                <input name="vivsolesp" type="text" id="vivsolesp" value="<?php if(isset($row2['Folio_Cliente'])) { echo $row2['OtrDatGen']; } ?>" pattern="alpha">
          </div>
          </p>
           </div>


          <p align="left">Es propietario de algún inmueble:
            <input id="inmusol1" name="inmusol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['PropInmuDatGen']=='Si'){echo "checked";} } ?> value="1"><label for="inmusol1">Si</label>
            
            <input id="inmusol2" name="inmusol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['PropInmuDatGen']=='No'){echo "checked";} } ?> value="2"><label for="inmusol2">No</label>
          </p>
            <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="anosol" type="text" id="anosol" size="13" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" placeholder="Años de residir en la ciudad" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-5 columns"><input name="arraisol" type="text" id="arraisol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ArDomDatGen']; } ?>" placeholder="Arraigo en el domicilio desde el año" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-5 columns"><input name="acdomsol2" type="text" id="acdomsol2" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AcDomDatGen']; } ?>" size="16px" placeholder="Acredita Domicilio con"></div>
            
            <div class="small-5 columns"> <input name="anosol2" type="text" id="anosol2" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['AnResDatGen']; } ?>" size="20px" placeholder="Años de residir en la ciudad" onkeypress="return validaNumero(event)" pattern="integer"></div>
          </p>
            </div>
            
            <div class="row">
            <p align="left">
                Beneficiario en caso de fallecimiento:
             <div class="small-4 columns"><input name="benesol1" type="text" id="benesol1" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApPatBenDatGen']; } ?>" placeholder="Apellido Paterno" onkeypress="return validaTexto(event)" pattern="alpha"></div>
             <div class="small-4 columns"><input name="benesol2" type="text" id="benesol2" size="20px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ApMatBenDatGen']; } ?>" placeholder="Apellido Materno" onkeypress="return validaTexto(event)" pattern="alpha"></div>
             <div class="small-4 columns"><input name="benesol3" type="text" id="benesol3" size="30px" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['NomBenDatGen']; } ?>" placeholder="Nombre(s)" onkeypress="return validaTexto(event)" pattern="alpha"></div>
          </p>
            </div>
            <div class="row">
          <p align="left">Estado civil:<br>
            <div class="small-6 columns">
                <input id="civilsol1" name="civilsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['EstCivDatGen']=='Casado Bienes Mancomunados'){echo "checked";} } ?> value="Casado Bienes Mancomunados"><label for="civilsol1">Casado Bienes Mancomunados</label>
                <input id="civilsol2" name="civilsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['EstCivDatGen']=='Casado Bienes Separados'){echo "checked";} } ?> value="Casado Bienes Separados"><label for="civilsol2">Casado Bienes Separados</label>
            </div>
            <div class="small-4 columns">
                <input id="civilsol3" name="civilsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['EstCivDatGen']=='Viudo'){echo "checked";} } ?> value="Viudo"><label for="civilsol3">Viudo</label>
                <input id="civilsol4" name="civilsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['EstCivDatGen']=='Divorciado'){echo "checked";} } ?> value="Divorciado"><label for="civilsol4">Divorciado</label>
                <input id="civilsol5" name="civilsol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['EstCivDatGen']=='Soltero'){echo "checked";} } ?> value="Soltero"><label for="civilsol5">Soltero</label>
            </div>
          </p>
            </div>

          <p align="left">Tiene Auto Propio: 
            <input id="autosol1" name="autosol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['AuPropDatGen']=='Si'){echo "checked";} } ?> value="Si"><label for="autosol1">Si</label>
            
            <input id="autosol2" name="autosol" type="radio" <?php if(isset($row2['Folio_Cliente'])) { if($row2['AuPropDatGen']=='No'){echo "checked";} } ?> value="No"><label for="autosol2">No</label>
         <div class="small-5 columns"> <input name="marcasol"value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['MarDatGen']; } ?>"  type="text" id="marcasol" size="70px" placeholder="Especifique Marca y Tipo"></div>
          </p>
            
          <hr>
          <p align="left"><strong>DATOS DE SU EMPLEO O PROFESIÓN</strong></p>
          <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="puestosol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['PuestDatEmp']; } ?>" type="text" id="puestosol" size="40px" placeholder="Puesto"></div>
            <div class="small-5 columns"><input name="depasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['DepDatEmp']; } ?>" type="text" id="depasol" size="30px" placeholder="Departamento o área"></div>
            <div class="small-5 columns"><input name="desdesol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['DesAnDatEmp']; } ?>" type="text" id="desdesol" size="20px" placeholder="Desde el año"></div>
            <div class="small-5 columns"><input name="compasol" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['CompDatEmp']; } ?>" type="text" id="compasol" size="70px" placeholder="Compañía"></div>
          </p>
          </div>
          
          <div>
          <p align="left">Telefono(Con lada - 10 dígitos):
            <div class="small-1 columns" ><input name="compatelsol1" type="text" id="compatelsol1"  value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][0]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol2)"></div>
            <div class="small-1 columns" ><input name="compatelsol2" type="text" id="compatelsol2" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][1]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol3)"></div>
            <div class="small-1 columns" ><input name="compatelsol3" type="text" id="compatelsol3" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][2]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol4)"></div>
            <div class="small-1 columns" ><input name="compatelsol4" type="text" id="compatelsol4" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][3]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol5)"></div>
            <div class="small-1 columns" ><input name="compatelsol5" type="text" id="compatelsol5" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][4]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol6)"></div>
            <div class="small-1 columns" ><input name="compatelsol6" type="text" id="compatelsol6" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][5]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol7)"></div>
            <div class="small-1 columns" ><input name="compatelsol7" type="text" id="compatelsol7" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][6]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol8)"></div>
            <div class="small-1 columns" ><input name="compatelsol8" type="text" id="compatelsol8" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][7]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol9)"></div>
            <div class="small-1 columns" ><input name="compatelsol9" type="text" id="compatelsol9" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][8]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsol10)"></div>
            <div class="small-1 columns" ><input name="compatelsol10" type="text" id="compatelsol10" value="<?php if(isset($row2['Folio_Cliente'])&& $row2['TelDatEmp']!= '') {  echo $row2['TelDatEmp'][9]; } ?>" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,compatelsolext)"></div>
            <div class="small-2 columns" ><input name="compatelsolext" type="text" id="compatelsolext" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['ExtDatEmp']; } ?>" size="20px" placeholder="Extensión" onkeypress="return validaNumero(event)"></div>
          </p>
          </div>

          </div>
          <hr>

          <p align="left"><strong>REFERENCIAS PERSONALES</strong></p>
        
          <div id="secRefPersonales1">
          <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="nomref1" type="text" id="nomref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></div>
            <div class="small-5 columns"><input name="parenref1" type="text" id="parenref1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer']; } ?>" size="40px" placeholder="Parentesco o relación" pattern ="alpha"></div>
          </p>
          </div>
          <div class="row">
          <p align="left">Telefono(Con lada - 10 dígitos):
            <div class="small-1 columns"><input name="telref11" type="text" id="telref11" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][0]; } ?>" maxlength="1"  onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref12)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref12" type="text" id="telref12" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][1]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref13)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref13" type="text" id="telref13" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][2]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref14)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref14" type="text" id="telref14" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][3]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref15)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref15" type="text" id="telref15" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][4]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref16)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref16" type="text" id="telref16" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][5]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref17)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref17" type="text" id="telref17" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][6]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref18)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref18" type="text" id="telref18" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][7]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref19)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref19" type="text" id="telref19" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][8]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref110)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref110" type="text" id="telref110" size="1px" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer']!='') {  echo $row['TelRefPer'][9]; } ?>" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,nomref2)" pattern="integer"></div>
          </p>
          </div>
          </div>

          <div id="secRefPersonales2">
          <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="nomref2" type="text" id="nomref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomRefPer2']; } ?>" size="54px" placeholder="Nombre" pattern="alpha"></div>
            <div class="small-5 columns"><input name="parenref2" type="text" id="parenref2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ParenRefPer2']; } ?>" size="40px" placeholder="Parentesco o relación" pattern="alpha"></div>
          </p>
          </div>
          <br>
          <div class="row">
          <p align="left">Telefono(Con lada - 10 dígitos):
            <div class="small-1 columns"><input name="telref21" type="text" id="telref21" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][0]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref22)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref22" type="text" id="telref22" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][1]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref23)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref23" type="text" id="telref23" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][2]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref24)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref24" type="text" id="telref24" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][3]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref25)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref25" type="text" id="telref25" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][4]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref26)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref26" type="text" id="telref26" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][5]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref27)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref27" type="text" id="telref27" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][6]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref28)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref28" type="text" id="telref28" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][7]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref29)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref29" type="text" id="telref29" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][8]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,telref210)" pattern="integer"></div>
            <div class="small-1 columns"><input name="telref210" type="text" id="telref210" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelRefPer2']!='') {  echo $row['TelRefPer2'][9]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,refbanc)" pattern="integer"></div>
          </p>
          </div>
          </div>


          <hr>
          <p align="left"><strong>REFERENCIAS BANCARIAS (TARJETA DE CRÉDITO)</strong></p>
          <div id="secRefBancarias1">
          <div class="row">
          <p align="left">
           <div class="small-5 columns"> <input name="refbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancRefBan']; } ?>" type="text" id="refbanc" size="54px" placeholder="Banco"></div>
           <div class="small-5 columns"> <input name="tarjrefbanc" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarRefBan']; } ?>" type="text" id="tarjrefbanc" size="40px" placeholder="Número de Tarjeta de Crédito"></div>
          </p>
          </div>
          </div>
          <hr>

          <p align="left"><strong>CARGO DIRECTO (para contratos en M.N.) </strong></p>
          <div id="secCarDirecto">
          <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="cargdir" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['BancCarDir']; } ?>" type="text" id="cargdir" size="54px" placeholder="Banco"></div>
            <div class="small-5 columns"><input name="nocuentcd" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NoTarCarDir']; } ?>" type="text" id="nocuentcd" size="40px" placeholder="Número de Cuenta (CLAVE)"></div>
          </p>
          </div>
          </div>
          <hr>
          <p align="left"><strong>DATOS DEL CONYUGE (EN CASO DE UNIR INGRESOS) </strong></p>
          <div id="secDatConyuge">
          <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="conyunom" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomDatCon']; } ?>" type="text" id="conyunom" size="40px" placeholder="Nombre(s) del conyuge" pattern="alpha">
                                         <input name="conyuape1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatDatCon']; } ?>" type="text" pattern="alpha" id="conyuape1" size="20px" placeholder="Apellido Paterno"onkeypress="return validaTexto(event)" pattern="alpha">
                                         <input name="conyuape2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatDatCon']; } ?>" type="text" id="conyuape2" size="20px" placeholder="Apellido Materno"onkeypress="return validaTexto(event)" pattern="alpha"></div>
            
            <div class="small-3 columns"><input name="compaconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CompDatCon']; } ?>" type="text" id="compaconyu" size="30px" placeholder="Compañia"></div>
            <div class="small-3 columns"><input name="puestconyu" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['PuestDatCon']; } ?>" type="text" id="puestconyu" size="20px" placeholder="Puesto"></div>
          </p>
          </div>
          </div>
          <hr>
          <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
          <div id="secDatObligadoSolidarioPF1">
          <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="datobnom1" type="text" id="datobnom1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol']; } ?>" placeholder="Nombre(s)" pattern="alpha"></div>
            <div class="small-5 columns"><input name="datobappat1" type="text" id="datobappat1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol']; } ?>" placeholder="Apellido Paterno" pattern="alpha"></div>
            <div class="small-5 columns"><input name="datobapmat1" type="text" id="datobapmat1" size="30px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol']; } ?>" placeholder="Apellido Materno" pattern="alpha"></div>
            <div class="small-5 columns"><input name="datobdir1" type="text" id="datobdir1" size="48px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObSol']; } ?>" placeholder="Dirección / Calle y número"></div>
            <div class="small-5 columns"><input name="datobcol1" type="text" id="datobcol1" size="48px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObSol']; } ?>" placeholder="Colonia"></div>
            <div class="small-5 columns"><input name="datobcd1" type="text" id="datobcd1" size="20px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObSol']; } ?>" placeholder="Ciudad"></div>
            <div class="small-10 columns"><input name="datoblugnac1" type="text" id="datoblugnac1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol']; } ?>" size="30px" placeholder="Lugar nacimiento (País y Edo.)"></div>
          </p>
          </div>
          <p align="left">
            Tiene propiedad a su nombre? 
            <input id="datobprop1A" name="datobprop1" type="radio" <?php if(isset($row['Folio_Cliente'])) { if($row['PropObSol']=='Si'){echo "checked";} } ?> value="Si"><label for="datobprop1A">Si</label>
            
            <input id="datobprop1B" name="datobprop1" type="radio" <?php if(isset($row['Folio_Cliente'])) { if($row['PropObSol']=='No'){echo "checked";} } ?> value="No"><label for="datobprop1B">No</label>
          </p>
          <div class="row"> 
          <p align="left">
            <div class="small-4 columns"><input name="datobedo1" type="text" id="datobedo1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObSol']; } ?>" size="30px" placeholder="Estado"></div>
            <div class="small-4 columns"><input name="datobcp1" type="text" id="datobcp1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObSol']; } ?>" size="30px" placeholder="C.P." onkeypress="return validaNumero(event)" patern="integer"></div>
            <div class="small-4 columns"><input  name="datobmail1" type="text" id="datobmail1" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol']; } ?>" size="30px" placeholder="Email" pattern="email"></div>
          </p>
          </div>
          <p align="left">sexo:
            <input id="datobsex1" name="datobsex1" type="radio" value="Masculino" <?php if(isset($row['Folio_Cliente'])) { if($row['SexoObSol']=='Masculino'){echo "checked";} } ?>><label for="datobprop1B"><i class="step fi-male size-72"></i>  M</label>
         
            <input id="datobsex1" name="datobsex1" type="radio" value="Femenino" <?php if(isset($row['Folio_Cliente'])) { if($row['SexoObSol']=='Femenino'){echo "checked";} } ?>><label for="datobprop1B"><i class="step fi-female size-72"></i>  F</label>
          </p>
          <div class="row">
          <p align="left">
            Fecha de nacimiento:
            <div class="small-4 columns"><input name="datobfechnac1d" type="date" id="datobfechnac1d" size="1px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSol']; } ?>" maxlength="2" placeholder="dd" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobfechnac1m)"></div>
            <div class="small-4 columns"><input name="datobed1" type="text" id="datobed1" size="2px" placeholder="Edad" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSol']; } ?>" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-4 columns"><input name="datobcurp1" type="text" id="datobcurp1" size="22px" placeholder="CURP" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol']; } ?>" onkeypress="return validaRFC(event)" pattern="alpha_numeric"></div>
          </p>
          </div>
          <div class="row">
          <p align="left">RFC con homoclave:
            <div class="small-10 columns">
            <div class="small-1 columns"><input name="datobrfc11" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][0]; } ?>" type="text" id="datobrfc11" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc12)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc12" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][1]; } ?>" type="text" id="datobrfc12" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc13)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc13" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][2]; } ?>" type="text" id="datobrfc13" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc14)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc14" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][3]; } ?>" type="text" id="datobrfc14" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc15)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc15" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][4]; } ?>" type="text" id="datobrfc15" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc16)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc16" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][5]; } ?>" type="text" id="datobrfc16" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc17)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc17" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][6]; } ?>" type="text" id="datobrfc17" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc18)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc18" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][7]; } ?>" type="text" id="datobrfc18" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc19)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc19" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][8]; } ?>" type="text" id="datobrfc19" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc110)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc110" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][9]; } ?>" type="text" id="datobrfc110" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc111)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc111" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][10]; } ?>" type="text" id="datobrfc111" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc112)" pattern="alpha_numeric"></div>
            <div class="small-1 columns"><input name="datobrfc112" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][11]; } ?>" type="text" id="datobrfc112" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc113)" pattern="alpha_numeric"></div></div>
            <div class="small-1 columns"><input name="datobrfc113" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol']!='') {  echo $row['RFCObSol'][12]; } ?>" type="text" id="datobrfc113" size="1px" maxlength="1" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobtel11)" pattern="alpha_numeric"></div>
          </p>
          </div>
          <div class="row">
          <p align="left">Telefono(Con lada - 10 dígitos):
            <div class="small-1 columns"><input name="datobtel11" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][0]; } ?>" type="text" id="datobtel11" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel12)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel12" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][1]; } ?>" type="text" id="datobtel12" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel13)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel13" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][2]; } ?>" type="text" id="datobtel13" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel14)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel14" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][3]; } ?>" type="text" id="datobtel14" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel15)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel15" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][4]; } ?>" type="text" id="datobtel15" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel16)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel16" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][5]; } ?>" type="text" id="datobtel16" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel17)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel17" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][6]; } ?>" type="text" id="datobtel17" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel18)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel18" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][7]; } ?>" type="text" id="datobtel18" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel19)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel19" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][8]; } ?>" type="text" id="datobtel19" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel110)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel110" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol']!='') {  echo $row['TelObSol'][9]; } ?>" type="text" id="datobtel110" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel112)" pattern="integer"></div>
          </p>
          </div>
          <p align="left">Telefono Movil (Con lada - 10 dígitos):
            <div class="small-1 columns"><input name="datobtel112" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][0]; } ?>" type="text" id="datobtel112" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel122)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel122" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][1]; } ?>" type="text" id="datobtel122" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel132)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel132" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][2]; } ?>" type="text" id="datobtel132" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel142)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel142" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][3]; } ?>" type="text" id="datobtel142" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel152)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel152" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][4]; } ?>" type="text" id="datobtel152" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel162)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel162" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][5]; } ?>" type="text" id="datobtel162" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel172)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel172" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][6]; } ?>" type="text" id="datobtel172" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel182)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel182" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][7]; } ?>" type="text" id="datobtel182" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel192)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel192" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][8]; } ?>" type="text" id="datobtel192" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel1102)" pattern="integer"></div>
            <div class="small-1 columns"><input name="datobtel1102" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol']!='') {  echo $row['MovObSol'][9]; } ?>" type="text" id="datobtel1102" size="1px" maxlength="1" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobnom2)" pattern="integer"></div>
          </p>
          </div>
          <hr>
          <p align="left"><strong>DATOS DEL OBLIGADO SOLIDARIO (2) PERSONA FÍSICA, PROPIETARIO DE BIEN INMUEBLE </strong></p>
          <div id="secDatObligadoSolidarioPF2">
         <div class="row">
          <p align="left">
            <div class="small-5 columns"><input name="datobnom2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['NomObSol2']; } ?>" type="text" id="datobnom2" size="30px" placeholder="Nombre(s)" pattern="alpha"></div>
            <div class="small-5 columns"><input name="datobappat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApPatObSol2']; } ?>" type="text" id="datobappat2" size="30px" placeholder="Apellido Paterno" pattern="alpha"></div>
            <div class="small-5 columns"><input name="datobapmat2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ApMatObSol2']; } ?>" type="text" id="datobapmat2" size="30px" placeholder="Apellido Materno" pattern="alpha"></div>
            <div class="small-5 columns"><input name="datobdir2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['DirObSol2']; } ?>" type="text" id="datobdir2" size="48px" placeholder="Dirección / Calle y número"></div>
            <div class="small-5 columns"><input name="datobcol2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['ColObSol2']; } ?>"type="text" id="datobcol2" size="48px" placeholder="Colonia"></div>
            <div class="small-5 columns"><input name="datobcd2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CdObSol2']; } ?>" type="text" id="datobcd2" size="20px" placeholder="Ciudad"></div>
            <div class="small-10 columns"><input name="datoblugnac2" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['LugNacObSol2']; } ?>" type="text" id="datoblugnac2" size="30px" placeholder="Lugar nacimiento (País y Edo.)"></div>
          </p>
         </div>
          <p align="left">
            Tiene propiedad a su nombre? 
            <input id="datobprop2A" name="datobprop2" type="radio" value="Si" <?php if(isset($row['Folio_Cliente'])) { if($row['PropObSol2']=='Si'){echo "checked";} } ?>><label for="datobprop2A">Si</label>
            
            <input id="datobprop2B" name="datobprop2" type="radio" value="No" <?php if(isset($row['Folio_Cliente'])) { if($row['PropObSol2']=='No'){echo "checked";} } ?>><label for="datobprop2B">No</label>
          </p>
          <div class="row">
          <p align="left">
            <div class="small-4 columns"><input name="datobedo2" type="text" id="datobedo2" size="30px" placeholder="Estado" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdoObSol2']; } ?>"></div>
            <div class="small-4 columns"><input name="datobcp2" type="text" id="datobcp2" size="30px" placeholder="C.P." value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CPObSol2']; } ?>" onkeypress="return validaNumero(event)" pattern="integer"></div>
            <div class="small-4 columns"><input  name="datobmail2" type="text" id="datobmail2" size="30px" placeholder="Email" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EmailObSol2']; } ?>" pattern="email"></div>
          </p>
          </div>
          <p align="left">sexo:<input id="datobsex2" name="datobsex2" type="radio" value="Masculino" <?php if(isset($row['Folio_Cliente'])) { if($row['SexoObSol2']=='Masculino'){echo "checked";} } ?>><i class="step fi-male size-72"></i>  M</label>
                               <input id="datobsex2" name="datobsex2" type="radio" value="Femenino" <?php if(isset($row['Folio_Cliente'])) { if($row['SexoObSol2']=='Femenino'){echo "checked";} } ?>><i class="step fi-male size-72"></i>  F</label>
            </p>
            <div class="row"> 
            <p align="left">
            Fecha de nacimiento:
            <div class="small-4 columns"><input name="datobfechnac2d" type="date" id="datobfechnac2d" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['FeNacObSol2']; } ?>" size="1px" maxlength="2" placeholder="dd" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobfechnac2m)"></div>
            <div class="small-4 columns"><input name="datobed2" type="text" id="datobed2" size="2px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['EdObSol2']; } ?>" placeholder="Edad" onkeypress="return validaNumero(event)"></div>
            <div class="small-4 columns"><input name="datobcurp2" type="text" id="datobcurp2" size="22px" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row['CURPObSol2']; } ?>" placeholder="CURP" onkeypress="return validaRFC(event)"></div>
          </p>
            </div>
            <div class="row">
          <p align="left">RFC con homoclave:
            <div class="small-10 columns">
            <div class="small-1 columns"><input name="datobrfc21" type="text" id="datobrfc21" size="1px" maxlength="1"  value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][0]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc22)"></div>
            <div class="small-1 columns"><input name="datobrfc22" type="text" id="datobrfc22" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][1]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc23)"></div>
            <div class="small-1 columns"><input name="datobrfc23" type="text" id="datobrfc23" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][2]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc24)"></div>
            <div class="small-1 columns"><input name="datobrfc24" type="text" id="datobrfc24" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][3]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc25)"></div>
            <div class="small-1 columns"><input name="datobrfc25" type="text" id="datobrfc25" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][4]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc26)"></div>
            <div class="small-1 columns"><input name="datobrfc26" type="text" id="datobrfc26" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][5]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc27)"></div>
            <div class="small-1 columns"><input name="datobrfc27" type="text" id="datobrfc27" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][6]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc28)"></div>
            <div class="small-1 columns"><input name="datobrfc28" type="text" id="datobrfc28" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][7]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc29)"></div>
            <div class="small-1 columns"><input name="datobrfc29" type="text" id="datobrfc29" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][8]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc210)"></div>
            <div class="small-1 columns"><input name="datobrfc210" type="text" id="datobrfc210" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][9]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc211)"></div>
            <div class="small-1 columns"><input name="datobrfc211" type="text" id="datobrfc211" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][10]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc212)"></div>
            <div class="small-1 columns"><input name="datobrfc212" type="text" id="datobrfc212" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][11]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobrfc213)"></div></div>
            <div class="small-1 columns"><input name="datobrfc213" type="text" id="datobrfc213" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['RFCObSol2']!='') {  echo $row['RFCObSol2'][12]; } ?>" onkeypress="return validaRFC(event)" onKeyUp="myFunction(this,this.value,datobtel21)"></div>
          </p>
            </div>
            <div class="row">
          <p align="left">Telefono(Con lada - 10 dígitos):
            <div class="small-1 columns"><input name="datobtel21" type="text" id="datobtel21" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][0]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel22)"></div>
            <div class="small-1 columns"><input name="datobtel22" type="text" id="datobtel22" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][1]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel23)"></div>
            <div class="small-1 columns"><input name="datobtel23" type="text" id="datobtel23" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][2]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel24)"></div>
            <div class="small-1 columns"><input name="datobtel24" type="text" id="datobtel24" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][3]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel25)"></div>
            <div class="small-1 columns"><input name="datobtel25" type="text" id="datobtel25" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][4]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel26)"></div>
            <div class="small-1 columns"><input name="datobtel26" type="text" id="datobtel26" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][5]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel27)"></div>
            <div class="small-1 columns"><input name="datobtel27" type="text" id="datobtel27" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][6]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel28)"></div>
            <div class="small-1 columns"><input name="datobtel28" type="text" id="datobtel28" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][7]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel29)"></div>
            <div class="small-1 columns"><input name="datobtel29" type="text" id="datobtel29" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][8]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel210)"></div>
            <div class="small-1 columns"><input name="datobtel210" type="text" id="datobtel210" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['TelObSol2']!='') {  echo $row['TelObSol2'][9]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel212)"></div>
          </p>
            </div>
            <div class="row">
          <p align="left">Telefono Movil(Con lada - 10 dígitos):
            <div class="small-1 columns"><input name="datobtel212" type="text" id="datobtel212" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][0]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel222)"></div>
            <div class="small-1 columns"><input name="datobtel222" type="text" id="datobtel222" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][1]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel232)"></div>
            <div class="small-1 columns"><input name="datobtel232" type="text" id="datobtel232" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][2]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel242)"></div>
            <div class="small-1 columns"><input name="datobtel242" type="text" id="datobtel242" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][3]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel252)"></div>
            <div class="small-1 columns"><input name="datobtel252" type="text" id="datobtel252" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][4]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel262)"></div>
            <div class="small-1 columns"><input name="datobtel262" type="text" id="datobtel262" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][5]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel272)"></div>
            <div class="small-1 columns"><input name="datobtel272" type="text" id="datobtel272" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][6]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel282)"></div>
            <div class="small-1 columns"><input name="datobtel282" type="text" id="datobtel282" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][7]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel292)"></div>
            <div class="small-1 columns"><input name="datobtel292" type="text" id="datobtel292" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][8]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,datobtel2102)"></div>
            <div class="small-1 columns"><input name="datobtel2102" type="text" id="datobtel2102" size="1px" maxlength="1" value="<?php if(isset($row['Folio_Cliente'])&& $row['MovObSol2']!='') {  echo $row['MovObSol2'][9]; } ?>" onkeypress="return validaNumero(event)" onKeyUp="myFunction(this,this.value,clavcon)"></div>
          </p>
            </div>
            </div>
          <hr>
        º
          
          <hr>
        </div>
         </div>
</li>

  <li class="accordion-item" data-accordion-item>
    <a href="#" onClick="cambio()" class="accordion-title"><h4 align="center" id="dos">FORMATO DE IDENTIFICACIÓN DEL CLIENTE POR CLASIFICACIÓN DE RIESGO&nbsp;</h4></a>
    <div class="accordion-content" data-tab-content>
        <div id="riesgo">
          
          <h4 align="left">Datos generales del cliente</h4>
          <p align="left">Tipo de Cliente: 
            <input id="escliente1" name="escliente" type="radio" value="1" required><label for="escliente1"> Nuevo</label>
            
            <input id="escliente2" name="escliente" type="radio" value="2" required <?php if(isset($row['Folio_Cliente'])) { echo "checked"; } ?>><label for="escliente2"> Actualización</label>
              
          </p>
          <table width="100%" border="0">
            <tr>
              <td width="22%">Nombre o razón social </td>
              <td width="78%"><input name="textfield" type="text" id="textfield" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Número de cliente </td>
              <td><input name="textfield2" type="text" id="textfield2" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Domicilio particular(Calle, número) </td>
              <td><input name="textfield3" type="text" id="textfield3" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield4" type="text" id="textfield4" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Delegación o municipio </td>
              <td><input name="textfield5" type="text" id="textfield5" size="100%" value="<?php if(isset($row2['Folio_Cliente'])) {  echo $row2['MunicipioSolicitante']; } ?>" required></td>
            </tr>
            <tr>
              <td>Estado o provincia </td>
              <td><input name="textfield6" type="text" id="textfield6" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Fecha de nacimiento o constitución </td>
              <td><input name="textfield7" type="text" id="textfield7" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Código postal </td>
              <td><input name="textfield8" type="text" id="textfield8" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>Ciudad o población </td>
              <td><input name="textfield9" type="text" id="textfield9" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield10" type="text" id="textfield10" size="100%" readonly=""></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield11" type="text" id="textfield11" size="100%" readonly="" ></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <h4 align="left">Calificación del grado de riesgo</h4>
          <table width="100%" border="0">
            <tr>
              <td width="32%">Actividad | Objeto Social </td>
              <td width="68%"><select id="select" name="select" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3" <?php if(isset($row['Folio_Cliente'])) { if($row3['Antiguedad_ObjetoSocial']=="Vulnerable"){echo "selected";}}?>>Vulnerable</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Informal"){echo "selected";}}?>>Informal</option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_ObjetoSocial']=="Otra"){echo "selected";}}?>>Otra</option>
              </select>
              </td>
            </tr>
            <tr>
              <td>Antigüedad del cliente </td>
              <td><select id="select2" name="select2" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="1-3 años"){echo "selected";}}?>>1-3 años</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="4-6 años"){echo "selected";}}?>>4-6 años</option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="7-10 años"){echo "selected";}}?>>7-10 años</option>
                <option value="0"<?php if(isset($row['Folio_Cliente'])) {if($row3['Antiguedad_Cliente']=="N/A"){echo "selected";}}?>>N/A</option>
              </select></td>
            </tr>
            <tr>
              <td>Naturaleza de las operaciones </td>
              <td><select id="select3" name="select3" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Naturaleza_Operaciones']=="Prestamo"){echo "selected";}}?>>Prestamo</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Naturaleza_Operaciones']=="Arrendamiento"){echo "selected";}}?>>Arrendamiento</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Naturaleza_Operaciones']=="Otros"){echo "selected";}}?>>Otros</option>
              </select></td>
            </tr>
            <tr>
              <td>Q de Beneficiarios </td>
              <td><select id="select4" name="select4" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="1 a 2"){echo "selected";}}?>>1 a 2</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="3 a 4"){echo "selected";}}?>>3 a 4</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="5 o mas"){echo "selected";}}?>>5 o mas</option>
                <option value="0"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_Beneficiarios']=="N/A"){echo "selected";}}?>>N/A</option>
              </select></td>
            </tr>
            <tr>
              <td>Q de Terceros Relacionados (Apoderados y Cotitulares) </td>
              <td><select id="select5" name="select5" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="1 a 2"){echo "selected";}}?>>1 a 2</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="3 a 4"){echo "selected";}}?>>3 a 4</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="5 o mas"){echo "selected";}}?>>5 o mas</option>
                <option value="0"<?php if(isset($row['Folio_Cliente'])) {if($row3['Numero_TercerosRelacionados']=="N/A"){echo "selected";}}?>>N/A</option>
              </select></td>
            </tr>
            <tr>
              <td>PEPs Relacionados </td>
              <td><select id="select6" name="select6" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['PEPs_Relacionados']=="1% - 49%"){echo "selected";}}?>>1% - 49%</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['PEPs_Relacionados']=="50% - 74%"){echo "selected";}}?>>50% - 74%</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['PEPs_Relacionados']=="75% - 100%"){echo "selected";}}?>>75% - 100%</option>
              </select></td>
            </tr>
            <tr>
              <td>Alerta Reputacional </td>
              <td><select id="select7" name="select7" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Alerta_Reputacional']=="1% - 49%"){echo "selected";}}?>>1% - 49%</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Alerta_Reputacional']=="50% - 74%"){echo "selected";}}?>>50% - 74%</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Alerta_Reputacional']=="75% - 100%"){echo "selected";}}?>>75% - 100%</option>
              </select></td>
            </tr>
            <tr>
              <td>Volumen esperado (Monto) </td>
              <td><select id="select8" name="select8" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Volumen_Esperado']=="$18000 - $20000"){echo "selected";}}?>>$18000 - $20000</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Volumen_Esperado']=="$21000 - $25000"){echo "selected";}}?>>$21000 - $25000</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Volumen_Esperado']=="mas de $25000"){echo "selected";}}?>>mas de $25000</option>
              </select></td>
            </tr>
            <tr>
              <td>Frecuencia esperada (No. Veces) </td>
              <td><select id="select9" name="select9" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Frecuencia_Esperada']=="1 a 3"){echo "selected";}}?>>1 a 3</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Frecuencia_Esperada']=="4 a 6"){echo "selected";}}?>>4 a 6</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Frecuencia_Esperada']=="7 a 10"){echo "selected";}}?>>7 a 10</option>
              </select></td>
            </tr>
            <tr>
              <td>Instrumento Monetario Utilizado </td>
              <td><select id="select10" name="select10" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Instrumento_Monetario']=="Transferencia"){echo "selected";}}?>>Transferencia</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Instrumento_Monetario']=="Cheque"){echo "selected";}}?>>Cheque</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Instrumento_Monetario']=="Efectivo"){echo "selected";}}?>>Efectivo</option>
              </select></td>
            </tr>
            <tr>
              <td>Canales o Medios Utilizados </td>
              <td><select id="select11" name="select11" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Canales_MediosUtilizados']=="Agencia"){echo "selected";}}?>>Agencia</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Canales_MediosUtilizados']=="Internet"){echo "selected";}}?>>Internet</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Canales_MediosUtilizados']=="Otro"){echo "selected";}}?>>Otro</option>
              </select></td>
            </tr>
            <tr>
              <td>País | Estado Oficial </td>
              <td><select id="select12" name="select12" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOficial']=="México"){echo "selected";}}?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOficial']=="Otros"){echo "selected";}}?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOficial']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
              </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia </td>
              <td><select id="select13" name="select13" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidencia']=="Guerrero-Michoacan-Tamaulipas-Morelos"){echo "selected";}}?>>Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidencia']=="Durango-Chihuhua-Jalisco-México-CD México-Sonora"){echo "selected";}}?>>Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidencia']=="Puebla-Coahuila-Zcatecas-Hidalgo-Durango"){echo "selected";}}?>>Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
              </select></td>
            </tr>
            <tr>
              <td>País | Estado Operación </td>
              <td><select id="select14" name="select14" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOperacion']=="Guerrero-Michoacan-Tamaulipas-Morelos"){echo "selected";}}?>>Guerrero-Michoacan-Tamaulipas-Morelos</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOperacion']=="Durango-Chihuhua-Jalisco-México-CD México-Sonora"){echo "selected";}}?>>Durango-Chihuhua-Jalisco-México-CD México-Sonora</option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoOperacion']=="Puebla-Coahuila-Zcatecas-Hidalgo-Durango"){echo "selected";}}?>>Puebla-Coahuila-Zcatecas-Hidalgo-Durango</option>
              </select></td>
            </tr>
            <tr>
              <td>Origen de los recursos </td>
              <td><select id="select15" name="select15" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Origen_Recursos']=="México"){echo "selected";}}?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Origen_Recursos']=="Otros"){echo "selected";}}?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Origen_Recursos']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
              </select></td>
            </tr>
            <tr>
              <td>Destino de los recursos </td>
              <td><select id="select16" name="select16" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Destino_Recursos']=="México"){echo "selected";}}?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Destino_Recursos']=="Otros"){echo "selected";}}?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Destino_Recursos']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
              </select></td>
            </tr>
            <tr>
              <td>País | Estado Residencia de Terceros Relacionados </td>
              <td><select id="select17" name="select17" size="1" style="width:60%;" required>
                <option value="" selected></option>
                <option value="1"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidenciaTerceros']=="México"){echo "selected";}}?>>México</option>
                <option value="2"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidenciaTerceros']=="Otros"){echo "selected";}}?>>Otros</option>
                <option value="3"<?php if(isset($row['Folio_Cliente'])) {if($row3['Pais_EstadoResidenciaTerceros']=="Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar"){echo "selected";}}?>>Corea del Norte-Iran-Sudan-Siria-Syria-Myanmar</option>
              </select></td>
            </tr>
          </table>
          <hr>
		  
        </div>
</div>
</li>

<li class="accordion-item" data-accordion-item>
    <a href="#" onClick="cambio2()" class="accordion-title"><h4 id="tres">FORMATO DE IDENTIFICACION, CONOCIMIENTO DEL CLIENTE Y CONSTANCIA DE ENTREVISTA</h4></a>
    <div class="accordion-content" data-tab-content>


        <div id="identificacion">
          
          <h6 align="left">PERSONA FÍSICA Y RELACIONADOS </h6>
          <table width="100%" border="0">
            <tr>
              <td width="28%">Apellido Paterno </td>
              <td width="72%"><input name="textfield12" type="text" id="textfield12" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield13" type="text" id="textfield13" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield14" type="text" id="textfield14" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Género</td>
              <td><input name="textfield15" type="text" id="textfield15" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Lugar de Nacimiento (Estado y País) </td>
              <td><input name="textfield16" type="text" id="textfield16" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield17" type="text" id="textfield17" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Domicilio (calle) </td>
              <td><input name="textfield18" type="text" id="textfield18" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Domicilio (Número)</td>
              <td><input name="textfield19" type="text" id="textfield19" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield20" type="text" id="textfield20" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield21" type="text" id="textfield21" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield22" type="text" id="textfield22" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield23" type="text" id="textfield23" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Ciudad</td>
              <td><input name="textfield24" type="text" id="textfield24" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield25" type="text" id="textfield25" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield26" type="text" id="textfield26" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Correo Electrónico </td>
              <td><input name="textfield27" type="text" id="textfield27" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield28" type="text" id="textfield28" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield29" type="text" id="textfield29" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Numero de serie de la FIEL*</td>
              <td><input name="textfield30" type="text" id="textfield30" size="100%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['NumSerieFIEL']; } ?>" required></td>
            </tr>
            <tr>
              <td>Nacionalidad</td>
              <td><input name="textfield31" type="text" id="textfield31" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield32" type="text" id="textfield32" size="100%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['Ocupacion_Profesion']; } ?>"  ></td>
            </tr>
            <tr>
              <td>Nombre de la Empresa y Giro (donde labora) </td>
              <td><input name="textfield33" type="text" id="textfield33" size="100%"  readonly=""></td>
            </tr>
            <tr>
              <td>Domicilio donde labora </td>
              <td><input name="textfield34" type="text" id="textfield34" size="100%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['DomicilioLaboral']; } ?>" required></td>
            </tr>
            <tr>
              <td>Sueldo o ingreso mensual </td>
              <td><input name="textfield35" type="text" id="textfield35" size="100%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['SueldoSolicitante']; } ?>" onkeypress="return validaNumero(event)" required></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield36" type="text" id="textfield36" size="100%" readonly="" ></td>
            </tr>
            <tr>
              <td>Actividad Económica Adicional </td>
              <td><input name="textfield37" type="text" id="textfield37" size="100%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['ActEcoAdicional']; } ?>" required></td>
            </tr>
            <tr>
              <td>Ingresos Adicionales Mensuales Apox </td>
              <td><input name="textfield38" type="text" id="textfield38" size="100%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row2['IngAdMensualAprox']; } ?>" onkeypress="return validaNumero(event)" required></td>
            </tr>
          </table>
		  <br>
          <hr>
		  <br>
          <h6 align="left">DOCUMENTACION DE IDENTIFICACION </h6>
          <table width="100%" border="0">
            <tr id="secINE">
              <td width="21%">Credencial para votar </td>
              <td width="35%"><input name="textfield39" type="text" id="textfield39" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['INESolicitante']; } ?>"></td>
              <td width="15%">Se adjunta copia: </td>
              <td width="29%" ><input id="copiasA" name="copias" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_INESolicitante']=='Si'){echo "checked";} } ?>><label for="copiasA"> Si</label>  <input id="copiasB" name="copias" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_INESolicitante']=='No'){echo "checked";} } ?>><label for="copiasB"> No</label></td>
            </tr>
            <tr id="secCedProfesional">
              <td>Pasaporte cedula profesional </td>
              <td><input name="textfield40" type="text" id="textfield40" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['Pasaporte_o_CedulaProfSolicitante']; } ?>" ></td>
              <td>Se adjunta copia: </td>
              <td ><input id="copias2A" name="copias2" type="radio" value="Si"<?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_Pasaporte_o_CedulaProfSolicitante']=='Si'){echo "checked";} } ?>><label for="copias2A"> Si</label>  <input id="copias2B" name="copias2" type="radio" value="No"<?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_Pasaporte_o_CedulaProfSolicitante']=='<noscript>
              
              </noscript>'){echo "checked";} } ?>><label for="copias2B"> No</label></td>
            </tr>
            <tr id="secCarMilitar">
              <td>Cartilla de servicio militar </td>
              <td><input name="textfield41" type="text" id="textfield41" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CartillaMilitarSolicitante']; } ?>" ></td>
              <td>Se adjunta copia: </td>
              <td ><input id="copias3A" name="copias3" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_CartillaMilitarSolicitante']=='Si'){echo "checked";} } ?>><label for="copias3A"> Si</label>  <input id="copias3B" name="copias3" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_CartillaMilitarSolicitante']=='No'){echo "checked";} } ?>><label for="copias3B"> No</label></td>
            </tr>
            <tr id="secLicConducir">
              <td>Licencia para conducir </td>
              <td><input name="textfield42" type="text" id="textfield42" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['LicenciaConducirSolicitante']; } ?>" ></td>
              <td>Se adjunta copia: </td>
              <td ><input id="copias4A" name="copias4" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_LicenciaConducirSolicitante']=='Si'){echo "checked";} } ?>><label for="copias4A"> Si</label>
                                      <input id="copias4B" name="copias4" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_LicenciaConducirSolicitante']=='No'){echo "checked";} } ?>><label for="copias4B"> No</label></td>
            </tr>
            <tr id="secOtrIdentificacion">
              <td>Otra</td>
              <td><input name="textfield43" type="text" id="textfield43" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OtraIdentSolicitante']; } ?>" ></td>
              <td>Se adjunta copia: </td>
              <td ><input id="copias5A" name="copias5" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_OtraIdentSolicitante']=='Si'){echo "checked";} } ?>><label for="copias5A"> Si</label>
                                            <input id="copias5B" name="copias5" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_OtraIdentSolicitante']=='No'){echo "checked";} } ?>><label for="copias5B"> No</label></td>
            </tr>
            <tr>
              <td>Especificar</td>
              <td id="secOtrIdentificacion2"><input name="textfield44" type="text" id="textfield44" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EspIdentSolicitante']; } ?>" ></td>
              <td>Se cotejo vs original: </td>
              <td ><input id="cotejo1" name="cotejo" type="radio" value="Si" <?php if(isset($row['Folio_Cliente'])) { if($row3['CotejoVsOriginal']=='Si'){echo "checked";} } ?> required><label for="cotejo1"> Si</label>
                   <input id="cotejo2" name="cotejo" type="radio" value="No" <?php if(isset($row['Folio_Cliente'])) { if($row3['CotejoVsOriginal']=='No'){echo "checked";} } ?> required><label for="cotejo2"> No</label></td>
            </tr>
          </table>
		  <BR>
		  <p align="left">OTROS DOCUMENTOS QUE SE ADJUNTAN:</p>
		  <table width="100%" border="0">
            <tr>
              <td width="30%">Se adjunta CURP y/o cédula RFC, FEA* </td>
              <td width="70%"><input id="adjuntos1A" name="adjuntos1" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_CURP_RFC_FEA']=='Si'){echo "checked";} } ?> required><label for="adjuntos1A"> Si</label>
                              <input id="adjuntos1B" name="adjuntos1" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_CURP_RFC_FEA']=='No'){echo "checked";} } ?> required><label for="adjuntos1B"> No</label></td>
            </tr>
            <tr>
              <td>Se adjunta comprobante de domicilio </td>
              <td><input id="adjuntos2A" name="adjuntos2" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_ComprobanteDom']=='Si'){echo "checked";} } ?> required><label for="adjuntos2A"> Si</label>
                  <input id="adjuntos2B" name="adjuntos2" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['Adjunta_ComprobanteDom']=='No'){echo "checked";} } ?> required><label for="adjuntos2B"> No</label></td>
            </tr>
            <tr>
              <td>Fecha del comprobante de domicilio </td>
              <td><input name="fechaComprobante" type="date" id="fechaComprobante" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FechaComprobanteDom']; } ?>" required></td>
            </tr>
            <tr>
              <td>Domicilio manifestado coincide con la ID</td>
              <td><input id="adjuntos3A" name="adjuntos3" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['DomicilioCoincideId']=='Si'){echo "checked";} } ?> required><label for="adjuntos3A"> Si</label>
                  <input id="adjuntos3B" name="adjuntos3" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['DomicilioCoincideId']=='No'){echo "checked";} } ?> required><label for="adjuntos3B"> No</label></td>
            </tr>
          </table>
		  <br>
		  <p align="left" style="font-size:8px;">*Cuando cuente con ellas. <br>No será necesario presentar la constancia de la Clave Única de Registro de Población si ésta aparece en otro documento o identificación oficial;</p>
		
		  <hr>
		  <br>
          <H6 align="left">BENEFICIARIO</H6>
          <div id="secBeneficiario">
          <table width="100%" border="0">
            <tr>
              <td width="18%">Apellido Paterno </td>
              <td width="82%"><input name="textfield45" type="text" id="textfield45" size="50%" readonly  ></td>
            </tr>
            <tr>
              <td>Apellido Materno </td>
              <td><input name="textfield46" type="text" id="textfield46" size="50%" readonly  ></td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input name="textfield47" type="text" id="textfield47" size="50%" readonly ></td>
            </tr>
            <tr>
              <td>Domicilio (calle y número) </td>
              <td><input name="textfield48" type="text" id="textfield48" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['DomBeneficiario']; } ?>" ></td>
            </tr>
            <tr>
              <td>Colonia</td>
              <td><input name="textfield49" type="text" id="textfield49" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['ColBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Código Postal </td>
              <td><input name="textfield50" type="text" id="textfield50" size="50%" onkeypress="return validaNumero(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CPBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>País</td>
              <td><input name="textfield51" type="text" id="textfield51" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PaisBeneficiario']; } ?>" ></td>
            </tr>
            <tr>
              <td>Teléfono</td>
              <td><input name="textfield52" type="text" id="textfield52" size="50%" onkeypress="return validaNumero(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['TelBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>CURP</td>
              <td><input name="textfield53" type="text" id="textfield53" size="50%" onkeypress="return validaRFC(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['CURPBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>RFC</td>
              <td><input name="textfield54" type="text" id="textfield54" size="50%" onkeypress="return validaRFC(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['RFCBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield55" type="text" id="textfield55" size="50%"  value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['ParentescoBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Porciento</td>
              <td><input name="textfield56" type="text" id="textfield56" size="50%"  onkeypress="return validaNumero(event)" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PorcientoBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Fecha de Nacimiento </td>
              <td><input name="textfield57" type="date" id="textfield57" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['FeNacBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Municipio</td>
              <td><input name="textfield58" type="text" id="textfield58" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['MunBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Estado</td>
              <td><input name="textfield59" type="text" id="textfield59" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EdoBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Estado Civil </td>
              <td><input name="textfield60" type="text" id="textfield60" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['EdoCivilBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Sociedad Conyugal </td>
              <td><input name="textfield61" type="text" id="textfield61" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['SoConBeneficiario']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ocupación o Profesión </td>
              <td><input name="textfield62" type="text" id="textfield62" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OcuProfBeneficiario']; } ?>" ></td>
            </tr>
            <tr>
              <td>PEP´s</td>
              <td><input name="textfield63" type="text" id="textfield63" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['PEPSBeneficiario']; } ?>"></td>
            </tr>
            <tr>
              <td>Origen de los Recursos </td>
              <td><input name="textfield64" type="text" id="textfield64" size="50%" value="<?php if(isset($row['Folio_Cliente'])) {  echo $row3['OrigenRecBeneficiario']; } ?>" ></td>
            </tr>
          </table>
          </div>
		  <br>
		  <hr>
		  <br>
          <H6 align="left">PERFIL TRANSACCIONAL INICIAL</H6>
          <div id="secPerTransaccional">
          <table width="100%" border="0">
            <tr>
              <td width="21%">Ingresos Comprobable(1) </td>
              <td width="39%"><input name="textfield65" type="text" id="textfield65" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans1']!=""){ echo $row3['PerTrans1'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td width="7%">Fuente</td>
              <td width="33%"><input name="textfield66" type="text" id="textfield66" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans1']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(2) </td>
              <td><input name="textfield67" type="text" id="textfield67" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans2']!=""){ echo $row3['PerTrans2'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield68" type="text" id="textfield68" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans2']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(3) </td>
              <td><input name="textfield69" type="text" id="textfield69" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans3']!=""){ echo $row3['PerTrans3'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield70" type="text" id="textfield70" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans3']; } ?>"></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(4) </td>
              <td><input name="textfield71" type="text" id="textfield71" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans4']!=""){ echo $row3['PerTrans4'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield72" type="text" id="textfield72" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans4']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos Comprobable(5) </td>
              <td><input name="textfield73" type="text" id="textfield73" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans5']!=""){ echo $row3['PerTrans5'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield74" type="text" id="textfield74" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans5']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(1) </td>
              <td><input name="textfield75" type="text" id="textfield75" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans6']!=""){ echo $row3['PerTrans6'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield76" type="text" id="textfield76" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans6']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(2)</td>
              <td><input name="textfield77" type="text" id="textfield77" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans7']!=""){ echo $row3['PerTrans7'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield78" type="text" id="textfield78" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans7']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(3)</td>
              <td><input name="textfield79" type="text" id="textfield79" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans8']!=""){ echo $row3['PerTrans8'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield80" type="text" id="textfield80" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans8']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(4)</td>
              <td><input name="textfield81" type="text" id="textfield81" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans9']!=""){ echo $row3['PerTrans9'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield82" type="text" id="textfield82" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans9']; } ?>" ></td>
            </tr>
            <tr>
              <td>Ingresos No Comprobable(5)</td>
              <td><input name="textfield83" type="text" id="textfield83" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { if($row3['FuentePerTrans10']!=""){ echo $row3['PerTrans10'];} } ?>" onkeypress="return validaNumeroDecimal(event)" onchange="ingresosPagina3()" ></td>
              <td>Fuente</td>
              <td><input name="textfield84" type="text" id="textfield84" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['FuentePerTrans10']; } ?>" ></td>
            </tr>
            <tr>
              <td >Total de Ingresos </td>
              <td ><input name="textfield85" type="text" id="textfield85" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['TotalIngreso']; } ?>" size="50%" readonly></td>
            </tr>
          </table>
		  <br>
          
        

          <div class="row">
          <div class="small-6 columns">

          <div>
          <label>
            
              <p id="valorautochange" align="left"></p>
             <input name="textfield86" type="text" id="textfield86" size="50%" onkeypress="return validaNumeroDecimal(event)"  required >
          </label>
            </div>
            <div id="engautochange">
            <label>
              <p align="left ">Enganche <input name="textfield87" type="text" id="textfield87" size="50%" onkeypress="return validaNumeroDecimal(event)"   onchange="datosAuto()"></p>
            </label>
            </div>
            <div id="porengautochange">
            <label> <p align="left">Porcentaje de Enganche<input name="textfield88" type="text" id="textfield88" size="50%"  readonly></p>
            </label>
            </div>
            <div id="porfinautochange">
            <label> 
              <p align="left">Porcentaje de Financieamiento<input name="textfield89" type="text" id="textfield89" size="50%"  readonly></p>
            </label>
            </div>
            <div id="monfinautochange">
            <label>
              
              <p align="left">Monto Financiado <input name="textfield90" type="text" id="textfield90" size="50%"  readonly></p>
            </label>
            </div>
            <div>
            <label>
              
              <p align="left">Interes Anual<input name="textfield100" type="text" id="textfield100" size="50%"  readonly onkeypress="return validaNumero(event)" ></p>
            </label>
            </div>
            <div id="comisionapchange">
            <label>
              
              <p align="left">Comisión por Apertura<input name="textfield96" type="text" id="textfield96" size="50%"  readonly onkeypress="return validaNumero(event)" ></p>
            </label>
            </div>
          </div>
          <div class="small-5 columns">
            
            <div id="segautochange">

            <label>
              
              <p align="left">Seguro de Auto<input name="textfield97" type="text" id="textfield97" size="50%"  onkeypress="return validaNumero(event)" ></p>
            </label>
            </div>
            <div>
            <label>
              
              <p align="left">Seguro de Vida<input name="textfield98" type="text" id="textfield98" size="50%"  onkeypress="return validaNumero(event)" ></p>
            </label>
            </div>
            <div id="segdeschange">
            <label>
              
              <p align="left">Seguro de Desempleo<input name="textfield99" type="text" id="textfield99" size="50%"  onkeypress="return validaNumero(event)" ></p>
            </label>
            </div>
            <div>
            <label>
              
              <p align="left">Plazo (meses)<input name="textfield91" type="text" id="textfield91" size="50%"  onkeypress="return validaNumero(event)" required></p>
            </label>
            </div>
            
            <div>
            <label>
              
              <p align="left">Pago Mensual Esperado<input name="textfield92" type="text" id="textfield92" size="50%"  onkeypress="return validaNumeroDecimal(event)" required></p>
            </label>
            </div>

         <p><input type="button" class="button" data-open="Aut" value="Cambiar Valores"></p>

<!-- This is the first modal -->
<div class="reveal" id="Aut" data-reveal>
  <h3>Clave de Autorizacion</h3>
  <div class="row">
    <div class="small-5 columns">
      
  <input type="text" id="clave" name="clave">
  <button class="button" data-close aria-label="Close reveal" id="keycheck" data-open="exampleModal3">Aceptar!</button>
    </div>
  </div>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">X</span>
  </button>
</div>
          </div>
          </div>
      <br>
        <p align="left">¿ Usted o algún familiar suyo de hasta segundo grado de consanguinidad o afinidad (cónyuge,padre,madre,hijos,hermanos, abuelos, tios, primos, cuñados, suegros, yernos, etc), desempeña o a desempeñado funciones públicas destacadas en el territorio nacional o en el Extranjero (incluyendo puestos de Gobierno Federales, Estatales ,Municipales, funciones gubernamentales o judiciales, en partidos politicos, militares de alta jerarquía, altos ejecutivos de empresas paraestatales, etc.?<br>
	        
                <input id="PEPS1" name="PEPS" type="radio" value="Si" <?php if(isset($row2['Folio_Cliente'])) { if($row3['PEPS']=='Si'){echo "checked";} } ?>><label for="PEPS1"> Si</label>

<input id="PEPS2" name="PEPS" type="radio" value="No" <?php if(isset($row2['Folio_Cliente'])) { if($row3['PEPS']=='No'){echo "checked";} } ?>><label for="PEPS2"> No</label>
	      </p>
	      <p align="left">En caso de si:</p>
        <div id="secPEPS">
	      <table width="100%" border="0">
            <tr>
              <td width="18%">¿Quién? (Nombre) </td>
              <td width="82%"><input name="textfield93" type="text" id="textfield93" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['NombrePEPS']; } ?>"></td>
            </tr>
            <tr>
              <td>Parentesco</td>
              <td><input name="textfield94" type="text" id="textfield94" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['ParentescoPEPS']; } ?>" ></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input name="textfield95" type="text" id="textfield95" size="50%" value="<?php if(isset($row['Folio_Cliente'])) { echo $row3['PuestoPEPS']; } ?>" ></td>
            </tr>
          </table>
          </div>
	      <p align="left">&nbsp; </p>
	      <hr>
		  <br>
            
                 <p align="justify">
            <input class="alert button " name="cancelar" type="button" id="cancelar" value="Cancelar" onClick="window.location.href='indexmenu.php'">
            <input class="success button "name="aceptar" type="submit" id="aceptar" value="Aceptar">
            
          </p>
        </div>

      </div>
    </li>
        </ul>

          
      </form>
    </div>
  </div>

</section>
<!-- footer -->
<footer>
	<script type="text/javascript">  
function obten() {
var sub = "ObtenInfo2.php?dato="+document.getElementById("cliente").value;
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
     if(xmlhttp.responseText!="cliente no encontrado"){
            $("#htmlext").load("solicitudPFA.php?cliente="+xmlhttp.responseText);
            
        }else{
            alert(xmlhttp.responseText);
            document.getElementById("cliente").value="";
        }

      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
}

function obten2() {
var sub = "ObtenInfo2.php?nombre="+document.getElementById("nomsol").value+"&segundo="+document.getElementById("segnomsol").value+"&paterno="+document.getElementById("apepasol").value+"&materno="+document.getElementById("apemasol").value;
//var sub = "ObtenInfo2.php?nombre=adrian&segundo=eduardo&paterno=mata&materno=martinez";


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
        
        if(xmlhttp.responseText!="cliente no encontrado"){
           document.getElementById("exampleModal2").innerHTML=xmlhttp.responseText;
            $( '#modal' ).click ();
            
        }else{
            alert(xmlhttp.responseText);

        }
     

      }
  }
xmlhttp.open("GET",sub,true);
xmlhttp.send(null);
}

function viewButton(){

  if(document.getElementById("nomsol").value!="" && document.getElementById("apepasol").value!=""){
  
    document.getElementById("botonAceptar").style.display="block";
  }else{
    
    document.getElementById("botonAceptar").style.display="none";
  }
}

 $("#keycheck").click(function(event) {
 
   var data = new FormData();

   data.append('key', document.getElementById("clave").value);
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

        if(xmlhttp.responseText=="404"){
          alert("!!Llave de Verificación Incorrecta¡¡");
        }

        if(xmlhttp.responseText=="200"){
          document.getElementById("textfield100").readOnly = false;
          document.getElementById("textfield96").readOnly = false;
        }
      
      }
  }
xmlhttp.open("POST","keycheck.php",true);
xmlhttp.send(data);
                
                                });


</script>
</footer>  
<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/jquery-ui/jquery-ui.js"></script>
    <script src="js/PFA.js"></script>
    <script src="js/vendor/app.js"></script>
</body>
</html>
