
$("#inputrfcclientebusca").keyup(function() {
	$("#"+this.id).val($("#"+this.id).val().toUpperCase());
	if ($("#"+this.id).val().match(/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/)) {

		$('#spanrfcclientebusca').removeClass('is-invalid-input');
  		obtenclienteporrfc();
}else{
	 borrar();
	 $('#spanrfcclientebusca').addClass('is-invalid-input');
}
});

function obtenclienteporrfc(){
	var rfc=$("#inputrfcclientebusca").val();
	$.ajax({
                    type: "POST",
                    url: "consultaclientes.php",
                    data: "function=obtenclienteporrfc&rfc="+rfc,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar1").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){    

                          $("#loadingbuscar1").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          borrar();
						          return false;
						        }
						        if(data === "null"){
						          borrar();
						          return false;
						        }
						        borrar();
						        objetoidpocurp=JSON.parse(data);

						        
						        obtenclienteporid(objetoidpocurp.id);
						       
                                                             
                    }
              });

}





$("#botonrazsocclientebusca").click(function() {
	
		
  		obtenclienteporrazsoc();

});

function obtenclienteporrazsoc(){
	var razsoc=$("#inputrazsocclientebusca").val();
	$.ajax({
                    type: "POST",
                    url: "consultaclientes.php",
                    data: "function=obtenclienteporrazsoc&razsoc="+razsoc,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar1").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#loadingbuscar1").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          borrar();
						          return false;
						        }
						        if(data === "null"){
						          borrar();
						          return false;
						        }
						        borrar();
						       $("#tablabuscaclienterazsoc tbody tr").remove();
						        //alert(data);
						        objetobusponom = JSON.parse(data);
						        
						        $.each(objetobusponom, function(i,solicitud){
						            var newRow =
						            "<tr>"
						            +"<td> <input onclick='obtenclienteporid(this.id)' data-close aria-label='Close reveal' class='button' type='button' name='"+solicitud.id+"' id='"+solicitud.id+"' value='"+solicitud.id+"'></td>";


						            newRow+="<td>"+solicitud.RazonSocial+"</td>";

						            newRow+="<td>"+solicitud.RFCPM+"</td>";



						            newRow+="</tr>";

						            
						           
						            $(newRow).appendTo("#tablabuscaclienterazsoc tbody");
						        });

                                                             
                    }
              });
}



$("#inputcurpclientebusca").keyup(function() {
	$("#"+this.id).val($("#"+this.id).val().toUpperCase());
	if ($("#"+this.id).val().match(/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/)) {

		$('#spancurpclientebusca').removeClass('is-invalid-input');
  		obtenclienteporcurp();
}else{
	 borrar();
	 $('#spancurpclientebusca').addClass('is-invalid-input');
}
});

function obtenclienteporcurp(){
	
	var curp=$("#inputcurpclientebusca").val();
	$.ajax({
                    type: "POST",
                    url: "consultaclientes.php",
                    data: "function=obtenclienteporcurp&curp="+curp,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar1").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){    

                          $("#loadingbuscar1").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          borrar();
						          return false;
						        }
						        if(data === "null"){
						          borrar();
						          return false;
						        }
						        borrar();
						        objetoidpocurp=JSON.parse(data);

						        
						        obtenclienteporid(objetoidpocurp.id);
						       
                                                             
                    }
              });

}




$("#botonap2clientebusca").click(function() {
	if($( "#inputnomclientebusca").hasClass( "is-invalid-input" )){
        console.log(this.id);
        $("#tablabuscacliente tbody tr").remove();
       return true;
    }
    if($( "#inputap1clientebusca").hasClass( "is-invalid-input" )){
        console.log(this.id);
        $("#tablabuscacliente tbody tr").remove();
       return true;
    }
    if($( "#inputap2clientebusca").hasClass( "is-invalid-input" )){
        console.log(this.id);
        $("#tablabuscacliente tbody tr").remove();
       return true;
    }
  $("#tablabuscacliente tbody tr").remove();
  obtenclientepornombre();
});


function obtenclientepornombre(){
	var nombre = $("#inputnomclientebusca").val();
    var ape1 =   $("#inputap1clientebusca").val();
    var ape2 =   $("#inputap2clientebusca").val();                                                             
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "consultaclientes.php",
                    data: "function=obtenclientepornombre&nombre="+nombre+"&ape1="+ape1+"&ape2="+ape2,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar1").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#loadingbuscar1").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          borrar();
						          return false;
						        }
						        if(data === "null"){
						          borrar();
						          return false;
						        }
						        borrar();
						       $("#tablabuscacliente tbody tr").remove();
						        //alert(data);
						        objetobusponom = JSON.parse(data);
						        
						        $.each(objetobusponom, function(i,solicitud){
						            var newRow =
						            "<tr>"
						            +"<td> <input onclick='obtenclienteporid(this.id)' data-close aria-label='Close reveal' class='button' type='button' name='"+solicitud.id+"' id='"+solicitud.id+"' value='"+solicitud.id+"'></td>";


						            newRow+="<td>"+solicitud.NombrePF+" "+solicitud.SegNombrePF+" "+solicitud.ApPatPF+" "+solicitud.ApMatPF+"</td>";

						            newRow+="<td>"+solicitud.CURPPF+"</td>";



						            newRow+="</tr>";

						            
						           
						            $(newRow).appendTo("#tablabuscacliente tbody");
						        });

                                                             
                    }
              });
}


$("#inputidclientebusca").keyup(function() {
	if ($("#"+this.id).val().match(/^[0-9]+$/)) {

$('#spanidclientebusca').removeClass('is-invalid-input');
  	obtenclienteporid(this.value);
}else{
	 borrar();
	 $('#spanidclientebusca').addClass('is-invalid-input');
}
});

function obtenclienteporid(id){
	$.ajax({
                    type: "POST",
                    url: "consultaclientes.php",
                    data: "function=clientebusca&id="+id,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar1").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#loadingbuscar1").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          borrar();
						          return false;
						        }
						        if(data === "null"){
						          borrar();
						          return false;
						        }
						        //alert(data);
						        //obJbuscliente = JSON.parse(data);
						        obtenerpegarobj(JSON.parse(data));

                                                             
                    }
              });
}

function borrar(){
	$("#TipoCliente").val("");
	cambiacartas();
	document.getElementById("nomsol").value='';
        document.getElementById("segnomsol").value='';
        document.getElementById("apepasol").value='';
        document.getElementById("apemasol").value='';
        document.getElementById("rfc1").value='';
        document.getElementById("telsol1").value='';
        document.getElementById("movsol1").value='';
        document.getElementById("mailsol").value='';
        document.getElementById("dirsol").value='';
        document.getElementById("dirnumsol").value='';
        document.getElementById("cpsol").value='';
        
       
        $("#edosol option").remove();
        $("#colsol option").remove();
        $("#cdsol option").remove();
        $("#textfield5 option").remove();
        
        document.getElementById("colsol").value='';
        document.getElementById("lugnacsol").value='';
        document.getElementById("edosol").value='';
        document.getElementById("cdsol").value='';
        document.getElementById("textfield5").value='';
        document.getElementById("curpsol").value='';
        document.getElementById("sexsol").value='';
        document.getElementById("fechnacsol").value="";
        
        document.getElementById("edsol").value='';
        document.getElementById("nacsol").value='';
        document.getElementById("depensol").value='';
        document.getElementById("acdomsol").value='';
        document.getElementById("anosol").value='';
        document.getElementById("arraisol").value='';
        document.getElementById("arraisolanios").value='';
        document.getElementById("vivsol").value='';
        vivsol();
        document.getElementById("vivsolesp").value='';
        document.getElementById("civilsol").value='';
        civilsol();
        document.getElementById("autosol").value='';
        autosol();
        document.getElementById("marcasol").value='';
        document.getElementById("inmusol").value='';
        document.getElementById("actempresarial").value='';
        actempresarial();
        document.getElementById("puestosol").value='';

        document.getElementById("depasol").value='';
        
       
            document.getElementById("desdesol").value="";
        
        document.getElementById("desdesolanios").value='';
        document.getElementById("compasol").value='';
        document.getElementById("compatelsol1").value='';
        document.getElementById("compatelsolext").value='';
        document.getElementById("giroprof").value='';
        document.getElementById("noempleados").value='';

        document.getElementById("domneg").value='';
        document.getElementById("numdomneg").value='';
        document.getElementById("cpneg").value='';

        $("#colneg option").remove();
        $("#estneg option").remove();
        $("#munneg option").remove();
        $("#cdneg option").remove();
           
        document.getElementById("nomref1").value='';
        document.getElementById("nomref1b").value='';
        document.getElementById("nomref1c").value='';
        document.getElementById("parenref1").value='';
        document.getElementById("telref11").value='';
        document.getElementById("refperdir").value='';
        document.getElementById("refpernumdir").value='';
        document.getElementById("refpercp").value='';
        $("#refpercol option").remove();
        $("#refperest option").remove();
        $("#refpermun option").remove();
        $("#refpercd option").remove();
           
        document.getElementById("nomref2").value='';
        document.getElementById("nomref2b").value='';
        document.getElementById("nomref2c").value='';
        document.getElementById("parenref2").value='';
        document.getElementById("telref12").value='';
        document.getElementById("refperdir2").value='';
        document.getElementById("refpernumdir2").value='';
        document.getElementById("refpercp2").value='';
        $("#refpercol2 option").remove();
        $("#refperest2 option").remove();
        $("#refpermun2 option").remove();
        $("#refpercd2 option").remove();
           
        document.getElementById("refbanc").value='';
        document.getElementById("numcuebanc").value='';
        document.getElementById("sucbanc1").value='';
        
        
        document.getElementById("aperbanc1d").value="";
        
        document.getElementById("refbanc2").value='';
        document.getElementById("numcuebanc2").value='';
        document.getElementById("sucbanc2").value='';

        
        
        document.getElementById("aperbanc2d").value="";
        
        document.getElementById("cargdir").value='';
        document.getElementById("nocuentcd").value='';
        document.getElementById("refcomemp1").value='';
        document.getElementById("telrefcom11").value='';
        document.getElementById("antirefcom1").value='';
        document.getElementById("refcomdir").value='';
        document.getElementById("refcomnumdir").value='';
        document.getElementById("refcomcp").value='';
        $("#refcomcol option").remove();
        $("#refcomest option").remove();
        $("#refcommun option").remove();
        $("#refcomcd option").remove();
           
        document.getElementById("refcomemp2").value='';
        document.getElementById("telrefcom22").value='';
        document.getElementById("antirefcom2").value='';
        document.getElementById("refcomdir2").value='';
        document.getElementById("refcomnumdir2").value='';
        document.getElementById("refcomcp2").value='';
        $("#refcomcol2 option").remove();
        $("#refcomest2 option").remove();
        $("#refcommun2 option").remove();
        $("#refcomcd2 option").remove();
            
        document.getElementById("conyunom").value='';
        document.getElementById("conyuape1").value='';
        document.getElementById("conyuape2").value='';
        document.getElementById("compaconyu").value='';
        document.getElementById("puestconyu").value='';

        document.getElementById("benesol3").value='';
        document.getElementById("benesol1").value='';
        document.getElementById("benesol2").value='';
        document.getElementById("textfield48").value='';
        $("#textfield49 option").remove();
             
        document.getElementById("textfield50").value='';
        document.getElementById("textfield51").value='';

        document.getElementById("textfield52").value='';
        document.getElementById("textfield53").value='';
        document.getElementById("textfield54").value='';
        document.getElementById("textfield55").value='';
        document.getElementById("textfield56").value='';
        
        
        document.getElementById("textfield57").value="";
        $("#textfield58 option").remove();
        $("#textfield59 option").remove();
            
        document.getElementById("textfield60").value='';
        estcivbene();
        document.getElementById("textfield61").value='';
        document.getElementById("textfield62").value='';
        document.getElementById("nomrazsoc2").value='';
        document.getElementById("telsol2").value='';
        document.getElementById("rfcsol1").value='';

        document.getElementById("dirsolpm").value='';
        document.getElementById("dirnumsolpm").value='';
        document.getElementById("mailsol2").value='';
        $("#colsolpm option").remove();
        $("#cdsolpm option").remove();
        $("#edosolpm option").remove();
            
        document.getElementById("cpsolpm").value='';

        document.getElementById("actprinc").value='';
        document.getElementById("cantperson").value='';
        
        document.getElementById("inicoper1").value="";
        
        
        document.getElementById("inicoper13").value="";
        
        
        document.getElementById("antemp").value='';
        document.getElementById("apodsusc").value='';
        document.getElementById("nomconemp").value='';

        document.getElementById("segnomconemp").value='';
        document.getElementById("apepaconemp").value='';
        document.getElementById("apemaconemp").value='';
        document.getElementById("datobdir22").value='';
        $("#datobcol23 option").remove();
        $("#colsol22 option").remove();
        $("#cdsol22 option").remove();
           

        document.getElementById("lugnacsol22").value='';
        document.getElementById("rfcconemp1").value='';
        document.getElementById("telconemp1").value='';
        document.getElementById("mailconemp").value='';
        document.getElementById("puesconemp").value='';
        document.getElementById("accionista1").value='';
        document.getElementById("accionista1b").value='';
        document.getElementById("accionista1c").value='';
        document.getElementById("rfcaccion1").value='';

        document.getElementById("porcent1").value='';
        document.getElementById("accionista2").value='';
        document.getElementById("accionista2b").value='';
        document.getElementById("accionista2c").value='';
    
        document.getElementById("rfcaccion2").value='';
        document.getElementById("porcent2").value='';
        document.getElementById("accionista3").value='';
        document.getElementById("accionista3b").value='';
        document.getElementById("accionista3c").value='';
        document.getElementById("rfcaccion3").value='';
        document.getElementById("porcent3").value='';

        document.getElementById("accionista4").value='';
        document.getElementById("accionista4b").value='';
        document.getElementById("accionista4c").value='';
        document.getElementById("rfcaccion4").value='';
        document.getElementById("porcent4").value='';
        document.getElementById("accpermor1").value='';
        document.getElementById("accpermor1b").value='';
        document.getElementById("accpermor1c").value='';
        document.getElementById("rfcaccpermor1").value='';
        document.getElementById("permoracc1").value='';
        document.getElementById("accpermor2").value='';
        document.getElementById("accpermor2b").value='';
        document.getElementById("accpermor2c").value='';
        document.getElementById("rfcaccpermor2").value='';
        document.getElementById("permoracc2").value='';
        document.getElementById("statuscliente").innerHTML='Status: ';
        $('#statuscliente').removeClass('success');
        $('#statuscliente').removeClass('warning');
        $("#solrelacionadascliente tbody tr").remove();
        
}


function obtenerpegarobj(objeto){
	$("#TipoCliente").val(objeto.TipoCliente);
	cambiacartas();
	document.getElementById("nomsol").value=objeto.NombrePF;
        document.getElementById("segnomsol").value=objeto.SegNombrePF;
        document.getElementById("apepasol").value=objeto.ApPatPF;
        document.getElementById("apemasol").value=objeto.ApMatPF;
        document.getElementById("rfc1").value=objeto.RFCPF;
        document.getElementById("telsol1").value=objeto.TelefonoPF;
        document.getElementById("movsol1").value=objeto.MovilPF;
        document.getElementById("mailsol").value=objeto.EmailPF;
        document.getElementById("dirsol").value=objeto.DireccionPF;
        document.getElementById("dirnumsol").value=objeto.NumDireccionPF;
        document.getElementById("cpsol").value=objeto.CPPF;
        
        var cdd=document.getElementById("edosol");
        var recpostales = document.createElement("option");
                recpostales.text = objeto.EstadoPF;
                recpostales.value = objeto.EstadoPF;
                cdd.add(recpostales);

            cdd=document.getElementById("colsol");
            recpostales = document.createElement("option");
            recpostales.text = objeto.ColoniaPF;
            recpostales.value = objeto.ColoniaPF;
            cdd.add(recpostales);

            cdd=document.getElementById("cdsol");
            recpostales = document.createElement("option");
            recpostales.text = objeto.CiudadPF;
            recpostales.value = objeto.CiudadPF;
            cdd.add(recpostales);

            cdd=document.getElementById("textfield5");
            recpostales = document.createElement("option");
            recpostales.text = objeto.MunicipioPF;
            recpostales.value = objeto.MunicipioPF;
            cdd.add(recpostales);
              
        document.getElementById("colsol").value=objeto.ColoniaPF;
        document.getElementById("lugnacsol").value=objeto.LugNacimientoPF;
        document.getElementById("edosol").value=objeto.EstadoPF;
        document.getElementById("cdsol").value=objeto.CiudadPF;
        document.getElementById("textfield5").value=objeto.MunicipioPF;
        document.getElementById("curpsol").value=objeto.CURPPF;
        document.getElementById("curpsol").readonly=true;
        document.getElementById("sexsol").value=objeto.SexoPF;
        
        if(objeto.FechNacimientoPF=="0000-00-00"){
            document.getElementById("fechnacsol").value="";
        }else{
            document.getElementById("fechnacsol").value=objeto.FechNacimientoPF;
        }
        document.getElementById("edsol").value=objeto.Edad;
        document.getElementById("nacsol").value=objeto.NacionalidadPF;
        document.getElementById("depensol").value=objeto.NumDependientesPF;
        document.getElementById("acdomsol").value=objeto.AcreditaDomPF;
        document.getElementById("anosol").value=objeto.RecidirCiudadPF;
        document.getElementById("arraisol").value=objeto.ArraigoDomPF;
        document.getElementById("arraisolanios").value=objeto.ArraigoAniosDomPF;
        document.getElementById("vivsol").value=objeto.ViviendaPF;
        vivsol();

        document.getElementById("vivsolesp").value=objeto.EspViviendaPF;
        document.getElementById("civilsol").value=objeto.EstCivilPF;
        civilsol();
        document.getElementById("autosol").value=objeto.AutoPropioPF;
        autosol();
        document.getElementById("marcasol").value=objeto.EspAuto;
        document.getElementById("inmusol").value=objeto.InmueblePF;
        document.getElementById("actempresarial").value=objeto.ActividadEmpresarial;
        actempresarial();
        document.getElementById("puestosol").value=objeto.PuestoPF;

        document.getElementById("depasol").value=objeto.DepartamentoPF;
        
        if(objeto.DesdeEmpPF=="0000-00-00"){
            document.getElementById("desdesol").value="";
        }else{
            document.getElementById("desdesol").value=objeto.DesdeEmpPF;
        }
        document.getElementById("desdesolanios").value=objeto.DesdeAniosEmpPF;
        document.getElementById("compasol").value=objeto.CompaniaPF;
        document.getElementById("compatelsol1").value=objeto.TelefonoEmpPF;
        document.getElementById("compatelsolext").value=objeto.ExtensionEmpPF;
        document.getElementById("giroprof").value=objeto.GiroPF;
        document.getElementById("noempleados").value=objeto.NumEmpleadosPF;

        document.getElementById("domneg").value=objeto.DomicilioNegPF;
        document.getElementById("numdomneg").value=objeto.NumDomicilioNegPF;
        document.getElementById("cpneg").value=objeto.CPNegPF;

            cdd=document.getElementById("colneg");
            recpostales = document.createElement("option");
            recpostales.text = objeto.ColoniaNegPF;
            recpostales.value = objeto.ColoniaNegPF;
            cdd.add(recpostales);

        document.getElementById("colneg").value=objeto.ColoniaNegPF;
            cdd=document.getElementById("estneg");
            recpostales = document.createElement("option");
            recpostales.text = objeto.EstadoNegPF;
            recpostales.value = objeto.EstadoNegPF;
            cdd.add(recpostales);

        document.getElementById("estneg").value=objeto.EstadoNegPF;
            cdd=document.getElementById("munneg");
            recpostales = document.createElement("option");
            recpostales.text = objeto.MunicipioNegPF;
            recpostales.value = objeto.MunicipioNegPF;
            cdd.add(recpostales);

        document.getElementById("munneg").value=objeto.MunicipioNegPF;
            cdd=document.getElementById("cdneg");
            recpostales = document.createElement("option");
            recpostales.text = objeto.CiudadNegPF;
            recpostales.value = objeto.CiudadNegPF;
            cdd.add(recpostales);

        document.getElementById("cdneg").value=objeto.CiudadNegPF;


        document.getElementById("nomref1").value=objeto.RefPerNom1PF;
        document.getElementById("nomref1b").value=objeto.RefPerApPat1PF;
        document.getElementById("nomref1c").value=objeto.RefPerApMat1PF;
        document.getElementById("parenref1").value=objeto.RefPerParentesco1PF;
        document.getElementById("telref11").value=objeto.RefPerTelefono1PF;
        document.getElementById("refperdir").value=objeto.RefPerDirPF;
        document.getElementById("refpernumdir").value=objeto.RefPerNumDirPF;
        document.getElementById("refpercp").value=objeto.RefPerCPPF;
            cdd=document.getElementById("refpercol");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerColPF;
            recpostales.value = objeto.RefPerColPF;
            cdd.add(recpostales);
        document.getElementById("refpercol").value=objeto.RefPerColPF;
            cdd=document.getElementById("refperest");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerEstPF;
            recpostales.value = objeto.RefPerEstPF;
            cdd.add(recpostales);
        document.getElementById("refperest").value=objeto.RefPerEstPF;
            cdd=document.getElementById("refpermun");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerMunPF;
            recpostales.value = objeto.RefPerMunPF;
            cdd.add(recpostales);
        document.getElementById("refpermun").value=objeto.RefPerMunPF;
            cdd=document.getElementById("refpercd");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerCdPF;
            recpostales.value = objeto.RefPerCdPF;
            cdd.add(recpostales);
        document.getElementById("refpercd").value=objeto.RefPerCdPF;



        document.getElementById("nomref2").value=objeto.RefPerNom2PF;
        document.getElementById("nomref2b").value=objeto.RefPerApPat2PF;
        document.getElementById("nomref2c").value=objeto.RefPerApMat2PF;
        document.getElementById("parenref2").value=objeto.RefPerParentesco2PF;
        document.getElementById("telref12").value=objeto.RefPerTelefono2PF;
        document.getElementById("refperdir2").value=objeto.RefPerDirPF2;
        document.getElementById("refpernumdir2").value=objeto.RefPerNumDirPF2;
        document.getElementById("refpercp2").value=objeto.RefPerCPPF2;
            cdd=document.getElementById("refpercol2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerColPF2;
            recpostales.value = objeto.RefPerColPF2;
            cdd.add(recpostales);
        document.getElementById("refpercol2").value=objeto.RefPerColPF2;
            cdd=document.getElementById("refperest2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerEstPF2;
            recpostales.value = objeto.RefPerEstPF2;
            cdd.add(recpostales);
        document.getElementById("refperest2").value=objeto.RefPerEstPF2;
            cdd=document.getElementById("refpermun2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerMunPF2;
            recpostales.value = objeto.RefPerMunPF2;
            cdd.add(recpostales);
        document.getElementById("refpermun2").value=objeto.RefPerMunPF2;
            cdd=document.getElementById("refpercd2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefPerCdPF2;
            recpostales.value = objeto.RefPerCdPF2;
            cdd.add(recpostales);
        document.getElementById("refpercd2").value=objeto.RefPerCdPF2;

        document.getElementById("refbanc").value=objeto.Banco1;
        document.getElementById("selectorbanco1").value=objeto.TipoCuenta1;

        document.getElementById("numcuebanc").value=objeto.CuentaBanc1;
        document.getElementById("sucbanc1").value=objeto.SucursalBanc1;
        
        if(objeto.FechaApertura1=="0000-00-00"){
            document.getElementById("aperbanc1d").value="";
        }else{
            document.getElementById("aperbanc1d").value=objeto.FechaApertura1;
        }
        document.getElementById("refbanc2").value=objeto.Banco2;
        document.getElementById("selectorbanco2").value=objeto.TipoCuenta2;
        document.getElementById("numcuebanc2").value=objeto.CuentaBanc2;
        document.getElementById("sucbanc2").value=objeto.SucursalBanc2;

        
        if(objeto.FechaApertura2=="0000-00-00"){
            document.getElementById("aperbanc2d").value="";
        }else{
           document.getElementById("aperbanc2d").value=objeto.FechaApertura2; 
        }
        document.getElementById("cargdir").value=objeto.CarDirBanco;
        document.getElementById("nocuentcd").value=objeto.CLABE;
        document.getElementById("refcomemp1").value=objeto.RefComEmp1;
        document.getElementById("telrefcom11").value=objeto.RefComTel1;
        document.getElementById("antirefcom1").value=objeto.RefComAnt1;
        document.getElementById("refcomdir").value=objeto.RefComDir;
        document.getElementById("refcomnumdir").value=objeto.RefComNumDir;
        document.getElementById("refcomcp").value=objeto.RefComCP;
            cdd=document.getElementById("refcomcol");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComCol;
            recpostales.value = objeto.RefComCol;
            cdd.add(recpostales);
        document.getElementById("refcomcol").value=objeto.RefComCol;
            cdd=document.getElementById("refcomest");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComEst;
            recpostales.value = objeto.RefComEst;
            cdd.add(recpostales);
        document.getElementById("refcomest").value=objeto.RefComEst;
            cdd=document.getElementById("refcommun");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComMun;
            recpostales.value = objeto.RefComMun;
            cdd.add(recpostales);
        document.getElementById("refcommun").value=objeto.RefComMun;
            cdd=document.getElementById("refcomcd");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComCd;
            recpostales.value = objeto.RefComCd;
            cdd.add(recpostales);
        document.getElementById("refcomcd").value=objeto.RefComCd;





        document.getElementById("refcomemp2").value=objeto.RefComEmp2;
        document.getElementById("telrefcom22").value=objeto.RefComTel2;
        document.getElementById("antirefcom2").value=objeto.RefComAnt2;
        document.getElementById("refcomdir2").value=objeto.RefComDir2;
        document.getElementById("refcomnumdir2").value=objeto.RefComNumDir2;
        document.getElementById("refcomcp2").value=objeto.RefComCP2;
            cdd=document.getElementById("refcomcol2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComCol2;
            recpostales.value = objeto.RefComCol2;
            cdd.add(recpostales);
        document.getElementById("refcomcol2").value=objeto.RefComCol2;
            cdd=document.getElementById("refcomest2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComEst2;
            recpostales.value = objeto.RefComEst2;
            cdd.add(recpostales);
        document.getElementById("refcomest2").value=objeto.RefComEst2;
            cdd=document.getElementById("refcommun2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComMun2;
            recpostales.value = objeto.RefComMun2;
            cdd.add(recpostales);
        document.getElementById("refcommun2").value=objeto.RefComMun2;
            cdd=document.getElementById("refcomcd2");
            recpostales = document.createElement("option");
            recpostales.text = objeto.RefComCd2;
            recpostales.value = objeto.RefComCd2;
            cdd.add(recpostales);
        document.getElementById("refcomcd2").value=objeto.RefComCd2;


        document.getElementById("conyunom").value=objeto.ConyugeNom;
        document.getElementById("conyuape1").value=objeto.ConyugeApPat;
        document.getElementById("conyuape2").value=objeto.ConyugeApMat;
        document.getElementById("compaconyu").value=objeto.ConyugeCompania;
        document.getElementById("puestconyu").value=objeto.ConyugePuesto;

        document.getElementById("benesol3").value=objeto.BeneficiarioNom;
        document.getElementById("benesol1").value=objeto.BeneficiarioApPat;
        document.getElementById("benesol2").value=objeto.BeneficiarioApMat;
        document.getElementById("textfield48").value=objeto.BeneficiarioDom;
             cdd=document.getElementById("textfield49");
            recpostales = document.createElement("option");
            recpostales.text = objeto.BeneficiarioCol;
            recpostales.value = objeto.BeneficiarioCol;
            cdd.add(recpostales);
        document.getElementById("textfield49").value=objeto.BeneficiarioCol;
        document.getElementById("textfield50").value=objeto.BeneficiarioCP;
        document.getElementById("textfield51").value=objeto.BeneficiarioPais;

        document.getElementById("textfield52").value=objeto.BeneficiarioTel;
        document.getElementById("textfield53").value=objeto.BeneficiarioCURP;
        document.getElementById("textfield54").value=objeto.BeneficiarioRFC;
        document.getElementById("textfield55").value=objeto.BeneficiarioParent;
        document.getElementById("textfield56").value=objeto.BeneficiarioPorciento;
        
        if(objeto.BeneficiarioFechNac=="0000-00-00"){
            document.getElementById("textfield57").value="";
        }else{
          document.getElementById("textfield57").value=objeto.BeneficiarioFechNac;  
        }
            cdd=document.getElementById("textfield58");
            recpostales = document.createElement("option");
            recpostales.text = objeto.BeneficiarioMun;
            recpostales.value = objeto.BeneficiarioMun;
            cdd.add(recpostales);
        document.getElementById("textfield58").value=objeto.BeneficiarioMun;
            cdd=document.getElementById("textfield59");
            recpostales = document.createElement("option");
            recpostales.text = objeto.BeneficiarioEstado;
            recpostales.value = objeto.BeneficiarioEstado;
            cdd.add(recpostales);
        document.getElementById("textfield59").value=objeto.BeneficiarioEstado;
        document.getElementById("textfield60").value=objeto.BeneficiarioEstCivil;
        estcivbene();
        document.getElementById("textfield61").value=objeto.BeneficiarioSocConyugal;
        document.getElementById("textfield62").value=objeto.BeneficiarioOcupacion;
        document.getElementById("nomrazsoc2").value=objeto.RazonSocial;
        document.getElementById("telsol2").value=objeto.TelPM;
        document.getElementById("rfcsol1").value=objeto.RFCPM;
        document.getElementById("rfcsol1").readonly=true;

        document.getElementById("dirsolpm").value=objeto.DireccionPM;
        document.getElementById("dirnumsolpm").value=objeto.NumDireccionPM;
        document.getElementById("mailsol2").value=objeto.EmailPM;
            cdd=document.getElementById("colsolpm");
            recpostales = document.createElement("option");
            recpostales.text = objeto.ColoniaPM;
            recpostales.value = objeto.ColoniaPM;
            cdd.add(recpostales);
        document.getElementById("colsolpm").value=objeto.ColoniaPM;
            cdd=document.getElementById("cdsolpm");
            recpostales = document.createElement("option");
            recpostales.text = objeto.CiudadPM;
            recpostales.value = objeto.CiudadPM;
            cdd.add(recpostales);
        document.getElementById("cdsolpm").value=objeto.CiudadPM;
            cdd=document.getElementById("edosolpm");
            recpostales = document.createElement("option");
            recpostales.text = objeto.EstadoPM;
            recpostales.value = objeto.EstadoPM;
            cdd.add(recpostales);
        document.getElementById("edosolpm").value=objeto.EstadoPM;
        document.getElementById("cpsolpm").value=objeto.CPPM;

        document.getElementById("actprinc").value=objeto.ActPrinPM;
        document.getElementById("cantperson").value=objeto.CantPersonalPM;
        if(objeto.InOperacionesPM=="0000-00-00"){
            document.getElementById("inicoper1").value="";
        }else{
            document.getElementById("inicoper1").value=objeto.InOperacionesPM;
        }
        if(objeto.ConstEmpresaPM=="0000-00-00"){
            document.getElementById("inicoper13").value="";
        }else{
            document.getElementById("inicoper13").value=objeto.ConstEmpresaPM;
        }
        
        document.getElementById("antemp").value=objeto.AntiguedadPM;
        document.getElementById("apodsusc").value=objeto.ApoderadoPM;
        document.getElementById("nomconemp").value=objeto.ContEmpNombre;

        document.getElementById("segnomconemp").value=objeto.ContEmpSegNombre;
        document.getElementById("apepaconemp").value=objeto.ContEmpApPat;
        document.getElementById("apemaconemp").value=objeto.ContEmpApMat;
        document.getElementById("datobdir22").value=objeto.ContEmpDireccion;
            cdd=document.getElementById("datobcol23");

            recpostales = document.createElement("option");
            recpostales.text = objeto.ContEmpColonia;
            recpostales.value = objeto.ContEmpColonia;
            cdd.add(recpostales);
        document.getElementById("datobcol23").value=objeto.ContEmpColonia;
            cdd=document.getElementById("colsol22");
            recpostales = document.createElement("option");
            recpostales.text = objeto.ContEmpCiudad;
            recpostales.value = objeto.ContEmpCiudad;
            cdd.add(recpostales);
        document.getElementById("colsol22").value=objeto.ContEmpCiudad;
            cdd=document.getElementById("cdsol22");
            recpostales = document.createElement("option");
            recpostales.text = objeto.ContEmpEstado;
            recpostales.value = objeto.ContEmpEstado;
            cdd.add(recpostales);
        document.getElementById("cdsol22").value=objeto.ContEmpEstado;

        document.getElementById("lugnacsol22").value=objeto.ContEmpCP;
        document.getElementById("rfcconemp1").value=objeto.ContEmpRFC;
        document.getElementById("telconemp1").value=objeto.ContEmpTel;
        document.getElementById("mailconemp").value=objeto.ContEmpEmail;
        document.getElementById("puesconemp").value=objeto.ContEmpPuesto;
        document.getElementById("accionista1").value=objeto.Acc1Nombre;
        document.getElementById("accionista1b").value=objeto.Acc1ApPat;
        document.getElementById("accionista1c").value=objeto.Acc1ApMat;
        document.getElementById("rfcaccion1").value=objeto.Acc1RFC;

        document.getElementById("porcent1").value=objeto.Acc1Porcentaje;
        document.getElementById("accionista2").value=objeto.Acc2Nombre;
        document.getElementById("accionista2b").value=objeto.Acc2ApPat;
        document.getElementById("accionista2c").value=objeto.Acc2ApMat;
    
        document.getElementById("rfcaccion2").value=objeto.Acc2RFC;
        document.getElementById("porcent2").value=objeto.Acc2Porcentaje;
        document.getElementById("accionista3").value=objeto.Acc3Nombre;
        document.getElementById("accionista3b").value=objeto.Acc3ApPat;
        document.getElementById("accionista3c").value=objeto.Acc3ApMat;
        document.getElementById("rfcaccion3").value=objeto.Acc3RFC;
        document.getElementById("porcent3").value=objeto.Acc3Porcentaje;

        document.getElementById("accionista4").value=objeto.Acc4Nombre;
        document.getElementById("accionista4b").value=objeto.Acc4ApPat;
        document.getElementById("accionista4c").value=objeto.Acc4ApMat;
        document.getElementById("rfcaccion4").value=objeto.Acc4RFC;
        document.getElementById("porcent4").value=objeto.Acc4Porcentaje;
        document.getElementById("accpermor1").value=objeto.Acc5Nombre;
        document.getElementById("accpermor1b").value=objeto.Acc5ApPat;
        document.getElementById("accpermor1c").value=objeto.Acc5ApMat;
        document.getElementById("rfcaccpermor1").value=objeto.Acc5RFC;
        document.getElementById("permoracc1").value=objeto.Acc5Porcentaje;
        document.getElementById("accpermor2").value=objeto.Acc6Nombre;
        document.getElementById("accpermor2b").value=objeto.Acc6ApPat;
        document.getElementById("accpermor2c").value=objeto.Acc6ApMat;
        document.getElementById("rfcaccpermor2").value=objeto.Acc6RFC;
        document.getElementById("permoracc2").value=objeto.Acc6Porcentaje;
        document.getElementById("statuscliente").innerHTML='Status: '+objeto.Status;
        if(objeto.Status=="Incompleto"){
        $('#statuscliente').removeClass('callout success');
        $('#statuscliente').addClass('callout warning');

        }else if(objeto.Status=="Finalizado"){

        $('#statuscliente').removeClass('callout warning');
        $('#statuscliente').addClass('callout success');
        }
        solicitudesdelcliente(objeto.id);
}

function solicitudesdelcliente(cliente){
	$.ajax({
                    type: "POST",
                    url: "consultaclientes.php",
                    data: "function=solicitudesdelcliente&cliente="+cliente,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#loadingbuscar1").html("<p align='center'><img src='images/cargando.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#loadingbuscar1").empty();
						        if(data.indexOf("Error") !== -1){
						          alert(data);
						          return false;
						        }
						        if(data === "null"){
						          borrar();
						          return false;
						        }
						         $("#solrelacionadascliente tbody tr").remove();
						        //alert(data);
						        objetobusponom = JSON.parse(data);
						        
						        $.each(objetobusponom, function(i,solicitud){
						            var newRow =
						            "<tr>"
						            +"<td> <input onclick='obtensolicitudporiddsdcliente(this.id)' data-close aria-label='Close reveal' class='button' type='button' name='"+solicitud.Id+"' id='"+solicitud.Id+"' value='"+solicitud.Id+"'></td>";


						            newRow+="<td>"+solicitud.TipoCredito+"</td>";

						            newRow+="<td>"+solicitud.Status+"</td>";

						            newRow+="<td>"+solicitud.StatusValidacion+"</td>";



						            newRow+="</tr>";

						            
						           
						            $(newRow).appendTo("#solrelacionadascliente tbody");
						        });
                                                             
                    }
              });
}

function obtensolicitudporiddsdcliente(id){
	obtensolicitudporid(id);
	$("#panel2vitem").click();
}

$("#selectconsultaclientes").change(function(event) {
	if(this.value==""){
			alert("Error -- ¡¡Selecciona una opcion para buscar!!");
			$("#spanidclientebusca").hide();
			$("#inputidclientebusca").hide();

			$("#spannomclientebusca").hide();
			$("#spanap1clientebusca").hide();
			$("#spanap2clientebusca").hide();
			$("#inputnomclientebusca").hide();
			$("#inputap1clientebusca").hide();
			$("#inputap2clientebusca").hide();
			$("#botonap2clientebusca").hide();

			$("#spancurpclientebusca").hide();
			$("#inputcurpclientebusca").hide();

			$("#spanrazsocclientebusca").hide();
			$("#inputrazsocclientebusca").hide();
			$("#botonrazsocclientebusca").hide();


			$("#spanrfcclientebusca").hide();
			$("#inputrfcclientebusca").hide();

	}else{
		
		if(this.value==1){
			$("#spanidclientebusca").show();
			$("#inputidclientebusca").show();

			$("#spannomclientebusca").hide();
			$("#spanap1clientebusca").hide();
			$("#spanap2clientebusca").hide();
			$("#inputnomclientebusca").hide();
			$("#inputap1clientebusca").hide();
			$("#inputap2clientebusca").hide();
			$("#botonap2clientebusca").hide();

			$("#spancurpclientebusca").hide();
			$("#inputcurpclientebusca").hide();

			$("#spanrazsocclientebusca").hide();
			$("#inputrazsocclientebusca").hide();
			$("#botonrazsocclientebusca").hide();

			$("#spanrfcclientebusca").hide();
			$("#inputrfcclientebusca").hide();
		}
		if(this.value==2){
			$("#spannomclientebusca").show();
			$("#spanap1clientebusca").show();
			$("#spanap2clientebusca").show();
			$("#inputnomclientebusca").show();
			$("#inputap1clientebusca").show();
			$("#inputap2clientebusca").show();
			$("#botonap2clientebusca").show();

			$("#spanidclientebusca").hide();
			$("#inputidclientebusca").hide();

			$("#spancurpclientebusca").hide();
			$("#inputcurpclientebusca").hide();

			$("#spanrazsocclientebusca").hide();
			$("#inputrazsocclientebusca").hide();
			$("#botonrazsocclientebusca").hide();

			$("#spanrfcclientebusca").hide();
			$("#inputrfcclientebusca").hide();

		}
		if(this.value==3){
			$("#spancurpclientebusca").show();
			$("#inputcurpclientebusca").show();

			$("#spanidclientebusca").hide();
			$("#inputidclientebusca").hide();

			$("#spannomclientebusca").hide();
			$("#spanap1clientebusca").hide();
			$("#spanap2clientebusca").hide();
			$("#inputnomclientebusca").hide();
			$("#inputap1clientebusca").hide();
			$("#inputap2clientebusca").hide();
			$("#botonap2clientebusca").hide();

			$("#spanrazsocclientebusca").hide();
			$("#inputrazsocclientebusca").hide();
			$("#botonrazsocclientebusca").hide();

			$("#spanrfcclientebusca").hide();
			$("#inputrfcclientebusca").hide();



		}
		if(this.value==4){
			$("#spanrazsocclientebusca").show();
			$("#inputrazsocclientebusca").show();
			$("#botonrazsocclientebusca").show();

			$("#spanidclientebusca").hide();
			$("#inputidclientebusca").hide();

			$("#spannomclientebusca").hide();
			$("#spanap1clientebusca").hide();
			$("#spanap2clientebusca").hide();
			$("#inputnomclientebusca").hide();
			$("#inputap1clientebusca").hide();
			$("#inputap2clientebusca").hide();
			$("#botonap2clientebusca").hide();

			$("#spancurpclientebusca").hide();
			$("#inputcurpclientebusca").hide();

			$("#spanrfcclientebusca").hide();
			$("#inputrfcclientebusca").hide();

		}
		if(this.value==5){
			$("#spanrfcclientebusca").show();
			$("#inputrfcclientebusca").show();

			$("#spanidclientebusca").hide();
			$("#inputidclientebusca").hide();

			$("#spannomclientebusca").hide();
			$("#spanap1clientebusca").hide();
			$("#spanap2clientebusca").hide();
			$("#inputnomclientebusca").hide();
			$("#inputap1clientebusca").hide();
			$("#inputap2clientebusca").hide();
			$("#botonap2clientebusca").hide();

			$("#spancurpclientebusca").hide();
			$("#inputcurpclientebusca").hide();

			$("#spanrazsocclientebusca").hide();
			$("#inputrazsocclientebusca").hide();
			$("#botonrazsocclientebusca").hide();

		}
		
	}
});

function cambiacartas(){
	if(document.getElementById('TipoCliente').value==""){
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='none';
		document.getElementById('tabpanel7c').style.display='none';
		document.getElementById('tabpanel2c').style.display='none';
        document.getElementById('tabpanel3c').style.display='none';
	}else if(document.getElementById('TipoCliente').value=="Persona Fisica"){
		document.getElementById("pfa").style.display = "block";
		document.getElementById('tabpanel2c').style.display='block';
		document.getElementById('pm').style.display='none';
		document.getElementById('tabpanel7c').style.display='none';
        document.getElementById('tabpanel3c').style.display='block';
	}else if(document.getElementById('TipoCliente').value=="Persona Moral"){
		document.getElementById('tabpanel2c').style.display='none';
		document.getElementById('pfa').style.display='none';
		document.getElementById('pm').style.display='block';
		document.getElementById('tabpanel7c').style.display='block';
        document.getElementById('tabpanel3c').style.display='none';
        document.getElementById('tabpanel6c').style.display='none';
        document.getElementById('panel5c-label').style.display='block';
	}
	


}

$( "#TipoCliente" ).change(function() {
    cambiacartas();
    
  
});

$( "#vivsol" ).change(function() {
      vivsol();
});

function vivsol(){
    if(document.getElementById('vivsol').value==""){
        document.getElementById('divvivsolesp').style.display='none';
    }else if(document.getElementById('vivsol').value=="Otros especificar"){
        document.getElementById('divvivsolesp').style.display='block';
    }else {
        document.getElementById('divvivsolesp').style.display='none';
    }
}

$( "#civilsol" ).change(function() {
    civilsol();
    
  
});

function civilsol(){
    if(document.getElementById('civilsol').value==""){
        document.getElementById('tabpanel6c').style.display='none';
    }else if(document.getElementById('civilsol').value=="Casado Bienes Mancomunados" || document.getElementById('civilsol').value=="Casado Bienes Separados"){
        document.getElementById('tabpanel6c').style.display='block';
    }else {
        document.getElementById('tabpanel6c').style.display='none';
    }
}

$( "#autosol" ).change(function() {
    autosol();
});

function autosol(){
    if(document.getElementById('autosol').value==""){
        document.getElementById('especifiquemarca').style.display='none';
    }else if(document.getElementById('autosol').value=="Si"){
        document.getElementById('especifiquemarca').style.display='block';
    }else {
        document.getElementById('especifiquemarca').style.display='none';
    }
    
}

$( "#actempresarial" ).change(function() {
    actempresarial();
});

function actempresarial(){
    if(document.getElementById('actempresarial').value==""){
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        //document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
        
    }else if(document.getElementById('actempresarial').value=="Si"){
        document.getElementById('divgiroprof').style.display='block';
        document.getElementById('divnoempleados').style.display='block';
        //document.getElementById('divdomneg').style.display='block';
        document.getElementById('panel5c-label').style.display='block';
        
    }else {
        document.getElementById('divgiroprof').style.display='none';
        document.getElementById('divnoempleados').style.display='none';
        //document.getElementById('divdomneg').style.display='none';
        document.getElementById('panel5c-label').style.display='none';
        
    }
    
}

$( "#textfield60" ).change(function() {
    estcivbene();
});

function estcivbene(){
  if(document.getElementById("textfield60").value=="Casado"){
    document.getElementById("divtextfield61").style.display='block';
    
  }else{
    document.getElementById("divtextfield61").style.display='none';

  }
}
