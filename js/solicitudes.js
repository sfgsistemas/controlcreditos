function datosAuto() {
    ///PORCENTAJE
    var porcentaje = (parseFloat(document.getElementById("textfield87").value) * 100) / parseFloat(document.getElementById("textfield86").value);
    document.getElementById("textfield88").value = porcentaje.toFixed(2)+" %";
    var porFinanciado = 100 - porcentaje.toFixed(2);
    document.getElementById("textfield89").value = porFinanciado.toFixed(2)+" %";
    var monFincanciado = parseFloat(document.getElementById("textfield86").value) - parseFloat(document.getElementById("textfield87").value);
    document.getElementById("textfield90").value = monFincanciado.toFixed(2);
   
}

$("#continuarsolicitud").click(function(event) {
    
   var data = new FormData();
   data.append('function', "continuaregistro");
   
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
        $("#tablajson2 tbody tr").remove();
        //alert(xmlhttp.responseText);
        obJ6 = JSON.parse(xmlhttp.responseText);
        
        $.each(obJ6, function(i,solicitud){
            var newRow =
            "<tr>"
            +"<td> <input onclick='obtensolicitud(this.id)' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";

            newRow+="<td>"+solicitud.TipoCredito+"</td>";

            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+" "+solicitud.RazonSocial+"</td>";




            newRow+="</tr>";

            
           
            $(newRow).appendTo("#tablajson2 tbody");
        });
        
        
        
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
});


$( "#requestmodificarsolicitud" ).click(function(event) {
  
  obtensolicitud(document.getElementById('idmodificasolicitud').value);
});

function obtensolicitud(solicitud){


   var data = new FormData();
   data.append('function', "modificarsolicitud");
   data.append('solicitud', solicitud);
   
   
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

        if(xmlhttp.responseText=='null'){
            alert("¡No Existe el Registro!, Favor de Ingresar Información correcta");
            return;
        }
        if(xmlhttp.responseText=='¡Por favor de Ingresar un Dato!'){
            alert("¡Por favor de Ingresar un Dato!");
            return;
        }

        
        //alert(xmlhttp.responseText);
        obj5 = JSON.parse(xmlhttp.responseText);
        document.getElementById("botonessolicitud").style.display="none";
        document.getElementById("contenidorequestsolicitud").style.display="block";
        document.getElementById("guardarsolicitud").style.display="block";
        
        $('#cerrarmodalmodificasolicitud').click();
        $('#cerrarmodalcontregsolicitud').click();
        document.getElementById('tipocredito').value=obj5.TipoCredito;
        seleccionvalor();
        document.getElementById('textfield86').value=obj5.MontoSolicitado;
        mascara(document.getElementById('textfield86'),cpf);
        document.getElementById('textfield87').value=obj5.Enganche;
        mascara(document.getElementById('textfield87'),cpf);
        document.getElementById('textfield88').value=obj5.PorEnganche;
        document.getElementById('textfield89').value=obj5.PorFinanciamiento;
        document.getElementById('textfield90').value=obj5.MontoFinanciado;
        mascara(document.getElementById('textfield90'),cpf);
        document.getElementById('textfield100').value=obj5.InteresAnual;
        document.getElementById('textfield96').value=obj5.ComisionApertura;
        mascara(document.getElementById('textfield96'),cpf);
        //document.getElementById('textfield96').value=obj5.PorComApertura;
        document.getElementById('textfield97').value=obj5.SeguroAuto;
        mascara(document.getElementById('textfield97'),cpf);
        document.getElementById('textfield98').value=obj5.SeguroVida;
        mascara(document.getElementById('textfield98'),cpf);
        document.getElementById('textfield99').value=obj5.SeguroDesempleo;
        mascara(document.getElementById('textfield99'),cpf);
        document.getElementById('textfield91').value=obj5.Plazo;
        document.getElementById('textfield92').value=obj5.PagoMenEsp;
        mascara(document.getElementById('textfield92'),cpf);


        document.getElementById('datobnom1').value=obj5.NomObSol;
        document.getElementById('datobappat1').value=obj5.ApPatObSol;
        document.getElementById('datobapmat1').value=obj5.ApMatObSol;
        document.getElementById('datobcp1').value=obj5.CPObSol;
        document.getElementById('datobdir1').value=obj5.DirObSol;
        var cdd=document.getElementById("datobcol1");
        var recpostales = document.createElement("option");
                recpostales.text = obj5.ColObSol;
                recpostales.value = obj5.ColObSol;
                cdd.add(recpostales);
        document.getElementById('datobcol1').value=obj5.ColObSol;
        cdd=document.getElementById("datobcd1");
        recpostales = document.createElement("option");
                recpostales.text = obj5.CdObSol;
                recpostales.value = obj5.CdObSol;
                cdd.add(recpostales);
        document.getElementById('datobcd1').value=obj5.CdObSol;
        cdd=document.getElementById("datobedo1");
        recpostales = document.createElement("option");
                recpostales.text = obj5.EdoObSol;
                recpostales.value = obj5.EdoObSol;
                cdd.add(recpostales);
        document.getElementById('datobedo1').value=obj5.EdoObSol;

        document.getElementById('datoblugnac1').value=obj5.LugNacObSol;
        document.getElementById('datobmail1').value=obj5.EmailObSol;
        document.getElementById('datobsex1').value=obj5.SexoObSol;
        document.getElementById('datobfechnac1d').value=obj5.FechNacObSol;
        document.getElementById('datobed1').value=obj5.EdadObSol;
        document.getElementById('datobcurp1').value=obj5.CURPObSol;
        document.getElementById('datobrfc11').value=obj5.RFCObSol;
        document.getElementById('datobtel11').value=obj5.TelObSol;
        document.getElementById('datobtel112').value=obj5.MovObSol;
        document.getElementById('datobprop1').value=obj5.PropObSol;



        document.getElementById('datobnom2').value=obj5.NomObSol2;
        document.getElementById('datobappat2').value=obj5.ApPatObSol2;
        document.getElementById('datobapmat2').value=obj5.ApMatObSol2;
        document.getElementById('datobcp2').value=obj5.CPObSol2;
        document.getElementById('datobdir2').value=obj5.DirObSol2;
        cdd=document.getElementById("datobcol2");
        recpostales = document.createElement("option");
                recpostales.text = obj5.ColObSol2;
                recpostales.value = obj5.ColObSol2;
                cdd.add(recpostales);
        document.getElementById('datobcol2').value=obj5.ColObSol2;
        cdd=document.getElementById("datobcd2");
        recpostales = document.createElement("option");
                recpostales.text = obj5.CdObSol2;
                recpostales.value = obj5.CdObSol2;
                cdd.add(recpostales);
        document.getElementById('datobcd2').value=obj5.CdObSol2;
        cdd=document.getElementById("datobedo2");
        recpostales = document.createElement("option");
                recpostales.text = obj5.EdoObSol2;
                recpostales.value = obj5.EdoObSol2;
                cdd.add(recpostales);
        document.getElementById('datobedo2').value=obj5.EdoObSol2;

        document.getElementById('datoblugnac2').value=obj5.LugNacObSol2;
        document.getElementById('datobmail2').value=obj5.EmailObSol2;
        document.getElementById('datobsex2').value=obj5.SexoObSol2;
        document.getElementById('datobfechnac2d').value=obj5.FechNacObSol2;
        document.getElementById('datobed2').value=obj5.EdadObSol2;
        document.getElementById('datobcurp2').value=obj5.CURPObSol2;
        document.getElementById('datobrfc21').value=obj5.RFCObSol2;
        document.getElementById('datobtel21').value=obj5.TelObSol2;
        document.getElementById('datobtel212').value=obj5.MovObSol2;
        document.getElementById('datobprop2').value=obj5.PropObSol2;






        document.getElementById('NomObSolPM').value=obj5.NomObSolPM;
        document.getElementById('RFCObSolPM').value=obj5.RFCObSolPM;
        document.getElementById('TelObSolPM').value=obj5.TelObSolPM;
        document.getElementById('Tel2ObSolPM').value=obj5.Tel2ObSolPM;
        document.getElementById('CPObSolPM').value=obj5.CPObSolPM;
        document.getElementById('DirObSolPM').value=obj5.DirObSolPM;
        cdd=document.getElementById("ColObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = obj5.ColObSolPM;
                recpostales.value = obj5.ColObSolPM;
                cdd.add(recpostales);
        document.getElementById('ColObSolPM').value=obj5.ColObSolPM;
        cdd=document.getElementById("CdObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = obj5.CdObSolPM;
                recpostales.value = obj5.CdObSolPM;
                cdd.add(recpostales);
        document.getElementById('CdObSolPM').value=obj5.CdObSolPM;
        cdd=document.getElementById("EstObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = obj5.EstObSolPM;
                recpostales.value = obj5.EstObSolPM;
                cdd.add(recpostales);
        document.getElementById('EstObSolPM').value=obj5.EstObSolPM;
        cdd=document.getElementById("MunObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = obj5.MunObSolPM;
                recpostales.value = obj5.MunObSolPM;
                cdd.add(recpostales);
        document.getElementById('MunObSolPM').value=obj5.MunObSolPM;
        document.getElementById('EmailObSolPM').value=obj5.EmailObSolPM;
        document.getElementById('AntObSolPM').value=obj5.AntObSolPM;
        document.getElementById('ApoObSolPM').value=obj5.ApoObSolPM;
        document.getElementById('ActPrinObSolPM').value=obj5.ActPrinObSolPM;
        document.getElementById('FeIniOpObSolPM').value=obj5.FeIniOpObSolPM;
        document.getElementById('CantPerObSolPM').value=obj5.CantPerObSolPM;
        document.getElementById('clavcon').value=obj5.ClaveCon;
        document.getElementById('nomcons').value=obj5.NomCon;
        document.getElementById('nomvend').value=obj5.NomVend;
        document.getElementById('gerentegral').value=obj5.GerenteGral;
        if(obj5.Fecha!="0000-00-00"){
          document.getElementById('fechasolicitudregistro').value=obj5.Fecha;
        }
        




        obtendatoscliente(obj5.FolioCliente);
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
}



$( "#tipocredito" ).change(function() {
	seleccionvalor();
});

function seleccionvalor(){
	var data = new FormData();
	data.append('function', "requesttipocredito");
	if(document.getElementById("tipocredito").value==""){
		document.getElementById("displaymonto").style.display='none';
		document.getElementById("engautochange").style.display='none';
		document.getElementById("porengautochange").style.display='none';
		document.getElementById("porfinautochange").style.display='none';
		document.getElementById("monfinautochange").style.display='none';
		document.getElementById("interesanual").style.display='none';
		document.getElementById("comisionapchange").style.display='none';
		document.getElementById("seguroauto").style.display='none';
		document.getElementById("segurovida").style.display='none';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='none';
		document.getElementById("pagomensualesp").style.display='none';
    document.getElementById("divbotoncambval").style.display='none';
		data.append('requestcredito', "");

		

	}else if(document.getElementById("tipocredito").value=="Auto Nuevo"){
		document.getElementById("displaymonto").style.display='block';
		document.getElementById("labelmontosoli").innerHTML='Monto del Vehiculo';
		document.getElementById("engautochange").style.display='block';
		document.getElementById("porengautochange").style.display='block';
		document.getElementById("porfinautochange").style.display='block';
		document.getElementById("monfinautochange").style.display='block';
		document.getElementById("interesanual").style.display='block';
		document.getElementById("comisionapchange").style.display='block';
		document.getElementById("seguroauto").style.display='block';
		document.getElementById("segurovida").style.display='block';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='block';
		document.getElementById("pagomensualesp").style.display='block';
    document.getElementById("divbotoncambval").style.display='block';
		data.append('requestcredito', "Auto Nuevo");


		
	}else if(document.getElementById("tipocredito").value=="Auto Seminuevo"){
		document.getElementById("displaymonto").style.display='block';
		document.getElementById("labelmontosoli").innerHTML='Monto del Vehiculo';
		document.getElementById("engautochange").style.display='block';
		document.getElementById("porengautochange").style.display='block';
		document.getElementById("porfinautochange").style.display='block';
		document.getElementById("monfinautochange").style.display='block';
		document.getElementById("interesanual").style.display='block';
		document.getElementById("comisionapchange").style.display='block';
		document.getElementById("seguroauto").style.display='block';
		document.getElementById("segurovida").style.display='block';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='block';
		document.getElementById("pagomensualesp").style.display='block';
    document.getElementById("divbotoncambval").style.display='block';
		data.append('requestcredito', "Auto Seminuevo");


	}else if(document.getElementById("tipocredito").value=="Crédito Simple de Nomina"){
		document.getElementById("displaymonto").style.display='block';
		document.getElementById("labelmontosoli").innerHTML='Monto Solicitado';
		document.getElementById("engautochange").style.display='none';
		document.getElementById("porengautochange").style.display='none';
		document.getElementById("porfinautochange").style.display='none';
		document.getElementById("monfinautochange").style.display='none';
		document.getElementById("interesanual").style.display='block';
		document.getElementById("comisionapchange").style.display='block';
		document.getElementById("seguroauto").style.display='none';
		document.getElementById("segurovida").style.display='block';
		document.getElementById("segdeschange").style.display='block';
		document.getElementById("plazocredito").style.display='block';
		document.getElementById("pagomensualesp").style.display='block';
    document.getElementById("divbotoncambval").style.display='block';
		data.append('requestcredito', "Crédito Simple de Nomina");


	}else{
		document.getElementById("displaymonto").style.display='none';
		document.getElementById("engautochange").style.display='none';
		document.getElementById("porengautochange").style.display='none';
		document.getElementById("porfinautochange").style.display='none';
		document.getElementById("monfinautochange").style.display='none';
		document.getElementById("interesanual").style.display='none';
		document.getElementById("comisionapchange").style.display='none';
		document.getElementById("seguroauto").style.display='none';
		document.getElementById("segurovida").style.display='none';
		document.getElementById("segdeschange").style.display='none';
		document.getElementById("plazocredito").style.display='none';
		document.getElementById("pagomensualesp").style.display='none';
    document.getElementById("divbotoncambval").style.display='none';
		data.append('requestcredito', "");


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
        
        //alert(xmlhttp.responseText);
        obj3 = JSON.parse(xmlhttp.responseText);

        if(obj3!=null){
            if(obj3.descripcion=="Crédito Simple de Nomina"){
              document.getElementById("textfield100").value=obj3.tasa;
              document.getElementById("textfield96").value=obj3.Comision_Apertura;
              
            }else if(obj3.descripcion=="Auto Nuevo"){
              document.getElementById("textfield100").value=obj3.tasa;
              document.getElementById("textfield96").value=obj3.Comision_Apertura;
            }else if(obj3.descripcion=="Auto Seminuevo"){
              document.getElementById("textfield100").value=obj3.tasa;
              document.getElementById("textfield96").value=obj3.Comision_Apertura;
            }else{
              document.getElementById("textfield100").value="";
            }
        }
            

        
      }
  }
  xmlhttp.open("POST","solicitudes.php",true);
  xmlhttp.send(data);
}

$("#cancelarsolicitud").click(function(event) {
    
   var data = new FormData();
   data.append('function', "cancelarsolicitud");
   
   
   
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
        document.getElementById("botonessolicitud").style.display="block";
        document.getElementById("contenidorequestsolicitud").style.display="none";
        document.getElementById("guardarsolicitud").style.display="none";
        document.getElementById('bot4').click();
      }
  }
  xmlhttp.open("POST","solicitudes.php",true);
  xmlhttp.send(data);
});




$("#guardarsolicitud").click(function(event) {
    if(document.getElementById('datobcp1').value!="" && (document.getElementById('datobcol1').value=="" || document.getElementById('datobcd1').value=="" || document.getElementById('datobedo1').value=="" /*|| document.getElementById('textfield5').value==""*/)){
        document.getElementById("datobcol1").required=true;
        document.getElementById("datobcd1").required=true;
        document.getElementById("datobedo1").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("datobcol1").required=false;
            document.getElementById("datobcd1").required=false;
            document.getElementById("datobedo1").required=false;
            //document.getElementById("textfield5").required=false;
        }

    if(document.getElementById('datobcp2').value!="" && (document.getElementById('datobcol2').value=="" || document.getElementById('datobcd2').value=="" || document.getElementById('datobedo2').value=="" /*|| document.getElementById('textfield5').value==""*/)){
        document.getElementById("datobcol2").required=true;
        document.getElementById("datobcd2").required=true;
        document.getElementById("datobedo2").required=true;
        //document.getElementById("textfield5").required=true;
        }else{
            document.getElementById("datobcol2").required=false;
            document.getElementById("datobcd2").required=false;
            document.getElementById("datobedo2").required=false;
            //document.getElementById("textfield5").required=false;
        }

    if(document.getElementById('CPObSolPM').value!="" && (document.getElementById('ColObSolPM').value=="" || document.getElementById('CdObSolPM').value=="" || document.getElementById('EstObSolPM').value=="" || document.getElementById('MunObSolPM').value=="")){
        document.getElementById("ColObSolPM").required=true;
        document.getElementById("CdObSolPM").required=true;
        document.getElementById("EstObSolPM").required=true;
        document.getElementById("MunObSolPM").required=true;
        }else{
            document.getElementById("ColObSolPM").required=false;
            document.getElementById("CdObSolPM").required=false;
            document.getElementById("EstObSolPM").required=false;
            document.getElementById("MunObSolPM").required=false;
        }

    

    $('#form2').foundation('validateForm');



var validacion=false;
$( "#panel1d-label" ).removeClass( "is-invalid-input" );
$( "#panel2d-label" ).removeClass( "is-invalid-input" );
$( "#panel3d-label" ).removeClass( "is-invalid-input" );
/*
$( "#panel4c-label" ).removeClass( "is-invalid-input" );
$( "#panel5c-label" ).removeClass( "is-invalid-input" );
$( "#panel6c-label" ).removeClass( "is-invalid-input" );
$( "#panel7c-label" ).removeClass( "is-invalid-input" );
$( "#panel8c-label" ).removeClass( "is-invalid-input" );
$( "#panel9c-label" ).removeClass( "is-invalid-input" );
*/
   

    
$('#panel1d').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel1d').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel1d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2d').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel2d').find('select').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel2d-label" ).addClass( "is-invalid-input" );
        validacion=true;
    }

     });
$('#panel3d').find('input').each(function(){ 
    if($( "#"+this.id).hasClass( "is-invalid-input" )){
        console.log(this.id);
        $( "#panel3d-label" ).addClass( "is-invalid-input" );
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






    
   var data = new FormData(document.forms['form2']);
   data.append('function', "guardasolicitud");
   if(typeof (obj2)!= 'undefined'){
    
      data.append('id', obj2[0]);
   }
   if(typeof (obj5)!= 'undefined'){

      data.append('id', obj5.Id);
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
        
        alert(xmlhttp.responseText);
        
        document.getElementById("cancelarsolicitud").disabled = true;
        //document.getElementById('').style.display='none';

        
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);

});





$( "#ANYBODY" ).change(function() {
    
if(document.getElementById('ANYBODY').value=="0"){
     document.getElementById("nombres").style.display = "none";
    	document.getElementById("ident").style.display='none';

    }
    else if(document.getElementById('ANYBODY').value=="1"){
        document.getElementById('nombres').style.display='none';
        document.getElementById("ident").style.display='block';

    }else if(document.getElementById('ANYBODY').value=="2"){
        document.getElementById("nombres").style.display = "block";
    	document.getElementById("ident").style.display='none';
      
    }else if(document.getElementById('ANYBODY').value=="3"){
        document.getElementById('nombres').style.display='none';
        document.getElementById("ident").style.display='block';

       
      
       
    }
    
  
});



function sol(fun){

 var data = new FormData();
   data.append('function', "nuevasolicitud");
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
        if(xmlhttp.responseText=="Error solicitud activa"){
          alert("¡¡Error -- El usuario tiene una solicitud activa, favor de verificar!!");
          return false;
        }
        $( "#cerrarmodalnuevasolicitud" ).click();
        //alert(xmlhttp.responseText);
        obj2 = JSON.parse(xmlhttp.responseText);
        document.getElementById("botonessolicitud").style.display="none";
        document.getElementById("contenidorequestsolicitud").style.display="block";
        document.getElementById("guardarsolicitud").style.display="block";
        document.getElementById("idcliente").value=obj2[0];
        obtendatoscliente(fun);
       
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
  
}

function obtendatoscliente(fun2){
  var data = new FormData();
   data.append('function', "obtendatoscliente");
   data.append('cliente', fun2);
   
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
        obj4 = JSON.parse(xmlhttp.responseText);
        
         
        if(obj4.TipoCliente=="Persona Fisica" && obj4.ActividadEmpresarial=="Si"){
          document.getElementById('divcontenidoobsolpm').style.display='block';
          
        }else if(obj4.TipoCliente=="Persona Moral"){
          document.getElementById('divcontenidoobsolpm').style.display='block';
          
        }else{  
          document.getElementById('divcontenidoobsolpm').style.display='none';
         
        }
        
      
      }
  }
xmlhttp.open("POST","solicitudes.php",true);
xmlhttp.send(data);
  
}


function busqueda(){

 
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#idnuevasolicitud").val();
                                           select= $("#ANYBODY").val();   
                                           nom= $("#nombrepf").val();
                                           pa= $("#ApellidoPa").val();
                                           ma= $("#ApellidoMa").val();                             
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "ANYBODY="+select+"&b="+consulta+"&c="+nom+"&d="+pa+"&e="+ma,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultadonuevasolicitud").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultadonuevasolicitud").empty();
                          $("#resultadonuevasolicitud").append(data);
                                                             
                    }
              });
                                                                                  
}
                                                                           
  function mascara(o,f){  
    v_obj=o;  
    v_fun=f;  
    v_obj.value=v_fun(v_obj.value);
  }  

  
  function cpf(v){     
    v=v.replace(/([^0-9\.]+)/g,''); 
    v=v.replace(/^[\.]/,''); 
    v=v.replace(/[\.][\.]/g,''); 
    v=v.replace(/\.(\d)(\d)(\d)/g,'.$1$2'); 
    v=v.replace(/\.(\d{1,2})\./g,'.$1'); 
    v = v.toString().split('').reverse().join('').replace(/(\d{3})/g,'$1,');    
    v = v.split('').reverse().join('').replace(/^[\,]/,''); 
    return v;  
  }   

