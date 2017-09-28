
$("#inputidsolicitudbusca").keyup(function() {
	if ($("#"+this.id).val().match(/^[0-9]+$/)) {

$('#spanidclientebusca').removeClass('is-invalid-input');
  	obtensolicitudporid(this.value);
}else{
	 borrarsol();
	 $('#spanidclientebusca').addClass('is-invalid-input');
}
});



function obtensolicitudporid(id){
	$.ajax({
                    type: "POST",
                    url: "consultasolicitudes.php",
                    data: "function=obtensolicitudporid&id="+id,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar2").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#loadingbuscar2").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          borrarsol();
						          return false;
						        }
						        if(data === "null"){
						          borrarsol();
						          return false;
						        }
						        //alert(data);
						        //obJbuscliente = JSON.parse(data);
						        obtenerpegarobjsol(JSON.parse(data));

                                                             
                    }
              });
}


function borrarsol(){

        document.getElementById('tipocredito').value='';
        seleccionvalor();
        document.getElementById('textfield86').value='';
        mascara(document.getElementById('textfield86'),cpf);
        document.getElementById('textfield87').value='';
        mascara(document.getElementById('textfield87'),cpf);
        document.getElementById('textfield88').value='';
        document.getElementById('textfield89').value='';
        document.getElementById('textfield90').value='';
        mascara(document.getElementById('textfield90'),cpf);
        document.getElementById('textfield100').value='';
        document.getElementById('textfield96').value='';
        mascara(document.getElementById('textfield96'),cpf);
        //document.getElementById('textfield96').value=objetosol.PorComApertura;
        document.getElementById('textfield97').value='';
        mascara(document.getElementById('textfield97'),cpf);
        document.getElementById('textfield98').value='';
        mascara(document.getElementById('textfield98'),cpf);
        document.getElementById('textfield99').value='';
        mascara(document.getElementById('textfield99'),cpf);
        document.getElementById('textfield91').value='';
        document.getElementById('textfield92').value='';
        mascara(document.getElementById('textfield92'),cpf);


        document.getElementById('datobnom1').value='';
        document.getElementById('datobappat1').value='';
        document.getElementById('datobapmat1').value='';
        document.getElementById('datobcp1').value='';
        document.getElementById('datobdir1').value='';
        $("#datobcol1 option").remove();
        $("#datobcd1 option").remove();
        $("#datobedo1 option").remove();
        

        document.getElementById('datoblugnac1').value='';
        document.getElementById('datobmail1').value='';
        document.getElementById('datobsex1').value='';
        document.getElementById('datobfechnac1d').value='';
        document.getElementById('datobed1').value='';
        document.getElementById('datobcurp1').value='';
        document.getElementById('datobrfc11').value='';
        document.getElementById('datobtel11').value='';
        document.getElementById('datobtel112').value='';
        document.getElementById('datobprop1').value='';



        document.getElementById('datobnom2').value='';
        document.getElementById('datobappat2').value='';
        document.getElementById('datobapmat2').value='';
        document.getElementById('datobcp2').value='';
        document.getElementById('datobdir2').value='';
        $("#datobcol2 option").remove();
        $("#datobcd2 option").remove();
        $("#datobedo2 option").remove();
        

        document.getElementById('datoblugnac2').value='';
        document.getElementById('datobmail2').value='';
        document.getElementById('datobsex2').value='';
        document.getElementById('datobfechnac2d').value='';
        document.getElementById('datobed2').value='';
        document.getElementById('datobcurp2').value='';
        document.getElementById('datobrfc21').value='';
        document.getElementById('datobtel21').value='';
        document.getElementById('datobtel212').value='';
        document.getElementById('datobprop2').value='';






        document.getElementById('NomObSolPM').value='';
        document.getElementById('RFCObSolPM').value='';
        document.getElementById('TelObSolPM').value='';
        document.getElementById('Tel2ObSolPM').value='';
        document.getElementById('CPObSolPM').value='';
        document.getElementById('DirObSolPM').value='';
        $("#ColObSolPM option").remove();
        $("#CdObSolPM option").remove();
        $("#EstObSolPM option").remove();
        $("#MunObSolPM option").remove();
       
        document.getElementById('MunObSolPM').value='';
        document.getElementById('EmailObSolPM').value='';
        document.getElementById('AntObSolPM').value='';
        document.getElementById('ApoObSolPM').value='';
        document.getElementById('ActPrinObSolPM').value='';
        document.getElementById('FeIniOpObSolPM').value='';
        document.getElementById('CantPerObSolPM').value='';
        document.getElementById('clavcon').value='';
        document.getElementById('nomcons').value='';
        document.getElementById('nomvend').value='';
        document.getElementById('gerentegral').value='';
       
        document.getElementById('fechasolicitudregistro').value='';
        document.getElementById('divcontenidoobsolpm').style.display='none';
        document.getElementById("statussolicitud").innerHTML='Status: ';
        $('#statussolicitud').removeClass('success');
        $('#statussolicitud').removeClass('warning');
}





function obtenerpegarobjsol(objetosol){
	
        
        document.getElementById('tipocredito').value=objetosol.TipoCredito;
        seleccionvalor();
        document.getElementById('textfield86').value=objetosol.MontoSolicitado;
        mascara(document.getElementById('textfield86'),cpf);
        document.getElementById('textfield87').value=objetosol.Enganche;
        mascara(document.getElementById('textfield87'),cpf);
        document.getElementById('textfield88').value=objetosol.PorEnganche;
        document.getElementById('textfield89').value=objetosol.PorFinanciamiento;
        document.getElementById('textfield90').value=objetosol.MontoFinanciado;
        mascara(document.getElementById('textfield90'),cpf);
        document.getElementById('textfield100').value=objetosol.InteresAnual;
        document.getElementById('textfield96').value=objetosol.ComisionApertura;
        mascara(document.getElementById('textfield96'),cpf);
        //document.getElementById('textfield96').value=objetosol.PorComApertura;
        document.getElementById('textfield97').value=objetosol.SeguroAuto;
        mascara(document.getElementById('textfield97'),cpf);
        document.getElementById('textfield98').value=objetosol.SeguroVida;
        mascara(document.getElementById('textfield98'),cpf);
        document.getElementById('textfield99').value=objetosol.SeguroDesempleo;
        mascara(document.getElementById('textfield99'),cpf);
        document.getElementById('textfield91').value=objetosol.Plazo;
        document.getElementById('textfield92').value=objetosol.PagoMenEsp;
        mascara(document.getElementById('textfield92'),cpf);


        document.getElementById('datobnom1').value=objetosol.NomObSol;
        document.getElementById('datobappat1').value=objetosol.ApPatObSol;
        document.getElementById('datobapmat1').value=objetosol.ApMatObSol;
        document.getElementById('datobcp1').value=objetosol.CPObSol;
        document.getElementById('datobdir1').value=objetosol.DirObSol;
        var cdd=document.getElementById("datobcol1");
        var recpostales = document.createElement("option");
                recpostales.text = objetosol.ColObSol;
                recpostales.value = objetosol.ColObSol;
                cdd.add(recpostales);
        document.getElementById('datobcol1').value=objetosol.ColObSol;
        cdd=document.getElementById("datobcd1");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.CdObSol;
                recpostales.value = objetosol.CdObSol;
                cdd.add(recpostales);
        document.getElementById('datobcd1').value=objetosol.CdObSol;
        cdd=document.getElementById("datobedo1");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.EdoObSol;
                recpostales.value = objetosol.EdoObSol;
                cdd.add(recpostales);
        document.getElementById('datobedo1').value=objetosol.EdoObSol;

        document.getElementById('datoblugnac1').value=objetosol.LugNacObSol;
        document.getElementById('datobmail1').value=objetosol.EmailObSol;
        document.getElementById('datobsex1').value=objetosol.SexoObSol;
        document.getElementById('datobfechnac1d').value=objetosol.FechNacObSol;
        document.getElementById('datobed1').value=objetosol.EdadObSol;
        document.getElementById('datobcurp1').value=objetosol.CURPObSol;
        document.getElementById('datobrfc11').value=objetosol.RFCObSol;
        document.getElementById('datobtel11').value=objetosol.TelObSol;
        document.getElementById('datobtel112').value=objetosol.MovObSol;
        document.getElementById('datobprop1').value=objetosol.PropObSol;



        document.getElementById('datobnom2').value=objetosol.NomObSol2;
        document.getElementById('datobappat2').value=objetosol.ApPatObSol2;
        document.getElementById('datobapmat2').value=objetosol.ApMatObSol2;
        document.getElementById('datobcp2').value=objetosol.CPObSol2;
        document.getElementById('datobdir2').value=objetosol.DirObSol2;
        cdd=document.getElementById("datobcol2");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.ColObSol2;
                recpostales.value = objetosol.ColObSol2;
                cdd.add(recpostales);
        document.getElementById('datobcol2').value=objetosol.ColObSol2;
        cdd=document.getElementById("datobcd2");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.CdObSol2;
                recpostales.value = objetosol.CdObSol2;
                cdd.add(recpostales);
        document.getElementById('datobcd2').value=objetosol.CdObSol2;
        cdd=document.getElementById("datobedo2");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.EdoObSol2;
                recpostales.value = objetosol.EdoObSol2;
                cdd.add(recpostales);
        document.getElementById('datobedo2').value=objetosol.EdoObSol2;

        document.getElementById('datoblugnac2').value=objetosol.LugNacObSol2;
        document.getElementById('datobmail2').value=objetosol.EmailObSol2;
        document.getElementById('datobsex2').value=objetosol.SexoObSol2;
        document.getElementById('datobfechnac2d').value=objetosol.FechNacObSol2;
        document.getElementById('datobed2').value=objetosol.EdadObSol2;
        document.getElementById('datobcurp2').value=objetosol.CURPObSol2;
        document.getElementById('datobrfc21').value=objetosol.RFCObSol2;
        document.getElementById('datobtel21').value=objetosol.TelObSol2;
        document.getElementById('datobtel212').value=objetosol.MovObSol2;
        document.getElementById('datobprop2').value=objetosol.PropObSol2;






        document.getElementById('NomObSolPM').value=objetosol.NomObSolPM;
        document.getElementById('RFCObSolPM').value=objetosol.RFCObSolPM;
        document.getElementById('TelObSolPM').value=objetosol.TelObSolPM;
        document.getElementById('Tel2ObSolPM').value=objetosol.Tel2ObSolPM;
        document.getElementById('CPObSolPM').value=objetosol.CPObSolPM;
        document.getElementById('DirObSolPM').value=objetosol.DirObSolPM;
        cdd=document.getElementById("ColObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.ColObSolPM;
                recpostales.value = objetosol.ColObSolPM;
                cdd.add(recpostales);
        document.getElementById('ColObSolPM').value=objetosol.ColObSolPM;
        cdd=document.getElementById("CdObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.CdObSolPM;
                recpostales.value = objetosol.CdObSolPM;
                cdd.add(recpostales);
        document.getElementById('CdObSolPM').value=objetosol.CdObSolPM;
        cdd=document.getElementById("EstObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.EstObSolPM;
                recpostales.value = objetosol.EstObSolPM;
                cdd.add(recpostales);
        document.getElementById('EstObSolPM').value=objetosol.EstObSolPM;
        cdd=document.getElementById("MunObSolPM");
        recpostales = document.createElement("option");
                recpostales.text = objetosol.MunObSolPM;
                recpostales.value = objetosol.MunObSolPM;
                cdd.add(recpostales);
        document.getElementById('MunObSolPM').value=objetosol.MunObSolPM;
        document.getElementById('EmailObSolPM').value=objetosol.EmailObSolPM;
        document.getElementById('AntObSolPM').value=objetosol.AntObSolPM;
        document.getElementById('ApoObSolPM').value=objetosol.ApoObSolPM;
        document.getElementById('ActPrinObSolPM').value=objetosol.ActPrinObSolPM;
        document.getElementById('FeIniOpObSolPM').value=objetosol.FeIniOpObSolPM;
        document.getElementById('CantPerObSolPM').value=objetosol.CantPerObSolPM;
        document.getElementById('clavcon').value=objetosol.ClaveCon;
        document.getElementById('nomcons').value=objetosol.NomCon;
        document.getElementById('nomvend').value=objetosol.NomVend;
        document.getElementById('gerentegral').value=objetosol.GerenteGral;
        if(objetosol.Fecha!="0000-00-00"){
          document.getElementById('fechasolicitudregistro').value=objetosol.Fecha;
        }

        document.getElementById("statussolicitud").innerHTML='Status: '+objetosol.Status;
        
        if(objetosol.Status=="Incompleto"){
        $('#statussolicitud').removeClass('callout success');
        $('#statussolicitud').addClass('callout warning');

        }else if(objetosol.Status=="Finalizado"){

        $('#statussolicitud').removeClass('callout warning');
        $('#statussolicitud').addClass('callout success');
        }



        obtendatoscliente(objetosol.FolioCliente);
}


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