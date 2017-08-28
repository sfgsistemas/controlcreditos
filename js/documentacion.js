$("#subir").click(function(event) {
    
   var data = new FormData(document.forms['subirdato']);
  
     $.each(document.forms['subirdato'], function(i,solicitud){
        console.log(i);
        console.log(solicitud);
        });
   data.append('function', "subir");
   if(typeof (dat)!= 'undefined'){
    
      data.append('id', dat[0]);
   }
   if(typeof (tunder)!= 'undefined'){

      data.append('id', tunder.id);
   }
   
   if(document.getElementById('visor1').innerHTML!=''){
    data.append('visor1', 'Si');
   }else{
    data.append('visor1', 'No');
   }
   
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
        
       
        if(xmlhttp.responseText.indexOf('Error') !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
      alert(xmlhttp.responseText);
        pdfs=JSON.parse(xmlhttp.responseText);
        for (var i = 1; i < 11 ; i++) {
         
        document.getElementById('visor'+i).href=pdfs[i-1];
        document.getElementById('visor'+i).innerHTML=pdfs[i-1].replace("Carga documentacion/","");
        }
        alert("Guardado");
      }
  }
xmlhttp.open("POST","upload1.php",true);
xmlhttp.send(data);
});

$("#docu").change(function (event) {
//document.getElementById('docs').style.display="block";
//document.getElementById('botonesdocumentacion').style.display="none";
if(document.getElementById('docu').value==1){

document.getElementById('ident1').style.display="block";
  document.getElementById('nombres1').style.display="none";
}
if (document.getElementById('docu').value==2) {
document.getElementById('ident1').style.display="none";
  document.getElementById('nombres1').style.display="block";
}
if (document.getElementById('docu').value==3) {

document.getElementById('ident1').style.display="block";
  document.getElementById('nombres1').style.display="none";

}
});


function doc(fun){

 var data = new FormData();
   data.append('function', "iniciodoc");
  data.append('cliente', fun);

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
        $( "#cerrarmodalnuevadocu" ).click();

        dat = JSON.parse(xmlhttp.responseText);
       // alert(xmlhttp.responseText);
        document.getElementById('docs').style.display="block";
document.getElementById('botonesdocumentacion').style.display="none";
      obtendatosdoc(fun);
      /* 
       ¨*/
      }
  }
xmlhttp.open("POST","upload1.php",true);
xmlhttp.send(data);
  
}


function obtendatosdoc(idsol){
   
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
         dub = JSON.parse(xmlhttp.responseText);
        //alert(dub.TipoCliente);
   

             if(dub.TipoCliente=="Persona Fisica" ){
          document.getElementById('pmadd').style.display='none';
          document.getElementById('pfadd').style.display='block';
        
        }
         if(dub.TipoCliente=="Persona Moral"){
          document.getElementById('pmadd').style.display='block';
          document.getElementById('pfadd').style.display='none';
          
        }
        
        
        
      }
  }
xmlhttp.open("POST","gradoriesgo.php",true);
xmlhttp.send(data);
}
$("#nuevadocumentacion").click(function(event) {
   
   var data = new FormData();
   data.append('function', "nuevadocumentacion");
   
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

        
        $("#table1 tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ = JSON.parse(xmlhttp.responseText);
        
        $.each(obJ, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='doc(this.id)' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";

            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+" "+solicitud.RazonSocial+"</td>";
            newRow+="<td>"+solicitud.TipoCredito+"</td>";





            newRow+="</tr>";

            
           
            $(newRow).appendTo("#table1 tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","upload1.php",true);
xmlhttp.send(data);
});
$("#dexter").click(function(event) {
    lab(document.getElementById('didi').value);
 });

function lab(id){

      var data = new FormData();
   data.append('function', "requestmodificardocu");
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

        
        if(xmlhttp.responseText.indexOf("Error") !== -1){
          alert(xmlhttp.responseText);
          return false;
        }
        if(xmlhttp.responseText === "null"){
          alert("Error -- La solicitud no existe o no contiene Documentacion");
          return false;
        }
       // alert(xmlhttp.responseText);
        //obJ = JSON.parse(xmlhttp.responseText);
        tunder=JSON.parse(xmlhttp.responseText);
        $( "#cerrarmodalmodificadocumentacion" ).click();
        $( "#cerrarmodalcontdoc" ).click();
      document.getElementById('docs').style.display="block";
document.getElementById('botonesdocumentacion').style.display="none";
      document.getElementById('textfield39').value= tunder.INE;
      document.getElementById('visor1').href= tunder.INEurl;
       document.getElementById('visor1').innerHTML=tunder.INEurl.replace("Carga documentacion/","");
      document.getElementById('textfield40').value= tunder.pasaporte;
      document.getElementById('visor2').href= tunder.pasaporteurl;
       document.getElementById('visor2').innerHTML=tunder.pasaporteurl.replace("Carga documentacion/","");
      document.getElementById('textfield41').value= tunder.cartilla;
      document.getElementById('visor3').href= tunder.cartillaurl;
       document.getElementById('visor3').innerHTML=tunder.cartillaurl.replace("Carga documentacion/","");
      document.getElementById('textfield42').value= tunder.licencia;
      document.getElementById('visor4').href= tunder.licenciaurl;
       document.getElementById('visor4').innerHTML=tunder.licenciaurl.replace("Carga documentacion/","");
        document.getElementById('textfield44').value= tunder.otra;
        document.getElementById('visor5').href= tunder.otraurl;
        document.getElementById('visor5').innerHTML=tunder.otraurl.replace("Carga documentacion/","");
        document.getElementById('textfield43').value= tunder.inotra;
        document.getElementById('cot').value= tunder.secotejo;
         document.getElementById('visor6').href= tunder.addcurpurl;
        document.getElementById('visor6').innerHTML=tunder.addcurpurl.replace("Carga documentacion/","");
 document.getElementById('visor7').href= tunder.adddomiciliourl;
        document.getElementById('visor7').innerHTML=tunder.adddomiciliourl.replace("Carga documentacion/","");
      document.getElementById('fechaComprobante').value= tunder.fechadom;
      document.getElementById('seldom').value= tunder.domId;
      document.getElementById('visor8').href= tunder.acta;
        document.getElementById('visor8').innerHTML=tunder.acta.replace("Carga documentacion/","");
        document.getElementById('visor9').href= tunder.cedula;
        document.getElementById('visor9').innerHTML=tunder.cedula.replace("Carga documentacion/","");
       document.getElementById('visor10').href= tunder.poderes;
        document.getElementById('visor10').innerHTML=tunder.poderes.replace("Carga documentacion/","");
  /*
      
        alert(id);
*/
      obtendatosdoc(id);
       
        
      }
  }
xmlhttp.open("POST","upload1.php",true);
xmlhttp.send(data);

}

$("#continuardoc").click(function(event) {
   
   var data = new FormData();
   data.append('function', "continuar");
   
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

        
        $("#table2 tbody tr").remove();
        //alert(xmlhttp.responseText);
        cor = JSON.parse(xmlhttp.responseText);
        
        $.each(cor, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='lab(this.id)' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";

            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+" "+solicitud.RazonSocial+"</td>";
            newRow+="<td>"+solicitud.TipoCredito+"</td>";





            newRow+="</tr>";

            
           
            $(newRow).appendTo("#table2 tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","upload1.php",true);
xmlhttp.send(data);
});