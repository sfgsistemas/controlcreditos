$("#continuarconocimiento").click(function(event) {
    
   var data = new FormData();
   data.append('function', "continuarconocimiento");
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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
        //alert(xmlhttp.responseText);
       

        
        if(Base64.decode(xmlhttp.responseText).indexOf("Error") !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        if(Base64.decode(xmlhttp.responseText) === "null"){
          alert("Error -- La solicitud no existe o no contiene matriz de grado de riesgo");
          return false;
        }
        $("#tablajson4 tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ6 = JSON.parse(Base64.decode(xmlhttp.responseText));
        
        $.each(obJ6, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='datosgradoriesgo(this.id)' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";

            newRow+="<td>"+solicitud.TipoCredito+"</td>";

            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+" "+solicitud.RazonSocial+"</td>";




            newRow+="</tr>";

            
           
            $(newRow).appendTo("#tablajson4 tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
});


$("#requestmodificarconocimiento").click(function(event) {
    datosgradoriesgo(document.getElementById('idmodificaconocimiento').value);
 });

function datosgradoriesgo(id){

      var data = new FormData();
   data.append('function', "requestmodificarconocimiento");
   data.append('registro', id);
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        if(Base64.decode(xmlhttp.responseText).indexOf("Error") !== -1){
          alert(Base64.decode(xmlhttp.responseText));
          return false;
        }
        if(Base64.decode(xmlhttp.responseText) === "null"){
          alert("Error -- La solicitud no existe o no contiene matriz de grado de riesgo");
          return false;
        }
        //alert(xmlhttp.responseText);
        //obJ = JSON.parse(xmlhttp.responseText);
        obj4=JSON.parse(Base64.decode(xmlhttp.responseText));
        $( "#cerrarmodalmodificaconocimiento" ).click();
        $( "#cerrarmodalcontregconocimiento" ).click();
        document.getElementById('contenidorequestconocimiento').style.display='block';
        document.getElementById('botonesconocimiento').style.display='none';
        if(obj4.ingrcomp1!='0'){
          document.getElementById('ingrcomp1').value=obj4.ingrcomp1;
          mascara(document.getElementById('ingrcomp1'),cpf);
          document.getElementById('fuenteingrcomp1').value=obj4.fuenteingrcomp1;

        }else{
          document.getElementById('ingrcomp1').value='';
          document.getElementById('fuenteingrcomp1').value='';
        }
        if(obj4.ingrcomp2!='0'){
          
          document.getElementById('ingrcomp2').value=obj4.ingrcomp2;
          mascara(document.getElementById('ingrcomp2'),cpf);
          document.getElementById('fuenteingrcomp2').value=obj4.fuenteingrcomp2;

        }else{
          document.getElementById('ingrcomp2').value='';
          document.getElementById('fuenteingrcomp2').value='';
        }
        if(obj4.ingrcomp3!='0'){
          
          document.getElementById('ingrcomp3').value=obj4.ingrcomp3;
          mascara(document.getElementById('ingrcomp3'),cpf);
          document.getElementById('fuenteingrcomp3').value=obj4.fuenteingrcomp3;

        }else{
          document.getElementById('ingrcomp3').value='';
          document.getElementById('fuenteingrcomp3').value='';

        }
        if(obj4.ingrcomp4!='0'){
          
          document.getElementById('ingrcomp4').value=obj4.ingrcomp4;
          mascara(document.getElementById('ingrcomp4'),cpf);
          document.getElementById('fuenteingrcomp4').value=obj4.fuenteingrcomp4;

        }else{
          document.getElementById('ingrcomp4').value='';
          document.getElementById('fuenteingrcomp4').value='';
        }
        if(obj4.ingrcomp5!='0'){
          
          document.getElementById('ingrcomp5').value=obj4.ingrcomp5;
          mascara(document.getElementById('ingrcomp5'),cpf);
          document.getElementById('fuenteingrcomp5').value=obj4.fuenteingrcomp5;

        }else{
          document.getElementById('ingrcomp5').value='';
          document.getElementById('fuenteingrcomp5').value='';
        }
        if(obj4.ingrnocomp1!='0'){
          
          document.getElementById('ingrnocomp1').value=obj4.ingrnocomp1;
          mascara(document.getElementById('ingrnocomp1'),cpf);
          document.getElementById('fuenteingrnocomp1').value=obj4.fuenteingrnocomp1;

        }else{
          document.getElementById('ingrnocomp1').value='';
          document.getElementById('fuenteingrnocomp1').value='';
        }
        if(obj4.ingrnocomp2!='0'){
          
          document.getElementById('ingrnocomp2').value=obj4.ingrnocomp2;
          mascara(document.getElementById('ingrnocomp2'),cpf);
          document.getElementById('fuenteingrnocomp2').value=obj4.fuenteingrnocomp2;

        }else{
          document.getElementById('ingrnocomp2').value='';
          document.getElementById('fuenteingrnocomp2').value='';          
        }
        if(obj4.ingrnocomp3!='0'){
          
          document.getElementById('ingrnocomp3').value=obj4.ingrnocomp3;
          mascara(document.getElementById('ingrnocomp3'),cpf);
          document.getElementById('fuenteingrnocomp3').value=obj4.fuenteingrnocomp3;

        }else{
          document.getElementById('ingrnocomp3').value='';
          document.getElementById('fuenteingrnocomp3').value='';
        }
        if(obj4.ingrnocomp4!='0'){
          
          document.getElementById('ingrnocomp4').value=obj4.ingrnocomp4;
          mascara(document.getElementById('ingrnocomp4'),cpf);
          document.getElementById('fuenteingrnocomp4').value=obj4.fuenteingrnocomp4;

        }else{
          document.getElementById('ingrnocomp4').value='';
          document.getElementById('fuenteingrnocomp4').value='';
        }
        if(obj4.ingrnocomp5!='0'){
          
          document.getElementById('ingrnocomp5').value=obj4.ingrnocomp5;
          mascara(document.getElementById('ingrnocomp5'),cpf);
          document.getElementById('fuenteingrnocomp5').value=obj4.fuenteingrnocomp5;

        }else{
          document.getElementById('ingrnocomp5').value='';
          document.getElementById('fuenteingrnocomp5').value='';
        }

        document.getElementById('tienepeprel').value=obj4.tienepeprel;
        tienespeprel();
        document.getElementById('quienpep').value=obj4.quienpep;
        document.getElementById('parentescopep').value=obj4.parentescopep;
        document.getElementById('puestorelpep').value=obj4.puestorelpep;
        document.getElementById('select').value=obj4.Antiguedad_ObjetoSocial;
        document.getElementById('select2').value=obj4.Antiguedad_Cliente;
        document.getElementById('select3').value=obj4.Naturaleza_Operaciones;
        document.getElementById('select4').value=obj4.Numero_Beneficiarios;
        document.getElementById('select5').value=obj4.Numero_TercerosRelacionados;
        document.getElementById('select6').value=obj4.PEPs_Relacionados;
        document.getElementById('select7').value=obj4.Alerta_Reputacional;
        document.getElementById('select8').value=obj4.Volumen_Esperado;
        document.getElementById('select9').value=obj4.Frecuencia_Esperada;
        document.getElementById('select10').value=obj4.Instrumento_Monetario;
        document.getElementById('select11').value=obj4.Canales_MediosUtilizados;
        document.getElementById('select12').value=obj4.Pais_EstadoOficial;
        document.getElementById('select13').value=obj4.Pais_EstadoResidencia;
        document.getElementById('select14').value=obj4.Pais_EstadoOperacion;
        document.getElementById('select15').value=obj4.Origen_Recursos;
        document.getElementById('select16').value=obj4.Destino_Recursos;
        document.getElementById('select17').value=obj4.Pais_EstadoResidenciaTerceros;
        document.getElementById('select18').value=obj4.Edad_Cliente;
        document.getElementById('select19').value=obj4.An_Construccion;
        document.getElementById('select20').value=obj4.Reg_TributacionPM;
        document.getElementById('select21').value=obj4.Reg_TributacionPF;
        traertipocliente(id);
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);

}


$( "#tienepeprel" ).change(function() {
    tienespeprel();
});

function tienespeprel(){
  if(document.getElementById('tienepeprel').value=="Si"){
    document.getElementById('Contentpepssi').style.display='block';
  }else if(document.getElementById('tienepeprel').value=="No"){
    document.getElementById('Contentpepssi').style.display='none';
    document.getElementById('quienpep').value='';
    document.getElementById('parentescopep').value='';
    document.getElementById('puestorelpep').value='';
  }else{
    document.getElementById('Contentpepssi').style.display='none';
    document.getElementById('quienpep').value='';
    document.getElementById('parentescopep').value='';
    document.getElementById('puestorelpep').value='';
  }
  
}


$("#guardargradriesgo").click(function(event) {

  if(document.getElementById('ingrcomp1').value!="" || document.getElementById('fuenteingrcomp1').value!="" ){
        document.getElementById("ingrcomp1").required=true;
        document.getElementById("fuenteingrcomp1").required=true;
  }else{
            document.getElementById("ingrcomp1").required=false;
            document.getElementById("fuenteingrcomp1").required=false;
  }
  if(document.getElementById('ingrcomp2').value!="" || document.getElementById('fuenteingrcomp2').value!="" ){
        document.getElementById("ingrcomp2").required=true;
        document.getElementById("fuenteingrcomp2").required=true;
        }else{
            document.getElementById("ingrcomp2").required=false;
            document.getElementById("fuenteingrcomp2").required=false;
        }
  if(document.getElementById('ingrcomp3').value!="" || document.getElementById('fuenteingrcomp3').value!="" ){
        document.getElementById("ingrcomp3").required=true;
        document.getElementById("fuenteingrcomp3").required=true;
        }else{
            document.getElementById("ingrcomp3").required=false;
            document.getElementById("fuenteingrcomp3").required=false;
        }
  if(document.getElementById('ingrcomp4').value!="" || document.getElementById('fuenteingrcomp4').value!="" ){
        document.getElementById("ingrcomp4").required=true;
        document.getElementById("fuenteingrcomp4").required=true;
  }else{
            document.getElementById("ingrcomp4").required=false;
            document.getElementById("fuenteingrcomp4").required=false;
  }
  if(document.getElementById('ingrcomp5').value!="" || document.getElementById('fuenteingrcomp5').value!="" ){
        document.getElementById("ingrcomp5").required=true;
        document.getElementById("fuenteingrcomp5").required=true;
  }else{
            document.getElementById("ingrcomp5").required=false;
            document.getElementById("fuenteingrcomp5").required=false;
  }
  if(document.getElementById('ingrnocomp1').value!="" || document.getElementById('fuenteingrnocomp1').value!="" ){
        document.getElementById("ingrnocomp1").required=true;
        document.getElementById("fuenteingrnocomp1").required=true;
  }else{
            document.getElementById("ingrnocomp1").required=false;
            document.getElementById("fuenteingrnocomp1").required=false;
  }
  if(document.getElementById('ingrnocomp2').value!="" || document.getElementById('fuenteingrnocomp2').value!="" ){
        document.getElementById("ingrnocomp2").required=true;
        document.getElementById("fuenteingrnocomp2").required=true;
  }else{
            document.getElementById("ingrnocomp2").required=false;
            document.getElementById("fuenteingrnocomp2").required=false;
  }
  if(document.getElementById('ingrnocomp3').value!="" || document.getElementById('fuenteingrnocomp3').value!="" ){
        document.getElementById("ingrnocomp3").required=true;
        document.getElementById("fuenteingrnocomp3").required=true;
  }else{
            document.getElementById("ingrnocomp3").required=false;
            document.getElementById("fuenteingrnocomp3").required=false;
  }
  if(document.getElementById('ingrnocomp2').value!="" || document.getElementById('fuenteingrnocomp2').value!="" ){
        document.getElementById("ingrnocomp2").required=true;
        document.getElementById("fuenteingrnocomp2").required=true;
  }else{
            document.getElementById("ingrnocomp2").required=false;
            document.getElementById("fuenteingrnocomp2").required=false;
  }
  if(document.getElementById('ingrnocomp5').value!="" || document.getElementById('fuenteingrnocomp5').value!="" ){
        document.getElementById("ingrnocomp5").required=true;
        document.getElementById("fuenteingrnocomp5").required=true;
  }else{
            document.getElementById("ingrnocomp5").required=false;
            document.getElementById("fuenteingrnocomp5").required=false;
  }

  if(document.getElementById('tienepeprel').value=="Si"){
    document.getElementById('quienpep').required=true;
    document.getElementById('parentescopep').required=true;
    document.getElementById('puestorelpep').required=true;
  }else{
    document.getElementById('quienpep').required=false;
    document.getElementById('parentescopep').required=false;
    document.getElementById('puestorelpep').required=false;
  }

  if(document.getElementById('select').value!="" || document.getElementById('select2').value!="" || document.getElementById('select3').value!="" || document.getElementById('select4').value!="" || document.getElementById('select5').value!="" || document.getElementById('select6').value!="" || document.getElementById('select7').value!="" || document.getElementById('select8').value!="" || document.getElementById('select9').value!="" || document.getElementById('select10').value!="" || document.getElementById('select11').value!="" || document.getElementById('select12').value!="" || document.getElementById('select13').value!="" || document.getElementById('select14').value!="" || document.getElementById('select15').value!="" || document.getElementById('select16').value!="" || document.getElementById('select17').value!="" || document.getElementById('select18').value!="" || document.getElementById('select19').value!="" || document.getElementById('select20').value!="" || document.getElementById('select21').value!=""){
    document.getElementById('select').required=true;
    document.getElementById('select2').required=true;
    document.getElementById('select3').required=true;
    document.getElementById('select4').required=true;
    document.getElementById('select5').required=true;
    document.getElementById('select6').required=true;
    document.getElementById('select7').required=true;
    document.getElementById('select8').required=true;
    document.getElementById('select9').required=true;
    document.getElementById('select10').required=true;
    document.getElementById('select11').required=true;
    document.getElementById('select12').required=true;
    document.getElementById('select13').required=true;
    document.getElementById('select14').required=true;
    document.getElementById('select15').required=true;
    document.getElementById('select16').required=true;
    document.getElementById('select17').required=true;
    if(obj3.TipoCliente=="Persona Fisica"){
      document.getElementById('select18').required=true;
      document.getElementById('select21').required=true;
    }
    if(obj3.TipoCliente=="Persona Moral"){
      document.getElementById('select19').required=true;
      document.getElementById('select20').required=true;
    }

  }else{
    document.getElementById('select').required=false;
    document.getElementById('select2').required=false;
    document.getElementById('select3').required=false;
    document.getElementById('select4').required=false;
    document.getElementById('select5').required=false;
    document.getElementById('select6').required=false;
    document.getElementById('select7').required=false;
    document.getElementById('select8').required=false;
    document.getElementById('select9').required=false;
    document.getElementById('select10').required=false;
    document.getElementById('select11').required=false;
    document.getElementById('select12').required=false;
    document.getElementById('select13').required=false;
    document.getElementById('select14').required=false;
    document.getElementById('select15').required=false;
    document.getElementById('select16').required=false;
    document.getElementById('select17').required=false;
    if(obj3.TipoCliente=="Persona Fisica"){
      document.getElementById('select18').required=false;
      document.getElementById('select21').required=false;
    }
    if(obj3.TipoCliente=="Persona Moral"){
      document.getElementById('select19').required=false;
      document.getElementById('select20').required=false;
    }
  }

    $('#form3').foundation('validateForm');



var validacion=false;
$( "#panel1g-label" ).removeClass( "is-invalid-input" );
$( "#panel2g-label" ).removeClass( "is-invalid-input" );
$( "#panel3g-label" ).removeClass( "is-invalid-input" );
/*
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );
*/
   

    
$('#panel1g').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1g-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel1g').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1g-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2g').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2g-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2g').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2g-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3g').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3g-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
/*
$('#panel4c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel4c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel5c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel5c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel6c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel6c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel7c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel7c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel8c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel8c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel9c').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel9c-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });


*/


    if(validacion){
         console.log("Hay errores");
         alert("¡¡Verifica Que Todos Los Datos Sean Correctos!!");
         return validacion;
    }





   var data = new FormData(document.forms['form3']);
   data.append('function', "guardargradriesgo");
   if(typeof (obj2)!= 'undefined'){
    
      data.append('registro', obj2[0]);
   }
   if(typeof (obj4)!= 'undefined'){

      data.append('registro', obj4.Id);
   }
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        if(xmlhttp.responseText.indexOf("Error") !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        alert(xmlhttp.responseText);
        //obJ = JSON.parse(xmlhttp.responseText);
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
});




function traertipocliente(idsol){
   
   var data = new FormData();
   data.append('function', "tipodeclientepeps");
   data.append('solicitud', idsol);
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        
        //alert(xmlhttp.responseText);
        if(xmlhttp.responseText=="null"){
          alert("¿¿Error -- Tipo de Cliente Inexistente favor de comunicarse con Sistemas!!");
          return false;
        }
        obj3 = JSON.parse(xmlhttp.responseText);
        //alert(obj3.TipoCliente);
        if(obj3.TipoCliente=="Persona Fisica"){
          document.getElementById('spangradoreisgoedan').innerHTML='Edad del cliente';
          document.getElementById('select21').style.display='block';
          document.getElementById('select18').style.display='block';
          document.getElementById('select20').style.display='none';
          document.getElementById('select19').style.display='none';

        }else if(obj3.TipoCliente=="Persona Moral"){
          document.getElementById('spangradoreisgoedan').innerHTML='Años de constitucion';
          document.getElementById('select20').style.display='block';
          document.getElementById('select19').style.display='block';
          document.getElementById('select21').style.display='none';
          document.getElementById('select18').style.display='none';
        }else{
          document.getElementById('spangradoreisgoedan').innerHTML='Error tipo de cliente no detectado';
          document.getElementById('select21').style.display='none';
          document.getElementById('select18').style.display='none';
          document.getElementById('select19').style.display='none';
          document.getElementById('select20').style.display='none';
        }

        
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
}





$("#nuevaconocimiento").click(function(event) {
   
   var data = new FormData();
   data.append('function', "nuevaconocimiento");
   
   //data.append('id', obj.id);

   //data.append('TipoCliente', "df");
   
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

        
        $("#tablajson3 tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ = JSON.parse(xmlhttp.responseText);
        
        $.each(obJ, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='obtengradoriesgo(this.id)' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";

            newRow+="<td>"+solicitud.TipoCredito+"</td>";

            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+" "+solicitud.RazonSocial+"</td>";




            newRow+="</tr>";

            
           
            $(newRow).appendTo("#tablajson3 tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
});

function obtengradoriesgo(id){


 var data = new FormData();
   data.append('function', "nuevaregistroconocimiento");
   data.append('solicitud', id);

   
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
        
        
        $( "#cerrarmodalnuevaconocimiento" ).click();

        //alert(xmlhttp.responseText);
        obj2 = JSON.parse(xmlhttp.responseText);
        document.getElementById('contenidorequestconocimiento').style.display='block';
        document.getElementById('botonesconocimiento').style.display='none';
        //alert(obj2[0]);
        traertipocliente(id);
       
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
  
}